<?php
   include 'layout/head.php'
   ?>
<!-- ========== Navbar start ========== -->
<?php
   include 'layout/navBar.php'
   ?>
<!-- ========== Navbar End ========== -->
<!-- ========== banner start  ========== -->
<section
   class="relative bg-gradient-to-br from-primary/10 via-secondary/10 to-accent/10 py-20 lg:py-32">
   <div class="max-w-7xl mx-auto px-4">
      <div class="text-center max-w-4xl mx-auto">
         <h1
            class="text-5xl lg:text-7xl font-display font-bold text-base-content mb-6 leading-tight">
            Discover Stories That <span class="text-primary">Inspire</span>
         </h1>
         <p
            class="text-xl lg:text-2xl text-base-content/70 mb-8 leading-relaxed">
            Explore insightful articles on technology, lifestyle, design, and
            more. Join our community of curious minds sharing knowledge and
            inspiration.
         </p>
         <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a
               class="btn btn-primary btn-lg whitespace-nowrap"
               href="/blog.html"
               data-discover="true"><i class="ri-article-line"></i>Explore Articles</a><a
               class="btn btn-outline btn-lg whitespace-nowrap"
               href="/register.html"
               data-discover="true"><i class="ri-user-add-line"></i>Join Community</a>
         </div>
         <div class="flex flex-wrap justify-center gap-8 mt-12">
            <div class="text-center">
               <div class="text-4xl font-bold text-primary">500+</div>
               <div class="text-base-content/60">Articles</div>
            </div>
            <div class="text-center">
               <div class="text-4xl font-bold text-primary">50K+</div>
               <div class="text-base-content/60">Readers</div>
            </div>
            <div class="text-center">
               <div class="text-4xl font-bold text-primary">100+</div>
               <div class="text-base-content/60">Writers</div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ========== banner end  ========== -->
