<?php

$id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div
  class="navbar bg-base-100 border-b border-base-300 h-16 px-6 sticky top-0 z-50 backdrop-blur">
  <div class="flex-1">
    <div class="form-control w-full max-w-md">
      <div class="relative">
        <input
          placeholder="Search..."
          class="input input-bordered w-full pl-10"
          type="text" /><i
          class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-base-content/50"></i>
      </div>
    </div>
  </div>
  <div class="flex-none gap-4">
    <button class="btn btn-ghost btn-circle">
      <i class="ri-moon-line text-xl"></i>
    </button>
    <div class="dropdown dropdown-end">
      <button tabindex="0" class="btn btn-ghost btn-circle">
        <div class="indicator">
          <i class="ri-notification-3-line text-xl"></i><span class="badge badge-sm badge-error indicator-item">3</span>
        </div>
      </button>
      <div
        tabindex="0"
        class="dropdown-content card card-compact w-80 p-4 shadow-xl bg-base-100 mt-3">
        <div class="card-body">
          <h3 class="font-bold text-lg mb-2">Notifications</h3>
          <div class="space-y-3">
            <div
              class="flex gap-3 p-2 hover:bg-base-200 rounded-lg cursor-pointer">
              <div class="avatar">
                <div class="w-10 h-10 rounded-full">
                  <img
                    alt="User"
                    src="../ai/img_res/cb48fccb2152ff12b985582bee9da9bd.jpg" />
                </div>
              </div>
              <div class="flex-1">
                <p class="text-sm">New comment on your post</p>
                <p class="text-xs text-base-content/60">
                  2 minutes ago
                </p>
              </div>
            </div>
            <div
              class="flex gap-3 p-2 hover:bg-base-200 rounded-lg cursor-pointer">
              <div class="avatar">
                <div class="w-10 h-10 rounded-full">
                  <img
                    alt="User"
                    src="https://readdy.ai/api/search-image?query=professional%20person%20avatar%20portrait%20clean%20background&width=40&height=40&seq=notif2&orientation=squarish" />
                </div>
              </div>
              <div class="flex-1">
                <p class="text-sm">Your post has been approved</p>
                <p class="text-xs text-base-content/60">1 hour ago</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown dropdown-end">

      <?php foreach ($users as $user): ?>
        <button tabindex="0" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 h-10 rounded-full">
            <?php
            $avatarPath = !empty($user['avatar'])
              ? "../assets/img_res/{$user['avatar']}"
              : "../assets/img_res/avatar.jpg";
            ?>
            <img alt="<?= $user['name']; ?>" src="<?= $avatarPath; ?>">
          </div>
        </button>

        <ul
          tabindex="0"
          class="dropdown-content menu p-2 shadow-xl bg-base-100 rounded-xl w-52 mt-3">
          <li class="menu-title px-4 py-2">
            <span class="text-lg uppercase font-bold"><?= $user['name'] ?></span><span class="text-xs text-base-content/60"><?= $user['email'] ?></span>
          </li>
          <li>
            <a href="../index.php" class="flex items-center gap-2">
              <i class="ri-home-line text-xl"></i>
              Home
            </a>
          </li>
          <div class="divider my-0"></div>
          <li>
            <a href="../logout.php" class="text-error"><i class="ri-logout-box-line"></i>Logout</a>
          </li>
        </ul>
      <?php endforeach; ?>

    </div>
  </div>
</div>