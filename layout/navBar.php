 <header class="navbar bg-base-100 shadow-sm sticky top-0 z-50 px-4 lg:px-8">
   <div class="navbar-start">
     <div class="dropdown">
       <label tabindex="0" class="btn btn-ghost lg:hidden"><i class="ri-menu-line text-xl"></i></label>
       <ul
         tabindex="0"
         class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow-lg bg-base-100 rounded-box w-52">
         <li><a href="index.php" data-discover="true">Home</a></li>
         <li><a href="blog.php" data-discover="true">Blog</a></li>
         <li>
           <a href="categories.php" data-discover="true">Categories</a>
         </li>
         <li><a href="about.php" data-discover="true">About</a></li>
         <li><a href="contact.php" data-discover="true">Contact</a></li>
       </ul>
     </div>
     <a
       class="text-2xl font-display font-bold text-primary"
       href="index.php"
       data-discover="true">BlogHub</a>
   </div>
   <div class="navbar-center hidden lg:flex">
     <ul class="menu menu-horizontal px-1 gap-2">
       <li>
         <a class="font-medium" href="index.php" data-discover="true">Home</a>
       </li>
       <li>
         <a class="font-medium" href="blog.php" data-discover="true">Blog</a>
       </li>
       <li>
         <a class="font-medium" href="categories.php" data-discover="true">Categories</a>
       </li>
       <li>
         <a class="font-medium" href="about.php" data-discover="true">About</a>
       </li>
       <li>
         <a class="font-medium" href="contact.php" data-discover="true">Contact</a>
       </li>
     </ul>
   </div>
   <div class="navbar-end gap-2">
     <a class="btn btn-ghost btn-circle" href="search.php" data-discover="true">
       <i class="ri-search-line text-xl"></i>
     </a>
     <button class="btn btn-ghost btn-circle">
       <i class="ri-moon-line text-xl"></i>
     </button>

     <?php
      if (isset($_SESSION['user_id'])):
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM users WHERE id = :id LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Prepare avatar path
        $avatarPath = !empty($user['avatar'])
          ? "assets/img_res/{$user['avatar']}"
          : "assets/img_res/avatar.jpg";
      ?>

       <!-- Avatar dropdown for logged-in user -->
       <div class="dropdown dropdown-end">
         <label tabindex="0" class="btn btn-ghost btn-circle avatar">
           <div class="  w-12 rounded-full ring-2 ring-offset-2">
             <img alt="<?= $user['name']; ?>" src="<?= $avatarPath; ?>">
           </div>
         </label>

         <ul tabindex="0"
           class="menu menu-compact dropdown-content mt-3 p-2 shadow-lg bg-base-100 rounded-box w-52">
           <li><a href="BackEnd/dashboard.php">Dashboard</a></li>
           <li><a href="BackEnd/profile.php">Profile</a></li>
           <li><a href="logout.php" class="text-error">
               <i class="ri-logout-box-line"></i>Logout
             </a></li>
         </ul>
       </div>
     <?php else: ?>
       <a class="btn btn-ghost btn-sm" href="login.php">Login</a>
       <a class="btn btn-primary btn-sm" href="register.php">Register</a>
     <?php endif; ?>

   </div>

 </header>