
    <!-- Navigation -->
    <nav class="fixed w-full z-50 task-glass transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 task-logo rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold task-gradient-text">TaskFlow</span>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="task-nav-link">Features</a>
                    <a href="#pricing" class="task-nav-link">Pricing</a>
                    <a href="#about" class="task-nav-link">About</a>
                    <button class="task-btn-primary">
                        Get Started
                    </button>
                </div>
                
                <!-- Mobile menu button -->
                <button class="md:hidden" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div class="md:hidden bg-white border-t border-gray-200 hidden" id="mobile-menu">
            <div class="px-4 py-2 space-y-2">
                <a href="#features" class="block py-2 task-nav-link">Features</a>
                <a href="#pricing" class="block py-2 task-nav-link">Pricing</a>
                <a href="#about" class="block py-2 task-nav-link">About</a>
                <button class="w-full task-btn-primary mt-2">
                    Get Started
                </button>
            </div>
        </div>
    </nav>


    <script>
    function toggleMobileMenu() {
        const menu = document.getElementById("mobile-menu");
        menu.classList.toggle("hidden");
    }
</script>
