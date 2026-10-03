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
                    <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
                    <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Clearance</a>
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
            <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Clearance</a>
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

    <!-- Main Content -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">
        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Student Clearance Queue</h1>
                <p class="text-sm text-gray-500">Monitor departmental clearance statuses, manage holds, and grant registrar sign-offs.</p>
            </div>
            <div class="grid grid-cols-3 gap-3">
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Cleared</span>
                    <span class="text-base font-bold text-emerald-700">142</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Pending Holds</span>
                    <span class="text-base font-bold text-amber-700">18</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Blocked</span>
                    <span class="text-base font-bold text-red-700">5</span>
                </div>
            </div>
        </section>

        <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
            <div class="p-5 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <h2 class="text-base font-bold text-brand-dark">Clearance Status Matrix</h2>
                <input type="text" placeholder="Search Student Name or ID..." class="px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary">
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase font-semibold">
                            <th class="py-3 px-5">Student</th>
                            <th class="py-3 px-5 text-center">Library</th>
                            <th class="py-3 px-5 text-center">Accounting</th>
                            <th class="py-3 px-5 text-center">Department</th>
                            <th class="py-3 px-5 text-center">Registrar Status</th>
                            <th class="py-3 px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 font-medium text-gray-700">
                        <!-- Student 1 -->
                        <tr class="hover:bg-gray-50/50">
                            <td class="py-3.5 px-5">
                                <p class="font-bold text-brand-dark">John Doe</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00001 (BSCS)</p>
                            </td>
                            <td class="py-3.5 px-5 text-center"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span></td>
                            <td class="py-3.5 px-5 text-center"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span></td>
                            <td class="py-3.5 px-5 text-center"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span></td>
                            <td class="py-3.5 px-5 text-center"><span class="px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Fully Cleared</span></td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" onclick="openClearanceModal('John Doe', '2026-00001', 'BS Computer Science', 'Cleared', 'Fully Cleared')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">View Details</button>
                            </td>
                        </tr>
                        <!-- Student 2 -->
                        <tr class="hover:bg-gray-50/50">
                            <td class="py-3.5 px-5">
                                <p class="font-bold text-brand-dark">Jane Smith</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00002 (BSIT)</p>
                            </td>
                            <td class="py-3.5 px-5 text-center"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span></td>
                            <td class="py-3.5 px-5 text-center"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-red-100 text-red-800">Unpaid Balance</span></td>
                            <td class="py-3.5 px-5 text-center"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span></td>
                            <td class="py-3.5 px-5 text-center"><span class="px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-amber-100 text-amber-800">On Hold</span></td>
                            <td class="py-3.5 px-5 text-right space-x-1">
                                <button type="button" onclick="openClearanceModal('Jane Smith', '2026-00002', 'BS Information Technology', 'Unpaid Balance', 'On Hold')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">View Details</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Clearance Details Modal -->
    <div id="modal_clearance_details" class="fixed inset-0 z-50 hidden bg-gray-900/50 flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-xl overflow-hidden flex flex-col">
            <div class="p-5 border-b border-gray-200 bg-gray-50/50 flex items-center justify-between">
                <div>
                    <h3 class="text-base font-bold text-brand-dark">Detailed Clearance Profile</h3>
                    <p class="text-xs text-gray-500">Departmental sign-offs and active registration holds</p>
                </div>
                <button type="button" onclick="closeClearanceModal()" class="text-gray-400 hover:text-gray-600"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>

            <div class="p-6 space-y-5 text-xs">
                <!-- Student Header Info -->
                <div class="p-4 bg-gray-50 border border-gray-200 rounded-md flex items-center justify-between">
                    <div>
                        <p id="modal_student_name" class="font-bold text-sm text-brand-dark">John Doe</p>
                        <p id="modal_student_id" class="text-gray-500 font-mono">2026-00001 • BS Computer Science</p>
                    </div>
                    <span id="modal_overall_status" class="px-2.5 py-1 rounded-md text-xs font-bold bg-emerald-100 text-emerald-800">Fully Cleared</span>
                </div>

                <!-- Department Checklist Breakdown -->
                <div class="space-y-3">
                    <h4 class="font-bold text-xs uppercase tracking-wider text-gray-500">Departmental Clearances</h4>

                    <div class="divide-y divide-gray-100 border border-gray-200 rounded-md overflow-hidden">
                        <!-- University Library -->
                        <div class="p-3 bg-white flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <i data-lucide="book-open" class="w-4 h-4 text-gray-400"></i>
                                <div>
                                    <p class="font-bold text-brand-dark">University Library</p>
                                    <p class="text-[10px] text-gray-400">No unreturned books or outstanding fines</p>
                                </div>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span>
                        </div>

                        <!-- Accounting Office -->
                        <div class="p-3 bg-white flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <i data-lucide="credit-card" class="w-4 h-4 text-gray-400"></i>
                                <div>
                                    <p class="font-bold text-brand-dark">Accounting & Finance</p>
                                    <p id="modal_accounting_note" class="text-[10px] text-gray-400">Tuition fees settled in full</p>
                                </div>
                            </div>
                            <span id="modal_accounting_badge" class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span>
                        </div>

                        <!-- College Department -->
                        <div class="p-3 bg-white flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <i data-lucide="building" class="w-4 h-4 text-gray-400"></i>
                                <div>
                                    <p class="font-bold text-brand-dark">College Dean / Department</p>
                                    <p class="text-[10px] text-gray-400">Lab equipment returned & projects submitted</p>
                                </div>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span>
                        </div>

                        <!-- Guidance Office -->
                        <div class="p-3 bg-white flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <i data-lucide="users" class="w-4 h-4 text-gray-400"></i>
                                <div>
                                    <p class="font-bold text-brand-dark">Guidance & Counseling</p>
                                    <p class="text-[10px] text-gray-400">Exit interview completed</p>
                                </div>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Cleared</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-4 border-t border-gray-200 bg-gray-50/50 flex items-center justify-end space-x-2">
                <button type="button" onclick="closeClearanceModal()" class="px-4 py-2 font-semibold text-xs border border-gray-200 bg-white text-gray-700 rounded-md hover:bg-gray-50">Close Profile</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12 py-6 text-center text-xs text-gray-500">
        <p>Paxton University Student Services Information System (SSIS) &copy; 2026. All Rights Reserved.</p>
    </footer>

    <!-- Scripts -->
    <script>
        $(document).ready(function() {
            lucide.createIcons();
        });

        function openClearanceModal(name, id, program, acctStatus, overallStatus) {
            $('#modal_student_name').text(name);
            $('#modal_student_id').text(`${id} • ${program}`);
            $('#modal_overall_status').text(overallStatus);

            if (acctStatus === 'Unpaid Balance') {
                $('#modal_accounting_badge')
                    .removeClass('bg-emerald-100 text-emerald-800')
                    .addClass('bg-red-100 text-red-800')
                    .text('Unpaid Balance');
                $('#modal_accounting_note').text('Pending balance of $250.00 for prelim exams');
                $('#modal_overall_status')
                    .removeClass('bg-emerald-100 text-emerald-800')
                    .addClass('bg-amber-100 text-amber-800');
            } else {
                $('#modal_accounting_badge')
                    .removeClass('bg-red-100 text-red-800')
                    .addClass('bg-emerald-100 text-emerald-800')
                    .text('Cleared');
                $('#modal_accounting_note').text('Tuition fees settled in full');
                $('#modal_overall_status')
                    .removeClass('bg-amber-100 text-amber-800')
                    .addClass('bg-emerald-100 text-emerald-800');
            }

            $('#modal_clearance_details').removeClass('hidden');
        }

        function closeClearanceModal() {
            $('#modal_clearance_details').addClass('hidden');
        }

        $('#btn_mobile_menu').on('click', function() {
            $('#mobile_nav_menu').toggleClass('hidden');
            $('#icon_menu_open').toggleClass('hidden');
            $('#icon_menu_close').toggleClass('hidden');
        });
    </script>
</body>

</html>