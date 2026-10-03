<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Cashier Dashboard</title>

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
                    <a href="dashboard.php" class="px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30 border border-brand-secondary/20">Dashboard</a>
                    <a href="payments.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Payments & Reports</a>
                    <a href="clearance.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Clearance</a>
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
            <a href="dashboard.php" class="block px-3 py-2 rounded-md text-base font-semibold text-brand-primary bg-brand-accent/30">Dashboard</a>
            <a href="payments.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Payments & Reports</a>
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
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">

        <!-- Page Header -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Cashier Overview</h1>
                <p class="text-sm text-gray-500">Monitor daily collection, pending payment verifications, and department clearance items.</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="payments.php?action=new" class="inline-flex items-center space-x-2 px-3.5 py-2 bg-brand-primary hover:bg-brand-primary/90 text-white rounded-md text-xs font-semibold shadow-xs transition-colors">
                    <i data-lucide="plus" class="w-4 h-4"></i>
                    <span>Record Walk-in Payment</span>
                </a>
                <div class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-md px-3 py-2 text-xs font-semibold text-gray-700 shadow-xs">
                    <i data-lucide="calendar" class="w-4 h-4 text-brand-secondary"></i>
                    <span>Term: <strong id="lbl_current_term" class="text-brand-dark">1st Sem, AY 2026-2027</strong></span>
                </div>
            </div>
        </div>

        <!-- System Summary Cards -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

            <!-- Card 1: Total Collected Today -->
            <div class="bg-white border border-gray-200 rounded-md p-5 shadow-xs flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Collected Today</p>
                    <h3 id="stat_collected_today" class="text-2xl font-bold text-brand-dark mt-1">₱18,450.00</h3>
                    <p class="text-[11px] text-emerald-700 font-semibold mt-1">12 Transactions Verified</p>
                </div>
            </div>

            <!-- Card 2: Pending Verifications -->
            <div class="bg-white border border-gray-200 rounded-md p-5 shadow-xs flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Pending Verification</p>
                    <h3 id="stat_pending_verifications" class="text-2xl font-bold text-blue-700 mt-1">7</h3>
                    <p class="text-[11px] text-gray-500 mt-1">Online Payment Submissions</p>
                </div>
            </div>

            <!-- Card 3: Pending Clearance Reviews -->
            <div class="bg-white border border-gray-200 rounded-md p-5 shadow-xs flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Pending Clearance</p>
                    <h3 id="stat_pending_clearance" class="text-2xl font-bold text-amber-700 mt-1">14</h3>
                    <p class="text-[11px] text-gray-500 mt-1">Students Action Needed</p>
                </div>
            </div>

            <!-- Card 4: Total Unpaid Balance Requests -->
            <div class="bg-white border border-gray-200 rounded-md p-5 shadow-xs flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Unpaid Document Requests</p>
                    <h3 id="stat_unpaid_requests" class="text-2xl font-bold text-orange-700 mt-1">5</h3>
                    <p class="text-[11px] text-gray-500 mt-1">Awaiting Reference / Walk-in</p>
                </div>
            </div>
        </section>

        <!-- Main Content Split: Pending Submissions & Recent Transactions -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Left Panel: Payments Pending Verification (2 Cols) -->
            <section class="lg:col-span-2 bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden flex flex-col">
                <div class="p-5 border-b border-gray-100 flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="p-2 rounded-md bg-blue-50 text-blue-700">
                            <i data-lucide="credit-card" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h2 class="text-base font-bold text-brand-dark">Pending Payment Verifications</h2>
                            <p class="text-xs text-gray-500">Submitted reference numbers requiring Cashier action</p>
                        </div>
                    </div>
                    <a href="payments.php?status=Pending+Verification" class="text-xs font-semibold text-brand-primary hover:underline">View All</a>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table id="table_pending_payments" class="w-full text-left text-xs border-collapse">
                        <thead>
                            <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase tracking-wider font-semibold">
                                <th class="py-3 px-4">Request No</th>
                                <th class="py-3 px-4">Student Info</th>
                                <th class="py-3 px-4">Method / Ref</th>
                                <th class="py-3 px-4 text-right">Amount</th>
                                <th class="py-3 px-4 text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-gray-700 font-medium">
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-3.5 px-4 font-bold text-brand-dark">DR-2026-0012</td>
                                <td class="py-3.5 px-4">
                                    <div class="font-bold text-brand-dark">Juan Dela Cruz</div>
                                    <div class="text-[10px] text-gray-500">2026-00045</div>
                                </td>
                                <td class="py-3.5 px-4">
                                    <div class="font-semibold text-gray-800">GCash</div>
                                    <div class="text-[10px] font-mono text-gray-500">9021849201</div>
                                </td>
                                <td class="py-3.5 px-4 text-right font-bold text-brand-dark">₱150.00</td>
                                <td class="py-3.5 px-4 text-center">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-blue-100 text-blue-800">Pending Verification</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-3.5 px-4 font-bold text-brand-dark">DR-2026-0018</td>
                                <td class="py-3.5 px-4">
                                    <div class="font-bold text-brand-dark">Maria Clara</div>
                                    <div class="text-[10px] text-gray-500">2026-00088</div>
                                </td>
                                <td class="py-3.5 px-4">
                                    <div class="font-semibold text-gray-800">Bank Transfer</div>
                                    <div class="text-[10px] font-mono text-gray-500">UB-8830192</div>
                                </td>
                                <td class="py-3.5 px-4 text-right font-bold text-brand-dark">₱300.00</td>
                                <td class="py-3.5 px-4 text-center">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-blue-100 text-blue-800">Pending Verification</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-3.5 px-4 font-bold text-brand-dark">DR-2026-0021</td>
                                <td class="py-3.5 px-4">
                                    <div class="font-bold text-brand-dark">Jose Rizal</div>
                                    <div class="text-[10px] text-gray-500">2026-00003</div>
                                </td>
                                <td class="py-3.5 px-4">
                                    <div class="font-semibold text-gray-800">GCash</div>
                                    <div class="text-[10px] font-mono text-gray-500">9175550192</div>
                                </td>
                                <td class="py-3.5 px-4 text-right font-bold text-brand-dark">₱100.00</td>
                                <td class="py-3.5 px-4 text-center">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-blue-100 text-blue-800">Pending Verification</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="p-4 bg-gray-50/80 border-t border-gray-100 mt-auto flex items-center space-x-2 text-xs text-gray-500">
                    <i data-lucide="info" class="w-4 h-4 text-brand-secondary shrink-0"></i>
                    <p>Verifying a payment automatically marks the linked document request as <strong>Paid</strong> and alerts the Registrar office.</p>
                </div>
            </section>

            <!-- Right Panel: Clearance Overview & System Activity (1 Col) -->
            <div class="space-y-6">

                <!-- Cashier Clearance Status Widget -->
                <section class="bg-white border border-gray-200 rounded-md p-5 shadow-xs space-y-4">
                    <div class="flex items-center justify-between border-b border-gray-100 pb-3">
                        <div class="flex items-center space-x-2">
                            <i data-lucide="shield-check" class="w-5 h-5 text-brand-primary"></i>
                            <h2 class="text-sm font-bold text-brand-dark">Cashier Clearance Office</h2>
                        </div>
                        <a href="clearance.php" class="text-xs font-semibold text-brand-primary hover:underline">Manage</a>
                    </div>

                    <p class="text-xs text-gray-600">Review student financial holds for current semester clearance approvals.</p>

                    <div class="space-y-2">
                        <div class="flex items-center justify-between text-xs p-2 bg-gray-50 rounded border border-gray-100">
                            <span class="text-gray-600 font-medium">Cleared Students</span>
                            <span id="lbl_cleared_count" class="font-bold text-emerald-700">1,240</span>
                        </div>
                        <div class="flex items-center justify-between text-xs p-2 bg-amber-50/50 rounded border border-amber-100">
                            <span class="text-amber-800 font-medium">Unpaid Holds (Action Needed)</span>
                            <span id="lbl_holds_count" class="font-bold text-amber-700">14</span>
                        </div>
                    </div>
                </section>

                <!-- Quick Activity Stream -->
                <section class="bg-white border border-gray-200 rounded-md p-5 shadow-xs space-y-4">
                    <div class="flex items-center justify-between border-b border-gray-100 pb-3">
                        <div class="flex items-center space-x-2">
                            <i data-lucide="activity" class="w-5 h-5 text-brand-secondary"></i>
                            <h2 class="text-sm font-bold text-brand-dark">Recent Transactions</h2>
                        </div>
                        <a href="payments.php?tab=transactions" class="text-xs font-semibold text-brand-primary hover:underline">Log</a>
                    </div>

                    <div class="space-y-3 text-xs" id="activity_stream">
                        <div class="flex items-start justify-between pb-2 border-b border-gray-100">
                            <div>
                                <p class="font-bold text-brand-dark">OR-2026-0042 Issued</p>
                                <p class="text-[10px] text-gray-500">Walk-in Cash • ₱150.00</p>
                            </div>
                            <span class="text-[10px] text-gray-400">10m ago</span>
                        </div>
                        <div class="flex items-start justify-between pb-2 border-b border-gray-100">
                            <div>
                                <p class="font-bold text-brand-dark">DR-2026-0009 Verified</p>
                                <p class="text-[10px] text-gray-500">GCash Ref: 88120391 • ₱200.00</p>
                            </div>
                            <span class="text-[10px] text-gray-400">35m ago</span>
                        </div>
                        <div class="flex items-start justify-between">
                            <div>
                                <p class="font-bold text-red-700">Ref: 001928 Rejected</p>
                                <p class="text-[10px] text-gray-500">Reason: Invalid reference number</p>
                            </div>
                            <span class="text-[10px] text-gray-400">1h ago</span>
                        </div>
                    </div>
                </section>

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
            lucide.createIcons();

            $('#mobile_menu_btn').on('click', function() {
                $('#mobile_menu').toggleClass('hidden');
            });
        });
    </script>
</body>

</html>