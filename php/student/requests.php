<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Document Requests</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- JQuery -->
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

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center space-x-1">
                    <a href="dashboard.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Dashboard</a>
                    <a href="enrollment.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Enrollment</a>
                    <a href="grades.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Grades</a>
                    <a href="clearance.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Clearance</a>
                    <a href="requests.php" class="px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30 border border-brand-secondary/20">Requests</a>
                    <a href="profile.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Profile</a>
                </nav>

                <!-- Action Controls -->
                <div class="flex items-center space-x-3">

                    <!-- Notification Bell -->
                    <a href="notifications.php" id="nav_notification_link" class="relative p-2 text-gray-500 hover:text-brand-primary rounded-md hover:bg-gray-100 transition-colors" title="Notifications">
                        <i data-lucide="bell" class="w-5 h-5"></i>
                        <span id="nav_unread_count" class="absolute top-1 right-1 inline-flex items-center justify-center px-1.5 py-0.5 text-[10px] font-bold leading-none text-white bg-red-600 rounded-full">3</span>
                    </a>

                    <div class="h-5 w-px bg-gray-200 hidden md:block"></div>

                    <!-- User Info / Profile -->
                    <div class="hidden md:flex items-center space-x-2">
                        <div class="text-right">
                            <p id="nav_student_name" class="text-xs font-semibold text-brand-dark">John Doe</p>
                            <p id="nav_student_id" class="text-[10px] text-gray-500">2026-00001</p>
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
            <a href="enrollment.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Enrollment</a>
            <a href="grades.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Grades</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
            <a href="requests.php" class="block px-3 py-2 rounded-md text-base font-semibold text-brand-primary bg-brand-accent/30">Requests</a>
            <a href="profile.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Profile</a>
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

        <!-- Page Header -->
        <div>
            <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Document Requests</h1>
            <p class="text-sm text-gray-500">Submit requests for official academic credentials and track processing status.</p>
        </div>

        <!-- New Document Request Form Card -->
        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs">
            <div class="flex items-center space-x-3 mb-5 pb-3 border-b border-gray-100">
                <div class="p-2 rounded-md bg-brand-accent/40 text-brand-primary">
                    <i data-lucide="file-plus-2" class="w-5 h-5"></i>
                </div>
                <div>
                    <h2 class="text-base font-bold text-brand-dark">Request New Document</h2>
                    <p class="text-xs text-gray-500">Fill out the fields below to file a formal credential request</p>
                </div>
            </div>

            <form id="form_submit_request" method="POST" action="requests.php" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="select_document_type" class="block text-xs font-semibold text-gray-700 mb-1">Document Type *</label>
                        <select id="select_document_type" name="document_type_id" required class="w-full px-3 py-2 border border-gray-300 rounded-md text-xs text-brand-dark bg-white focus:ring-2 focus:ring-brand-primary focus:border-brand-primary outline-none">
                            <option value="" disabled selected>Select document...</option>
                            <option value="1">Official Transcript of Record (TOR)</option>
                            <option value="2">Certificate of Enrollment (COE)</option>
                            <option value="3">Certificate of Good Moral Character</option>
                            <option value="4">Honorable Dismissal / Transfer Credentials</option>
                        </select>
                    </div>

                    <div>
                        <label for="select_purpose" class="block text-xs font-semibold text-gray-700 mb-1">Purpose *</label>
                        <select id="select_purpose" name="purpose" required class="w-full px-3 py-2 border border-gray-300 rounded-md text-xs text-brand-dark bg-white focus:ring-2 focus:ring-brand-primary focus:border-brand-primary outline-none">
                            <option value="" disabled selected>Select purpose...</option>
                            <option value="employment">Employment</option>
                            <option value="further_studies">Further Studies / Transfer</option>
                            <option value="scholarship">Scholarship Application</option>
                            <option value="visa">Visa / Travel Requirements</option>
                        </select>
                    </div>

                    <div>
                        <label for="input_quantity" class="block text-xs font-semibold text-gray-700 mb-1">Number of Copies *</label>
                        <input type="number" id="input_quantity" name="quantity" min="1" max="10" value="1" required class="w-full px-3 py-2 border border-gray-300 rounded-md text-xs text-brand-dark bg-white focus:ring-2 focus:ring-brand-primary focus:border-brand-primary outline-none">
                    </div>
                </div>

                <div>
                    <label for="textarea_remarks" class="block text-xs font-semibold text-gray-700 mb-1">Additional Notes / Special Instructions</label>
                    <textarea id="textarea_remarks" name="remarks" rows="2" placeholder="Optional notes for registrar office..." class="w-full px-3 py-2 border border-gray-300 rounded-md text-xs text-brand-dark bg-white focus:ring-2 focus:ring-brand-primary focus:border-brand-primary outline-none"></textarea>
                </div>

                <div class="flex justify-end pt-2">
                    <button type="submit" id="btn_submit_request" class="inline-flex items-center space-x-2 px-4 py-2 bg-brand-primary text-white text-xs font-semibold rounded-md hover:bg-brand-primary/90 transition-colors shadow-xs">
                        <i data-lucide="send" class="w-4 h-4"></i>
                        <span>Submit Request</span>
                    </button>
                </div>
            </form>
        </section>

        <!-- Requests History Table Card -->
        <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
            <div class="p-5 border-b border-gray-100 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="p-2 rounded-md bg-brand-accent/40 text-brand-primary">
                        <i data-lucide="history" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-brand-dark">Request History & Tracking</h2>
                        <p class="text-xs text-gray-500">Complete list of previous requests and real-time statuses</p>
                    </div>
                </div>
            </div>

            <!-- Table with All Possible Backend States -->
            <div class="overflow-x-auto">
                <table id="table_requests_history" class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase tracking-wider font-semibold">
                            <th class="py-3 px-5">Request Ref</th>
                            <th class="py-3 px-5">Document Title</th>
                            <th class="py-3 px-5">Date Filed</th>
                            <th class="py-3 px-5 text-center">Payment</th>
                            <th class="py-3 px-5 text-center">Status</th>
                            <th class="py-3 px-5 text-right">Actions / Remarks</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-gray-700 font-medium">

                        <!-- STATE 1: APPROVED / COMPLETED -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-bold text-brand-dark">REQ-2026-001</td>
                            <td class="py-3.5 px-5">Certificate of Enrollment (COE)</td>
                            <td class="py-3.5 px-5 text-gray-500">Oct 01, 2026</td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Paid</span>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Approved</span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <a href="download_doc.php?id=REQ-2026-001" class="inline-flex items-center space-x-1 px-2.5 py-1 bg-brand-primary text-white rounded text-[11px] font-semibold hover:bg-brand-primary/90 transition-colors">
                                    <i data-lucide="download" class="w-3.5 h-3.5"></i>
                                    <span>Download PDF</span>
                                </a>
                            </td>
                        </tr>

                        <!-- STATE 2: PENDING PAYMENT -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-bold text-brand-dark">REQ-2026-002</td>
                            <td class="py-3.5 px-5">Official Transcript of Record (TOR)</td>
                            <td class="py-3.5 px-5 text-gray-500">Oct 02, 2026</td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-amber-100 text-amber-800">Unpaid</span>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-amber-100 text-amber-800">Pending</span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <a href="pay_request.php?id=REQ-2026-002" class="inline-flex items-center space-x-1 px-2.5 py-1 bg-amber-600 text-white rounded text-[11px] font-semibold hover:bg-amber-700 transition-colors">
                                    <i data-lucide="credit-card" class="w-3.5 h-3.5"></i>
                                    <span>Pay Fee</span>
                                </a>
                            </td>
                        </tr>

                        <!-- STATE 3: PROCESSING / IN REVIEW -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-bold text-brand-dark">REQ-2026-003</td>
                            <td class="py-3.5 px-5">Certificate of Good Moral Character</td>
                            <td class="py-3.5 px-5 text-gray-500">Sep 28, 2026</td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Paid</span>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-blue-100 text-blue-800">Processing</span>
                            </td>
                            <td class="py-3.5 px-5 text-right text-gray-500 italic">
                                Under review by OSA
                            </td>
                        </tr>

                        <!-- STATE 4: READY FOR PHYSICAL PICKUP -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-bold text-brand-dark">REQ-2026-004</td>
                            <td class="py-3.5 px-5">Honorable Dismissal & Credentials</td>
                            <td class="py-3.5 px-5 text-gray-500">Sep 20, 2026</td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Paid</span>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-purple-100 text-purple-800">Ready for Pickup</span>
                            </td>
                            <td class="py-3.5 px-5 text-right text-brand-dark font-semibold">
                                Counter 2 (Registrar)
                            </td>
                        </tr>

                        <!-- STATE 5: REJECTED / DISAPPROVED -->
                        <tr class="hover:bg-gray-50/50 transition-colors bg-red-50/30">
                            <td class="py-3.5 px-5 font-bold text-brand-dark">REQ-2026-005</td>
                            <td class="py-3.5 px-5">Form 137 / Official Transcript</td>
                            <td class="py-3.5 px-5 text-gray-500">Sep 15, 2026</td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-gray-100 text-gray-600">Refunded</span>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-red-100 text-red-800">Rejected</span>
                            </td>
                            <td class="py-3.5 px-5 text-right text-red-600 font-medium">
                                Unresolved Library clearance
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Footer Policy Note -->
            <div class="p-4 bg-gray-50/80 border-t border-gray-100 flex items-center space-x-2 text-xs text-gray-500">
                <i data-lucide="info" class="w-4 h-4 text-brand-secondary shrink-0"></i>
                <p>Digital downloads are available for 30 days following approval. Physical copies require university ID verification upon pickup.</p>
            </div>
        </section>

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