<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Student Dashboard</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            primary: '#344e41',
                            secondary: '#588157',
                            accent: '#dad7cd',
                            dark: '#202020',
                        }
                    }
                },
            },
        }
    </script>
</head>

<body class="bg-gray-50 font-sans text-brand-dark antialiased min-h-screen flex flex-col">

    <!-- Top Navigation Bar -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">

                <!-- Brand Identity -->
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 bg-brand-primary rounded-md flex items-center justify-center text-white font-bold text-lg shadow-xs">
                        P
                    </div>
                    <div>
                        <span class="text-base font-bold text-brand-dark tracking-tight block leading-none">PAXTON</span>
                        <span class="text-[10px] uppercase font-semibold text-gray-500 tracking-widest block mt-0.5">University SSIS</span>
                    </div>
                </div>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center space-x-1">
                    <a href="dashboard.php" class="px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30 border border-brand-secondary/20">Dashboard</a>
                    <a href="enrollment.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Enrollment</a>
                    <a href="grades.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Grades</a>
                    <a href="clearance.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Clearance</a>
                    <a href="requests.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Requests</a>
                    <a href="profile.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Profile</a>
                    <a href="notifications.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Notifications</a>
                </nav>

                <!-- Action Controls -->
                <div class="flex items-center space-x-3">
                    <div class="h-5 w-px bg-gray-200 hidden md:block"></div>

                    <!-- User Info / Profile -->
                    <div class="hidden lg:flex items-center space-x-2">
                        <div class="text-right">
                            <p id="nav_student_name" class="text-xs font-semibold text-brand-dark">John Doe</p>
                            <p id="nav_student_id" class="text-[10px] text-gray-500">2026-00001</p>
                        </div>
                        <a href="logout.php" id="nav_logout_btn" class="p-2 text-gray-400 hover:text-red-600 rounded-md hover:bg-gray-100 transition-colors" title="Log Out">
                            <i data-lucide="log-out" class="w-5 h-5"></i>
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button id="mobile_menu_btn" type="button" class="lg:hidden p-2 rounded-md text-gray-600 hover:text-brand-primary hover:bg-gray-100 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu preview-icon size-5">
                            <path d="M4 5h16" />
                            <path d="M4 12h16" />
                            <path d="M4 19h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile_menu" class="hidden lg:hidden border-t border-gray-200 bg-white px-4 pt-2 pb-4 space-y-1">
            <a href="dashboard.php" class="block px-3 py-2 rounded-md text-base font-semibold text-brand-primary bg-brand-accent/30">Dashboard</a>
            <a href="enrollment.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Enrollment</a>
            <a href="grades.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Grades</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
            <a href="requests.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Requests</a>
            <a href="profile.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Profile</a>
            <a href="notifications.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Notifications</a>
            <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold text-brand-dark">John Doe</p>
                    <p class="text-xs text-gray-500">2026-00001</p>
                </div>
                <a href="logout.php" class="text-xs text-red-600 font-semibold hover:underline">Log Out</a>
            </div>
        </div>
    </header>

    <!-- Main Content Container -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">

        <!-- Student Profile Header Banner -->
        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="space-y-1">
                <div class="flex items-center space-x-2">
                    <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Welcome back, <span id="header_student_firstname">John</span>!</h1>
                </div>
                <p class="text-sm text-gray-500">Here is your academic overview for the current academic term.</p>
            </div>

            <!-- Metadata Cards -->
            <div class="flex flex-wrap items-center gap-3 text-xs">
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2">
                    <span class="text-gray-400 uppercase font-bold tracking-wider text-[10px] block">Student No.</span>
                    <span id="card_student_no" class="font-bold text-brand-dark">2026-00001</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2">
                    <span class="text-gray-400 uppercase font-bold tracking-wider text-[10px] block">Program</span>
                    <span id="card_program_code" class="font-bold text-brand-dark">BS Computer Science</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2">
                    <span class="text-gray-400 uppercase font-bold tracking-wider text-[10px] block">Year Level</span>
                    <span id="card_year_level" class="font-bold text-brand-dark">3rd Year</span>
                </div>
            </div>
        </section>

        <!-- Status Overview Grid (Key Metrics) -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

            <!-- Enrollment Status -->
            <div class="bg-white border border-gray-200 rounded-md p-5 shadow-xs flex flex-col justify-between space-y-3">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Enrollment Status</span>
                </div>
                <div>
                    <span id="status_badge_enrollment" class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-emerald-100 text-emerald-800">
                        Enrolled
                    </span>
                    <p id="status_sub_enrollment" class="text-xs text-gray-400 mt-2">Term: 1st Sem 2026-2027</p>
                </div>
            </div>

            <!-- Clearance Status -->
            <div class="bg-white border border-gray-200 rounded-md p-5 shadow-xs flex flex-col justify-between space-y-3">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Clearance Status</span>
                </div>
                <div>
                    <span id="status_badge_clearance" class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-amber-100 text-amber-800">
                        In Progress
                    </span>
                    <p id="status_sub_clearance" class="text-xs text-gray-400 mt-2">2 of 3 Offices Approved</p>
                </div>
            </div>

            <!-- Payment Status -->
            <div class="bg-white border border-gray-200 rounded-md p-5 shadow-xs flex flex-col justify-between space-y-3">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Payment Status</span>
                </div>
                <div>
                    <span id="status_badge_payment" class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-emerald-100 text-emerald-800">
                        Paid
                    </span>
                    <p id="status_sub_payment" class="text-xs text-gray-400 mt-2">No balance outstanding</p>
                </div>
            </div>

            <!-- Pending Requests -->
            <div class="bg-white border border-gray-200 rounded-md p-5 shadow-xs flex flex-col justify-between space-y-3">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Active Requests</span>
                </div>
                <div>
                    <p id="status_count_requests" class="text-xl font-bold text-brand-dark">1 Active</p>
                    <p id="status_sub_requests" class="text-xs text-gray-400 mt-1">1 Document Request</p>
                </div>
            </div>

        </section>

        <!-- Main Dashboard Split Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Left Column: Recent Grades & Pending Requests (2 Columns on Desktop) -->
            <div class="lg:col-span-2 space-y-8">

                <!-- Recent Grades Card -->
                <div class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
                    <div class="p-5 border-b border-gray-100 flex items-center justify-between">
                        <div>
                            <h2 class="text-base font-bold text-brand-dark">Recent Grades Released</h2>
                            <p class="text-xs text-gray-500">1st Semester, Academic Year 2026-2027</p>
                        </div>
                        <a href="grades.php" class="text-xs font-semibold text-brand-secondary hover:text-brand-primary transition-colors">View All Grades →</a>
                    </div>

                    <!-- Responsive Table -->
                    <div class="overflow-x-auto">
                        <table id="table_recent_grades" class="w-full text-left text-xs border-collapse">
                            <thead>
                                <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase tracking-wider font-semibold">
                                    <th class="py-3 px-5">Code</th>
                                    <th class="py-3 px-5">Subject Title</th>
                                    <th class="py-3 px-5 text-center">Units</th>
                                    <th class="py-3 px-5 text-center">Grade</th>
                                    <th class="py-3 px-5 text-right">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-gray-700 font-medium">
                                <tr class="hover:bg-gray-50/50 transition-colors">
                                    <td class="py-3.5 px-5 font-bold text-brand-dark">CCS109</td>
                                    <td class="py-3.5 px-5">System Analysis & Design</td>
                                    <td class="py-3.5 px-5 text-center">3.0</td>
                                    <td class="py-3.5 px-5 text-center font-bold text-brand-dark">1.25</td>
                                    <td class="py-3.5 px-5 text-right">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Passed</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50/50 transition-colors">
                                    <td class="py-3.5 px-5 font-bold text-brand-dark">CC106</td>
                                    <td class="py-3.5 px-5">Applications Development & Emerging Tech</td>
                                    <td class="py-3.5 px-5 text-center">3.0</td>
                                    <td class="py-3.5 px-5 text-center font-bold text-brand-dark">1.50</td>
                                    <td class="py-3.5 px-5 text-right">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Passed</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50/50 transition-colors">
                                    <td class="py-3.5 px-5 font-bold text-brand-dark">MATH101</td>
                                    <td class="py-3.5 px-5">Calculus I</td>
                                    <td class="py-3.5 px-5 text-center">3.0</td>
                                    <td class="py-3.5 px-5 text-center font-bold text-brand-dark">1.75</td>
                                    <td class="py-3.5 px-5 text-right">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Passed</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Active Document Requests -->
                <div class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
                    <div class="p-5 border-b border-gray-100 flex items-center justify-between">
                        <div>
                            <h2 class="text-base font-bold text-brand-dark">Document Request Tracker</h2>
                            <p class="text-xs text-gray-500">Track current application and pickup status</p>
                        </div>
                        <a href="requests.php" class="text-xs font-semibold text-brand-secondary hover:text-brand-primary transition-colors">New Request +</a>
                    </div>

                    <!-- Responsive Table -->
                    <div class="overflow-x-auto">
                        <table id="table_recent_requests" class="w-full text-left text-xs border-collapse">
                            <thead>
                                <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase tracking-wider font-semibold">
                                    <th class="py-3 px-5">Request No.</th>
                                    <th class="py-3 px-5">Document</th>
                                    <th class="py-3 px-5">Fee</th>
                                    <th class="py-3 px-5">Payment</th>
                                    <th class="py-3 px-5 text-right">Stage</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-gray-700 font-medium">
                                <tr class="hover:bg-gray-50/50 transition-colors">
                                    <td class="py-3.5 px-5 font-bold text-brand-dark">DR-2026-0001</td>
                                    <td class="py-3.5 px-5">Certificate of Enrollment</td>
                                    <td class="py-3.5 px-5">₱150.00</td>
                                    <td class="py-3.5 px-5">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Paid</span>
                                    </td>
                                    <td class="py-3.5 px-5 text-right">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-teal-100 text-teal-800">Ready for Release</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!-- Right Column: Announcements & Live System Alerts -->
            <div class="space-y-8">

                <!-- Campus Announcements -->
                <div class="bg-white border border-gray-200 rounded-md shadow-xs p-5 space-y-4">
                    <div class="flex items-center justify-between border-b border-gray-100 pb-3">
                        <h2 class="text-base font-bold text-brand-dark flex items-center gap-2">
                            <span>
                                <svg class="lucide lucide-megaphone preview-icon size-5" xmlns="http://www.w3.org/2000/svg" width="0" height="0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M11 6a13 13 0 0 0 8.4-2.8A1 1 0 0 1 21 4v12a1 1 0 0 1-1.6.8A13 13 0 0 0 11 14H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z" />
                                    <path d="M6 14a12 12 0 0 0 2.4 7.2 2 2 0 0 0 3.2-2.4A8 8 0 0 1 10 14" />
                                    <path d="M8 6v8" />
                                </svg>
                            </span> Announcements
                        </h2>
                    </div>

                    <div id="container_announcements" class="space-y-4">

                        <!-- Announcement Item -->
                        <div class="bg-gray-50 border border-gray-200 rounded-md p-4 space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="text-[10px] uppercase font-bold text-brand-secondary bg-brand-accent/30 px-2 py-0.5 rounded-md">Registrar</span>
                                <span class="text-[10px] text-gray-400">Oct 01, 2026</span>
                            </div>
                            <h3 class="text-sm font-bold text-brand-dark">Midterm Exam Schedule Posted</h3>
                            <p class="text-xs text-gray-600 leading-relaxed">
                                Midterm examinations for the 1st Semester will officially begin next week. Please check your clearance status before exams.
                            </p>
                        </div>

                        <!-- Announcement Item -->
                        <div class="bg-gray-50 border border-gray-200 rounded-md p-4 space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="text-[10px] uppercase font-bold text-brand-primary bg-brand-accent/30 px-2 py-0.5 rounded-md">Admin</span>
                                <span class="text-[10px] text-gray-400">Sep 28, 2026</span>
                            </div>
                            <h3 class="text-sm font-bold text-brand-dark">Campus System Maintenance</h3>
                            <p class="text-xs text-gray-600 leading-relaxed">
                                The Student Information System will undergo scheduled maintenance this Sunday from 12:00 AM to 4:00 AM.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Live Notifications Feed -->
                <div class="bg-white border border-gray-200 rounded-md shadow-xs p-5 space-y-4">
                    <div class="flex items-center justify-between border-b border-gray-100 pb-3">
                        <h2 class="text-base font-bold text-brand-dark flex items-center gap-2">
                            <span>
                                <svg class="lucide lucide-bell preview-icon size-5" xmlns="http://www.w3.org/2000/svg" width="0" height="0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10.268 21a2 2 0 0 0 3.464 0" />
                                    <path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326" />
                                </svg>
                            </span> Recent Updates
                        </h2>
                        <a href="notifications.php" class="text-xs font-semibold text-brand-secondary hover:text-brand-primary transition-colors">View All</a>
                    </div>

                    <div id="container_notifications" class="space-y-3">

                        <!-- Notification Item -->
                        <div class="flex items-start space-x-3 p-2.5 rounded-md hover:bg-gray-50 transition-colors border-l-2 border-blue-500 bg-blue-50/30">
                            <div class="shrink-0 mt-0.5">
                                <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                            </div>
                            <div class="space-y-0.5 flex-1">
                                <p class="text-xs font-medium text-brand-dark">Document Request <span class="font-bold">#DR-2026-0001</span> is now Ready for Release at Registrar Office.</p>
                                <p class="text-[10px] text-gray-400">2 hours ago</p>
                            </div>
                        </div>

                        <!-- Notification Item -->
                        <div class="flex items-start space-x-3 p-2.5 rounded-md hover:bg-gray-50 transition-colors border-l-2 border-emerald-500 bg-emerald-50/30">
                            <div class="shrink-0 mt-0.5">
                                <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                            </div>
                            <div class="space-y-0.5 flex-1">
                                <p class="text-xs font-medium text-brand-dark">Cashier Office approved your clearance item.</p>
                                <p class="text-[10px] text-gray-400">1 day ago</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </main>

    <!-- Formal Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12 py-6 text-center text-xs text-gray-500">
        <div class="max-w-7xl mx-auto px-4">
            <p>Paxton University Student Services Information System (SSIS) &copy; 2026. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Interactive Scripts -->
    <script>
        $(document).ready(function() {
            // Mobile navigation toggle
            $('#mobile_menu_btn').on('click', function() {
                $('#mobile_menu').toggleClass('hidden');
            });
        });
    </script>
</body>

</html>