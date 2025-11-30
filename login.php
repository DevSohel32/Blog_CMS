<?php
include 'layout/head.php';

include 'helper/Helper.php';
include 'database/db_connect.php';

$data = [];
$errors = [];
if (isset($_POST['submit'])) {
  $email = dataValidation($_POST['email']);
  $password = dataValidation($_POST['password']);
  if (empty($email)) {
    $errors['email'] = 'Email is required';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Invalid email format';
  } else {
    $data['email'] = $email;
  }
  if (empty($password)) {
    $errors['password'] = "Password is required";
  } else {
    $data['password'] = $password;
  }

  if (empty($errors)) {
    $query = 'SELECT * FROM users WHERE email = :email LIMIT 1';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $data['email']);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user && password_verify($data['password'], $user['password'])) {
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['role'] = $user['role'];

      if ($user['role'] === 'admin') {
        $_SESSION['success'] = 'Admin login successfully';
        header("location: ../admin/dashboard");
      } elseif ($user['role'] === 'author') {
        $_SESSION['success'] = 'Author login successfully';
        header("location: ../author/dashboard");
      } else {
        $_SESSION['success'] = 'Login successfully';
        header("location: index.php");
      }
      exit;
    } else {
      $_SESSION['error'] = 'Invalid email or password';
    }
  }
}


?>
<!-- ========== Navbar start ========== -->
<?php include 'layout/navBar.php' ?>
<!-- ========== Nav bar end ========== -->

<section
  class="flex-1 bg-gradient-to-br from-primary/10 via-secondary/10 to-accent/10 flex items-center justify-center py-16 px-4">
  <div class="card w-full lg:w-[30%] bg-base-100 shadow-2xl">
    <div class="card-body">
      <div class="text-center mb-6">
        <h1 class="text-3xl font-display font-bold text-base-content mb-2">
          Welcome Back
        </h1>
        <p class="text-base-content/70">
          Sign in to your account to continue
        </p>
      </div>
      <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="space-y-4">
        <div class="form-control">
          <label class="label"><span class="label-text font-medium">Email</span></label><input
            placeholder="your@email.com"
            class="input input-bordered"
            required=""
            type="email"
            name="email" />
        </div>
        <div class="form-control">
          <label class="label"><span class="label-text font-medium">Password</span></label>

          <div class="relative">
            <input
              placeholder="Create a strong password"
              class="input input-bordered w-full pr-10"
              type="password"
              id="password"
              name="password" />

            <!-- Icon -->
            <span
              class="absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer text-gray-500"
              onclick="togglePassword('password', 'passIcon')">
              <i id="passIcon" class="ri-eye-off-line"></i>
            </span>
          </div>

          <p class="text-red-500 font-semibold"><?= $errors['password'] ?? "" ?></p>
        </div>
        <div class="form-control">
          <label class="label cursor-pointer justify-start gap-3"><input
              class="checkbox checkbox-primary checkbox-sm"
              type="checkbox" /><span class="label-text">Remember me</span></label>
        </div>
        <button
          type="submit"
          name="submit"
          class="btn btn-primary w-full whitespace-nowrap">
          <i class="ri-login-box-line"></i>Sign In
        </button>
      </form>
      <div class="divider">OR</div>
      <div class="text-center mt-6">
        <p class="text-base-content/70">
          Don't have an account?
          <a
            class="link link-primary font-medium"
            href="/register"
            data-discover="true">Create one</a>
        </p>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (isset($_SESSION['error'])): ?>
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: <?php echo json_encode($_SESSION['error']); ?>,
      confirmButtonColor: '#d33'
    });
  </script>
<?php unset($_SESSION['error']);
endif; ?>

<?php if (isset($_SESSION['success'])): ?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Success!',
      text: <?php echo json_encode($_SESSION['success']); ?>,
      timer: 2000,
      showConfirmButton: false
    });
  </script>
<?php unset($_SESSION['success']);
endif; ?>

<script src="src/script.js"></script>