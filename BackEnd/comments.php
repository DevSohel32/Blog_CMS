<?php include 'layout/head.php' ?>
      <body class="flex min-h-screen bg-base-200">
       <?php include 'layout/navBar.php'?>

        <div class="flex-1 flex flex-col">
            <?php include 'layout/header.php'?>
          <main class="flex-1 p-6">
            <div class="space-y-6">
              <div class="flex items-center justify-between">
                <div>
                  <h1 class="text-3xl font-bold mb-2">Comment Management</h1>
                  <p class="text-base-content/60">
                    Moderate and manage all comments
                  </p>
                </div>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="card bg-base-100 shadow-lg rounded-xl">
                  <div class="card-body">
                    <div class="flex items-center gap-4">
                      <div
                        class="w-12 h-12 rounded-lg bg-blue-500/10 text-blue-500 flex items-center justify-center"
                      >
                        <i class="ri-chat-3-line text-2xl"></i>
                      </div>
                      <div>
                        <p class="text-2xl font-bold">1,248</p>
                        <p class="text-sm text-base-content/60">
                          Total Comments
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card bg-base-100 shadow-lg rounded-xl">
                  <div class="card-body">
                    <div class="flex items-center gap-4">
                      <div
                        class="w-12 h-12 rounded-lg bg-green-500/10 text-green-500 flex items-center justify-center"
                      >
                        <i class="ri-checkbox-circle-line text-2xl"></i>
                      </div>
                      <div>
                        <p class="text-2xl font-bold">1,156</p>
                        <p class="text-sm text-base-content/60">Approved</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card bg-base-100 shadow-lg rounded-xl">
                  <div class="card-body">
                    <div class="flex items-center gap-4">
                      <div
                        class="w-12 h-12 rounded-lg bg-yellow-500/10 text-yellow-500 flex items-center justify-center"
                      >
                        <i class="ri-time-line text-2xl"></i>
                      </div>
                      <div>
                        <p class="text-2xl font-bold">68</p>
                        <p class="text-sm text-base-content/60">Pending</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card bg-base-100 shadow-lg rounded-xl">
                  <div class="card-body">
                    <div class="flex items-center gap-4">
                      <div
                        class="w-12 h-12 rounded-lg bg-red-500/10 text-red-500 flex items-center justify-center"
                      >
                        <i class="ri-spam-line text-2xl"></i>
                      </div>
                      <div>
                        <p class="text-2xl font-bold">24</p>
                        <p class="text-sm text-base-content/60">Spam</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card bg-base-100 shadow-lg rounded-xl">
                <div class="card-body">
                  <div class="flex flex-wrap gap-4 items-center">
                    <div class="form-control flex-1 min-w-64">
                      <div class="relative">
                        <input
                          placeholder="Search comments..."
                          class="input input-bordered w-full pl-10"
                          type="text"
                        /><i
                          class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-base-content/50"
                        ></i>
                      </div>
                    </div>
                    <select class="select select-bordered whitespace-nowrap">
                      <option value="all">All Status</option>
                      <option value="approved">Approved</option>
                      <option value="pending">Pending</option>
                      <option value="spam">Spam</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="card bg-base-100 shadow-lg rounded-xl">
                <div class="card-body">
                  <div class="overflow-x-auto">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><input class="checkbox" type="checkbox" /></th>
                          <th>Author</th>
                          <th>Comment</th>
                          <th>Post</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="hover">
                          <td><input class="checkbox" type="checkbox" /></td>
                          <td>
                            <div class="flex items-center gap-3">
                              <div class="avatar">
                                <div class="w-10 h-10 rounded-full">
                                  <img
                                    alt="Sarah Johnson"
                                    src="../ai/img_res/9ebd7a0accba4e9abd38b66f1cf93c12.jpg"
                                  />
                                </div>
                              </div>
                              <span class="font-medium">Sarah Johnson</span>
                            </div>
                          </td>
                          <td>
                            <p class="max-w-md truncate">
                              This is an excellent article! Very informative and
                              well-written. I learned a lot from this post.
                            </p>
                          </td>
                          <td>
                            <span class="link link-primary"
                              >React 19 New Features</span
                            >
                          </td>
                          <td>2 hours ago</td>
                          <td>
                            <span class="badge badge-success">Approved</span>
                          </td>
                          <td>
                            <div class="flex gap-2">
                              <button class="btn btn-sm btn-ghost">
                                <i class="ri-eye-line"></i></button
                              ><button class="btn btn-sm btn-ghost">
                                <i class="ri-reply-line"></i></button
                              ><button class="btn btn-sm btn-error btn-ghost">
                                <i class="ri-delete-bin-line"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover">
                          <td><input class="checkbox" type="checkbox" /></td>
                          <td>
                            <div class="flex items-center gap-3">
                              <div class="avatar">
                                <div class="w-10 h-10 rounded-full">
                                  <img
                                    alt="Michael Chen"
                                    src="https://readdy.ai/api/search-image?query=professional%20man%20avatar%20portrait%20clean%20background%20modern%20style&width=50&height=50&seq=comment2&orientation=squarish"
                                  />
                                </div>
                              </div>
                              <span class="font-medium">Michael Chen</span>
                            </div>
                          </td>
                          <td>
                            <p class="max-w-md truncate">
                              Great tutorial! Can you make a video version of
                              this?
                            </p>
                          </td>
                          <td>
                            <span class="link link-primary"
                              >Tailwind CSS Guide</span
                            >
                          </td>
                          <td>5 hours ago</td>
                          <td>
                            <span class="badge badge-warning">Pending</span>
                          </td>
                          <td>
                            <div class="flex gap-2">
                              <button class="btn btn-sm btn-success btn-ghost">
                                <i class="ri-check-line"></i></button
                              ><button class="btn btn-sm btn-ghost">
                                <i class="ri-eye-line"></i></button
                              ><button class="btn btn-sm btn-ghost">
                                <i class="ri-reply-line"></i></button
                              ><button class="btn btn-sm btn-error btn-ghost">
                                <i class="ri-delete-bin-line"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover">
                          <td><input class="checkbox" type="checkbox" /></td>
                          <td>
                            <div class="flex items-center gap-3">
                              <div class="avatar">
                                <div class="w-10 h-10 rounded-full">
                                  <img
                                    alt="Emily Rodriguez"
                                    src="https://readdy.ai/api/search-image?query=professional%20woman%20avatar%20portrait%20clean%20background%20modern%20style&width=50&height=50&seq=comment3&orientation=squarish"
                                  />
                                </div>
                              </div>
                              <span class="font-medium">Emily Rodriguez</span>
                            </div>
                          </td>
                          <td>
                            <p class="max-w-md truncate">
                              Thanks for sharing this. Very helpful for
                              beginners like me.
                            </p>
                          </td>
                          <td>
                            <span class="link link-primary"
                              >TypeScript Best Practices</span
                            >
                          </td>
                          <td>1 day ago</td>
                          <td>
                            <span class="badge badge-success">Approved</span>
                          </td>
                          <td>
                            <div class="flex gap-2">
                              <button class="btn btn-sm btn-ghost">
                                <i class="ri-eye-line"></i></button
                              ><button class="btn btn-sm btn-ghost">
                                <i class="ri-reply-line"></i></button
                              ><button class="btn btn-sm btn-error btn-ghost">
                                <i class="ri-delete-bin-line"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover">
                          <td><input class="checkbox" type="checkbox" /></td>
                          <td>
                            <div class="flex items-center gap-3">
                              <div class="avatar">
                                <div class="w-10 h-10 rounded-full">
                                  <img
                                    alt="David Kim"
                                    src="https://readdy.ai/api/search-image?query=professional%20man%20avatar%20portrait%20clean%20background%20modern%20style&width=50&height=50&seq=comment4&orientation=squarish"
                                  />
                                </div>
                              </div>
                              <span class="font-medium">David Kim</span>
                            </div>
                          </td>
                          <td>
                            <p class="max-w-md truncate">
                              This is spam content. Please remove this post
                              immediately!
                            </p>
                          </td>
                          <td>
                            <span class="link link-primary"
                              >Web Development Trends</span
                            >
                          </td>
                          <td>2 days ago</td>
                          <td><span class="badge badge-error">Spam</span></td>
                          <td>
                            <div class="flex gap-2">
                              <button class="btn btn-sm btn-ghost">
                                <i class="ri-eye-line"></i></button
                              ><button class="btn btn-sm btn-ghost">
                                <i class="ri-reply-line"></i></button
                              ><button class="btn btn-sm btn-error btn-ghost">
                                <i class="ri-delete-bin-line"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover">
                          <td><input class="checkbox" type="checkbox" /></td>
                          <td>
                            <div class="flex items-center gap-3">
                              <div class="avatar">
                                <div class="w-10 h-10 rounded-full">
                                  <img
                                    alt="Lisa Anderson"
                                    src="https://readdy.ai/api/search-image?query=professional%20woman%20avatar%20portrait%20clean%20background%20modern%20style&width=50&height=50&seq=comment5&orientation=squarish"
                                  />
                                </div>
                              </div>
                              <span class="font-medium">Lisa Anderson</span>
                            </div>
                          </td>
                          <td>
                            <p class="max-w-md truncate">
                              Could you explain more about the performance
                              optimization part?
                            </p>
                          </td>
                          <td>
                            <span class="link link-primary"
                              >UI/UX Design Principles</span
                            >
                          </td>
                          <td>3 days ago</td>
                          <td>
                            <span class="badge badge-success">Approved</span>
                          </td>
                          <td>
                            <div class="flex gap-2">
                              <button class="btn btn-sm btn-ghost">
                                <i class="ri-eye-line"></i></button
                              ><button class="btn btn-sm btn-ghost">
                                <i class="ri-reply-line"></i></button
                              ><button class="btn btn-sm btn-error btn-ghost">
                                <i class="ri-delete-bin-line"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover">
                          <td><input class="checkbox" type="checkbox" /></td>
                          <td>
                            <div class="flex items-center gap-3">
                              <div class="avatar">
                                <div class="w-10 h-10 rounded-full">
                                  <img
                                    alt="James Wilson"
                                    src="https://readdy.ai/api/search-image?query=professional%20man%20avatar%20portrait%20clean%20background%20modern%20style&width=50&height=50&seq=comment6&orientation=squarish"
                                  />
                                </div>
                              </div>
                              <span class="font-medium">James Wilson</span>
                            </div>
                          </td>
                          <td>
                            <p class="max-w-md truncate">
                              Awesome content! Keep up the good work.
                            </p>
                          </td>
                          <td>
                            <span class="link link-primary"
                              >Python Machine Learning</span
                            >
                          </td>
                          <td>4 days ago</td>
                          <td>
                            <span class="badge badge-success">Approved</span>
                          </td>
                          <td>
                            <div class="flex gap-2">
                              <button class="btn btn-sm btn-ghost">
                                <i class="ri-eye-line"></i></button
                              ><button class="btn btn-sm btn-ghost">
                                <i class="ri-reply-line"></i></button
                              ><button class="btn btn-sm btn-error btn-ghost">
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
            </div>
          </main>
        </div>
      </body>
  
</html>
