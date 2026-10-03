<!DOCTYPE html>
<html lang="en">

<?php include("php/includes/head.php"); ?>

<body class="bg-brand-accent flex items-center justify-center min-h-screen font-sans p-4">

    <div class="w-full max-w-md rounded-xl shadow-sm p-8 sm:p-10 text-center">

        <!-- Key Icon Badge -->
        <div class="inline-flex items-center justify-center w-12 h-12 mb-6 rounded-xl border border-gray-200 bg-white text-gray-700 shadow-xs">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
            </svg>
        </div>

        <!-- Heading & Subheading (Aligned with PDF Process) -->
        <h1 class="text-2xl font-bold text-gray-900 mb-2">Request Password Reset</h1>
        <p class="text-sm text-gray-500 mb-8 max-w-xs mx-auto leading-relaxed">
            Submit your Student No. or Username. The Registrar or Admin will issue a temporary password.
        </p>

        <!-- General Alert Container (Success/Global Error Messages) -->
        <div id="general_alert" class="hidden mb-6 p-3 rounded-lg text-sm transition-all duration-200"></div>

        <!-- Form -->
        <form id="forgot_password_form" action="forgot_password.php" method="POST" class="text-left space-y-5">

            <!-- CSRF Protection Token -->
            <input type="hidden" name="csrf_token" id="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?? ''; ?>">

            <!-- Account Identifier Field Container -->
            <div>
                <label for="username" class="block text-xs font-semibold text-gray-700 uppercase tracking-wide mb-2">
                    Student Number / Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="e.g. 2026-00001 or admin_user"
                    class="w-full px-4 py-3 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-secondary focus:border-brand-secondary outline-none transition-all placeholder-gray-400"
                    required>

                <!-- Error Message Container directly below input -->
                <p id="username_error" class="mt-2 text-xs text-red-600 font-medium">Error Message</p>
            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                id="btn_submit"
                class="w-full bg-brand-primary hover:bg-brand-secondary active:bg-blue-800 text-white font-medium py-3 px-4 rounded-lg text-sm transition-colors duration-150 shadow-xs focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                <span id="btn_text">Submit Reset Request</span>
            </button>

        </form>

        <!-- Back to Login Link -->
        <div class="mt-6">
            <a href="login.php" id="link_back_login" class="inline-flex items-center text-xs font-medium text-gray-600 hover:text-gray-900 transition-colors">
                <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to login
            </a>
        </div>

    </div>

    <script src="js/helperFunction.js"></script>
    <!-- Frontend Form Handling Script -->
    <script>
        $("#btn_submit").on("click", () => {
            showToast("success", "Success Toast!");
            showToast("warning", "Warning Toast!");
            showToast("error", "Error Toast!");
            showToast("info", "info Toast!");
        })
    </script>
</body>

</html>