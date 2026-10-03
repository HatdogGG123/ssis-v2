<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Academic Grades</title>

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
                <nav class="hidden lg:flex items-center space-x-1">
                    <a href="dashboard.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Dashboard</a>
                    <a href="enrollment.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Enrollment</a>
                    <a href="grades.php" class="px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30 border border-brand-secondary/20">Grades</a>
                    <a href="clearance.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Clearance</a>
                    <a href="requests.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Requests</a>
                    <a href="profile.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Profile</a>
                    <a href="notifications.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Notifications</a>
                </nav>

                <!-- Action Controls -->
                <div class="flex items-center space-x-3">
                    <div class="h-5 w-px bg-gray-200 hidden md:block"></div>

                    <!-- User Info / Profile -->
                    <div class="hidden lg:flex items-center space-x-2">
                        <div class="text-right">
                            <p id="nav_student_name" class="text-xs font-semibold text-brand-dark">John Doe</p>
                            <p id="nav_student_id" class="text-[10px] text-gray-500">2026-00001</p>
                        </div>
                        <a href="logout.php" id="nav_logout_btn" class="p-2 text-gray-400 hover:text-red-600 rounded-md hover:bg-gray-100 transition-colors" title="Log Out">
                            <i data-lucide="log-out" class="w-5 h-5"></i>
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button id="mobile_menu_btn" type="button" class="lg:hidden p-2 rounded-md text-gray-600 hover:text-brand-primary hover:bg-gray-100 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu preview-icon size-5">
                            <path d="M4 5h16" />
                            <path d="M4 12h16" />
                            <path d="M4 19h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile_menu" class="hidden lg:hidden border-t border-gray-200 bg-white px-4 pt-2 pb-4 space-y-1">
            <a href="dashboard.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Dashboard</a>
            <a href="enrollment.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Enrollment</a>
            <a href="grades.php" class="block px-3 py-2 rounded-md text-base font-semibold text-brand-primary bg-brand-accent/30">Grades</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
            <a href="requests.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Requests</a>
            <a href="profile.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Profile</a>
            <a href="notifications.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Notifications</a>
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

        <!-- Page Header & Filter Toolbar -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Academic Grades</h1>
                <p class="text-sm text-gray-500">View official grade evaluations and academic performance ratings.</p>
            </div>

            <!-- Filter Controls & Print Action -->
            <div class="flex flex-wrap items-center gap-3">
                <form id="form_filter_term" method="GET" action="grades.php" class="flex items-center space-x-2">
                    <label for="select_term" class="text-xs font-semibold text-gray-600">Term:</label>
                    <select id="select_term" name="term_id" class="px-3 py-2 border border-gray-300 rounded-md text-xs text-brand-dark bg-white focus:ring-2 focus:ring-brand-primary focus:border-brand-primary outline-none shadow-xs">
                        <option value="2026-1" selected>1st Sem, AY 2026-2027</option>
                        <option value="2025-2">2nd Sem, AY 2025-2026</option>
                        <option value="2025-1">1st Sem, AY 2025-2026</option>
                    </select>
                </form>
            </div>
        </div>

        <!-- Academic Summary Metrics -->
        <section class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="bg-white border border-gray-200 rounded-md p-5 shadow-xs flex items-center space-x-4">
                <div class="p-3 bg-brand-accent/40 text-brand-primary rounded-md shrink-0">
                    <i data-lucide="award" class="w-6 h-6"></i>
                </div>
                <div>
                    <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider block">Term GPA</span>
                    <span id="lbl_term_gpa" class="text-xl font-bold text-brand-dark">1.50</span>
                    <span class="text-[10px] text-emerald-700 font-semibold block">Good Standing</span>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-md p-5 shadow-xs flex items-center space-x-4">
                <div class="p-3 bg-brand-accent/40 text-brand-primary rounded-md shrink-0">
                    <i data-lucide="trending-up" class="w-6 h-6"></i>
                </div>
                <div>
                    <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider block">Cumulative GPA</span>
                    <span id="lbl_cumulative_gpa" class="text-xl font-bold text-brand-dark">1.62</span>
                    <span class="text-[10px] text-gray-500 block">Overall Performance</span>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-md p-5 shadow-xs flex items-center space-x-4">
                <div class="p-3 bg-brand-accent/40 text-brand-primary rounded-md shrink-0">
                    <i data-lucide="book-check" class="w-6 h-6"></i>
                </div>
                <div>
                    <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider block">Earned Units</span>
                    <span id="lbl_earned_units" class="text-xl font-bold text-brand-dark">12.0 / 12.0</span>
                    <span class="text-[10px] text-gray-500 block">This Term</span>
                </div>
            </div>
        </section>

        <!-- Released Grades Card -->
        <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
            <div class="p-5 border-b border-gray-100 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="p-2 rounded-md bg-brand-accent/40 text-brand-primary">
                        <i data-lucide="file-spreadsheet" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-brand-dark">Grade Evaluation Details</h2>
                        <p id="lbl_selected_term_display" class="text-xs text-gray-500">Displaying released grades for 1st Sem, AY 2026-2027</p>
                    </div>
                </div>
            </div>

            <!-- Responsive Grades Table -->
            <div class="overflow-x-auto">
                <table id="table_student_grades" class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase tracking-wider font-semibold">
                            <th class="py-3 px-5">Code</th>
                            <th class="py-3 px-5">Subject Title</th>
                            <th class="py-3 px-5 text-center">Units</th>
                            <th class="py-3 px-5 text-center">Grade</th>
                            <th class="py-3 px-5 text-right">Evaluation</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-gray-700 font-medium">
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-bold text-brand-dark">CCS109</td>
                            <td class="py-3.5 px-5">System Analysis & Design</td>
                            <td class="py-3.5 px-5 text-center font-semibold text-brand-dark">3.0</td>
                            <td class="py-3.5 px-5 text-center font-bold text-brand-dark text-sm">1.25</td>
                            <td class="py-3.5 px-5 text-right font-semibold text-emerald-700">Passed</td>
                        </tr>
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-bold text-brand-dark">CC106</td>
                            <td class="py-3.5 px-5">Applications Development & Emerging Tech</td>
                            <td class="py-3.5 px-5 text-center font-semibold text-brand-dark">3.0</td>
                            <td class="py-3.5 px-5 text-center font-bold text-brand-dark text-sm">1.50</td>
                            <td class="py-3.5 px-5 text-right font-semibold text-emerald-700">Passed</td>
                        </tr>
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-bold text-brand-dark">MATH101</td>
                            <td class="py-3.5 px-5">Calculus I</td>
                            <td class="py-3.5 px-5 text-center font-semibold text-brand-dark">3.0</td>
                            <td class="py-3.5 px-5 text-center font-bold text-brand-dark text-sm">1.75</td>
                            <td class="py-3.5 px-5 text-right font-semibold text-emerald-700">Passed</td>
                        </tr>
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-bold text-brand-dark">CS301</td>
                            <td class="py-3.5 px-5">Operating Systems</td>
                            <td class="py-3.5 px-5 text-center font-semibold text-brand-dark">3.0</td>
                            <td class="py-3.5 px-5 text-center font-bold text-brand-dark text-sm">1.50</td>
                            <td class="py-3.5 px-5 text-right font-semibold text-emerald-700">Passed</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Policy Footer Note -->
            <div class="p-4 bg-gray-50/80 border-t border-gray-100 flex items-center space-x-2 text-xs text-gray-500">
                <i data-lucide="info" class="w-4 h-4 text-brand-secondary shrink-0"></i>
                <p>Unreleased or draft grades submitted by instructors are hidden until verified and published by the Registrar.</p>
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

            // Trigger form submission on term selection change
            $('#select_term').on('change', function() {
                $('#form_filter_term').submit();
            });
        });
    </script>
</body>

</html>