<!-- ==========  Trending Topics start ========== -->
<section class="py-20 bg-base-100">
   <div class="max-w-7xl mx-auto px-4">
      <div class="text-center mb-12">
         <h2 class="text-4xl font-display font-bold text-base-content mb-4">
            Trending Topics
         </h2>
         <p class="text-base-content/60 text-lg">
            Explore what's hot right now
         </p>
      </div>
      <div class="hidden lg:grid grid-cols-4 gap-4">
         <a
            class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
            href="/search?q=Artificial%20Intelligence"
            data-discover="true"
            style="
            background-image: linear-gradient(
            to bottom right,
            var(--fallback-p, oklch(var(--p))) / 0.2,
            var(--fallback-s, oklch(var(--s))) / 0.2
            );
            ">
            <div
               class="card-body items-center text-center p-6 bg-gradient-to-br from-orange-400/20 to-red-400/20 rounded-xl">
               <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                  <i class="ri-fire-fill text-2xl"></i>
               </div>
               <h3 class="font-semibold text-base text-base-content">
                  Artificial Intelligence
               </h3>
               <div class="badge badge-sm badge-outline mt-2">156 posts</div>
            </div>
         </a>
         <a
            class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
            href="/search?q=Remote%20Work"
            data-discover="true"
            style="
            background-image: linear-gradient(
            to bottom right,
            var(--fallback-p, oklch(var(--p))) / 0.2,
            var(--fallback-s, oklch(var(--s))) / 0.2
            );
            ">
            <div
               class="card-body items-center text-center p-6 bg-gradient-to-br from-emerald-400/20 to-teal-400/20 rounded-xl">
               <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                  <i class="ri-fire-fill text-2xl"></i>
               </div>
               <h3 class="font-semibold text-base text-base-content">
                  Remote Work
               </h3>
               <div class="badge badge-sm badge-outline mt-2">142 posts</div>
            </div>
         </a>
         <a
            class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
            href="/search?q=Sustainable%20Living"
            data-discover="true"
            style="
            background-image: linear-gradient(
            to bottom right,
            var(--fallback-p, oklch(var(--p))) / 0.2,
            var(--fallback-s, oklch(var(--s))) / 0.2
            );
            ">
            <div
               class="card-body items-center text-center p-6 bg-gradient-to-br from-green-400/20 to-lime-400/20 rounded-xl">
               <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                  <i class="ri-fire-fill text-2xl"></i>
               </div>
               <h3 class="font-semibold text-base text-base-content">
                  Sustainable Living
               </h3>
               <div class="badge badge-sm badge-outline mt-2">128 posts</div>
            </div>
         </a>
         <a
            class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
            href="/search?q=Web3%20%26%20Blockchain"
            data-discover="true"
            style="
            background-image: linear-gradient(
            to bottom right,
            var(--fallback-p, oklch(var(--p))) / 0.2,
            var(--fallback-s, oklch(var(--s))) / 0.2
            );
            ">
            <div
               class="card-body items-center text-center p-6 bg-gradient-to-br from-cyan-400/20 to-sky-400/20 rounded-xl">
               <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                  <i class="ri-fire-fill text-2xl"></i>
               </div>
               <h3 class="font-semibold text-base text-base-content">
                  Web3 &amp; Blockchain
               </h3>
               <div class="badge badge-sm badge-outline mt-2">115 posts</div>
            </div>
         </a>
         <a
            class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
            href="/search?q=Mental%20Health"
            data-discover="true"
            style="
            background-image: linear-gradient(
            to bottom right,
            var(--fallback-p, oklch(var(--p))) / 0.2,
            var(--fallback-s, oklch(var(--s))) / 0.2
            );
            ">
            <div
               class="card-body items-center text-center p-6 bg-gradient-to-br from-pink-400/20 to-rose-400/20 rounded-xl">
               <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                  <i class="ri-fire-fill text-2xl"></i>
               </div>
               <h3 class="font-semibold text-base text-base-content">
                  Mental Health
               </h3>
               <div class="badge badge-sm badge-outline mt-2">103 posts</div>
            </div>
         </a>
         <a
            class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
            href="/search?q=Digital%20Marketing"
            data-discover="true"
            style="
            background-image: linear-gradient(
            to bottom right,
            var(--fallback-p, oklch(var(--p))) / 0.2,
            var(--fallback-s, oklch(var(--s))) / 0.2
            );
            ">
            <div
               class="card-body items-center text-center p-6 bg-gradient-to-br from-amber-400/20 to-orange-400/20 rounded-xl">
               <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                  <i class="ri-fire-fill text-2xl"></i>
               </div>
               <h3 class="font-semibold text-base text-base-content">
                  Digital Marketing
               </h3>
               <div class="badge badge-sm badge-outline mt-2">98 posts</div>
            </div>
         </a>
         <a
            class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
            href="/search?q=Productivity%20Hacks"
            data-discover="true"
            style="
            background-image: linear-gradient(
            to bottom right,
            var(--fallback-p, oklch(var(--p))) / 0.2,
            var(--fallback-s, oklch(var(--s))) / 0.2
            );
            ">
            <div
               class="card-body items-center text-center p-6 bg-gradient-to-br from-indigo-400/20 to-purple-400/20 rounded-xl">
               <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                  <i class="ri-fire-fill text-2xl"></i>
               </div>
               <h3 class="font-semibold text-base text-base-content">
                  Productivity Hacks
               </h3>
               <div class="badge badge-sm badge-outline mt-2">87 posts</div>
            </div>
         </a>
         <a
            class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
            href="/search?q=Climate%20Change"
            data-discover="true"
            style="
            background-image: linear-gradient(
            to bottom right,
            var(--fallback-p, oklch(var(--p))) / 0.2,
            var(--fallback-s, oklch(var(--s))) / 0.2
            );
            ">
            <div
               class="card-body items-center text-center p-6 bg-gradient-to-br from-teal-400/20 to-emerald-400/20 rounded-xl">
               <div
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                  <i class="ri-fire-fill text-2xl"></i>
               </div>
               <h3 class="font-semibold text-base text-base-content">
                  Climate Change
               </h3>
               <div class="badge badge-sm badge-outline mt-2">76 posts</div>
            </div>
         </a>
      </div>
      <div class="lg:hidden overflow-x-auto pb-4 -mx-4 px-4">
         <div class="flex gap-4" style="width: max-content">
            <a
               class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
               href="/search?q=Artificial%20Intelligence"
               data-discover="true"
               style="width: 200px; flex-shrink: 0">
               <div
                  class="card-body items-center text-center p-6 bg-gradient-to-br from-orange-400/20 to-red-400/20 rounded-xl">
                  <div
                     class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                     <i class="ri-fire-fill text-2xl"></i>
                  </div>
                  <h3 class="font-semibold text-base text-base-content">
                     Artificial Intelligence
                  </h3>
                  <div class="badge badge-sm badge-outline mt-2">156 posts</div>
               </div>
            </a>
            <a
               class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
               href="/search?q=Remote%20Work"
               data-discover="true"
               style="width: 200px; flex-shrink: 0">
               <div
                  class="card-body items-center text-center p-6 bg-gradient-to-br from-emerald-400/20 to-teal-400/20 rounded-xl">
                  <div
                     class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                     <i class="ri-fire-fill text-2xl"></i>
                  </div>
                  <h3 class="font-semibold text-base text-base-content">
                     Remote Work
                  </h3>
                  <div class="badge badge-sm badge-outline mt-2">142 posts</div>
               </div>
            </a>
            <a
               class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
               href="/search?q=Sustainable%20Living"
               data-discover="true"
               style="width: 200px; flex-shrink: 0">
               <div
                  class="card-body items-center text-center p-6 bg-gradient-to-br from-green-400/20 to-lime-400/20 rounded-xl">
                  <div
                     class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                     <i class="ri-fire-fill text-2xl"></i>
                  </div>
                  <h3 class="font-semibold text-base text-base-content">
                     Sustainable Living
                  </h3>
                  <div class="badge badge-sm badge-outline mt-2">128 posts</div>
               </div>
            </a>
            <a
               class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
               href="/search?q=Web3%20%26%20Blockchain"
               data-discover="true"
               style="width: 200px; flex-shrink: 0">
               <div
                  class="card-body items-center text-center p-6 bg-gradient-to-br from-cyan-400/20 to-sky-400/20 rounded-xl">
                  <div
                     class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                     <i class="ri-fire-fill text-2xl"></i>
                  </div>
                  <h3 class="font-semibold text-base text-base-content">
                     Web3 &amp; Blockchain
                  </h3>
                  <div class="badge badge-sm badge-outline mt-2">115 posts</div>
               </div>
            </a>
            <a
               class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
               href="/search?q=Mental%20Health"
               data-discover="true"
               style="width: 200px; flex-shrink: 0">
               <div
                  class="card-body items-center text-center p-6 bg-gradient-to-br from-pink-400/20 to-rose-400/20 rounded-xl">
                  <div
                     class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                     <i class="ri-fire-fill text-2xl"></i>
                  </div>
                  <h3 class="font-semibold text-base text-base-content">
                     Mental Health
                  </h3>
                  <div class="badge badge-sm badge-outline mt-2">103 posts</div>
               </div>
            </a>
            <a
               class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
               href="/search?q=Digital%20Marketing"
               data-discover="true"
               style="width: 200px; flex-shrink: 0">
               <div
                  class="card-body items-center text-center p-6 bg-gradient-to-br from-amber-400/20 to-orange-400/20 rounded-xl">
                  <div
                     class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                     <i class="ri-fire-fill text-2xl"></i>
                  </div>
                  <h3 class="font-semibold text-base text-base-content">
                     Digital Marketing
                  </h3>
                  <div class="badge badge-sm badge-outline mt-2">98 posts</div>
               </div>
            </a>
            <a
               class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
               href="/search?q=Productivity%20Hacks"
               data-discover="true"
               style="width: 200px; flex-shrink: 0">
               <div
                  class="card-body items-center text-center p-6 bg-gradient-to-br from-indigo-400/20 to-purple-400/20 rounded-xl">
                  <div
                     class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                     <i class="ri-fire-fill text-2xl"></i>
                  </div>
                  <h3 class="font-semibold text-base text-base-content">
                     Productivity Hacks
                  </h3>
                  <div class="badge badge-sm badge-outline mt-2">87 posts</div>
               </div>
            </a>
            <a
               class="card bg-gradient-to-br shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group hover:scale-105"
               href="/search?q=Climate%20Change"
               data-discover="true"
               style="width: 200px; flex-shrink: 0">
               <div
                  class="card-body items-center text-center p-6 bg-gradient-to-br from-teal-400/20 to-emerald-400/20 rounded-xl">
                  <div
                     class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-500 text-white mb-3">
                     <i class="ri-fire-fill text-2xl"></i>
                  </div>
                  <h3 class="font-semibold text-base text-base-content">
                     Climate Change
                  </h3>
                  <div class="badge badge-sm badge-outline mt-2">76 posts</div>
               </div>
            </a>
         </div>
      </div>
   </div>
