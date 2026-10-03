<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Enrolment Management</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

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

                <!-- Desktop Navigation Links (Updated Registrar Navigation Pages) -->
                <nav class="hidden lg:flex items-center space-x-1 text-xs">
                    <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Enrollment</a>
                    <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-medium text-brand-primary">Grades</a>
                    <a href="studentRecords.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-gray-600 hover:bg-gray-50 bg-brand-accent/30">Student Records</a>
                    <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
                    <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
                    <a href="announcements.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Announcements</a>
                    <a href="reports.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Reports</a>
                </nav>

                <!-- Action Controls -->
                <div class="flex items-center space-x-3">

                    <!-- Notification Bell -->
                    <a href="notifications.php" id="nav_notification_link" class="relative p-2 text-gray-500 hover:text-brand-primary rounded-md hover:bg-gray-100 transition-colors" title="Notifications">
                        <i data-lucide="bell" class="w-5 h-5"></i>
                        <span id="nav_unread_count" class="absolute top-1 right-1 inline-flex items-center justify-center px-1.5 py-0.5 text-[10px] font-bold leading-none text-white bg-red-600 rounded-full">3</span>
                    </a>

                    <div class="h-5 w-px bg-gray-200 hidden lg:block"></div>

                    <!-- User Info / Profile -->
                    <div class="hidden lg:flex items-center space-x-2">
                        <div class="text-right">
                            <p id="nav_staff_name" class="text-xs font-semibold text-brand-dark">Registrar Staff</p>
                            <p id="nav_staff_role" class="text-[10px] text-gray-500 uppercase font-bold tracking-wider">Registrar Module</p>
                        </div>
                        <a href="logout.php" id="nav_logout_btn" class="p-2 text-gray-400 hover:text-red-600 rounded-md hover:bg-gray-100 transition-colors" title="Log Out">
                            <i data-lucide="log-out" class="w-5 h-5"></i>
                        </a>
                    </div>

                    <!-- Mobile/Tablet Menu Button -->
                    <button id="mobile_menu_btn" type="button" class="lg:hidden p-2 rounded-md text-gray-600 hover:text-brand-primary hover:bg-gray-100 focus:outline-none">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile & Tablet Menu Dropdown (Updated Registrar Navigation Pages) -->
        <div id="mobile_menu" class="hidden lg:hidden border-t border-gray-200 bg-white px-4 pt-2 pb-4 space-y-1">
            <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Enrollment</a>
            <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Grades</a>
            <a href="studentRecords.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Student Records</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
            <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
            <a href="announcements.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Announcements</a>
            <a href="reports.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Reports</a>
            <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold text-brand-dark">Registrar Staff</p>
                    <p class="text-xs text-gray-500">Registrar Module</p>
                </div>
                <a href="logout.php" class="text-xs text-red-600 font-semibold hover:underline">Log Out</a>
            </div>
        </div>
    </header>

    <!-- Main Content Container -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">

        <!-- System Response / Alert Message Banner -->
        <div id="container_alert_message" class="hidden rounded-md p-4 text-xs font-medium border flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <i id="alert_icon" class="w-4 h-4 shrink-0"></i>
                <span id="alert_text"></span>
            </div>
            <button type="button" id="btn_dismiss_alert" class="text-gray-400 hover:text-gray-600">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>

        <!-- Page Header Banner -->
        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="space-y-1">
                <div class="flex items-center space-x-2">
                    <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Enrolment Requests Queue</h1>
                    <span class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-amber-100 text-amber-800">1st Sem AY 2026-2027</span>
                </div>
                <p class="text-sm text-gray-500">Review student enrollment applications, modify subject loads, and manage status transitions.</p>
            </div>

            <div class="flex items-center space-x-3">
                <div class="bg-gray-50 border border-gray-200 rounded-md px-4 py-2 text-right">
                    <span class="text-[10px] uppercase font-bold text-gray-400 block tracking-wider">Pending Applications</span>
                    <span class="text-lg font-bold text-brand-primary" id="txt_pending_count">3 Requests</span>
                </div>
            </div>
        </section>

        <!-- Queue Filters & Table Container -->
        <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">

            <!-- Filter Bar Header -->
            <div class="p-5 border-b border-gray-100 space-y-4">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h2 class="text-base font-bold text-brand-dark">Application Queue</h2>
                        <p class="text-xs text-gray-500">Select an enrollment request to review course offerings, adjust subjects, or update status</p>
                    </div>

                    <!-- Search Box -->
                    <div class="relative min-w-[260px]">
                        <i data-lucide="search" class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="text" id="input_search_queue" placeholder="Search by App ID, Student No, or Name..." class="w-full pl-9 pr-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary">
                    </div>
                </div>

                <!-- Filters Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2">
                    <div>
                        <label for="filter_queue_status" class="block text-[10px] font-bold uppercase tracking-wider text-gray-500 mb-1">Queue Status</label>
                        <select id="filter_queue_status" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary bg-white">
                            <option value="">All Statuses</option>
                            <option value="Submitted">Submitted (New)</option>
                            <option value="Under Review">Under Review</option>
                            <option value="Approved">Approved</option>
                            <option value="Confirmed Enrolled">Confirmed Enrolled</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                    <div>
                        <label for="filter_queue_program" class="block text-[10px] font-bold uppercase tracking-wider text-gray-500 mb-1">Program</label>
                        <select id="filter_queue_program" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary bg-white">
                            <option value="">All Programs</option>
                            <option value="BSCS">BS Computer Science</option>
                            <option value="BSIT">BS Information Technology</option>
                            <option value="BSIS">BS Information Systems</option>
                        </select>
                    </div>
                    <div>
                        <label for="filter_queue_year" class="block text-[10px] font-bold uppercase tracking-wider text-gray-500 mb-1">Year Level</label>
                        <select id="filter_queue_year" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary bg-white">
                            <option value="">All Year Levels</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Queue Table -->
            <div class="overflow-x-auto">
                <table id="table_enrollment_queue" class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase tracking-wider font-semibold">
                            <th class="py-3 px-5">App Ref #</th>
                            <th class="py-3 px-5">Student Info</th>
                            <th class="py-3 px-5">Program & Year</th>
                            <th class="py-3 px-5 text-center">Total Units</th>
                            <th class="py-3 px-5">Submission Date</th>
                            <th class="py-3 px-5 text-center">Status</th>
                            <th class="py-3 px-5 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_enrollment_queue" class="divide-y divide-gray-100 text-gray-700 font-medium">

                        <!-- Request Row 1: Submitted -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-display font-bold text-brand-dark">ENR-2026-0101</td>
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-bold text-brand-dark">John Doe</p>
                                <p class="text-gray-400 text-[11px] font-display">2026-00001</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-medium text-brand-dark">BS Computer Science</p>
                                <p class="text-gray-400 text-[11px]">3rd Year</p>
                            </td>
                            <td class="py-3.5 px-5 text-center font-semibold">21 Units</td>
                            <td class="py-3.5 px-5 text-gray-500">Oct 01, 2026 - 09:15 AM</td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-sky-100 text-sky-800">
                                    Submitted
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" onclick="openReviewModal(1)" class="inline-flex items-center space-x-1 px-3 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90 transition-colors shadow-xs">
                                    <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
                                    <span>Review Request</span>
                                </button>
                            </td>
                        </tr>

                        <!-- Request Row 2: Under Review -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-display font-bold text-brand-dark">ENR-2026-0102</td>
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-bold text-brand-dark">Jane Smith</p>
                                <p class="text-gray-400 text-[11px] font-display">2026-00002</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-medium text-brand-dark">BS Information Technology</p>
                                <p class="text-gray-400 text-[11px]">2nd Year</p>
                            </td>
                            <td class="py-3.5 px-5 text-center font-semibold">18 Units</td>
                            <td class="py-3.5 px-5 text-gray-500">Oct 01, 2026 - 10:30 AM</td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-amber-100 text-amber-800">
                                    Under Review
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" onclick="openReviewModal(2)" class="inline-flex items-center space-x-1 px-3 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90 transition-colors shadow-xs">
                                    <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
                                    <span>Review Request</span>
                                </button>
                            </td>
                        </tr>

                        <!-- Request Row 3: Approved -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-display font-bold text-brand-dark">ENR-2026-0103</td>
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-bold text-brand-dark">Alex Mercer</p>
                                <p class="text-gray-400 text-[11px] font-display">2026-00003</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-medium text-brand-dark">BS Information Systems</p>
                                <p class="text-gray-400 text-[11px]">1st Year</p>
                            </td>
                            <td class="py-3.5 px-5 text-center font-semibold">24 Units</td>
                            <td class="py-3.5 px-5 text-gray-500">Sep 30, 2026 - 02:45 PM</td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-blue-100 text-blue-800">
                                    Approved
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" onclick="openReviewModal(3)" class="inline-flex items-center space-x-1 px-3 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90 transition-colors shadow-xs">
                                    <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
                                    <span>Review Request</span>
                                </button>
                            </td>
                        </tr>

                        <!-- Request Row 4: Confirmed Enrolled -->
                        <tr class="hover:bg-gray-50/50 transition-colors bg-gray-50/30">
                            <td class="py-3.5 px-5 font-display font-bold text-brand-dark">ENR-2026-0098</td>
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-bold text-brand-dark">Samantha Vance</p>
                                <p class="text-gray-400 text-[11px] font-display">2026-00010</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-medium text-brand-dark">BS Computer Science</p>
                                <p class="text-gray-400 text-[11px]">4th Year</p>
                            </td>
                            <td class="py-3.5 px-5 text-center font-semibold">15 Units</td>
                            <td class="py-3.5 px-5 text-gray-500">Sep 28, 2026 - 11:20 AM</td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">
                                    Confirmed Enrolled
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" onclick="openReviewModal(4)" class="inline-flex items-center space-x-1 px-3 py-1.5 rounded-md text-xs font-semibold border border-gray-200 text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                    <i data-lucide="eye" class="w-3.5 h-3.5"></i>
                                    <span>View Record</span>
                                </button>
                            </td>
                        </tr>

                        <!-- Request Row 5: Rejected -->
                        <tr class="hover:bg-gray-50/50 transition-colors bg-gray-50/30">
                            <td class="py-3.5 px-5 font-display font-bold text-brand-dark">ENR-2026-0095</td>
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-bold text-brand-dark">Michael Corleone</p>
                                <p class="text-gray-400 text-[11px] font-display">2026-00014</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-medium text-brand-dark">BS Information Technology</p>
                                <p class="text-gray-400 text-[11px]">2nd Year</p>
                            </td>
                            <td class="py-3.5 px-5 text-center font-semibold">18 Units</td>
                            <td class="py-3.5 px-5 text-gray-500">Sep 27, 2026 - 04:10 PM</td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-red-100 text-red-800">
                                    Rejected
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" onclick="openReviewModal(5)" class="inline-flex items-center space-x-1 px-3 py-1.5 rounded-md text-xs font-semibold border border-gray-200 text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                    <i data-lucide="eye" class="w-3.5 h-3.5"></i>
                                    <span>View Record</span>
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Table Footer -->
            <div class="p-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-gray-500">
                <p>Showing <span class="font-bold text-brand-dark">1</span> to <span class="font-bold text-brand-dark">5</span> of <span class="font-bold text-brand-dark">5</span> enrollment applications</p>
                <div class="flex items-center space-x-2">
                    <button type="button" disabled class="px-3 py-1.5 rounded-md border border-gray-200 bg-gray-50 text-gray-400 cursor-not-allowed">Previous</button>
                    <button type="button" disabled class="px-3 py-1.5 rounded-md border border-gray-200 bg-gray-50 text-gray-400 cursor-not-allowed">Next</button>
                </div>
            </div>
        </section>

    </main>

    <!-- Comprehensive Review & Modify Subject Modal -->
    <div id="modal_review_enrollment" class="fixed inset-0 z-50 hidden bg-gray-900/50 backdrop-blur-xs flex items-center justify-center p-4 overflow-y-auto">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-4xl my-8 overflow-hidden flex flex-col max-h-[90vh]">

            <!-- Modal Header -->
            <div class="p-5 border-b border-gray-200 bg-gray-50/50 flex items-center justify-between shrink-0">
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 bg-brand-primary/10 rounded-md flex items-center justify-center text-brand-primary">
                        <i data-lucide="file-text" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <div class="flex items-center space-x-2">
                            <h3 id="modal_app_ref" class="text-base font-bold text-brand-dark">ENR-2026-0101</h3>
                            <span id="modal_app_status_badge" class="px-2 py-0.5 rounded-md text-[10px] font-bold bg-sky-100 text-sky-800">Submitted</span>
                        </div>
                        <p class="text-xs text-gray-500">Enrolment Application Review & Subject Load Adjustment</p>
                    </div>
                </div>
                <button type="button" id="btn_close_review_modal" class="text-gray-400 hover:text-gray-600 p-1">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <!-- Modal Content (Scrollable Body) -->
            <div class="p-6 overflow-y-auto space-y-6 text-xs flex-1">

                <!-- Student Overview Info Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 p-4 bg-brand-accent/15 border border-brand-secondary/20 rounded-md">
                    <div>
                        <p class="text-[10px] uppercase font-bold text-gray-500 tracking-wider">Student Name</p>
                        <p id="modal_student_name" class="font-bold text-brand-dark text-sm mt-0.5">John Doe</p>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase font-bold text-gray-500 tracking-wider">Student ID</p>
                        <p id="modal_student_no" class="font-display font-bold text-brand-dark mt-0.5">2026-00001</p>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase font-bold text-gray-500 tracking-wider">Program & Level</p>
                        <p id="modal_student_program" class="font-medium text-brand-dark mt-0.5">BS Computer Science (3rd Year)</p>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase font-bold text-gray-500 tracking-wider">Academic Term</p>
                        <p class="font-medium text-brand-dark mt-0.5">1st Sem, AY 2026-2027</p>
                    </div>
                </div>

                <!-- Subject Adjustment Section Header -->
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-sm font-bold text-brand-dark">Requested Subject Load</h4>
                            <p class="text-[11px] text-gray-500">Review or adjust the student's registered subjects before updating status.</p>
                        </div>
                        <button type="button" id="btn_add_subject_row" class="inline-flex items-center space-x-1.5 px-3 py-1.5 rounded-md text-xs font-semibold bg-gray-100 text-brand-dark hover:bg-gray-200 transition-colors">
                            <i data-lucide="plus" class="w-3.5 h-3.5"></i>
                            <span>Add Subject</span>
                        </button>
                    </div>

                    <!-- Subjects Table -->
                    <div class="border border-gray-200 rounded-md overflow-hidden">
                        <table class="w-full text-left text-xs border-collapse">
                            <thead>
                                <tr class="bg-gray-50 border-b border-gray-200 text-gray-500 font-semibold uppercase tracking-wider">
                                    <th class="py-2.5 px-4">Code</th>
                                    <th class="py-2.5 px-4">Subject Description</th>
                                    <th class="py-2.5 px-4">Section</th>
                                    <th class="py-2.5 px-4 text-center">Units</th>
                                    <th class="py-2.5 px-4 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbody_requested_subjects" class="divide-y divide-gray-100">
                                <tr>
                                    <td class="py-2.5 px-4 font-bold font-display">CS 311</td>
                                    <td class="py-2.5 px-4">Algorithms and Complexity</td>
                                    <td class="py-2.5 px-4">BSCS 3-A</td>
                                    <td class="py-2.5 px-4 text-center font-semibold text-subject-units">3</td>
                                    <td class="py-2.5 px-4 text-right">
                                        <button type="button" onclick="removeSubjectRow(this)" class="p-1 text-gray-400 hover:text-red-600 transition-colors" title="Remove Subject">
                                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2.5 px-4 font-bold font-display">CS 312</td>
                                    <td class="py-2.5 px-4">Software Engineering 1</td>
                                    <td class="py-2.5 px-4">BSCS 3-A</td>
                                    <td class="py-2.5 px-4 text-center font-semibold text-subject-units">3</td>
                                    <td class="py-2.5 px-4 text-right">
                                        <button type="button" onclick="removeSubjectRow(this)" class="p-1 text-gray-400 hover:text-red-600 transition-colors" title="Remove Subject">
                                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2.5 px-4 font-bold font-display">CS 313</td>
                                    <td class="py-2.5 px-4">Web Development & Frameworks</td>
                                    <td class="py-2.5 px-4">BSCS 3-B</td>
                                    <td class="py-2.5 px-4 text-center font-semibold text-subject-units">3</td>
                                    <td class="py-2.5 px-4 text-right">
                                        <button type="button" onclick="removeSubjectRow(this)" class="p-1 text-gray-400 hover:text-red-600 transition-colors" title="Remove Subject">
                                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="bg-gray-50/80 font-bold border-t border-gray-200">
                                    <td colspan="3" class="py-2.5 px-4 text-right uppercase text-[10px] tracking-wider text-gray-500">Calculated Total Load:</td>
                                    <td class="py-2.5 px-4 text-center font-bold text-brand-primary text-xs" id="txt_modal_total_units">9 Units</td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <!-- Rejection Reason Textarea Container (Hidden by default, shown when Reject requested) -->
                <div id="container_reject_reason" class="hidden space-y-1 bg-red-50 p-4 border border-red-200 rounded-md">
                    <label for="input_reject_reason" class="block font-bold text-red-800 text-xs">
                        Rejection Reason <span class="text-red-600">* Required for Rejection</span>
                    </label>
                    <textarea id="input_reject_reason" rows="3" placeholder="Provide specific reasons for rejecting this enrollment application (e.g., Unmet prerequisites, unpaid balance clearance, conflicting schedules)..." class="w-full p-2.5 text-xs border border-red-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500 bg-white"></textarea>
                </div>

            </div>

            <!-- Modal Action Footer (4 Explicit Status Actions Required by Spec) -->
            <div class="p-5 border-t border-gray-200 bg-gray-50/50 flex flex-wrap items-center justify-between gap-3 shrink-0">
                <button type="button" id="btn_cancel_review" class="px-4 py-2 rounded-md font-semibold text-gray-600 hover:bg-gray-200/60 transition-colors">Close</button>

                <div class="flex flex-wrap items-center gap-2">
                    <!-- Action 1: Mark Under Review -->
                    <button type="button" id="btn_status_under_review" onclick="updateEnrollmentStatus('Under Review')" class="px-3.5 py-2 rounded-md font-semibold text-xs bg-amber-100 text-amber-800 hover:bg-amber-200 transition-colors border border-amber-300">
                        Mark Under Review
                    </button>

                    <!-- Action 2: Approve -->
                    <button type="button" id="btn_status_approve" onclick="updateEnrollmentStatus('Approved')" class="px-3.5 py-2 rounded-md font-semibold text-xs bg-blue-600 text-white hover:bg-blue-700 transition-colors shadow-xs">
                        Approve Application
                    </button>

                    <!-- Action 3: Confirm Enrolled -->
                    <button type="button" id="btn_status_confirm" onclick="updateEnrollmentStatus('Confirmed Enrolled')" class="px-3.5 py-2 rounded-md font-semibold text-xs bg-brand-primary text-white hover:bg-brand-primary/90 transition-colors shadow-xs">
                        Confirm Enrolled
                    </button>

                    <!-- Action 4: Reject -->
                    <button type="button" id="btn_status_reject" onclick="handleRejectAction()" class="px-3.5 py-2 rounded-md font-semibold text-xs bg-red-600 text-white hover:bg-red-700 transition-colors shadow-xs">
                        Reject Request
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Quick Add Subject Modal Sub-Dialog -->
    <div id="modal_add_subject_dialog" class="fixed inset-0 z-50 hidden bg-gray-900/40 backdrop-blur-xs flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-md p-5 space-y-4">
            <div class="flex items-center justify-between border-b border-gray-100 pb-3">
                <h4 class="text-sm font-bold text-brand-dark">Add Subject to Student Load</h4>
                <button type="button" id="btn_close_add_subject_dialog" class="text-gray-400 hover:text-gray-600">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            </div>

            <form id="form_add_subject_item" class="space-y-3 text-xs">
                <div>
                    <label class="block font-semibold text-brand-dark mb-1">Select Available Subject</label>
                    <select id="select_new_subject" required class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary bg-white">
                        <option value="">-- Choose Subject --</option>
                        <option value="CS 314|Database Systems 2|BSCS 3-A|3">CS 314 - Database Systems 2 (3 Units)</option>
                        <option value="CS 315|Operating Systems|BSCS 3-B|3">CS 315 - Operating Systems (3 Units)</option>
                        <option value="GE 108|Ethics|GEN 1-A|3">GE 108 - Ethics (3 Units)</option>
                        <option value="PE 104|Physical Education 4|PE 2-C|2">PE 104 - Physical Education 4 (2 Units)</option>
                    </select>
                </div>

                <div class="pt-2 flex items-center justify-end space-x-2">
                    <button type="button" id="btn_cancel_add_subject" class="px-3 py-1.5 rounded-md font-semibold text-gray-600 hover:bg-gray-100">Cancel</button>
                    <button type="submit" class="px-3 py-1.5 rounded-md font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">Add to Load</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Formal Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12 py-6 text-center text-xs text-gray-500">
        <div class="max-w-7xl mx-auto px-4">
            <p>Paxton University Student Services Information System (SSIS) &copy; 2026. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Interactive Scripts & Event Logic -->
    <script>
        $(document).ready(function() {
            // Render Lucide Icons
            lucide.createIcons();

            // Mobile Navigation Toggle
            $('#mobile_menu_btn').on('click', function() {
                $('#mobile_menu').toggleClass('hidden');
            });

            // Dismiss Alert Banner
            $('#btn_dismiss_alert').on('click', function() {
                $('#container_alert_message').addClass('hidden');
            });

            // Modal Dismiss Actions
            $('#btn_close_review_modal, #btn_cancel_review').on('click', function() {
                $('#modal_review_enrollment').addClass('hidden');
            });

            // Quick Add Subject Dialog Toggles
            $('#btn_add_subject_row').on('click', function() {
                $('#modal_add_subject_dialog').removeClass('hidden');
            });
            $('#btn_close_add_subject_dialog, #btn_cancel_add_subject').on('click', function() {
                $('#modal_add_subject_dialog').addClass('hidden');
            });

            // Form Submit: Add Subject Row to Table
            $('#form_add_subject_item').on('submit', function(e) {
                e.preventDefault();
                const rawVal = $('#select_new_subject').val();
                if (!rawVal) return;

                const [code, name, sec, units] = rawVal.split('|');

                const newRowHtml = `
                    <tr>
                        <td class="py-2.5 px-4 font-bold font-display">${code}</td>
                        <td class="py-2.5 px-4">${name}</td>
                        <td class="py-2.5 px-4">${sec}</td>
                        <td class="py-2.5 px-4 text-center font-semibold text-subject-units">${units}</td>
                        <td class="py-2.5 px-4 text-right">
                            <button type="button" onclick="removeSubjectRow(this)" class="p-1 text-gray-400 hover:text-red-600 transition-colors" title="Remove Subject">
                                <i data-lucide="trash-2" class="w-4 h-4"></i>
                            </button>
                        </td>
                    </tr>
                `;

                $('#tbody_requested_subjects').append(newRowHtml);
                lucide.createIcons();
                recalculateTotalUnits();

                $('#modal_add_subject_dialog').addClass('hidden');
                $('#form_add_subject_item')[0].reset();
            });
        });

        // Open Review Modal with Dynamic Request Details
        function openReviewModal(appId) {
            $('#container_reject_reason').addClass('hidden');
            $('#input_reject_reason').val('');

            if (appId === 1) {
                $('#modal_app_ref').text('ENR-2026-0101');
                $('#modal_student_name').text('John Doe');
                $('#modal_student_no').text('2026-00001');
                $('#modal_student_program').text('BS Computer Science (3rd Year)');
                $('#modal_app_status_badge').text('Submitted').className = 'px-2 py-0.5 rounded-md text-[10px] font-bold bg-sky-100 text-sky-800';
            } else if (appId === 2) {
                $('#modal_app_ref').text('ENR-2026-0102');
                $('#modal_student_name').text('Jane Smith');
                $('#modal_student_no').text('2026-00002');
                $('#modal_student_program').text('BS Information Technology (2nd Year)');
                $('#modal_app_status_badge').text('Under Review').className = 'px-2 py-0.5 rounded-md text-[10px] font-bold bg-amber-100 text-amber-800';
            }

            recalculateTotalUnits();
            $('#modal_review_enrollment').removeClass('hidden');
        }

        // Remove Subject Row
        function removeSubjectRow(buttonEl) {
            $(buttonEl).closest('tr').remove();
            recalculateTotalUnits();
        }

        // Recalculate Units
        function recalculateTotalUnits() {
            let total = 0;
            $('#tbody_requested_subjects .text-subject-units').each(function() {
                total += parseInt($(this).text());
            });
            $('#txt_modal_total_units').text(`${total} Units`);
        }

        // Trigger Rejection Field Validation
        function handleRejectAction() {
            const $rejectBox = $('#container_reject_reason');
            const reason = $('#input_reject_reason').val().trim();

            if ($rejectBox.hasClass('hidden')) {
                $rejectBox.removeClass('hidden');
                $('#input_reject_reason').focus();
            } else {
                if (!reason) {
                    alert('Please specify a rejection reason before rejecting this enrollment request.');
                    $('#input_reject_reason').focus();
                    return;
                }
                updateEnrollmentStatus('Rejected');
            }
        }

        // Update Enrollment Status State
        function updateEnrollmentStatus(newStatus) {
            const appRef = $('#modal_app_ref').text();

            $('#modal_review_enrollment').addClass('hidden');

            if (newStatus === 'Rejected') {
                showAlert('error', `Enrollment Application ${appRef} has been Rejected.`);
            } else {
                showAlert('success', `Enrollment Application ${appRef} status updated to "${newStatus}".`);
            }
        }

        // System Alert Banner Display
        function showAlert(type, message) {
            const $banner = $('#container_alert_message');
            const $text = $('#alert_text');

            $banner.removeClass('hidden bg-emerald-50 border-emerald-200 text-emerald-800 bg-red-50 border-red-200 text-red-800');

            if (type === 'success') {
                $banner.addClass('bg-emerald-50 border-emerald-200 text-emerald-800');
                $('#alert_icon').replaceWith('<i id="alert_icon" data-lucide="check-circle-2" class="w-4 h-4 shrink-0"></i>');
            } else {
                $banner.addClass('bg-red-50 border-red-200 text-red-800');
                $('#alert_icon').replaceWith('<i id="alert_icon" data-lucide="alert-circle" class="w-4 h-4 shrink-0"></i>');
            }

            $text.text(message);
            lucide.createIcons();
            $banner.removeClass('hidden');
        }
    </script>
</body>

</html>