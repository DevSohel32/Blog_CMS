<?php include 'layout/head.php'?>
  <body class="min-h-screen bg-slate-50">
    <?php include 'layout/navBar.php'?>
    <main class="max-w-7xl mx-auto px-6 py-8">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 space-y-6">
          <form class="space-y-6">
            <div class="card bg-white shadow-sm">
              <div class="card-body">
                <label class="form-control"
                  ><div class="label">
                    <span class="label-text font-semibold text-slate-700"
                      >Post Title</span
                    >
                  </div>
                  <input
                    placeholder="Enter your post title..."
                    class="input input-bordered w-full text-lg"
                    type="text"
                    value=""
                /></label>
              </div>
            </div>
            <div class="card bg-white shadow-sm">
              <div class="card-body">
                <label class="form-control"
                  ><div class="label">
                    <span class="label-text font-semibold text-slate-700"
                      >Content</span
                    >
                  </div>
                  <div
                    class="flex items-center gap-2 p-2 bg-slate-50 rounded-t-lg border border-slate-200 flex-wrap"
                  >
                    <button
                      type="button"
                      class="btn btn-xs btn-ghost"
                      title="Bold"
                    >
                      <i class="ri-bold"></i></button
                    ><button
                      type="button"
                      class="btn btn-xs btn-ghost"
                      title="Italic"
                    >
                      <i class="ri-italic"></i></button
                    ><button
                      type="button"
                      class="btn btn-xs btn-ghost"
                      title="Underline"
                    >
                      <i class="ri-underline"></i>
                    </button>
                    <div class="divider divider-horizontal mx-0"></div>
                    <button
                      type="button"
                      class="btn btn-xs btn-ghost"
                      title="Heading"
                    >
                      <i class="ri-h-1"></i></button
                    ><button
                      type="button"
                      class="btn btn-xs btn-ghost"
                      title="Quote"
                    >
                      <i class="ri-double-quotes-l"></i>
                    </button>
                    <div class="divider divider-horizontal mx-0"></div>
                    <button
                      type="button"
                      class="btn btn-xs btn-ghost"
                      title="Bullet List"
                    >
                      <i class="ri-list-unordered"></i></button
                    ><button
                      type="button"
                      class="btn btn-xs btn-ghost"
                      title="Numbered List"
                    >
                      <i class="ri-list-ordered"></i>
                    </button>
                    <div class="divider divider-horizontal mx-0"></div>
                    <button
                      type="button"
                      class="btn btn-xs btn-ghost"
                      title="Link"
                    >
                      <i class="ri-link"></i></button
                    ><button
                      type="button"
                      class="btn btn-xs btn-ghost"
                      title="Image"
                    >
                      <i class="ri-image-line"></i></button
                    ><button
                      type="button"
                      class="btn btn-xs btn-ghost"
                      title="Code"
                    >
                      <i class="ri-code-line"></i>
                    </button>
                  </div>
                  <textarea
                    class="textarea textarea-bordered w-full h-96 rounded-t-none text-sm"
                    placeholder="Write your post content here..."
                  ></textarea>
                </label>
              </div>
            </div>
            <div class="card bg-white shadow-sm">
              <div class="card-body">
                <label class="form-control"
                  ><div class="label">
                    <span class="label-text font-semibold text-slate-700"
                      >Featured Image</span
                    >
                  </div>
                  <input
                    class="file-input file-input-bordered w-full"
                    accept="image/*"
                    type="file"
                /></label>
              </div>
            </div>
          </form>
        </div>
        <div class="space-y-6">
          <div class="card bg-white shadow-sm">
            <div class="card-body">
              <h3 class="font-semibold text-slate-800 mb-3">Category</h3>
              <select class="select select-bordered w-full text-sm">
                <option value="">Select a category</option>
                <option value="Technology">Technology</option>
                <option value="Lifestyle">Lifestyle</option>
                <option value="Travel">Travel</option>
                <option value="Food">Food</option>
                <option value="Health">Health</option>
                <option value="Business">Business</option>
                <option value="Education">Education</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Sports">Sports</option>
                <option value="Fashion">Fashion</option>
                <option value="Science">Science</option>
                <option value="Politics">Politics</option>
              </select>
            </div>
          </div>
          <div class="card bg-white shadow-sm">
            <div class="card-body">
              <h3 class="font-semibold text-slate-800 mb-3">Tags</h3>
              <input
                placeholder="Add tags separated by commas"
                class="input input-bordered w-full text-sm"
                type="text"
                value=""
              />
              <p class="text-xs text-slate-500 mt-2">
                Separate tags with commas (e.g., tech, tutorial, guide)
              </p>
            </div>
          </div>
          <div class="card bg-white shadow-sm">
            <div class="card-body">
              <h3 class="font-semibold text-slate-800 mb-3">
                Publish Settings
              </h3>
              <div class="space-y-3">
                <div class="form-control">
                  <label class="label cursor-pointer justify-start gap-3"
                    ><input
                      class="toggle toggle-success"
                      type="checkbox"
                      checked=""
                    /><span class="label-text text-sm"
                      >Allow Comments</span
                    ></label
                  >
                </div>
                <div class="form-control">
                  <label class="label cursor-pointer justify-start gap-3"
                    ><input
                      class="toggle toggle-warning"
                      type="checkbox"
                    /><span class="label-text text-sm"
                      >Featured Post</span
                    ></label
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="card bg-white shadow-sm">
            <div class="card-body">
              <h3 class="font-semibold text-slate-800 mb-3">SEO Settings</h3>
              <div class="space-y-3">
                <label class="form-control"
                  ><div class="label">
                    <span class="label-text text-sm">Meta Description</span>
                  </div>
                  <textarea
                    class="textarea textarea-bordered textarea-sm w-full"
                    placeholder="Brief description for search engines..."
                    rows="3"
                    maxlength="160"
                  ></textarea>
                  <div class="label">
                    <span class="label-text-alt text-slate-500"
                      >0/160 characters</span
                    >
                  </div></label
                ><label class="form-control"
                  ><div class="label">
                    <span class="label-text text-sm">Focus Keyword</span>
                  </div>
                  <input
                    placeholder="Main keyword for this post"
                    class="input input-bordered input-sm w-full"
                    type="text"
                    value=""
                /></label>
              </div>
            </div>
          </div>
          <div class="card bg-white shadow-sm">
            <div class="card-body">
              <div class="space-y-2">
                <button
                  type="button"
                  class="btn btn-success w-full text-white whitespace-nowrap"
                >
                  <i class="ri-send-plane-line mr-2"></i>Publish Now</button
                ><button
                  type="button"
                  class="btn btn-outline w-full whitespace-nowrap"
                >
                  <i class="ri-save-line mr-2"></i>Save as Draft</button
                ><button
                  type="button"
                  class="btn btn-ghost w-full text-slate-600 hover:bg-slate-100 whitespace-nowrap"
                >
                  <i class="ri-eye-line mr-2"></i>Preview
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
