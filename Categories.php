<?php
include 'layout/head.php'
?>
<!-- ========== Navbar start ========== -->
<?php include 'layout/navBar.php' ?>
<!-- ========== Nav bar end ========== -->

    <section
      class="bg-gradient-to-br from-primary/10 via-secondary/10 to-accent/10 py-16"
    >
      <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl font-display font-bold text-base-content mb-4">
          Explore Categories
        </h1>
        <p class="text-xl text-base-content/70 max-w-2xl mx-auto">
          Discover articles organized by topics that interest you most
        </p>
      </div>
    </section>
    <section class="py-16 bg-base-100 flex-1">
      <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <a
            class="card lg:card-side bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 group overflow-hidden"
            href="/categories/technology"
            data-discover="true"
            ><figure class="lg:w-64 h-64 lg:h-auto overflow-hidden">
              <img
                alt="Technology"
                class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
                src="https://public.readdy.ai/assete/img_res/e12da341716c0f65c514d5aa1fe3b805.jpg"
              />
            </figure>
            <div class="card-body">
              <div class="flex items-center gap-3 mb-2">
                <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 group-hover:bg-primary group-hover:text-primary-content transition-all duration-300"
                >
                  <i class="ri-code-s-slash-line text-2xl"></i>
                </div>
                <h2 class="card-title text-2xl font-display">Technology</h2>
              </div>
              <p class="text-base-content/70 leading-relaxed mb-4">
                Explore the latest in tech, AI, software development, and
                digital innovation
              </p>
              <div class="card-actions items-center">
                <div class="badge badge-primary">124 articles</div>
                <div class="flex-1"></div>
                <span
                  class="text-primary font-medium group-hover:gap-2 flex items-center transition-all"
                  >Explore<i class="ri-arrow-right-line"></i
                ></span>
              </div></div></a
          ><a
            class="card lg:card-side bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 group overflow-hidden"
            href="/categories/lifestyle"
            data-discover="true"
            ><figure class="lg:w-64 h-64 lg:h-auto overflow-hidden">
              <img
                alt="Lifestyle"
                class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
                src="https://readdy.ai/api/search-image?query=healthy%20lifestyle%20wellness%20yoga%20meditation%20peaceful%20environment%20with%20natural%20elements%20on%20clean%20white%20background&amp;width=800&amp;height=500&amp;seq=27&amp;orientation=landscape"
              />
            </figure>
            <div class="card-body">
              <div class="flex items-center gap-3 mb-2">
                <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 group-hover:bg-primary group-hover:text-primary-content transition-all duration-300"
                >
                  <i class="ri-heart-line text-2xl"></i>
                </div>
                <h2 class="card-title text-2xl font-display">Lifestyle</h2>
              </div>
              <p class="text-base-content/70 leading-relaxed mb-4">
                Tips for better living, wellness, productivity, and personal
                growth
              </p>
              <div class="card-actions items-center">
                <div class="badge badge-secondary">98 articles</div>
                <div class="flex-1"></div>
                <span
                  class="text-primary font-medium group-hover:gap-2 flex items-center transition-all"
                  >Explore<i class="ri-arrow-right-line"></i
                ></span>
              </div></div></a
          ><a
            class="card lg:card-side bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 group overflow-hidden"
            href="/categories/design"
            data-discover="true"
            ><figure class="lg:w-64 h-64 lg:h-auto overflow-hidden">
              <img
                alt="Design"
                class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
                src="https://readdy.ai/api/search-image?query=creative%20design%20workspace%20with%20color%20palettes%20sketches%20and%20design%20tools%20on%20clean%20white%20background%20artistic%20setup&amp;width=800&amp;height=500&amp;seq=28&amp;orientation=landscape"
              />
            </figure>
            <div class="card-body">
              <div class="flex items-center gap-3 mb-2">
                <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 group-hover:bg-primary group-hover:text-primary-content transition-all duration-300"
                >
                  <i class="ri-palette-line text-2xl"></i>
                </div>
                <h2 class="card-title text-2xl font-display">Design</h2>
              </div>
              <p class="text-base-content/70 leading-relaxed mb-4">
                UI/UX design, graphic design, creative inspiration, and design
                systems
              </p>
              <div class="card-actions items-center">
                <div class="badge badge-accent">87 articles</div>
                <div class="flex-1"></div>
                <span
                  class="text-primary font-medium group-hover:gap-2 flex items-center transition-all"
                  >Explore<i class="ri-arrow-right-line"></i
                ></span>
              </div></div></a
          ><a
            class="card lg:card-side bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 group overflow-hidden"
            href="/categories/business"
            data-discover="true"
            ><figure class="lg:w-64 h-64 lg:h-auto overflow-hidden">
              <img
                alt="Business"
                class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
                src="https://readdy.ai/api/search-image?query=modern%20business%20office%20meeting%20with%20professionals%20collaborating%20on%20strategy%20clean%20bright%20environment&amp;width=800&amp;height=500&amp;seq=29&amp;orientation=landscape"
              />
            </figure>
            <div class="card-body">
              <div class="flex items-center gap-3 mb-2">
                <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 group-hover:bg-primary group-hover:text-primary-content transition-all duration-300"
                >
                  <i class="ri-briefcase-line text-2xl"></i>
                </div>
                <h2 class="card-title text-2xl font-display">Business</h2>
              </div>
              <p class="text-base-content/70 leading-relaxed mb-4">
                Entrepreneurship, marketing strategies, leadership, and business
                growth
              </p>
              <div class="card-actions items-center">
                <div class="badge badge-info">76 articles</div>
                <div class="flex-1"></div>
                <span
                  class="text-primary font-medium group-hover:gap-2 flex items-center transition-all"
                  >Explore<i class="ri-arrow-right-line"></i
                ></span>
              </div></div></a
          ><a
            class="card lg:card-side bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 group overflow-hidden"
            href="/categories/travel"
            data-discover="true"
            ><figure class="lg:w-64 h-64 lg:h-auto overflow-hidden">
              <img
                alt="Travel"
                class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
                src="https://readdy.ai/api/search-image?query=beautiful%20travel%20destination%20scenic%20landscape%20with%20mountains%20and%20clear%20sky%20adventure%20photography%20inspiring%20view&amp;width=800&amp;height=500&amp;seq=30&amp;orientation=landscape"
              />
            </figure>
            <div class="card-body">
              <div class="flex items-center gap-3 mb-2">
                <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 group-hover:bg-primary group-hover:text-primary-content transition-all duration-300"
                >
                  <i class="ri-map-pin-line text-2xl"></i>
                </div>
                <h2 class="card-title text-2xl font-display">Travel</h2>
              </div>
              <p class="text-base-content/70 leading-relaxed mb-4">
                Travel guides, destination reviews, adventure stories, and
                travel tips
              </p>
              <div class="card-actions items-center">
                <div class="badge badge-success">65 articles</div>
                <div class="flex-1"></div>
                <span
                  class="text-primary font-medium group-hover:gap-2 flex items-center transition-all"
                  >Explore<i class="ri-arrow-right-line"></i
                ></span>
              </div></div></a
          ><a
            class="card lg:card-side bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 group overflow-hidden"
            href="/categories/food"
            data-discover="true"
            ><figure class="lg:w-64 h-64 lg:h-auto overflow-hidden">
              <img
                alt="Food"
                class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
                src="https://readdy.ai/api/search-image?query=delicious%20gourmet%20food%20beautifully%20plated%20on%20clean%20white%20background%20culinary%20art%20food%20photography&amp;width=800&amp;height=500&amp;seq=31&amp;orientation=landscape"
              />
            </figure>
            <div class="card-body">
              <div class="flex items-center gap-3 mb-2">
                <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 group-hover:bg-primary group-hover:text-primary-content transition-all duration-300"
                >
                  <i class="ri-restaurant-line text-2xl"></i>
                </div>
                <h2 class="card-title text-2xl font-display">Food</h2>
              </div>
              <p class="text-base-content/70 leading-relaxed mb-4">
                Recipes, cooking techniques, food culture, and culinary
                adventures
              </p>
              <div class="card-actions items-center">
                <div class="badge badge-warning">54 articles</div>
                <div class="flex-1"></div>
                <span
                  class="text-primary font-medium group-hover:gap-2 flex items-center transition-all"
                  >Explore<i class="ri-arrow-right-line"></i
                ></span>
              </div></div></a
          ><a
            class="card lg:card-side bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 group overflow-hidden"
            href="/categories/health"
            data-discover="true"
            ><figure class="lg:w-64 h-64 lg:h-auto overflow-hidden">
              <img
                alt="Health"
                class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
                src="https://readdy.ai/api/search-image?query=fitness%20health%20workout%20exercise%20with%20healthy%20lifestyle%20elements%20on%20clean%20white%20background%20wellness%20concept&amp;width=800&amp;height=500&amp;seq=32&amp;orientation=landscape"
              />
            </figure>
            <div class="card-body">
              <div class="flex items-center gap-3 mb-2">
                <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 group-hover:bg-primary group-hover:text-primary-content transition-all duration-300"
                >
                  <i class="ri-heart-pulse-line text-2xl"></i>
                </div>
                <h2 class="card-title text-2xl font-display">Health</h2>
              </div>
              <p class="text-base-content/70 leading-relaxed mb-4">
                Health tips, fitness routines, nutrition advice, and mental
                wellness
              </p>
              <div class="card-actions items-center">
                <div class="badge badge-error">43 articles</div>
                <div class="flex-1"></div>
                <span
                  class="text-primary font-medium group-hover:gap-2 flex items-center transition-all"
                  >Explore<i class="ri-arrow-right-line"></i
                ></span>
              </div></div></a
          ><a
            class="card lg:card-side bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 group overflow-hidden"
            href="/categories/education"
            data-discover="true"
            ><figure class="lg:w-64 h-64 lg:h-auto overflow-hidden">
              <img
                alt="Education"
                class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
                src="https://readdy.ai/api/search-image?query=modern%20education%20learning%20environment%20with%20books%20laptop%20and%20study%20materials%20on%20clean%20white%20background&amp;width=800&amp;height=500&amp;seq=33&amp;orientation=landscape"
              />
            </figure>
            <div class="card-body">
              <div class="flex items-center gap-3 mb-2">
                <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 group-hover:bg-primary group-hover:text-primary-content transition-all duration-300"
                >
                  <i class="ri-book-open-line text-2xl"></i>
                </div>
                <h2 class="card-title text-2xl font-display">Education</h2>
              </div>
              <p class="text-base-content/70 leading-relaxed mb-4">
                Learning resources, study tips, online courses, and educational
                insights
              </p>
              <div class="card-actions items-center">
                <div class="badge badge-primary">39 articles</div>
                <div class="flex-1"></div>
                <span
                  class="text-primary font-medium group-hover:gap-2 flex items-center transition-all"
                  >Explore<i class="ri-arrow-right-line"></i
                ></span>
              </div></div
          ></a>
        </div>
      </div>
    </section>


<!-- ==========  Foot start ========== -->
<?php include 'layout/footer.php' ?>
<!-- ==========  Foot start ========== -->