</section>
<!-- ==========  Trending Topics end ========== -->

<!-- ==========   Latest Articles start ========== -->
<section class="py-20 bg-base-200">
   <div class="max-w-7xl mx-auto px-4">
      <div class="flex justify-between items-center mb-12">
         <div>
            <h2 class="text-4xl font-display font-bold text-base-content mb-2">
               Latest Articles
            </h2>
            <p class="text-base-content/60">
               Fresh insights and stories from our community
            </p>
         </div>
         <a
            class="btn btn-outline whitespace-nowrap"
            href="blogdetails.html"
            data-discover="true">View All<i class="ri-arrow-right-line"></i></a>
      </div>
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
                  <a href="blogdetails.html" data-discover="true">The Future of Artificial Intelligence in Everyday Life</a>
               </h3>
               <p class="text-base-content/70 leading-relaxed">
                  Exploring how AI is transforming our daily routines, from smart
                  homes to personalized recommendations, and what the future holds
                  for human-AI collaboration.
               </p>
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
                  src="https://readdy.ai/api/search-image?query=minimalist%20scandinavian%20interior%20design%20with%20clean%20white%20space%20natural%20light%20simple%20furniture%20and%20plants%20peaceful%20atmosphere&amp;width=800&amp;height=500&amp;seq=2&amp;orientation=landscape" />
               <div class="badge badge-primary absolute top-4 left-4">
                  Lifestyle
               </div>
            </figure>
            <div class="card-body">
               <h3
                  class="card-title text-xl font-semibold leading-tight hover:text-primary transition-colors">
                  <a href="blogdetails.html" data-discover="true">Minimalist Living: Finding Joy in Simplicity</a>
               </h3>
               <p class="text-base-content/70 leading-relaxed">
                  Discover the art of minimalist living and how decluttering your
                  space can lead to a clearer mind, reduced stress, and a more
                  intentional lifestyle.
               </p>
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
                  src="https://readdy.ai/api/search-image?query=modern%20ui%20ux%20design%20system%20with%20colorful%20components%20grid%20layout%20and%20design%20tokens%20on%20light%20background%20professional%20interface&amp;width=800&amp;height=500&amp;seq=3&amp;orientation=landscape" />
               <div class="badge badge-primary absolute top-4 left-4">
                  Design
               </div>
            </figure>
            <div class="card-body">
               <h3
                  class="card-title text-xl font-semibold leading-tight hover:text-primary transition-colors">
                  <a href="blogdetails.html" data-discover="true">Design Systems That Scale: A Comprehensive Guide</a>
               </h3>
               <p class="text-base-content/70 leading-relaxed">
                  Learn how to build robust design systems that grow with your
                  product, maintain consistency across platforms, and empower your
                  design and development teams.
               </p>
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
                  src="https://readdy.ai/api/search-image?query=diverse%20remote%20team%20working%20together%20on%20video%20call%20with%20laptops%20in%20modern%20home%20offices%20bright%20natural%20lighting%20collaborative%20atmosphere&amp;width=800&amp;height=500&amp;seq=4&amp;orientation=landscape" />
               <div class="badge badge-primary absolute top-4 left-4">
                  Business
               </div>
            </figure>
            <div class="card-body">
               <h3
                  class="card-title text-xl font-semibold leading-tight hover:text-primary transition-colors">
                  <a href="blogdetails.html" data-discover="true">Building a Successful Remote Team Culture</a>
               </h3>
               <p class="text-base-content/70 leading-relaxed">
                  Practical strategies for creating strong team bonds, maintaining
                  productivity, and fostering innovation in distributed work
                  environments.
               </p>
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
                  src="https://readdy.ai/api/search-image?query=beautiful%20hidden%20travel%20destination%20with%20pristine%20nature%20mountain%20landscape%20clear%20blue%20sky%20peaceful%20scenic%20view%20adventure%20photography&amp;width=800&amp;height=500&amp;seq=5&amp;orientation=landscape" />
               <div class="badge badge-primary absolute top-4 left-4">
                  Travel
               </div>
            </figure>
            <div class="card-body">
               <h3
                  class="card-title text-xl font-semibold leading-tight hover:text-primary transition-colors">
                  <a href="blogdetails.html" data-discover="true">Hidden Gems: Exploring Off-the-Beaten-Path Destinations</a>
               </h3>
               <p class="text-base-content/70 leading-relaxed">
                  Venture beyond tourist hotspots to discover authentic cultural
                  experiences, breathtaking landscapes, and unforgettable
                  adventures in lesser-known locations.
               </p>
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
                  src="https://readdy.ai/api/search-image?query=organized%20productive%20workspace%20with%20notebook%20coffee%20plants%20and%20natural%20light%20clean%20desk%20setup%20minimal%20aesthetic%20inspiring%20environment&amp;width=800&amp;height=500&amp;seq=6&amp;orientation=landscape" />
               <div class="badge badge-primary absolute top-4 left-4">
                  Lifestyle
               </div>
            </figure>
            <div class="card-body">
               <h3
                  class="card-title text-xl font-semibold leading-tight hover:text-primary transition-colors">
                  <a href="blogdetails.html" data-discover="true">The Science of Productivity: Evidence-Based Techniques</a>
               </h3>
               <p class="text-base-content/70 leading-relaxed">
                  Dive into research-backed methods for enhancing focus, managing
                  time effectively, and achieving your goals without burning out.
               </p>
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
      </div>
   </div>
