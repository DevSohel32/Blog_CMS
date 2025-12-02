<?php
include 'layout/head.php';
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "layout/navBar.php";
?>


<link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.dataTables.min.css">
<div class="flex-1 flex flex-col">
  <!-- =========== navBar ======== -->
  <?php include "layout/header.php" ?>
  <!-- =========== navBar start ======== -->
  <main class="flex-1 p-6">
    <div class="space-y-6">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-3xl font-bold mb-2">User Management</h1>
          <p class="text-base-content/60">View and manage all users</p>
        </div>
        <button class="btn btn-primary" onclick="document.getElementById('addUserModal').showModal()">
          <i class="ri-user-add-line"></i> Add New User
        </button>
      </div>

      <?php include '../helper/Helper.php';

      $query = "SELECT * FROM users ORDER BY created_at DESC";
      $stmt = $conn->prepare($query);
      $stmt->execute();
      $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

      $data = [];
      $errors = [];

      if (isset($_POST['submit'])) {

        // Sanitize fields
        $name   = dataValidation($_POST['name']);
        $email  = dataValidation($_POST['email']);
        $role   = dataValidation($_POST['role']);
        $status = dataValidation($_POST['status']);

        // Validate name
        if (empty($name)) {
          $errors['name'] = 'Name is required';
        } else {
          $data['name'] = $name;
        }

        // Validate email
        if (empty($email)) {
          $errors['email'] = 'Email is required';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errors['email'] = 'Invalid email format';
        } else {
          $data['email'] = $email;
        }

        // Default values
        $data['role']   = $role ?: 'user';
        $data['status'] = $status ?: 'active';

        // FILE UPLOAD
        $data['avatar'] = null; // default

        if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === 0) {

          $avatarName    = $_FILES['avatar']['name'];
          $avatarTmpName = $_FILES['avatar']['tmp_name'];
          $avatarSize    = $_FILES['avatar']['size'];
          $avatarExt     = strtolower(pathinfo($avatarName, PATHINFO_EXTENSION));

          $allowedExt = ['jpg', 'jpeg', 'png'];

          // file size check
          if ($avatarSize > 5 * 1024 * 1024) {
            $errors['avatar'] = 'File size exceeds 5MB limit';
          }

          // extension check
          if (!in_array($avatarExt, $allowedExt)) {
            $errors['avatar'] = 'Invalid file type. Allowed: jpg, jpeg, png';
          }

          // If still no errors → upload file
          if (!isset($errors['avatar'])) {
            $prefix = ($data['role'] === 'admin') ? 'admin_' : 'user_';
            $newAvatarName = uniqid($prefix, true) . '.' . $avatarExt;
            $avatarUploadPath = '../assets/img_res/' . $newAvatarName;

            if (move_uploaded_file($avatarTmpName, $avatarUploadPath)) {
              $data['avatar'] =  $newAvatarName;
            } else {
              $errors['avatar'] = 'Failed to upload avatar';
            }
          }
        }

        // INSERT INTO DATABASE
        if (empty($errors)) {
          $passwordHash = password_hash('password123', PASSWORD_BCRYPT);
          $query = "INSERT INTO users 
(name,email, password, role, avatar, status, created_at) 
VALUES 
(:name, :email, :password, :role, :avatar, :status, NOW())";

          $stmt = $conn->prepare($query);
          $stmt->bindParam(':name', $data['name']);
          $stmt->bindParam(':email', $data['email']);
          $stmt->bindParam(':password', $passwordHash);
          $stmt->bindParam(':role', $data['role']);
          $stmt->bindParam(':avatar', $data['avatar']);
          $stmt->bindParam(':status', $data['status']);

          if ($stmt->execute()) {
            $_SESSION['success'] = 'New user added successfully';
          } else {
            $errors['error'] = 'Failed to add new user';
          }
        }
      } ?>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="card bg-base-100 shadow-lg rounded-xl">
          <div class="card-body">
            <div class="flex items-center gap-4">
              <div
                class="w-12 h-12 rounded-lg bg-blue-500/10 text-blue-500 flex items-center justify-center">
                <i class="ri-user-line text-2xl"></i>
              </div>
              <?php
              $totalUsers = count($users);
              $totalAdmins = count(array_filter($users, function ($user) {
                return $user['role'] === 'admin';
              }));
              $totalAuthor = count(array_filter($users, function ($user) {
                return $user['role'] === 'author';
              }));
              $totalActiveUser = count(array_filter($users, function ($user) {
                return $user['status'] === 'active';
              }));
              ?>



              <div>
                <p class="text-2xl font-bold"><?= $totalUsers ?></p>
                <p class="text-sm text-base-content/60">Total Users</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card bg-base-100 shadow-lg rounded-xl">
          <div class="card-body">
            <div class="flex items-center gap-4">
              <div
                class="w-12 h-12 rounded-lg bg-green-500/10 text-green-500 flex items-center justify-center">
                <i class="ri-user-star-line text-2xl"></i>
              </div>
              <div>
                <p class="text-2xl font-bold"><?= $totalAuthor ?></p>
                <p class="text-sm text-base-content/60">Authors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card bg-base-100 shadow-lg rounded-xl">
          <div class="card-body">
            <div class="flex items-center gap-4">
              <div
                class="w-12 h-12 rounded-lg bg-purple-500/10 text-purple-500 flex items-center justify-center">
                <i class="ri-shield-user-line text-2xl"></i>
              </div>
              <div>
                <p class="text-2xl font-bold"><?= $totalAdmins ?></p>
                <p class="text-sm text-base-content/60">
                  Admins
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card bg-base-100 shadow-lg rounded-xl">
          <div class="card-body">
            <div class="flex items-center gap-4">
              <div
                class="w-12 h-12 rounded-lg bg-red-500/10 text-red-500 flex items-center justify-center">
                <i class="ri-user-forbid-line text-2xl"></i>
              </div>
              <div>
                <p class="text-2xl font-bold"><?= $totalActiveUser ?></p>
                <p class="text-sm text-base-content/60">Active User</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card bg-base-100 shadow-lg rounded-xl">
        <div class="card-body">
          <div class="flex flex-wrap gap-4">
            <div class="form-control flex-1 min-w-64">
              <div class="relative">
                <input
                  placeholder="Search users..."
                  class="input input-bordered w-full pl-10"
                  type="text" /><i
                  class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-base-content/50"></i>
              </div>
            </div>
            <select class="select select-bordered whitespace-nowrap">
              <option>All Roles</option>
              <option>User</option>
              <option>Author</option>
              <option>Admin</option>
            </select><select class="select select-bordered whitespace-nowrap">
              <option>All Status</option>
              <option>Active</option>
              <option>Suspended</option>
            </select>
          </div>
        </div>
      </div>
      <div class="card bg-base-100 shadow-lg rounded-xl">
        <div class="card-body">
          <div class="overflow-x-auto">
            <table class="table table-zebra">
              <thead>
                <tr>
                  <th>User</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Joined</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="tableData">
                <?php foreach ($users as $user): ?>
                  <tr data-id="<?= $user['id'] ?>">
                    <td>
                      <div class="flex items-center gap-3">
                        <div class="avatar">
                          <div class="w-10 h-10 rounded-full">
                            <?php
                            $avatarPath = !empty($user['avatar'])
                              ? "../assets/img_res/{$user['avatar']}"
                              : "../assets/img_res/7ae1a804af8e025700424b5640eba190.jpg";
                            ?>

                            <img alt="<?= $user['name']; ?>" src="<?= $avatarPath; ?>">
                          </div>
                        </div>
                        <span class="font-medium"><?= $user['name']; ?></span>
                      </div>
                    </td>
                    <td><?= $user['email']; ?></td>
                    <td>
                      <select class="select select-sm select-bordered role-change" data-id="<?= $user['id']; ?>">
                        <option value="user" <?= $user['role'] === 'user' ? 'selected' : '' ?>>User</option>
                        <option value="author" <?= $user['role'] === 'author' ? 'selected' : '' ?>>Author</option>
                        <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
                      </select>
                    </td>
                    <td>
                      <label class="label cursor-pointer gap-2">
                        <input
                          class="toggle toggle-success toggle-sm status-change"
                          type="checkbox"
                          data-id="<?= $user['id']; ?>"
                          <?= $user['status'] == 'active' ? 'checked' : '' ?> />
                        <span class="text-sm status-text"><?= $user['status'] == 'active' ? 'active' : 'pending' ?></span>
                      </label>
                    </td>
                    <td><?= $user['created_at']; ?></td>
                    <td>
                      <div class="flex gap-2">
                        <a href="#" class="btn btn-sm btn-ghost"><i class="ri-edit-line"></i></a>
                        <form action="userDelete.php" method="POST" onsubmit="return confirm('Are you sure?');">
                          <input type="hidden" name="id" value="<?= $user['id']; ?>">
                          <button class="btn btn-sm btn-error btn-ghost"><i class="ri-delete-bin-line"></i></button>
                        </form>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== model =========== -->
    <dialog id="addUserModal" class="modal">
      <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="dialog" class="modal-box w-11/12 max-w-3xl p-6 space-y-6" enctype="multipart/form-data">
        <!-- Modal Header -->
        <div class="flex justify-between items-center border-b pb-2">
          <h3 class="text-2xl font-bold text-gray-800">Add New User</h3>
          <button class="btn btn-sm btn-circle btn-ghost" aria-label="Close" onclick="document.getElementById('addUserModal').close()">✕</button>
        </div>

        <!-- Form Fields -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <!-- Name -->
          <div class="form-control w-full">
            <label class="label">
              <span class="label-text font-medium">Full Name</span>
            </label>
            <input type="text" name="name" placeholder="Enter full name" class="input input-bordered w-full" required />
          </div>

          <!-- Email -->
          <div class="form-control w-full">
            <label class="label">
              <span class="label-text font-medium">Email</span>
            </label>
            <input type="email" name="email" placeholder="Enter email address" class="input input-bordered w-full" required />
          </div>

          <select class="select select-bordered role-filter">
            <option value="">All Roles</option>
            <option value="user">User</option>
            <option value="author">Author</option>
            <option value="admin">Admin</option>
          </select>

          <select class="select select-bordered status-filter">
            <option value="">All Status</option>
            <option value="active">Active</option>
            <option value="suspended">Suspended</option>
          </select>

          <!-- Avatar Upload -->
          <div class="form-control w-full md:col-span-2">
            <label class="label">
              <span class="label-text font-medium">Profile Avatar</span>
            </label>
            <input type="file" name="avatar" id="avatarInput" class="file-input file-input-bordered w-full" accept="image/*" />
            <!-- Image preview -->
            <img id="avatarPreview" class="mt-2 w-32 h-32 object-cover rounded-full hidden" alt="Avatar Preview">
          </div>


          <!-- Modal Actions -->
          <div class="modal-action justify-end gap-2">
            <button type="button" class="btn btn-ghost" onclick="document.getElementById('addUserModal').close()">Cancel</button>
            <button type="submit" name="submit" class="btn btn-primary">Add User</button>
          </div>
      </form>
    </dialog>

  </main>
  </body>
  <!-- include js -->
   <script src="src/jquery-3.7.1.min.js"></script>
 <script src="src/dataSearch.js"></script>
  <script>
    $(document).ready(function() {
      $('#avatarInput').on('change', function() {
        var file = this.files[0];
        if (file) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('#avatarPreview').attr('src', e.target.result).show();
          }
          reader.readAsDataURL(file);
        } else {
          $('#avatarPreview').hide();
        }
      });
    });
  </script>
  <?php if (isset($_SESSION['success'])): ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '<?= $_SESSION['success']; ?>',
        timer: 2000,
        showConfirmButton: false
      });
    </script>
  <?php unset($_SESSION['success']);
  endif; ?>


  <script src="src/tableData.js"></script>