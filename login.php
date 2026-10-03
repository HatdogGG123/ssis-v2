<!DOCTYPE html>
<html lang="en">

<?php include("php/includes/head.php"); ?>

<body class="font-sans antialiased text-brand-dark min-h-screen relative flex flex-col justify-between overflow-x-hidden bg-brand-dark">

    <!-- Background Image with Custom Colors -->
    <div class="absolute inset-0 z-0 flex justify-end pointer-events-none">
        <div class="relative w-full lg:w-2/3 h-full">
            <img
                src="https://images.pexels.com/photos/28412565/pexels-photo-28412565.jpeg"
                alt="Modern Architecture"
                class="w-full h-full object-cover object-left lg:object-right filter brightness-[0.6]" />
            <!-- Gradient Overlay transition into #202020 -->
            <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/60 to-transparent"></div>
        </div>
    </div>

    <!-- Top Logo Button -->
    <header class="relative z-10 px-8 py-8 md:px-12">
        <a href="index.php" class="w-10 h-10 rounded-md border border-brand-accent/30 backdrop-blur-md bg-brand-primary/40 flex items-center justify-center shadow-lg hover:border-brand-accent transition">
            <svg class="lucide lucide-arrow-left preview-icon size-5 text-white" xmlns="http://www.w3.org/2000/svg" width="0" height="0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="m12 19-7-7 7-7" />
                <path d="M19 12H5" />
            </svg>
        </a>
    </header>

    <!-- Login Card Container -->
    <main class="relative z-10 px-6 md:px-16 lg:px-24 py-8 flex-1 flex items-center">
        <div class="w-full max-w-sm">

            <!-- Card Container in Accent Color (#dad7cd) -->
            <div class="bg-brand-accent rounded-xl p-8 shadow-2xl border border-brand-accent/20">

                <!-- Header Text -->
                <div class="text-center space-y-1 mb-8">
                    <h1 class="text-2xl font-bold text-brand-dark tracking-tight">Portal Login</h1>
                    <p class="text-xs text-brand-primary font-medium">Please enter your details</p>
                </div>

                <!-- Alert Box Placeholder -->
                <div id="alert-box" class="mb-6 p-3 rounded-md bg-red-100 border border-red-300 text-red-700 text-xs flex items-center space-x-2">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0 1 18 0z" />
                    </svg>
                    <span>Invalid username or password.</span>
                </div>

                <!-- Login Form -->
                <form action="login.php" method="POST" class="space-y-5">

                    <!-- CSRF Token -->
                    <!-- <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?? ''; ?>" /> -->

                    <!-- Username Field -->
                    <div class="space-y-1.5">
                        <label for="username" class="block text-xs text-brand-primary font-semibold">
                            Username
                        </label>
                        <input
                            type="text"
                            id="username"
                            name="username"
                            required
                            placeholder="e.g. 2026-00001 or admin"
                            class="w-full px-4 py-3 rounded-md border border-brand-primary/20 bg-white/70 text-brand-dark text-xs placeholder-brand-primary/50 focus:outline-none focus:bg-white focus:ring-2 focus:ring-brand-primary transition" />
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-1.5">
                        <label for="password" class="block text-xs text-brand-primary font-semibold">
                            Password
                        </label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            placeholder="••••••••••••"
                            class="w-full px-4 py-3 rounded-md border border-brand-primary/20 bg-white/70 text-brand-dark text-xs placeholder-brand-primary/50 focus:outline-none focus:bg-white focus:ring-2 focus:ring-brand-primary transition" />
                    </div>

                    <!-- Forgot Password Link -->
                    <div class="text-right pt-1">
                        <a href="forgotPassword.php" class="text-xs font-semibold text-brand-primary hover:text-brand-dark hover:underline">
                            Forgot password?
                        </a>
                    </div>

                    <button
                        type="submit"
                        id="btn-submit"
                        class="w-full mt-2 bg-brand-primary hover:bg-brand-secondary text-brand-accent font-semibold py-3 px-6 rounded-md transition duration-200 shadow-md text-xs tracking-wide flex items-center justify-center space-x-2">
                        <span>Sign in</span>
                    </button>

                </form>

            </div>
        </div>
    </main>

    <footer class="relative z-10 py-4"></footer>

    <!-- jQuery Submission Script -->
    <script>
        $(document).ready(function() {
            $('form').on('submit', function() {
                const $submitBtn = $('#btn-submit');

                $submitBtn.prop('disabled', true);
                $submitBtn.addClass('opacity-80 cursor-not-allowed');
                $submitBtn.html(`
          <svg class="animate-spin -ml-1 mr-2 h-3.5 w-3.5 text-brand-accent inline-block" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
          <span>Please wait...</span>
        `);
            });
        });
    </script>

</body>

</html>