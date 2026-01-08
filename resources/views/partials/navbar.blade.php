<!-- Top Navigation Bar -->
<nav id="navbar" class="fixed top-4 left-4 right-4 z-50 navbar-glass transition-all duration-300">
    <div class="px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <svg class="w-8 h-8 text-purple-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <span class="text-xl font-bold text-gray-900 hidden sm:block">Системні продажі</span>
                <span class="text-xl font-bold text-gray-900 sm:hidden">СП</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center gap-2">
                <a href="{{ route('home') }}" class="nav-link px-4 py-2.5 rounded-full text-sm font-medium text-gray-700 hover:text-purple-600 hover:bg-white/50 transition-all duration-200 {{ request()->routeIs('home') ? 'active' : '' }}">Головна</a>
                <a href="{{ route('services.index') }}" class="nav-link px-4 py-2.5 rounded-full text-sm font-medium text-gray-700 hover:text-purple-600 hover:bg-white/50 transition-all duration-200 {{ request()->routeIs('services.*') ? 'active' : '' }}">Послуги</a>
                <a href="{{ route('blog.index') }}" class="nav-link px-4 py-2.5 rounded-full text-sm font-medium text-gray-700 hover:text-purple-600 hover:bg-white/50 transition-all duration-200 {{ request()->routeIs('blog.*') ? 'active' : '' }}">Блог</a>
                <a href="{{ route('contact.index') }}" class="nav-link px-4 py-2.5 rounded-full text-sm font-medium text-gray-700 hover:text-purple-600 hover:bg-white/50 transition-all duration-200 {{ request()->routeIs('contact.*') ? 'active' : '' }}">Контакти</a>
                <a href="{{ route('quiz.index') }}" class="nav-link px-4 py-2.5 rounded-full text-sm font-medium text-gray-700 hover:text-purple-600 hover:bg-white/50 transition-all duration-200 {{ request()->routeIs('quiz.*') ? 'active' : '' }}">Аудит</a>
            </div>

            <!-- CTA Button -->
            <div class="hidden lg:flex items-center gap-3">
                <a href="{{ route('contact.index') }}" class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-2.5 rounded-full text-sm font-semibold hover:from-purple-700 hover:to-blue-700 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Консультація
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-full text-gray-700 hover:bg-white/50 transition-colors">
                <svg id="mobile-menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="mobile-menu-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu" class="lg:hidden hidden border-t border-white/20 bg-white/10 backdrop-blur-md">
        <div class="px-4 py-4 space-y-1">
            <a href="{{ route('home') }}" class="mobile-nav-link block px-4 py-3 rounded-full text-gray-700 hover:bg-white/50 hover:text-purple-600 transition-colors font-medium">Головна</a>
            <a href="{{ route('services.index') }}" class="mobile-nav-link block px-4 py-3 rounded-full text-gray-700 hover:bg-white/50 hover:text-purple-600 transition-colors font-medium">Послуги</a>
            <a href="{{ route('blog.index') }}" class="mobile-nav-link block px-4 py-3 rounded-full text-gray-700 hover:bg-white/50 hover:text-purple-600 transition-colors font-medium">Блог</a>
            <a href="{{ route('contact.index') }}" class="mobile-nav-link block px-4 py-3 rounded-full text-gray-700 hover:bg-white/50 hover:text-purple-600 transition-colors font-medium">Контакти</a>
            <a href="{{ route('quiz.index') }}" class="mobile-nav-link block px-4 py-3 rounded-full text-gray-700 hover:bg-white/50 hover:text-purple-600 transition-colors font-medium">Аудит</a>
            <a href="{{ route('contact.index') }}" class="block mt-4 bg-gradient-to-r from-purple-600 to-blue-600 text-white px-4 py-3 rounded-full text-center font-semibold hover:from-purple-700 hover:to-blue-700 transition-all shadow-lg">
                Консультація
            </a>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('mobile-menu-icon');
        const closeIcon = document.getElementById('mobile-menu-close');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                if (menuIcon) menuIcon.classList.toggle('hidden');
                if (closeIcon) closeIcon.classList.toggle('hidden');
            });

            // Close mobile menu when clicking on a link
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    if (menuIcon) menuIcon.classList.remove('hidden');
                    if (closeIcon) closeIcon.classList.add('hidden');
                });
            });
        }
    });
</script>