</section>
<!-- ==========   Latest Articles end ========== -->

<!-- ==========   Explore by Category start ========== -->
<section class="py-20 bg-base-100">
   <div class="max-w-7xl mx-auto px-4">
      <div class="text-center mb-12">
         <h2 class="text-4xl font-display font-bold text-base-content mb-4">
            Explore by Category
         </h2>
         <p class="text-base-content/60 text-lg">
            Find articles that match your interests
         </p>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
         <a
            class="card bg-base-100 shadow hover:shadow-lg transition-all duration-300 cursor-pointer group"
            href="/categories/technology"
            data-discover="true">
            <div class="card-body items-center text-center p-6">
               <div
                  class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 group-hover:bg-primary group-hover:text-primary-content transition-all duration-300 mb-3">
                  <i class="ri-code-s-slash-line text-3xl"></i>
               </div>
               <h3 class="font-semibold text-base">Technology</h3>
               <div class="badge badge-primary badge-sm">124 posts</div>
            </div>
         </a>
         <a
            class="card bg-base-100 shadow hover:shadow-lg transition-all duration-300 cursor-pointer group"
            href="/categories/lifestyle"
            data-discover="true">
            <div class="card-body items-center text-center p-6">
               <div
                  class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 group-hover:bg-primary group-hover:text-primary-content transition-all duration-300 mb-3">
                  <i class="ri-heart-line text-3xl"></i>
               </div>
               <h3 class="font-semibold text-base">Lifestyle</h3>
               <div class="badge badge-secondary badge-sm">98 posts</div>
            </div>
         </a>
         <a
            class="card bg-base-100 shadow hover:shadow-lg transition-all duration-300 cursor-pointer group"
            href="/categories/design"
            data-discover="true">
            <div class="card-body items-center text-center p-6">
               <div
                  class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 group-hover:bg-primary group-hover:text-primary-content transition-all duration-300 mb-3">
                  <i class="ri-palette-line text-3xl"></i>
               </div>
               <h3 class="font-semibold text-base">Design</h3>
               <div class="badge badge-accent badge-sm">87 posts</div>
            </div>
         </a>
         <a
            class="card bg-base-100 shadow hover:shadow-lg transition-all duration-300 cursor-pointer group"
            href="/categories/business"
            data-discover="true">
            <div class="card-body items-center text-center p-6">
               <div
                  class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 group-hover:bg-primary group-hover:text-primary-content transition-all duration-300 mb-3">
                  <i class="ri-briefcase-line text-3xl"></i>
               </div>
               <h3 class="font-semibold text-base">Business</h3>
               <div class="badge badge-info badge-sm">76 posts</div>
            </div>
         </a>
         <a
            class="card bg-base-100 shadow hover:shadow-lg transition-all duration-300 cursor-pointer group"
            href="/categories/travel"
            data-discover="true">
            <div class="card-body items-center text-center p-6">
               <div
                  class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 group-hover:bg-primary group-hover:text-primary-content transition-all duration-300 mb-3">
                  <i class="ri-map-pin-line text-3xl"></i>
               </div>
               <h3 class="font-semibold text-base">Travel</h3>
               <div class="badge badge-success badge-sm">65 posts</div>
            </div>
         </a>
         <a
            class="card bg-base-100 shadow hover:shadow-lg transition-all duration-300 cursor-pointer group"
            href="/categories/food"
            data-discover="true">
            <div class="card-body items-center text-center p-6">
               <div
                  class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 group-hover:bg-primary group-hover:text-primary-content transition-all duration-300 mb-3">
                  <i class="ri-restaurant-line text-3xl"></i>
               </div>
               <h3 class="font-semibold text-base">Food</h3>
               <div class="badge badge-warning badge-sm">54 posts</div>
            </div>
         </a>
      </div>
   </div>
