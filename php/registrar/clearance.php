<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Clearance Management</title>

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
                    <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Grades</a>
                    <a href="studentRecords.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Student Records</a>
                    <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Clearance</a>
                    <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
                    <a href="announcements.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Announcements</a>
                    <a href="reports.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Reports</a>
                </nav>

                <!-- Action Controls -->
                <div class="flex items-center space-x-3">

                    <!-- Notification Bell -->
                    <a href="notifications.php" id="nav_notification_link" class="relative p-2 text-gray-500 hover:text-brand-primary rounded-md hover:bg-gray-100 transition-colors" title="Notifications">
                        <i data-lucide="bell" class="w-5 h-5"></i>
                        <span id="nav_unread_count" class="absolute top-1 right-1 inline-flex items-center justify-center px-1.5 py-0.5 text-[10px] font-bold leading-none text-white bg-red-600 rounded-full">2</span>
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
            <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Grades</a>
            <a href="studentRecords.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Student Records</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Clearance</a>
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
                    <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Clearance Management</h1>
                    <span class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-amber-100 text-amber-800">1st Sem AY 2026-2027</span>
                </div>
                <p class="text-sm text-gray-500">Review Registrar requirement submissions, approve or reject hold requests, and inspect overall cross-department clearance statuses.</p>
            </div>

            <div class="flex items-center space-x-3">
                <div class="bg-gray-50 border border-gray-200 rounded-md px-4 py-2 text-right">
                    <span class="text-[10px] uppercase font-bold text-gray-400 block tracking-wider">Registrar Requirements Pending</span>
                    <span class="text-lg font-bold text-brand-primary" id="txt_pending_count">2 Pending Review</span>
                </div>
            </div>
        </section>

        <!-- Clearance Queue & Inspection Table -->
        <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">

            <!-- Filter Bar Header -->
            <div class="p-5 border-b border-gray-100 space-y-4">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h2 class="text-base font-bold text-brand-dark">Student Clearance Requests</h2>
                        <p class="text-xs text-gray-500">Manage Registrar document compliance and inspect overall department clearance progress</p>
                    </div>

                    <!-- Search Box -->
                    <div class="relative min-w-[280px]">
                        <i data-lucide="search" class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="text" id="input_search_clearance" placeholder="Search by Student ID, Name, or Program..." class="w-full pl-9 pr-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary">
                    </div>
                </div>

                <!-- Filters Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2">
                    <div>
                        <label for="filter_registrar_req" class="block text-[10px] font-bold uppercase tracking-wider text-gray-500 mb-1">Registrar Req. Status</label>
                        <select id="filter_registrar_req" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary bg-white">
                            <option value="">All Requirements Statuses</option>
                            <option value="Pending">Pending Review</option>
                            <option value="Approved">Approved</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                    <div>
                        <label for="filter_overall_clearance" class="block text-[10px] font-bold uppercase tracking-wider text-gray-500 mb-1">Overall Clearance Status</label>
                        <select id="filter_overall_clearance" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary bg-white">
                            <option value="">All Overall Statuses</option>
                            <option value="Cleared">Fully Cleared</option>
                            <option value="Incomplete">Incomplete / Pending Hold</option>
                        </select>
                    </div>
                    <div>
                        <label for="filter_program" class="block text-[10px] font-bold uppercase tracking-wider text-gray-500 mb-1">Program</label>
                        <select id="filter_program" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary bg-white">
                            <option value="">All Programs</option>
                            <option value="BSCS">BS Computer Science</option>
                            <option value="BSIT">BS Information Technology</option>
                            <option value="BSIS">BS Information Systems</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table id="table_clearance_list" class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase tracking-wider font-semibold">
                            <th class="py-3 px-5">Student Info</th>
                            <th class="py-3 px-5">Program & Year</th>
                            <th class="py-3 px-5">Submitted Requirement</th>
                            <th class="py-3 px-5 text-center">Registrar Status</th>
                            <th class="py-3 px-5 text-center">Overall Clearance</th>
                            <th class="py-3 px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_clearance_list" class="divide-y divide-gray-100 text-gray-700 font-medium">

                        <!-- Row 1: Pending Registrar Review -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-bold text-brand-dark">John Doe</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00001</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-medium text-brand-dark">BS Computer Science</p>
                                <p class="text-gray-400 text-[11px]">3rd Year</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-semibold text-brand-dark">Form 137 / Official Transcript Copy</p>
                                <p class="text-gray-400 text-[11px]">Submitted: Oct 01, 2026</p>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-amber-100 text-amber-800">
                                    Pending Review
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-gray-100 text-gray-700">
                                    Incomplete (3/5 Cleared)
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1">
                                <button type="button" onclick="openReviewReqModal(1)" class="inline-flex items-center space-x-1 px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90 transition-colors shadow-xs">
                                    <span>Review Req.</span>
                                </button>
                                <button type="button" onclick="openOverallClearanceModal(1)" class="inline-flex items-center space-x-1 px-2.5 py-1.5 rounded-md text-xs font-semibold border border-gray-200 text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                    <span>Overall Status</span>
                                </button>
                            </td>
                        </tr>

                        <!-- Row 2: Pending Registrar Review -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-bold text-brand-dark">Jane Smith</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00002</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-medium text-brand-dark">BS Information Technology</p>
                                <p class="text-gray-400 text-[11px]">2nd Year</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-semibold text-brand-dark">Honorable Dismissal Certificate</p>
                                <p class="text-gray-400 text-[11px]">Submitted: Sep 30, 2026</p>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-amber-100 text-amber-800">
                                    Pending Review
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-gray-100 text-gray-700">
                                    Incomplete (4/5 Cleared)
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1">
                                <button type="button" onclick="openReviewReqModal(2)" class="inline-flex items-center space-x-1 px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90 transition-colors shadow-xs">
                                    <span>Review Req.</span>
                                </button>
                                <button type="button" onclick="openOverallClearanceModal(2)" class="inline-flex items-center space-x-1 px-2.5 py-1.5 rounded-md text-xs font-semibold border border-gray-200 text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                    <span>Overall Status</span>
                                </button>
                            </td>
                        </tr>

                        <!-- Row 3: Approved & Fully Cleared -->
                        <tr class="hover:bg-gray-50/50 transition-colors bg-emerald-50/10">
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-bold text-brand-dark">Alex Mercer</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00003</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-medium text-brand-dark">BS Information Systems</p>
                                <p class="text-gray-400 text-[11px]">1st Year</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-semibold text-brand-dark">PSA Birth Certificate & Good Moral</p>
                                <p class="text-gray-400 text-[11px]">Approved: Sep 28, 2026</p>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">
                                    Approved
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">
                                    Fully Cleared (5/5)
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1">
                                <button type="button" onclick="openReviewReqModal(3)" class="inline-flex items-center space-x-1 px-2.5 py-1.5 rounded-md text-xs font-semibold border border-gray-200 text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                    <span>View Req.</span>
                                </button>
                                <button type="button" onclick="openOverallClearanceModal(3)" class="inline-flex items-center space-x-1 px-2.5 py-1.5 rounded-md text-xs font-semibold border border-gray-200 text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                    <span>Overall Status</span>
                                </button>
                            </td>
                        </tr>

                        <!-- Row 4: Rejected Registrar Requirement -->
                        <tr class="hover:bg-gray-50/50 transition-colors bg-red-50/10">
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-bold text-brand-dark">Samantha Vance</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00010</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-medium text-brand-dark">BS Computer Science</p>
                                <p class="text-gray-400 text-[11px]">4th Year</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-semibold text-brand-dark">Original Transcript of Records</p>
                                <p class="text-gray-400 text-[11px]">Rejected: Sep 25, 2026</p>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-red-100 text-red-800">
                                    Rejected
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-gray-100 text-gray-700">
                                    Incomplete (4/5 Cleared)
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1">
                                <button type="button" onclick="openReviewReqModal(4)" class="inline-flex items-center space-x-1 px-2.5 py-1.5 rounded-md text-xs font-semibold border border-gray-200 text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                    <span>View Req.</span>
                                </button>
                                <button type="button" onclick="openOverallClearanceModal(4)" class="inline-flex items-center space-x-1 px-2.5 py-1.5 rounded-md text-xs font-semibold border border-gray-200 text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                    <span>Overall Status</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Table Footer -->
            <div class="p-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-gray-500">
                <p>Showing <span class="font-bold text-brand-dark">1</span> to <span class="font-bold text-brand-dark">4</span> of <span class="font-bold text-brand-dark">4</span> student records</p>
                <div class="flex items-center space-x-2">
                    <button type="button" disabled class="px-3 py-1.5 rounded-md border border-gray-200 bg-gray-50 text-gray-400 cursor-not-allowed">Previous</button>
                    <button type="button" disabled class="px-3 py-1.5 rounded-md border border-gray-200 bg-gray-50 text-gray-400 cursor-not-allowed">Next</button>
                </div>
            </div>
        </section>

    </main>

    <!-- Modal 1: Review Registrar Requirement (Approve or Reject with Reason) -->
    <div id="modal_review_requirement" class="fixed inset-0 z-50 hidden bg-gray-900/50 backdrop-blur-xs flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-2xl overflow-hidden space-y-0 flex flex-col max-h-[90vh]">

            <!-- Modal Header -->
            <div class="p-5 border-b border-gray-200 bg-gray-50/50 flex items-center justify-between shrink-0">
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 bg-brand-primary/10 rounded-md flex items-center justify-center text-brand-primary">
                        <i data-lucide="file-check" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-brand-dark">Review Registrar Requirement</h3>
                        <p class="text-xs text-gray-500">Verify submitted documents for Registrar Clearance approval</p>
                    </div>
                </div>
                <button type="button" id="btn_close_review_modal" class="text-gray-400 hover:text-gray-600">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <!-- Modal Content -->
            <div class="p-6 overflow-y-auto space-y-5 text-xs flex-1">

                <!-- Student Header Details -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 p-3.5 bg-gray-50 border border-gray-200 rounded-md">
                    <div>
                        <p class="text-[10px] font-bold uppercase text-gray-400 tracking-wider">Student Name</p>
                        <p id="modal_req_student_name" class="font-bold text-brand-dark text-sm mt-0.5">John Doe</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold uppercase text-gray-400 tracking-wider">Student ID</p>
                        <p id="modal_req_student_id" class="font-mono font-bold text-brand-dark mt-0.5">2026-00001</p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-[10px] font-bold uppercase text-gray-400 tracking-wider">Program</p>
                        <p id="modal_req_program" class="font-medium text-brand-dark mt-0.5">BS Computer Science</p>
                    </div>
                </div>

                <!-- Document Details -->
                <div class="border border-gray-200 rounded-md p-4 space-y-3 bg-white">
                    <div class="flex items-center justify-between border-b border-gray-100 pb-2">
                        <span class="font-bold text-brand-dark text-xs">Submitted Item</span>
                        <span id="modal_req_item_title" class="font-semibold text-brand-primary">Form 137 / Official Transcript Copy</span>
                    </div>

                    <div class="flex items-center justify-between text-gray-500">
                        <span>Document File Preview:</span>
                        <a href="#" onclick="alert('Opening submitted document preview...'); return false;" class="inline-flex items-center space-x-1 text-brand-primary font-semibold hover:underline">
                            <i data-lucide="paperclip" class="w-3.5 h-3.5"></i>
                            <span>View Attached Document PDF</span>
                        </a>
                    </div>
                </div>

                <!-- Rejection Reason Container (Mandatory when rejecting per spec) -->
                <div id="container_reject_req_reason" class="hidden space-y-1 bg-red-50 p-4 border border-red-200 rounded-md">
                    <label for="input_req_reject_reason" class="block font-bold text-red-800 text-xs">
                        Rejection Reason <span class="text-red-600">* Required for Rejection</span>
                    </label>
                    <textarea id="input_req_reject_reason" rows="3" placeholder="Provide specific reason for rejecting this requirement (e.g. Uncertified copy provided, blurred scan, missing principal seal)..." class="w-full p-2.5 text-xs border border-red-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500 bg-white"></textarea>
                </div>

            </div>

            <!-- Modal Footer -->
            <div class="p-5 border-t border-gray-200 bg-gray-50/50 flex items-center justify-between gap-3 shrink-0">
                <button type="button" id="btn_cancel_review_modal" class="px-4 py-2 rounded-md font-semibold text-gray-600 hover:bg-gray-200/60 transition-colors">Close</button>

                <div class="flex items-center space-x-2">
                    <!-- Action: Reject (Mandatory Reason) -->
                    <button type="button" id="btn_req_reject" onclick="handleReqRejectAction()" class="px-4 py-2 rounded-md font-semibold text-xs bg-red-600 text-white hover:bg-red-700 transition-colors shadow-xs">
                        Reject Requirement
                    </button>

                    <!-- Action: Approve -->
                    <button type="button" id="btn_req_approve" onclick="updateRegistrarReqStatus('Approved')" class="px-4 py-2 rounded-md font-semibold text-xs bg-emerald-600 text-white hover:bg-emerald-700 transition-colors shadow-xs">
                        Approve Requirement
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal 2: View Overall Student Clearance Status (All Departments Inspection) -->
    <div id="modal_overall_clearance" class="fixed inset-0 z-50 hidden bg-gray-900/50 backdrop-blur-xs flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-2xl overflow-hidden flex flex-col max-h-[90vh]">

            <!-- Modal Header -->
            <div class="p-5 border-b border-gray-200 bg-gray-50/50 flex items-center justify-between shrink-0">
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 bg-brand-primary/10 rounded-md flex items-center justify-center text-brand-primary">
                        <i data-lucide="shield-check" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-brand-dark">Overall Clearance Inspection</h3>
                        <p class="text-xs text-gray-500">Cross-Departmental Clearance Status Overview</p>
                    </div>
                </div>
                <button type="button" id="btn_close_overall_modal" class="text-gray-400 hover:text-gray-600">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <!-- Modal Content -->
            <div class="p-6 overflow-y-auto space-y-6 text-xs flex-1">

                <!-- Student Summary Box -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between p-4 bg-brand-accent/15 border border-brand-secondary/20 rounded-md gap-3">
                    <div>
                        <h4 id="modal_overall_student_name" class="font-bold text-brand-dark text-sm">John Doe</h4>
                        <p id="modal_overall_student_info" class="text-gray-500 font-mono text-[11px]">2026-00001 • BS Computer Science (3rd Year)</p>
                    </div>
                    <div>
                        <span id="badge_overall_status" class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-800">
                            Incomplete Clearance
                        </span>
                    </div>
                </div>

                <!-- Multi-Department Clearance Breakdown Checklist -->
                <div class="space-y-3">
                    <h5 class="font-bold text-brand-dark text-xs uppercase tracking-wider text-gray-500">Departmental Clearance Breakdown</h5>

                    <div class="border border-gray-200 rounded-md overflow-hidden divide-y divide-gray-100">

                        <!-- Dept 1: Registrar (Current Office) -->
                        <div class="p-3.5 flex items-center justify-between bg-white">
                            <div class="flex items-center space-x-3">
                                <i data-lucide="folder-check" class="w-4 h-4 text-brand-primary"></i>
                                <div>
                                    <p class="font-bold text-brand-dark">Registrar's Office</p>
                                    <p class="text-[11px] text-gray-500">Form 137 & Admission Credentials</p>
                                </div>
                            </div>
                            <span id="dept_status_registrar" class="px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-amber-100 text-amber-800">Pending Review</span>
                        </div>

                        <!-- Dept 2: Accounting / Finance -->
                        <div class="p-3.5 flex items-center justify-between bg-white">
                            <div class="flex items-center space-x-3">
                                <i data-lucide="credit-card" class="w-4 h-4 text-emerald-600"></i>
                                <div>
                                    <p class="font-bold text-brand-dark">Accounting & Finance</p>
                                    <p class="text-[11px] text-gray-500">Tuition & Assessment Balance</p>
                                </div>
                            </div>
                            <span class="px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span>
                        </div>

                        <!-- Dept 3: Library Services -->
                        <div class="p-3.5 flex items-center justify-between bg-white">
                            <div class="flex items-center space-x-3">
                                <i data-lucide="book-open" class="w-4 h-4 text-emerald-600"></i>
                                <div>
                                    <p class="font-bold text-brand-dark">University Library</p>
                                    <p class="text-[11px] text-gray-500">Book Returns & Overdue Fines</p>
                                </div>
                            </div>
                            <span class="px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span>
                        </div>

                        <!-- Dept 4: Student Affairs / Discipline -->
                        <div class="p-3.5 flex items-center justify-between bg-white">
                            <div class="flex items-center space-x-3">
                                <i data-lucide="shield-alert" class="w-4 h-4 text-red-600"></i>
                                <div>
                                    <p class="font-bold text-brand-dark">Student Affairs Office</p>
                                    <p class="text-[11px] text-gray-500">Disciplinary Clearances & Good Moral</p>
                                </div>
                            </div>
                            <span id="dept_status_sao" class="px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-red-100 text-red-800">Hold (Unreturned ID)</span>
                        </div>

                        <!-- Dept 5: Laboratory / Department Head -->
                        <div class="p-3.5 flex items-center justify-between bg-white">
                            <div class="flex items-center space-x-3">
                                <i data-lucide="cpu" class="w-4 h-4 text-emerald-600"></i>
                                <div>
                                    <p class="font-bold text-brand-dark">CS Department Head</p>
                                    <p class="text-[11px] text-gray-500">Lab Equipment & Practicum Clearance</p>
                                </div>
                            </div>
                            <span class="px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Modal Footer -->
            <div class="p-5 border-t border-gray-200 bg-gray-50/50 flex items-center justify-end shrink-0">
                <button type="button" id="btn_cancel_overall_modal" class="px-4 py-2 rounded-md font-semibold text-gray-600 hover:bg-gray-200/60 transition-colors">Close</button>
            </div>

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
        let currentSelectedStudentId = null;

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

            // Close Review Requirement Modal
            $('#btn_close_review_modal, #btn_cancel_review_modal').on('click', function() {
                $('#modal_review_requirement').addClass('hidden');
            });

            // Close Overall Clearance Modal
            $('#btn_close_overall_modal, #btn_cancel_overall_modal').on('click', function() {
                $('#modal_overall_clearance').addClass('hidden');
            });
        });

        // Open Modal 1: Review Registrar Requirement
        function openReviewReqModal(recordId) {
            $('#container_reject_req_reason').addClass('hidden');
            $('#input_req_reject_reason').val('');

            if (recordId === 1) {
                $('#modal_req_student_name').text('John Doe');
                $('#modal_req_student_id').text('2026-00001');
                $('#modal_req_program').text('BS Computer Science');
                $('#modal_req_item_title').text('Form 137 / Official Transcript Copy');
            } else if (recordId === 2) {
                $('#modal_req_student_name').text('Jane Smith');
                $('#modal_req_student_id').text('2026-00002');
                $('#modal_req_program').text('BS Information Technology');
                $('#modal_req_item_title').text('Honorable Dismissal Certificate');
            } else if (recordId === 3) {
                $('#modal_req_student_name').text('Alex Mercer');
                $('#modal_req_student_id').text('2026-00003');
                $('#modal_req_program').text('BS Information Systems');
                $('#modal_req_item_title').text('PSA Birth Certificate & Good Moral');
            } else if (recordId === 4) {
                $('#modal_req_student_name').text('Samantha Vance');
                $('#modal_req_student_id').text('2026-00010');
                $('#modal_req_program').text('BS Computer Science');
                $('#modal_req_item_title').text('Original Transcript of Records');
            }

            $('#modal_review_requirement').removeClass('hidden');
        }

        // Trigger Rejection Field Validation
        function handleReqRejectAction() {
            const $rejectBox = $('#container_reject_req_reason');
            const reason = $('#input_req_reject_reason').val().trim();

            if ($rejectBox.hasClass('hidden')) {
                $rejectBox.removeClass('hidden');
                $('#input_req_reject_reason').focus();
            } else {
                if (!reason) {
                    alert('Please specify a rejection reason before rejecting this requirement.');
                    $('#input_req_reject_reason').focus();
                    return;
                }
                updateRegistrarReqStatus('Rejected');
            }
        }

        // Update Registrar Requirement Status
        function updateRegistrarReqStatus(newStatus) {
            const studentName = $('#modal_req_student_name').text();

            $('#modal_review_requirement').addClass('hidden');

            if (newStatus === 'Rejected') {
                showAlert('error', `Registrar requirement for ${studentName} was Rejected.`);
            } else {
                showAlert('success', `Registrar requirement for ${studentName} was Approved successfully.`);
            }
        }

        // Open Modal 2: View Overall Student Clearance Status
        function openOverallClearanceModal(recordId) {
            if (recordId === 1) {
                $('#modal_overall_student_name').text('John Doe');
                $('#modal_overall_student_info').text('2026-00001 • BS Computer Science (3rd Year)');
                $('#badge_overall_status').text('Incomplete Clearance').className = 'inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-800';
                $('#dept_status_registrar').text('Pending Review').className = 'px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-amber-100 text-amber-800';
                $('#dept_status_sao').text('Hold (Unreturned ID)').className = 'px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-red-100 text-red-800';
            } else if (recordId === 3) {
                $('#modal_overall_student_name').text('Alex Mercer');
                $('#modal_overall_student_info').text('2026-00003 • BS Information Systems (1st Year)');
                $('#badge_overall_status').text('Fully Cleared').className = 'inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800';
                $('#dept_status_registrar').text('Cleared').className = 'px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-emerald-100 text-emerald-800';
                $('#dept_status_sao').text('Cleared').className = 'px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-emerald-100 text-emerald-800';
            } else {
                $('#modal_overall_student_name').text('Jane Smith');
                $('#modal_overall_student_info').text('2026-00002 • BS Information Technology (2nd Year)');
                $('#badge_overall_status').text('Incomplete Clearance').className = 'inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-800';
                $('#dept_status_registrar').text('Pending Review').className = 'px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-amber-100 text-amber-800';
                $('#dept_status_sao').text('Cleared').className = 'px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-emerald-100 text-emerald-800';
            }

            $('#modal_overall_clearance').removeClass('hidden');
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