<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Grades Management</title>

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
                    <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-gray-600 hover:bg-gray-50">Enrollment</a>
                    <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Grades</a>
                    <a href="studentRecords.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Student Records</a>
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
            <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-gray-600 hover:bg-gray-50">Enrollment</a>
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

        <!-- Page Header Banner -->
        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="space-y-1">
                <div class="flex items-center space-x-2">
                    <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Grades Management</h1>
                </div>
                <p class="text-sm text-gray-500">Select an academic term and subject section to view officially enrolled students, manage draft grades, and publish released transcripts.</p>
            </div>

            <div class="flex items-center space-x-3">
                <div class="bg-gray-50 border border-gray-200 rounded-md px-4 py-2 text-right">
                    <span class="text-[10px] uppercase font-bold text-gray-400 block tracking-wider">Class Roster Status</span>
                    <span class="text-xs font-bold text-brand-primary" id="txt_roster_summary">3 Enrolled Students</span>
                </div>
            </div>
        </section>

        <!-- Term & Subject Selection Selector Bar -->
        <section class="bg-white border border-gray-200 rounded-md p-5 shadow-xs">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-end">
                <div>
                    <label for="select_academic_term" class="block text-xs font-bold uppercase tracking-wider text-gray-600 mb-1">
                        1. Select Academic Term <span class="text-red-500">*</span>
                    </label>
                    <select id="select_academic_term" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary bg-white font-medium">
                        <option value="2026-1" selected>1st Semester, AY 2026-2027</option>
                        <option value="2025-2">2nd Semester, AY 2025-2026</option>
                        <option value="2025-1">1st Semester, AY 2025-2026</option>
                    </select>
                </div>

                <div>
                    <label for="select_subject_section" class="block text-xs font-bold uppercase tracking-wider text-gray-600 mb-1">
                        2. Select Subject & Section <span class="text-red-500">*</span>
                    </label>
                    <select id="select_subject_section" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary bg-white font-medium">
                        <option value="CS311-A" selected>CS 311 - Algorithms and Complexity (BSCS 3-A)</option>
                        <option value="CS312-A">CS 312 - Software Engineering 1 (BSCS 3-A)</option>
                        <option value="IT201-B">IT 201 - Data Structures (BSIT 2-B)</option>
                    </select>
                </div>

                <div class="flex items-center space-x-2">
                    <button type="button" id="btn_load_roster" class="flex-1 inline-flex items-center justify-center space-x-2 px-4 py-2 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90 transition-colors shadow-xs">
                        <i data-lucide="filter" class="w-4 h-4"></i>
                        <span>Load Class Sheet</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Main Grade Sheet Entry Section -->
        <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">

            <!-- Table Header Toolbar -->
            <div class="p-5 border-b border-gray-100 flex flex-col md:flex-row md:items-center md:justify-between gap-4 bg-gray-50/40">
                <div>
                    <div class="flex items-center space-x-2">
                        <h2 class="text-base font-bold text-brand-dark" id="lbl_current_subject">CS 311: Algorithms and Complexity</h2>
                        <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-brand-accent/50 text-brand-primary">Section BSCS 3-A</span>
                    </div>
                    <p class="text-xs text-gray-500 mt-0.5">Only students officially enrolled in this term are listed for evaluation.</p>
                </div>

                <!-- Global Action Controls -->
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" id="btn_save_draft" class="inline-flex items-center space-x-1.5 px-3 py-1.5 rounded-md text-xs font-semibold bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors shadow-2xs">
                        <i data-lucide="save" class="w-3.5 h-3.5 text-gray-500"></i>
                        <span>Save Draft</span>
                    </button>
                    <button type="button" id="btn_release_class" class="inline-flex items-center space-x-1.5 px-3.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90 transition-colors shadow-xs">
                        <i data-lucide="check-circle-2" class="w-3.5 h-3.5"></i>
                        <span>Release All Grades</span>
                    </button>
                </div>
            </div>

            <!-- Grade Entry Table -->
            <div class="overflow-x-auto">
                <table id="table_grades_entry" class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-200 text-gray-500 uppercase tracking-wider font-semibold">
                            <th class="py-3 px-5">Student ID</th>
                            <th class="py-3 px-5">Student Name</th>
                            <th class="py-3 px-5">Program & Level</th>
                            <th class="py-3 px-5 text-center">Term Status</th>
                            <th class="py-3 px-5 w-36 text-center">Grade Input</th>
                            <th class="py-3 px-5 text-center">Grade Status</th>
                            <th class="py-3 px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_grade_records" class="divide-y divide-gray-100 text-gray-700 font-medium">

                        <!-- Student Row 1: Draft Grade -->
                        <tr data-student-id="2026-00001" data-status="Draft" class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-mono font-bold text-brand-dark">2026-00001</td>
                            <td class="py-3.5 px-5 font-bold text-brand-dark">John Doe</td>
                            <td class="py-3.5 px-5 text-gray-600">BS Computer Science (3rd Yr)</td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-semibold bg-emerald-100 text-emerald-800">
                                    Enrolled
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <input type="number" step="0.25" min="1.00" max="5.00" value="1.75" class="input-grade w-24 px-2 py-1 text-center font-bold text-brand-dark border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary bg-white">
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="badge-grade-status inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-semibold bg-gray-100 text-gray-700">
                                    Draft
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" onclick="releaseSingleGrade(this)" class="btn-single-release inline-flex items-center space-x-1 px-2.5 py-1 rounded-md text-[11px] font-semibold bg-emerald-600 text-white hover:bg-emerald-700 transition-colors">
                                    <i data-lucide="send" class="w-3 h-3"></i>
                                    <span>Release Grade</span>
                                </button>
                                <button type="button" onclick="openEditReleasedModal(this)" class="btn-single-edit hidden inline-flex items-center space-x-1 px-2.5 py-1 rounded-md text-[11px] font-semibold border border-amber-300 bg-amber-50 text-amber-800 hover:bg-amber-100 transition-colors">
                                    <i data-lucide="edit-2" class="w-3 h-3"></i>
                                    <span>Edit Grade</span>
                                </button>
                            </td>
                        </tr>

                        <!-- Student Row 2: Unassigned Draft -->
                        <tr data-student-id="2026-00002" data-status="Draft" class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-mono font-bold text-brand-dark">2026-00002</td>
                            <td class="py-3.5 px-5 font-bold text-brand-dark">Jane Smith</td>
                            <td class="py-3.5 px-5 text-gray-600">BS Computer Science (3rd Yr)</td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-semibold bg-emerald-100 text-emerald-800">
                                    Enrolled
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <input type="number" step="0.25" min="1.00" max="5.00" placeholder="0.00" class="input-grade w-24 px-2 py-1 text-center font-bold text-brand-dark border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary focus:border-brand-secondary bg-white">
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="badge-grade-status inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-semibold bg-gray-100 text-gray-700">
                                    Draft
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" onclick="releaseSingleGrade(this)" class="btn-single-release inline-flex items-center space-x-1 px-2.5 py-1 rounded-md text-[11px] font-semibold bg-emerald-600 text-white hover:bg-emerald-700 transition-colors">
                                    <i data-lucide="send" class="w-3 h-3"></i>
                                    <span>Release Grade</span>
                                </button>
                                <button type="button" onclick="openEditReleasedModal(this)" class="btn-single-edit hidden inline-flex items-center space-x-1 px-2.5 py-1 rounded-md text-[11px] font-semibold border border-amber-300 bg-amber-50 text-amber-800 hover:bg-amber-100 transition-colors">
                                    <i data-lucide="edit-2" class="w-3 h-3"></i>
                                    <span>Edit Grade</span>
                                </button>
                            </td>
                        </tr>

                        <!-- Student Row 3: Released Grade (Locked Input) -->
                        <tr data-student-id="2026-00003" data-status="Released" class="hover:bg-gray-50/50 transition-colors bg-emerald-50/20">
                            <td class="py-3.5 px-5 font-mono font-bold text-brand-dark">2026-00003</td>
                            <td class="py-3.5 px-5 font-bold text-brand-dark">Alex Mercer</td>
                            <td class="py-3.5 px-5 text-gray-600">BS Computer Science (3rd Yr)</td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-semibold bg-emerald-100 text-emerald-800">
                                    Enrolled
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <input type="number" step="0.25" min="1.00" max="5.00" value="1.25" disabled class="input-grade w-24 px-2 py-1 text-center font-bold text-brand-dark border border-gray-200 rounded-md bg-gray-100 cursor-not-allowed">
                            </td>
                            <td class="py-3.5 px-5 text-center">
                                <span class="badge-grade-status inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-semibold bg-emerald-100 text-emerald-800">
                                    Released
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" onclick="releaseSingleGrade(this)" class="btn-single-release hidden inline-flex items-center space-x-1 px-2.5 py-1 rounded-md text-[11px] font-semibold bg-emerald-600 text-white hover:bg-emerald-700 transition-colors">
                                    <i data-lucide="send" class="w-3 h-3"></i>
                                    <span>Release Grade</span>
                                </button>
                                <button type="button" onclick="openEditReleasedModal(this)" class="btn-single-edit inline-flex items-center space-x-1 px-2.5 py-1 rounded-md text-[11px] font-semibold border border-amber-300 bg-amber-50 text-amber-800 hover:bg-amber-100 transition-colors">
                                    <i data-lucide="edit-2" class="w-3 h-3"></i>
                                    <span>Edit Grade</span>
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Table Footer -->
            <div class="p-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-gray-500 bg-gray-50/30">
                <p>Showing <span class="font-bold text-brand-dark">3</span> enrolled students for <span class="font-bold text-brand-dark">1st Sem AY 2026-2027</span></p>
                <div class="flex items-center space-x-2">
                    <span class="inline-flex items-center space-x-1.5 text-[11px] text-gray-500">
                        <i data-lucide="info" class="w-3.5 h-3.5 text-gray-400"></i>
                        <span>Releasing grades makes them visible on student transcripts immediately.</span>
                    </span>
                </div>
            </div>
        </section>

    </main>

    <!-- Modal: Edit Released Grade (Reason Mandatory per Spec) -->
    <div id="modal_edit_released_grade" class="fixed inset-0 z-50 hidden bg-gray-900/50 backdrop-blur-xs flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-lg overflow-hidden space-y-0">

            <!-- Modal Header -->
            <div class="p-5 border-b border-gray-200 bg-gray-50/50 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 bg-amber-100 rounded-md flex items-center justify-center text-amber-800">
                        <i data-lucide="alert-triangle" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-brand-dark">Edit Released Grade</h3>
                        <p class="text-xs text-gray-500">Official Grade Revision Control</p>
                    </div>
                </div>
                <button type="button" id="btn_close_edit_modal" class="text-gray-400 hover:text-gray-600">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <!-- Modal Form Body -->
            <form id="form_edit_released_grade" class="p-6 space-y-4 text-xs">

                <div class="p-3 bg-amber-50 border border-amber-200 rounded-md text-amber-900 leading-relaxed">
                    <p class="font-bold mb-0.5">Grade Revision Policy:</p>
                    <p>Editing a grade that has already been <strong>Released</strong> requires a formal justification reason for audit trail logs.</p>
                </div>

                <!-- Target Student Info Summary -->
                <div class="grid grid-cols-2 gap-3 p-3 bg-gray-50 border border-gray-200 rounded-md">
                    <div>
                        <span class="text-[10px] font-bold uppercase text-gray-400 block tracking-wider">Student Name</span>
                        <span id="modal_edit_student_name" class="font-bold text-brand-dark">John Doe</span>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold uppercase text-gray-400 block tracking-wider">Student ID</span>
                        <span id="modal_edit_student_id" class="font-mono font-bold text-brand-dark">2026-00001</span>
                    </div>
                </div>

                <!-- Revised Grade Field -->
                <div>
                    <label for="input_new_grade_val" class="block font-semibold text-brand-dark mb-1">
                        Revised Grade Value <span class="text-red-600">*</span>
                    </label>
                    <input type="number" step="0.25" min="1.00" max="5.00" id="input_new_grade_val" required placeholder="e.g. 1.50" class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary text-xs font-bold text-brand-dark bg-white">
                </div>

                <!-- Modification Reason Field (Required per Spec) -->
                <div>
                    <label for="textarea_grade_edit_reason" class="block font-semibold text-brand-dark mb-1">
                        Reason for Grade Modification <span class="text-red-600">* Mandatory</span>
                    </label>
                    <textarea id="textarea_grade_edit_reason" rows="3" required placeholder="State official reason (e.g., Calculation error on final exam regrade, removal of incomplete status)..." class="w-full p-2.5 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary text-xs bg-white"></textarea>
                </div>

                <!-- Modal Footer -->
                <div class="pt-3 border-t border-gray-100 flex items-center justify-end space-x-2">
                    <button type="button" id="btn_cancel_edit_modal" class="px-4 py-2 rounded-md font-semibold text-gray-600 hover:bg-gray-100">Cancel</button>
                    <button type="submit" class="px-4 py-2 rounded-md font-semibold bg-brand-primary text-white hover:bg-brand-primary/90 transition-colors shadow-xs">
                        Save Revised Grade
                    </button>
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

    <!-- Interactive Logic & Event Handling -->
    <script>
        let currentTargetRow = null;

        $(document).ready(function() {
            // Render Lucide Icons
            lucide.createIcons();

            // Mobile Navigation Toggle
            $('#mobile_menu_btn').on('click', function() {
                $('#mobile_menu').toggleClass('hidden');
            });

            // Dismiss Alert Banner
            $('#btn_dismiss_alert').on('click', function() {
                $('#container_alert_message').addClass('hidden');
            });

            // Close Edit Modal
            $('#btn_close_edit_modal, #btn_cancel_edit_modal').on('click', function() {
                $('#modal_edit_released_grade').addClass('hidden');
                currentTargetRow = null;
            });

            // Save Draft Action
            $('#btn_save_draft').on('click', function() {
                let hasFilledInput = false;

                $('#tbody_grade_records tr').each(function() {
                    const status = $(this).attr('data-status');
                    if (status === 'Draft') {
                        const val = $(this).find('.input-grade').val();
                        if (val !== '') {
                            hasFilledInput = true;
                        }
                    }
                });

                if (!hasFilledInput) {
                    showAlert('error', 'Please enter at least one draft grade value before saving.');
                    return;
                }

                showAlert('success', 'Class grade sheet saved successfully as Draft.');
            });

            // Release Whole Class Grades Action
            $('#btn_release_class').on('click', function() {
                let unassigned = 0;

                $('#tbody_grade_records tr').each(function() {
                    const status = $(this).attr('data-status');
                    const val = $(this).find('.input-grade').val();
                    if (status === 'Draft' && (!val || val === '')) {
                        unassigned++;
                    }
                });

                if (unassigned > 0) {
                    if (!confirm(`There are ${unassigned} student(s) without grades entered. Do you want to release grades for all completed entries?`)) {
                        return;
                    }
                }

                // Convert all draft rows with values to Released state
                $('#tbody_grade_records tr').each(function() {
                    const $row = $(this);
                    const status = $row.attr('data-status');
                    const $input = $row.find('.input-grade');

                    if (status === 'Draft' && $input.val() !== '') {
                        markRowAsReleased($row);
                    }
                });

                showAlert('success', 'All completed grades for this subject have been officially Released.');
            });

            // Submit Edited Grade Form with Reason
            $('#form_edit_released_grade').on('submit', function(e) {
                e.preventDefault();
                const newGrade = $('#input_new_grade_val').val();
                const reason = $('#textarea_grade_edit_reason').val().trim();

                if (!reason) {
                    alert('A formal justification reason is required to modify a released grade.');
                    return;
                }

                if (currentTargetRow) {
                    const $row = $(currentTargetRow);
                    $row.find('.input-grade').val(newGrade);
                    const studentId = $row.attr('data-student-id');

                    showAlert('success', `Grade for Student ${studentId} updated to ${newGrade}. Revision reason logged.`);
                }

                $('#modal_edit_released_grade').addClass('hidden');
                currentTargetRow = null;
            });

            // Reload Class Sheet Trigger
            $('#btn_load_roster').on('click', function() {
                const termText = $('#select_academic_term option:selected').text();
                const subjText = $('#select_subject_section option:selected').text();

                $('#lbl_current_subject').text(subjText.split('(')[0]);
                showAlert('success', `Loaded class roster for ${subjText} (${termText}).`);
            });
        });

        // Release Single Student Grade Action
        function releaseSingleGrade(btnEl) {
            const $row = $(btnEl).closest('tr');
            const $input = $row.find('.input-grade');
            const val = $input.val();

            if (!val || val === '') {
                alert('Please enter a grade before attempting to release this record.');
                $input.focus();
                return;
            }

            markRowAsReleased($row);
            const studentId = $row.attr('data-student-id');
            showAlert('success', `Grade ${val} for Student ${studentId} has been released.`);
        }

        // Helper function to transition a row from Draft to Released
        function markRowAsReleased($row) {
            $row.attr('data-status', 'Released');
            $row.addClass('bg-emerald-50/20'); // Disable grade input$row.find('.input-grade').prop('disabled', true).addClass('bg-gray-100 cursor-not-allowed').removeClass('bg-white');

            // Update status badge
            $row.find('.badge-grade-status')
                .text('Released')
                .removeClass('bg-gray-100 text-gray-700')
                .addClass('bg-emerald-100 text-emerald-800');

            // Swap Buttons
            $row.find('.btn-single-release').addClass('hidden');
            $row.find('.btn-single-edit').removeClass('hidden');
        }

        // Open Modal to Edit Released Grade
        function openEditReleasedModal(btnEl) {
            currentTargetRow = $(btnEl).closest('tr');
            const studentId = currentTargetRow.attr('data-student-id');
            const studentName = currentTargetRow.find('td:nth-child(2)').text();
            const currentGrade = currentTargetRow.find('.input-grade').val();

            $('#modal_edit_student_name').text(studentName);
            $('#modal_edit_student_id').text(studentId);
            $('#input_new_grade_val').val(currentGrade);
            $('#textarea_grade_edit_reason').val('');

            $('#modal_edit_released_grade').removeClass('hidden');
        }

        // System Alert Banner Display
        function showAlert(type, message) {
            const $banner = $('#container_alert_message');
            const $text = $('#alert_text');

            $banner.removeClass('hidden bg-emerald-50 border-emerald-200 text-emerald-800 bg-red-50 border-red-200 text-red-800');

            if (type === 'success') {
                $banner.addClass('bg-emerald-50 border-emerald-200 text-emerald-800');
                $('#alert_icon').replaceWith('<i id="alert_icon" data-lucide="check-circle-2" class="w-4 h-4 shrink-0"></i>');
            } else {
                $banner.addClass('bg-red-50 border-red-200 text-red-800');
                $('#alert_icon').replaceWith('<i id="alert_icon" data-lucide="alert-circle" class="w-4 h-4 shrink-0"></i>');
            }

            $text.text(message);
            lucide.createIcons();
            $banner.removeClass('hidden');
        }
    </script>
</body>

</html>