<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Registrar Notifications</title>
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
                    <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
                    <a href="notifications.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Notifications</a>
                    <a href="announcements.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Announcement</a>
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
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
            <a href="notifications.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Notifications</a>
            <a href="announcements.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Announcements</a>

            <div class="pt-3 border-t border-gray-100 flex items-center justify-between px-3">
                <div>
                    <p class="text-xs font-semibold text-brand-dark">Registrar Staff</p>
                    <p class="text-[10px] text-gray-500 uppercase font-bold">Registrar Module</p>
                </div>
                <a href="logout.php" class="text-xs text-red-600 font-semibold hover:underline">Log Out</a>
            </div>
        </div>
    </header>

    <main class="flex-1 max-w-5xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-6">


        <!-- Notifications List Feed -->
        <section class="space-y-3" id="container_notifications_list">

            <!-- ITEM 1: UNREAD - ACADEMIC GRADES -->
            <div class="notification-item unread bg-brand-accent/20 border-l-4 border-l-brand-primary border-y border-r border-gray-200 rounded-r-md p-4 shadow-xs hover:bg-brand-accent/30 transition-colors flex items-start justify-between gap-4" data-category="grades">
                <div class="flex items-start space-x-3.5">
                    <div class="p-2.5 bg-brand-primary/10 text-brand-primary rounded-md shrink-0 mt-0.5">
                        <i data-lucide="award" class="w-5 h-5"></i>
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center space-x-2">
                            <h2 class="text-xs font-bold text-brand-dark">Grade Evaluation Released</h2>
                            <span class="inline-flex items-center px-1.5 py-0.5 rounded text-[10px] font-semibold bg-brand-primary text-white">Grades</span>
                            <span class="w-2 h-2 rounded-full bg-red-600 inline-block" title="Unread"></span>
                        </div>
                        <p class="text-xs text-gray-700">Official grades for <strong>1st Semester, AY 2026-2027</strong> have been evaluated and published by the Registrar.</p>
                        <p class="text-[10px] text-gray-500">Today at 09:30 AM</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2 shrink-0">
                    <button type="button" class="btn-mark-read p-1 text-gray-400 hover:text-brand-primary rounded" title="Mark as Read">
                        <i data-lucide="check" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>

            <!-- ITEM 2: UNREAD - CLEARANCE APPROVAL -->
            <div class="notification-item unread bg-emerald-50/60 border-l-4 border-l-emerald-600 border-y border-r border-gray-200 rounded-r-md p-4 shadow-xs hover:bg-emerald-50 transition-colors flex items-start justify-between gap-4" data-category="clearance">
                <div class="flex items-start space-x-3.5">
                    <div class="p-2.5 bg-emerald-100 text-emerald-800 rounded-md shrink-0 mt-0.5">
                        <i data-lucide="shield-check" class="w-5 h-5"></i>
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center space-x-2">
                            <h2 class="text-xs font-bold text-brand-dark">University Library Clearance Approved</h2>
                            <span class="inline-flex items-center px-1.5 py-0.5 rounded text-[10px] font-semibold bg-emerald-100 text-emerald-800">Clearance</span>
                            <span class="w-2 h-2 rounded-full bg-red-600 inline-block" title="Unread"></span>
                        </div>
                        <p class="text-xs text-gray-700">The Library Department marked your clearance status as <strong>Approved</strong>. No outstanding book returns or fines.</p>
                        <p class="text-[10px] text-gray-500">Yesterday at 02:15 PM</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2 shrink-0">
                    <button type="button" class="btn-mark-read p-1 text-gray-400 hover:text-brand-primary rounded" title="Mark as Read">
                        <i data-lucide="check" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>

            <!-- ITEM 3: UNREAD - DOCUMENT READY -->
            <div class="notification-item unread bg-brand-accent/20 border-l-4 border-l-brand-primary border-y border-r border-gray-200 rounded-r-md p-4 shadow-xs hover:bg-brand-accent/30 transition-colors flex items-start justify-between gap-4" data-category="requests">
                <div class="flex items-start space-x-3.5">
                    <div class="p-2.5 bg-blue-100 text-blue-800 rounded-md shrink-0 mt-0.5">
                        <i data-lucide="file-check-2" class="w-5 h-5"></i>
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center space-x-2">
                            <h2 class="text-xs font-bold text-brand-dark">Document Ready for Download</h2>
                            <span class="inline-flex items-center px-1.5 py-0.5 rounded text-[10px] font-semibold bg-blue-100 text-blue-800">Requests</span>
                            <span class="w-2 h-2 rounded-full bg-red-600 inline-block" title="Unread"></span>
                        </div>
                        <p class="text-xs text-gray-700">Request <strong>REQ-2026-001 (Certificate of Enrollment)</strong> has been verified. You can now download the official PDF copy.</p>
                        <p class="text-[10px] text-gray-500">Oct 01, 2026 at 11:00 AM</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2 shrink-0">
                    <button type="button" class="btn-mark-read p-1 text-gray-400 hover:text-brand-primary rounded" title="Mark as Read">
                        <i data-lucide="check" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>

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

            <!-- ITEM 5: READ - REJECTED REQUEST -->
            <div class="notification-item read bg-white border border-gray-200 rounded-md p-4 shadow-xs hover:bg-gray-50/80 transition-colors flex items-start justify-between gap-4 opacity-90" data-category="requests">
                <div class="flex items-start space-x-3.5">
                    <div class="p-2.5 bg-red-100 text-red-800 rounded-md shrink-0 mt-0.5">
                        <i data-lucide="alert-circle" class="w-5 h-5"></i>
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center space-x-2">
                            <h2 class="text-xs font-bold text-brand-dark">Request Disapproved: REQ-2026-005</h2>
                            <span class="inline-flex items-center px-1.5 py-0.5 rounded text-[10px] font-semibold bg-red-100 text-red-800">Requests</span>
                        </div>
                        <p class="text-xs text-gray-600">Your request for Form 137 was disapproved due to an unresolved Library hold. Please settle library clearance first.</p>
                        <p class="text-[10px] text-gray-400">Sep 15, 2026 at 04:45 PM</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-white border-t border-gray-200 mt-12 py-6 text-center text-xs text-gray-500">
        <p>Paxton University Student Services Information System (SSIS) &copy; 2026. All Rights Reserved.</p>
    </footer>
    <script>
        lucide.createIcons();

        $('#btn_mobile_menu').on('click', function() {
            $('#mobile_nav_menu').toggleClass('hidden');
            $('#icon_menu_open').toggleClass('hidden');
            $('#icon_menu_close').toggleClass('hidden');
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
    </script>
</body>

</html>