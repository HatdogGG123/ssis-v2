<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Course Enrollment</title>

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
                    <a href="enrollment.php" class="px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30 border border-brand-secondary/20">Enrollment</a>
                    <a href="grades.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Grades</a>
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
            <a href="enrollment.php" class="block px-3 py-2 rounded-md text-base font-semibold text-brand-primary bg-brand-accent/30">Enrollment</a>
            <a href="grades.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Grades</a>
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

        <!-- Page Header -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Course Enrollment</h1>
                <p class="text-sm text-gray-500">Select subjects for the active term and track your enrollment status.</p>
            </div>
            <div class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-md px-3 py-2 text-xs font-semibold text-gray-700 shadow-xs">
                <i data-lucide="calendar" class="w-4 h-4 text-brand-secondary"></i>
                <span>Active Term: <strong id="lbl_current_term" class="text-brand-dark">1st Semester, AY 2026-2027</strong></span>
            </div>
        </div>

        <!-- Enrollment Status Banner (Conditional View: Active Request / Rejection Reason) -->
        <section id="banner_enrollment_status" class="bg-white border border-gray-200 rounded-md p-6 shadow-xs space-y-4">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-gray-100 pb-4">
                <div class="flex items-start space-x-3">
                    <div class="p-2.5 rounded-md bg-blue-50 text-blue-600 shrink-0 mt-0.5">
                        <i data-lucide="clock" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <div class="flex items-center space-x-2">
                            <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Current Request Status</span>
                            <span id="badge_enrollment_status" class="inline-flex items-center px-2.5 py-0.5 rounded-md text-xs font-semibold bg-blue-100 text-blue-800">
                                Pending
                            </span>
                        </div>
                        <p class="text-sm font-bold text-brand-dark mt-1">Request ID: <span id="lbl_request_no">#ENR-2026-0042</span></p>
                    </div>
                </div>

                <!-- Action Button (Allowed only while Pending) -->
                <div>
                    <button id="btn_cancel_request" type="button" class="inline-flex items-center space-x-2 px-3 py-2 border border-red-200 rounded-md text-xs font-semibold text-red-600 bg-red-50 hover:bg-red-100 transition-colors">
                        <i data-lucide="x-circle" class="w-4 h-4"></i>
                        <span>Cancel Request</span>
                    </button>
                </div>
            </div>

            <div class="text-xs text-gray-600 space-y-1">
                <p>Your request was submitted on <span id="lbl_submitted_date" class="font-semibold text-brand-dark">October 02, 2026</span> and is currently queued for review by the Registrar.</p>
                <p id="lbl_rejection_reason_container" class="hidden text-red-600 font-medium pt-1">
                    <strong>Rejection Reason:</strong> <span id="lbl_rejection_reason">--</span>
                </p>
            </div>
        </section>

        <!-- Main Enrollment Form Container -->
        <form id="form_enrollment" action="enrollment.php" method="POST" class="space-y-8">

            <!-- Hidden Fields for Backend -->
            <input type="hidden" name="csrf_token" id="csrf_token" value="">

            <!-- Subject Selection Card -->
            <div class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">

                <!-- Card Header with Filters -->
                <div class="p-5 border-b border-gray-100 flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="flex items-center space-x-3">
                        <div class="p-2 rounded-md bg-brand-accent/40 text-brand-primary">
                            <i data-lucide="book-open" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h2 class="text-base font-bold text-brand-dark">Available Program Subjects</h2>
                            <p class="text-xs text-gray-500">Pick subjects from your program curriculum to enroll</p>
                        </div>
                    </div>

                    <!-- Filter Controls -->
                    <div class="flex items-center space-x-3 text-xs">
                        <label for="filter_year_level" class="font-semibold text-gray-600">Year Level:</label>
                        <select id="filter_year_level" name="year_level" class="px-3 py-1.5 border border-gray-300 rounded-md text-xs text-brand-dark bg-white focus:ring-2 focus:ring-brand-primary focus:border-brand-primary outline-none">
                            <option value="1">1st Year</option>
                            <option value="2">2nd Year</option>
                            <option value="3" selected>3rd Year</option>
                            <option value="4">4th Year</option>
                        </select>
                    </div>
                </div>

                <!-- Subjects Table -->
                <div class="overflow-x-auto">
                    <table id="table_available_subjects" class="w-full text-left text-xs border-collapse">
                        <thead>
                            <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase tracking-wider font-semibold">
                                <th class="py-3 px-5 w-10 text-center">Select</th>
                                <th class="py-3 px-5">Code</th>
                                <th class="py-3 px-5">Subject Title</th>
                                <th class="py-3 px-5 text-center">Units</th>
                                <th class="py-3 px-5">Prerequisites</th>
                                <th class="py-3 px-5 text-center">Semester</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-gray-700 font-medium">
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-3.5 px-5 text-center">
                                    <input type="checkbox" name="subject_ids[]" value="101" data-units="3" class="chk-subject w-4 h-4 text-brand-primary rounded-xs border-gray-300 focus:ring-brand-primary cursor-pointer" checked>
                                </td>
                                <td class="py-3.5 px-5 font-bold text-brand-dark">CCS109</td>
                                <td class="py-3.5 px-5">System Analysis & Design</td>
                                <td class="py-3.5 px-5 text-center font-semibold text-brand-dark">3.0</td>
                                <td class="py-3.5 px-5 text-gray-500">CC102</td>
                                <td class="py-3.5 px-5 text-center">1st Sem</td>
                            </tr>
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-3.5 px-5 text-center">
                                    <input type="checkbox" name="subject_ids[]" value="102" data-units="3" class="chk-subject w-4 h-4 text-brand-primary rounded-xs border-gray-300 focus:ring-brand-primary cursor-pointer" checked>
                                </td>
                                <td class="py-3.5 px-5 font-bold text-brand-dark">CC106</td>
                                <td class="py-3.5 px-5">Applications Development & Emerging Tech</td>
                                <td class="py-3.5 px-5 text-center font-semibold text-brand-dark">3.0</td>
                                <td class="py-3.5 px-5 text-gray-500">CC105</td>
                                <td class="py-3.5 px-5 text-center">1st Sem</td>
                            </tr>
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-3.5 px-5 text-center">
                                    <input type="checkbox" name="subject_ids[]" value="103" data-units="3" class="chk-subject w-4 h-4 text-brand-primary rounded-xs border-gray-300 focus:ring-brand-primary cursor-pointer" checked>
                                </td>
                                <td class="py-3.5 px-5 font-bold text-brand-dark">CS301</td>
                                <td class="py-3.5 px-5">Operating Systems</td>
                                <td class="py-3.5 px-5 text-center font-semibold text-brand-dark">3.0</td>
                                <td class="py-3.5 px-5 text-gray-500">CC104</td>
                                <td class="py-3.5 px-5 text-center">1st Sem</td>
                            </tr>
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-3.5 px-5 text-center">
                                    <input type="checkbox" name="subject_ids[]" value="104" data-units="3" class="chk-subject w-4 h-4 text-brand-primary rounded-xs border-gray-300 focus:ring-brand-primary cursor-pointer">
                                </td>
                                <td class="py-3.5 px-5 font-bold text-brand-dark">CS302</td>
                                <td class="py-3.5 px-5">Automata Theory & Formal Languages</td>
                                <td class="py-3.5 px-5 text-center font-semibold text-brand-dark">3.0</td>
                                <td class="py-3.5 px-5 text-gray-500">MATH102</td>
                                <td class="py-3.5 px-5 text-center">1st Sem</td>
                            </tr>
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="py-3.5 px-5 text-center">
                                    <input type="checkbox" name="subject_ids[]" value="105" data-units="3" class="chk-subject w-4 h-4 text-brand-primary rounded-xs border-gray-300 focus:ring-brand-primary cursor-pointer">
                                </td>
                                <td class="py-3.5 px-5 font-bold text-brand-dark">GE108</td>
                                <td class="py-3.5 px-5">Ethics</td>
                                <td class="py-3.5 px-5 text-center font-semibold text-brand-dark">3.0</td>
                                <td class="py-3.5 px-5 text-gray-400">None</td>
                                <td class="py-3.5 px-5 text-center">1st Sem</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Footer Summary & Submission -->
                <div class="p-5 bg-gray-50/80 border-t border-gray-100 flex flex-col md:flex-row md:items-center justify-between gap-4">

                    <!-- Unit Tracker Progress -->
                    <div class="space-y-2 max-w-md w-full">
                        <div class="flex items-center justify-between text-xs">
                            <span class="font-semibold text-gray-700">Total Selected Units:</span>
                            <span class="font-bold text-brand-dark">
                                <span id="lbl_total_units">9.0</span> / <span id="lbl_max_units">24.0</span> Units Allowed
                            </span>
                        </div>
                        <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div id="bar_unit_progress" class="h-full bg-brand-secondary transition-all duration-300" style="width: 37.5%;"></div>
                        </div>
                        <p id="lbl_unit_warning" class="text-[11px] text-red-600 font-semibold hidden">
                            Exceeded maximum unit limit set by administrator!
                        </p>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button id="btn_submit_enrollment" type="submit" class="w-full md:w-auto inline-flex items-center justify-center space-x-2 bg-brand-primary hover:bg-brand-primary/90 text-white font-medium py-2.5 px-5 rounded-md text-sm transition-colors shadow-xs">
                            <i data-lucide="send" class="w-4 h-4"></i>
                            <span id="btn_text_enrollment">Submit Enrollment Request</span>
                        </button>
                    </div>

                </div>

            </div>

        </form>

        <!-- Confirmed Enrolled Subjects Section (Appears after status becomes 'Enrolled') -->
        <section id="section_official_enrolled" class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
            <div class="p-5 border-b border-gray-100 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="p-2 rounded-md bg-emerald-50 text-emerald-600">
                        <i data-lucide="check-circle" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-brand-dark">Confirmed Enrolled Subjects</h2>
                        <p class="text-xs text-gray-500">Official subjects confirmed by the Registrar for this term</p>
                    </div>
                </div>
                <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-emerald-100 text-emerald-800">
                    Official Record
                </span>
            </div>

            <!-- Enrolled List Table -->
            <div class="overflow-x-auto">
                <table id="table_enrolled_subjects" class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase tracking-wider font-semibold">
                            <th class="py-3 px-5">Code</th>
                            <th class="py-3 px-5">Subject Title</th>
                            <th class="py-3 px-5 text-center">Units</th>
                            <th class="py-3 px-5 text-right">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-gray-700 font-medium">
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-bold text-brand-dark">CCS109</td>
                            <td class="py-3.5 px-5">System Analysis & Design</td>
                            <td class="py-3.5 px-5 text-center font-semibold text-brand-dark">3.0</td>
                            <td class="py-3.5 px-5 text-right">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Confirmed Enrolled</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-bold text-brand-dark">CC106</td>
                            <td class="py-3.5 px-5">Applications Development & Emerging Tech</td>
                            <td class="py-3.5 px-5 text-center font-semibold text-brand-dark">3.0</td>
                            <td class="py-3.5 px-5 text-right">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Confirmed Enrolled</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>

    <!-- Formal Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12 py-6 text-center text-xs text-gray-500">
        <div class="max-w-7xl mx-auto px-4">
            <p>Paxton University Student Services Information System (SSIS) &copy; 2026. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Interactive Scripts & Unit Calculation -->
    <script>
        $(document).ready(function() {
            // Render Lucide Icons
            lucide.createIcons();

            // Mobile menu toggle
            $('#mobile_menu_btn').on('click', function() {
                $('#mobile_menu').toggleClass('hidden');
            });

            // Dynamic Unit Calculation & Guard Rule
            const maxUnits = 24.0;

            function calculateUnits() {
                let total = 0;
                $('.chk-subject:checked').each(function() {
                    total += parseFloat($(this).data('units')) || 0;
                });

                $('#lbl_total_units').text(total.toFixed(1));
                const percentage = Math.min((total / maxUnits) * 100, 100);
                $('#bar_unit_progress').css('width', percentage + '%');

                if (total > maxUnits) {
                    $('#lbl_unit_warning').removeClass('hidden');
                    $('#bar_unit_progress').removeClass('bg-brand-secondary').addClass('bg-red-600');
                    $('#btn_submit_enrollment').prop('disabled', true).addClass('opacity-50 cursor-not-allowed');
                } else {
                    $('#lbl_unit_warning').addClass('hidden');
                    $('#bar_unit_progress').removeClass('bg-red-600').addClass('bg-brand-secondary');
                    $('#btn_submit_enrollment').prop('disabled', false).removeClass('opacity-50 cursor-not-allowed');
                }
            }

            $('.chk-subject').on('change', calculateUnits);
            calculateUnits(); // Run initial calculation
        });
    </script>
</body>

</html>