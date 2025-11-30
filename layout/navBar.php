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

     <?php if (isset($_SESSION['user_id'])): ?>
       <!-- Avatar dropdown for logged-in user -->
       <div class="dropdown dropdown-end">
         <label tabindex="0" class="btn btn-ghost btn-circle avatar">
           <div class="ring-primary ring-offset-base-100 w-12 rounded-full ring-2 ring-offset-2">
             <img src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" />
           </div>
         </label>
         <ul tabindex="0"
           class="menu menu-compact dropdown-content mt-3 p-2 shadow-lg bg-base-100 rounded-box w-52">
           <li><a href="BackEnd/dashboard.php">Dashboard</a></li>
           <li><a href="profile.php">Profile</a></li>
           <li>
             <form method="post" action="logout.php">
               <a href="logout.php" type="submit" class="w-full text-left">Logout</a>
             </form>
           </li>
         </ul>
       </div>
     <?php else: ?>
       <!-- Login/Register for guests -->
       <a class="btn btn-ghost btn-sm hidden sm:inline-flex whitespace-nowrap" href="login.php" data-discover="true">Login</a>
       <a class="btn btn-primary btn-sm hidden sm:inline-flex whitespace-nowrap" href="register.php" data-discover="true">Register</a>
     <?php endif; ?>
   </div>

 </header>