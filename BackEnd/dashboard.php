<?php include 'layout/head.php' ?>


<?php include 'layout/navBar.php' ?>
<div class="flex-1 flex flex-col">
  <?php include "layout/header.php" ?>
  <main class="flex-1 p-6">
    <div class="space-y-6">
      <div
        class="card bg-gradient-to-r from-primary to-secondary text-white shadow-xl rounded-2xl">
        <div class="card-body">
          <div class="flex items-center gap-6">
            <div class="avatar">
              <div
                class="w-24 h-24 rounded-full ring ring-white ring-offset-2">
                <?php
                $avatarPath = !empty($user['avatar'])
                  ? "../assets/img_res/{$user['avatar']}"
                  : "../assets/img_res/7ae1a804af8e025700424b5640eba190.jpg";
                ?>
                <img alt="<?= $user['name']; ?>" src="<?= $avatarPath; ?>">
              </div>
            </div>
            <div class="flex-1">
              <h1 class="text-3xl font-bold mb-2">
                Welcome to Your Dashboard
              </h1>
              <p class="opacity-90">
                View your saved content and activities
              </p>
            </div>
            <div class="stats shadow bg-white/20 backdrop-blur">
              <div class="stat place-items-center">
                <div class="stat-title text-white/80">Saved Posts</div>
                <div class="stat-value text-white">6</div>
              </div>
              <div class="stat place-items-center">
                <div class="stat-title text-white/80">Comments</div>
                <div class="stat-value text-white">24</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="flex items-center justify-between mb-4">
          <h2 class="text-2xl font-bold">Saved Posts</h2>
          <button class="btn btn-ghost btn-sm whitespace-nowrap">
            View All<i class="ri-arrow-right-line"></i>
          </button>
        </div>
        <div
          class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div
            class="card bg-base-100 shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-shadow cursor-pointer">
            <figure class="relative h-48">
              <img
                alt="Web Design Trends 2024"
                class="w-full h-full object-cover object-top"
                src="ai/img_res/d8f52c3bcd4758aa92ffba89382de234.jpg" /><button
                class="btn btn-circle btn-sm btn-error absolute top-3 right-3">
                <i class="ri-bookmark-fill"></i>
              </button>
            </figure>
            <div class="card-body">
              <div class="badge badge-primary badge-sm">Design</div>
              <h3 class="card-title text-lg">Web Design Trends 2024</h3>
              <div
                class="flex items-center gap-2 text-sm text-base-content/60">
                <span>Sania Khan</span><span>•</span><span>January 15, 2024</span>
              </div>
            </div>
          </div>
          <div
            class="card bg-base-100 shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-shadow cursor-pointer">
            <figure class="relative h-48">
              <img
                alt="Python Programming Tips"
                class="w-full h-full object-cover object-top"
                src="https://readdy.ai/api/search-image?query=modern%20python%20programming%20code%20editor%20with%20clean%20minimal%20background%20professional%20lighting&width=400&height=300&seq=saved2&orientation=landscape" /><button
                class="btn btn-circle btn-sm btn-error absolute top-3 right-3">
                <i class="ri-bookmark-fill"></i>
              </button>
            </figure>
            <div class="card-body">
              <div class="badge badge-primary badge-sm">
                Programming
              </div>
              <h3 class="card-title text-lg">
                Python Programming Tips
              </h3>
              <div
                class="flex items-center gap-2 text-sm text-base-content/60">
                <span>Rahim Ahmed</span><span>•</span><span>January 12, 2024</span>
              </div>
            </div>
          </div>
          <div
            class="card bg-base-100 shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-shadow cursor-pointer">
            <figure class="relative h-48">
              <img
                alt="Digital Marketing Strategy"
                class="w-full h-full object-cover object-top"
                src="https://readdy.ai/api/search-image?query=modern%20digital%20marketing%20strategy%20analytics%20dashboard%20with%20clean%20minimal%20background%20professional%20lighting&width=400&height=300&seq=saved3&orientation=landscape" /><button
                class="btn btn-circle btn-sm btn-error absolute top-3 right-3">
                <i class="ri-bookmark-fill"></i>
              </button>
            </figure>
            <div class="card-body">
              <div class="badge badge-primary badge-sm">Marketing</div>
              <h3 class="card-title text-lg">
                Digital Marketing Strategy
              </h3>
              <div
                class="flex items-center gap-2 text-sm text-base-content/60">
                <span>Karim Mia</span><span>•</span><span>January 10, 2024</span>
              </div>
            </div>
          </div>
          <div
            class="card bg-base-100 shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-shadow cursor-pointer">
            <figure class="relative h-48">
              <img
                alt="Mobile App Development"
                class="w-full h-full object-cover object-top"
                src="https://readdy.ai/api/search-image?query=modern%20mobile%20app%20development%20interface%20design%20with%20clean%20minimal%20background%20professional%20lighting&width=400&height=300&seq=saved4&orientation=landscape" /><button
                class="btn btn-circle btn-sm btn-error absolute top-3 right-3">
                <i class="ri-bookmark-fill"></i>
              </button>
            </figure>
            <div class="card-body">
              <div class="badge badge-primary badge-sm">
                Development
              </div>
              <h3 class="card-title text-lg">Mobile App Development</h3>
              <div
                class="flex items-center gap-2 text-sm text-base-content/60">
                <span>Fatima Begum</span><span>•</span><span>January 8, 2024</span>
              </div>
            </div>
          </div>
          <div
            class="card bg-base-100 shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-shadow cursor-pointer">
            <figure class="relative h-48">
              <img
                alt="UI/UX Design Principles"
                class="w-full h-full object-cover object-top"
                src="https://readdy.ai/api/search-image?query=modern%20ui%20ux%20design%20principles%20interface%20mockup%20with%20clean%20minimal%20background%20professional%20lighting&width=400&height=300&seq=saved5&orientation=landscape" /><button
                class="btn btn-circle btn-sm btn-error absolute top-3 right-3">
                <i class="ri-bookmark-fill"></i>
              </button>
            </figure>
            <div class="card-body">
              <div class="badge badge-primary badge-sm">Design</div>
              <h3 class="card-title text-lg">
                UI/UX Design Principles
              </h3>
              <div
                class="flex items-center gap-2 text-sm text-base-content/60">
                <span>Nazmul Haque</span><span>•</span><span>January 5, 2024</span>
              </div>
            </div>
          </div>
          <div
            class="card bg-base-100 shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-shadow cursor-pointer">
            <figure class="relative h-48">
              <img
                alt="Cloud Computing Basics"
                class="w-full h-full object-cover object-top"
                src="https://readdy.ai/api/search-image?query=modern%20cloud%20computing%20technology%20servers%20network%20with%20clean%20minimal%20background%20professional%20lighting&width=400&height=300&seq=saved6&orientation=landscape" /><button
                class="btn btn-circle btn-sm btn-error absolute top-3 right-3">
                <i class="ri-bookmark-fill"></i>
              </button>
            </figure>
            <div class="card-body">
              <div class="badge badge-primary badge-sm">Technology</div>
              <h3 class="card-title text-lg">Cloud Computing Basics</h3>
              <div
                class="flex items-center gap-2 text-sm text-base-content/60">
                <span>Tania Islam</span><span>•</span><span>January 3, 2024</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2">
          <div class="card bg-base-100 shadow-lg rounded-xl">
            <div class="card-body">
              <h2 class="card-title mb-4">Recent Activities</h2>
              <ul class="timeline timeline-vertical">
                <li>
                  <div class="timeline-start">2 hours ago</div>
                  <div class="timeline-middle">
                    <div
                      class="w-10 h-10 rounded-full bg-base-200 flex items-center justify-center text-blue-500">
                      <i class="ri-chat-3-line"></i>
                    </div>
                  </div>
                  <div class="timeline-end timeline-box">
                    You commented on "React Tutorial" post
                  </div>
                  <hr />
                </li>
                <li>
                  <hr />
                  <div class="timeline-start">5 hours ago</div>
                  <div class="timeline-middle">
                    <div
                      class="w-10 h-10 rounded-full bg-base-200 flex items-center justify-center text-red-500">
                      <i class="ri-heart-line"></i>
                    </div>
                  </div>
                  <div class="timeline-end timeline-box">
                    You liked "CSS Grid Layout" post
                  </div>
                  <hr />
                </li>
                <li>
                  <hr />
                  <div class="timeline-start">1 day ago</div>
                  <div class="timeline-middle">
                    <div
                      class="w-10 h-10 rounded-full bg-base-200 flex items-center justify-center text-green-500">
                      <i class="ri-bookmark-line"></i>
                    </div>
                  </div>
                  <div class="timeline-end timeline-box">
                    You saved "Python Programming Tips" post
                  </div>
                  <hr />
                </li>
                <li>
                  <hr />
                  <div class="timeline-start">2 days ago</div>
                  <div class="timeline-middle">
                    <div
                      class="w-10 h-10 rounded-full bg-base-200 flex items-center justify-center text-purple-500">
                      <i class="ri-eye-line"></i>
                    </div>
                  </div>
                  <div class="timeline-end timeline-box">
                    You viewed "Digital Marketing" post
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div>
          <div class="card bg-base-100 shadow-lg rounded-xl">
            <div class="card-body">
              <h2 class="card-title mb-4">Recommended Posts</h2>
              <div class="space-y-4">
                <div
                  class="flex gap-3 p-3 hover:bg-base-200 rounded-lg cursor-pointer transition-colors">
                  <div
                    class="w-20 h-16 rounded-lg overflow-hidden flex-shrink-0">
                    <img
                      alt="JavaScript Advanced Concepts"
                      class="w-full h-full object-cover object-top"
                      src="https://readdy.ai/api/search-image?query=modern%20javascript%20advanced%20programming%20code%20with%20clean%20minimal%20background%20professional%20lighting&width=300&height=200&seq=rec1&orientation=landscape" />
                  </div>
                  <div class="flex-1">
                    <div class="badge badge-sm badge-outline mb-1">
                      Programming
                    </div>
                    <h4 class="font-medium text-sm leading-tight">
                      JavaScript Advanced Concepts
                    </h4>
                  </div>
                </div>
                <div
                  class="flex gap-3 p-3 hover:bg-base-200 rounded-lg cursor-pointer transition-colors">
                  <div
                    class="w-20 h-16 rounded-lg overflow-hidden flex-shrink-0">
                    <img
                      alt="Responsive Web Design"
                      class="w-full h-full object-cover object-top"
                      src="https://readdy.ai/api/search-image?query=modern%20responsive%20web%20design%20multiple%20devices%20with%20clean%20minimal%20background%20professional%20lighting&width=300&height=200&seq=rec2&orientation=landscape" />
                  </div>
                  <div class="flex-1">
                    <div class="badge badge-sm badge-outline mb-1">
                      Design
                    </div>
                    <h4 class="font-medium text-sm leading-tight">
                      Responsive Web Design
                    </h4>
                  </div>
                </div>
                <div
                  class="flex gap-3 p-3 hover:bg-base-200 rounded-lg cursor-pointer transition-colors">
                  <div
                    class="w-20 h-16 rounded-lg overflow-hidden flex-shrink-0">
                    <img
                      alt="SEO Optimization Guide"
                      class="w-full h-full object-cover object-top"
                      src="https://readdy.ai/api/search-image?query=modern%20seo%20optimization%20analytics%20dashboard%20with%20clean%20minimal%20background%20professional%20lighting&width=300&height=200&seq=rec3&orientation=landscape" />
                  </div>
                  <div class="flex-1">
                    <div class="badge badge-sm badge-outline mb-1">
                      Marketing
                    </div>
                    <h4 class="font-medium text-sm leading-tight">
                      SEO Optimization Guide
                    </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
</body>
 
</html>