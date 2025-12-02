<?php
include 'layout/head.php';

?>
<!-- ========== Navbar start ========== -->
<?php include 'layout/navBar.php'; ?>
<!-- ========== Nav bar end ========== -->

<!-- ==========  Blog Articles start ========== -->
<section
  class="bg-gradient-to-br from-primary/10 via-secondary/10 to-accent/10 py-16">
  <div class="max-w-7xl mx-auto px-4 text-center">
    <h1 class="text-5xl font-display font-bold text-base-content mb-4">
      Blog Articles
    </h1>
    <p class="text-xl text-base-content/70 max-w-2xl mx-auto">
      Explore our collection of insightful articles, stories, and guides
    </p>
  </div>
</section>
<!-- ==========  Blog Articles end ========== -->

<!-- ========== categories  Search start ========== -->
<section class="bg-base-100 border-b border-base-300 sticky top-16 z-40">
  <div class="max-w-7xl mx-auto px-4 py-6">
    <div
      class="flex flex-col lg:flex-row gap-4 justify-between items-center">
      <div class="flex flex-wrap gap-2 justify-center lg:justify-start">
        <button class="btn btn-sm btn-primary whitespace-nowrap">All</button><button class="btn btn-sm btn-ghost whitespace-nowrap">
          Technology</button><button class="btn btn-sm btn-ghost whitespace-nowrap">
          Lifestyle</button><button class="btn btn-sm btn-ghost whitespace-nowrap">
          Design</button><button class="btn btn-sm btn-ghost whitespace-nowrap">
          Business</button><button class="btn btn-sm btn-ghost whitespace-nowrap">
          Travel</button><button class="btn btn-sm btn-ghost whitespace-nowrap">
          Food
        </button>
      </div>
      <div class="flex gap-3 items-center">
        <a
          class="btn btn-ghost btn-sm whitespace-nowrap"
          href="/search"
          data-discover="true"><i class="ri-search-line"></i>Search</a><select class="select select-bordered select-sm">
          <option value="newest">Newest First</option>
          <option value="popular">Most Popular</option>
          <option value="views">Most Viewed</option>
        </select>
      </div>
    </div>
  </div>
</section>
<!-- ========== categories  Search end ========== -->

<!-- ========== categories  Technology start ========== -->



