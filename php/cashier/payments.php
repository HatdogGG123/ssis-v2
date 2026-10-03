<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Cashier Payments & Reports</title>

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
    <!-- Payment Verification Modal -->
    <div id="modal_verify_payment" class="fixed inset-0 bg-black/40 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-md shadow-lg max-w-lg w-full mx-4 overflow-hidden border border-gray-200">

            <!-- Modal Header -->
            <div class="p-4 border-b border-gray-100 flex items-center justify-between bg-emerald-50/60">
                <div class="flex items-center space-x-2">
                    <div class="p-1.5 bg-emerald-100 text-emerald-800 rounded">
                        <i data-lucide="check-circle-2" class="w-4 h-4"></i>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-brand-dark">Verify Payment Submission</h3>
                        <p class="text-[11px] text-gray-500">Confirm proof of payment and generate official receipt</p>
                    </div>
                </div>
                <button type="button" class="close-modal text-gray-400 hover:text-gray-600 rounded p-1 transition-colors">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <!-- Form Body -->
            <form id="form_verify_payment" class="p-5 space-y-4">
                <input type="hidden" id="verify_request_id" name="request_id">

                <!-- Read-Only Request Details Summary -->
                <div class="bg-gray-50/80 border border-gray-200/80 rounded-md p-3 space-y-2 text-xs">
                    <div class="flex justify-between border-b border-gray-200/60 pb-1.5">
                        <span class="text-gray-500">Request Number:</span>
                        <span id="verify_display_req_no" class="font-bold text-brand-dark">DR-2026-0012</span>
                    </div>
                    <div class="flex justify-between border-b border-gray-200/60 pb-1.5">
                        <span class="text-gray-500">Student Name:</span>
                        <span id="verify_display_student" class="font-semibold text-brand-dark">Juan Dela Cruz (2026-00045)</span>
                    </div>
                    <div class="flex justify-between border-b border-gray-200/60 pb-1.5">
                        <span class="text-gray-500">Document Requested:</span>
                        <span id="verify_display_document" class="font-medium text-gray-800">Transcript of Records (2 copies)</span>
                    </div>
                    <div class="flex justify-between border-b border-gray-200/60 pb-1.5">
                        <span class="text-gray-500">Submitted Method & Ref:</span>
                        <span id="verify_display_method_ref" class="font-mono text-gray-800">GCash - 9021849201</span>
                    </div>
                    <div class="flex justify-between pt-0.5">
                        <span class="text-gray-500 font-semibold">Total Amount Due:</span>
                        <span id="verify_display_amount" class="font-bold text-emerald-700 text-sm">₱150.00</span>
                    </div>
                </div>

                <!-- Auto-Generated Official Receipt Display -->
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Generated Receipt No.</label>
                        <input type="text" id="verify_or_number" readonly value="OR-2026-0043" class="w-full px-3 py-1.5 text-xs bg-gray-100 font-mono font-bold text-brand-primary border border-gray-200 rounded-md focus:outline-none cursor-not-allowed">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Verification Date</label>
                        <input type="text" readonly value="October 3, 2026" class="w-full px-3 py-1.5 text-xs bg-gray-100 font-medium text-gray-600 border border-gray-200 rounded-md focus:outline-none cursor-not-allowed">
                    </div>
                </div>

                <!-- Verification Notes / Remarks -->
                <div>
                    <label for="verify_remarks" class="block text-xs font-semibold text-gray-700 mb-1">Verification Remarks (Optional)</label>
                    <textarea id="verify_remarks" rows="2" placeholder="e.g. Verified via GCash portal statement..." class="w-full p-2.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-primary transition-all"></textarea>
                </div>

                <!-- Confirmation Notice -->
                <div class="p-3 bg-blue-50/70 border border-blue-100 rounded-md flex items-start space-x-2 text-[11px] text-blue-800">
                    <i data-lucide="info" class="w-4 h-4 text-blue-600 shrink-0 mt-0.5"></i>
                    <p>Confirming verification will set the document status to <strong>Paid</strong> and notify the Registrar to process the order[cite: 7, 11].</p>
                </div>

                <!-- Modal Action Buttons -->
                <div class="flex items-center justify-end space-x-2 pt-3 border-t border-gray-100">
                    <button type="button" class="close-modal px-3.5 py-1.5 text-xs font-semibold text-gray-600 border border-gray-200 rounded-md hover:bg-gray-50 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" id="btn_confirm_verify" class="inline-flex items-center space-x-1.5 px-4 py-1.5 text-xs font-semibold text-white bg-emerald-700 hover:bg-emerald-800 rounded-md shadow-xs transition-colors">
                        <i data-lucide="check" class="w-3.5 h-3.5"></i>
                        <span>Confirm & Verify Payment</span>
                    </button>
                </div>
            </form>

        </div>
    </div>

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
                <nav class="hidden md:flex items-center space-x-1">
                    <a href="dashboard.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Dashboard</a>
                    <a href="payments.php" class="px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30 border border-brand-secondary/20">Payments & Reports</a>
                    <a href="clearance.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Clearance</a>
                </nav>

                <!-- Action Controls -->
                <div class="flex items-center space-x-3">

                    <!-- Notification Bell -->
                    <a href="notifications.php" id="nav_notification_link" class="relative p-2 text-gray-500 hover:text-brand-primary rounded-md hover:bg-gray-100 transition-colors" title="Notifications">
                        <i data-lucide="bell" class="w-5 h-5"></i>
                        <span id="nav_unread_count" class="absolute top-1 right-1 inline-flex items-center justify-center px-1.5 py-0.5 text-[10px] font-bold leading-none text-white bg-red-600 rounded-full">4</span>
                    </a>

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
            <a href="payments.php" class="block px-3 py-2 rounded-md text-base font-semibold text-brand-primary bg-brand-accent/30">Payments & Reports</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
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
                <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Payments & Financial Reports</h1>
                <p class="text-sm text-gray-500">Record walk-in transactions, verify online payments, issue refunds, and generate collection reports.</p>
            </div>
            <div class="flex items-center gap-3">
                <button id="btn_open_walkin_modal" type="button" class="inline-flex items-center space-x-2 px-3.5 py-2 bg-brand-primary hover:bg-brand-primary/90 text-white rounded-md text-xs font-semibold shadow-xs transition-colors">
                    <i data-lucide="plus-circle" class="w-4 h-4"></i>
                    <span>Record Walk-in Payment</span>
                </button>
            </div>
        </div>

        <!-- System Alerts Placeholder -->
        <div id="alert_container"></div>

        <!-- Section Navigation Tabs -->
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex space-x-6 text-xs font-semibold" aria-label="Tabs">
                <button id="tab_btn_verification" class="w-full sm:w-fit tab-btn py-3 px-1 border-b-2 border-brand-primary text-brand-primary flex items-center space-x-2">
                    <p class="text-center">Payment Verification</p>
                </button>
                <button id="tab_btn_transactions" class="w-full sm:w-fit tab-btn py-3 px-1 border-b-2 border-transparent text-gray-500 hover:text-brand-primary hover:border-gray-300 flex items-center space-x-2">
                    <p class="text-center">Transaction History</p>
                </button>
                <button id="tab_btn_reports" class="w-full sm:w-fit tab-btn py-3 px-1 border-b-2 border-transparent text-gray-500 hover:text-brand-primary hover:border-gray-300 flex items-center space-x-2">
                    <p class="text-center">Collection Reports</p>
                </button>
            </nav>
        </div>

        <!-- TAB 1: PAYMENT VERIFICATION & PROCESSING -->
        <div id="tab_content_verification" class="tab-content space-y-4">

            <!-- Filters & Search Bar -->
            <div class="bg-white border border-gray-200 rounded-md p-4 shadow-xs grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                <div>
                    <label class="block text-[11px] font-semibold text-gray-500 uppercase tracking-wider mb-1">Search Record</label>
                    <div class="relative">
                        <input type="text" id="filter_search" placeholder="Student ID, Name, or DR No..." class="w-full pl-3 pr-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-primary">
                    </div>
                </div>
                <div>
                    <label class="block text-[11px] font-semibold text-gray-500 uppercase tracking-wider mb-1">Payment Status</label>
                    <select id="filter_status" class="w-full px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-primary bg-white">
                        <option value="">All Statuses</option>
                        <option value="Unpaid">Unpaid</option>
                        <option value="Pending Verification" selected>Pending Verification</option>
                        <option value="Paid">Paid</option>
                        <option value="Rejected">Rejected</option>
                        <option value="Refunded">Refunded</option>
                    </select>
                </div>
                <div>
                    <label class="block text-[11px] font-semibold text-gray-500 uppercase tracking-wider mb-1">Payment Method</label>
                    <select id="filter_method" class="w-full px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-primary bg-white">
                        <option value="">All Methods</option>
                        <option value="Cash">Cash</option>
                        <option value="GCash">GCash</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button id="btn_reset_filters" type="button" class="w-full py-1.5 border border-gray-200 text-xs font-semibold text-gray-600 rounded-md hover:bg-gray-50 transition-colors">
                        Reset Filters
                    </button>
                </div>
            </div>

            <!-- Payments Table -->
            <div class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
                <div class="overflow-x-auto">
                    <!-- Mobile-Optimized Table Container -->
                    <div class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
                        <div class="overflow-x-auto min-w-full">
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
                                                    <button onclick="openDetailsModal('2026-00012', 'Pedro Penduko', '2,450.00', 'Unpaid Tuition Fee Balance', 'Uncleared')" class="px-2 py-1 border border-gray-200 text-gray-600 rounded text-[11px] font-semibold hover:bg-gray-50 transition-colors">View</button>
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
                                                    <button onclick="openDetailsModal('2026-00045', 'Juan Dela Cruz', '150.00', 'Document Processing Fee', 'Pending Review')" class="px-2 py-1 border border-gray-200 text-gray-600 rounded text-[11px] font-semibold hover:bg-gray-50 transition-colors">View</button>
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
                                                    <button onclick="openDetailsModal('2026-00088', 'Maria Clara', '0.00', 'None', 'Cleared')" class="px-2 py-1 border border-gray-200 text-gray-600 rounded text-[11px] font-semibold hover:bg-gray-50 transition-colors">View History</button>
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
                        </div>

                        <!-- Table Pagination -->
                        <div class="p-3 sm:p-4 bg-gray-50/80 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-2 text-xs text-gray-500">
                            <span>Showing 1 to 2 of 2 payment records</span>
                            <div class="inline-flex items-center space-x-1">
                                <button disabled class="px-2.5 py-1 border border-gray-200 rounded text-gray-400 bg-gray-100 cursor-not-allowed">Previous</button>
                                <button disabled class="px-2.5 py-1 border border-gray-200 rounded text-gray-400 bg-gray-100 cursor-not-allowed">Next</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Pagination -->
                <div class="p-4 bg-gray-50/80 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500">
                    <span>Showing 1 to 3 of 3 payment records</span>
                    <div class="inline-flex items-center space-x-1">
                        <button disabled class="px-2.5 py-1 border border-gray-200 rounded text-gray-400 bg-gray-100 cursor-not-allowed">Previous</button>
                        <button disabled class="px-2.5 py-1 border border-gray-200 rounded text-gray-400 bg-gray-100 cursor-not-allowed">Next</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB 2: TRANSACTIONS & RECEIPTS -->
        <div id="tab_content_transactions" class="tab-content space-y-4 hidden">
            <div class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
                <div class="p-4 border-b border-gray-100 flex items-center justify-between">
                    <h2 class="text-sm font-bold text-brand-dark">Official Receipt Log</h2>
                    <span class="text-xs text-gray-500">All recorded payments with system receipt numbers</span>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs border-collapse">
                        <thead>
                            <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase tracking-wider font-semibold">
                                <th class="py-3 px-4">Receipt No</th>
                                <th class="py-3 px-4">Request No</th>
                                <th class="py-3 px-4">Student Name</th>
                                <th class="py-3 px-4">Reference No</th>
                                <th class="py-3 px-4">Method</th>
                                <th class="py-3 px-4 text-right">Amount</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-gray-700 font-medium">
                            <tr class="hover:bg-gray-50/50">
                                <td class="py-3 px-4 font-mono font-bold text-brand-dark">OR-2026-0042</td>
                                <td class="py-3 px-4">DR-2026-0008</td>
                                <td class="py-3 px-4">Andres Bonifacio</td>
                                <td class="py-3 px-4 font-mono text-gray-500">N/A (Walk-in)</td>
                                <td class="py-3 px-4">Cash</td>
                                <td class="py-3 px-4 text-right font-bold">₱150.00</td>
                            </tr>
                            <tr class="hover:bg-gray-50/50">
                                <td class="py-3 px-4 font-mono font-bold text-brand-dark">OR-2026-0041</td>
                                <td class="py-3 px-4">DR-2026-0004</td>
                                <td class="py-3 px-4">Apolinario Mabini</td>
                                <td class="py-3 px-4 font-mono text-gray-500">9910283920</td>
                                <td class="py-3 px-4">GCash</td>
                                <td class="py-3 px-4 text-right font-bold">₱200.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- TAB 3: COLLECTION REPORTS -->
        <div id="tab_content_reports" class="tab-content space-y-4 hidden">
            <!-- Report Controls -->
            <div class="bg-white border border-gray-200 rounded-md p-4 shadow-xs flex flex-col md:flex-row items-md-center justify-between gap-4">
                <div class="flex flex-wrap items-center gap-3">
                    <div>
                        <label class="block text-[10px] font-semibold text-gray-500 uppercase tracking-wider mb-0.5">Date From</label>
                        <input type="date" value="2026-10-01" class="px-2.5 py-1 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-primary">
                    </div>
                    <div>
                        <label class="block text-[10px] font-semibold text-gray-500 uppercase tracking-wider mb-0.5">Date To</label>
                        <input type="date" value="2026-10-03" class="px-2.5 py-1 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-primary">
                    </div>
                    <button class="mt-4 px-3 py-1 bg-brand-primary text-white rounded text-xs font-semibold">Generate</button>
                </div>
                <div class="flex items-center space-x-2">
                    <button onclick="window.print()" class="inline-flex items-center space-x-1 px-3 py-1.5 border border-gray-200 text-xs font-semibold rounded hover:bg-gray-50"><i data-lucide="printer" class="w-3.5 h-3.5"></i><span>Print Report</span></button>
                    <button id="btn_export_csv" class="inline-flex items-center space-x-1 px-3 py-1.5 border border-gray-200 text-xs font-semibold rounded hover:bg-gray-50 text-emerald-700"><i data-lucide="download" class="w-3.5 h-3.5"></i><span>CSV Export</span></button>
                </div>
            </div>

            <!-- Report Summary -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white border border-gray-200 p-4 rounded-md">
                    <p class="text-xs text-gray-500 font-semibold uppercase">Total Collection</p>
                    <h3 class="text-xl font-bold text-brand-dark mt-1">₱18,450.00</h3>
                </div>
                <div class="bg-white border border-gray-200 p-4 rounded-md">
                    <p class="text-xs text-gray-500 font-semibold uppercase">Cash Collections</p>
                    <h3 class="text-xl font-bold text-brand-dark mt-1">₱6,200.00</h3>
                </div>
                <div class="bg-white border border-gray-200 p-4 rounded-md">
                    <p class="text-xs text-gray-500 font-semibold uppercase">Online / Bank Transfers</p>
                    <h3 class="text-xl font-bold text-brand-dark mt-1">₱12,250.00</h3>
                </div>
            </div>
        </div>

    </main>

    <!-- MODAL: Record Walk-In Payment -->
    <div id="modal_walkin_payment" class="fixed inset-0 bg-black/40 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-md shadow-lg max-w-md w-full mx-4 overflow-hidden">
            <div class="p-4 border-b border-gray-200 flex items-center justify-between bg-gray-50">
                <h3 class="text-sm font-bold text-brand-dark">Record Walk-in Payment</h3>
                <button type="button" class="close-modal text-gray-400 hover:text-gray-600"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <form id="form_walkin_payment" class="p-4 space-y-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Select Document Request *</label>
                    <select id="walkin_request_id" required class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:ring-1 focus:ring-brand-primary">
                        <option value="">-- Choose For-Payment Request --</option>
                        <option value="1">DR-2026-0010 | Jose Rizal - TOR (₱150.00)</option>
                        <option value="2">DR-2026-0015 | Apolinario Mabini - Certificate (₱100.00)</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Payment Method *</label>
                    <select id="walkin_method" required class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:ring-1 focus:ring-brand-primary">
                        <option value="Cash">Cash</option>
                        <option value="GCash">GCash</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Amount (Must match fee) *</label>
                    <input type="number" step="0.01" id="walkin_amount" required placeholder="0.00" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:ring-1 focus:ring-brand-primary">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Reference Number (Optional for Cash)</label>
                    <input type="text" id="walkin_reference" placeholder="e.g. GCash Ref No." class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:ring-1 focus:ring-brand-primary">
                </div>
                <div class="p-3 bg-amber-50 border border-amber-100 rounded text-[11px] text-amber-800">
                    <p>Submitting will generate Official Receipt number <strong>OR-2026-0043</strong> automatically.</p>
                </div>
                <div class="flex justify-end space-x-2 pt-2 border-t border-gray-100">
                    <button type="button" class="close-modal px-3 py-1.5 text-xs border border-gray-200 rounded font-semibold text-gray-600 hover:bg-gray-50">Cancel</button>
                    <button type="submit" id="btn_submit_walkin" class="px-3 py-1.5 text-xs bg-brand-primary text-white rounded font-semibold hover:bg-brand-primary/90">Record & Print Receipt</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL: Reject Payment -->
    <div id="modal_reject_payment" class="fixed inset-0 bg-black/40 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-md shadow-lg max-w-md w-full mx-4 overflow-hidden">
            <div class="p-4 border-b border-gray-200 flex items-center justify-between bg-red-50">
                <h3 class="text-sm font-bold text-red-800">Reject Payment Submission</h3>
                <button type="button" class="close-modal text-gray-400 hover:text-gray-600"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <form id="form_reject_payment" class="p-4 space-y-4">
                <input type="hidden" id="reject_request_no">
                <p class="text-xs text-gray-600">Rejecting payment for request <strong id="lbl_reject_req_no">DR-2026-XXXX</strong> will send it back to the student to re-submit valid proof.</p>
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Rejection Reason *</label>
                    <textarea id="reject_reason" required rows="3" placeholder="Specify why the payment reference was rejected..." class="w-full p-2 text-xs border border-gray-200 rounded-md focus:ring-1 focus:ring-red-600"></textarea>
                </div>
                <div class="flex justify-end space-x-2 pt-2 border-t border-gray-100">
                    <button type="button" class="close-modal px-3 py-1.5 text-xs border border-gray-200 rounded font-semibold text-gray-600">Cancel</button>
                    <button type="submit" class="px-3 py-1.5 text-xs bg-red-600 text-white rounded font-semibold hover:bg-red-700">Confirm Rejection</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL: Refund Payment -->
    <div id="modal_refund_payment" class="fixed inset-0 bg-black/40 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-md shadow-lg max-w-md w-full mx-4 overflow-hidden">
            <div class="p-4 border-b border-gray-200 flex items-center justify-between bg-gray-50">
                <h3 class="text-sm font-bold text-brand-dark">Process Payment Refund</h3>
                <button type="button" class="close-modal text-gray-400 hover:text-gray-600"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <form id="form_refund_payment" class="p-4 space-y-4">
                <input type="hidden" id="refund_request_no">
                <p class="text-xs text-gray-600">Refunding payment for <strong id="lbl_refund_req_no">DR-2026-XXXX</strong> (Amount: <span id="lbl_refund_amount">₱0.00</span>).</p>
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Reason for Refund *</label>
                    <textarea id="refund_reason" required rows="3" placeholder="State reason (e.g., document request cancelled or rejected)..." class="w-full p-2 text-xs border border-gray-200 rounded-md focus:ring-1 focus:ring-brand-primary"></textarea>
                </div>
                <div class="flex justify-end space-x-2 pt-2 border-t border-gray-100">
                    <button type="button" class="close-modal px-3 py-1.5 text-xs border border-gray-200 rounded font-semibold text-gray-600">Cancel</button>
                    <button type="submit" class="px-3 py-1.5 text-xs bg-red-600 text-white rounded font-semibold hover:bg-red-700">Process Refund</button>
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

    <!-- Interactive Scripts -->
    <script>
        $(document).ready(function() {
            lucide.createIcons();

            // Mobile menu toggle
            $('#mobile_menu_btn').on('click', function() {
                $('#mobile_menu').toggleClass('hidden');
            });

            // Section Tabs Switching
            $('.tab-btn').on('click', function() {
                $('.tab-btn').removeClass('border-brand-primary text-brand-primary').addClass('border-transparent text-gray-500');
                $(this).removeClass('border-transparent text-gray-500').addClass('border-brand-primary text-brand-primary');

                $('.tab-content').addClass('hidden');
                if (this.id === 'tab_btn_verification') $('#tab_content_verification').removeClass('hidden');
                if (this.id === 'tab_btn_transactions') $('#tab_content_transactions').removeClass('hidden');
                if (this.id === 'tab_btn_reports') $('#tab_content_reports').removeClass('hidden');
            });

            // Modal Trigger Actions
            $('#btn_open_walkin_modal').on('click', function() {
                $('#modal_walkin_payment').removeClass('hidden');
            });

            $('.close-modal').on('click', function() {
                $('.fixed.inset-0').addClass('hidden');
            });

            // Form Submissions with Loading States
            $('#form_walkin_payment').on('submit', function(e) {
                e.preventDefault();
                const btn = $('#btn_submit_walkin');
                btn.prop('disabled', true).text('Processing...');

                setTimeout(function() {
                    btn.prop('disabled', false).text('Record & Print Receipt');
                    $('#modal_walkin_payment').addClass('hidden');
                    showAlert('success', 'Walk-in payment recorded successfully. Receipt OR-2026-0043 generated.');
                }, 1000);
            });

            $('#form_reject_payment').on('submit', function(e) {
                e.preventDefault();
                $('#modal_reject_payment').addClass('hidden');
                showAlert('error', 'Payment submission marked as Rejected. Student notified.');
            });

            $('#form_refund_payment').on('submit', function(e) {
                e.preventDefault();
                $('#modal_refund_payment').addClass('hidden');
                showAlert('success', 'Payment successfully updated to Refunded status.');
            });
        });

        // Global Helper Functions
        function verifyPayment(reqNo, student, amount, method, ref) {
            if (confirm('Verify payment of ₱' + amount + ' for ' + reqNo + ' (' + student + ')?')) {
                showAlert('success', 'Payment verified for ' + reqNo + '. Document request status changed to Paid.');
            }
        }

        function openRejectModal(reqNo) {
            $('#reject_request_no').val(reqNo);
            $('#lbl_reject_req_no').text(reqNo);
            $('#modal_reject_payment').removeClass('hidden');
        }

        function openRefundModal(reqNo, receiptNo, amount) {
            $('#refund_request_no').val(reqNo);
            $('#lbl_refund_req_no').text(reqNo + ' (' + receiptNo + ')');
            $('#lbl_refund_amount').text('₱' + amount.toFixed(2));
            $('#modal_refund_payment').removeClass('hidden');
        }

        function printReceipt(receiptNo) {
            alert('Opening print view for receipt ' + receiptNo + '...');
            window.print();
        }

        function showAlert(type, msg) {
            const bg = type === 'success' ? 'bg-emerald-50 border-emerald-200 text-emerald-800' : 'bg-red-50 border-red-200 text-red-800';
            const alertHtml = `<div class="p-3 border rounded-md mb-4 text-xs font-semibold ${bg}">${msg}</div>`;
            $('#alert_container').html(alertHtml);
        }

        // Function to populate and open the Verification Modal
        function openVerifyModal(reqNo, studentInfo, docType, method, refNo, amount) {
            $('#verify_request_id').val(reqNo);
            $('#verify_display_req_no').text(reqNo);
            $('#verify_display_student').text(studentInfo);
            $('#verify_display_document').text(docType);
            $('#verify_display_method_ref').text(method + ' - ' + refNo);
            $('#verify_display_amount').text('₱' + parseFloat(amount).toFixed(2));

            // Clear previous remarks
            $('#verify_remarks').val('');

            // Show modal
            $('#modal_verify_payment').removeClass('hidden');
            lucide.createIcons();
        }

        $(document).ready(function() {
            // Close modal handlers
            $('.close-modal').on('click', function() {
                $('#modal_verify_payment').addClass('hidden');
            });

            // Handle Form Submission with Loading State
            $('#form_verify_payment').on('submit', function(e) {
                e.preventDefault();

                const reqNo = $('#verify_request_id').val();
                const btn = $('#btn_confirm_verify');

                // Show loading state
                btn.prop('disabled', true).addClass('opacity-75').html('<i data-lucide="loader-2" class="w-3.5 h-3.5 animate-spin"></i><span>Verifying...</span>');
                lucide.createIcons();

                // Simulate AJAX request
                setTimeout(function() {
                    btn.prop('disabled', false).removeClass('opacity-75').html('<i data-lucide="check" class="w-3.5 h-3.5"></i><span>Confirm & Verify Payment</span>');
                    $('#modal_verify_payment').addClass('hidden');

                    // Trigger feedback alert
                    showAlert('success', 'Payment verified for <strong>' + reqNo + '</strong>. Status changed to Paid and Official Receipt issued.');
                    lucide.createIcons();
                }, 1000);
            });
        });
    </script>
</body>

</html>