<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Enrollment Management</title>
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
                    <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Enrollment</a>
                    <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Grades</a>
                    <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
                    <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
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
            <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Enrollment</a>
            <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Grades</a>
            <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
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

    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">
        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Student Enrollment Queue</h1>
                <p class="text-sm text-gray-500">Evaluate course requests, assign sections, and validate subject load prerequisites.</p>
            </div>
            <div class="grid grid-cols-3 gap-3">
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Pending Review</span>
                    <span class="text-base font-bold text-amber-700">12</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Enrolled</span>
                    <span class="text-base font-bold text-emerald-700">340</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Rejected</span>
                    <span class="text-base font-bold text-red-700">3</span>
                </div>
            </div>
        </section>

        <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
            <div class="p-5 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <h2 class="text-base font-bold text-brand-dark">Enrollment Applications (A.Y. 2026-2027)</h2>
                <input type="text" placeholder="Search Student ID or Name..." class="px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary">
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase font-semibold">
                            <th class="py-3 px-5">Student Name & ID</th>
                            <th class="py-3 px-5">Degree Program</th>
                            <th class="py-3 px-5">Year Level & Section</th>
                            <th class="py-3 px-5 text-center">Status (Section 12)</th>
                            <th class="py-3 px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 font-medium text-gray-700">
                        <tr class="hover:bg-gray-50/50">
                            <td class="py-3.5 px-5">
                                <p class="font-bold text-brand-dark">John Doe</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00001</p>
                            </td>
                            <td class="py-3.5 px-5">BS Computer Science</td>
                            <td class="py-3.5 px-5">3rd Year • Section 3A</td>
                            <td class="py-3.5 px-5 text-center"><span class="px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-amber-100 text-amber-800">Pending Review</span></td>
                            <td class="py-3.5 px-5 text-right space-x-1">
                                <button class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">Approve</button>
                                <button class="px-2.5 py-1.5 rounded-md text-xs font-semibold border border-red-200 text-red-600 bg-white hover:bg-red-50">Reject</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50/50">
                            <td class="py-3.5 px-5">
                                <p class="font-bold text-brand-dark">Jane Smith</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00002</p>
                            </td>
                            <td class="py-3.5 px-5">BS Information Technology</td>
                            <td class="py-3.5 px-5">2nd Year • Section 2B</td>
                            <td class="py-3.5 px-5 text-center"><span class="px-2.5 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Enrolled</span></td>

                        </tr>
                    </tbody>
                </table>
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
    </script>
</body>

</html>