<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxton University - Announcements & Notifications</title>
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

<body class="bg-gray-50 font-sans text-brand-dark antialiased min-h-screen flex flex-col relative">
    <!-- Navigation Header -->
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

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center space-x-1 text-xs">
                    <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Enrollment</a>
                    <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Grades</a>
                    <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
                    <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
                    <a href="report.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Report</a>
                    <a href="notifications.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Notifications</a>
                    <a href="announcements.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Announcements</a>
                </nav>

                <!-- Profile Info & Mobile Toggle -->
                <div class="flex items-center space-x-3">
                    <div class="hidden lg:flex items-center space-x-2">
                        <div class="text-right">
                            <p class="text-xs font-semibold text-brand-dark">Registrar Staff</p>
                            <p class="text-[10px] text-gray-500 uppercase font-bold">Registrar Module</p>
                        </div>
                    </div>

                    <button type="button" id="btn_mobile_menu" class="lg:hidden p-2 rounded-md text-gray-500 hover:text-brand-dark hover:bg-gray-100 focus:outline-none">
                        <i data-lucide="menu" id="icon_menu_open" class="w-6 h-6"></i>
                        <i data-lucide="x" id="icon_menu_close" class="w-6 h-6 hidden"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile_nav_menu" class="hidden lg:hidden border-t border-gray-200 bg-white px-4 pt-2 pb-4 space-y-1 text-xs shadow-md">
            <a href="enrollment.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Enrollment</a>
            <a href="grades.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Grades</a>
            <a href="documentRequest.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Document Requests</a>
            <a href="clearance.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Clearance</a>
            <a href="report.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Report</a>
            <a href="notifications.php" class="block px-3 py-2 rounded-md text-sm font-semibold text-brand-primary bg-brand-accent/30">Notifications</a>
            <a href="announcements.php" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-50">Announcements</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">

        <!-- Header Banner -->
        <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Announcements & Notifications</h1>
                <p class="text-sm text-gray-500">Publish general broadcast announcements or send targeted direct messages to specific students.</p>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <div class="bg-gray-50 border border-gray-200 rounded-md px-4 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Active Announcements</span>
                    <span class="text-base font-bold text-brand-primary">12</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-md px-4 py-2 text-center">
                    <span class="text-[9px] uppercase font-bold text-gray-400 block">Direct Messages Sent</span>
                    <span class="text-base font-bold text-brand-secondary">89</span>
                </div>
            </div>
        </section>

        <!-- Composition Forms Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- SECTION 1: Post Announcement Form -->
            <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col justify-between">
                <div>
                    <div class="flex items-center space-x-2 border-b border-gray-100 pb-3 mb-4">
                        <i data-lucide="megaphone" class="w-5 h-5 text-brand-primary"></i>
                        <h2 class="text-base font-bold text-brand-dark">Post System Announcement</h2>
                    </div>

                    <form id="form_post_announcement" onsubmit="handlePostAnnouncement(event)" class="space-y-4 text-xs">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-1">Announcement Title <span class="text-red-500">*</span></label>
                            <input type="text" required placeholder="e.g. Schedule for 1st Trimester Final Examinations" class="w-full border border-gray-200 rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-brand-secondary">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-1">Target Audience <span class="text-red-500">*</span></label>
                                <select class="w-full border border-gray-200 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-1 focus:ring-brand-secondary">
                                    <option value="all">All Enrolled Students</option>
                                    <option value="bscs">BS Computer Science</option>
                                    <option value="bsit">BS Information Technology</option>
                                    <option value="bsis">BS Information Systems</option>
                                    <option value="graduating">Graduating Students Only</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-1">Announcement Details <span class="text-red-500">*</span></label>
                            <textarea rows="4" required placeholder="Write the full announcement message content here..." class="w-full border border-gray-200 rounded-md p-2.5 focus:outline-none focus:ring-1 focus:ring-brand-secondary"></textarea>
                        </div>

                        <div class="pt-2 flex justify-end">
                            <button type="submit" class="px-4 py-2 font-semibold bg-brand-primary text-white rounded-md hover:bg-brand-primary/90 flex items-center space-x-2">
                                <i data-lucide="send" class="w-4 h-4"></i>
                                <span>Publish Announcement</span>
                            </button>
                        </div>
                    </form>
                </div>
            </section>

            <!-- SECTION 2: Send Direct Student Message Form -->
            <section class="bg-white border border-gray-200 rounded-md p-6 shadow-xs flex flex-col justify-between">
                <div>
                    <div class="flex items-center space-x-2 border-b border-gray-100 pb-3 mb-4">
                        <i data-lucide="mail" class="w-5 h-5 text-brand-secondary"></i>
                        <h2 class="text-base font-bold text-brand-dark">Send Student Message</h2>
                    </div>

                    <form id="form_send_direct_message" onsubmit="handleSendDirectMessage(event)" class="space-y-4 text-xs">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-1">Student Number / ID <span class="text-red-500">*</span></label>
                                <input type="text" required placeholder="e.g. 2026-00001" class="w-full border border-gray-200 rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-brand-secondary">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-1">Message Category</label>
                                <select class="w-full border border-gray-200 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-1 focus:ring-brand-secondary">
                                    <option value="clearance">Clearance Requirement Notice</option>
                                    <option value="document">Document Request Update</option>
                                    <option value="enrollment">Enrollment Assessment Alert</option>
                                    <option value="general">General Notice</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-1">Subject / Header <span class="text-red-500">*</span></label>
                            <input type="text" required placeholder="e.g. Missing Form 137 Credential Clearance" class="w-full border border-gray-200 rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-brand-secondary">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-1">Message Body <span class="text-red-500">*</span></label>
                            <textarea rows="4" required placeholder="Type direct private message to student..." class="w-full border border-gray-200 rounded-md p-2.5 focus:outline-none focus:ring-1 focus:ring-brand-secondary"></textarea>
                        </div>

                        <div class="pt-2 flex justify-end">
                            <button type="submit" class="px-4 py-2 font-semibold bg-brand-secondary text-white rounded-md hover:bg-brand-secondary/90 flex items-center space-x-2">
                                <i data-lucide="send" class="w-4 h-4"></i>
                                <span>Send Direct Message</span>
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        </div>

        <!-- SECTION 3: Tables Section -->
        <div class="space-y-8">

            <!-- Table 1: Recent Published Announcements -->
            <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
                <div class="p-5 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center space-x-2">
                        <i data-lucide="bell" class="w-4 h-4 text-brand-primary"></i>
                        <h3 class="text-base font-bold text-brand-dark">Active & Recent Announcements</h3>
                    </div>
                    <div class="flex items-center space-x-2">
                        <input type="text" placeholder="Search Announcements..." class="px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary">
                    </div>
                </div>

                <!-- Scrollable Table Container -->
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[750px] text-left text-xs border-collapse">
                        <thead>
                            <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase font-semibold">
                                <th class="py-3 px-5 min-w-[200px]">Title & Content Preview</th>
                                <th class="py-3 px-5 text-center whitespace-nowrap">Audience</th>
                                <th class="py-3 px-5 whitespace-nowrap">Date Published</th>
                                <th class="py-3 px-5 text-right whitespace-nowrap">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 font-medium text-gray-700">
                            <!-- Announcement Row 1 -->
                            <tr class="hover:bg-gray-50/50">
                                <td class="py-3.5 px-5">
                                    <p class="font-bold text-brand-dark">1st Trimester Final Exam Schedule</p>
                                    <p class="text-gray-400 text-[11px] truncate max-w-xs">Please be advised that final examination permits are now available for downloading...</p>
                                </td>
                                <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                    <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-gray-100 text-gray-700">All Students</span>
                                </td>
                                <td class="py-3.5 px-5 whitespace-nowrap text-gray-500">Oct 02, 2026</td>
                                <td class="py-3.5 px-5 text-right space-x-1 whitespace-nowrap">
                                    <button type="button" onclick="viewAnnouncementModal('1st Trimester Final Exam Schedule', 'All Students', 'High Priority', 'Oct 02, 2026', 'Please be advised that final examination permits are now available for downloading. Ensure all clearance holds are resolved prior to the test date.')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">View</button>
                                    <button type="button" onclick="promptDeleteRecord('announcement', '1st Trimester Final Exam Schedule')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold border border-red-200 text-red-600 bg-white hover:bg-red-50">Delete</button>
                                </td>
                            </tr>

                            <!-- Announcement Row 2 -->
                            <tr class="hover:bg-gray-50/50">
                                <td class="py-3.5 px-5">
                                    <p class="font-bold text-brand-dark">Graduation Requirements Submission Deadline</p>
                                    <p class="text-gray-400 text-[11px] truncate max-w-xs">All candidates for graduation must submit their honorable dismissal copies to the Registrar...</p>
                                </td>
                                <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                    <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-blue-50 text-blue-700">Graduating</span>
                                </td>
                                <td class="py-3.5 px-5 whitespace-nowrap text-gray-500">Sep 25, 2026</td>
                                <td class="py-3.5 px-5 text-right space-x-1 whitespace-nowrap">
                                    <button type="button" onclick="viewAnnouncementModal('Graduation Requirements Submission Deadline', 'Graduating', 'Normal', 'Sep 25, 2026', 'All candidates for graduation must submit their honorable dismissal copies to the Registrar Office before October 15, 2026.')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">View</button>
                                    <button type="button" onclick="promptDeleteRecord('announcement', 'Graduation Requirements Submission Deadline')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold border border-red-200 text-red-600 bg-white hover:bg-red-50">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Table 2: Direct Student Messages Log -->
            <section class="bg-white border border-gray-200 rounded-md shadow-xs overflow-hidden">
                <div class="p-5 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center space-x-2">
                        <i data-lucide="message-square" class="w-4 h-4 text-brand-secondary"></i>
                        <h3 class="text-base font-bold text-brand-dark">Direct Student Messages Log</h3>
                    </div>
                    <div class="flex items-center space-x-2">
                        <input type="text" placeholder="Search Student or Subject..." class="px-3 py-1.5 text-xs border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-brand-secondary">
                    </div>
                </div>

                <!-- Scrollable Table Container -->
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[750px] text-left text-xs border-collapse">
                        <thead>
                            <tr class="bg-gray-50/80 border-b border-gray-100 text-gray-500 uppercase font-semibold">
                                <th class="py-3 px-5 whitespace-nowrap">Student</th>
                                <th class="py-3 px-5 min-w-[180px]">Subject / Title</th>
                                <th class="py-3 px-5 text-center whitespace-nowrap">Category</th>
                                <th class="py-3 px-5 text-center whitespace-nowrap">Status</th>
                                <th class="py-3 px-5 whitespace-nowrap">Sent Date</th>
                                <th class="py-3 px-5 text-right whitespace-nowrap">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 font-medium text-gray-700">
                            <!-- Direct Message Row 1 -->
                            <tr class="hover:bg-gray-50/50">
                                <td class="py-3.5 px-5 whitespace-nowrap">
                                    <p class="font-bold text-brand-dark">John Doe</p>
                                    <p class="text-gray-400 text-[11px] font-display">2026-00001</p>
                                </td>
                                <td class="py-3.5 px-5">
                                    <p class="font-semibold text-brand-dark">Missing Form 137 Document Clearance</p>
                                </td>
                                <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                    <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-amber-50 text-amber-700 border border-amber-200">Clearance Notice</span>
                                </td>
                                <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Read</span>
                                </td>
                                <td class="py-3.5 px-5 whitespace-nowrap text-gray-500">Oct 03, 2026</td>
                                <td class="py-3.5 px-5 text-right space-x-1 whitespace-nowrap">
                                    <button type="button" onclick="viewDirectMessageModal('John Doe', '2026-00001', 'Missing Form 137 Document Clearance', 'Clearance Notice', 'Oct 03, 2026', 'Your Form 137 submission is still pending. Please submit an official copy to window 2.')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">View Message</button>
                                </td>
                            </tr>

                            <!-- Direct Message Row 2 -->
                            <tr class="hover:bg-gray-50/50">
                                <td class="py-3.5 px-5 whitespace-nowrap">
                                    <p class="font-bold text-brand-dark">Alex Mercer</p>
                                    <p class="text-gray-400 text-[11px] font-display">2026-00003</p>
                                </td>
                                <td class="py-3.5 px-5">
                                    <p class="font-semibold text-brand-dark">PSA Birth Certificate Re-upload Required</p>
                                </td>
                                <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                    <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-blue-50 text-blue-700 border border-blue-200">Document Request</span>
                                </td>
                                <td class="py-3.5 px-5 text-center whitespace-nowrap">
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Unread</span>
                                </td>
                                <td class="py-3.5 px-5 whitespace-nowrap text-gray-500">Sep 29, 2026</td>
                                <td class="py-3.5 px-5 text-right space-x-1 whitespace-nowrap">
                                    <button type="button" onclick="viewDirectMessageModal('Alex Mercer', '2026-00003', 'PSA Birth Certificate Re-upload Required', 'Document Request', 'Sep 29, 2026', 'The copy of your birth certificate was blurred. Kindly upload a clearer PDF file.')" class="px-2.5 py-1.5 rounded-md text-xs font-semibold bg-brand-primary text-white hover:bg-brand-primary/90">View Message</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>

    <!-- Modal 1: View Announcement Modal -->
    <div id="modal_view_announcement" class="fixed inset-0 z-50 hidden bg-gray-900/50 flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-lg overflow-hidden flex flex-col">
            <div class="p-5 border-b border-gray-200 bg-gray-50/50 flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <i data-lucide="megaphone" class="w-5 h-5 text-brand-primary"></i>
                    <h3 class="text-base font-bold text-brand-dark">Announcement Details</h3>
                </div>
                <button type="button" onclick="closeModal('modal_view_announcement')" class="text-gray-400 hover:text-gray-600"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="p-6 space-y-4 text-xs">
                <div>
                    <h4 id="view_announcement_title" class="text-base font-bold text-brand-dark"></h4>
                    <div class="flex items-center space-x-2 mt-1">
                        <span id="view_announcement_audience" class="px-2 py-0.5 rounded text-[10px] font-semibold bg-gray-100 text-gray-700"></span>
                        <span id="view_announcement_priority" class="px-2 py-0.5 rounded text-[10px] font-bold"></span>
                        <span id="view_announcement_date" class="text-gray-400 text-[11px]"></span>
                    </div>
                </div>
                <div class="bg-gray-50 border border-gray-100 rounded-md p-4 text-gray-700 leading-relaxed text-xs" id="view_announcement_body"></div>
            </div>
            <div class="p-4 border-t border-gray-100 bg-gray-50/50 flex justify-end">
                <button type="button" onclick="closeModal('modal_view_announcement')" class="px-4 py-2 font-semibold text-xs border border-gray-200 bg-white text-gray-700 rounded-md hover:bg-gray-50">Close</button>
            </div>
        </div>
    </div>

    <!-- Modal 2: View Direct Message Modal -->
    <div id="modal_view_message" class="fixed inset-0 z-50 hidden bg-gray-900/50 flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-lg overflow-hidden flex flex-col">
            <div class="p-5 border-b border-gray-200 bg-gray-50/50 flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <i data-lucide="mail" class="w-5 h-5 text-brand-secondary"></i>
                    <h3 class="text-base font-bold text-brand-dark">Direct Student Message</h3>
                </div>
                <button type="button" onclick="closeModal('modal_view_message')" class="text-gray-400 hover:text-gray-600"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="p-6 space-y-4 text-xs">
                <div class="p-3 bg-gray-50 border border-gray-200 rounded-md flex justify-between items-center">
                    <div>
                        <p id="view_msg_student_name" class="font-bold text-brand-dark"></p>
                        <p id="view_msg_student_id" class="text-gray-500 font-display text-[11px]"></p>
                    </div>
                    <span id="view_msg_category" class="px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-amber-50 text-amber-800 border border-amber-200"></span>
                </div>
                <div>
                    <p class="text-gray-400 text-[10px] uppercase font-bold">Subject</p>
                    <p id="view_msg_subject" class="font-bold text-sm text-brand-dark"></p>
                    <p id="view_msg_date" class="text-gray-400 text-[11px] mt-0.5"></p>
                </div>
                <div>
                    <p class="text-gray-400 text-[10px] uppercase font-bold mb-1">Message Content</p>
                    <div id="view_msg_body" class="bg-gray-50 border border-gray-100 rounded-md p-3.5 text-gray-700 text-xs leading-relaxed"></div>
                </div>
            </div>
            <div class="p-4 border-t border-gray-100 bg-gray-50/50 flex justify-end">
                <button type="button" onclick="closeModal('modal_view_message')" class="px-4 py-2 font-semibold text-xs border border-gray-200 bg-white text-gray-700 rounded-md hover:bg-gray-50">Close</button>
            </div>
        </div>
    </div>

    <!-- Modal 3: Confirm Delete Modal -->
    <div id="modal_confirm_delete" class="fixed inset-0 z-50 hidden bg-gray-900/50 flex items-center justify-center p-4">
        <div class="bg-white rounded-md border border-gray-200 shadow-xl w-full max-w-sm overflow-hidden flex flex-col p-5 space-y-4">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-red-100 text-red-600 rounded-full flex items-center justify-center flex-shrink-0">
                    <i data-lucide="trash-2" class="w-5 h-5"></i>
                </div>
                <div>
                    <h3 class="text-base font-bold text-brand-dark">Delete Entry</h3>
                    <p class="text-xs text-gray-500">Are you sure you want to remove this record?</p>
                </div>
            </div>
            <p id="delete_confirm_text" class="text-xs text-gray-600 bg-gray-50 p-3 rounded-md border border-gray-100"></p>
            <div class="flex items-center justify-end space-x-2 pt-2">
                <button type="button" onclick="closeModal('modal_confirm_delete')" class="px-3.5 py-1.5 font-semibold text-xs border border-gray-200 bg-white text-gray-700 rounded-md hover:bg-gray-50">Cancel</button>
                <button type="button" onclick="confirmDeleteAction()" class="px-3.5 py-1.5 font-semibold text-xs bg-red-600 text-white rounded-md hover:bg-red-700">Confirm Delete</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12 py-6 text-center text-xs text-gray-500">
        <p>Paxton University Student Services Information System (SSIS) &copy; 2026. All Rights Reserved.</p>
    </footer>

    <!-- JavaScript Handling -->
    <script src="../../js/helperFunction.js"></script>
    <script>
        let itemToDelete = null;

        $(document).ready(function() {
            lucide.createIcons();
        });


        // Form Submission Handlers
        function handlePostAnnouncement(e) {
            e.preventDefault();
            showToast("Announcement published successfully!", "success");
            e.target.reset();
        }

        function handleSendDirectMessage(e) {
            e.preventDefault();
            showToast("Direct message sent to student!", "success");
            e.target.reset();
        }

        // View Announcement Modal Trigger
        function viewAnnouncementModal(title, audience, priority, date, content) {
            $('#view_announcement_title').text(title);
            $('#view_announcement_audience').text(audience);

            let priorityClass = priority.includes('High') ? 'bg-red-100 text-red-800' : 'bg-gray-100 text-gray-700';
            $('#view_announcement_priority').attr('class', `px-2 py-0.5 rounded text-[10px] font-bold ${priorityClass}`).text(priority);

            $('#view_announcement_date').text(`Published on ${date}`);
            $('#view_announcement_body').text(content);
            $('#modal_view_announcement').removeClass('hidden');
        }

        // View Direct Message Modal Trigger
        function viewDirectMessageModal(studentName, studentId, subject, category, date, body) {
            $('#view_msg_student_name').text(studentName);
            $('#view_msg_student_id').text(`Student ID: ${studentId}`);
            $('#view_msg_subject').text(subject);
            $('#view_msg_category').text(category);
            $('#view_msg_date').text(`Sent on ${date}`);
            $('#view_msg_body').text(body);
            $('#modal_view_message').removeClass('hidden');
        }

        // Delete Confirmations
        function promptDeleteRecord(type, name) {
            itemToDelete = {
                type,
                name
            };
            $('#delete_confirm_text').html(`Are you sure you want to delete the ${type}: <strong>"${name}"</strong>?`);
            $('#modal_confirm_delete').removeClass('hidden');
        }

        function confirmDeleteAction() {
            if (itemToDelete) {
                showToast(`Deleted ${itemToDelete.type}: "${itemToDelete.name}"`, 'error');
                closeModal('modal_confirm_delete');
                itemToDelete = null;
            }
        }

        function closeModal(modalId) {
            $(`#${modalId}`).addClass('hidden');
        }

        // Mobile Menu Toggle
        $('#btn_mobile_menu').on('click', function() {
            $('#mobile_nav_menu').toggleClass('hidden');
            $('#icon_menu_open').toggleClass('hidden');
            $('#icon_menu_close').toggleClass('hidden');
        });
    </script>
</body>

</html>