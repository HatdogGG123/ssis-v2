<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Student Clearance</title>
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

<body class="bg-gray-50 font-sans text-brand-dark antialiased min-h-screen flex flex-col relative">

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
                    <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Enrollment</a>
                    <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Grades</a>
                    <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
                    <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Clearance</a>
                    <a href="report.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Report</a>
                    <a href="notifications.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Notifications</a>
                    <a href="announcements.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Announcements</a>
                </nav>

                <!-- Profile Info & Mobile Toggle -->
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

        <!-- Mobile Navigation Menu -->
        <div id="mobile_nav_menu" class="hidden lg:hidden border-t border-gray-200 bg-white px-4 pt-2 pb-4 space-y-1 text-xs shadow-md">
            <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Enrollment</a>
            <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Grades</a>
            <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Clearance</a>
            <a href="report.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Report</a>
            <a href="notifications.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Notifications</a>
            <a href="announcements.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Announcements</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">
        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Student Clearance Management</h1>
                <p class="text-sm text-gray-500">Review Registrar requirements, approve or reject submissions, and inspect overall student clearance status.</p>
            </div>
            <div class="grid grid-cols-3 gap-3">
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Fully Cleared</span>
                    <span class="text-base font-bold text-emerald-700">142</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Pending Review</span>
                    <span class="text-base font-bold text-amber-700">18</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Rejected / Holds</span>
                    <span class="text-base font-bold text-red-700">5</span>
                </div>
            </div>
        </section>

        <!-- Clearance Queue & Matrix -->
        <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
            <div class="p-5 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <h2 class="text-base font-bold text-brand-dark">Registrar Clearance Queue</h2>
                <div class="flex items-center space-x-2">
                    <input type="text" placeholder="Search Student Name or ID..." class="px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary">
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full min-w-[750px] text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase font-semibold">
                            <th class="py-3 px-5 whitespace-nowrap">Student</th>
                            <th class="py-3 px-5 min-w-[180px]">Registrar Requirement</th>
                            <th class="py-3 px-5 text-center whitespace-nowrap">Registrar Status</th>
                            <th class="py-3 px-5 text-center whitespace-nowrap">Overall Clearance</th>
                            <th class="py-3 px-5 text-right whitespace-nowrap">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 font-medium text-gray-700">
                        <!-- Student 1: Pending Review -->
                        <tr class="hover:bg-gray-50/50">
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-bold text-brand-dark">John Doe</p>
                                <p class="text-gray-400 text-[11px] font-display">2026-00001 (BSCS)</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-semibold text-brand-dark">Form 137 / Official Transcript</p>
                                <p class="text-gray-400 text-[11px]">Submitted: Oct 01, 2026</p>
                            </td>
                            <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                <span class="px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-amber-100 text-amber-800">Pending Review</span>
                            </td>
                            <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800">Pending Holds</span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1 whitespace-nowrap">
                                <button type="button" onclick="promptApproveRequirement('2026-00001', 'John Doe')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-emerald-600 text-white hover:bg-emerald-700">Approve</button>
                                <button type="button" onclick="openRejectModal('2026-00001', 'John Doe', 'Form 137 / Official Transcript')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold border border-red-200 text-red-600 bg-white hover:bg-red-50">Reject</button>
                                <button type="button" onclick="openOverallClearanceModal('John Doe', '2026-00001', 'BS Computer Science', 'Pending Holds', 'Cleared', 'Cleared', 'Cleared', 'Pending Review')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">View Overall</button>
                            </td>
                        </tr>

                        <!-- Student 2: Cleared -->
                        <tr class="hover:bg-gray-50/50">
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-bold text-brand-dark">Jane Smith</p>
                                <p class="text-gray-400 text-[11px] font-display">2026-00002 (BSIT)</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-semibold text-brand-dark">Honorable Dismissal & Birth Cert</p>
                                <p class="text-gray-400 text-[11px]">Verified on Sep 28, 2026</p>
                            </td>
                            <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                <span class="px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Cleared</span>
                            </td>
                            <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Fully Cleared</span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1 whitespace-nowrap">
                                <button type="button" onclick="openOverallClearanceModal('Jane Smith', '2026-00002', 'BS Information Technology', 'Fully Cleared', 'Cleared', 'Cleared', 'Cleared', 'Cleared')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">View Overall</button>
                            </td>
                        </tr>

                        <!-- Student 3: Rejected -->
                        <tr class="hover:bg-gray-50/50">
                            <td class="py-3.5 px-5 whitespace-nowrap">
                                <p class="font-bold text-brand-dark">Alex Mercer</p>
                                <p class="text-gray-400 text-[11px] font-display">2026-00003 (BSIS)</p>
                            </td>
                            <td class="py-3.5 px-5">
                                <p class="font-semibold text-brand-dark">PSA Birth Certificate Copy</p>
                                <p class="text-gray-400 text-[11px]">Reason: Unreadable / Blurred Copy</p>
                            </td>
                            <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                <span class="px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-red-100 text-red-800">Rejected</span>
                            </td>
                            <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-red-100 text-red-800">Blocked</span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1 whitespace-nowrap">
                                <button type="button" onclick="promptApproveRequirement('2026-00003', 'Alex Mercer')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-emerald-600 text-white hover:bg-emerald-700">Re-evaluate</button>
                                <button type="button" onclick="openOverallClearanceModal('Alex Mercer', '2026-00003', 'BS Information Systems', 'Blocked', 'Cleared', 'Unpaid Balance', 'Cleared', 'Rejected')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">View Overall</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Modal: Approve Confirmation -->
    <div id="modal_approve_confirm" class="fixed inset-0 z-50 hidden bg-gray-900/50 flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-sm overflow-hidden flex flex-col p-5 space-y-4">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center flex-shrink-0">
                    <i data-lucide="check-circle-2" class="w-6 h-6"></i>
                </div>
                <div>
                    <h3 class="text-base font-bold text-brand-dark">Confirm Approval</h3>
                    <p class="text-xs text-gray-500">Grant Registrar sign-off for student clearance?</p>
                </div>
            </div>
            <p id="approve_confirm_text" class="text-xs text-gray-600 bg-gray-50 p-3 rounded-md border border-gray-100"></p>
            <div class="flex items-center justify-end space-x-2 pt-2">
                <button type="button" onclick="closeApproveModal()" class="px-3.5 py-1.5 font-semibold text-xs border border-gray-200 bg-white text-gray-700 rounded-md hover:bg-gray-50">Cancel</button>
                <button type="button" id="btn_confirm_approve" class="px-3.5 py-1.5 font-semibold text-xs bg-emerald-600 text-white rounded-md hover:bg-emerald-700">Approve Clearance</button>
            </div>
        </div>
    </div>

    <!-- Modal: Reject with Reason -->
    <div id="modal_reject_reason" class="fixed inset-0 z-50 hidden bg-gray-900/50 flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-md overflow-hidden flex flex-col">
            <div class="p-5 border-b border-gray-200 bg-gray-50/50 flex items-center justify-between">
                <div>
                    <h3 class="text-base font-bold text-brand-dark">Reject Clearance Requirement</h3>
                    <p class="text-xs text-gray-500">Provide a mandatory reason for rejecting this student's submission</p>
                </div>
                <button type="button" onclick="closeRejectModal()" class="text-gray-400 hover:text-gray-600"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>

            <form id="form_reject_clearance" onsubmit="submitRejection(event)" class="p-5 space-y-4 text-xs">
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Student</label>
                    <input type="text" id="reject_student_name" readonly class="w-full bg-gray-100 border border-gray-200 rounded-md px-3 py-2 font-medium text-gray-700">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Requirement Item</label>
                    <input type="text" id="reject_requirement_item" readonly class="w-full bg-gray-100 border border-gray-200 rounded-md px-3 py-2 font-medium text-gray-700">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Rejection Reason <span class="text-red-500">*</span></label>
                    <textarea id="reject_reason_text" rows="3" required placeholder="Specify why this document/requirement is rejected (e.g. Unreadable copy, incomplete seal, invalid file)..." class="w-full border border-gray-200 rounded-md p-2.5 focus:outline-none focus:ring-2 focus:ring-brand-primary/20"></textarea>
                </div>

                <div class="pt-3 border-t border-gray-100 flex items-center justify-end space-x-2">
                    <button type="button" onclick="closeRejectModal()" class="px-4 py-2 font-semibold border border-gray-200 bg-white text-gray-700 rounded-md hover:bg-gray-50">Cancel</button>
                    <button type="submit" class="px-4 py-2 font-semibold bg-red-600 text-white rounded-md hover:bg-red-700">Confirm Rejection</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal: View Overall Clearance Details -->
    <div id="modal_overall_clearance" class="fixed inset-0 z-50 hidden bg-gray-900/50 flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-xl overflow-hidden flex flex-col">
            <div class="p-5 border-b border-gray-200 bg-gray-50/50 flex items-center justify-between">
                <div>
                    <h3 class="text-base font-bold text-brand-dark">Overall Student Clearance Profile</h3>
                    <p class="text-xs text-gray-500">Comprehensive view across all university departments</p>
                </div>
                <button type="button" onclick="closeOverallClearanceModal()" class="text-gray-400 hover:text-gray-600"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>

            <div class="p-6 space-y-5 text-xs">
                <!-- Student Header Info -->
                <div class="p-4 bg-gray-50 border border-gray-200 rounded-md flex items-center justify-between">
                    <div>
                        <p id="modal_student_name" class="font-bold text-sm text-brand-dark">John Doe</p>
                        <p id="modal_student_id" class="text-gray-500 font-display">2026-00001 • BS Computer Science</p>
                    </div>
                    <span id="modal_overall_badge" class="px-2.5 py-1 rounded-md text-xs font-bold bg-amber-100 text-amber-800">Pending Holds</span>
                </div>

                <!-- Departmental Status List -->
                <div class="space-y-3">
                    <h4 class="font-bold text-xs uppercase tracking-wider text-gray-500">Departmental Clearances</h4>

                    <div class="divide-y divide-gray-100 border border-gray-200 rounded-md overflow-hidden">
                        <!-- Registrar Office -->
                        <div class="p-3 bg-white flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <i data-lucide="file-check" class="w-4 h-4 text-gray-400"></i>
                                <div>
                                    <p class="font-bold text-brand-dark">Registrar's Requirement</p>
                                    <p class="text-[10px] text-gray-400">Form 137 / Transcripts / Credentials</p>
                                </div>
                            </div>
                            <span id="badge_status_registrar" class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800">Pending Review</span>
                        </div>

                        <!-- University Library -->
                        <div class="p-3 bg-white flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <i data-lucide="book-open" class="w-4 h-4 text-gray-400"></i>
                                <div>
                                    <p class="font-bold text-brand-dark">University Library</p>
                                    <p class="text-[10px] text-gray-400">No unreturned books or outstanding fines</p>
                                </div>
                            </div>
                            <span id="badge_status_library" class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span>
                        </div>

                        <!-- Accounting Office -->
                        <div class="p-3 bg-white flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <i data-lucide="credit-card" class="w-4 h-4 text-gray-400"></i>
                                <div>
                                    <p class="font-bold text-brand-dark">Accounting & Finance</p>
                                    <p class="text-[10px] text-gray-400">Tuition fees & university account settlement</p>
                                </div>
                            </div>
                            <span id="badge_status_accounting" class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span>
                        </div>

                        <!-- College Department -->
                        <div class="p-3 bg-white flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <i data-lucide="building" class="w-4 h-4 text-gray-400"></i>
                                <div>
                                    <p class="font-bold text-brand-dark">College Dean / Department</p>
                                    <p class="text-[10px] text-gray-400">Lab equipment & departmental clearance</p>
                                </div>
                            </div>
                            <span id="badge_status_department" class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-4 border-t border-gray-200 bg-gray-50/50 flex items-center justify-end space-x-2">
                <button type="button" onclick="closeOverallClearanceModal()" class="px-4 py-2 font-semibold text-xs border border-gray-200 bg-white text-gray-700 rounded-md hover:bg-gray-50">Close Profile</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12 py-6 text-center text-xs text-gray-500">
        <p>Paxton University Student Services Information System (SSIS) &copy; 2026. All Rights Reserved.</p>
    </footer>

    <!-- JavaScript Logic -->
    <script src="../../js/helperFunction.js"></script>
    <script>
        let selectedStudentForApproval = null;

        $(document).ready(function() {
            lucide.createIcons();
        });

        // Approve Modal Handler (Replaces browser confirm)
        function promptApproveRequirement(studentId, studentName) {
            selectedStudentForApproval = {
                id: studentId,
                name: studentName
            };
            $('#approve_confirm_text').html(`Approve Registrar requirement clearance for <strong>${studentName}</strong> (${studentId})?`);
            $('#modal_approve_confirm').removeClass('hidden');
        }

        function closeApproveModal() {
            $('#modal_approve_confirm').addClass('hidden');
            selectedStudentForApproval = null;
        }

        $('#btn_confirm_approve').on('click', function() {
            if (selectedStudentForApproval) {
                showToast(`Registrar clearance approved for ${selectedStudentForApproval.name}`, 'success');
                closeApproveModal();
            }
        });

        // Reject Modal Handler
        function openRejectModal(studentId, studentName, requirement) {
            $('#reject_student_name').val(`${studentName} (${studentId})`);
            $('#reject_requirement_item').val(requirement);
            $('#reject_reason_text').val('');
            $('#modal_reject_reason').removeClass('hidden');
        }

        function closeRejectModal() {
            $('#modal_reject_reason').addClass('hidden');
        }

        function submitRejection(e) {
            e.preventDefault();
            const reason = $('#reject_reason_text').val();
            closeRejectModal();
            showToast(`Requirement rejected: "${reason}"`, 'error');
        }

        // View Overall Clearance Modal
        function openOverallClearanceModal(name, id, program, overallStatus, libStatus, acctStatus, deptStatus, regStatus) {
            $('#modal_student_name').text(name);
            $('#modal_student_id').text(`${id} • ${program}`);
            $('#modal_overall_badge').text(overallStatus);

            let regBadgeClass = regStatus === 'Cleared' ? 'bg-emerald-100 text-emerald-800' : (regStatus === 'Rejected' ? 'bg-red-100 text-red-800' : 'bg-amber-100 text-amber-800');
            $('#badge_status_registrar').attr('class', `px-2 py-0.5 rounded-full text-[10px] font-bold ${regBadgeClass}`).text(regStatus);

            $('#badge_status_library').text(libStatus);
            $('#badge_status_accounting').text(acctStatus);
            $('#badge_status_department').text(deptStatus);

            $('#modal_overall_clearance').removeClass('hidden');
        }

        function closeOverallClearanceModal() {
            $('#modal_overall_clearance').addClass('hidden');
        }

        $('#btn_mobile_menu').on('click', function() {
            $('#mobile_nav_menu').toggleClass('hidden');
            $('#icon_menu_open').toggleClass('hidden');
            $('#icon_menu_close').toggleClass('hidden');
        });
    </script>
</body>

</html>