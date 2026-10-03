<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Registrar Student Records</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

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

                <!-- Desktop Navigation Links (Updated Registrar Navigation Pages) -->
                <nav class="hidden lg:flex items-center space-x-1 text-xs">
                    <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Enrollment</a>
                    <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-medium text-brand-primary">Grades</a>
                    <a href="studentRecords.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-gray-600 hover:bg-gray-50 bg-brand-accent/30">Student Records</a>
                    <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
                    <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
                    <a href="announcements.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Announcements</a>
                    <a href="reports.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Reports</a>
                </nav>

                <!-- Action Controls -->
                <div class="flex items-center space-x-3">

                    <!-- Notification Bell -->
                    <a href="notifications.php" id="nav_notification_link" class="relative p-2 text-gray-500 hover:text-brand-primary rounded-md hover:bg-gray-100 transition-colors" title="Notifications">
                        <i data-lucide="bell" class="w-5 h-5"></i>
                        <span id="nav_unread_count" class="absolute top-1 right-1 inline-flex items-center justify-center px-1.5 py-0.5 text-[10px] font-bold leading-none text-white bg-red-600 rounded-full">2</span>
                    </a>

                    <div class="h-5 w-px bg-gray-200 hidden lg:block"></div>

                    <!-- User Info / Profile -->
                    <div class="hidden lg:flex items-center space-x-2">
                        <div class="text-right">
                            <p id="nav_staff_name" class="text-xs font-semibold text-brand-dark">Registrar Staff</p>
                            <p id="nav_staff_role" class="text-[10px] text-gray-500 uppercase font-bold tracking-wider">Registrar Module</p>
                        </div>
                        <a href="logout.php" id="nav_logout_btn" class="p-2 text-gray-400 hover:text-red-600 rounded-md hover:bg-gray-100 transition-colors" title="Log Out">
                            <i data-lucide="log-out" class="w-5 h-5"></i>
                        </a>
                    </div>

                    <!-- Mobile/Tablet Menu Button -->
                    <button id="mobile_menu_btn" type="button" class="lg:hidden p-2 rounded-md text-gray-600 hover:text-brand-primary hover:bg-gray-100 focus:outline-none">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile & Tablet Menu Dropdown (Updated Registrar Navigation Pages) -->
        <div id="mobile_menu" class="hidden lg:hidden border-t border-gray-200 bg-white px-4 pt-2 pb-4 space-y-1">
            <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Enrollment</a>
            <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Grades</a>
            <a href="studentRecords.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Student Records</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
            <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
            <a href="announcements.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Announcements</a>
            <a href="reports.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Reports</a>
            <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold text-brand-dark">Registrar Staff</p>
                    <p class="text-xs text-gray-500">Registrar Module</p>
                </div>
                <a href="logout.php" class="text-xs text-red-600 font-semibold hover:underline">Log Out</a>
            </div>
        </div>
    </header>

    <!-- Main Content Container -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">

        <!-- System Response / Alert Message Banner -->
        <div id="container_alert_message" class="hidden rounded-md p-4 text-xs font-medium border flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <i id="alert_icon" class="w-4 h-4 shrink-0"></i>
                <span id="alert_text"></span>
            </div>
            <button type="button" id="btn_dismiss_alert" class="text-gray-400 hover:text-gray-600">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>

        <!-- Page Header Banner & Primary CTA -->
        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="space-y-1">
                <div class="flex items-center space-x-2">
                    <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Student Records Management</h1>
                </div>
                <p class="text-sm text-gray-500">Search, manage, add new student profiles, and automatically create student login accounts.</p>
            </div>

            <!-- Header Action Button -->
            <div>
                <button type="button" id="btn_open_add_modal" class="w-full md:w-auto inline-flex items-center justify-center space-x-2 px-4 py-2.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90 transition-colors shadow-xs">
                    <i data-lucide="user-plus" class="w-4 h-4"></i>
                    <span>Add New Student</span>
                </button>
            </div>
        </section>

        <!-- Search, Filter & Records Table Container -->
        <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">

            <!-- Filter Bar Header -->
            <div class="p-5 border-b border-gray-100 space-y-4">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h2 class="text-base font-bold text-brand-dark">Student Directory</h2>
                        <p class="text-xs text-gray-500">Filter students by program, year level, account status, or search keywords</p>
                    </div>

                    <!-- Search Box -->
                    <div class="relative min-w-[260px]">
                        <i data-lucide="search" class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="text" id="input_search_student" placeholder="Search by ID or Name..." class="w-full pl-9 pr-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary">
                    </div>
                </div>

                <!-- Select Filters Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2">
                    <div>
                        <label for="filter_program" class="block text-[10px] font-bold uppercase tracking-wider text-gray-500 mb-1">Program</label>
                        <select id="filter_program" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary bg-white">
                            <option value="">All Programs</option>
                            <option value="BSCS">BS Computer Science</option>
                            <option value="BSIT">BS Information Technology</option>
                            <option value="BSIS">BS Information Systems</option>
                        </select>
                    </div>
                    <div>
                        <label for="filter_year_level" class="block text-[10px] font-bold uppercase tracking-wider text-gray-500 mb-1">Year Level</label>
                        <select id="filter_year_level" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary bg-white">
                            <option value="">All Year Levels</option>
                            <option value="1">1st Year</option>
                            <option value="2">2nd Year</option>
                            <option value="3">3rd Year</option>
                            <option value="4">4th Year</option>
                        </select>
                    </div>
                    <div>
                        <label for="filter_status" class="block text-[10px] font-bold uppercase tracking-wider text-gray-500 mb-1">Account Status</label>
                        <select id="filter_status" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary bg-white">
                            <option value="">All Statuses</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Responsive Records Table -->
            <div class="overflow-x-auto">
                <table id="table_student_records" class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase tracking-wider font-semibold">
                            <th class="py-3 px-5">Student No.</th>
                            <th class="py-3 px-5">Full Name</th>
                            <th class="py-3 px-5">Program</th>
                            <th class="py-3 px-5 text-center">Year Level</th>
                            <th class="py-3 px-5">Contact & Email</th>
                            <th class="py-3 px-5 text-center">Status</th>
                            <th class="py-3 px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_student_records" class="divide-y divide-gray-100 text-gray-700 font-medium">
                        <!-- Sample Student Row 1 -->
                        <tr class="hover:bg-gray-50/50 transition-colors" data-student-id="1">
                            <td class="py-3.5 px-5 font-bold text-brand-dark" id="display_student_no_1">2026-00001</td>
                            <td class="py-3.5 px-5" id="display_student_name_1">John Doe</td>
                            <td class="py-3.5 px-5" id="display_program_1">BS Computer Science</td>
                            <td class="py-3.5 px-5 text-center" id="display_year_level_1">3rd Year</td>
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p id="display_contact_1" class="text-brand-dark font-medium">+63 912 345 6789</p>
                                <p id="display_email_1" class="text-gray-400 text-[11px]">john.doe@paxton.edu.ph</p>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span id="status_badge_student_1" class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">
                                    Active
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1">
                                <button type="button" id="btn_edit_student_1" onclick="openEditModal(1)" class="p-1.5 text-gray-500 hover:text-brand-primary rounded-md hover:bg-gray-100 transition-colors" title="Edit Student">
                                    <i data-lucide="pencil" class="w-4 h-4"></i>
                                </button>
                                <button type="button" id="btn_reset_pass_1" onclick="openResetModal(1, '2026-00001', 'John Doe')" class="p-1.5 text-gray-500 hover:text-amber-600 rounded-md hover:bg-gray-100 transition-colors" title="Issue Temp Password">
                                    <i data-lucide="key-round" class="w-4 h-4"></i>
                                </button>
                                <button type="button" id="btn_toggle_status_1" onclick="confirmToggleStatus(1, 'John Doe', 'Active')" class="p-1.5 text-gray-500 hover:text-red-600 rounded-md hover:bg-gray-100 transition-colors" title="Deactivate Student">
                                    <i data-lucide="user-x" class="w-4 h-4"></i>
                                </button>
                            </td>
                        </tr>

                        <!-- Sample Student Row 2 -->
                        <tr class="hover:bg-gray-50/50 transition-colors" data-student-id="2">
                            <td class="py-3.5 px-5 font-bold text-brand-dark" id="display_student_no_2">2026-00002</td>
                            <td class="py-3.5 px-5" id="display_student_name_2">Jane Smith</td>
                            <td class="py-3.5 px-5" id="display_program_2">BS Information Technology</td>
                            <td class="py-3.5 px-5 text-center" id="display_year_level_2">2nd Year</td>
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p id="display_contact_2" class="text-brand-dark font-medium">+63 998 765 4321</p>
                                <p id="display_email_2" class="text-gray-400 text-[11px]">jane.smith@paxton.edu.ph</p>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span id="status_badge_student_2" class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">
                                    Active
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1">
                                <button type="button" id="btn_edit_student_2" onclick="openEditModal(2)" class="p-1.5 text-gray-500 hover:text-brand-primary rounded-md hover:bg-gray-100 transition-colors" title="Edit Student">
                                    <i data-lucide="pencil" class="w-4 h-4"></i>
                                </button>
                                <button type="button" id="btn_reset_pass_2" onclick="openResetModal(2, '2026-00002', 'Jane Smith')" class="p-1.5 text-gray-500 hover:text-amber-600 rounded-md hover:bg-gray-100 transition-colors" title="Issue Temp Password">
                                    <i data-lucide="key-round" class="w-4 h-4"></i>
                                </button>
                                <button type="button" id="btn_toggle_status_2" onclick="confirmToggleStatus(2, 'Jane Smith', 'Active')" class="p-1.5 text-gray-500 hover:text-red-600 rounded-md hover:bg-gray-100 transition-colors" title="Deactivate Student">
                                    <i data-lucide="user-x" class="w-4 h-4"></i>
                                </button>
                            </td>
                        </tr>

                        <!-- Sample Student Row 3 (Inactive) -->
                        <tr class="hover:bg-gray-50/50 transition-colors bg-gray-50/30" data-student-id="3">
                            <td class="py-3.5 px-5 font-bold text-brand-dark" id="display_student_no_3">2026-00003</td>
                            <td class="py-3.5 px-5" id="display_student_name_3">Alex Mercer</td>
                            <td class="py-3.5 px-5" id="display_program_3">BS Information Systems</td>
                            <td class="py-3.5 px-5 text-center" id="display_year_level_3">1st Year</td>
                            <td class="py-3.5 px-5 space-y-0.5">
                                <p id="display_contact_3" class="text-brand-dark font-medium">+63 917 111 2222</p>
                                <p id="display_email_3" class="text-gray-400 text-[11px]">alex.mercer@paxton.edu.ph</p>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span id="status_badge_student_3" class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-red-100 text-red-800">
                                    Inactive
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1">
                                <button type="button" id="btn_edit_student_3" onclick="openEditModal(3)" class="p-1.5 text-gray-500 hover:text-brand-primary rounded-md hover:bg-gray-100 transition-colors" title="Edit Student">
                                    <i data-lucide="pencil" class="w-4 h-4"></i>
                                </button>
                                <button type="button" id="btn_reset_pass_3" onclick="openResetModal(3, '2026-00003', 'Alex Mercer')" class="p-1.5 text-gray-500 hover:text-amber-600 rounded-md hover:bg-gray-100 transition-colors" title="Issue Temp Password">
                                    <i data-lucide="key-round" class="w-4 h-4"></i>
                                </button>
                                <button type="button" id="btn_toggle_status_3" onclick="confirmToggleStatus(3, 'Alex Mercer', 'Inactive')" class="p-1.5 text-gray-500 hover:text-emerald-600 rounded-md hover:bg-gray-100 transition-colors" title="Activate Student">
                                    <i data-lucide="user-check" class="w-4 h-4"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Table Footer & Pagination -->
            <div class="p-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-gray-500">
                <p id="txt_pagination_info">Showing <span class="font-bold text-brand-dark">1</span> to <span class="font-bold text-brand-dark">3</span> of <span class="font-bold text-brand-dark">3</span> records</p>

                <div class="flex items-center space-x-2">
                    <button type="button" id="btn_prev_page" disabled class="px-3 py-1.5 rounded-md border border-gray-200 bg-gray-50 text-gray-400 cursor-not-allowed">Previous</button>
                    <button type="button" id="btn_next_page" disabled class="px-3 py-1.5 rounded-md border border-gray-200 bg-gray-50 text-gray-400 cursor-not-allowed">Next</button>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal 1: Add New Student Record -->
    <div id="modal_add_student" class="fixed inset-0 z-50 hidden bg-gray-900/50 backdrop-blur-xs flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-lg overflow-hidden flex flex-col">
            <div class="p-5 border-b border-gray-100 flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <i data-lucide="user-plus" class="w-5 h-5 text-brand-primary"></i>
                    <h3 class="text-base font-bold text-brand-dark">Add New Student Record</h3>
                </div>
                <button type="button" id="btn_close_add_modal" class="text-gray-400 hover:text-gray-600">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <form id="form_add_student" class="p-5 space-y-4 text-xs">
                <div>
                    <label for="input_add_student_no" class="block font-semibold text-brand-dark mb-1">Student Number (Format: 2026-XXXXX)</label>
                    <input type="text" id="input_add_student_no" required placeholder="2026-00004" pattern="^20\d{2}-\d{5}$" class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary">
                    <p class="text-[10px] text-gray-400 mt-1">This will automatically serve as the login username.</p>
                </div>

                <div>
                    <label for="input_add_full_name" class="block font-semibold text-brand-dark mb-1">Full Name</label>
                    <input type="text" id="input_add_full_name" required placeholder="Last Name, First Name Middle Name" class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary">
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label for="select_add_program" class="block font-semibold text-brand-dark mb-1">Program</label>
                        <select id="select_add_program" required class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary bg-white">
                            <option value="">Select Program</option>
                            <option value="1">BS Computer Science</option>
                            <option value="2">BS Information Technology</option>
                            <option value="3">BS Information Systems</option>
                        </select>
                    </div>
                    <div>
                        <label for="select_add_year_level" class="block font-semibold text-brand-dark mb-1">Year Level</label>
                        <select id="select_add_year_level" required class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary bg-white">
                            <option value="">Select Year</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="input_add_contact" class="block font-semibold text-brand-dark mb-1">Contact Number</label>
                    <input type="text" id="input_add_contact" required placeholder="+63 9XX XXX XXXX" class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary">
                </div>

                <div>
                    <label for="input_add_email" class="block font-semibold text-brand-dark mb-1">Email Address</label>
                    <input type="email" id="input_add_email" required placeholder="student@paxton.edu.ph" class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary">
                </div>

                <div class="p-3 bg-brand-accent/20 border border-brand-secondary/20 rounded-md space-y-1">
                    <p class="font-bold text-brand-primary text-[11px] flex items-center gap-1">
                        <i data-lucide="shield-check" class="w-3.5 h-3.5"></i> Automatic Account Creation
                    </p>
                    <p class="text-[10px] text-gray-600 leading-relaxed">
                        Adding this student record will automatically create their login account (`users` table entry) with default active status.
                    </p>
                </div>

                <div class="pt-3 border-t border-gray-100 flex items-center justify-end space-x-2">
                    <button type="button" id="btn_cancel_add" class="px-4 py-2 rounded-md font-semibold text-gray-600 hover:bg-gray-100 transition-colors">Cancel</button>
                    <button type="submit" id="btn_submit_add_student" class="px-4 py-2 rounded-md font-semibold bg-brand-primary text-white hover:bg-brand-primary/90 transition-colors">Save Student Record</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal 2: Edit Student Profile -->
    <div id="modal_edit_student" class="fixed inset-0 z-50 hidden bg-gray-900/50 backdrop-blur-xs flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-lg overflow-hidden flex flex-col">
            <div class="p-5 border-b border-gray-100 flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <i data-lucide="pencil" class="w-5 h-5 text-brand-primary"></i>
                    <h3 class="text-base font-bold text-brand-dark">Edit Student Record</h3>
                </div>
                <button type="button" id="btn_close_edit_modal" class="text-gray-400 hover:text-gray-600">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <form id="form_edit_student" class="p-5 space-y-4 text-xs">
                <input type="hidden" id="input_edit_student_id">

                <div>
                    <label for="input_edit_student_no" class="block font-semibold text-brand-dark mb-1">Student Number</label>
                    <input type="text" id="input_edit_student_no" readonly class="w-full px-3 py-2 border border-gray-200 rounded-md bg-gray-50 text-gray-500 font-bold cursor-not-allowed">
                    <p class="text-[10px] text-gray-400 mt-1">Student number cannot be modified.</p>
                </div>

                <div>
                    <label for="input_edit_full_name" class="block font-semibold text-brand-dark mb-1">Full Name</label>
                    <input type="text" id="input_edit_full_name" required class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary">
                    <p class="text-[10px] text-gray-400 mt-1">Registrar authority required to update student official name.</p>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label for="select_edit_program" class="block font-semibold text-brand-dark mb-1">Program</label>
                        <select id="select_edit_program" required class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary bg-white">
                            <option value="BS Computer Science">BS Computer Science</option>
                            <option value="BS Information Technology">BS Information Technology</option>
                            <option value="BS Information Systems">BS Information Systems</option>
                        </select>
                    </div>
                    <div>
                        <label for="select_edit_year_level" class="block font-semibold text-brand-dark mb-1">Year Level</label>
                        <select id="select_edit_year_level" required class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary bg-white">
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="input_edit_contact" class="block font-semibold text-brand-dark mb-1">Contact Number</label>
                    <input type="text" id="input_edit_contact" required class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary">
                </div>

                <div>
                    <label for="input_edit_email" class="block font-semibold text-brand-dark mb-1">Email Address</label>
                    <input type="email" id="input_edit_email" required class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary">
                </div>

                <div class="pt-3 border-t border-gray-100 flex items-center justify-end space-x-2">
                    <button type="button" id="btn_cancel_edit" class="px-4 py-2 rounded-md font-semibold text-gray-600 hover:bg-gray-100 transition-colors">Cancel</button>
                    <button type="submit" id="btn_submit_edit_student" class="px-4 py-2 rounded-md font-semibold bg-brand-primary text-white hover:bg-brand-primary/90 transition-colors">Update Student</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal 3: Issue Temporary Password (Password Reset) -->
    <div id="modal_reset_password" class="fixed inset-0 z-50 hidden bg-gray-900/50 backdrop-blur-xs flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-md overflow-hidden flex flex-col">
            <div class="p-5 border-b border-gray-100 flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <i data-lucide="key-round" class="w-5 h-5 text-amber-600"></i>
                    <h3 class="text-base font-bold text-brand-dark">Issue Temporary Password</h3>
                </div>
                <button type="button" id="btn_close_reset_modal" class="text-gray-400 hover:text-gray-600">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <form id="form_reset_password" class="p-5 space-y-4 text-xs">
                <input type="hidden" id="input_reset_student_id">

                <div class="space-y-1">
                    <p class="text-gray-500">Target Student:</p>
                    <p id="txt_reset_target" class="text-sm font-bold text-brand-dark"></p>
                </div>

                <div>
                    <label for="input_temp_password" class="block font-semibold text-brand-dark mb-1">Temporary Password</label>
                    <div class="flex space-x-2">
                        <input type="text" id="input_temp_password" required placeholder="e.g., Temp2026Pass!" class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary font-mono">
                        <button type="button" id="btn_generate_temp_pass" class="px-3 py-2 rounded-md bg-gray-100 hover:bg-gray-200 text-brand-dark font-semibold shrink-0">Generate</button>
                    </div>
                    <p class="text-[10px] text-gray-400 mt-1">Must be at least 8 characters with letters and numbers.</p>
                </div>

                <div class="p-3 bg-amber-50 border border-amber-200 rounded-md space-y-1">
                    <p class="font-bold text-amber-800 text-[11px] flex items-center gap-1">
                        <i data-lucide="alert-triangle" class="w-3.5 h-3.5"></i> Forced Password Change
                    </p>
                    <p class="text-[10px] text-amber-700 leading-relaxed">
                        Setting this password flags <code class="font-mono font-bold">must_change_password = 1</code>. The student will be forced to change password upon next login.
                    </p>
                </div>

                <div class="pt-3 border-t border-gray-100 flex items-center justify-end space-x-2">
                    <button type="button" id="btn_cancel_reset" class="px-4 py-2 rounded-md font-semibold text-gray-600 hover:bg-gray-100 transition-colors">Cancel</button>
                    <button type="submit" id="btn_submit_reset_password" class="px-4 py-2 rounded-md font-semibold bg-amber-600 text-white hover:bg-amber-700 transition-colors">Issue Password</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal 4: Action Confirmation Dialog (Status Toggle) -->
    <div id="modal_confirm_dialog" class="fixed inset-0 z-50 hidden bg-gray-900/50 backdrop-blur-xs flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-sm overflow-hidden flex flex-col p-6 space-y-4">
            <div class="flex items-center space-x-3">
                <div id="confirm_icon_container" class="w-10 h-10 rounded-full bg-red-100 text-red-600 flex items-center justify-center shrink-0">
                    <i id="confirm_icon" data-lucide="alert-circle" class="w-5 h-5"></i>
                </div>
                <div>
                    <h3 id="confirm_title" class="text-base font-bold text-brand-dark">Confirm Action</h3>
                    <p id="confirm_message" class="text-xs text-gray-500 mt-0.5"></p>
                </div>
            </div>

            <p class="text-[11px] text-gray-500 leading-relaxed bg-gray-50 p-2.5 rounded-md border border-gray-100">
                Note: In accordance with system audit specifications, records are never deleted from the database—status will be set to Active or Inactive.
            </p>

            <div class="flex items-center justify-end space-x-2 pt-2">
                <button type="button" id="btn_confirm_cancel" class="px-4 py-2 text-xs rounded-md font-semibold text-gray-600 hover:bg-gray-100 transition-colors">Cancel</button>
                <button type="button" id="btn_confirm_proceed" class="px-4 py-2 text-xs rounded-md font-semibold bg-red-600 text-white hover:bg-red-700 transition-colors">Confirm</button>
            </div>
        </div>
    </div>

    <!-- Formal Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12 py-6 text-center text-xs text-gray-500">
        <div class="max-w-7xl mx-auto px-4">
            <p>Paxton University Student Services Information System (SSIS) &copy; 2026. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Interactive Scripts & Event Logic -->
    <script>
        $(document).ready(function() {
            // Render Lucide Icons
            lucide.createIcons();

            // Mobile Navigation Toggle
            $('#mobile_menu_btn').on('click', function() {
                $('#mobile_menu').toggleClass('hidden');
            });

            // Alert Banner Dismiss
            $('#btn_dismiss_alert').on('click', function() {
                $('#container_alert_message').addClass('hidden');
            });

            // Modal Toggles: Add Student
            $('#btn_open_add_modal').on('click', function() {
                $('#modal_add_student').removeClass('hidden');
            });
            $('#btn_close_add_modal, #btn_cancel_add').on('click', function() {
                $('#modal_add_student').addClass('hidden');
            });

            // Modal Toggles: Edit Student
            $('#btn_close_edit_modal, #btn_cancel_edit').on('click', function() {
                $('#modal_edit_student').addClass('hidden');
            });

            // Modal Toggles: Reset Password
            $('#btn_close_reset_modal, #btn_cancel_reset').on('click', function() {
                $('#modal_reset_password').addClass('hidden');
            });

            // Modal Toggles: Confirmation Dialog
            $('#btn_confirm_cancel').on('click', function() {
                $('#modal_confirm_dialog').addClass('hidden');
            });

            // Generate Random Temporary Password
            $('#btn_generate_temp_pass').on('click', function() {
                const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                let tempPass = "Pax2026!";
                for (let i = 0; i < 4; i++) {
                    tempPass += chars.charAt(Math.floor(Math.random() * chars.length));
                }
                $('#input_temp_password').val(tempPass);
            });

            // Form Submit: Add Student
            $('#form_add_student').on('submit', function(e) {
                e.preventDefault();
                const $btn = $('#btn_submit_add_student');
                $btn.prop('disabled', true).text('Please wait...');

                setTimeout(function() {
                    $('#modal_add_student').addClass('hidden');
                    $btn.prop('disabled', false).text('Save Student Record');
                    showAlert('success', 'Student record and login account successfully created!');
                    $('#form_add_student')[0].reset();
                }, 800);
            });

            // Form Submit: Edit Student
            $('#form_edit_student').on('submit', function(e) {
                e.preventDefault();
                const $btn = $('#btn_submit_edit_student');
                $btn.prop('disabled', true).text('Please wait...');

                setTimeout(function() {
                    $('#modal_edit_student').addClass('hidden');
                    $btn.prop('disabled', false).text('Update Student');
                    showAlert('success', 'Student profile updated successfully!');
                }, 800);
            });

            // Form Submit: Reset Password
            $('#form_reset_password').on('submit', function(e) {
                e.preventDefault();
                const $btn = $('#btn_submit_reset_password');
                $btn.prop('disabled', true).text('Please wait...');

                setTimeout(function() {
                    $('#modal_reset_password').addClass('hidden');
                    $btn.prop('disabled', false).text('Issue Password');
                    showAlert('success', 'Temporary password issued. User forced to change on next login.');
                }, 800);
            });
        });

        // Helper: System Alert Banner Display
        function showAlert(type, message) {
            const $banner = $('#container_alert_message');
            const $icon = $('#alert_icon');
            const $text = $('#alert_text');

            $banner.removeClass('hidden bg-emerald-50 border-emerald-200 text-emerald-800 bg-red-50 border-red-200 text-red-800');

            if (type === 'success') {
                $banner.addClass('bg-emerald-50 border-emerald-200 text-emerald-800');
                $icon.attr('data-lucide', 'check-circle-2').replaceWith('<i id="alert_icon" data-lucide="check-circle-2" class="w-4 h-4 shrink-0"></i>');
            } else {
                $banner.addClass('bg-red-50 border-red-200 text-red-800');
                $icon.attr('data-lucide', 'alert-circle').replaceWith('<i id="alert_icon" data-lucide="alert-circle" class="w-4 h-4 shrink-0"></i>');
            }

            $text.text(message);
            lucide.createIcons();
            $banner.removeClass('hidden');
        }

        // Action Trigger: Open Edit Modal with Pre-populated Data
        function openEditModal(studentId) {
            const studentNo = $('#display_student_no_' + studentId).text();
            const studentName = $('#display_student_name_' + studentId).text();
            const program = $('#display_program_' + studentId).text();
            const yearLevel = $('#display_year_level_' + studentId).text();
            const contact = $('#display_contact_' + studentId).text();
            const email = $('#display_email_' + studentId).text();

            $('#input_edit_student_id').val(studentId);
            $('#input_edit_student_no').val(studentNo);
            $('#input_edit_full_name').val(studentName);
            $('#select_edit_program').val(program);
            $('#select_edit_year_level').val(yearLevel);
            $('#input_edit_contact').val(contact);
            $('#input_edit_email').val(email);

            $('#modal_edit_student').removeClass('hidden');
        }

        // Action Trigger: Open Reset Password Modal
        function openResetModal(studentId, studentNo, studentName) {
            $('#input_reset_student_id').val(studentId);
            $('#txt_reset_target').text(`${studentName} (${studentNo})`);
            $('#input_temp_password').val('Temp2026Pass!');
            $('#modal_reset_password').removeClass('hidden');
        }

        // Action Trigger: Confirm Active/Inactive Status Toggle
        function confirmToggleStatus(studentId, studentName, currentStatus) {
            const nextStatus = currentStatus === 'Active' ? 'Inactive' : 'Active';
            const actionText = currentStatus === 'Active' ? 'deactivate' : 'activate';

            $('#confirm_title').text(`${nextStatus === 'Inactive' ? 'Deactivate' : 'Activate'} Account`);
            $('#confirm_message').text(`Are you sure you want to ${actionText} the student record for ${studentName}?`);

            if (nextStatus === 'Inactive') {
                $('#confirm_icon_container').className = "w-10 h-10 rounded-full bg-red-100 text-red-600 flex items-center justify-center shrink-0";
                $('#btn_confirm_proceed').className = "px-4 py-2 text-xs rounded-md font-semibold bg-red-600 text-white hover:bg-red-700 transition-colors";
            } else {
                $('#confirm_icon_container').className = "w-10 h-10 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0";
                $('#btn_confirm_proceed').className = "px-4 py-2 text-xs rounded-md font-semibold bg-emerald-600 text-white hover:bg-emerald-700 transition-colors";
            }

            $('#btn_confirm_proceed').off('click').on('click', function() {
                $('#modal_confirm_dialog').addClass('hidden');
                showAlert('success', `Account status for ${studentName} updated to ${nextStatus}.`);
            });

            $('#modal_confirm_dialog').removeClass('hidden');
        }
    </script>
</body>

</html>