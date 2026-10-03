<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - User Management</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
                        <span class="text-[10px] uppercase font-semibold text-gray-500 tracking-widest block mt-0.5">University SSIS - Admin</span>
                    </div>
                </div>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center space-x-1">
                    <a href="userManagement.php" class="px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30 border border-brand-secondary/20">User Management</a>
                    <a href="systemSettings.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">System Settings</a>
                    <a href="monitoring.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">System Monitoring</a>
                    <a href="notifications.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Notifications</a>
                </nav>

                <!-- Action Controls -->
                <div class="flex items-center space-x-3">
                    <div class="h-5 w-px bg-gray-200 hidden md:block"></div>

                    <!-- User Info / Profile -->
                    <div class="hidden md:flex items-center space-x-2">
                        <div class="text-right">
                            <p id="nav_admin_name" class="text-xs font-semibold text-brand-dark">System Administrator</p>
                            <p id="nav_admin_role" class="text-[10px] text-gray-500">Admin (admin_01)</p>
                        </div>
                        <a href="logout.php" id="nav_logout_btn" class="p-2 text-gray-400 hover:text-red-600 rounded-md hover:bg-gray-100 transition-colors" title="Log Out">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button id="mobile_menu_btn" type="button" class="md:hidden p-2 rounded-md text-gray-600 hover:text-brand-primary hover:bg-gray-100 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile_menu" class="hidden md:hidden border-t border-gray-200 bg-white px-4 pt-2 pb-4 space-y-1">
            <a href="dashboard.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Dashboard</a>
            <a href="users.php" class="block px-3 py-2 rounded-md text-base font-semibold text-brand-primary bg-brand-accent/30">User Management</a>
            <a href="system.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">System Settings</a>
            <a href="report.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Reports</a>
            <a href="audit.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Audit Logs</a>
            <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold text-brand-dark">System Administrator</p>
                    <p class="text-xs text-gray-500">Admin</p>
                </div>
                <a href="logout.php" class="text-xs text-red-600 font-semibold hover:underline">Log Out</a>
            </div>
        </div>
    </header>

    <!-- Main Content Container -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">

        <!-- Page Header Banner -->
        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="space-y-1">
                <div class="flex items-center space-x-2">
                    <h1 class="text-2xl font-bold text-brand-dark tracking-tight">User Account Management</h1>
                </div>
                <p class="text-sm text-gray-500">Manage all staff and student accounts, assign departments, toggle active status, and issue password resets.</p>
            </div>

            <!-- Action Button -->
            <div>
                <button id="btn_open_add_user" class="inline-flex items-center px-4 py-2 bg-brand-primary hover:bg-brand-dark text-white text-xs font-semibold rounded-md shadow-xs transition-colors">
                    <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Add New User
                </button>
            </div>
        </section>

        <!-- Dynamic Alert Message Placeholder -->
        <div id="container_alert_message" class="hidden rounded-md p-4 border text-xs font-medium space-y-1"></div>

        <!-- Main Content Area: User List & Reset Requests -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Left 2 Columns: User Accounts Table & Search/Filters -->
            <div class="lg:col-span-2 space-y-6">

                <div class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">

                    <!-- Search & Filter Controls -->
                    <div class="p-5 border-b border-gray-100 space-y-4">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                            <h2 class="text-base font-bold text-brand-dark">System Accounts</h2>
                            <span id="txt_total_users" class="text-xs font-medium text-gray-500">Showing 5 User Records</span>
                        </div>

                        <!-- Filter Inputs -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <div>
                                <input type="text" id="filter_search" placeholder="Search Username or ID..." class="w-full text-xs px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-brand-primary">
                            </div>
                            <div>
                                <select id="filter_role" class="w-full text-xs px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-brand-primary bg-white">
                                    <option value="">All Roles</option>
                                    <option value="Student">Student</option>
                                    <option value="Registrar">Registrar</option>
                                    <option value="Cashier">Cashier</option>
                                    <option value="Department">Department</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                            <div>
                                <select id="filter_status" class="w-full text-xs px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-brand-primary bg-white">
                                    <option value="">All Statuses</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Clean & Simplified Table Container -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-xs overflow-hidden">
                        <div class="overflow-x-auto">
                            <table id="table_users" class="w-full text-left text-xs border-collapse">
                                <thead>
                                    <tr class="bg-gray-50/80 border-b border-gray-200 text-gray-500 uppercase tracking-wider font-semibold">
                                        <th class="py-3 px-4">User</th>
                                        <th class="py-3 px-4">Role</th>
                                        <th class="py-3 px-4">Department</th>
                                        <th class="py-3 px-4 text-center">Status</th>
                                        <th class="py-3 px-4 text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="user_table_body" class="divide-y divide-gray-100 text-gray-700">

                                    <!-- Admin Row -->
                                    <tr class="hover:bg-gray-50/60 transition-colors">
                                        <td class="py-3 px-4">
                                            <div class="font-semibold text-gray-900">admin_01</div>
                                            <div class="text-[11px] text-gray-400">Admin Account</div>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="text-xs font-medium px-2 py-0.5 rounded  ">Admin</span>
                                        </td>
                                        <td class="py-3 px-4 text-gray-400">—</td>
                                        <td class="py-3 px-4 text-center">
                                            <span class="inline-flex items-center gap-1.5 text-xs font-medium text-emerald-700">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-right">
                                            <button class="btn-edit-user p-1.5 text-gray-400 hover:text-gray-700 rounded-md hover:bg-gray-100" title="Edit Account">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Registrar Row -->
                                    <tr class="hover:bg-gray-50/60 transition-colors">
                                        <td class="py-3 px-4">
                                            <div class="font-semibold text-gray-900">registrar_staff</div>
                                            <div class="text-[11px] text-gray-400">ID: 2</div>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="text-xs font-medium text-blue-700 bg-blue-50 px-2 py-0.5 rounded border border-blue-200/60">Registrar</span>
                                        </td>
                                        <td class="py-3 px-4 text-gray-400">—</td>
                                        <td class="py-3 px-4 text-center">
                                            <span class="inline-flex items-center gap-1.5 text-xs font-medium text-emerald-700">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-right space-x-1">
                                            <button class="btn-edit-user p-1 text-gray-500 hover:text-brand-primary" title="Edit">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn-reset-pw p-1 text-amber-600 hover:text-amber-800" title="Reset Password">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Department Row -->
                                    <tr class="hover:bg-gray-50/60 transition-colors">
                                        <td class="py-3 px-4">
                                            <div class="font-semibold text-gray-900">dept_cs</div>
                                            <div class="text-[11px] text-gray-400">ID: 4</div>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="text-xs font-medium text-indigo-700 bg-indigo-50 px-2 py-0.5 rounded border border-indigo-200/60">Department</span>
                                        </td>
                                        <td class="py-3 px-4 font-medium text-gray-700">Computer Studies</td>
                                        <td class="py-3 px-4 text-center">
                                            <span class="inline-flex items-center gap-1.5 text-xs font-medium text-emerald-700">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-right space-x-1">
                                            <button class="btn-edit-user p-1 text-gray-500 hover:text-brand-primary" title="Edit">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn-reset-pw p-1 text-amber-600 hover:text-amber-800" title="Reset Password">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Student Row (Inactive + PW Pending Indicator) -->
                                    <tr class="hover:bg-gray-50/60 transition-colors">
                                        <td class="py-3 px-4">
                                            <div class="flex items-center space-x-1.5">
                                                <span class="font-semibold text-gray-900">2026-00001</span>
                                                <!-- Tiny icon badge indicating pending password reset required -->
                                                <span title="Must Change Password" class="w-2 h-2 rounded-full bg-amber-500"></span>
                                            </div>
                                            <div class="text-[11px] text-gray-400">Student</div>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="text-xs font-medium text-gray-600 bg-gray-100 px-2 py-0.5 rounded">Student</span>
                                        </td>
                                        <td class="py-3 px-4 text-gray-400">—</td>
                                        <td class="py-3 px-4 text-center">
                                            <span class="inline-flex items-center gap-1.5 text-xs font-medium text-gray-500">
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span> Inactive
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-right space-x-1">
                                            <button class="btn-edit-user p-1 text-gray-500 hover:text-brand-primary" title="Edit">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn-reset-pw p-1 text-amber-600 hover:text-amber-800" title="Reset Password">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Pagination Footer -->
                    <div class="p-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500">
                        <div>Showing 1 to 5 of 5 entries</div>
                        <div class="flex space-x-1">
                            <button class="px-2.5 py-1 border border-gray-200 rounded-md bg-gray-50 text-gray-400 cursor-not-allowed">Prev</button>
                            <button class="px-2.5 py-1 border border-brand-primary rounded-md bg-brand-primary text-white font-semibold">1</button>
                            <button class="px-2.5 py-1 border border-gray-200 rounded-md bg-gray-50 text-gray-400 cursor-not-allowed">Next</button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Password Reset Requests (password_resets table integration) -->
            <div class="space-y-6">

                <div class="bg-white border border-gray-200 rounded-md shadow-xs p-5 space-y-4">
                    <div class="flex items-center justify-between border-b border-gray-100 pb-3">
                        <h2 class="text-base font-bold text-brand-dark flex items-center gap-2">
                            <span>
                                <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                                </svg>
                            </span> Reset Requests
                        </h2>
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800">
                            2 Pending
                        </span>
                    </div>

                    <p class="text-xs text-gray-500">Users who submitted password reset requests in system. Generating a temporary password will auto-require them to change it on next login.</p>

                    <div id="container_reset_requests" class="space-y-3">

                        <!-- Request Item 1 -->
                        <div class="bg-gray-50 border border-gray-200 rounded-md p-3.5 space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-bold text-brand-dark">2026-00001 (Student)</span>
                                <span class="text-[10px] text-gray-400">10 mins ago</span>
                            </div>
                            <p class="text-[11px] text-gray-600">Reason: Forgot login password after term enrollment.</p>
                            <div class="pt-2 border-t border-gray-200 flex items-center justify-end space-x-2">
                                <button class="btn-fulfill-reset text-xs px-2.5 py-1 bg-amber-600 hover:bg-amber-700 text-white font-semibold rounded-md transition-colors" data-request-id="101" data-user-id="5" data-username="2026-00001">
                                    Generate Temp Password
                                </button>
                            </div>
                        </div>

                        <!-- Request Item 2 -->
                        <div class="bg-gray-50 border border-gray-200 rounded-md p-3.5 space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-bold text-brand-dark">dept_cs (Department)</span>
                                <span class="text-[10px] text-gray-400">1 hour ago</span>
                            </div>
                            <p class="text-[11px] text-gray-600">Reason: Account locked out / password forgotten.</p>
                            <div class="pt-2 border-t border-gray-200 flex items-center justify-end space-x-2">
                                <button class="btn-fulfill-reset text-xs px-2.5 py-1 bg-amber-600 hover:bg-amber-700 text-white font-semibold rounded-md transition-colors" data-request-id="102" data-user-id="4" data-username="dept_cs">
                                    Generate Temp Password
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Guidance Box -->
                <div class="bg-brand-accent/20 border border-brand-secondary/30 rounded-md p-4 space-y-2 text-xs text-brand-dark">
                    <h3 class="font-bold flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-brand-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        User Management Rules
                    </h3>
                    <ul class="list-disc list-inside space-y-1 text-gray-600 text-[11px]">
                        <li>No email delivery is used for resets. Copy and issue the temporary password directly to the user.</li>
                        <li>Temporary passwords trigger <code class="bg-white px-1 rounded border">must_change_password = 1</code>.</li>
                        <li>Disabled accounts are cut off instantly from page access.</li>
                        <li>Admins are restricted from disabling their own logged-in account.</li>
                    </ul>
                </div>

            </div>

        </div>

    </main>

    <!-- Modal Form: Add / Edit User -->
    <div id="modal_user_form" class="fixed inset-0 bg-gray-900/50 backdrop-blur-xs z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl max-w-md w-full overflow-hidden">
            <div class="p-5 border-b border-gray-100 flex items-center justify-between">
                <h3 id="modal_title" class="text-base font-bold text-brand-dark">Add New Staff / User Account</h3>
                <button type="button" id="btn_close_modal" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <form id="form_user" class="p-5 space-y-4">
                <input type="hidden" id="form_user_id" name="user_id" value="">

                <div>
                    <label for="form_username" class="block text-xs font-bold text-brand-dark mb-1">Username / Account ID <span class="text-red-500">*</span></label>
                    <input type="text" id="form_username" name="username" required placeholder="e.g., registrar_02 or 2026-00002" class="w-full text-xs px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-brand-primary">
                    <p class="text-[10px] text-gray-400 mt-1">Students use Student No; staff use assigned username.</p>
                </div>

                <div>
                    <label for="form_role" class="block text-xs font-bold text-brand-dark mb-1">System Role <span class="text-red-500">*</span></label>
                    <select id="form_role" name="role" required class="w-full text-xs px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-brand-primary bg-white">
                        <option value="">-- Select Role --</option>
                        <option value="Registrar">Registrar</option>
                        <option value="Cashier">Cashier</option>
                        <option value="Department">Department</option>
                        <option value="Admin">Admin</option>
                        <option value="Student">Student</option>
                    </select>
                </div>

                <!-- Department Selector (Conditional: required only for Department role) -->
                <div id="wrapper_department" class="hidden">
                    <label for="form_department_id" class="block text-xs font-bold text-brand-dark mb-1">Assigned Department <span class="text-red-500">*</span></label>
                    <select id="form_department_id" name="department_id" class="w-full text-xs px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-brand-primary bg-white">
                        <option value="">-- Select Department --</option>
                        <option value="1">Computer Studies</option>
                        <option value="2">Engineering</option>
                        <option value="3">Business & Accountancy</option>
                        <option value="4">Arts & Sciences</option>
                    </select>
                    <p class="text-[10px] text-gray-400 mt-1">Department staff can only view students belonging to their department's programs.</p>
                </div>

                <!-- Password Input (Only active for creation) -->
                <div id="wrapper_password">
                    <label for="form_password" class="block text-xs font-bold text-brand-dark mb-1">Initial Password <span class="text-red-500">*</span></label>
                    <input type="password" id="form_password" name="password" placeholder="At least 8 chars with letters & numbers" class="w-full text-xs px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-brand-primary">
                    <p class="text-[10px] text-gray-400 mt-1">Must be at least 8 characters long with letters and numbers.</p>
                </div>

                <div class="pt-3 border-t border-gray-100 flex items-center justify-end space-x-2">
                    <button type="button" id="btn_cancel_modal" class="px-4 py-2 border border-gray-300 rounded-md text-xs font-semibold text-gray-600 hover:bg-gray-50">Cancel</button>
                    <button type="submit" id="btn_save_user" class="px-4 py-2 bg-brand-primary hover:bg-brand-dark text-white text-xs font-semibold rounded-md shadow-xs transition-colors">Save Account</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Form: Temporary Password Display -->
    <div id="modal_temp_pw" class="fixed inset-0 bg-gray-900/50 backdrop-blur-xs z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl max-w-sm w-full overflow-hidden p-5 space-y-4">
            <div class="text-center space-y-1">
                <div class="w-10 h-10 bg-amber-100 text-amber-600 rounded-full flex items-center justify-center mx-auto">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                    </svg>
                </div>
                <h3 class="text-base font-bold text-brand-dark">Temporary Password Generated</h3>
                <p id="temp_pw_target" class="text-xs text-gray-500">For user: 2026-00001</p>
            </div>

            <div class="bg-gray-100 border border-gray-200 rounded-md p-3 text-center">
                <span class="text-xs text-gray-400 block font-semibold uppercase tracking-wider">Temporary Password</span>
                <span id="txt_generated_pw" class="text-lg font-mono font-bold text-brand-primary tracking-wider select-all">Pax#2026Temp</span>
            </div>

            <p class="text-[11px] text-gray-500 text-center leading-normal">
                Please securely convey this temporary password to the user. The system will force them to change it immediately upon their next login.
            </p>

            <button type="button" id="btn_close_temp_pw" class="w-full py-2 bg-brand-primary text-white text-xs font-semibold rounded-md hover:bg-brand-dark transition-colors">
                Done & Close
            </button>
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

            // Mobile navigation toggle
            $('#mobile_menu_btn').on('click', function() {
                $('#mobile_menu').toggleClass('hidden');
            });

            // Toggle department selection based on role
            $('#form_role').on('change', function() {
                if ($(this).val() === 'Department') {
                    $('#wrapper_department').removeClass('hidden');
                    $('#form_department_id').prop('required', true);
                } else {
                    $('#wrapper_department').addClass('hidden');
                    $('#form_department_id').prop('required', false).val('');
                }
            });

            // Search & Filter Handler
            function filterUsers() {
                const searchVal = $('#filter_search').val().toLowerCase().trim();
                const roleVal = $('#filter_role').val();
                const statusVal = $('#filter_status').val();

                let visibleCount = 0;

                $('#user_table_body tr').each(function() {
                    const row = $(this);
                    const text = row.text().toLowerCase();
                    const role = row.attr('data-role');
                    const status = row.attr('data-status');

                    const matchesSearch = !searchVal || text.includes(searchVal);
                    const matchesRole = !roleVal || role === roleVal;
                    const matchesStatus = !statusVal || status === statusVal;

                    if (matchesSearch && matchesRole && matchesStatus) {
                        row.removeClass('hidden');
                        visibleCount++;
                    } else {
                        row.addClass('hidden');
                    }
                });

                $('#txt_total_users').text(`Showing ${visibleCount} User Records`);
            }

            $('#filter_search').on('input', filterUsers);
            $('#filter_role, #filter_status').on('change', filterUsers);

            // Open Add User Modal
            $('#btn_open_add_user').on('click', function() {
                $('#modal_title').text('Add New Staff / User Account');
                $('#form_user_id').val('');
                $('#form_username').val('').prop('readonly', false);
                $('#form_role').val('');
                $('#wrapper_department').addClass('hidden');
                $('#wrapper_password').removeClass('hidden');
                $('#form_password').prop('required', true).val('');
                $('#modal_user_form').removeClass('hidden');
            });

            // Open Edit User Modal
            $(document).on('click', '.btn-edit-user', function() {
                const id = $(this).attr('data-id');
                const username = $(this).attr('data-username');
                const role = $(this).attr('data-role');
                const dept = $(this).attr('data-department');

                $('#modal_title').text('Edit User Account: ' + username);
                $('#form_user_id').val(id);
                $('#form_username').val(username).prop('readonly', true);
                $('#form_role').val(role).trigger('change');

                if (role === 'Department') {
                    $('#form_department_id').val(dept);
                }

                $('#wrapper_password').addClass('hidden');
                $('#form_password').prop('required', false).val('');
                $('#modal_user_form').removeClass('hidden');
            });

            // Close Modals
            $('#btn_close_modal, #btn_cancel_modal').on('click', function() {
                $('#modal_user_form').addClass('hidden');
            });

            $('#btn_close_temp_pw').on('click', function() {
                $('#modal_temp_pw').addClass('hidden');
            });

            // Handle Form Submission (Save User)
            $('#form_user').on('submit', function(e) {
                e.preventDefault();
                $('#btn_save_user').text('Saving...').prop('disabled', true);

                setTimeout(function() {
                    $('#btn_save_user').text('Save Account').prop('disabled', false);
                    $('#modal_user_form').addClass('hidden');

                    showAlert('success', 'User account successfully saved and recorded in audit logs.');
                }, 600);
            });

            // Toggle Account Status (Enable/Disable Rule: Admin cannot disable self)
            $(document).on('click', '.btn-toggle-status', function() {
                const userId = $(this).attr('data-id');
                const username = $(this).attr('data-username');
                const action = $(this).attr('data-action');

                if (userId === '1') {
                    showAlert('error', 'Security Restriction: Administrators are strictly prohibited from disabling their own logged-in account.');
                    return;
                }

                if (confirm(`Are you sure you want to ${action.toLowerCase()} account "${username}"?`)) {
                    showAlert('success', `Account "${username}" has been successfully set to ${action === 'Disable' ? 'Inactive' : 'Active'}. Status verified in session guard.`);
                }
            });

            // Reset Password Action (Generates Temporary Password)
            $(document).on('click', '.btn-reset-pw, .btn-fulfill-reset', function() {
                const username = $(this).attr('data-username');
                const requestId = $(this).attr('data-request-id');

                // Helper to generate a random 8-character compliant temp password
                const chars = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";
                let tempPw = "Pax#";
                for (let i = 0; i < 4; i++) {
                    tempPw += chars.charAt(Math.floor(Math.random() * chars.length));
                }

                $('#temp_pw_target').text(`For User Account: ${username}`);
                $('#txt_generated_pw').text(tempPw);
                $('#modal_temp_pw').removeClass('hidden');

                if (requestId) {
                    $(`.btn-fulfill-reset[data-request-id="${requestId}"]`).closest('.bg-gray-50').fadeOut(300, function() {
                        $(this).remove();
                    });
                }
            });

            // Alert Helper
            function showAlert(type, message) {
                const alertBox = $('#container_alert_message');
                alertBox.removeClass('hidden bg-emerald-50 border-emerald-200 text-emerald-800 bg-red-50 border-red-200 text-red-800');

                if (type === 'success') {
                    alertBox.addClass('bg-emerald-50 border-emerald-200 text-emerald-800');
                } else {
                    alertBox.addClass('bg-red-50 border-red-200 text-red-800');
                }

                alertBox.html(`
                    <div class="flex items-center justify-between">
                        <span>${message}</span>
                        <button onclick="$(this).parent().parent().addClass('hidden')" class="font-bold">&times;</button>
                    </div>
                `).removeClass('hidden');
            }
        });
    </script>
</body>

</html>