</section>
<!-- ==========   Explore by Category start ========== -->

<!-- ==========  What Our Readers Say start ========== -->
<section
   class="py-20 bg-gradient-to-br from-primary/5 via-secondary/5 to-accent/5">
   <div class="max-w-7xl mx-auto px-4">
      <div class="text-center mb-12">
         <h2 class="text-4xl font-display font-bold text-base-content mb-4">
            What Our Readers Say
         </h2>
         <p class="text-base-content/60 text-lg">
            Join thousands of satisfied readers worldwide
         </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
         <div
            class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 rounded-xl">
            <div class="card-body p-8">
               <div class="flex items-center gap-4 mb-4">
                  <div class="avatar">
                     <div
                        class="w-16 h-16 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img
                           alt="Alex Thompson"
                           class="object-cover object-top"
                           src="https://readdy.ai/api/search-image?query=professional%20young%20man%20developer%20portrait%20smiling%20confident%20casual%20attire%20clean%20white%20background%20headshot%20photography&amp;width=200&amp;height=200&amp;seq=20&amp;orientation=squarish" />
                     </div>
                  </div>
                  <div>
                     <h3 class="font-semibold text-lg text-base-content">
                        Alex Thompson
                     </h3>
                     <p class="text-sm text-base-content/60">Software Developer</p>
                  </div>
               </div>
               <div class="rating rating-sm mb-4">
                  <input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Alex Thompson" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Alex Thompson" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Alex Thompson" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Alex Thompson" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     checked=""
                     name="rating-Alex Thompson" />
               </div>
               <p class="text-base-content/70 leading-relaxed italic">
                  "BlogHub has become my go-to source for tech insights. The
                  quality of articles and diverse perspectives keep me coming back
                  every day!"
               </p>
            </div>
         </div>
         <div
            class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 rounded-xl">
            <div class="card-body p-8">
               <div class="flex items-center gap-4 mb-4">
                  <div class="avatar">
                     <div
                        class="w-16 h-16 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img
                           alt="Priya Sharma"
                           class="object-cover object-top"
                           src="https://readdy.ai/api/search-image?query=professional%20woman%20designer%20portrait%20creative%20confident%20modern%20style%20clean%20white%20background%20headshot%20photography&amp;width=200&amp;height=200&amp;seq=21&amp;orientation=squarish" />
                     </div>
                  </div>
                  <div>
                     <h3 class="font-semibold text-lg text-base-content">
                        Priya Sharma
                     </h3>
                     <p class="text-sm text-base-content/60">UX Designer</p>
                  </div>
               </div>
               <div class="rating rating-sm mb-4">
                  <input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Priya Sharma" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Priya Sharma" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Priya Sharma" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Priya Sharma" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     checked=""
                     name="rating-Priya Sharma" />
               </div>
               <p class="text-base-content/70 leading-relaxed italic">
                  "The design articles are incredibly detailed and practical. I've
                  learned so much and applied these insights directly to my
                  projects."
               </p>
            </div>
         </div>
         <div
            class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 rounded-xl">
            <div class="card-body p-8">
               <div class="flex items-center gap-4 mb-4">
                  <div class="avatar">
                     <div
                        class="w-16 h-16 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img
                           alt="Marcus Johnson"
                           class="object-cover object-top"
                           src="https://readdy.ai/api/search-image?query=professional%20young%20man%20student%20portrait%20friendly%20smile%20business%20casual%20clean%20white%20background%20headshot%20photography&amp;width=200&amp;height=200&amp;seq=22&amp;orientation=squarish" />
                     </div>
                  </div>
                  <div>
                     <h3 class="font-semibold text-lg text-base-content">
                        Marcus Johnson
                     </h3>
                     <p class="text-sm text-base-content/60">Business Student</p>
                  </div>
               </div>
               <div class="rating rating-sm mb-4">
                  <input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Marcus Johnson" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Marcus Johnson" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Marcus Johnson" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Marcus Johnson" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     checked=""
                     name="rating-Marcus Johnson" />
               </div>
               <p class="text-base-content/70 leading-relaxed italic">
                  "As a student, I appreciate the well-researched content that
                  helps me stay ahead. The business strategy articles are pure
                  gold!"
               </p>
            </div>
         </div>
         <div
            class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 rounded-xl">
            <div class="card-body p-8">
               <div class="flex items-center gap-4 mb-4">
                  <div class="avatar">
                     <div
                        class="w-16 h-16 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img
                           alt="Sophie Laurent"
                           class="object-cover object-top"
                           src="https://readdy.ai/api/search-image?query=professional%20woman%20content%20creator%20portrait%20creative%20confident%20modern%20style%20clean%20white%20background%20headshot%20photography&amp;width=200&amp;height=200&amp;seq=23&amp;orientation=squarish" />
                     </div>
                  </div>
                  <div>
                     <h3 class="font-semibold text-lg text-base-content">
                        Sophie Laurent
                     </h3>
                     <p class="text-sm text-base-content/60">Content Creator</p>
                  </div>
               </div>
               <div class="rating rating-sm mb-4">
                  <input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Sophie Laurent" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Sophie Laurent" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Sophie Laurent" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Sophie Laurent" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     checked=""
                     name="rating-Sophie Laurent" />
               </div>
               <p class="text-base-content/70 leading-relaxed italic">
                  "The writing quality is exceptional. Every article is engaging,
                  informative, and beautifully presented. Highly recommend!"
               </p>
            </div>
         </div>
         <div
            class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 rounded-xl">
            <div class="card-body p-8">
               <div class="flex items-center gap-4 mb-4">
                  <div class="avatar">
                     <div
                        class="w-16 h-16 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img
                           alt="Ryan Mitchell"
                           class="object-cover object-top"
                           src="https://readdy.ai/api/search-image?query=professional%20man%20entrepreneur%20portrait%20confident%20smile%20business%20attire%20clean%20white%20background%20headshot%20photography&amp;width=200&amp;height=200&amp;seq=24&amp;orientation=squarish" />
                     </div>
                  </div>
                  <div>
                     <h3 class="font-semibold text-lg text-base-content">
                        Ryan Mitchell
                     </h3>
                     <p class="text-sm text-base-content/60">Entrepreneur</p>
                  </div>
               </div>
               <div class="rating rating-sm mb-4">
                  <input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Ryan Mitchell" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Ryan Mitchell" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Ryan Mitchell" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Ryan Mitchell" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     checked=""
                     name="rating-Ryan Mitchell" />
               </div>
               <p class="text-base-content/70 leading-relaxed italic">
                  "BlogHub provides actionable insights that have directly
                  impacted my business decisions. The community is fantastic too!"
               </p>
            </div>
         </div>
         <div
            class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 rounded-xl">
            <div class="card-body p-8">
               <div class="flex items-center gap-4 mb-4">
                  <div class="avatar">
                     <div
                        class="w-16 h-16 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img
                           alt="Elena Rodriguez"
                           class="object-cover object-top"
                           src="https://readdy.ai/api/search-image?query=professional%20woman%20marketer%20portrait%20confident%20smile%20modern%20business%20casual%20clean%20white%20background%20headshot%20photography&amp;width=200&amp;height=200&amp;seq=25&amp;orientation=squarish" />
                     </div>
                  </div>
                  <div>
                     <h3 class="font-semibold text-lg text-base-content">
                        Elena Rodriguez
                     </h3>
                     <p class="text-sm text-base-content/60">Digital Marketer</p>
                  </div>
               </div>
               <div class="rating rating-sm mb-4">
                  <input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Elena Rodriguez" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Elena Rodriguez" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Elena Rodriguez" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     name="rating-Elena Rodriguez" /><input
                     class="mask mask-star-2 bg-orange-400"
                     readonly=""
                     type="radio"
                     checked=""
                     name="rating-Elena Rodriguez" />
               </div>
               <p class="text-base-content/70 leading-relaxed italic">
                  "The marketing and lifestyle content is always on point. I've
                  discovered so many valuable strategies through this platform."
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==========  What Our Readers Say end ========== -->

