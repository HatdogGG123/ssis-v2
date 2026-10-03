<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Department Clearance Review</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif']
                    },
                    colors: {
                        brand: {
                            primary: '#344e41',
                            secondary: '#588157',
                            accent: '#dad7cd',
                            dark: '#202020'
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 font-sans text-brand-dark antialiased min-h-screen flex flex-col">

    <!-- Navigation Header -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Brand Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 bg-brand-primary rounded-md flex items-center justify-center text-white font-bold text-lg">P</div>
                    <div>
                        <span class="text-base font-bold text-brand-dark tracking-tight block leading-none">PAXTON</span>
                        <span class="text-[10px] uppercase font-semibold text-gray-500 tracking-widest block mt-0.5">University SSIS</span>
                    </div>
                </div>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center space-x-1 text-xs">
                    <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Clearance Queue</a>
                    <a href="notifications.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Notifications</a>
                </nav>

                <!-- Profile Info & Mobile Toggle -->
                <div class="flex items-center space-x-3">
                    <div class="hidden lg:flex items-center space-x-2">
                        <div class="text-right">
                            <p class="text-xs font-semibold text-brand-dark">Dr. Alex Morgan</p>
                            <p class="text-[10px] text-gray-500 uppercase font-bold">College of Computer Studies</p>
                        </div>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button type="button" id="btn_mobile_menu" class="lg:hidden p-2 rounded-md text-gray-500 hover:text-brand-dark hover:bg-gray-100 focus:outline-none">
                        <i data-lucide="menu" id="icon_menu_open" class="w-6 h-6"></i>
                        <i data-lucide="x" id="icon_menu_close" class="w-6 h-6 hidden"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Dropdown Container -->
        <div id="mobile_nav_menu" class="hidden lg:hidden border-t border-gray-200 bg-white px-4 pt-2 pb-4 space-y-1 text-xs shadow-md">
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Clearance Queue</a>
            <a href="notifications.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Notifcations</a>

            <div class="pt-3 border-t border-gray-100 flex items-center justify-between px-3">
                <div>
                    <p class="text-xs font-semibold text-brand-dark">Dr. Alex Morgan</p>
                    <p class="text-[10px] text-gray-500 uppercase font-bold">College of Computer Studies</p>
                </div>
                <a href="../logout.php" class="text-xs text-red-600 font-semibold hover:underline">Log Out</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8 ">
        <!-- Header & Quick Dashboard Stat -->
        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col lg:flex-row lg:items-center justify-between gap-6">
            <div>
                <div class="flex flex-wrap items-center gap-2">
                    <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Department Clearance Queue</h1>
                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-brand-accent/40 text-brand-primary border border-brand-secondary/30">CCS Department</span>
                </div>
                <p class="text-sm text-gray-500 mt-1">Review student clearance requests for Computer Studies programs (BSCS, BSIT, BSIS).</p>
            </div>

            <!-- Dashboard Metric Section -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 w-full lg:w-auto shrink-0">
                <div class="bg-amber-50 border border-amber-200 rounded-md px-4 py-2.5 text-center min-w-[120px]">
                    <span class="text-[9px] uppercase font-bold text-amber-700 tracking-wider block">Pending Review</span>
                    <span id="stat_pending_count" class="text-xl font-bold text-amber-800">12</span>
                </div>
                <div class="bg-emerald-50 border border-emerald-200 rounded-md px-4 py-2.5 text-center min-w-[120px]">
                    <span class="text-[9px] uppercase font-bold text-emerald-700 tracking-wider block">Approved</span>
                    <span class="text-xl font-bold text-emerald-800">128</span>
                </div>
                <div class="bg-red-50 border border-red-200 rounded-md px-4 py-2.5 text-center min-w-[120px]">
                    <span class="text-[9px] uppercase font-bold text-red-700 tracking-wider block">Rejected</span>
                    <span class="text-xl font-bold text-red-800">3</span>
                </div>
            </div>
        </section>

        <!-- Department Active Requirements Accordion / Banner -->
        <section class="bg-white border border-gray-200 rounded-md p-5 shadow-xs">
            <div class="flex items-center justify-between cursor-pointer" id="toggle_req_panel">
                <div class="flex items-center space-x-3">
                    <div class="p-2 bg-brand-accent/30 text-brand-primary rounded-md">
                        <i data-lucide="clipboard-list" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h2 class="text-sm font-bold text-brand-dark">Active Clearance Requirements (College of Computer Studies)</h2>
                        <p class="text-xs text-gray-500">Requirements evaluated for students in your department</p>
                    </div>
                </div>
                <button type="button" class="text-gray-400 hover:text-gray-600">
                    <i data-lucide="chevron-down" id="icon_req_chevron" class="w-5 h-5 transition-transform duration-200"></i>
                </button>
            </div>

            <div id="req_panel_content" class="mt-4 pt-4 border-t border-gray-100 hidden">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3 text-xs">
                    <div class="p-3 bg-gray-50 border border-gray-200 rounded-md">
                        <p class="font-bold text-brand-dark">Laboratory Clearance</p>
                        <p class="text-[11px] text-gray-500 mt-0.5">Return of all computer lab hardware equipment and kit assets.</p>
                    </div>
                    <div class="p-3 bg-gray-50 border border-gray-200 rounded-md">
                        <p class="font-bold text-brand-dark">Capstone / Thesis Repository</p>
                        <p class="text-[11px] text-gray-500 mt-0.5">Submission of final soft copy capstone source code & documentation.</p>
                    </div>
                    <div class="p-3 bg-gray-50 border border-gray-200 rounded-md">
                        <p class="font-bold text-brand-dark">Department Organization Clearance</p>
                        <p class="text-[11px] text-gray-500 mt-0.5">Settlement of student council organizational equipment or dues.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Search, Filter & Clearance Action List -->
        <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
            <!-- Filter Toolbar -->
            <div class="p-5 border-b border-gray-100 flex flex-col md:flex-row md:items-center justify-between gap-4 bg-gray-50/50">
                <div>
                    <h2 class="text-base font-bold text-brand-dark">Student Clearance Requests</h2>
                    <p class="text-xs text-gray-500">Filtered strictly by programs under College of Computer Studies</p>
                </div>

                <div class="flex flex-wrap items-center gap-2">
                    <!-- Search Input -->
                    <div class="relative min-w-[220px]">
                        <i data-lucide="search" class="w-3.5 h-3.5 text-gray-400 absolute left-3 top-2.5"></i>
                        <input type="text" id="input_search" placeholder="Search ID or Name..." class="w-full pl-8 pr-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary bg-white">
                    </div>

                    <!-- Program Filter -->
                    <select id="filter_program" class="px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary bg-white">
                        <option value="">All Programs</option>
                        <option value="BSCS">BS Computer Science</option>
                        <option value="BSIT">BS Information Technology</option>
                        <option value="BSIS">BS Information Systems</option>
                    </select>

                    <!-- Year Level Filter -->
                    <select id="filter_year" class="px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary bg-white">
                        <option value="">All Year Levels</option>
                        <option value="1st Year">1st Year</option>
                        <option value="2nd Year">2nd Year</option>
                        <option value="3rd Year">3rd Year</option>
                        <option value="4th Year">4th Year</option>
                    </select>

                    <!-- Clearance Status Filter -->
                    <select id="filter_status" class="px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary bg-white">
                        <option value="">All Statuses</option>
                        <option value="Pending" selected>Pending</option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
                    </select>
                </div>
            </div>

            <!-- Student Clearance Table (Responsive horizontal scroll with fixed column layout) -->
            <div class="overflow-x-auto w-full">
                <table class="w-full text-left text-xs border-collapse min-w-[900px]">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase font-semibold">
                            <th class="py-3.5 px-5 w-[25%] whitespace-nowrap">Student Information</th>
                            <th class="py-3.5 px-5 w-[22%] whitespace-nowrap">Program & Year</th>
                            <th class="py-3.5 px-5 w-[28%] whitespace-nowrap">Requirement Item</th>
                            <th class="py-3.5 px-5 w-[15%] text-center whitespace-nowrap">Department Status</th>
                            <th class="py-3.5 px-5 w-[10%] text-right whitespace-nowrap">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="clearance_table_body" class="divide-y divide-gray-100 font-medium text-gray-700">

                        <!-- Row 1: Pending -->
                        <tr class="hover:bg-gray-50/50 student-row" data-program="BSCS" data-year="4th Year" data-status="Pending">
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-bold text-brand-dark">Alex Santos</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-01042</p>
                            </td>
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-semibold text-brand-dark">BS Computer Science</p>
                                <p class="text-gray-400 text-[11px]">4th Year</p>
                            </td>
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-medium text-gray-800">Capstone Source Code & Documentation</p>
                                <p class="text-gray-400 text-[10px]">Submitted: Oct 2, 2026</p>
                            </td>
                            <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800">Pending Review</span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1 whitespace-nowrap">
                                <button type="button" onclick="openReviewModal('2026-01042', 'Alex Santos', 'BS Computer Science', '4th Year', 'Capstone Source Code & Documentation', 'Pending')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">Review</button>
                            </td>
                        </tr>

                        <!-- Row 2: Pending -->
                        <tr class="hover:bg-gray-50/50 student-row" data-program="BSIT" data-year="3rd Year" data-status="Pending">
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-bold text-brand-dark">Maria Clara</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-01089</p>
                            </td>
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-semibold text-brand-dark">BS Information Technology</p>
                                <p class="text-gray-400 text-[11px]">3rd Year</p>
                            </td>
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-medium text-gray-800">Networking Hardware Lab Assets</p>
                                <p class="text-gray-400 text-[10px]">Submitted: Oct 1, 2026</p>
                            </td>
                            <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800">Pending Review</span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1 whitespace-nowrap">
                                <button type="button" onclick="openReviewModal('2026-01089', 'Maria Clara', 'BS Information Technology', '3rd Year', 'Networking Hardware Lab Assets', 'Pending')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">Review</button>
                            </td>
                        </tr>

                        <!-- Row 3: Approved -->
                        <tr class="hover:bg-gray-50/50 student-row" data-program="BSCS" data-year="2nd Year" data-status="Approved">
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-bold text-brand-dark">Juan Dela Cruz</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00311</p>
                            </td>
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-semibold text-brand-dark">BS Computer Science</p>
                                <p class="text-gray-400 text-[11px]">2nd Year</p>
                            </td>
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-medium text-gray-800">Computer Science Dept Dues</p>
                                <p class="text-gray-400 text-[10px]">Approved: Sep 28, 2026</p>
                            </td>
                            <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Approved</span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1 whitespace-nowrap">
                                <button type="button" onclick="openReviewModal('2026-00311', 'Juan Dela Cruz', 'BS Computer Science', '2nd Year', 'Computer Science Dept Dues', 'Approved')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold border border-gray-200 bg-white text-gray-700 hover:bg-gray-50">View Details</button>
                            </td>
                        </tr>

                        <!-- Row 4: Rejected -->
                        <tr class="hover:bg-gray-50/50 student-row" data-program="BSIS" data-year="4th Year" data-status="Rejected">
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-bold text-brand-dark">Samantha Reyes</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00155</p>
                            </td>
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-semibold text-brand-dark">BS Information Systems</p>
                                <p class="text-gray-400 text-[11px]">4th Year</p>
                            </td>
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-medium text-gray-800">Systems Project Repository</p>
                                <p class="text-gray-400 text-[10px]">Rejected: Sep 29, 2026</p>
                            </td>
                            <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-red-100 text-red-800">Rejected</span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1 whitespace-nowrap">
                                <button type="button" onclick="openReviewModal('2026-00155', 'Samantha Reyes', 'BS Information Systems', '4th Year', 'Systems Project Repository', 'Rejected', 'Missing full project documentation PDF and SQL file.')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold border border-gray-200 bg-white text-gray-700 hover:bg-gray-50">View Details</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Table Footer Pagination -->
            <div class="px-5 py-3 bg-gray-50/50 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500">
                <p>Showing <span class="font-semibold text-brand-dark">1-4</span> of <span class="font-semibold text-brand-dark">15</span> departmental requests</p>
                <div class="flex items-center space-x-1">
                    <button class="px-2.5 py-1 border border-gray-200 rounded-md bg-white text-gray-500 disabled:opacity-50" disabled>Previous</button>
                    <button class="px-2.5 py-1 border border-gray-200 rounded-md bg-white text-gray-700 hover:bg-gray-50">Next</button>
                </div>
            </div>
        </section>
    </main>

    <!-- Clearance Review / Action Modal -->
    <div id="modal_review" class="fixed inset-0 z-50 hidden bg-gray-900/50 flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-lg overflow-hidden flex flex-col">

            <!-- Modal Header -->
            <div class="p-5 border-b border-gray-200 bg-gray-50/50 flex items-center justify-between">
                <div>
                    <h3 class="text-base font-bold text-brand-dark">Department Clearance Decision</h3>
                    <p class="text-xs text-gray-500">Review departmental submission and approve or reject request</p>
                </div>
                <button type="button" onclick="closeReviewModal()" class="text-gray-400 hover:text-gray-600">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <!-- Modal Content Body -->
            <form id="form_clearance_action" onsubmit="handleClearanceSubmit(event)" class="p-6 space-y-5 text-xs">

                <!-- Student Header Card (Strictly scoped fields) -->
                <div class="p-4 bg-gray-50 border border-gray-200 rounded-md space-y-1">
                    <div class="flex items-center justify-between">
                        <p id="modal_student_name" class="font-bold text-sm text-brand-dark">Alex Santos</p>
                        <span id="modal_current_badge" class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800">Pending</span>
                    </div>
                    <p id="modal_student_id_prog" class="text-gray-500 font-mono">2026-01042 • BS Computer Science (4th Year)</p>
                </div>

                <!-- Clearance Requirement Detail -->
                <div>
                    <label class="block text-[11px] uppercase font-bold text-gray-400 mb-1">Clearance Requirement Item</label>
                    <div id="modal_req_title" class="p-3 bg-white border border-gray-200 rounded-md font-semibold text-brand-dark">
                        Capstone Source Code & Documentation
                    </div>
                </div>

                <!-- Rejection Reason Input Field (Required when Rejecting) -->
                <div id="rejection_reason_container" class="space-y-1">
                    <label for="reject_reason" class="block font-bold text-gray-700">
                        Reason for Rejection <span class="text-red-500">*</span>
                    </label>
                    <textarea id="reject_reason" rows="3" placeholder="Provide a detailed explanation for why this item is rejected (e.g. Missing lab kit, incomplete files)..." class="w-full p-2.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary bg-white"></textarea>
                    <p id="reject_error_msg" class="text-[11px] text-red-600 hidden">Please provide a reason before rejecting this clearance request.</p>
                </div>

                <!-- Privacy Disclaimer Guard -->
                <div class="p-3 bg-blue-50/60 border border-blue-100 rounded-md flex items-start space-x-2 text-[11px] text-blue-800">
                    <i data-lucide="shield-check" class="w-4 h-4 text-blue-600 shrink-0 mt-0.5"></i>
                    <span>Department access is strictly restricted to department clearance verification. Grades and tuition payment records are withheld under policy regulations.</span>
                </div>

                <!-- Modal Actions -->
                <div class="pt-3 border-t border-gray-200 flex items-center justify-end space-x-2">
                    <button type="button" onclick="closeReviewModal()" class="px-4 py-2 font-semibold text-xs border border-gray-200 bg-white text-gray-700 rounded-md hover:bg-gray-50">Cancel</button>
                    <button type="button" id="btn_reject" onclick="submitDecision('Rejected')" class="px-4 py-2 font-semibold text-xs bg-red-600 text-white rounded-md hover:bg-red-700">Reject Request</button>
                    <button type="button" id="btn_approve" onclick="submitDecision('Approved')" class="px-4 py-2 font-semibold text-xs bg-brand-primary text-white rounded-md hover:bg-brand-primary/90">Approve Clearance</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12 py-6 text-center text-xs text-gray-500">
        <p>Paxton University Student Services Information System (SSIS) &copy; 2026. All Rights Reserved.</p>
    </footer>

    <!-- Interactive Scripts -->
    <script src="../../js/helperFunction.js"></script>
    <script>
        let currentDecision = '';

        $(document).ready(function() {
            lucide.createIcons();

            // Toggle Requirements accordion
            $('#toggle_req_panel').on('click', function() {
                $('#req_panel_content').toggleClass('hidden');
                $('#icon_req_chevron').toggleClass('rotate-180');
            });

            // Filter functionality
            $('#input_search, #filter_program, #filter_year, #filter_status').on('input change', function() {
                filterTable();
            });

            // Mobile Navigation Toggle Handler
            $('#btn_mobile_menu').on('click', function(e) {
                e.preventDefault();

                // Toggle dropdown visibility
                $('#mobile_nav_menu').toggleClass('hidden');

                // Toggle hamburger and close icons
                $('#icon_menu_open').toggleClass('hidden');
                $('#icon_menu_close').toggleClass('hidden');
            });
        });

        function filterTable() {
            const searchVal = $('#input_search').val().toLowerCase();
            const programVal = $('#filter_program').val();
            const yearVal = $('#filter_year').val();
            const statusVal = $('#filter_status').val();

            $('.student-row').each(function() {
                const text = $(this).text().toLowerCase();
                const prog = $(this).data('program');
                const year = $(this).data('year');
                const status = $(this).data('status');

                const matchesSearch = text.includes(searchVal);
                const matchesProg = !programVal || prog === programVal;
                const matchesYear = !yearVal || year === yearVal;
                const matchesStatus = !statusVal || status === statusVal;

                if (matchesSearch && matchesProg && matchesYear && matchesStatus) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }

        function openReviewModal(studentId, name, program, year, requirementTitle, status, existingReason = '') {
            $('#modal_student_name').text(name);
            $('#modal_student_id_prog').text(`${studentId} • ${program} (${year})`);
            $('#modal_req_title').text(requirementTitle);
            $('#reject_reason').val(existingReason);
            $('#reject_error_msg').addClass('hidden');

            const badge = $('#modal_current_badge');
            badge.removeClass('bg-amber-100 text-amber-800 bg-emerald-100 text-emerald-800 bg-red-100 text-red-800');

            if (status === 'Approved') {
                badge.addClass('bg-emerald-100 text-emerald-800').text('Approved');
            } else if (status === 'Rejected') {
                badge.addClass('bg-red-100 text-red-800').text('Rejected');
            } else {
                badge.addClass('bg-amber-100 text-amber-800').text('Pending Review');
            }

            $('#modal_review').removeClass('hidden');
        }

        function closeReviewModal() {
            $('#modal_review').addClass('hidden');
        }

        function submitDecision(type) {
            currentDecision = type;
            const reason = $('#reject_reason').val().trim();

            // Hide previous error message
            $('#reject_error_msg').addClass('hidden');

            // Require reason if rejected[cite: 11]
            if (type === 'Rejected' && !reason) {
                $('#reject_error_msg').removeClass('hidden');
                return;
            }

            // Save original button texts and set loading state
            const originalApproveText = 'Approve Clearance';
            const originalRejectText = 'Reject Request';
            $('#btn_approve, #btn_reject').prop('disabled', true).text('Processing...');

            // Simulate database update, write audit log, and notify student[cite: 10, 12]
            setTimeout(() => {
                // Trigger toast notification
                showToast("success", `Clearance requirement item successfully set to: ${type}`);

                // Restore button states & text
                $('#btn_approve').prop('disabled', false).text(originalApproveText);
                $('#btn_reject').prop('disabled', false).text(originalRejectText);

                // Close review modal
                closeReviewModal();
            }, 600);
        }
    </script>
</body>

</html>