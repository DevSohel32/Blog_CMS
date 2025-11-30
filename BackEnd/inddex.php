<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      BIIT Student Dashboard - Bangladesh Institute of Information Technology
      Bogura
    </title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
      href="css2?family=Poppins:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;family=Roboto:wght@400;500;600&amp;display=swap"
      rel="stylesheet"
    />
    <!-- Remix Icon -->
    <link href="npm/remixicon%404.0.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- DaisyUI CDN -->
    <script src="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.js"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              brand: "#4f46e5",
              accent: "#f43f5e",
            },
            spacing: {
              13: "3.25rem",
            },
          },
        },
        plugins: [],
      };
    </script>
  </head>
  <body class="flex h-screen bg-gray-50">
      <header
        id="sidebar"
        class="fixed left-0 top-0 h-screen bg-white transition-all duration-300 z-40 w-[280px]"
        style="
          border-right: 1px solid rgba(0, 0, 0, 0.08);
          box-shadow: rgba(0, 0, 0, 0.06) 0px 4px 20px;
        "
      >
        <div
          class="h-20 flex items-center justify-between px-6 border-b border-gray-100"
        >
          <div id="logo" class="flex items-center gap-3">
            <div
              class="w-10 h-10 bg-gradient-to-br from-blue-600 to-blue-700 rounded-lg flex items-center justify-center"
            >
              <span
                class="text-white font-bold text-lg"
                style="font-family: Poppins, sans-serif"
                >B</span
              >
            </div>
            <div>
              <h2
                class="text-sm font-semibold text-gray-900"
                style="font-family: Poppins, sans-serif"
              >
                BIIT Student Panel
              </h2>
              <span
                class="text-xs text-blue-600 bg-blue-50 px-2 py-0.5 rounded-full"
                >Instructor Module</span
              >
            </div>
          </div>
          <button
            id="menu-btn"
            class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded-lg transition-colors cursor-pointer"
          >
            <i class="ri-menu-fold-line text-gray-600 bg-red-300"></i>
          </button>
        </div>
        <!-- ============= Nav Section ================ -->
        <nav class="py-6 px-3">
          <ul class="menu space-y-1">
            <li>
              <a
                class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative bg-[#1A56DB]/10 border-l-4 border-[#1A56DB] text-[#1A56DB] font-semibold focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
                ><i class="ri-dashboard-line text-xl"></i
                ><span class="flex-1 whitespace-nowrap">Dashboard</span></a
              >
            </li>
            <li>
              <a
                href="profile.html"
                class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
                ><i class="ri-user-line text-xl"></i
                ><span class="flex-1 whitespace-nowrap">Profile</span></a
              >
            </li>
            <li>
              <a
                class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
                ><i class="ri-book-open-line text-xl"></i
                ><span class="flex-1 whitespace-nowrap">Courses</span
                ><span
                  class="badge badge-sm bg-[#0EA5E9] text-white border-none whitespace-nowrap"
                  >6</span
                ></a
              >
            </li>
            <li>
              <a
                href="attendance.html"
                class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
                ><i class="ri-calendar-check-line text-xl"></i
                ><span class="flex-1 whitespace-nowrap">Attendance</span></a
              >
            </li>
            <li>
              <a
                class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
                ><i class="ri-file-list-line text-xl"></i
                ><span class="flex-1 whitespace-nowrap">Results</span></a
              >
            </li>
            <li>
              <a
                class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
                ><i class="ri-file-text-line text-xl"></i
                ><span class="flex-1 whitespace-nowrap">Assignments</span
                ><span
                  class="badge badge-sm bg-[#0EA5E9] text-white border-none whitespace-nowrap"
                  >3</span
                ></a
              >
            </li>
            <li>
              <a
                class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
                ><i class="ri-notification-line text-xl"></i
                ><span class="flex-1 whitespace-nowrap">Notices</span
                ><span
                  class="badge badge-sm bg-[#0EA5E9] text-white border-none whitespace-nowrap"
                  >12</span
                ></a
              >
            </li>
            <li>
              <a
                class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
                ><i class="ri-book-2-line text-xl"></i
                ><span class="flex-1 whitespace-nowrap">Library</span></a
              >
            </li>
            <li>
              <a
                href="fees.html"
                class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
                ><i class="ri-money-dollar-circle-line text-xl"></i
                ><span class="flex-1 whitespace-nowrap">Fees</span></a
              >
            </li>
            <li>
              <a
                href="messages.html"
                class="flex items-center gap-3 px-3 py-3 rounded-lg transition-all cursor-pointer group relative text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30"
                ><i class="ri-question-line text-xl"></i
                ><span class="flex-1 whitespace-nowrap"
                  >Help &amp; Support</span
                ></a
              >
            </li>
          </ul>
        </nav>
        <!-- ============= Nav Section end ================ -->
      </header>
    <main
      id="main-content"
      class="flex-1 flex flex-col transition-all duration-300 ml-[280px]"
    >
      <div class="flex-1 overflow-y-auto">
        <!-- ============   header section ================ -->
        <header
          class="bg-white border-b border-gray-200 sticky top-0 z-40"
          style="box-shadow: rgba(0, 0, 0, 0.04) 0px 2px 10px"
        >
          <div class="px-8 py-4">
            <div class="flex items-center justify-between">
              <div>
                <h1
                  class="text-2xl font-semibold text-gray-900"
                  style="font-family: Poppins, sans-serif"
                >
                  Dashboard
                </h1>
                <p
                  class="text-sm text-gray-500"
                  style="font-family: Inter, sans-serif"
                >
                  Overview of your teaching activities
                </p>
              </div>
              <div class="flex items-center gap-4">
                <div
                  class="hidden md:flex items-center gap-3 bg-gray-50 rounded-full px-4 py-2.5 w-80 border border-gray-200"
                >
                  <i class="ri-search-line text-gray-400 text-lg"></i
                  ><input
                    placeholder="Search anything…"
                    class="flex-1 bg-transparent outline-none text-sm text-gray-700"
                    type="text"
                    style="font-family: Inter, sans-serif"
                  />
                </div>
                <div class="relative">
                  <button
                    class="w-10 h-10 flex items-center justify-center bg-gray-50 hover:bg-gray-100 rounded-full transition-colors cursor-pointer relative"
                  >
                    <i class="ri-notification-3-line text-gray-700 text-xl"></i
                    ><span
                      class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"
                    ></span>
                  </button>
                </div>
                <a
                  href="messages.html"
                  class="w-10 h-10 flex items-center justify-center bg-gray-50 hover:bg-gray-100 rounded-full transition-colors cursor-pointer relative"
                  ><i class="ri-message-3-line text-gray-700 text-xl"></i
                  ><span
                    class="absolute top-1 right-1 w-5 h-5 bg-blue-600 text-white text-xs rounded-full flex items-center justify-center"
                    >3</span
                  ></a
                >
                <div class="relative">
                  <button
                    class="flex items-center gap-3 hover:bg-gray-50 rounded-full pr-4 transition-colors cursor-pointer"
                  >
                    <img
                      alt="Teacher Profile"
                      class="w-10 h-10 rounded-full object-cover border-2 border-blue-100"
                      src="assets/img_res/0b8498264ab0de952c5d7d1fb73f54c5.jpg"
                    />
                    <div class="hidden lg:block text-left">
                      <p
                        class="text-sm font-semibold text-gray-900"
                        style="font-family: Poppins, sans-serif"
                      >
                        Dr. Kamal Hossain
                      </p>
                      <p
                        class="text-xs text-gray-500"
                        style="font-family: Roboto, sans-serif"
                      >
                        Instructor
                      </p>
                    </div>
                    <i class="ri-arrow-down-s-line text-gray-500"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- ============   header section end ================ -->

        <div class="flex-1 overflow-y-auto">
          <div class="space-y-8 lg:space-x-7">
            <div
              class="bg-gradient-to-r from-blue-600 to-blue-500 rounded-xl p-8 text-white"
              style="box-shadow: rgba(26, 86, 219, 0.3) 0px 4px 20px"
            >
              <div class="flex items-center justify-between">
                <div>
                  <h1
                    class="text-3xl font-bold mb-2"
                    style="font-family: Poppins, sans-serif"
                  >
                    Welcome back, Dr. Rahman 👋
                  </h1>
                  <p
                    class="text-blue-100 text-lg"
                    style="font-family: Inter, sans-serif"
                  >
                    Here's your teaching activity overview
                  </p>
                  <div class="flex items-center gap-4 mt-3 text-sm">
                    <span
                      class="flex items-center gap-2 bg-white/20 px-3 py-1 rounded-full"
                      ><i class="ri-building-line"></i>Department of Computer
                      Science</span
                    ><span
                      class="flex items-center gap-2 bg-white/20 px-3 py-1 rounded-full"
                      ><i class="ri-user-star-line"></i>Associate
                      Professor</span
                    >
                  </div>
                </div>
                <div class="hidden lg:block">
                  <div
                    class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center"
                  >
                    <img
                      class="rounded-full"
                      src="assets/img_res/0b8498264ab0de952c5d7d1fb73f54c5.jpg"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-6">
              <!-- ======================= Today's Classes ======================= -->
              <div class="col-span-12 lg:col-span-8">
                <div class="bg-white rounded-xl shadow-lg p-6">
                  <div class="flex items-center justify-between mb-6">
                    <div>
                      <h2 class="text-2xl font-bold text-[#0F172A]">
                        Today's Classes
                      </h2>
                      <p class="text-sm text-gray-500 mt-1">
                        Friday, November 21, 2025
                      </p>
                    </div>
                    <a
                      href="#"
                      class="text-sm text-[#1A56DB] hover:underline font-medium cursor-pointer whitespace-nowrap"
                      >View Weekly Schedule</a
                    >
                  </div>
                  <div class="space-y-4">
                    <div
                      class="flex items-start gap-4 p-4 rounded-lg border-l-4 transition-all hover:shadow-md border-[#10B981] bg-[#10B981]/5"
                    >
                      <div class="flex flex-col items-center pt-1">
                        <div
                          class="w-3 h-3 rounded-full bg-[#10B981] animate-pulse"
                        ></div>
                        <div class="w-0.5 h-16 mt-2 bg-[#10B981]/30"></div>
                      </div>
                      <div class="flex-1">
                        <div class="flex items-start justify-between gap-4">
                          <div class="flex-1">
                            <h3 class="font-semibold text-[#0F172A] text-lg">
                              Database Management Systems
                            </h3>
                            <div
                              class="flex items-center gap-4 mt-2 text-sm text-gray-600"
                            >
                              <span class="flex items-center gap-1"
                                ><i class="ri-time-line"></i>09:00 AM - 10:30
                                AM</span
                              ><span class="flex items-center gap-1"
                                ><i class="ri-user-line"></i>Prof. Dr.
                                Rahman</span
                              ><span class="flex items-center gap-1"
                                ><i class="ri-map-pin-line"></i>Room 301</span
                              >
                            </div>
                          </div>
                          <div class="flex items-center gap-2">
                            <span
                              class="badge bg-[#10B981] text-white border-none whitespace-nowrap"
                              >In Progress</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="flex items-start gap-4 p-4 rounded-lg border-l-4 transition-all hover:shadow-md border-[#0EA5E9] bg-gray-50"
                    >
                      <div class="flex flex-col items-center pt-1">
                        <div
                          class="w-3 h-3 rounded-full bg-[#0EA5E9] animate-pulse"
                        ></div>
                        <div class="w-0.5 h-16 mt-2 bg-[#0EA5E9]/30"></div>
                      </div>
                      <div class="flex-1">
                        <div class="flex items-start justify-between gap-4">
                          <div class="flex-1">
                            <h3 class="font-semibold text-[#0F172A] text-lg">
                              Web Development
                            </h3>
                            <div
                              class="flex items-center gap-4 mt-2 text-sm text-gray-600"
                            >
                              <span class="flex items-center gap-1"
                                ><i class="ri-time-line"></i>11:00 AM - 12:30
                                PM</span
                              ><span class="flex items-center gap-1"
                                ><i class="ri-user-line"></i>Mr. Karim
                                Ahmed</span
                              ><span class="flex items-center gap-1"
                                ><i class="ri-map-pin-line"></i>Lab 2</span
                              >
                            </div>
                          </div>
                          <div class="flex items-center gap-2"></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="flex items-start gap-4 p-4 rounded-lg border-l-4 transition-all hover:shadow-md border-[#0EA5E9] bg-gray-50"
                    >
                      <div class="flex flex-col items-center pt-1">
                        <div
                          class="w-3 h-3 rounded-full bg-[#0EA5E9] animate-pulse"
                        ></div>
                        <div class="w-0.5 h-16 mt-2 bg-[#0EA5E9]/30"></div>
                      </div>
                      <div class="flex-1">
                        <div class="flex items-start justify-between gap-4">
                          <div class="flex-1">
                            <h3 class="font-semibold text-[#0F172A] text-lg">
                              Software Engineering
                            </h3>
                            <div
                              class="flex items-center gap-4 mt-2 text-sm text-gray-600"
                            >
                              <span class="flex items-center gap-1"
                                ><i class="ri-time-line"></i>02:00 PM - 03:30
                                PM</span
                              ><span class="flex items-center gap-1"
                                ><i class="ri-user-line"></i>Ms. Fatima
                                Khan</span
                              ><span class="flex items-center gap-1"
                                ><i class="ri-global-line"></i>Online</span
                              >
                            </div>
                          </div>
                          <div class="flex items-center gap-2">
                            <a
                              href="#"
                              class="btn btn-sm bg-[#1A56DB] hover:bg-[#1A56DB]/90 text-white border-none whitespace-nowrap cursor-pointer"
                              ><i class="ri-video-line"></i>Join Class</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="flex items-start gap-4 p-4 rounded-lg border-l-4 transition-all hover:shadow-md border-[#0EA5E9] bg-gray-50"
                    >
                      <div class="flex flex-col items-center pt-1">
                        <div
                          class="w-3 h-3 rounded-full bg-[#0EA5E9] animate-pulse"
                        ></div>
                        <div class="w-0.5 h-16 mt-2 bg-[#0EA5E9]/30"></div>
                      </div>
                      <div class="flex-1">
                        <div class="flex items-start justify-between gap-4">
                          <div class="flex-1">
                            <h3 class="font-semibold text-[#0F172A] text-lg">
                              Computer Networks
                            </h3>
                            <div
                              class="flex items-center gap-4 mt-2 text-sm text-gray-600"
                            >
                              <span class="flex items-center gap-1"
                                ><i class="ri-time-line"></i>04:00 PM - 05:30
                                PM</span
                              ><span class="flex items-center gap-1"
                                ><i class="ri-user-line"></i>Dr. Hossain</span
                              ><span class="flex items-center gap-1"
                                ><i class="ri-map-pin-line"></i>Room 205</span
                              >
                            </div>
                          </div>
                          <div class="flex items-center gap-2"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ======================= Today's Classes end ======================= -->
              <!-- ======================= Attendance  ======================= -->
              <div class="col-span-12 lg:col-span-4">
                <div class="bg-white rounded-xl shadow-lg p-6">
                  <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-[#0F172A]">
                      Attendance
                    </h3>
                    <select
                      class="select select-sm bg-[#F8FAFC] border-gray-200 focus:outline-none focus:ring-2 focus:ring-[#1A56DB]/30 text-sm pr-8"
                    >
                      <option>December 2024</option>
                      <option>November 2024</option>
                      <option>October 2024</option>
                      <option>September 2024</option>
                    </select>
                  </div>
                  <div class="flex justify-center mb-6">
                    <div class="relative w-48 h-48">
                      <svg class="transform -rotate-90 w-48 h-48">
                        <circle
                          cx="96"
                          cy="96"
                          r="70"
                          stroke="#E5E7EB"
                          stroke-width="12"
                          fill="none"
                        ></circle>
                        <circle
                          cx="96"
                          cy="96"
                          r="70"
                          stroke="#10B981"
                          stroke-width="12"
                          fill="none"
                          stroke-dasharray="439.822971502571"
                          stroke-dashoffset="57.176986295334245"
                          stroke-linecap="round"
                          class="transition-all duration-1000"
                        ></circle>
                      </svg>
                      <div
                        class="absolute inset-0 flex flex-col items-center justify-center"
                      >
                        <span class="text-4xl font-bold text-[#0F172A]"
                          >87%</span
                        ><span class="text-sm text-gray-500">Attendance</span>
                      </div>
                    </div>
                  </div>
                  <div class="grid grid-cols-3 gap-3">
                    <div class="text-center p-3 bg-[#10B981]/10 rounded-lg">
                      <div class="text-2xl font-bold text-[#10B981]">104</div>
                      <div class="text-xs text-gray-600 mt-1">Attended</div>
                    </div>
                    <div class="text-center p-3 bg-red-50 rounded-lg">
                      <div class="text-2xl font-bold text-red-600">12</div>
                      <div class="text-xs text-gray-600 mt-1">Absent</div>
                    </div>
                    <div class="text-center p-3 bg-orange-50 rounded-lg">
                      <div class="text-2xl font-bold text-orange-600">4</div>
                      <div class="text-xs text-gray-600 mt-1">Late</div>
                    </div>
                  </div>
                  <div class="mt-4 p-3 bg-[#F8FAFC] rounded-lg">
                    <div class="flex items-center justify-between text-sm">
                      <span class="text-gray-600">Total Classes</span
                      ><span class="font-semibold text-[#0F172A]">120</span>
                    </div>
                  </div>
                  <a
                    href="#"
                    class="btn btn-sm w-full mt-4 bg-[#1A56DB] hover:bg-[#1A56DB]/90 text-white border-none whitespace-nowrap cursor-pointer"
                    >View Detailed Report</a
                  >
                </div>
              </div>
              <!-- ======================= Attendance end ======================= -->
              <!-- ======================= Quick Actions ======================= -->
              <div class="col-span-12">
                <div class="bg-white rounded-xl shadow-lg p-6">
                  <h3 class="text-lg font-semibold text-[#0F172A] mb-4">
                    Quick Actions
                  </h3>
                  <div class="grid grid-cols-6 gap-3">
                    <button
                      class="flex flex-col items-center gap-2 p-4 rounded-lg border border-gray-200 hover:border-[#1A56DB] hover:shadow-md transition-all group cursor-pointer whitespace-nowrap"
                    >
                      <div
                        class="w-12 h-12 bg-[#1A56DB] rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform"
                      >
                        <i class="ri-file-text-line text-white text-2xl"></i>
                      </div>
                      <span class="text-sm text-gray-700 text-center"
                        >Apply Leave</span
                      >
                    </button>
                    <button
                      class="flex flex-col items-center gap-2 p-4 rounded-lg border border-gray-200 hover:border-[#1A56DB] hover:shadow-md transition-all group cursor-pointer whitespace-nowrap"
                    >
                      <div
                        class="w-12 h-12 bg-[#0EA5E9] rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform"
                      >
                        <i class="ri-upload-cloud-line text-white text-2xl"></i>
                      </div>
                      <span class="text-sm text-gray-700 text-center"
                        >Upload Assignment</span
                      >
                    </button>
                    <button
                      class="flex flex-col items-center gap-2 p-4 rounded-lg border border-gray-200 hover:border-[#1A56DB] hover:shadow-md transition-all group cursor-pointer whitespace-nowrap"
                    >
                      <div
                        class="w-12 h-12 bg-[#10B981] rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform"
                      >
                        <i class="ri-calendar-line text-white text-2xl"></i>
                      </div>
                      <span class="text-sm text-gray-700 text-center"
                        >View Routine</span
                      >
                    </button>
                    <button
                      class="flex flex-col items-center gap-2 p-4 rounded-lg border border-gray-200 hover:border-[#1A56DB] hover:shadow-md transition-all group cursor-pointer whitespace-nowrap"
                    >
                      <div
                        class="w-12 h-12 bg-[#F59E0B] rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform"
                      >
                        <i
                          class="ri-money-dollar-circle-line text-white text-2xl"
                        ></i>
                      </div>
                      <span class="text-sm text-gray-700 text-center"
                        >Pay Fee</span
                      >
                    </button>
                    <button
                      class="flex flex-col items-center gap-2 p-4 rounded-lg border border-gray-200 hover:border-[#1A56DB] hover:shadow-md transition-all group cursor-pointer whitespace-nowrap"
                    >
                      <div
                        class="w-12 h-12 bg-[#8B5CF6] rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform"
                      >
                        <i class="ri-book-2-line text-white text-2xl"></i>
                      </div>
                      <span class="text-sm text-gray-700 text-center"
                        >Library Books</span
                      >
                    </button>
                    <button
                      class="flex flex-col items-center gap-2 p-4 rounded-lg border border-gray-200 hover:border-[#1A56DB] hover:shadow-md transition-all group cursor-pointer whitespace-nowrap"
                    >
                      <div
                        class="w-12 h-12 bg-[#EC4899] rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform"
                      >
                        <i class="ri-download-line text-white text-2xl"></i>
                      </div>
                      <span class="text-sm text-gray-700 text-center"
                        >Download Forms</span
                      >
                    </button>
                  </div>
                </div>
              </div>
              <!-- ======================= Quick Actions end ======================= -->
              <!-- ======================= Recent Notices ======================= -->
              <div class="col-span-12 lg:col-span-6">
                <div class="bg-white rounded-xl shadow-lg p-6">
                  <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-[#0F172A]">
                      Recent Notices
                    </h3>
                    <a
                      href="#"
                      class="text-sm text-[#1A56DB] hover:underline cursor-pointer whitespace-nowrap"
                      >View All</a
                    >
                  </div>
                  <div class="flex gap-2 mb-4 overflow-x-auto pb-2">
                    <button
                      class="px-4 py-1.5 rounded-full text-sm font-medium transition-all whitespace-nowrap cursor-pointer bg-[#1A56DB] text-white"
                    >
                      All</button
                    ><button
                      class="px-4 py-1.5 rounded-full text-sm font-medium transition-all whitespace-nowrap cursor-pointer bg-gray-100 text-gray-700 hover:bg-gray-200"
                    >
                      Exam</button
                    ><button
                      class="px-4 py-1.5 rounded-full text-sm font-medium transition-all whitespace-nowrap cursor-pointer bg-gray-100 text-gray-700 hover:bg-gray-200"
                    >
                      Admission</button
                    ><button
                      class="px-4 py-1.5 rounded-full text-sm font-medium transition-all whitespace-nowrap cursor-pointer bg-gray-100 text-gray-700 hover:bg-gray-200"
                    >
                      General</button
                    ><button
                      class="px-4 py-1.5 rounded-full text-sm font-medium transition-all whitespace-nowrap cursor-pointer bg-gray-100 text-gray-700 hover:bg-gray-200"
                    >
                      Event
                    </button>
                  </div>
                  <div class="space-y-3">
                    <div
                      class="p-4 rounded-lg border-l-4 hover:shadow-md transition-all cursor-pointer border-red-500 bg-red-50/50"
                    >
                      <div class="flex items-start justify-between gap-3">
                        <div class="flex-1">
                          <div class="flex items-center gap-2 mb-2">
                            <span
                              class="badge badge-sm bg-red-100 text-red-700 border-none whitespace-nowrap"
                              >Exam</span
                            ><span
                              class="badge badge-sm bg-red-500 text-white border-none whitespace-nowrap"
                              >Important</span
                            >
                          </div>
                          <h4 class="font-medium text-[#0F172A] mb-1">
                            Final Examination Schedule Released for Semester 6
                          </h4>
                          <p
                            class="text-xs text-gray-500 flex items-center gap-1"
                          >
                            <i class="ri-time-line"></i>2 hours ago
                          </p>
                        </div>
                        <a
                          href="#"
                          class="text-[#1A56DB] hover:underline text-sm font-medium whitespace-nowrap cursor-pointer"
                          >Read</a
                        >
                      </div>
                    </div>
                    <div
                      class="p-4 rounded-lg border-l-4 hover:shadow-md transition-all cursor-pointer border-gray-300 bg-gray-50"
                    >
                      <div class="flex items-start justify-between gap-3">
                        <div class="flex-1">
                          <div class="flex items-center gap-2 mb-2">
                            <span
                              class="badge badge-sm bg-blue-100 text-blue-700 border-none whitespace-nowrap"
                              >Admission</span
                            >
                          </div>
                          <h4 class="font-medium text-[#0F172A] mb-1">
                            New Admission Open for Spring 2025 Session
                          </h4>
                          <p
                            class="text-xs text-gray-500 flex items-center gap-1"
                          >
                            <i class="ri-time-line"></i>5 hours ago
                          </p>
                        </div>
                        <a
                          href="#"
                          class="text-[#1A56DB] hover:underline text-sm font-medium whitespace-nowrap cursor-pointer"
                          >Read</a
                        >
                      </div>
                    </div>
                    <div
                      class="p-4 rounded-lg border-l-4 hover:shadow-md transition-all cursor-pointer border-gray-300 bg-gray-50"
                    >
                      <div class="flex items-start justify-between gap-3">
                        <div class="flex-1">
                          <div class="flex items-center gap-2 mb-2">
                            <span
                              class="badge badge-sm bg-gray-100 text-gray-700 border-none whitespace-nowrap"
                              >General</span
                            >
                          </div>
                          <h4 class="font-medium text-[#0F172A] mb-1">
                            Campus will remain closed on Friday for National
                            Holiday
                          </h4>
                          <p
                            class="text-xs text-gray-500 flex items-center gap-1"
                          >
                            <i class="ri-time-line"></i>1 day ago
                          </p>
                        </div>
                        <a
                          href="#"
                          class="text-[#1A56DB] hover:underline text-sm font-medium whitespace-nowrap cursor-pointer"
                          >Read</a
                        >
                      </div>
                    </div>
                    <div
                      class="p-4 rounded-lg border-l-4 hover:shadow-md transition-all cursor-pointer border-gray-300 bg-gray-50"
                    >
                      <div class="flex items-start justify-between gap-3">
                        <div class="flex-1">
                          <div class="flex items-center gap-2 mb-2">
                            <span
                              class="badge badge-sm bg-purple-100 text-purple-700 border-none whitespace-nowrap"
                              >Event</span
                            >
                          </div>
                          <h4 class="font-medium text-[#0F172A] mb-1">
                            Annual Tech Fest 2024 - Registration Now Open
                          </h4>
                          <p
                            class="text-xs text-gray-500 flex items-center gap-1"
                          >
                            <i class="ri-time-line"></i>2 days ago
                          </p>
                        </div>
                        <a
                          href="#"
                          class="text-[#1A56DB] hover:underline text-sm font-medium whitespace-nowrap cursor-pointer"
                          >Read</a
                        >
                      </div>
                    </div>
                    <div
                      class="p-4 rounded-lg border-l-4 hover:shadow-md transition-all cursor-pointer border-gray-300 bg-gray-50"
                    >
                      <div class="flex items-start justify-between gap-3">
                        <div class="flex-1">
                          <div class="flex items-center gap-2 mb-2">
                            <span
                              class="badge badge-sm bg-gray-100 text-gray-700 border-none whitespace-nowrap"
                              >General</span
                            >
                          </div>
                          <h4 class="font-medium text-[#0F172A] mb-1">
                            Library Timing Extended During Exam Period
                          </h4>
                          <p
                            class="text-xs text-gray-500 flex items-center gap-1"
                          >
                            <i class="ri-time-line"></i>3 days ago
                          </p>
                        </div>
                        <a
                          href="#"
                          class="text-[#1A56DB] hover:underline text-sm font-medium whitespace-nowrap cursor-pointer"
                          >Read</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ======================= Recent Notices end ======================= -->
              <!-- ======================= Upcoming Events ======================= -->
              <div class="col-span-12 lg:col-span-6">
                <div class="bg-white rounded-xl shadow-lg p-6">
                  <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-[#0F172A]">
                      Assignments &amp; Deadlines
                    </h3>
                    <a
                      href="#"
                      class="text-sm text-[#1A56DB] hover:underline cursor-pointer whitespace-nowrap"
                      >View All</a
                    >
                  </div>
                  <div class="overflow-x-auto">
                    <table class="table w-full">
                      <thead>
                        <tr class="border-b border-gray-200">
                          <th
                            class="text-left text-sm font-semibold text-gray-700"
                          >
                            Subject
                          </th>
                          <th
                            class="text-left text-sm font-semibold text-gray-700"
                          >
                            Assignment
                          </th>
                          <th
                            class="text-left text-sm font-semibold text-gray-700"
                          >
                            Due Date
                          </th>
                          <th
                            class="text-left text-sm font-semibold text-gray-700"
                          >
                            Status
                          </th>
                          <th
                            class="text-right text-sm font-semibold text-gray-700"
                          >
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="border-b border-gray-100 hover:bg-gray-50">
                          <td class="py-3">
                            <span class="font-medium text-[#0F172A] text-sm"
                              >Database Management</span
                            >
                          </td>
                          <td class="py-3">
                            <span class="text-sm text-gray-700"
                              >ER Diagram Design Project</span
                            >
                          </td>
                          <td class="py-3">
                            <div class="flex flex-col">
                              <span class="text-sm text-gray-700"
                                >2024-12-28</span
                              ><span class="text-xs text-gray-500"
                                >2 days left</span
                              >
                            </div>
                          </td>
                          <td class="py-3">
                            <span
                              class="badge badge-sm bg-yellow-100 text-yellow-700 border-none whitespace-nowrap"
                              >Pending</span
                            >
                          </td>
                          <td class="py-3 text-right">
                            <button
                              class="btn btn-xs bg-[#1A56DB] hover:bg-[#1A56DB]/90 text-white border-none cursor-pointer whitespace-nowrap"
                            >
                              <i class="ri-upload-line"></i>Submit
                            </button>
                          </td>
                        </tr>
                        <tr class="border-b border-gray-100 hover:bg-gray-50">
                          <td class="py-3">
                            <span class="font-medium text-[#0F172A] text-sm"
                              >Web Development</span
                            >
                          </td>
                          <td class="py-3">
                            <span class="text-sm text-gray-700"
                              >Responsive Portfolio Website</span
                            >
                          </td>
                          <td class="py-3">
                            <div class="flex flex-col">
                              <span class="text-sm text-gray-700"
                                >2024-12-30</span
                              ><span class="text-xs text-gray-500"
                                >4 days left</span
                              >
                            </div>
                          </td>
                          <td class="py-3">
                            <span
                              class="badge badge-sm bg-yellow-100 text-yellow-700 border-none whitespace-nowrap"
                              >Pending</span
                            >
                          </td>
                          <td class="py-3 text-right">
                            <button
                              class="btn btn-xs bg-[#1A56DB] hover:bg-[#1A56DB]/90 text-white border-none cursor-pointer whitespace-nowrap"
                            >
                              <i class="ri-upload-line"></i>Submit
                            </button>
                          </td>
                        </tr>
                        <tr
                          class="border-b border-gray-100 hover:bg-gray-50 border-l-4"
                        >
                          <td class="py-3">
                            <span class="font-medium text-[#0F172A] text-sm"
                              >Software Engineering</span
                            >
                          </td>
                          <td class="py-3">
                            <span class="text-sm text-gray-700"
                              >SRS Document Preparation</span
                            >
                          </td>
                          <td class="py-3">
                            <div class="flex flex-col">
                              <span class="text-sm text-gray-700"
                                >2024-12-24</span
                              ><span class="text-xs text-red-600"
                                >2 days overdue</span
                              >
                            </div>
                          </td>
                          <td class="py-3">
                            <span
                              class="badge badge-sm bg-red-100 text-red-700 border-none whitespace-nowrap"
                              >Overdue</span
                            >
                          </td>
                          <td class="py-3 text-right">
                            <button
                              class="btn btn-xs bg-[#1A56DB] hover:bg-[#1A56DB]/90 text-white border-none cursor-pointer whitespace-nowrap"
                            >
                              <i class="ri-upload-line"></i>Submit
                            </button>
                          </td>
                        </tr>
                        <tr class="border-b border-gray-100 hover:bg-gray-50">
                          <td class="py-3">
                            <span class="font-medium text-[#0F172A] text-sm"
                              >Computer Networks</span
                            >
                          </td>
                          <td class="py-3">
                            <span class="text-sm text-gray-700"
                              >Network Topology Analysis</span
                            >
                          </td>
                          <td class="py-3">
                            <div class="flex flex-col">
                              <span class="text-sm text-gray-700"
                                >2024-12-22</span
                              >
                            </div>
                          </td>
                          <td class="py-3">
                            <span
                              class="badge badge-sm bg-green-100 text-green-700 border-none whitespace-nowrap"
                              >Submitted</span
                            >
                          </td>
                          <td class="py-3 text-right">
                            <button
                              class="btn btn-xs btn-ghost text-[#10B981] cursor-pointer whitespace-nowrap"
                            >
                              <i class="ri-check-line"></i>View
                            </button>
                          </td>
                        </tr>
                        <tr class="border-b border-gray-100 hover:bg-gray-50">
                          <td class="py-3">
                            <span class="font-medium text-[#0F172A] text-sm"
                              >Data Structures</span
                            >
                          </td>
                          <td class="py-3">
                            <span class="text-sm text-gray-700"
                              >Binary Tree Implementation</span
                            >
                          </td>
                          <td class="py-3">
                            <div class="flex flex-col">
                              <span class="text-sm text-gray-700"
                                >2024-12-20</span
                              >
                            </div>
                          </td>
                          <td class="py-3">
                            <span
                              class="badge badge-sm bg-green-100 text-green-700 border-none whitespace-nowrap"
                              >Submitted</span
                            >
                          </td>
                          <td class="py-3 text-right">
                            <button
                              class="btn btn-xs btn-ghost text-[#10B981] cursor-pointer whitespace-nowrap"
                            >
                              <i class="ri-check-line"></i>View
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ======================= Upcoming Events end ======================= -->
              <!-- ======================= Recent Notices ======================= -->
              <div class="col-span-12 lg:col-span-4">
                <div class="bg-white rounded-xl shadow-lg p-6">
                  <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-[#0F172A]">
                      Results
                    </h3>
                    <a
                      href="#"
                      class="text-sm text-[#1A56DB] hover:underline cursor-pointer whitespace-nowrap"
                      >View Details</a
                    >
                  </div>
                  <div
                    class="bg-gradient-to-br from-[#1A56DB] to-[#0EA5E9] rounded-xl p-6 text-white mb-6"
                  >
                    <div class="text-center">
                      <p class="text-sm opacity-90 mb-2">Current CGPA</p>
                      <p class="text-5xl font-bold">3.68</p>
                      <p class="text-sm opacity-90 mt-2">Out of 4.00</p>
                    </div>
                  </div>
                  <div class="bg-[#10B981]/10 rounded-lg p-4 mb-4">
                    <div class="flex items-center justify-between">
                      <span class="text-sm text-gray-700"
                        >Latest Semester GPA</span
                      ><span class="text-2xl font-bold text-[#10B981]"
                        >3.75</span
                      >
                    </div>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm text-gray-600 mb-2">GPA Trend</p>
                    <div class="flex items-end gap-1 h-16">
                      <div
                        class="flex-1 bg-[#1A56DB] rounded-t transition-all hover:bg-[#0EA5E9] cursor-pointer"
                        title="Semester 1: 3.5"
                        style="height: 87.5%"
                      ></div>
                      <div
                        class="flex-1 bg-[#1A56DB] rounded-t transition-all hover:bg-[#0EA5E9] cursor-pointer"
                        title="Semester 2: 3.6"
                        style="height: 90%"
                      ></div>
                      <div
                        class="flex-1 bg-[#1A56DB] rounded-t transition-all hover:bg-[#0EA5E9] cursor-pointer"
                        title="Semester 3: 3.65"
                        style="height: 91.25%"
                      ></div>
                      <div
                        class="flex-1 bg-[#1A56DB] rounded-t transition-all hover:bg-[#0EA5E9] cursor-pointer"
                        title="Semester 4: 3.7"
                        style="height: 92.5%"
                      ></div>
                      <div
                        class="flex-1 bg-[#1A56DB] rounded-t transition-all hover:bg-[#0EA5E9] cursor-pointer"
                        title="Semester 5: 3.68"
                        style="height: 92%"
                      ></div>
                      <div
                        class="flex-1 bg-[#1A56DB] rounded-t transition-all hover:bg-[#0EA5E9] cursor-pointer"
                        title="Semester 6: 3.75"
                        style="height: 93.75%"
                      ></div>
                    </div>
                    <div
                      class="flex justify-between text-xs text-gray-500 mt-1"
                    >
                      <span>Sem 1</span><span>Sem 6</span>
                    </div>
                  </div>
                  <div>
                    <p class="text-sm font-semibold text-gray-700 mb-3">
                      Top Performing Subjects
                    </p>
                    <div class="space-y-2">
                      <div
                        class="flex items-center justify-between p-2 bg-gray-50 rounded-lg"
                      >
                        <span class="text-sm text-gray-700"
                          >Database Management</span
                        >
                        <div class="flex items-center gap-2">
                          <span
                            class="badge bg-[#10B981] text-white border-none whitespace-nowrap"
                            >A+</span
                          ><span class="text-sm font-semibold text-gray-700"
                            >4</span
                          >
                        </div>
                      </div>
                      <div
                        class="flex items-center justify-between p-2 bg-gray-50 rounded-lg"
                      >
                        <span class="text-sm text-gray-700"
                          >Web Development</span
                        >
                        <div class="flex items-center gap-2">
                          <span
                            class="badge bg-[#10B981] text-white border-none whitespace-nowrap"
                            >A</span
                          ><span class="text-sm font-semibold text-gray-700"
                            >3.75</span
                          >
                        </div>
                      </div>
                      <div
                        class="flex items-center justify-between p-2 bg-gray-50 rounded-lg"
                      >
                        <span class="text-sm text-gray-700"
                          >Data Structures</span
                        >
                        <div class="flex items-center gap-2">
                          <span
                            class="badge bg-[#10B981] text-white border-none whitespace-nowrap"
                            >A</span
                          ><span class="text-sm font-semibold text-gray-700"
                            >3.75</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <button
                    class="btn btn-sm w-full mt-4 bg-white border-[#1A56DB] text-[#1A56DB] hover:bg-[#1A56DB] hover:text-white whitespace-nowrap cursor-pointer"
                  >
                    <i class="ri-download-line"></i>Download Transcript
                  </button>
                </div>
              </div>
              <!-- ======================= Recent Notices end ======================= -->
              <!-- ======================= Course Materials ======================= -->
              <div class="col-span-12 lg:col-span-8">
                <div class="bg-white rounded-xl shadow-lg p-6">
                  <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-[#0F172A]">
                      Course Materials
                    </h3>
                    <a
                      href="#"
                      class="text-sm text-[#1A56DB] hover:underline cursor-pointer whitespace-nowrap"
                      >View All Courses</a
                    >
                  </div>
                  <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"
                  >
                    <div
                      class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-all group cursor-pointer"
                    >
                      <div
                        class="relative h-40 bg-gradient-to-br from-[#1A56DB]/10 to-[#0EA5E9]/10 overflow-hidden"
                      >
                        <img
                          alt="Database Management Systems"
                          class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform"
                          src="assets/img_res/0e32bc04e1ba8c39689ee1a0afb89c36.jpg"
                        />
                        <div class="absolute top-2 right-2">
                          <span
                            class="badge bg-white/90 text-[#1A56DB] border-none whitespace-nowrap"
                            >CSE-401</span
                          >
                        </div>
                      </div>
                      <div class="p-4">
                        <h4
                          class="font-semibold text-[#0F172A] mb-2 line-clamp-2"
                        >
                          Database Management Systems
                        </h4>
                        <p
                          class="text-sm text-gray-600 mb-3 flex items-center gap-1"
                        >
                          <i class="ri-user-line"></i>Prof. Dr. Rahman
                        </p>
                        <div class="flex items-center justify-between">
                          <span
                            class="text-sm text-gray-500 flex items-center gap-1"
                            ><i class="ri-file-text-line"></i>24 materials</span
                          ><a
                            href="#"
                            class="btn btn-sm bg-[#1A56DB] hover:bg-[#1A56DB]/90 text-white border-none whitespace-nowrap cursor-pointer"
                            >View Materials</a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-all group cursor-pointer"
                    >
                      <div
                        class="relative h-40 bg-gradient-to-br from-[#1A56DB]/10 to-[#0EA5E9]/10 overflow-hidden"
                      >
                        <img
                          alt="Web Development"
                          class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform"
                          src="https://readdy.ai/api/search-image?query=Web%20development%20workspace%20with%20modern%20coding%20interface%2C%20HTML%20CSS%20JavaScript%20elements%2C%20clean%20blue%20and%20teal%20color%20scheme%2C%20professional%20educational%20technology%20illustration%2C%20minimalist%20background%20highlighting%20web%20design%20tools&width=400&height=300&seq=web1&orientation=landscape"
                        />
                        <div class="absolute top-2 right-2">
                          <span
                            class="badge bg-white/90 text-[#1A56DB] border-none whitespace-nowrap"
                            >CSE-402</span
                          >
                        </div>
                      </div>
                      <div class="p-4">
                        <h4
                          class="font-semibold text-[#0F172A] mb-2 line-clamp-2"
                        >
                          Web Development
                        </h4>
                        <p
                          class="text-sm text-gray-600 mb-3 flex items-center gap-1"
                        >
                          <i class="ri-user-line"></i>Mr. Karim Ahmed
                        </p>
                        <div class="flex items-center justify-between">
                          <span
                            class="text-sm text-gray-500 flex items-center gap-1"
                            ><i class="ri-file-text-line"></i>18 materials</span
                          ><a
                            href="#"
                            class="btn btn-sm bg-[#1A56DB] hover:bg-[#1A56DB]/90 text-white border-none whitespace-nowrap cursor-pointer"
                            >View Materials</a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-all group cursor-pointer"
                    >
                      <div
                        class="relative h-40 bg-gradient-to-br from-[#1A56DB]/10 to-[#0EA5E9]/10 overflow-hidden"
                      >
                        <img
                          alt="Software Engineering"
                          class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform"
                          src="https://readdy.ai/api/search-image?query=Software%20engineering%20methodology%20visualization%20with%20agile%20development%20concepts%2C%20clean%20blue%20and%20green%20color%20scheme%2C%20professional%20educational%20technology%20illustration%2C%20minimalist%20background%20highlighting%20software%20lifecycle%20diagrams&width=400&height=300&seq=se1&orientation=landscape"
                        />
                        <div class="absolute top-2 right-2">
                          <span
                            class="badge bg-white/90 text-[#1A56DB] border-none whitespace-nowrap"
                            >CSE-403</span
                          >
                        </div>
                      </div>
                      <div class="p-4">
                        <h4
                          class="font-semibold text-[#0F172A] mb-2 line-clamp-2"
                        >
                          Software Engineering
                        </h4>
                        <p
                          class="text-sm text-gray-600 mb-3 flex items-center gap-1"
                        >
                          <i class="ri-user-line"></i>Ms. Fatima Khan
                        </p>
                        <div class="flex items-center justify-between">
                          <span
                            class="text-sm text-gray-500 flex items-center gap-1"
                            ><i class="ri-file-text-line"></i>21 materials</span
                          ><a
                            href="#"
                            class="btn btn-sm bg-[#1A56DB] hover:bg-[#1A56DB]/90 text-white border-none whitespace-nowrap cursor-pointer"
                            >View Materials</a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-all group cursor-pointer"
                    >
                      <div
                        class="relative h-40 bg-gradient-to-br from-[#1A56DB]/10 to-[#0EA5E9]/10 overflow-hidden"
                      >
                        <img
                          alt="Computer Networks"
                          class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform"
                          src="https://readdy.ai/api/search-image?query=Computer%20network%20topology%20visualization%20with%20connected%20nodes%20and%20data%20flow%2C%20clean%20blue%20and%20cyan%20color%20scheme%2C%20professional%20educational%20technology%20illustration%2C%20minimalist%20background%20highlighting%20network%20infrastructure&width=400&height=300&seq=net1&orientation=landscape"
                        />
                        <div class="absolute top-2 right-2">
                          <span
                            class="badge bg-white/90 text-[#1A56DB] border-none whitespace-nowrap"
                            >CSE-404</span
                          >
                        </div>
                      </div>
                      <div class="p-4">
                        <h4
                          class="font-semibold text-[#0F172A] mb-2 line-clamp-2"
                        >
                          Computer Networks
                        </h4>
                        <p
                          class="text-sm text-gray-600 mb-3 flex items-center gap-1"
                        >
                          <i class="ri-user-line"></i>Dr. Hossain
                        </p>
                        <div class="flex items-center justify-between">
                          <span
                            class="text-sm text-gray-500 flex items-center gap-1"
                            ><i class="ri-file-text-line"></i>16 materials</span
                          ><a
                            href="#"
                            class="btn btn-sm bg-[#1A56DB] hover:bg-[#1A56DB]/90 text-white border-none whitespace-nowrap cursor-pointer"
                            >View Materials</a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-all group cursor-pointer"
                    >
                      <div
                        class="relative h-40 bg-gradient-to-br from-[#1A56DB]/10 to-[#0EA5E9]/10 overflow-hidden"
                      >
                        <img
                          alt="Data Structures"
                          class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform"
                          src="https://readdy.ai/api/search-image?query=Data%20structures%20visualization%20with%20trees%20graphs%20and%20arrays%2C%20clean%20blue%20and%20purple%20color%20scheme%2C%20professional%20educational%20technology%20illustration%2C%20minimalist%20background%20highlighting%20algorithmic%20concepts&width=400&height=300&seq=ds1&orientation=landscape"
                        />
                        <div class="absolute top-2 right-2">
                          <span
                            class="badge bg-white/90 text-[#1A56DB] border-none whitespace-nowrap"
                            >CSE-405</span
                          >
                        </div>
                      </div>
                      <div class="p-4">
                        <h4
                          class="font-semibold text-[#0F172A] mb-2 line-clamp-2"
                        >
                          Data Structures
                        </h4>
                        <p
                          class="text-sm text-gray-600 mb-3 flex items-center gap-1"
                        >
                          <i class="ri-user-line"></i>Mr. Alam
                        </p>
                        <div class="flex items-center justify-between">
                          <span
                            class="text-sm text-gray-500 flex items-center gap-1"
                            ><i class="ri-file-text-line"></i>20 materials</span
                          ><a
                            href="#"
                            class="btn btn-sm bg-[#1A56DB] hover:bg-[#1A56DB]/90 text-white border-none whitespace-nowrap cursor-pointer"
                            >View Materials</a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-all group cursor-pointer"
                    >
                      <div
                        class="relative h-40 bg-gradient-to-br from-[#1A56DB]/10 to-[#0EA5E9]/10 overflow-hidden"
                      >
                        <img
                          alt="Operating Systems"
                          class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform"
                          src="https://readdy.ai/api/search-image?query=Operating%20system%20architecture%20with%20process%20management%20and%20memory%20concepts%2C%20clean%20blue%20and%20gray%20color%20scheme%2C%20professional%20educational%20technology%20illustration%2C%20minimalist%20background%20highlighting%20OS%20components&width=400&height=300&seq=os1&orientation=landscape"
                        />
                        <div class="absolute top-2 right-2">
                          <span
                            class="badge bg-white/90 text-[#1A56DB] border-none whitespace-nowrap"
                            >CSE-406</span
                          >
                        </div>
                      </div>
                      <div class="p-4">
                        <h4
                          class="font-semibold text-[#0F172A] mb-2 line-clamp-2"
                        >
                          Operating Systems
                        </h4>
                        <p
                          class="text-sm text-gray-600 mb-3 flex items-center gap-1"
                        >
                          <i class="ri-user-line"></i>Dr. Begum
                        </p>
                        <div class="flex items-center justify-between">
                          <span
                            class="text-sm text-gray-500 flex items-center gap-1"
                            ><i class="ri-file-text-line"></i>19 materials</span
                          ><a
                            href="#"
                            class="btn btn-sm bg-[#1A56DB] hover:bg-[#1A56DB]/90 text-white border-none whitespace-nowrap cursor-pointer"
                            >View Materials</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ======================= Course Materials end ======================= -->
              <!-- ======================= Lab Schedule & Booking ======================= -->
              <div class="col-span-12">
                <div class="bg-white rounded-xl shadow-lg p-6">
                  <div class="flex items-center justify-between mb-6">
                    <div>
                      <h3 class="text-lg font-semibold text-[#0F172A]">
                        Lab Schedule &amp; Booking
                      </h3>
                      <p class="text-sm text-gray-500 mt-1">
                        This Week's Lab Sessions
                      </p>
                    </div>
                    <a
                      href="#"
                      class="text-sm text-[#1A56DB] hover:underline cursor-pointer whitespace-nowrap"
                      >View Full Calendar</a
                    >
                  </div>
                  <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-3"
                  >
                    <div
                      class="p-4 rounded-lg border-2 transition-all border-[#10B981] bg-[#10B981]/5"
                    >
                      <div class="flex items-start justify-between mb-2">
                        <span class="text-sm font-semibold text-[#0F172A]"
                          >Monday</span
                        ><span
                          class="badge badge-xs bg-[#10B981] text-white border-none whitespace-nowrap"
                          >Booked</span
                        >
                      </div>
                      <div class="space-y-2">
                        <p
                          class="text-xs text-gray-600 flex items-center gap-1"
                        >
                          <i class="ri-time-line"></i>10:00 AM - 12:00 PM
                        </p>
                        <p
                          class="text-xs text-gray-600 flex items-center gap-1"
                        >
                          <i class="ri-computer-line"></i>Lab 1
                        </p>
                        <p class="text-sm font-medium text-[#0F172A] mt-2">
                          Database Lab
                        </p>
                      </div>
                    </div>
                    <div
                      class="p-4 rounded-lg border-2 transition-all border-[#10B981] bg-[#10B981]/5"
                    >
                      <div class="flex items-start justify-between mb-2">
                        <span class="text-sm font-semibold text-[#0F172A]"
                          >Monday</span
                        ><span
                          class="badge badge-xs bg-[#10B981] text-white border-none whitespace-nowrap"
                          >Booked</span
                        >
                      </div>
                      <div class="space-y-2">
                        <p
                          class="text-xs text-gray-600 flex items-center gap-1"
                        >
                          <i class="ri-time-line"></i>02:00 PM - 04:00 PM
                        </p>
                        <p
                          class="text-xs text-gray-600 flex items-center gap-1"
                        >
                          <i class="ri-computer-line"></i>Lab 2
                        </p>
                        <p class="text-sm font-medium text-[#0F172A] mt-2">
                          Web Dev Lab
                        </p>
                      </div>
                    </div>
                    <div
                      class="p-4 rounded-lg border-2 transition-all border-gray-200 bg-gray-50 hover:border-[#1A56DB]"
                    >
                      <div class="flex items-start justify-between mb-2">
                        <span class="text-sm font-semibold text-[#0F172A]"
                          >Wednesday</span
                        ><span
                          class="badge badge-xs bg-gray-300 text-gray-700 border-none whitespace-nowrap"
                          >Available</span
                        >
                      </div>
                      <div class="space-y-2">
                        <p
                          class="text-xs text-gray-600 flex items-center gap-1"
                        >
                          <i class="ri-time-line"></i>10:00 AM - 12:00 PM
                        </p>
                        <p
                          class="text-xs text-gray-600 flex items-center gap-1"
                        >
                          <i class="ri-computer-line"></i>Lab 1
                        </p>
                        <p class="text-sm font-medium text-[#0F172A] mt-2">
                          Network Lab
                        </p>
                      </div>
                      <button
                        class="btn btn-xs w-full mt-3 bg-[#1A56DB] hover:bg-[#1A56DB]/90 text-white border-none whitespace-nowrap cursor-pointer"
                      >
                        Book Slot
                      </button>
                    </div>
                    <div
                      class="p-4 rounded-lg border-2 transition-all border-[#10B981] bg-[#10B981]/5"
                    >
                      <div class="flex items-start justify-between mb-2">
                        <span class="text-sm font-semibold text-[#0F172A]"
                          >Wednesday</span
                        ><span
                          class="badge badge-xs bg-[#10B981] text-white border-none whitespace-nowrap"
                          >Booked</span
                        >
                      </div>
                      <div class="space-y-2">
                        <p
                          class="text-xs text-gray-600 flex items-center gap-1"
                        >
                          <i class="ri-time-line"></i>02:00 PM - 04:00 PM
                        </p>
                        <p
                          class="text-xs text-gray-600 flex items-center gap-1"
                        >
                          <i class="ri-computer-line"></i>Lab 3
                        </p>
                        <p class="text-sm font-medium text-[#0F172A] mt-2">
                          Software Lab
                        </p>
                      </div>
                    </div>
                    <div
                      class="p-4 rounded-lg border-2 transition-all border-gray-200 bg-gray-50 hover:border-[#1A56DB]"
                    >
                      <div class="flex items-start justify-between mb-2">
                        <span class="text-sm font-semibold text-[#0F172A]"
                          >Friday</span
                        ><span
                          class="badge badge-xs bg-gray-300 text-gray-700 border-none whitespace-nowrap"
                          >Available</span
                        >
                      </div>
                      <div class="space-y-2">
                        <p
                          class="text-xs text-gray-600 flex items-center gap-1"
                        >
                          <i class="ri-time-line"></i>10:00 AM - 12:00 PM
                        </p>
                        <p
                          class="text-xs text-gray-600 flex items-center gap-1"
                        >
                          <i class="ri-computer-line"></i>Lab 2
                        </p>
                        <p class="text-sm font-medium text-[#0F172A] mt-2">
                          Data Structures Lab
                        </p>
                      </div>
                      <button
                        class="btn btn-xs w-full mt-3 bg-[#1A56DB] hover:bg-[#1A56DB]/90 text-white border-none whitespace-nowrap cursor-pointer"
                      >
                        Book Slot
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ======================= Lab Schedule & Booking end ======================= -->
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
  <!-- main script -->
  <script src="script/main.js"></script>
</html>