<!-- ==========   Featured Authors start ========== -->
<section class="py-20 bg-base-100">
   <div class="max-w-7xl mx-auto px-4">
      <div class="text-center mb-12">
         <h2 class="text-4xl font-display font-bold text-base-content mb-4">
            Featured Authors
         </h2>
         <p class="text-base-content/60 text-lg">
            Meet the voices behind our stories
         </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
         <div
            class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300">
            <div class="card-body items-center text-center">
               <div class="avatar mb-4">
                  <div
                     class="w-24 h-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                     <img
                        alt="Sarah Johnson"
                        class="object-cover object-top"
                        src="https://readdy.ai/api/search-image?query=professional%20woman%20portrait%20smiling%20confident%20business%20casual%20attire%20clean%20white%20background%20headshot%20photography&amp;width=200&amp;height=200&amp;seq=7&amp;orientation=squarish" />
                  </div>
               </div>
               <h3 class="card-title text-lg">Sarah Johnson</h3>
               <p class="text-base-content/70 text-sm">
                  Tech enthusiast and AI researcher
               </p>
               <div class="badge badge-outline mt-2">42 articles</div>
               <div class="flex gap-2 mt-4">
                  <a
                     href="#"
                     class="btn btn-circle btn-sm btn-ghost hover:btn-primary"><i class="ri-twitter-x-line"></i></a><a
                     href="#"
                     class="btn btn-circle btn-sm btn-ghost hover:btn-primary"><i class="ri-linkedin-fill"></i></a>
               </div>
            </div>
         </div>
         <div
            class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300">
            <div class="card-body items-center text-center">
               <div class="avatar mb-4">
                  <div
                     class="w-24 h-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                     <img
                        alt="Michael Chen"
                        class="object-cover object-top"
                        src="https://readdy.ai/api/search-image?query=professional%20asian%20man%20portrait%20friendly%20smile%20modern%20casual%20wear%20clean%20white%20background%20headshot%20photography&amp;width=200&amp;height=200&amp;seq=8&amp;orientation=squarish" />
                  </div>
               </div>
               <h3 class="card-title text-lg">Michael Chen</h3>
               <p class="text-base-content/70 text-sm">
                  Minimalist lifestyle advocate
               </p>
               <div class="badge badge-outline mt-2">38 articles</div>
               <div class="flex gap-2 mt-4">
                  <a
                     href="#"
                     class="btn btn-circle btn-sm btn-ghost hover:btn-primary"><i class="ri-twitter-x-line"></i></a><a
                     href="#"
                     class="btn btn-circle btn-sm btn-ghost hover:btn-primary"><i class="ri-linkedin-fill"></i></a>
               </div>
            </div>
         </div>
         <div
            class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300">
            <div class="card-body items-center text-center">
               <div class="avatar mb-4">
                  <div
                     class="w-24 h-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                     <img
                        alt="Emma Williams"
                        class="object-cover object-top"
                        src="https://readdy.ai/api/search-image?query=professional%20woman%20designer%20portrait%20creative%20confident%20modern%20style%20clean%20white%20background%20headshot%20photography&amp;width=200&amp;height=200&amp;seq=9&amp;orientation=squarish" />
                  </div>
               </div>
               <h3 class="card-title text-lg">Emma Williams</h3>
               <p class="text-base-content/70 text-sm">UX/UI design expert</p>
               <div class="badge badge-outline mt-2">35 articles</div>
               <div class="flex gap-2 mt-4">
                  <a
                     href="#"
                     class="btn btn-circle btn-sm btn-ghost hover:btn-primary"><i class="ri-twitter-x-line"></i></a><a
                     href="#"
                     class="btn btn-circle btn-sm btn-ghost hover:btn-primary"><i class="ri-linkedin-fill"></i></a>
               </div>
            </div>
         </div>
         <div
            class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300">
            <div class="card-body items-center text-center">
               <div class="avatar mb-4">
                  <div
                     class="w-24 h-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                     <img
                        alt="David Martinez"
                        class="object-cover object-top"
                        src="https://readdy.ai/api/search-image?query=professional%20man%20portrait%20business%20leader%20confident%20smile%20suit%20clean%20white%20background%20headshot%20photography&amp;width=200&amp;height=200&amp;seq=10&amp;orientation=squarish" />
                  </div>
               </div>
               <h3 class="card-title text-lg">David Martinez</h3>
               <p class="text-base-content/70 text-sm">
                  Business strategy consultant
               </p>
               <div class="badge badge-outline mt-2">31 articles</div>
               <div class="flex gap-2 mt-4">
                  <a
                     href="#"
                     class="btn btn-circle btn-sm btn-ghost hover:btn-primary"><i class="ri-twitter-x-line"></i></a><a
                     href="#"
                     class="btn btn-circle btn-sm btn-ghost hover:btn-primary"><i class="ri-linkedin-fill"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==========   Featured Authors end ========== -->

