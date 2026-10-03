<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Cashier Clearance</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>

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

                <!-- Desktop Navigation Links (Cashier Role) -->
                <nav class="hidden md:flex items-center space-x-1">
                    <a href="dashboard.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Dashboard</a>
                    <a href="payments.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Payments & Reports</a>
                    <a href="clearance.php" class="px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30 border border-brand-secondary/20">Clearance</a>
                    <a href="notifications.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Notifications</a>
                </nav>

                <!-- Action Controls -->
                <div class="flex items-center space-x-3">

                    <div class="h-5 w-px bg-gray-200 hidden md:block"></div>

                    <!-- User Info / Profile -->
                    <div class="hidden md:flex items-center space-x-2">
                        <div class="text-right">
                            <p id="nav_staff_name" class="text-xs font-semibold text-brand-dark">Maria Santos</p>
                            <p id="nav_staff_role" class="text-[10px] text-gray-500">Cashier Officer</p>
                        </div>
                        <a href="logout.php" id="nav_logout_btn" class="p-2 text-gray-400 hover:text-red-600 rounded-md hover:bg-gray-100 transition-colors" title="Log Out">
                            <i data-lucide="log-out" class="w-5 h-5"></i>
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button id="mobile_menu_btn" type="button" class="md:hidden p-2 rounded-md text-gray-600 hover:text-brand-primary hover:bg-gray-100 focus:outline-none">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile_menu" class="hidden md:hidden border-t border-gray-200 bg-white px-4 pt-2 pb-4 space-y-1">
            <a href="dashboard.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Dashboard</a>
            <a href="payments.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Payments & Reports</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-base font-semibold text-brand-primary bg-brand-accent/30">Clearance</a>
            <a href="notifications.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Notifications</a>
            <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold text-brand-dark">Maria Santos</p>
                    <p class="text-xs text-gray-500">Cashier Officer</p>
                </div>
                <a href="logout.php" class="text-xs text-red-600 font-semibold hover:underline">Log Out</a>
            </div>
        </div>
    </header>
    <!-- Main Content Container -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-6">

        <!-- Page Header -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Cashier Financial Clearance</h1>
                <p class="text-sm text-gray-500">Manage student financial holds, review balance clearance requests, and issue clearance status approvals.</p>
            </div>
        </div>

        <!-- Alert Notification Container -->
        <div id="alert_container"></div>

        <!-- Clearance Summary Stats -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white border border-gray-200 rounded-md p-4 shadow-xs flex items-center justify-between">
                <div>
                    <p class="text-[11px] font-semibold text-gray-500 uppercase tracking-wider">Total Students Evaluated</p>
                    <h3 id="stat_total_students" class="text-xl font-bold text-brand-dark mt-1">1,254</h3>
                    <p class="text-[11px] text-gray-500 mt-0.5">Term: 1st Sem 2026-2027</p>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-md p-4 shadow-xs flex items-center justify-between">
                <div>
                    <p class="text-[11px] font-semibold text-gray-500 uppercase tracking-wider">Cleared Status</p>
                    <h3 id="stat_cleared_count" class="text-xl font-bold text-emerald-700 mt-1">1,240</h3>
                    <p class="text-[11px] text-emerald-700 font-semibold mt-0.5">98.8% Compliant</p>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-md p-4 shadow-xs flex items-center justify-between">
                <div>
                    <p class="text-[11px] font-semibold text-gray-500 uppercase tracking-wider">Active Financial Holds</p>
                    <h3 id="stat_holds_count" class="text-xl font-bold text-amber-700 mt-1">14</h3>
                    <p class="text-[11px] text-amber-700 font-semibold mt-0.5">Action Required</p>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-md p-4 shadow-xs flex items-center justify-between">
                <div>
                    <p class="text-[11px] font-semibold text-gray-500 uppercase tracking-wider">Pending Settlement Reviews</p>
                    <h3 id="stat_reviews_count" class="text-xl font-bold text-blue-700 mt-1">3</h3>
                    <p class="text-[11px] text-blue-700 font-semibold mt-0.5">Proof Uploaded</p>
                </div>
            </div>
        </section>

        <!-- Search & Filter Controls -->
        <div class="bg-white border border-gray-200 rounded-md p-4 shadow-xs grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            <div>
                <label class="block text-[11px] font-semibold text-gray-500 uppercase tracking-wider mb-1">Search Student</label>
                <div class="relative">
                    <i data-lucide="search" class="w-4 h-4 absolute left-3 top-2.5 text-gray-400"></i>
                    <input type="text" id="filter_search" placeholder="Student ID, Name..." class="w-full pl-9 pr-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-primary">
                </div>
            </div>
            <div>
                <label class="block text-[11px] font-semibold text-gray-500 uppercase tracking-wider mb-1">Clearance Status</label>
                <select id="filter_status" class="w-full px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-primary bg-white">
                    <option value="">All Statuses</option>
                    <option value="Cleared">Cleared</option>
                    <option value="Uncleared">Uncleared (On Hold)</option>
                    <option value="Pending Review">Pending Review</option>
                </select>
            </div>
            <div>
                <label class="block text-[11px] font-semibold text-gray-500 uppercase tracking-wider mb-1">Academic Program</label>
                <select id="filter_program" class="w-full px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-primary bg-white">
                    <option value="">All Programs</option>
                    <option value="BSCS">BS Computer Science</option>
                    <option value="BSIT">BS Information Technology</option>
                    <option value="BSBA">BS Business Administration</option>
                </select>
            </div>
            <div class="flex items-end">
                <button id="btn_reset_filters" type="button" class="w-full py-1.5 border border-gray-200 text-xs font-semibold text-gray-600 rounded-md hover:bg-gray-50 transition-colors">
                    Reset Filters
                </button>
            </div>
        </div>

        <!-- Mobile-Optimized Clearance Table Container -->
        <div class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
            <!-- Header Summary -->
            <div class="p-3 sm:p-4 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-1">
                <div class="flex items-center space-x-2">
                    <i data-lucide="list-checks" class="w-4 h-4 text-brand-primary"></i>
                    <h2 class="text-sm font-bold text-brand-dark">Student Cashier Clearance Directory</h2>
                </div>
                <span class="text-[11px] text-gray-500">Term: 1st Semester 2026-2027</span>
            </div>

            <!-- Scrollable Table Body -->
            <div class="overflow-x-auto min-w-full">
                <table id="table_clearance" class="w-full text-left text-xs border-collapse min-w-[640px]">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase tracking-wider font-semibold">
                            <th class="py-3 px-3 w-28 whitespace-nowrap">Student ID</th>
                            <th class="py-3 px-3 min-w-[130px] max-w-[160px]">Student Name</th>
                            <th class="py-3 px-3 min-w-[140px] max-w-[180px]">Program & Year</th>
                            <th class="py-3 px-3 w-24 text-right whitespace-nowrap">Unpaid Balance</th>
                            <th class="py-3 px-3 min-w-[160px] max-w-[220px]">Hold Reason / Item</th>
                            <th class="py-3 px-3 w-28 text-center whitespace-nowrap">Clearance Status</th>
                            <th class="py-3 px-3 w-32 text-right whitespace-nowrap">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-gray-700 font-medium">
                        <!-- Row 1: Uncleared (On Hold) -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3 px-3 font-mono font-bold text-brand-dark whitespace-nowrap">2026-00012</td>
                            <td class="py-3 px-3 min-w-[130px] max-w-[160px]">
                                <div class="font-bold text-brand-dark truncate" title="Pedro Penduko">Pedro Penduko</div>
                            </td>
                            <td class="py-3 px-3 min-w-[140px] max-w-[180px]">
                                <div class="truncate text-gray-600" title="BS Computer Science (3rd Yr)">BS Computer Science (3rd Yr)</div>
                            </td>
                            <td class="py-3 px-3 text-right font-bold text-red-700 whitespace-nowrap">₱2,450.00</td>
                            <td class="py-3 px-3 min-w-[160px] max-w-[220px]">
                                <div class="font-semibold text-gray-800 truncate" title="Unpaid Tuition Fee Balance">Unpaid Tuition Fee Balance</div>
                                <div class="text-[10px] text-gray-500 truncate" title="Issued by: M. Santos • Oct 1, 2026">Issued by: M. Santos • Oct 1, 2026</div>
                            </td>
                            <td class="py-3 px-3 text-center whitespace-nowrap">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-semibold bg-amber-100 text-amber-800">Uncleared (Hold)</span>
                            </td>
                            <td class="py-3 px-3 text-right whitespace-nowrap space-x-1">
                                <button onclick="openReleaseModal('CLEAR-2026-001', 'Pedro Penduko', '2026-00012', 2450.00)" class="px-2 py-1 bg-emerald-700 text-white rounded text-[11px] font-semibold hover:bg-emerald-800 transition-colors">Clear</button>
                            </td>
                        </tr>

                        <!-- Row 2: Pending Review -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3 px-3 font-mono font-bold text-brand-dark whitespace-nowrap">2026-00045</td>
                            <td class="py-3 px-3 min-w-[130px] max-w-[160px]">
                                <div class="font-bold text-brand-dark truncate" title="Juan Dela Cruz">Juan Dela Cruz</div>
                            </td>
                            <td class="py-3 px-3 min-w-[140px] max-w-[180px]">
                                <div class="truncate text-gray-600" title="BS Information Technology (2nd Yr)">BS Info Tech (2nd Yr)</div>
                            </td>
                            <td class="py-3 px-3 text-right font-bold text-blue-700 whitespace-nowrap">₱150.00</td>
                            <td class="py-3 px-3 min-w-[160px] max-w-[220px]">
                                <div class="font-semibold text-gray-800 truncate" title="Document Processing Fee">Document Processing Fee</div>
                                <div class="text-[10px] text-blue-600 font-semibold truncate" title="Proof uploaded (Ref: 9021849201)">Proof uploaded (Ref: 9021849201)</div>
                            </td>
                            <td class="py-3 px-3 text-center whitespace-nowrap">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-semibold bg-blue-100 text-blue-800">Pending Review</span>
                            </td>
                            <td class="py-3 px-3 text-right whitespace-nowrap space-x-1">
                                <a href="payments.php?filter=2026-00045" class="inline-block px-2 py-1 bg-blue-600 text-white rounded text-[11px] font-semibold hover:bg-blue-700 transition-colors">Review</a>
                            </td>
                        </tr>

                        <!-- Row 3: Cleared -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3 px-3 font-mono font-bold text-brand-dark whitespace-nowrap">2026-00088</td>
                            <td class="py-3 px-3 min-w-[130px] max-w-[160px]">
                                <div class="font-bold text-brand-dark truncate" title="Maria Clara">Maria Clara</div>
                            </td>
                            <td class="py-3 px-3 min-w-[140px] max-w-[180px]">
                                <div class="truncate text-gray-600" title="BS Business Administration (4th Yr)">BS Business Admin (4th Yr)</div>
                            </td>
                            <td class="py-3 px-3 text-right font-bold text-gray-400 whitespace-nowrap">₱0.00</td>
                            <td class="py-3 px-3 min-w-[160px] max-w-[220px]">
                                <span class="text-xs text-gray-400 italic block truncate">No Active Holds</span>
                            </td>
                            <td class="py-3 px-3 text-center whitespace-nowrap">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-semibold bg-emerald-100 text-emerald-800">Cleared</span>
                            </td>
                            <td class="py-3 px-3 text-right whitespace-nowrap">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Table Pagination Footer -->
            <div class="p-3 sm:p-4 bg-gray-50/80 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-2 text-xs text-gray-500">
                <span>Showing 1 to 3 of 14 records</span>
                <div class="inline-flex items-center space-x-1">
                    <button disabled class="px-2.5 py-1 border border-gray-200 rounded text-gray-400 bg-gray-100 cursor-not-allowed">Previous</button>
                    <button disabled class="px-2.5 py-1 border border-gray-200 rounded text-gray-400 bg-gray-100 cursor-not-allowed">Next</button>
                </div>
            </div>
        </div>

    </main>

    <!-- MODAL 2: RELEASE / CLEAR HOLD -->
    <div id="modal_release_hold" class="fixed inset-0 bg-black/40 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-md shadow-lg max-w-md w-full mx-4 overflow-hidden border border-gray-200">
            <div class="p-4 border-b border-gray-100 flex items-center justify-between bg-emerald-50">
                <div class="flex items-center space-x-2">
                    <div class="p-1 bg-emerald-100 text-emerald-800 rounded">
                        <i data-lucide="shield-check" class="w-4 h-4"></i>
                    </div>
                    <h3 class="text-sm font-bold text-emerald-900">Release Cashier Hold</h3>
                </div>
                <button type="button" class="close-modal text-gray-400 hover:text-gray-600 rounded p-1"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <form id="form_release_hold" class="p-5 space-y-4">
                <input type="hidden" id="release_hold_id">

                <div class="bg-gray-50 p-3 rounded border border-gray-200 space-y-1 text-xs">
                    <p><span class="text-gray-500">Student:</span> <strong id="lbl_release_student" class="text-brand-dark">Pedro Penduko</strong></p>
                    <p><span class="text-gray-500">Outstanding Amount:</span> <strong id="lbl_release_amount" class="text-red-700">₱2,450.00</strong></p>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Settlement Method / Reference *</label>
                    <input type="text" required id="release_reference" placeholder="Official Receipt No. or Payment Ref No." class="w-full px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:ring-1 focus:ring-brand-primary">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Clearance Remarks (Optional)</label>
                    <textarea id="release_remarks" rows="2" placeholder="e.g. Paid in full via Walk-in Cashier..." class="w-full p-2 text-xs border border-gray-200 rounded-md focus:ring-1 focus:ring-brand-primary"></textarea>
                </div>

                <div class="flex items-center justify-end space-x-2 pt-3 border-t border-gray-100">
                    <button type="button" class="close-modal px-3.5 py-1.5 text-xs font-semibold text-gray-600 border border-gray-200 rounded-md hover:bg-gray-50">Cancel</button>
                    <button type="submit" id="btn_submit_release" class="px-4 py-1.5 text-xs font-semibold text-white bg-emerald-700 hover:bg-emerald-800 rounded-md shadow-xs">Clear Hold Status</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL 3: VIEW CLEARANCE DETAILS -->
    <div id="modal_clearance_details" class="fixed inset-0 bg-black/40 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-md shadow-lg max-w-md w-full mx-4 overflow-hidden border border-gray-200">
            <div class="p-4 border-b border-gray-100 flex items-center justify-between bg-gray-50">
                <h3 class="text-sm font-bold text-brand-dark">Clearance Record Details</h3>
                <button type="button" class="close-modal text-gray-400 hover:text-gray-600 rounded p-1"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="p-5 space-y-3 text-xs">
                <div class="flex justify-between border-b pb-2">
                    <span class="text-gray-500">Student ID & Name:</span>
                    <span id="detail_student" class="font-bold text-brand-dark">Pedro Penduko (2026-00012)</span>
                </div>
                <div class="flex justify-between border-b pb-2">
                    <span class="text-gray-500">Unpaid Balance:</span>
                    <span id="detail_balance" class="font-bold text-red-700">₱2,450.00</span>
                </div>
                <div class="flex justify-between border-b pb-2">
                    <span class="text-gray-500">Hold Item / Reason:</span>
                    <span id="detail_reason" class="font-medium text-gray-800">Unpaid Tuition Fee Balance</span>
                </div>
                <div class="flex justify-between border-b pb-2">
                    <span class="text-gray-500">Current Status:</span>
                    <span id="detail_status" class="font-bold text-amber-800">Uncleared</span>
                </div>
            </div>
            <div class="p-4 bg-gray-50 border-t border-gray-100 flex justify-end">
                <button type="button" class="close-modal px-4 py-1.5 text-xs font-semibold text-gray-600 border border-gray-200 rounded-md hover:bg-gray-100">Close</button>
            </div>
        </div>
    </div>

    <!-- Formal Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12 py-6 text-center text-xs text-gray-500">
        <div class="max-w-7xl mx-auto px-4">
            <p>Paxton University Student Services Information System (SSIS) &copy; 2026. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Interactive Scripts -->
    <script>
        $(document).ready(function() {
            lucide.createIcons();

            // Mobile Navigation Toggle
            $('#mobile_menu_btn').on('click', function() {
                $('#mobile_menu').toggleClass('hidden');
            });

            // Trigger Issue Hold Modal
            $('#btn_open_issue_hold_modal').on('click', function() {
                $('#modal_issue_hold').removeClass('hidden');
            });

            // Modal Close Handlers
            $('.close-modal').on('click', function() {
                $('.fixed.inset-0').addClass('hidden');
            });

            // Form Submission Handlers
            $('#form_issue_hold').on('submit', function(e) {
                e.preventDefault();
                $('#modal_issue_hold').addClass('hidden');
                showAlert('error', 'Financial hold issued successfully. Student status updated to Uncleared.');
            });

            $('#form_release_hold').on('submit', function(e) {
                e.preventDefault();
                $('#modal_release_hold').addClass('hidden');
                showAlert('success', 'Hold successfully released. Student is now Cleared under Cashier Office.');
            });
        });

        // Global Modal Triggers
        function openReleaseModal(holdId, studentName, studentId, amount) {
            $('#release_hold_id').val(holdId);
            $('#lbl_release_student').text(studentName + ' (' + studentId + ')');
            $('#lbl_release_amount').text('₱' + parseFloat(amount).toFixed(2));
            $('#modal_release_hold').removeClass('hidden');
        }

        function openDetailsModal(studentId, studentName, balance, reason, status) {
            $('#detail_student').text(studentName + ' (' + studentId + ')');
            $('#detail_balance').text('₱' + balance);
            $('#detail_reason').text(reason);
            $('#detail_status').text(status);
            $('#modal_clearance_details').removeClass('hidden');
        }

        function showAlert(type, msg) {
            const bg = type === 'success' ? 'bg-emerald-50 border-emerald-200 text-emerald-800' : 'bg-red-50 border-red-200 text-red-800';
            const alertHtml = `<div class="p-3 border rounded-md mb-4 text-xs font-semibold ${bg}">${msg}</div>`;
            $('#alert_container').html(alertHtml);
        }
    </script>
</body>

</html>