<section class="py-16 bg-base-100 flex-1">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <article
        class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer group">
        <figure class="relative overflow-hidden h-56">
          <img
            alt="The Future of Artificial Intelligence in Everyday Life"
            class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
            src="assets/img_res/7ae1a804af8e025700424b5640eba190.jpg" />
          <div class="badge badge-primary absolute top-4 left-4">
            Technology
          </div>
        </figure>
        <div class="card-body">
          <h3
            class="card-title text-xl font-semibold leading-tight hover:text-primary transition-colors">
            <a href="blogDetails.php" data-discover="true">The Future of Artificial Intelligence in Everyday Life</a>
          </h3>
          <p class="text-base-content/70 leading-relaxed line-clamp-3">
            Exploring how AI is transforming our daily routines, from smart
            homes to personalized recommendations, and what the future holds
            for human-AI collaboration in various aspects of modern living.
          </p>
          <div
            class="flex items-center gap-2 mt-2 text-sm text-base-content/60">
            <i class="ri-eye-line"></i><span>2,543 views</span>
          </div>
          <div
            class="flex items-center gap-3 mt-4 pt-4 border-t border-base-300">
            <div class="avatar placeholder">
              <div
                class="bg-primary text-primary-content rounded-full w-10 h-10 flex items-center justify-center">
                <span class="text-sm">SJ</span>
              </div>
            </div>
            <div class="flex-1">
              <div class="font-medium text-sm">Sarah Johnson</div>
              <div class="text-xs text-base-content/60">
                Dec 28, 2024 · 8 min read
              </div>
            </div>
          </div>
        </div>
      </article>
      <article
        class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer group">
        <figure class="relative overflow-hidden h-56">
          <img
            alt="Minimalist Living: Finding Joy in Simplicity"
            class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
            src="https://readdy.ai/api/search-image?query=minimalist%20scandinavian%20interior%20design%20with%20clean%20white%20space%20natural%20light%20simple%20furniture%20and%20plants%20peaceful%20atmosphere&amp;width=800&amp;height=500&amp;seq=12&amp;orientation=landscape" />
          <div class="badge badge-primary absolute top-4 left-4">
            Lifestyle
          </div>
        </figure>
        <div class="card-body">
          <h3
            class="card-title text-xl font-semibold leading-tight hover:text-primary transition-colors">
            <a href="blogDetails.php" data-discover="true">Minimalist Living: Finding Joy in Simplicity</a>
          </h3>
          <p class="text-base-content/70 leading-relaxed line-clamp-3">
            Discover the art of minimalist living and how decluttering your
            space can lead to a clearer mind, reduced stress, and a more
            intentional lifestyle focused on what truly matters.
          </p>
          <div
            class="flex items-center gap-2 mt-2 text-sm text-base-content/60">
            <i class="ri-eye-line"></i><span>1,876 views</span>
          </div>
          <div
            class="flex items-center gap-3 mt-4 pt-4 border-t border-base-300">
            <div class="avatar placeholder">
              <div
                class="bg-primary text-primary-content rounded-full w-10 h-10 flex items-center justify-center">
                <span class="text-sm">MC</span>
              </div>
            </div>
            <div class="flex-1">
              <div class="font-medium text-sm">Michael Chen</div>
              <div class="text-xs text-base-content/60">
                Dec 27, 2024 · 6 min read
              </div>
            </div>
          </div>
        </div>
      </article>
      <article
        class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer group">
        <figure class="relative overflow-hidden h-56">
          <img
            alt="Design Systems That Scale: A Comprehensive Guide"
            class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
            src="https://readdy.ai/api/search-image?query=modern%20ui%20ux%20design%20system%20with%20colorful%20components%20grid%20layout%20and%20design%20tokens%20on%20light%20background%20professional%20interface&amp;width=800&amp;height=500&amp;seq=13&amp;orientation=landscape" />
          <div class="badge badge-primary absolute top-4 left-4">
            Design
          </div>
        </figure>
        <div class="card-body">
          <h3
            class="card-title text-xl font-semibold leading-tight hover:text-primary transition-colors">
            <a href="blogDetails.php" data-discover="true">Design Systems That Scale: A Comprehensive Guide</a>
          </h3>
          <p class="text-base-content/70 leading-relaxed line-clamp-3">
            Learn how to build robust design systems that grow with your
            product, maintain consistency across platforms, and empower your
            design and development teams to work efficiently.
          </p>
          <div
            class="flex items-center gap-2 mt-2 text-sm text-base-content/60">
            <i class="ri-eye-line"></i><span>3,201 views</span>
          </div>
          <div
            class="flex items-center gap-3 mt-4 pt-4 border-t border-base-300">
            <div class="avatar placeholder">
              <div
                class="bg-primary text-primary-content rounded-full w-10 h-10 flex items-center justify-center">
                <span class="text-sm">EW</span>
              </div>
            </div>
            <div class="flex-1">
              <div class="font-medium text-sm">Emma Williams</div>
              <div class="text-xs text-base-content/60">
                Dec 26, 2024 · 10 min read
              </div>
            </div>
          </div>
        </div>
      </article>
      <article
        class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer group">
        <figure class="relative overflow-hidden h-56">
          <img
            alt="Building a Successful Remote Team Culture"
            class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
            src="https://readdy.ai/api/search-image?query=diverse%20remote%20team%20working%20together%20on%20video%20call%20with%20laptops%20in%20modern%20home%20offices%20bright%20natural%20lighting%20collaborative%20atmosphere&amp;width=800&amp;height=500&amp;seq=14&amp;orientation=landscape" />
          <div class="badge badge-primary absolute top-4 left-4">
            Business
          </div>
        </figure>
        <div class="card-body">
          <h3
            class="card-title text-xl font-semibold leading-tight hover:text-primary transition-colors">
            <a href="blogDetails.php" data-discover="true">Building a Successful Remote Team Culture</a>
          </h3>
          <p class="text-base-content/70 leading-relaxed line-clamp-3">
            Practical strategies for creating strong team bonds, maintaining
            productivity, and fostering innovation in distributed work
            environments across different time zones and cultures.
          </p>
          <div
            class="flex items-center gap-2 mt-2 text-sm text-base-content/60">
            <i class="ri-eye-line"></i><span>1,654 views</span>
          </div>
          <div
            class="flex items-center gap-3 mt-4 pt-4 border-t border-base-300">
            <div class="avatar placeholder">
              <div
                class="bg-primary text-primary-content rounded-full w-10 h-10 flex items-center justify-center">
                <span class="text-sm">DM</span>
              </div>
            </div>
            <div class="flex-1">
              <div class="font-medium text-sm">David Martinez</div>
              <div class="text-xs text-base-content/60">
                Dec 25, 2024 · 7 min read
              </div>
            </div>
          </div>
        </div>
      </article>
      <article
        class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer group">
        <figure class="relative overflow-hidden h-56">
          <img
            alt="Hidden Gems: Exploring Off-the-Beaten-Path Destinations"
            class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
            src="https://readdy.ai/api/search-image?query=beautiful%20hidden%20travel%20destination%20with%20pristine%20nature%20mountain%20landscape%20clear%20blue%20sky%20peaceful%20scenic%20view%20adventure%20photography&amp;width=800&amp;height=500&amp;seq=15&amp;orientation=landscape" />
          <div class="badge badge-primary absolute top-4 left-4">
            Travel
          </div>
        </figure>
        <div class="card-body">
          <h3
            class="card-title text-xl font-semibold leading-tight hover:text-primary transition-colors">
            <a href="blogDetails.php" data-discover="true">Hidden Gems: Exploring Off-the-Beaten-Path Destinations</a>
          </h3>
          <p class="text-base-content/70 leading-relaxed line-clamp-3">
            Venture beyond tourist hotspots to discover authentic cultural
            experiences, breathtaking landscapes, and unforgettable
            adventures in lesser-known locations around the world.
          </p>
          <div
            class="flex items-center gap-2 mt-2 text-sm text-base-content/60">
            <i class="ri-eye-line"></i><span>2,987 views</span>
          </div>
          <div
            class="flex items-center gap-3 mt-4 pt-4 border-t border-base-300">
            <div class="avatar placeholder">
              <div
                class="bg-primary text-primary-content rounded-full w-10 h-10 flex items-center justify-center">
                <span class="text-sm">LA</span>
              </div>
            </div>
            <div class="flex-1">
              <div class="font-medium text-sm">Lisa Anderson</div>
              <div class="text-xs text-base-content/60">
                Dec 24, 2024 · 9 min read
              </div>
            </div>
          </div>
        </div>
      </article>
      <article
        class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer group">
        <figure class="relative overflow-hidden h-56">
          <img
            alt="The Science of Productivity: Evidence-Based Techniques"
            class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
            src="https://readdy.ai/api/search-image?query=organized%20productive%20workspace%20with%20notebook%20coffee%20plants%20and%20natural%20light%20clean%20desk%20setup%20minimal%20aesthetic%20inspiring%20environment&amp;width=800&amp;height=500&amp;seq=16&amp;orientation=landscape" />
          <div class="badge badge-primary absolute top-4 left-4">
            Lifestyle
          </div>
        </figure>
        <div class="card-body">
          <h3
            class="card-title text-xl font-semibold leading-tight hover:text-primary transition-colors">
            <a href="blogDetails.php" data-discover="true">The Science of Productivity: Evidence-Based Techniques</a>
          </h3>
          <p class="text-base-content/70 leading-relaxed line-clamp-3">
            Dive into research-backed methods for enhancing focus, managing
            time effectively, and achieving your goals without burning out
            in today's fast-paced world.
          </p>
          <div
            class="flex items-center gap-2 mt-2 text-sm text-base-content/60">
            <i class="ri-eye-line"></i><span>2,134 views</span>
          </div>
          <div
            class="flex items-center gap-3 mt-4 pt-4 border-t border-base-300">
            <div class="avatar placeholder">
              <div
                class="bg-primary text-primary-content rounded-full w-10 h-10 flex items-center justify-center">
                <span class="text-sm">JW</span>
              </div>
            </div>
            <div class="flex-1">
              <div class="font-medium text-sm">James Wilson</div>
              <div class="text-xs text-base-content/60">
                Dec 23, 2024 · 8 min read
              </div>
            </div>
          </div>
        </div>
      </article>
      <article
        class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer group">
        <figure class="relative overflow-hidden h-56">
          <img
            alt="Sustainable Web Design: Creating Eco-Friendly Websites"
            class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
            src="https://readdy.ai/api/search-image?query=eco%20friendly%20sustainable%20technology%20concept%20with%20green%20leaves%20and%20digital%20elements%20on%20clean%20white%20background%20environmental%20design&amp;width=800&amp;height=500&amp;seq=17&amp;orientation=landscape" />
          <div class="badge badge-primary absolute top-4 left-4">
            Design
          </div>
        </figure>
        <div class="card-body">
          <h3
            class="card-title text-xl font-semibold leading-tight hover:text-primary transition-colors">
            <a href="blogDetails.php" data-discover="true">Sustainable Web Design: Creating Eco-Friendly Websites</a>
          </h3>
          <p class="text-base-content/70 leading-relaxed line-clamp-3">
            Explore how to reduce your website's carbon footprint through
            efficient coding, optimized assets, and sustainable hosting
            choices while maintaining excellent user experience.
          </p>
          <div
            class="flex items-center gap-2 mt-2 text-sm text-base-content/60">
            <i class="ri-eye-line"></i><span>1,543 views</span>
          </div>
          <div
            class="flex items-center gap-3 mt-4 pt-4 border-t border-base-300">
            <div class="avatar placeholder">
              <div
                class="bg-primary text-primary-content rounded-full w-10 h-10 flex items-center justify-center">
                <span class="text-sm">EW</span>
              </div>
            </div>
            <div class="flex-1">
              <div class="font-medium text-sm">Emma Williams</div>
              <div class="text-xs text-base-content/60">
                Dec 22, 2024 · 7 min read
              </div>
            </div>
          </div>
        </div>
      </article>
      <article
        class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer group">
        <figure class="relative overflow-hidden h-56">
          <img
            alt="Blockchain Beyond Cryptocurrency: Real-World Applications"
            class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
            src="https://readdy.ai/api/search-image?query=blockchain%20technology%20network%20visualization%20with%20connected%20nodes%20and%20digital%20chains%20on%20clean%20white%20background%20modern%20tech%20concept&amp;width=800&amp;height=500&amp;seq=18&amp;orientation=landscape" />
          <div class="badge badge-primary absolute top-4 left-4">
            Technology
          </div>
        </figure>
        <div class="card-body">
          <h3
            class="card-title text-xl font-semibold leading-tight hover:text-primary transition-colors">
            <a href="blogDetails.php" data-discover="true">Blockchain Beyond Cryptocurrency: Real-World Applications</a>
          </h3>
          <p class="text-base-content/70 leading-relaxed line-clamp-3">
            Discover how blockchain technology is revolutionizing industries
            from healthcare to supply chain management, creating transparent
            and secure systems for the future.
          </p>
          <div
            class="flex items-center gap-2 mt-2 text-sm text-base-content/60">
            <i class="ri-eye-line"></i><span>2,876 views</span>
          </div>
          <div
            class="flex items-center gap-3 mt-4 pt-4 border-t border-base-300">
            <div class="avatar placeholder">
              <div
                class="bg-primary text-primary-content rounded-full w-10 h-10 flex items-center justify-center">
                <span class="text-sm">SJ</span>
              </div>
            </div>
            <div class="flex-1">
              <div class="font-medium text-sm">Sarah Johnson</div>
              <div class="text-xs text-base-content/60">
                Dec 21, 2024 · 9 min read
              </div>
            </div>
          </div>
        </div>
      </article>
      <article
        class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer group">
        <figure class="relative overflow-hidden h-56">
          <img
            alt="Culinary Adventures: Mastering International Cuisines at Home"
            class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
            src="https://readdy.ai/api/search-image?query=colorful%20international%20cuisine%20dishes%20beautifully%20plated%20on%20clean%20white%20background%20food%20photography%20culinary%20art%20vibrant%20presentation&amp;width=800&amp;height=500&amp;seq=19&amp;orientation=landscape" />
          <div class="badge badge-primary absolute top-4 left-4">Food</div>
        </figure>
        <div class="card-body">
          <h3
            class="card-title text-xl font-semibold leading-tight hover:text-primary transition-colors">
            <a href="blogDetails.php" data-discover="true">Culinary Adventures: Mastering International Cuisines at
              Home</a>
          </h3>
          <p class="text-base-content/70 leading-relaxed line-clamp-3">
            Learn the secrets of authentic international cooking with
            step-by-step guides, ingredient tips, and cultural insights that
            bring global flavors to your kitchen.
          </p>
          <div
            class="flex items-center gap-2 mt-2 text-sm text-base-content/60">
            <i class="ri-eye-line"></i><span>1,987 views</span>
          </div>
          <div
            class="flex items-center gap-3 mt-4 pt-4 border-t border-base-300">
            <div class="avatar placeholder">
              <div
                class="bg-primary text-primary-content rounded-full w-10 h-10 flex items-center justify-center">
                <span class="text-sm">MG</span>
              </div>
            </div>
            <div class="flex-1">
              <div class="font-medium text-sm">Maria Garcia</div>
              <div class="text-xs text-base-content/60">
                Dec 20, 2024 · 6 min read
              </div>
            </div>
          </div>
        </div>
      </article>
    </div>
    <div class="flex justify-center mt-12">
      <div class="join">
        <button class="join-item btn btn-sm">«</button><button class="join-item btn btn-sm btn-active">1</button><button class="join-item btn btn-sm">2</button><button class="join-item btn btn-sm">3</button><button class="join-item btn btn-sm">4</button><button class="join-item btn btn-sm">»</button>
      </div>
    </div>
  </div>
</section>

<!-- ========== categories  Technology end ========== -->

<!-- ==========  Foot start ========== -->
<?php include 'layout/footer.php' ?>
<!-- ==========  Foot start ========== -->