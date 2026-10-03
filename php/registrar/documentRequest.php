<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Document Request Management</title>
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

    <!-- Navigation Header with Mobile Menu Support -->
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

                <!-- Desktop Navigation Links (Hidden on Mobile) -->
                <nav class="hidden lg:flex items-center space-x-1 text-xs">
                    <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Enrollment</a>
                    <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Grades</a>
                    <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Document Requests</a>
                    <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
                    <a href="notifications.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Notifications</a>
                </nav>

                <!-- Profile Info & Mobile Toggle -->
                <div class="flex items-center space-x-3">
                    <div class="hidden lg:flex items-center space-x-2">
                        <div class="text-right">
                            <p class="text-xs font-semibold text-brand-dark">Registrar Staff</p>
                            <p class="text-[10px] text-gray-500 uppercase font-bold">Registrar Module</p>
                        </div>
                    </div>

                    <!-- Mobile Menu Button (Visible only on small screens) -->
                    <button type="button" id="btn_mobile_menu" class="lg:hidden p-2 rounded-md text-gray-500 hover:text-brand-dark hover:bg-gray-100 focus:outline-none">
                        <i data-lucide="menu" id="icon_menu_open" class="w-6 h-6"></i>
                        <i data-lucide="x" id="icon_menu_close" class="w-6 h-6 hidden"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Dropdown Container -->
        <div id="mobile_nav_menu" class="hidden lg:hidden border-t border-gray-200 bg-white px-4 pt-2 pb-4 space-y-1 text-xs shadow-md">
            <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Enrollment</a>
            <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Grades</a>
            <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Document Requests</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
            <a href="notifications.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Notifications</a>

            <div class="pt-3 border-t border-gray-100 flex items-center justify-between px-3">
                <div>
                    <p class="text-xs font-semibold text-brand-dark">Registrar Staff</p>
                    <p class="text-[10px] text-gray-500 uppercase font-bold">Registrar Module</p>
                </div>
                <a href="logout.php" class="text-xs text-red-600 font-semibold hover:underline">Log Out</a>
            </div>
        </div>
    </header>

    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">

        <div id="container_alert_message" class="hidden rounded-md p-4 text-xs font-medium border flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <i id="alert_icon" class="w-4 h-4 shrink-0"></i>
                <span id="alert_text"></span>
            </div>
            <button type="button" id="btn_dismiss_alert" class="text-gray-400 hover:text-gray-600"><i data-lucide="x" class="w-4 h-4"></i></button>
        </div>

        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="space-y-1">
                <div class="flex items-center space-x-2">
                    <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Document Request Queue</h1>
                    <span class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800">Section 12 Compliant</span>
                </div>
                <p class="text-sm text-gray-500">Process transcripts, certifications, and diplomas through authorized statuses, manage rejections, and confirm pickups.</p>
            </div>
            <div class="grid grid-cols-3 gap-3">
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Pending</span>
                    <span class="text-base font-bold text-amber-700" id="cnt_pending">2</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Processing</span>
                    <span class="text-base font-bold text-blue-700" id="cnt_processing">1</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Ready / Pickup</span>
                    <span class="text-base font-bold text-purple-700" id="cnt_ready">1</span>
                </div>
            </div>
        </section>

        <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
            <div class="p-5 border-b border-gray-100 space-y-4">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h2 class="text-base font-bold text-brand-dark">Request Fulfillment Queue</h2>
                        <p class="text-xs text-gray-500">Filter, update statuses sequentially, reject with reasons, or complete upon student pickup</p>
                    </div>
                    <div class="relative min-w-[280px]">
                        <i data-lucide="search" class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="text" id="input_search_doc" placeholder="Search Request Ref #, Student Name..." class="w-full pl-9 pr-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2">
                    <div>
                        <label for="filter_status" class="block text-[10px] font-bold uppercase tracking-wider text-gray-500 mb-1">Allowed Status (Section 12)</label>
                        <select id="filter_status" onchange="filterQueueTable()" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary bg-white">
                            <option value="">All Statuses</option>
                            <option value="Pending">Pending Review</option>
                            <option value="Processing">Processing / Printing</option>
                            <option value="Ready for Pickup">Ready for Pickup</option>
                            <option value="Completed">Completed (Picked Up)</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                    <div>
                        <label for="filter_doc_type" class="block text-[10px] font-bold uppercase tracking-wider text-gray-500 mb-1">Document Type</label>
                        <select id="filter_doc_type" onchange="filterQueueTable()" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary bg-white">
                            <option value="">All Document Types</option>
                            <option value="TOR">Official Transcript of Records (TOR)</option>
                            <option value="COG">Certificate of Grades (COG)</option>
                            <option value="GMC">Good Moral Certificate</option>
                            <option value="COE">Certificate of Enrollment</option>
                        </select>
                    </div>
                    <div>
                        <label for="filter_fulfillment" class="block text-[10px] font-bold uppercase tracking-wider text-gray-500 mb-1">Fulfillment Mode</label>
                        <select id="filter_fulfillment" onchange="filterQueueTable()" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary bg-white">
                            <option value="">All Modes</option>
                            <option value="Pickup">On-Campus Pickup</option>
                            <option value="Digital">Digital / PDF Copy</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table id="table_document_requests" class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase font-semibold">
                            <th class="py-3 px-5">Ref # & Date</th>
                            <th class="py-3 px-5">Student Information</th>
                            <th class="py-3 px-5">Requested Document</th>
                            <th class="py-3 px-5 text-center">Status (Section 12)</th>
                            <th class="py-3 px-5 text-right">Queue Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_document_requests" class="divide-y divide-gray-100 text-gray-700 font-medium">
                        <tr class="hover:bg-gray-50/50" data-status="Pending" data-doc="TOR" data-mode="Pickup">
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-mono font-bold text-brand-primary">REQ-2026-0891</p>
                                <p class="text-gray-400 text-[11px]">Oct 02, 2026 • 09:30 AM</p>
                            </td>
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-bold text-brand-dark">John Doe</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00001 (BSCS)</p>
                            </td>
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-semibold text-brand-dark">Official Transcript of Records (TOR)</p>
                                <p class="text-gray-400 text-[11px]">Qty: 2 Copies • Pickup</p>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-amber-100 text-amber-800">Pending Review</span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1">
                                <button type="button" onclick="openWorkflowModal('REQ-2026-0891', 'John Doe', 'Official Transcript of Records (TOR)', 'Pending')" class="inline-flex items-center space-x-1 px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">
                                    <i data-lucide="play" class="w-3.5 h-3.5"></i>
                                    <span>Process Status</span>
                                </button>
                                <button type="button" onclick="openRejectModal('REQ-2026-0891', 'John Doe')" class="inline-flex items-center space-x-1 px-2.5 py-1.5 rounded-md text-xs font-semibold border border-red-200 text-red-600 bg-white hover:bg-red-50">
                                    <i data-lucide="x-circle" class="w-3.5 h-3.5"></i>
                                    <span>Reject</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50/50 bg-purple-50/10" data-status="Ready for Pickup" data-doc="GMC" data-mode="Pickup">
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-mono font-bold text-brand-primary">REQ-2026-0870</p>
                                <p class="text-gray-400 text-[11px]">Sep 29, 2026 • 11:00 AM</p>
                            </td>
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-bold text-brand-dark">Alex Mercer</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00003 (BSIS)</p>
                            </td>
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p class="font-semibold text-brand-dark">Good Moral Certificate</p>
                                <p class="text-gray-400 text-[11px]">Qty: 1 Copy • Campus Pickup</p>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-purple-100 text-purple-800">Ready for Pickup</span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1">
                                <button type="button" onclick="openPickupCompletionModal('REQ-2026-0870', 'Alex Mercer', 'Good Moral Certificate')" class="inline-flex items-center space-x-1 px-2.5 py-1.5 rounded-md text-xs font-semibold bg-emerald-600 text-white hover:bg-emerald-700">
                                    <i data-lucide="check-circle" class="w-3.5 h-3.5"></i>
                                    <span>Mark Completed</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>

    <!-- Modal 1: Update Status -->
    <div id="modal_status_workflow" class="fixed inset-0 z-50 hidden bg-gray-900/50 flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-lg overflow-hidden flex flex-col">
            <div class="p-5 border-b border-gray-200 bg-gray-50/50 flex items-center justify-between">
                <h3 class="text-base font-bold text-brand-dark">Update Request Status</h3>
                <button type="button" onclick="closeModal('modal_status_workflow')" class="text-gray-400 hover:text-gray-600"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="p-6 space-y-4 text-xs">
                <div class="p-3 bg-gray-50 border border-gray-200 rounded-md space-y-1">
                    <p id="wf_ref_num" class="font-mono font-bold text-brand-primary text-sm">REQ-2026-0891</p>
                    <p id="wf_student_name" class="font-bold text-brand-dark">John Doe</p>
                </div>
                <div class="space-y-2">
                    <label for="select_next_status" class="block font-bold text-brand-dark">Next Allowed Status:</label>
                    <select id="select_next_status" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md bg-white"></select>
                </div>
            </div>
            <div class="p-5 border-t border-gray-200 bg-gray-50/50 flex items-center justify-end space-x-2">
                <button type="button" onclick="closeModal('modal_status_workflow')" class="px-4 py-2 font-semibold text-gray-600">Cancel</button>
                <button type="button" onclick="confirmStatusUpdate()" class="px-4 py-2 font-semibold text-xs bg-brand-primary text-white rounded-md">Update Status</button>
            </div>
        </div>
    </div>

    <!-- Modal 2: Reject -->
    <div id="modal_reject_request" class="fixed inset-0 z-50 hidden bg-gray-900/50 flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-lg overflow-hidden flex flex-col">
            <div class="p-5 border-b border-gray-200 bg-red-50/60 flex items-center justify-between">
                <h3 class="text-base font-bold text-red-900">Reject Document Request</h3>
                <button type="button" onclick="closeModal('modal_reject_request')" class="text-gray-400 hover:text-gray-600"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="p-6 space-y-4 text-xs">
                <div class="space-y-1">
                    <label for="input_reject_reason_text" class="block font-bold text-red-800">Rejection Reason *</label>
                    <textarea id="input_reject_reason_text" rows="3" placeholder="Specify why this document request cannot be processed..." class="w-full p-2.5 text-xs border border-red-300 rounded-md"></textarea>
                </div>
            </div>
            <div class="p-5 border-t border-gray-200 bg-gray-50/50 flex items-center justify-end space-x-2">
                <button type="button" onclick="closeModal('modal_reject_request')" class="px-4 py-2 font-semibold text-gray-600">Cancel</button>
                <button type="button" onclick="confirmRejection()" class="px-4 py-2 font-semibold text-xs bg-red-600 text-white rounded-md">Confirm Rejection</button>
            </div>
        </div>
    </div>

    <!-- Modal 3: Mark Completed -->
    <div id="modal_pickup_completion" class="fixed inset-0 z-50 hidden bg-gray-900/50 flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-lg overflow-hidden flex flex-col">
            <div class="p-5 border-b border-gray-200 bg-emerald-50/60 flex items-center justify-between">
                <h3 class="text-base font-bold text-emerald-900">Confirm Pickup & Complete</h3>
                <button type="button" onclick="closeModal('modal_pickup_completion')" class="text-gray-400 hover:text-gray-600"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="p-6 space-y-4 text-xs">
                <div class="space-y-1">
                    <label for="input_received_by" class="block font-bold text-brand-dark">Claimant / Receiver Name:</label>
                    <input type="text" id="input_received_by" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md">
                </div>
            </div>
            <div class="p-5 border-t border-gray-200 bg-gray-50/50 flex items-center justify-end space-x-2">
                <button type="button" onclick="closeModal('modal_pickup_completion')" class="px-4 py-2 font-semibold text-gray-600">Cancel</button>
                <button type="button" onclick="confirmPickupCompletion()" class="px-4 py-2 font-semibold text-xs bg-emerald-600 text-white rounded-md">Mark Completed</button>
            </div>
        </div>
    </div>

    <footer class="bg-white border-t border-gray-200 mt-12 py-6 text-center text-xs text-gray-500">
        <p>Paxton University Student Services Information System (SSIS) &copy; 2026. All Rights Reserved.</p>
    </footer>

    <script>
        let currentTargetRef = '';
        $(document).ready(function() {
            lucide.createIcons();
            $('#btn_dismiss_alert').on('click', function() {
                $('#container_alert_message').addClass('hidden');
            });
        });

        function closeModal(id) {
            $(`#${id}`).addClass('hidden');
        }

        function openWorkflowModal(refNum, studentName, docTitle, currentStatus) {
            currentTargetRef = refNum;
            $('#wf_ref_num').text(refNum);
            $('#wf_student_name').text(studentName);
            const $select = $('#select_next_status').empty();
            if (currentStatus === 'Pending') {
                $select.append('<option value="Processing">Processing / Printing</option>');
                $select.append('<option value="Ready for Pickup">Ready for Pickup</option>');
            }
            $('#modal_status_workflow').removeClass('hidden');
        }

        function confirmStatusUpdate() {
            closeModal('modal_status_workflow');
            showAlert('success', `Request ${currentTargetRef} updated.`);
        }

        function openRejectModal(refNum) {
            currentTargetRef = refNum;
            $('#modal_reject_request').removeClass('hidden');
        }

        function confirmRejection() {
            closeModal('modal_reject_request');
            showAlert('error', `Request ${currentTargetRef} rejected.`);
        }

        function openPickupCompletionModal(refNum, studentName) {
            currentTargetRef = refNum;
            $('#input_received_by').val(studentName);
            $('#modal_pickup_completion').removeClass('hidden');
        }

        function confirmPickupCompletion() {
            closeModal('modal_pickup_completion');
            showAlert('success', `Request ${currentTargetRef} marked as Completed.`);
        }

        function showAlert(type, message) {
            $('#alert_text').text(message);
            $('#container_alert_message').removeClass('hidden').addClass(type === 'success' ? 'bg-emerald-50 border-emerald-200 text-emerald-800' : 'bg-red-50 border-red-200 text-red-800');
        }

        function filterQueueTable() {
            /* filter logic */
        }

        $('#btn_mobile_menu').on('click', function() {
            $('#mobile_nav_menu').toggleClass('hidden');
            $('#icon_menu_open').toggleClass('hidden');
            $('#icon_menu_close').toggleClass('hidden');
        });
    </script>
</body>

</html>