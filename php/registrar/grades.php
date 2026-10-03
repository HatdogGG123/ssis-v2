<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Grade Entry & Release</title>
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
                    <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Grades</a>
                    <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
                    <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
                    <a href="report.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Report</a>
                    <a href="notifications.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Notifications</a>
                    <a href="announcements.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Announcements</a>
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
            <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Grades</a>
            <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
            <a href="report.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Report</a>
            <a href="notifications.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Notifications</a>
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

    <!-- Main Content -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-6">

        <!-- Banner & Selector -->
        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs space-y-4">
            <div>
                <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Grade Entry & Release</h1>
                <p class="text-sm text-gray-500">Select an academic term and section to manage enrolled student grades, save drafts, and release final marks.</p>
            </div>

            <!-- Filters: Term & Subject Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 pt-2 border-t border-gray-100">
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Academic Term</label>
                    <select id="select_term" class="w-full text-xs border border-gray-200 rounded-md p-2 bg-white focus:outline-none focus:ring-1 focus:ring-brand-primary">
                        <option value="2026-1">1st Semester 2026-2027</option>
                        <option value="2025-2">2nd Semester 2025-2026</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Subject & Section</label>
                    <select id="select_section" class="w-full text-xs border border-gray-200 rounded-md p-2 bg-white focus:outline-none focus:ring-1 focus:ring-brand-primary">
                        <option value="CS301-3A">CS 301 - Data Structures (Section 3A)</option>
                        <option value="IT204-2B">IT 204 - Web Architecture (Section 2B)</option>
                    </select>
                </div>
            </div>
        </section>

        <!-- Notification Bar -->
        <div id="alert_box" class="hidden p-4 text-xs font-medium rounded-md border flex items-center justify-between">
            <span id="alert_msg"></span>
            <button onclick="$('#alert_box').addClass('hidden')" class="text-gray-400 hover:text-gray-600"><i data-lucide="x" class="w-4 h-4"></i></button>
        </div>

        <!-- Grade Input Table -->
        <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
            <div class="p-5 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h2 class="text-base font-bold text-brand-dark">Enrolled Class Roster</h2>
                    <p class="text-xs text-gray-400">Only students currently enrolled in this term are listed.</p>
                </div>
                <!-- Bulk Actions -->
                <div class="flex items-center space-x-2">
                    <button type="button" onclick="saveAllDrafts()" class="px-3 py-1.5 rounded-md text-xs font-semibold border border-gray-200 bg-white text-gray-700 hover:bg-gray-50">Save All as Draft</button>
                    <button type="button" onclick="releaseAllGrades()" class="px-3 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">Release All Grades</button>
                </div>
            </div>

            <!-- Table Wrapper with smooth horizontal scrolling & fixed minimum width -->
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs border-collapse min-w-[560px]">
                    <thead>
                        <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase font-semibold whitespace-nowrap">
                            <th class="py-3 px-3 sm:px-5 sticky left-0 bg-gray-50 z-10 shadow-[1px_0_0_0_#f3f4f6]">Student ID & Name</th>
                            <th class="py-3 px-3 sm:px-5">Grade Input</th>
                            <th class="py-3 px-3 sm:px-5 text-center">Status</th>
                            <th class="py-3 px-3 sm:px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 font-medium text-gray-700">
                        <!-- Student 1 -->
                        <tr data-student="2026-00001" class="hover:bg-gray-50/50 group">
                            <td class="py-3.5 px-3 sm:px-5 whitespace-nowrap sticky left-0 bg-white group-hover:bg-gray-50/50 z-10 shadow-[1px_0_0_0_#f3f4f6]">
                                <p class="font-bold text-brand-dark">John Doe</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00001</p>
                            </td>
                            <td class="py-3.5 px-3 sm:px-5 whitespace-nowrap">
                                <input type="text" value="1.25" class="grade-input w-20 sm:w-24 p-1.5 border border-gray-200 rounded text-xs focus:ring-1 focus:ring-brand-primary">
                            </td>
                            <td class="py-3.5 px-3 sm:px-5 text-center whitespace-nowrap">
                                <span class="status-badge px-2 py-0.5 rounded text-[10px] font-bold bg-amber-100 text-amber-800">Draft</span>
                            </td>
                            <td class="py-3.5 px-3 sm:px-5 text-right whitespace-nowrap space-x-1">
                                <button type="button" onclick="saveDraft(this)" class="px-2.5 py-1 rounded text-[11px] font-semibold border border-gray-200 bg-white hover:bg-gray-50">Save Draft</button>
                                <button type="button" onclick="handleRelease(this)" class="btn-release px-2.5 py-1 rounded text-[11px] font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">Release</button>
                            </td>
                        </tr>
                        <!-- Student 2 (Already Released) -->
                        <tr data-student="2026-00002" data-released="true" class="hover:bg-gray-50/50 group">
                            <td class="py-3.5 px-3 sm:px-5 whitespace-nowrap sticky left-0 bg-white group-hover:bg-gray-50/50 z-10 shadow-[1px_0_0_0_#f3f4f6]">
                                <p class="font-bold text-brand-dark">Jane Smith</p>
                                <p class="text-gray-400 text-[11px] font-mono">2026-00002</p>
                            </td>
                            <td class="py-3.5 px-3 sm:px-5 whitespace-nowrap">
                                <input type="text" value="1.50" class="grade-input w-20 sm:w-24 p-1.5 border border-gray-200 rounded text-xs focus:ring-1 focus:ring-brand-primary">
                            </td>
                            <td class="py-3.5 px-3 sm:px-5 text-center whitespace-nowrap">
                                <span class="status-badge px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-800">Released</span>
                            </td>
                            <td class="py-3.5 px-3 sm:px-5 text-right whitespace-nowrap space-x-1">
                                <button type="button" onclick="handleRelease(this)" class="btn-release px-2.5 py-1 rounded text-[11px] font-semibold bg-gray-200 text-gray-700 hover:bg-gray-300">Edit Grade</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Modal: Reason for Modification (Required for Released Grades) -->
    <div id="modal_reason" class="fixed inset-0 z-50 hidden bg-gray-900/50 flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-md p-6 space-y-4">
            <h3 class="text-base font-bold text-brand-dark">Modification Reason Required</h3>
            <p class="text-xs text-gray-500">This grade has already been released. Please provide a mandatory reason for updating it in the audit log.</p>
            <textarea id="input_reason" rows="3" class="w-full text-xs p-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-brand-primary" placeholder="e.g., Re-evaluation of final project..."></textarea>
            <div class="flex justify-end space-x-2">
                <button type="button" onclick="$('#modal_reason').addClass('hidden')" class="px-3 py-1.5 text-xs rounded border border-gray-200 text-gray-600">Cancel</button>
                <button type="button" onclick="confirmGradeModification()" class="px-3 py-1.5 text-xs bg-brand-primary text-white rounded font-semibold">Save Modification</button>
            </div>
        </div>
    </div>

    <script>
        let currentTargetRow = null;

        $(document).ready(function() {
            lucide.createIcons();
        });

        function showNotification(msg, isSuccess = true) {
            const box = $('#alert_box');
            box.removeClass('hidden bg-emerald-50 border-emerald-200 text-emerald-800 bg-red-50 border-red-200 text-red-800');
            box.addClass(isSuccess ? 'bg-emerald-50 border-emerald-200 text-emerald-800' : 'bg-red-50 border-red-200 text-red-800');
            $('#alert_msg').text(msg);
        }

        function saveDraft(btn) {
            const row = $(btn).closest('tr');
            row.find('.status-badge').removeClass('bg-emerald-100 text-emerald-800').addClass('bg-amber-100 text-amber-800').text('Draft');
            showNotification('Grade saved as draft.');
        }

        function saveAllDrafts() {
            $('.status-badge').each(function() {
                if ($(this).text() !== 'Released') {
                    $(this).removeClass('bg-emerald-100 text-emerald-800').addClass('bg-amber-100 text-amber-800').text('Draft');
                }
            });
            showNotification('All pending grades saved as drafts.');
        }

        function handleRelease(btn) {
            const row = $(btn).closest('tr');
            const isReleased = row.attr('data-released') === 'true';

            if (isReleased) {
                currentTargetRow = row;
                $('#input_reason').val('');
                $('#modal_reason').removeClass('hidden');
            } else {
                row.attr('data-released', 'true');
                row.find('.status-badge').removeClass('bg-amber-100 text-amber-800').addClass('bg-emerald-100 text-emerald-800').text('Released');
                row.find('.btn-release').text('Edit Grade').removeClass('bg-brand-primary text-white').addClass('bg-gray-200 text-gray-700');
                showNotification('Grade officially released to student.');
            }
        }

        function confirmGradeModification() {
            const reason = $('#input_reason').val().trim();
            if (!reason) {
                alert('A modification reason is required.');
                return;
            }
            $('#modal_reason').addClass('hidden');
            showNotification('Released grade updated with logged reason.');
        }

        function releaseAllGrades() {
            $('tbody tr').each(function() {
                $(this).attr('data-released', 'true');
                $(this).find('.status-badge').removeClass('bg-amber-100 text-amber-800').addClass('bg-emerald-100 text-emerald-800').text('Released');
                $(this).find('.btn-release').text('Edit Grade').removeClass('bg-brand-primary text-white').addClass('bg-gray-200 text-gray-700');
            });
            showNotification('All class grades have been released.');
        }

        $('#btn_mobile_menu').on('click', function() {
            $('#mobile_nav_menu').toggleClass('hidden');
            $('#icon_menu_open').toggleClass('hidden');
            $('#icon_menu_close').toggleClass('hidden');
        });
    </script>
</body>

</html>