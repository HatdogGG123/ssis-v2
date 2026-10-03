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
                        <span class="text-[10px] uppercase font-semibold text-gray-500 tracking-widest block mt-0.5">University SSIS - Admin</span>
                    </div>
                </div>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center space-x-1">
                    <a href="userManagement.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">User Management</a>
                    <a href="systemSettings.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">System Settings</a>
                    <a href="monitoring.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">System Monitoring</a>
                    <a href="notifications.php" class="px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30 border border-brand-secondary/20 transition-colors">Notifications</a>
                    <a href="report.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Reports</a>
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
            <a href="userManagement.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">User Management</a>
            <a href="systemSettings.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">System Settings</a>
            <a href="monitoring.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">System Monitoring</a>
            <a href="notifications.php" class="block px-3 py-2 rounded-md text-base font-semibold text-brand-primary bg-brand-accent/30">Notifications</a>
            <a href="report.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Reports</a>
        </div>
    </header>

    <!-- Main Content Container -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">



        <!-- Notifications List Feed -->
        <section class="space-y-3" id="container_notifications_list">
            <!-- ITEM 4: READ - ACCOUNTING / TUITION REMINDER -->
            <div class="notification-item read bg-white border border-gray-200 rounded-md p-4 shadow-xs hover:bg-gray-50/80 transition-colors flex items-start justify-between gap-4 opacity-90" data-category="system">
                <div class="flex items-start space-x-3.5">
                    <div class="p-2.5 bg-amber-100 text-amber-800 rounded-md shrink-0 mt-0.5">
                        <i data-lucide="credit-card" class="w-5 h-5"></i>
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center space-x-2">
                            <h2 class="text-xs font-bold text-brand-dark">Preliminary Examination Payment Reminder</h2>
                            <span class="inline-flex items-center px-1.5 py-0.5 rounded text-[10px] font-semibold bg-amber-100 text-amber-800">Accounting</span>
                        </div>
                        <p class="text-xs text-gray-600">Please settle your remaining balance for the preliminary examinations before Oct 15, 2026 to avoid permit delays.</p>
                        <p class="text-[10px] text-gray-400">Sep 28, 2026 at 08:00 AM</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2 shrink-0">
                    <span class="text-[10px] font-semibold text-gray-400 uppercase tracking-wider">Read</span>
                </div>
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

            // Mark single notification as read UI handler
            $('.btn-mark-read').on('click', function() {
                const $item = $(this).closest('.notification-item');
                $item.removeClass('unread bg-brand-accent/20 bg-emerald-50/60 border-l-4 border-l-brand-primary border-l-emerald-600')
                    .addClass('read bg-white border border-gray-200 opacity-90');
                $item.find('.bg-red-600').remove();
                $(this).replaceWith('<span class="text-[10px] font-semibold text-gray-400 uppercase tracking-wider">Read</span>');
            });

            // Mark all notifications as read UI handler
            $('#btn_mark_all_read').on('click', function() {
                $('.btn-mark-read').trigger('click');
                $('#badge_unread_total').text('0 Unread').removeClass('bg-red-100 text-red-700').addClass('bg-gray-100 text-gray-600');
                $('#nav_unread_count').remove();
            });
        });
    </script>
</body>

</html>