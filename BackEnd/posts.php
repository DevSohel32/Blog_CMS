  <?php include 'layout/head.php'?>
  
  
    <?php include 'layout/navBar.php'?>
        <div class="flex-1 flex flex-col">
           <?php include 'layout/header.php'?>
          <main class="flex-1 p-6">
            <div class="p-6">
              <div class="flex items-center justify-between mb-6">
                <div>
                  <h1 class="text-3xl font-bold">Post Management</h1>
                  <p class="text-base-content/60 mt-1">Manage all blog posts</p>
                </div>
                <button class="btn btn-primary whitespace-nowrap">
                  <i class="ri-add-line"></i>Create New Post
                </button>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="stats shadow-lg">
                  <div class="stat">
                    <div class="stat-figure text-primary">
                      <i class="ri-article-line text-3xl"></i>
                    </div>
                    <div class="stat-title">Total Posts</div>
                    <div class="stat-value text-primary">5</div>
                  </div>
                </div>
                <div class="stats shadow-lg">
                  <div class="stat">
                    <div class="stat-figure text-success">
                      <i class="ri-checkbox-circle-line text-3xl"></i>
                    </div>
                    <div class="stat-title">Published</div>
                    <div class="stat-value text-success">3</div>
                  </div>
                </div>
                <div class="stats shadow-lg">
                  <div class="stat">
                    <div class="stat-figure text-warning">
                      <i class="ri-time-line text-3xl"></i>
                    </div>
                    <div class="stat-title">Pending</div>
                    <div class="stat-value text-warning">1</div>
                  </div>
                </div>
                <div class="stats shadow-lg">
                  <div class="stat">
                    <div class="stat-figure text-base-content/40">
                      <i class="ri-draft-line text-3xl"></i>
                    </div>
                    <div class="stat-title">Drafts</div>
                    <div class="stat-value text-base-content/40">1</div>
                  </div>
                </div>
              </div>
              <div class="card bg-base-100 shadow-lg mb-6">
                <div class="card-body">
                  <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1">
                      <input
                        placeholder="Search posts..."
                        class="input input-bordered w-full"
                        type="text"
                        value=""
                      />
                    </div>
                    <select class="select select-bordered">
                      <option value="All">All Status</option>
                      <option value="Published">Published</option>
                      <option value="Pending">Pending</option>
                      <option value="Draft">Draft</option></select
                    ><select class="select select-bordered">
                      <option value="All">All Categories</option>
                      <option value="Technology">Technology</option>
                      <option value="Programming">Programming</option>
                      <option value="Design">Design</option>
                      <option value="Business">Business</option>
                      <option value="Lifestyle">Lifestyle</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="card bg-base-100 shadow-lg">
                <div class="card-body p-0">
                  <div class="overflow-x-auto">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><input class="checkbox" type="checkbox" /></th>
                          <th>Post</th>
                          <th>Author</th>
                          <th>Category</th>
                          <th>Status</th>
                          <th>Views</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input class="checkbox" type="checkbox" /></td>
                          <td>
                            <div class="flex items-center gap-3">
                              <div class="avatar">
                                <div class="w-16 h-10 rounded">
                                  <img alt="Getting Started with React 19" />
                                </div>
                              </div>
                              <div>
                                <div class="font-bold">
                                  Getting Started with React 19
                                </div>
                                <div class="text-sm text-base-content/60"></div>
                              </div>
                            </div>
                          </td>
                          <td>John Doe</td>
                          <td>
                            <span class="badge badge-outline">Technology</span>
                          </td>
                          <td>
                            <span class="badge badge-ghost">Published</span>
                          </td>
                          <td>
                            <div class="flex items-center gap-1">
                              <i class="ri-eye-line text-base-content/60"></i
                              >1,250
                            </div>
                          </td>
                          <td>
                            <div class="flex gap-2">
                              <button class="btn btn-sm btn-ghost">
                                <i class="ri-edit-line"></i></button
                              ><button class="btn btn-sm btn-ghost text-error">
                                <i class="ri-delete-bin-line"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="checkbox" type="checkbox" /></td>
                          <td>
                            <div class="flex items-center gap-3">
                              <div class="avatar">
                                <div class="w-16 h-10 rounded">
                                  <img alt="Best Practices for TypeScript" />
                                </div>
                              </div>
                              <div>
                                <div class="font-bold">
                                  Best Practices for TypeScript
                                </div>
                                <div class="text-sm text-base-content/60"></div>
                              </div>
                            </div>
                          </td>
                          <td>Jane Smith</td>
                          <td>
                            <span class="badge badge-outline">Programming</span>
                          </td>
                          <td>
                            <span class="badge badge-ghost">Published</span>
                          </td>
                          <td>
                            <div class="flex items-center gap-1">
                              <i class="ri-eye-line text-base-content/60"></i
                              >980
                            </div>
                          </td>
                          <td>
                            <div class="flex gap-2">
                              <button class="btn btn-sm btn-ghost">
                                <i class="ri-edit-line"></i></button
                              ><button class="btn btn-sm btn-ghost text-error">
                                <i class="ri-delete-bin-line"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="checkbox" type="checkbox" /></td>
                          <td>
                            <div class="flex items-center gap-3">
                              <div class="avatar">
                                <div class="w-16 h-10 rounded">
                                  <img alt="Understanding Tailwind CSS" />
                                </div>
                              </div>
                              <div>
                                <div class="font-bold">
                                  Understanding Tailwind CSS
                                </div>
                                <div class="text-sm text-base-content/60"></div>
                              </div>
                            </div>
                          </td>
                          <td>Mike Johnson</td>
                          <td>
                            <span class="badge badge-outline">Design</span>
                          </td>
                          <td>
                            <span class="badge badge-ghost">Pending</span>
                          </td>
                          <td>
                            <div class="flex items-center gap-1">
                              <i class="ri-eye-line text-base-content/60"></i>0
                            </div>
                          </td>
                          <td>
                            <div class="flex gap-2">
                              <button class="btn btn-sm btn-ghost">
                                <i class="ri-edit-line"></i></button
                              ><button class="btn btn-sm btn-ghost text-error">
                                <i class="ri-delete-bin-line"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="checkbox" type="checkbox" /></td>
                          <td>
                            <div class="flex items-center gap-3">
                              <div class="avatar">
                                <div class="w-16 h-10 rounded">
                                  <img alt="Web Performance Optimization" />
                                </div>
                              </div>
                              <div>
                                <div class="font-bold">
                                  Web Performance Optimization
                                </div>
                                <div class="text-sm text-base-content/60"></div>
                              </div>
                            </div>
                          </td>
                          <td>Sarah Williams</td>
                          <td>
                            <span class="badge badge-outline">Technology</span>
                          </td>
                          <td><span class="badge badge-ghost">Draft</span></td>
                          <td>
                            <div class="flex items-center gap-1">
                              <i class="ri-eye-line text-base-content/60"></i>0
                            </div>
                          </td>
                          <td>
                            <div class="flex gap-2">
                              <button class="btn btn-sm btn-ghost">
                                <i class="ri-edit-line"></i></button
                              ><button class="btn btn-sm btn-ghost text-error">
                                <i class="ri-delete-bin-line"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="checkbox" type="checkbox" /></td>
                          <td>
                            <div class="flex items-center gap-3">
                              <div class="avatar">
                                <div class="w-16 h-10 rounded">
                                  <img alt="Modern JavaScript Features" />
                                </div>
                              </div>
                              <div>
                                <div class="font-bold">
                                  Modern JavaScript Features
                                </div>
                                <div class="text-sm text-base-content/60"></div>
                              </div>
                            </div>
                          </td>
                          <td>John Doe</td>
                          <td>
                            <span class="badge badge-outline">Programming</span>
                          </td>
                          <td>
                            <span class="badge badge-ghost">Published</span>
                          </td>
                          <td>
                            <div class="flex items-center gap-1">
                              <i class="ri-eye-line text-base-content/60"></i
                              >2,100
                            </div>
                          </td>
                          <td>
                            <div class="flex gap-2">
                              <button class="btn btn-sm btn-ghost">
                                <i class="ri-edit-line"></i></button
                              ><button class="btn btn-sm btn-ghost text-error">
                                <i class="ri-delete-bin-line"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <dialog id="edit_post_modal" class="modal">
                <div class="modal-box max-w-3xl">
                  <h3 class="font-bold text-2xl mb-6">Edit Post</h3>
                </div>
                <form method="dialog" class="modal-backdrop">
                  <button>close</button>
                </form>
              </dialog>
            </div>
          </main>
        </div>
      </body>
   
  
</html>
