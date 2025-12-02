  <?php include 'layout/head.php' ?>

  <?php include 'layout/navBar.php' ?>
  <?php

  $query = "SELECT * FROM users limit 1";
  $stmt = $conn->prepare($query);
  $stmt->execute();
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

  ?>
  <div class="flex-1 flex flex-col">
    <?php include 'layout/header.php' ?>
    <?php foreach ($users as $user): ?>
      <main class="flex-1 p-6">
        <div class="space-y-6">
          <div>
            <h1 class="text-3xl font-bold mb-2">Profile Settings</h1>
            <p class="text-base-content/60">
              Manage your account settings and preferences
            </p>
          </div>
          <div class="card bg-base-100 shadow-lg rounded-xl">
            <div class="card-body p-0">
              <div class="flex border-b border-base-300">
                <button
                  class="px-6 py-4 font-medium transition-colors whitespace-nowrap border-b-2 border-primary text-primary">
                  <i class="ri-user-line mr-2"></i>Profile Information</button><button
                  class="px-6 py-4 font-medium transition-colors whitespace-nowrap text-base-content/60 hover:text-base-content">
                  <i class="ri-lock-line mr-2"></i>Change Password</button><button
                  class="px-6 py-4 font-medium transition-colors whitespace-nowrap text-base-content/60 hover:text-base-content">
                  <i class="ri-share-line mr-2"></i>Social Links
                </button>
              </div>
              <div class="p-6">
                <div class="space-y-6">
                  <div
                    class="flex items-center gap-6 pb-6 border-b border-base-300">
                    <div class="avatar">
                      <div
                        class="w-24 h-24 rounded-full ring ring-primary ring-offset-2">
                        <?php
                        $avatarPath = !empty($user['avatar'])
                          ? "../assets/img_res/{$user['avatar']}"
                          : "../assets/img_res/7ae1a804af8e025700424b5640eba190.jpg";
                        ?>
                        <img alt="<?= $user['name']; ?>" src="<?= $avatarPath; ?>">
                      </div>
                    </div>
                    
                    <div>
                      <h3 class="font-bold text-lg mb-2">
                        Profile Picture
                      </h3>
                     <div class="flex gap-2 items-center">
  <!-- Upload Button -->
  <label class="btn btn-primary btn-sm flex items-center gap-1 cursor-pointer">
    <i class="ri-upload-line"></i>
    Upload New
    <input type="file" class="hidden" id="fileInput">
  </label>

  <!-- Remove Button -->
  <button type="button" class="btn btn-ghost btn-sm flex items-center gap-1" id="removeFile">
    <i class="ri-delete-bin-line"></i>
    Remove
  </button>
</div>
                      <p class="text-sm text-base-content/60 mt-2">
                        JPG, PNG or GIF. Max size 2MB
                      </p>
                    </div>
                  </div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="form-control">
                      <label class="label"><span class="label-text font-medium">Full Name</span></label><input
                        class="input input-bordered"
                        type="text"
                        value="<?= $user['name'] ?>"
                        name="fullName" />
                    </div>
                    <div class="form-control">
                      <label class="label"><span class="label-text font-medium">Email Address</span></label><input
                        class="input input-bordered"
                        type="email"
                        value="<?= $user['email'] ?>"
                        name="email" />
                    </div>
                    <div class="form-control">
                      <label class="label"><span class="label-text font-medium">Phone Number</span></label><input
                        class="input input-bordered"
                        type="tel"
                       value="<?= $user['phone'] ?>"
                       name="phone"
                        placeholder="+880177310...." />
                    </div>
                    <div class="form-control">
                      <label class="label"><span class="label-text font-medium">Website</span></label><input
                        class="input input-bordered"
                        type="url"
                        value="https://johndoe.com"
                        name="website" />
                    </div>
                    <div class="form-control md:col-span-2">
                      <label class="label"><span class="label-text font-medium">Bio</span></label><textarea
                        name="bio"
                        class="textarea textarea-bordered h-24"
                        placeholder="Tell us about yourself...">
Passionate writer and tech enthusiast. Love to share knowledge through blogging.</textarea>
                    </div>
                  </div>
                  <div
                    class="flex justify-end gap-3 pt-4 border-t border-base-300">
                    <button class="btn btn-ghost whitespace-nowrap">
                      Cancel</button><button class="btn btn-primary whitespace-nowrap">
                      <i class="ri-save-line"></i>Save Changes
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    <?php endforeach ?>
  </div>
  </body>

  </html>