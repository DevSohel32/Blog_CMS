<?php
include 'layout/head.php';
?>

<?php include "layout/navBar.php";

$query = "SELECT * FROM users ORDER BY created_at DESC";
$stmt = $conn->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.dataTables.min.css">
<div class="flex-1 flex flex-col">
  <?php include "layout/header.php" ?>
  <main class="flex-1 p-6">
    <div class="space-y-6">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-3xl font-bold mb-2">User Management</h1>
          <p class="text-base-content/60">View and manage all users</p>
        </div>
        <button class="btn btn-primary whitespace-nowrap">
          <i class="ri-user-add-line text-lg"></i>Add New User
        </button>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="card bg-base-100 shadow-lg rounded-xl">
          <div class="card-body">
            <div class="flex items-center gap-4">
              <div
                class="w-12 h-12 rounded-lg bg-blue-500/10 text-blue-500 flex items-center justify-center">
                <i class="ri-user-line text-2xl"></i>
              </div>
              <div>
                <p class="text-2xl font-bold">1,254</p>
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
                <p class="text-2xl font-bold">348</p>
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
                <p class="text-2xl font-bold">12</p>
                <p class="text-sm text-base-content/60">Admins</p>
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
                <p class="text-2xl font-bold">28</p>
                <p class="text-sm text-base-content/60">Suspended</p>
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
                            <img
                              alt="<?= $user['name']; ?>"
                              src="<?= !empty($user['photo']) ? $user['photo'] : '../assete/img_res/afa1ed31635ccb5ee582369b541fc71d.jpg'; ?>" />
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
                        <span class="text-sm status-text"><?= $user['status'] == 'active' ? 'active' : 'suspended' ?></span>
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
  </main>
  </body>
  <!-- include js -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="src/jquery-3.7.1.min.js"></script>
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

  </html>