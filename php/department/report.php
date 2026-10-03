<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Reports - Paxton SSIS</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- JQuery & Lucide Icons -->
    <script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

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
    <header class="bg-white border-b border-gray-200 sticky top-0 z-30 print:hidden">
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
                    <a href="clearance.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Clearance Approval</a>
                    <a href="report.php" class="px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30 border border-brand-secondary/20">Reports</a>
                    <a href="notifications.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-brand-primary hover:bg-gray-100 transition-colors">Notifications</a>
                </nav>

                <!-- Action Controls -->
                <div class="flex items-center space-x-3">
                    <div class="h-5 w-px bg-gray-200 hidden md:block"></div>

                    <!-- User Info / Profile -->
                    <div class="hidden lg:flex items-center space-x-2">
                        <div class="text-right">
                            <p class="text-xs font-semibold text-brand-dark">Dr. Alan Reyes</p>
                            <p class="text-[10px] text-gray-500">CS Department Head</p>
                        </div>
                        <a href="logout.php" class="p-2 text-gray-400 hover:text-red-600 rounded-md hover:bg-gray-100 transition-colors" title="Log Out">
                            <i data-lucide="log-out" class="w-5 h-5"></i>
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button id="mobile_menu_btn" type="button" class="lg:hidden p-2 rounded-md text-gray-600 hover:text-brand-primary hover:bg-gray-100 focus:outline-none">
                        <i data-lucide="menu" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile_menu" class="hidden lg:hidden border-t border-gray-200 bg-white px-4 pt-2 pb-4 space-y-1">
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Clearance Approval</a>
            <a href="report.php" class="block px-3 py-2 rounded-md text-base font-semibold text-brand-primary bg-brand-accent/30">Reports</a>
            <a href="notifications.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Notifications</a>
            <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold text-brand-dark">Dr. Alan Reyes</p>
                    <p class="text-xs text-gray-500">CS Department Head</p>
                </div>
                <a href="logout.php" class="text-xs text-red-600 font-semibold hover:underline">Log Out</a>
            </div>
        </div>
    </header>

    <!-- Main Content Container -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">

        <!-- Banner Section -->
        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="space-y-1">
                <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Department Clearance Reports</h1>
                <p class="text-sm text-gray-500">Track pending clearance items and ratio of cleared vs. not cleared students.</p>
            </div>

            <div class="flex items-center space-x-2 print:hidden">
                <button onclick="window.print()" class="px-3 py-2 bg-white border border-gray-200 rounded-md text-xs font-semibold text-gray-700 hover:bg-gray-50 transition-colors flex items-center space-x-1.5 shadow-xs">
                    <i data-lucide="printer" class="w-4 h-4"></i>
                    <span>Print Report</span>
                </button>
                <button onclick="exportTableToCSV('clearance_status.csv')" class="px-3 py-2 bg-brand-primary text-white rounded-md text-xs font-semibold hover:bg-brand-secondary transition-colors flex items-center space-x-1.5 shadow-xs">
                    <i data-lucide="download" class="w-4 h-4"></i>
                    <span>Export CSV</span>
                </button>
            </div>
        </section>

        <!-- Filters Section -->
        <section class="bg-white border border-gray-200 rounded-md p-5 shadow-xs space-y-4 print:hidden">
            <h2 class="text-xs font-bold text-gray-500 uppercase tracking-wider">Department Filters</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Academic Program</label>
                    <select class="w-full text-xs border border-gray-200 rounded-md p-2 focus:ring-brand-primary focus:border-brand-primary bg-gray-50/50">
                        <option value="">All Department Programs</option>
                        <option>BS Computer Science</option>
                        <option>BS Information Technology</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Year Level</label>
                    <select class="w-full text-xs border border-gray-200 rounded-md p-2 focus:ring-brand-primary focus:border-brand-primary bg-gray-50/50">
                        <option value="">All Year Levels</option>
                        <option>1st Year</option>
                        <option>2nd Year</option>
                        <option>3rd Year</option>
                        <option>4th Year</option>
                    </select>
                </div>
            </div>
        </section>

        <!-- Summary Metrics -->
        <section class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="bg-white border border-gray-200 rounded-md p-5 shadow-xs space-y-2">
                <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Total Evaluated Students</span>
                <p class="text-2xl font-bold text-brand-dark">1,250</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-md p-5 shadow-xs space-y-2">
                <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Cleared Students</span>
                <p class="text-2xl font-bold text-emerald-700">1,080 (86.4%)</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-md p-5 shadow-xs space-y-2">
                <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Not Cleared / Pending</span>
                <p class="text-2xl font-bold text-red-600">170 (13.6%)</p>
            </div>
        </section>

        <!-- Table Container -->
        <div class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
            <div class="p-5 border-b border-gray-100 flex items-center justify-between">
                <div>
                    <h2 class="text-base font-bold text-brand-dark">Clearance Status List</h2>
                    <p class="text-xs text-gray-500">Student-level clearance and pending requirement details</p>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table id="report_table" class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase tracking-wider font-semibold">
                            <th class="py-3 px-5">Student ID</th>
                            <th class="py-3 px-5">Student Name</th>
                            <th class="py-3 px-5">Program & Year</th>
                            <th class="py-3 px-5">Pending Requirement Item</th>
                            <th class="py-3 px-5 text-right">Clearance Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-gray-700 font-medium">
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-bold font-display text-brand-dark">2023-00124</td>
                            <td class="py-3.5 px-5 font-semibold text-brand-dark">Ana Gomez</td>
                            <td class="py-3.5 px-5">BS CS - 4th Year</td>
                            <td class="py-3.5 px-5 text-red-600">Lab Equipment Return Pending</td>
                            <td class="py-3.5 px-5 text-right">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-red-100 text-red-800">Not Cleared</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-bold font-display text-brand-dark">2024-00512</td>
                            <td class="py-3.5 px-5 font-semibold text-brand-dark">Mark Bautista</td>
                            <td class="py-3.5 px-5">BS IT - 3rd Year</td>
                            <td class="py-3.5 px-5 text-gray-400">None (All requirements met)</td>
                            <td class="py-3.5 px-5 text-right">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-100 text-emerald-800">Cleared</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <!-- Formal Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12 py-6 text-center text-xs text-gray-500 print:hidden">
        <div class="max-w-7xl mx-auto px-4">
            <p>Paxton University Student Services Information System (SSIS) &copy; 2026. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            lucide.createIcons();
            $('#mobile_menu_btn').on('click', function() {
                $('#mobile_menu').toggleClass('hidden');
            });
        });

        function exportTableToCSV(filename) {
            let csv = [];
            let rows = document.querySelectorAll("#report_table tr");
            for (let i = 0; i < rows.length; i++) {
                let row = [],
                    cols = rows[i].querySelectorAll("td, th");
                for (let j = 0; j < cols.length; j++) row.push('"' + cols[j].innerText + '"');
                csv.push(row.join(","));
            }
            let csvFile = new Blob([csv.join("\n")], {
                type: "text/csv"
            });
            let downloadLink = document.createElement("a");
            downloadLink.download = filename;
            downloadLink.href = window.URL.createObjectURL(csvFile);
            downloadLink.style.display = "none";
            document.body.appendChild(downloadLink);
            downloadLink.click();
        }
    </script>
</body>

</html>