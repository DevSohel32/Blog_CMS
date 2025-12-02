 <?php
  include '../database/db_connect.php';

  if (!isset($_SESSION['role'])) {
    header("Location:../login.php");
  }
  $current_page = basename($_SERVER['PHP_SELF']);
  ?>

 <header
   id="sidebar"
   class="w-72 bg-base-100 shadow-xl h-screen sticky top-0 overflow-y-auto">
   <div class="px-4 py-6">
     <div class="mb-8">
       <div
         class="h-20 flex items-center justify-between px-6 border-b border-gray-100">
         <div id="logo" class="flex items-center gap-3">
           <div
             class="w-10 h-10 bg-gradient-to-br from-blue-600 to-blue-700 rounded-lg flex items-center justify-center">
             <span
               class="text-white font-bold text-lg"
               style="font-family: Poppins, sans-serif">B</span>
           </div>
           <div>
             <h2
               class="text-sm font-semibold text-gray-900"
               style="font-family: Poppins, sans-serif">
               BIIT Student Panel
             </h2>
             <span
               class="text-xs text-blue-600 bg-blue-50 px-2 py-0.5 rounded-full">Instructor Module</span>
           </div>
         </div>
         <button
           id="menu-btn"
           class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded-lg transition-colors cursor-pointer">
           <i class="ri-menu-fold-line text-gray-600"></i>
         </button>
       </div>
     </div>
     <ul class="menu gap-2">
       <?php if (isset($_SESSION['role'])): ?>

         <?php if ($_SESSION['role'] === 'admin'): ?>
           <li>
             <a
               class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative 
               <?= ($current_page === "dashboard.php") ? 'bg-[#1A56DB]/10 border-l-4 border-[#1A56DB] text-[#1A56DB]' : 'text-gray-700 hover:bg-gray-100' ?>
                focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
               href="dashboard.php"
               data-discover="true"><i class="ri-dashboard-line text-xl"></i><span>Dashboard</span></a>
           </li>
           <li>
             <a class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative 
               <?= ($current_page === "users.php") ? 'bg-[#1A56DB]/10 border-l-4 border-[#1A56DB] text-[#1A56DB]' : 'text-gray-700 hover:bg-gray-100' ?>
                focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
               href="./users.php"
               data-discover="true"><i class="ri-user-settings-line text-xl"></i><span>User Management</span></a>
           </li>
           <li>
             <a class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative 
               <?= ($current_page === "post.php") ? 'bg-[#1A56DB]/10 border-l-4 border-[#1A56DB] text-[#1A56DB]' : 'text-gray-700 hover:bg-gray-100' ?>
                focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
               href="posts.php"
               data-discover="true"><i class="ri-article-line text-xl"></i><span>Post Management</span></a>
           </li>
           <li>
             <a
               class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative 
               <?= ($current_page === "categories.php") ? 'bg-[#1A56DB]/10 border-l-4 border-[#1A56DB] text-[#1A56DB]' : 'text-gray-700 hover:bg-gray-100' ?>
                focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
               href="categories.php"
               data-discover="true"><i class="ri-folder-line text-xl"></i><span>Category Management</span></a>
           </li>
           <li>
             <a
               class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative 
               <?= ($current_page === "tags.php") ? 'bg-[#1A56DB]/10 border-l-4 border-[#1A56DB] text-[#1A56DB]' : 'text-gray-700 hover:bg-gray-100' ?>
                focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
               href="tags.php"
               data-discover="true"><i class="ri-price-tag-3-line text-xl"></i><span>Tag Management</span></a>
           </li>
           <li>
             <a
               class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative 
               <?= ($current_page === "comments.php") ? 'bg-[#1A56DB]/10 border-l-4 border-[#1A56DB] text-[#1A56DB]' : 'text-gray-700 hover:bg-gray-100' ?>
                focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
               href="comments.php"
               data-discover="true"><i class="ri-chat-3-line text-xl"></i><span>Comment Management</span></a>
           </li>

           <li>
             <a
               class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative 
               <?= ($current_page === "reports.php") ? 'bg-[#1A56DB]/10 border-l-4 border-[#1A56DB] text-[#1A56DB]' : 'text-gray-700 hover:bg-gray-100' ?>
                focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
               href="reports.php"
               data-discover="true"><i class="ri-file-chart-line text-xl"></i><span>Reports &amp; Logs</span></a>
           </li>
           <li>
             <a
               class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative 
               <?= ($current_page === "settings.php") ? 'bg-[#1A56DB]/10 border-l-4 border-[#1A56DB] text-[#1A56DB]' : 'text-gray-700 hover:bg-gray-100' ?>
                focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
               href="settings.php"
               data-discover="true"><i class="ri-settings-3-line text-xl"></i><span>Site Settings</span></a>
           </li>
           <li>
             <a
               class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative 
               <?= ($current_page === "profile.php") ? 'bg-[#1A56DB]/10 border-l-4 border-[#1A56DB] text-[#1A56DB]' : 'text-gray-700 hover:bg-gray-100' ?>
                focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
               href="profile.php"
               data-discover="true"><i class="ri-user-line text-xl"></i><span>Profile Settings</span></a>
           </li>
           <!-- author dashboard start -->
         <?php elseif ($_SESSION['role'] === 'author'): ?>

           <!-- author dashboard end -->
         <?php else: ?>
           <li>
             <a
               class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative 
               <?= ($current_page === "dashboard.php") ? 'bg-[#1A56DB]/10 border-l-4 border-[#1A56DB] text-[#1A56DB]' : 'text-gray-700 hover:bg-gray-100' ?>
                focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
               href="dashboard.php"
               data-discover="true"><i class="ri-dashboard-line text-xl"></i><span>Dashboard</span></a>
           </li>
           <li>
             <a
               class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative 
               <?= ($current_page === "users.php") ? 'bg-[#1A56DB]/10 border-l-4 border-[#1A56DB] text-[#1A56DB]' : 'text-gray-700 hover:bg-gray-100' ?>
                focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
               href="./users.php"
               data-discover="true"><i class="ri-bookmark-line text-xl"></i><span>Save Posts</span></a>
           </li>
           <li>
             <a
               class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative 
               <?= ($current_page === "comments.php") ? 'bg-[#1A56DB]/10 border-l-4 border-[#1A56DB] text-[#1A56DB]' : 'text-gray-700 hover:bg-gray-100' ?>
                focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
               href="comments.php"
               data-discover="true"><i class="ri-chat-1-line text-xl"></i><span>My Comment</span></a>
           </li>
           <li>
             <a
               class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative 
               <?= ($current_page === "profile.php") ? 'bg-[#1A56DB]/10 border-l-4 border-[#1A56DB] text-[#1A56DB]' : 'text-gray-700 hover:bg-gray-100' ?>
                focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
               href="./profile.php"
               data-discover="true"><i class="ri-user-line text-xl"></i><span>Profile Setting</span></a>
           </li>
         <?php endif; ?>

       <?php endif; ?>

     </ul>
   </div>
 </header>
 <script src="src/script.js"> </script>