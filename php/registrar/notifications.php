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
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-brand-dark tracking-tight">System Activity & Alerts</h1>
                <p class="text-xs text-gray-500">Real-time alerts for document requests, grade submissions, and clearances</p>
            </div>
            <button class="px-3 py-1.5 text-xs font-semibold text-brand-primary bg-brand-accent/20 border border-brand-accent rounded-md hover:bg-brand-accent/40">Mark All as Read</button>
        </div>

        <div class="space-y-3">
            <div class="bg-white border-l-4 border-brand-primary border-y border-r border-gray-200 p-4 rounded-r-md shadow-xs flex items-start justify-between">
                <div class="flex items-start space-x-3">
                    <div class="p-2 bg-emerald-50 text-emerald-700 rounded-md shrink-0"><i data-lucide="file-text" class="w-5 h-5"></i></div>
                    <div class="space-y-0.5">
                        <p class="text-xs font-bold text-brand-dark">New Document Request Submitted</p>
                        <p class="text-xs text-gray-600">John Doe requested official TOR (Ref: REQ-2026-0891).</p>
                        <p class="text-[10px] text-gray-400 font-mono">10 minutes ago</p>
                    </div>
                </div>
                <button class="text-xs font-semibold text-brand-secondary hover:underline">View Request</button>
            </div>

            <div class="bg-white border-l-4 border-amber-500 border-y border-r border-gray-200 p-4 rounded-r-md shadow-xs flex items-start justify-between">
                <div class="flex items-start space-x-3">
                    <div class="p-2 bg-amber-50 text-amber-700 rounded-md shrink-0"><i data-lucide="shield-alert" class="w-5 h-5"></i></div>
                    <div class="space-y-0.5">
                        <p class="text-xs font-bold text-brand-dark">Clearance Hold Raised</p>
                        <p class="text-xs text-gray-600">Accounting flagged Jane Smith due to unpaid tuition fees.</p>
                        <p class="text-[10px] text-gray-400 font-mono">1 hour ago</p>
                    </div>
                </div>
                <button class="text-xs font-semibold text-brand-secondary hover:underline">Review Clearance</button>
            </div>
        </div>
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
    </script>
</body>

</html>