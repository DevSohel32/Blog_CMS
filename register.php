<?php
include 'layout/head.php';
include 'helper/Helper.php';
include 'database/db_connect.php';

$data = [];
$errors = [];
if (isset($_POST['submit'])) {
  $name = dataValidation($_POST['name']);
  $email = dataValidation($_POST['email']);
  $password = dataValidation($_POST['password']);
  $pConfirm = dataValidation($_POST['pConfirm']);
  if (empty($name)) {
    $errors['name'] = 'Name is required';
  } elseif (strlen($name) < 4) {
    $errors['name'] = "Name must be at least 4 characters";
  } else {
    $data['name'] = $name;
  }
  if (empty($email)) {
    $errors['email'] = 'Email is required';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Invalid email format';
  } else {
    $data['email'] = $email;
  }
  if (empty($password)) {
    $errors['password'] = "Password is required";
  } elseif (strlen($password) < 6) {
    $errors['password'] = "Password must be at least 6 characters";
  } elseif (!preg_match("/[A-Z]/", $password)) {
    $errors['password'] = "Password must contain at least 1 uppercase letter";
  } elseif (!preg_match("/[a-z]/", $password)) {
    $errors['password'] = "Password must contain at least 1 lowercase letter";
  } elseif (!preg_match("/[0-9]/", $password)) {
    $errors['password'] = "Password must contain at least 1 number";
  } elseif (!preg_match("/[\W]/", $password)) {
    $errors['password'] = "Password must contain at least 1 special character (!@#$%)";
  }
  if (empty($pConfirm)) {
    $errors['pConfirm'] = "Confirm password is required";
  } elseif ($password !== $pConfirm) {
    $errors['pConfirm'] = "Passwords do not match";
  } else {
    $data['password'] = $password;
  }

  if (empty($errors)) {
     $query = 'SELECT * FROM users WHERE email = :email limit 1';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $data['email']);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
      $errors['email'] = 'Email already exists';
    } else {
    
      $password = password_hash($data['password'], PASSWORD_BCRYPT);
        $created_at = date('Y-m-d H:i:s');
      $query = 'INSERT INTO users(name,  email, password, created_at) VALUES(:name,:email, :password, :created_at)';
      $stmt=$conn->prepare($query);
      $stmt->bindParam(":name", $data['name'], PDO::PARAM_STR);
      $stmt->bindParam(":email", $data['email'], PDO::PARAM_STR);
      $stmt->bindParam(":password", $password, PDO::PARAM_STR);
      $stmt->bindParam(":created_at", $created_at, PDO::PARAM_STR);
      if($stmt->execute()){
       $_SESSION['success'] = "Registration successful!";
       header("Location: login.php");
       exit;
      }else{
        $errors['database'] = "Something went wrong. Please try again.";
        
      }
    }
  }
}

?>
<!-- ========== Navbar start ========== -->
<?php include 'layout/navBar.php' ?>
<!-- ========== Nav bar end ========== -->


<section
  class="flex-1 bg-gradient-to-br from-primary/10 via-secondary/10 to-accent/10 flex items-center justify-center py-16 px-4">
  <div class="card w-full lg:w-[30%]  bg-base-100 shadow-2xl">
    <div class="card-body">
      <div class="text-center mb-6">
        <h1 class="text-3xl font-display font-bold text-base-content mb-2">
          Create Account
        </h1>
        <p class="text-base-content/70">
          Join our community of writers and readers
        </p>
      </div>
      <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="space-y-4">
        <div class="form-control">
          <label class="label"><span class="label-text font-medium">Full Name</span></label><input
            placeholder="John Doe"
            class="input input-bordered"
            type="text"
            name="name" />
          <p class="text-red-500 font-semibold"><?= $errors['name'] ?? "" ?></p>
        </div>
        <div class="form-control">
          <label class="label"><span class="label-text font-medium">Email</span></label><input
            placeholder="your@email.com"
            class="input input-bordered"
            type="email"
            name="email" />
          <p class="text-red-500 font-semibold"><?= $errors['email'] ?? "" ?></p>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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
          <label class="label"><span class="label-text font-medium">Confirm Password</span></label>

          <div class="relative">
            <input
              placeholder="Confirm your password"
              class="input input-bordered w-full pr-10"
              type="password"
              id="pConfirm"
              name="pConfirm" />

            <!-- Icon -->
            <span
              class="absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer text-gray-500"
              onclick="togglePassword('pConfirm', 'confirmIcon')">
              <i id="confirmIcon" class="ri-eye-off-line"></i>
            </span>
          </div>

          <p class="text-red-500 font-semibold"><?= $errors['pConfirm'] ?? "" ?></p>
        </div>

        <div class="form-control">
          <label class="label cursor-pointer justify-start gap-3"><input
              class="checkbox checkbox-primary checkbox-sm"
              type="checkbox" /><span class="label-text text-sm">I agree to the
              <a href="#" class="link link-primary">Terms of Service</a>
              and
              <a href="#" class="link link-primary">Privacy Policy</a></span></label>
        </div>
        <div class="form-control">
          <label class="label cursor-pointer justify-start gap-3"><input
              class="checkbox checkbox-primary checkbox-sm"
              type="checkbox" /><span class="label-text text-sm">Send me updates and newsletters</span></label>
        </div>
        <button
          type="submit"
          class="btn btn-primary w-full whitespace-nowrap"
          onclick="confirmRegister()"
          name="submit">
          <i class="ri-user-add-line"></i>Create Account
        </button>
      </form>
      <div class="text-center mt-6">
        <p class="text-base-content/70">
          Already have an account?
          <a
            class="link link-primary font-medium"
            href="/login"
            data-discover="true">Sign in</a>
        </p>
      </div>
    </div>
  </div>
</section>
<script src="src/script.js">


</script>

