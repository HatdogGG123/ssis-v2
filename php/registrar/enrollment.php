<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Registrar Enrollment Queue</title>
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

    <!-- Toast Notification Container -->
    <div id="toast_container" class="fixed top-5 right-5 z-50 flex flex-col space-y-2 max-w-sm w-full pointer-events-none px-4 sm:px-0"></div>

    <!-- Navigation Header -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 bg-brand-primary rounded-md flex items-center justify-center text-white font-bold text-lg">P</div>
                    <div>
                        <span class="text-base font-bold text-brand-dark tracking-tight block leading-none">PAXTON</span>
                        <span class="text-[10px] uppercase font-semibold text-gray-500 tracking-widest block mt-0.5">University SSIS</span>
                    </div>
                </div>

                <nav class="hidden lg:flex items-center space-x-1 text-xs">
                    <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Enrollment Queue</a>
                    <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Grades</a>
                    <a href="document_requests.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
                    <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
                    <a href="report.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Report</a>
                    <a href="notifications.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Notifications</a>
                    <a href="announcements.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Announcements</a>
                </nav>

                <div class="flex items-center space-x-3">
                    <div class="hidden lg:flex items-center space-x-2">
                        <div class="text-right">
                            <p class="text-xs font-semibold text-brand-dark">Registrar Staff</p>
                            <p class="text-[10px] text-gray-500 uppercase font-bold">Registrar Module</p>
                        </div>
                    </div>
                    <button type="button" id="btn_mobile_menu" class="lg:hidden p-2 rounded-md text-gray-500 hover:text-brand-dark hover:bg-gray-100 focus:outline-none">
                        <i data-lucide="menu" id="icon_menu_open" class="w-6 h-6"></i>
                        <i data-lucide="x" id="icon_menu_close" class="w-6 h-6 hidden"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile_nav_menu" class="hidden lg:hidden border-t border-gray-200 bg-white px-4 pt-2 pb-4 space-y-1 text-xs shadow-md">
            <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Enrollment Queue</a>
            <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Grades</a>
            <a href="document_requests.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
            <a href="report.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Report</a>
            <a href="notifications.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Notifications</a>
            <a href="announcements.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Announcements</a>
        </div>
    </header>

    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">
        <!-- Header Metrics -->
        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Enrollment Request Queue</h1>
                <p class="text-sm text-gray-500">Review student subject loads, make necessary subject adjustments, and approve/enroll students.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 sm:gap-3">
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Pending</span>
                    <span class="text-base font-bold text-amber-700">5</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Under Review</span>
                    <span class="text-base font-bold text-blue-700">7</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Approved</span>
                    <span class="text-base font-bold text-teal-700">14</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Enrolled</span>
                    <span class="text-base font-bold text-emerald-700">340</span>
                </div>
            </div>
        </section>

        <!-- Queue Table Section with Clean Horizontal Scroll -->
        <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
            <div class="p-5 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <h2 class="text-base font-bold text-brand-dark">Applications Queue (First Semester, A.Y. 2026-2027)</h2>
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2">
                    <select id="filter_status" class="px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary bg-white">
                        <option value="">All Statuses</option>
                        <option value="Pending">Pending</option>
                        <option value="Under Review">Under Review</option>
                        <option value="Approved">Approved</option>
                        <option value="Enrolled">Enrolled</option>
                        <option value="Rejected">Rejected</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                    <input type="text" placeholder="Search Student No or Name..." class="px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary">
                </div>
            </div>

            <!-- Table Wrapper with horizontal scrolling & fixed minimum width -->
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs border-collapse min-w-[640px]">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase font-semibold whitespace-nowrap">
                            <th class="py-3 px-4 sm:px-5 sticky left-0 bg-gray-50 z-10 shadow-[1px_0_0_0_#f3f4f6]">Student Number & Name</th>
                            <th class="py-3 px-4 sm:px-5">Program</th>
                            <th class="py-3 px-4 sm:px-5">Year Level</th>
                            <th class="py-3 px-4 sm:px-5 text-center">Status</th>
                            <th class="py-3 px-4 sm:px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 font-medium text-gray-700">

                        <!-- Row 1: Pending -->
                        <tr class="hover:bg-gray-50/50 group">
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap sticky left-0 bg-white group-hover:bg-gray-50/50 z-10 shadow-[1px_0_0_0_#f3f4f6]">
                                <p class="font-bold text-brand-dark">John Doe</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00001</p>
                            </td>
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap">BS Computer Science</td>
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap">3rd Year</td>
                            <td class="py-3.5 px-4 sm:px-5 text-center whitespace-nowrap">
                                <span class="px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-amber-100 text-amber-800">Pending</span>
                            </td>
                            <td class="py-3.5 px-4 sm:px-5 text-right whitespace-nowrap space-x-1">
                                <button onclick="openReviewModal('2026-00001', 'John Doe', 'BS Computer Science', '3rd Year')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">Review & Adjust</button>
                            </td>
                        </tr>

                        <!-- Row 2: Under Review -->
                        <tr class="hover:bg-gray-50/50 group">
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap sticky left-0 bg-white group-hover:bg-gray-50/50 z-10 shadow-[1px_0_0_0_#f3f4f6]">
                                <p class="font-bold text-brand-dark">Maria Clara</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00003</p>
                            </td>
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap">BS Computer Science</td>
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap">2nd Year</td>
                            <td class="py-3.5 px-4 sm:px-5 text-center whitespace-nowrap">
                                <span class="px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-blue-100 text-blue-800">Under Review</span>
                            </td>
                            <td class="py-3.5 px-4 sm:px-5 text-right whitespace-nowrap space-x-1">
                                <button onclick="openReviewModal('2026-00003', 'Maria Clara', 'BS Computer Science', '2nd Year')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">Evaluate Load</button>
                                <button onclick="openRejectModal('2026-00003')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold border border-red-200 text-red-600 bg-white hover:bg-red-50">Reject</button>
                            </td>
                        </tr>

                        <!-- Row 3: Approved -->
                        <tr class="hover:bg-gray-50/50 group">
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap sticky left-0 bg-white group-hover:bg-gray-50/50 z-10 shadow-[1px_0_0_0_#f3f4f6]">
                                <p class="font-bold text-brand-dark">Juan Dela Cruz</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00004</p>
                            </td>
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap">BS Information Technology</td>
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap">4th Year</td>
                            <td class="py-3.5 px-4 sm:px-5 text-center whitespace-nowrap">
                                <span class="px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-teal-100 text-teal-800">Approved</span>
                            </td>
                            <td class="py-3.5 px-4 sm:px-5 text-right whitespace-nowrap space-x-1">
                                <button onclick="confirmEnrolled('2026-00004')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-emerald-700 text-white hover:bg-emerald-800">Confirm Enrolled</button>
                            </td>
                        </tr>

                        <!-- Row 4: Enrolled -->
                        <tr class="hover:bg-gray-50/50 group">
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap sticky left-0 bg-white group-hover:bg-gray-50/50 z-10 shadow-[1px_0_0_0_#f3f4f6]">
                                <p class="font-bold text-brand-dark">Jane Smith</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00002</p>
                            </td>
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap">BS Information Technology</td>
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap">2nd Year</td>
                            <td class="py-3.5 px-4 sm:px-5 text-center whitespace-nowrap">
                                <span class="px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Enrolled</span>
                            </td>
                            <td class="py-3.5 px-4 sm:px-5 text-right whitespace-nowrap">
                                <button onclick="openReviewModal('2026-00002', 'Jane Smith', 'BS Information Technology', '2nd Year', true)" class="px-2.5 py-1.5 rounded-md text-xs font-semibold border border-gray-200 text-gray-700 bg-white hover:bg-gray-50">View Subject Load</button>
                            </td>
                        </tr>

                        <!-- Row 5: Rejected -->
                        <tr class="hover:bg-gray-50/50 group">
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap sticky left-0 bg-white group-hover:bg-gray-50/50 z-10 shadow-[1px_0_0_0_#f3f4f6]">
                                <p class="font-bold text-brand-dark">Mark Santos</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00005</p>
                            </td>
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap">BS Computer Science</td>
                            <td class="py-3.5 px-4 sm:px-5 whitespace-nowrap">1st Year</td>
                            <td class="py-3.5 px-4 sm:px-5 text-center whitespace-nowrap">
                                <span class="px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-red-100 text-red-800">Rejected</span>
                            </td>
                            <td class="py-3.5 px-4 sm:px-5 text-right whitespace-nowrap text-red-600 font-medium">
                                Prerequisite CS101 unfulfilled
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- EVALUATE & ADJUST SUBJECTS MODAL -->
    <div id="modal_review_subjects" class="fixed inset-0 bg-gray-900/50 backdrop-blur-xs hidden z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg shadow-xl max-w-2xl w-full p-5 sm:p-6 space-y-4 max-h-[90vh] overflow-y-auto">
            <div class="flex items-center justify-between border-b border-gray-100 pb-3">
                <div>
                    <h3 class="text-base font-bold text-brand-dark" id="modal_student_name">Review Student Request</h3>
                    <p class="text-xs text-gray-500" id="modal_student_info">2026-00001 • BS Computer Science</p>
                </div>
                <button onclick="closeReviewModal()" class="text-gray-400 hover:text-gray-600"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>

            <!-- Subject Load Table -->
            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-700">Requested Subject Load</span>
                    <span class="text-xs font-bold text-brand-primary">Total Units: <span id="lbl_total_units">9</span> / 24 Max</span>
                </div>
                <div class="border border-gray-200 rounded-md overflow-x-auto">
                    <table class="w-full text-left text-xs min-w-[320px]">
                        <thead class="bg-gray-50 border-b border-gray-200 text-gray-600 uppercase font-semibold">
                            <tr>
                                <th class="py-2 px-3">Subject Code</th>
                                <th class="py-2 px-3">Subject Name</th>
                                <th class="py-2 px-3 text-center">Units</th>
                                <th class="py-2 px-3 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody id="tbody_subject_list" class="divide-y divide-gray-100 font-medium">
                            <tr>
                                <td class="py-2 px-3 font-mono font-bold">CCS109</td>
                                <td class="py-2 px-3">System Analysis & Design</td>
                                <td class="py-2 px-3 text-center">3</td>
                                <td class="py-2 px-3 text-right">
                                    <button onclick="removeSubject(this, 3)" class="text-red-600 hover:underline font-semibold text-[11px]">Remove</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-3 font-mono font-bold">CS201</td>
                                <td class="py-2 px-3">Data Structures & Algorithms</td>
                                <td class="py-2 px-3 text-center">3</td>
                                <td class="py-2 px-3 text-right">
                                    <button onclick="removeSubject(this, 3)" class="text-red-600 hover:underline font-semibold text-[11px]">Remove</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-3 font-mono font-bold">MATH102</td>
                                <td class="py-2 px-3">Discrete Mathematics</td>
                                <td class="py-2 px-3 text-center">3</td>
                                <td class="py-2 px-3 text-right">
                                    <button onclick="removeSubject(this, 3)" class="text-red-600 hover:underline font-semibold text-[11px]">Remove</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Add Extra Subject Selector -->
                <div id="container_add_subject" class="flex flex-col sm:flex-row gap-2 pt-1">
                    <select id="select_add_subject" class="flex-1 px-3 py-1.5 text-xs border border-gray-300 rounded-md bg-white outline-none">
                        <option value="" disabled selected>Add additional subject from curriculum...</option>
                        <option value="GE101|General Psychology|3">GE101 - General Psychology (3 Units)</option>
                        <option value="CS202|Web Development|3">CS202 - Web Development (3 Units)</option>
                    </select>
                    <button onclick="addSubjectFromSelect()" class="px-3 py-1.5 bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-md text-xs font-semibold text-gray-700">Add Subject</button>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end space-x-2 pt-3 border-t border-gray-100">
                <button onclick="closeReviewModal()" class="px-3 py-1.5 border border-gray-300 rounded-md text-xs font-semibold text-gray-700 hover:bg-gray-50">Close</button>
                <button id="btn_approve_modal" onclick="approveRequest()" class="px-4 py-1.5 bg-brand-primary text-white rounded-md text-xs font-semibold hover:bg-brand-primary/90">Approve Application</button>
            </div>
        </div>
    </div>

    <!-- MANDATORY REJECTION REASON MODAL -->
    <div id="modal_reject_reason" class="fixed inset-0 bg-gray-900/50 backdrop-blur-xs hidden z-40 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg shadow-xl max-w-md w-full p-6 space-y-4">
            <h3 class="text-base font-bold text-brand-dark">Reject Enrollment Application</h3>
            <p class="text-xs text-gray-500">In accordance with Section 7 & 12, a specific reason is required when rejecting an enrollment request.</p>

            <div>
                <label for="txt_rejection_reason" class="block text-xs font-semibold text-gray-700 mb-1">Rejection Reason *</label>
                <textarea id="txt_rejection_reason" rows="3" required placeholder="e.g., Failed prerequisite subjects, missing clearance, or exceeded maximum unit limits..." class="w-full px-3 py-2 border border-gray-300 rounded-md text-xs outline-none focus:ring-1 focus:ring-red-500"></textarea>
            </div>

            <div class="flex justify-end space-x-2 pt-2">
                <button onclick="closeRejectModal()" class="px-3 py-1.5 border border-gray-300 rounded-md text-xs font-semibold text-gray-700 hover:bg-gray-50">Cancel</button>
                <button onclick="submitRejection()" class="px-4 py-1.5 bg-red-600 text-white rounded-md text-xs font-semibold hover:bg-red-700">Confirm Rejection</button>
            </div>
        </div>
    </div>

    <footer class="bg-white border-t border-gray-200 mt-12 py-6 text-center text-xs text-gray-500">
        <p>Paxton University Student Services Information System (SSIS) &copy; 2026. All Rights Reserved.</p>
    </footer>

    <script>
        lucide.createIcons();

        let currentTotalUnits = 9;
        let selectedStudentNo = '';

        function showToast(type, message) {
            const toastTypes = {
                'success': {
                    bg: 'bg-emerald-50 border-emerald-200 text-emerald-800',
                    icon: 'check-circle'
                },
                'error': {
                    bg: 'bg-red-50 border-red-200 text-red-800',
                    icon: 'alert-circle'
                },
                'warning': {
                    bg: 'bg-amber-50 border-amber-200 text-amber-800',
                    icon: 'alert-triangle'
                },
                'info': {
                    bg: 'bg-blue-50 border-blue-200 text-blue-800',
                    icon: 'info'
                }
            };

            const config = toastTypes[type.toLowerCase()] || toastTypes['info'];
            const toastId = 'toast_' + Date.now();

            const toastHtml = `
                <div id="${toastId}" class="pointer-events-auto flex items-center justify-between p-3.5 rounded-md border ${config.bg} shadow-md transition-all duration-300 transform translate-y-2 opacity-0">
                    <div class="flex items-center space-x-2.5">
                        <i data-lucide="${config.icon}" class="w-4 h-4 flex-shrink-0"></i>
                        <span class="text-xs font-medium">${message}</span>
                    </div>
                    <button onclick="$('#${toastId}').remove()" class="ml-3 text-gray-400 hover:text-gray-600 focus:outline-none">
                        <i data-lucide="x" class="w-3.5 h-3.5"></i>
                    </button>
                </div>
            `;

            $('#toast_container').append(toastHtml);
            lucide.createIcons();

            setTimeout(() => {
                $(`#${toastId}`).removeClass('translate-y-2 opacity-0').addClass('translate-y-0 opacity-100');
            }, 10);

            setTimeout(() => {
                $(`#${toastId}`).removeClass('translate-y-0 opacity-100').addClass('translate-y-2 opacity-0');
                setTimeout(() => {
                    $(`#${toastId}`).remove();
                }, 300);
            }, 4000);
        }

        $('#btn_mobile_menu').on('click', function() {
            $('#mobile_nav_menu').toggleClass('hidden');
            $('#icon_menu_open').toggleClass('hidden');
            $('#icon_menu_close').toggleClass('hidden');
        });

        function openReviewModal(studentNo, studentName, program, yearLevel, isReadOnly = false) {
            selectedStudentNo = studentNo;
            $('#modal_student_name').text('Review Request: ' + studentName);
            $('#modal_student_info').text(studentNo + ' • ' + program + ' (' + yearLevel + ')');

            if (isReadOnly) {
                $('#container_add_subject').addClass('hidden');
                $('#btn_approve_modal').addClass('hidden');
            } else {
                $('#container_add_subject').removeClass('hidden');
                $('#btn_approve_modal').removeClass('hidden');
            }

            $('#modal_review_subjects').removeClass('hidden');
        }

        function closeReviewModal() {
            $('#modal_review_subjects').addClass('hidden');
        }

        function removeSubject(btn, units) {
            $(btn).closest('tr').remove();
            currentTotalUnits -= units;
            $('#lbl_total_units').text(currentTotalUnits);
            showToast('info', 'Subject removed from evaluation load.');
        }

        function addSubjectFromSelect() {
            const val = $('#select_add_subject').val();
            if (!val) {
                showToast('warning', 'Please select a subject to add.');
                return;
            }

            const [code, name, unitsStr] = val.split('|');
            const units = parseInt(unitsStr);

            if (currentTotalUnits + units > 24) {
                showToast('error', 'Cannot add subject. Maximum limit of 24 units exceeded.');
                return;
            }

            const row = `
                <tr>
                    <td class="py-2 px-3 font-mono font-bold">${code}</td>
                    <td class="py-2 px-3">${name}</td>
                    <td class="py-2 px-3 text-center">${units}</td>
                    <td class="py-2 px-3 text-right">
                        <button onclick="removeSubject(this, ${units})" class="text-red-600 hover:underline font-semibold text-[11px]">Remove</button>
                    </td>
                </tr>
            `;

            $('#tbody_subject_list').append(row);
            currentTotalUnits += units;
            $('#lbl_total_units').text(currentTotalUnits);
            $('#select_add_subject').val('');
            showToast('success', `${code} added successfully.`);
        }

        function openRejectModal(studentNo) {
            selectedStudentNo = studentNo;
            $('#txt_rejection_reason').val('');
            $('#modal_reject_reason').removeClass('hidden');
        }

        function closeRejectModal() {
            $('#modal_reject_reason').addClass('hidden');
        }

        function submitRejection() {
            const reason = $('#txt_rejection_reason').val().trim();
            if (!reason) {
                showToast('warning', 'Please enter a rejection reason before confirming.');
                return;
            }
            closeRejectModal();
            showToast('error', `Application ${selectedStudentNo} has been rejected.`);
        }

        function approveRequest() {
            closeReviewModal();
            showToast('success', `Subject load saved. Enrollment request for ${selectedStudentNo} is now Approved.`);
        }

        function confirmEnrolled(studentNo) {
            showToast('success', `Student ${studentNo} is now officially Enrolled.`);
        }
    </script>
</body>

</html>