<!-- ==========  Stay Updated start ========== -->
<section
   class="py-20 bg-gradient-to-br from-primary/10 via-secondary/10 to-accent/10">
   <div class="max-w-4xl mx-auto px-4 text-center">
      <div
         class="w-20 h-20 flex items-center justify-center rounded-full bg-primary text-primary-content mx-auto mb-6">
         <i class="ri-mail-line text-4xl"></i>
      </div>
      <h2 class="text-4xl font-display font-bold text-base-content mb-4">
         Stay Updated
      </h2>
      <p class="text-base-content/70 text-lg mb-8 leading-relaxed">
         Subscribe to our newsletter and get the latest articles, insights, and
         updates delivered straight to your inbox every week.
      </p>
      <form
         class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto"
         data-readdy-form="true"
         id="hero-newsletter">
         <input
            placeholder="Enter your email address"
            class="input input-bordered input-lg flex-1"
            required=""
            type="email"
            name="email" /><button
            type="submit"
            class="btn btn-primary btn-lg whitespace-nowrap">
         <i class="ri-send-plane-fill"></i>Subscribe
         </button>
      </form>
      <p class="text-xs text-base-content/50 mt-4">
         We respect your privacy. Unsubscribe at any time.
      </p>
   </div>
</section>
<!-- ==========  Stay Updated end ========== -->

<!-- ========== footer start ========== -->
<?php
   include 'layout/footer.php'
   ?>
<!-- ========== footer end ========== -->