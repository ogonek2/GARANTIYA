<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Системні продажі - Від хаосу до передбачуваних результатів</title>
    <meta name="description" content="Виводимо продажі малого та середнього бізнесу на новий рівень. Аудит, побудова системи продажів, підбір та навчання менеджерів. Системні, передбачувані та масштабовані продажі.">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }
        
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out;
        }
        
        .animate-on-scroll {
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .animate-on-scroll.animated {
            opacity: 1;
        }
        
        .fade-in-up {
            transform: translateY(30px);
        }
        
        .fade-in-up.animated {
            transform: translateY(0);
        }
        
        .fade-in-left {
            transform: translateX(-30px);
        }
        
        .fade-in-left.animated {
            transform: translateX(0);
        }
        
        .fade-in-right {
            transform: translateX(30px);
        }
        
        .fade-in-right.animated {
            transform: translateX(0);
        }
        
        .scale-in {
            transform: scale(0.9);
        }
        
        .scale-in.animated {
            transform: scale(1);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradient 3s ease infinite;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-size: 200% 200%;
            animation: gradient 3s ease infinite;
        }
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .stage-item {
            opacity: 0;
            transform: translateX(-30px);
            transition: all 0.6s ease;
        }
        
        .stage-item.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        .pulse-animation {
            animation: pulse 2s ease-in-out infinite;
        }
        
        /* SVG Illustrations */
        .illustration {
            width: 100%;
            height: auto;
        }
        
        .illustration path,
        .illustration circle,
        .illustration rect {
            transition: all 0.3s ease;
        }
        
        /* Parallax effect */
        .parallax {
            transition: transform 0.1s ease-out;
        }
        
        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }
        
        /* Section transitions */
        section {
            position: relative;
            overflow: hidden;
        }
        
        /* Animated background elements */
        .bg-animated {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0.05;
            z-index: 0;
        }
        
        .bg-animated svg {
            width: 100%;
            height: 100%;
        }
        
        /* Loading animation */
        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }
            100% {
                background-position: 1000px 0;
            }
        }
        
        .shimmer {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 1000px 100%;
            animation: shimmer 2s infinite;
        }
    </style>
</head>
<body class="bg-white min-h-screen antialiased">
    <!-- Top Navigation Bar -->
    <nav id="navbar" class="fixed top-4 left-4 right-4 z-50 navbar-glass transition-all duration-300">
        <div class="px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- Logo -->
                <a href="#hero" class="flex items-center gap-2 group">
                    <svg class="w-8 h-8 text-purple-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span class="text-xl font-bold text-gray-900 hidden sm:block">Системні продажі</span>
                    <span class="text-xl font-bold text-gray-900 sm:hidden">СП</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center gap-2">
                    <a href="#hero" class="nav-link px-4 py-2.5 rounded-full text-sm font-medium text-gray-700 hover:text-purple-600 hover:bg-white/50 transition-all duration-200">Головна</a>
                    <a href="#about" class="nav-link px-4 py-2.5 rounded-full text-sm font-medium text-gray-700 hover:text-purple-600 hover:bg-white/50 transition-all duration-200">Про нас</a>
                    <a href="#services" class="nav-link px-4 py-2.5 rounded-full text-sm font-medium text-gray-700 hover:text-purple-600 hover:bg-white/50 transition-all duration-200">Послуги</a>
                    <a href="#cases" class="nav-link px-4 py-2.5 rounded-full text-sm font-medium text-gray-700 hover:text-purple-600 hover:bg-white/50 transition-all duration-200">Кейси</a>
                    <a href="#reviews" class="nav-link px-4 py-2.5 rounded-full text-sm font-medium text-gray-700 hover:text-purple-600 hover:bg-white/50 transition-all duration-200">Відгуки</a>
                    <a href="#contact" class="nav-link px-4 py-2.5 rounded-full text-sm font-medium text-gray-700 hover:text-purple-600 hover:bg-white/50 transition-all duration-200">Контакти</a>
                    <a href="#services" class="nav-link px-4 py-2.5 rounded-full text-sm font-medium text-gray-700 hover:text-purple-600 hover:bg-white/50 transition-all duration-200">Ціни</a>
                    <a href="#about" class="nav-link px-4 py-2.5 rounded-full text-sm font-medium text-gray-700 hover:text-purple-600 hover:bg-white/50 transition-all duration-200">Команда</a>
                    <a href="#cases" class="nav-link px-4 py-2.5 rounded-full text-sm font-medium text-gray-700 hover:text-purple-600 hover:bg-white/50 transition-all duration-200">Блог</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden lg:flex items-center gap-3">
                    <a href="#contact" class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-2.5 rounded-full text-sm font-semibold hover:from-purple-700 hover:to-blue-700 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
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
                <a href="#hero" class="mobile-nav-link block px-4 py-3 rounded-full text-gray-700 hover:bg-white/50 hover:text-purple-600 transition-colors font-medium">Головна</a>
                <a href="#about" class="mobile-nav-link block px-4 py-3 rounded-full text-gray-700 hover:bg-white/50 hover:text-purple-600 transition-colors font-medium">Про нас</a>
                <a href="#services" class="mobile-nav-link block px-4 py-3 rounded-full text-gray-700 hover:bg-white/50 hover:text-purple-600 transition-colors font-medium">Послуги</a>
                <a href="#cases" class="mobile-nav-link block px-4 py-3 rounded-full text-gray-700 hover:bg-white/50 hover:text-purple-600 transition-colors font-medium">Кейси</a>
                <a href="#reviews" class="mobile-nav-link block px-4 py-3 rounded-full text-gray-700 hover:bg-white/50 hover:text-purple-600 transition-colors font-medium">Відгуки</a>
                <a href="#contact" class="mobile-nav-link block px-4 py-3 rounded-full text-gray-700 hover:bg-white/50 hover:text-purple-600 transition-colors font-medium">Контакти</a>
                <a href="#services" class="mobile-nav-link block px-4 py-3 rounded-full text-gray-700 hover:bg-white/50 hover:text-purple-600 transition-colors font-medium">Ціни</a>
                <a href="#about" class="mobile-nav-link block px-4 py-3 rounded-full text-gray-700 hover:bg-white/50 hover:text-purple-600 transition-colors font-medium">Команда</a>
                <a href="#cases" class="mobile-nav-link block px-4 py-3 rounded-full text-gray-700 hover:bg-white/50 hover:text-purple-600 transition-colors font-medium">Блог</a>
                <a href="#contact" class="block mt-4 bg-gradient-to-r from-purple-600 to-blue-600 text-white px-4 py-3 rounded-full text-center font-semibold hover:from-purple-700 hover:to-blue-700 transition-all shadow-lg">
                    Консультація
                </a>
            </div>
        </div>
    </nav>

    <!-- Mobile Top Navigation -->
    {{-- <nav id="mobile-nav" class="lg:hidden fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-lg border-b border-gray-200 shadow-lg">
        <div class="flex justify-between items-center h-16 px-4">
            <a href="#hero" class="text-lg font-bold text-gray-900 flex items-center gap-2">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <span>Системні продажі</span>
            </a>
            <button id="mobile-menu-btn" class="p-2 rounded-lg text-gray-700 hover:bg-gray-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav> --}}

    <!-- Main Content Wrapper -->
    <main class="pt-24 lg:pt-28">
    <!-- Hero Section -->
    <section id="hero" class="relative min-h-screen flex items-center py-20 overflow-hidden bg-gradient-to-br from-white via-purple-50 to-blue-50 parallax-section">
        <!-- Parallax Background Elements -->

        <div class="mx-auto w-full relative z-10 parallax-element px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="parallax-content parallax-element">
                    <div class="mb-8">
                        <span class="inline-block px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold mb-6">Системні продажі</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight text-gray-900 tracking-tight">
                        Найпростіший спосіб<br><span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">побудувати відділ продажів</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                        Створюємо систему продажів, яка працює незалежно від настрою менеджерів. 
                        Від аудиту до запуску — все під ключ.
                    </p>
                    <a href="#contact" class="inline-block bg-purple-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-purple-700 transition-colors mb-8 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Отримати консультацію
                    </a>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm">Працює з будь-яким бізнесом</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm">Безкоштовна консультація</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-6 pt-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900 mb-1">4.9</div>
                            <div class="flex items-center justify-center mb-1">
                                <span class="text-yellow-400 text-sm">★★★★★</span>
                            </div>
                            <div class="text-xs text-gray-500">Відгуки клієнтів</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900 mb-1">150+</div>
                            <div class="text-xs text-gray-500">Успішних проектів</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900 mb-1">98%</div>
                            <div class="text-xs text-gray-500">Задоволених клієнтів</div>
                        </div>
                    </div>
                </div>
                
                <!-- Modern Minimalist Infographic -->
                <div class="hidden lg:block parallax-infographic">
                    <div class="relative w-full h-[800px] flex items-center justify-center">
                        <!-- Animated Network Grid -->
                        <svg viewBox="0 0 600 600" class="w-full h-full scale-110" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#667eea;stop-opacity:0.3" />
                                    <stop offset="100%" style="stop-color:#764ba2;stop-opacity:0.3" />
                                </linearGradient>
                                <filter id="softGlow">
                                    <feGaussianBlur stdDeviation="2" result="coloredBlur"/>
                                    <feMerge>
                                        <feMergeNode in="coloredBlur"/>
                                        <feMergeNode in="SourceGraphic"/>
                                    </feMerge>
                                </filter>
                            </defs>
                            
                            <!-- Grid Background -->
                            <g opacity="0.1">
                                <defs>
                                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#667eea" stroke-width="0.5"/>
                                    </pattern>
                                </defs>
                                <rect width="100%" height="100%" fill="url(#grid)"/>
                            </g>
                            
                            <!-- Animated Connection Lines -->
                            <g class="network-lines">
                                <!-- Main flow line -->
                                <path d="M 100 300 Q 200 200 300 300 T 500 300" 
                                      fill="none" 
                                      stroke="url(#lineGradient)" 
                                      stroke-width="2" 
                                      opacity="0.4"
                                      stroke-dasharray="200"
                                      class="flow-line">
                                    <animate attributeName="stroke-dashoffset" 
                                             values="400;0" 
                                             dur="4s" 
                                             repeatCount="indefinite"/>
                                </path>
                                
                                <!-- Branch lines -->
                                <line x1="200" y1="200" x2="250" y2="150" 
                                      stroke="#667eea" 
                                      stroke-width="1.5" 
                                      opacity="0.3"
                                      stroke-dasharray="5,5">
                                    <animate attributeName="opacity" values="0.3;0.6;0.3" dur="3s" repeatCount="indefinite"/>
                                </line>
                                <line x1="300" y1="300" x2="350" y2="250" 
                                      stroke="#764ba2" 
                                      stroke-width="1.5" 
                                      opacity="0.3"
                                      stroke-dasharray="5,5">
                                    <animate attributeName="opacity" values="0.3;0.6;0.3" dur="3.5s" repeatCount="indefinite"/>
                                </line>
                                <line x1="400" y1="300" x2="450" y2="400" 
                                      stroke="#667eea" 
                                      stroke-width="1.5" 
                                      opacity="0.3"
                                      stroke-dasharray="5,5">
                                    <animate attributeName="opacity" values="0.3;0.6;0.3" dur="4s" repeatCount="indefinite"/>
                                </line>
                            </g>
                            
                            <!-- Floating Nodes -->
                            <g class="nodes">
                                <!-- Node 1 -->
                                <g class="node" transform="translate(100, 300)">
                                    <circle cx="0" cy="0" r="8" fill="#667eea" opacity="0.8" filter="url(#softGlow)">
                                        <animate attributeName="r" values="8;12;8" dur="2s" repeatCount="indefinite"/>
                                        <animate attributeName="opacity" values="0.8;1;0.8" dur="2s" repeatCount="indefinite"/>
                                    </circle>
                                    <circle cx="0" cy="0" r="20" fill="none" stroke="#667eea" stroke-width="1" opacity="0.2">
                                        <animate attributeName="r" values="20;30;20" dur="3s" repeatCount="indefinite"/>
                                        <animate attributeName="opacity" values="0.2;0;0.2" dur="3s" repeatCount="indefinite"/>
                                    </circle>
                                </g>
                                
                                <!-- Node 2 -->
                                <g class="node" transform="translate(200, 200)">
                                    <circle cx="0" cy="0" r="10" fill="#764ba2" opacity="0.8" filter="url(#softGlow)">
                                        <animate attributeName="r" values="10;14;10" dur="2.5s" repeatCount="indefinite"/>
                                        <animate attributeName="opacity" values="0.8;1;0.8" dur="2.5s" repeatCount="indefinite"/>
                                    </circle>
                                    <circle cx="0" cy="0" r="25" fill="none" stroke="#764ba2" stroke-width="1" opacity="0.2">
                                        <animate attributeName="r" values="25;35;25" dur="3.5s" repeatCount="indefinite"/>
                                        <animate attributeName="opacity" values="0.2;0;0.2" dur="3.5s" repeatCount="indefinite"/>
                                    </circle>
                                </g>
                                
                                <!-- Node 3 (Main) -->
                                <g class="node" transform="translate(300, 300)">
                                    <circle cx="0" cy="0" r="12" fill="#667eea" opacity="0.9" filter="url(#softGlow)">
                                        <animate attributeName="r" values="12;16;12" dur="2s" repeatCount="indefinite"/>
                                    </circle>
                                    <circle cx="0" cy="0" r="30" fill="none" stroke="#667eea" stroke-width="2" opacity="0.3">
                                        <animate attributeName="r" values="30;40;30" dur="2.5s" repeatCount="indefinite"/>
                                        <animate attributeName="opacity" values="0.3;0;0.3" dur="2.5s" repeatCount="indefinite"/>
                                    </circle>
                                </g>
                                
                                <!-- Node 4 -->
                                <g class="node" transform="translate(400, 300)">
                                    <circle cx="0" cy="0" r="10" fill="#764ba2" opacity="0.8" filter="url(#softGlow)">
                                        <animate attributeName="r" values="10;14;10" dur="2.3s" repeatCount="indefinite"/>
                                        <animate attributeName="opacity" values="0.8;1;0.8" dur="2.3s" repeatCount="indefinite"/>
                                    </circle>
                                    <circle cx="0" cy="0" r="25" fill="none" stroke="#764ba2" stroke-width="1" opacity="0.2">
                                        <animate attributeName="r" values="25;35;25" dur="3.3s" repeatCount="indefinite"/>
                                        <animate attributeName="opacity" values="0.2;0;0.2" dur="3.3s" repeatCount="indefinite"/>
                                    </circle>
                                </g>
                                
                                <!-- Node 5 -->
                                <g class="node" transform="translate(500, 300)">
                                    <circle cx="0" cy="0" r="8" fill="#667eea" opacity="0.8" filter="url(#softGlow)">
                                        <animate attributeName="r" values="8;12;8" dur="2.2s" repeatCount="indefinite"/>
                                        <animate attributeName="opacity" values="0.8;1;0.8" dur="2.2s" repeatCount="indefinite"/>
                                    </circle>
                                    <circle cx="0" cy="0" r="20" fill="none" stroke="#667eea" stroke-width="1" opacity="0.2">
                                        <animate attributeName="r" values="20;30;20" dur="3.2s" repeatCount="indefinite"/>
                                        <animate attributeName="opacity" values="0.2;0;0.2" dur="3.2s" repeatCount="indefinite"/>
                                    </circle>
                                </g>
                                
                                <!-- Side nodes -->
                                <g class="node" transform="translate(250, 150)">
                                    <circle cx="0" cy="0" r="6" fill="#667eea" opacity="0.6">
                                        <animate attributeName="opacity" values="0.6;1;0.6" dur="2s" repeatCount="indefinite"/>
                                    </circle>
                                </g>
                                
                                <g class="node" transform="translate(350, 250)">
                                    <circle cx="0" cy="0" r="6" fill="#764ba2" opacity="0.6">
                                        <animate attributeName="opacity" values="0.6;1;0.6" dur="2.5s" repeatCount="indefinite"/>
                                    </circle>
                                </g>
                                
                                <g class="node" transform="translate(450, 400)">
                                    <circle cx="0" cy="0" r="6" fill="#667eea" opacity="0.6">
                                        <animate attributeName="opacity" values="0.6;1;0.6" dur="2.3s" repeatCount="indefinite"/>
                                    </circle>
                                </g>
                            </g>
                            
                            <!-- Animated Data Flow Particles -->
                            <g class="particles">
                                <circle cx="100" cy="300" r="2" fill="#667eea" opacity="0.8">
                                    <animateMotion dur="3s" repeatCount="indefinite">
                                        <mpath href="#flowPath"/>
                                    </animateMotion>
                                    <animate attributeName="opacity" values="0;1;1;0" dur="3s" repeatCount="indefinite"/>
                                </circle>
                                <circle cx="100" cy="300" r="2" fill="#764ba2" opacity="0.8">
                                    <animateMotion dur="3.5s" repeatCount="indefinite" begin="0.5s">
                                        <mpath href="#flowPath"/>
                                    </animateMotion>
                                    <animate attributeName="opacity" values="0;1;1;0" dur="3.5s" repeatCount="indefinite" begin="0.5s"/>
                                </circle>
                                <circle cx="100" cy="300" r="2" fill="#667eea" opacity="0.8">
                                    <animateMotion dur="4s" repeatCount="indefinite" begin="1s">
                                        <mpath href="#flowPath"/>
                                    </animateMotion>
                                    <animate attributeName="opacity" values="0;1;1;0" dur="4s" repeatCount="indefinite" begin="1s"/>
                                </circle>
                            </g>
                            
                            <!-- Hidden path for particles -->
                            <path id="flowPath" 
                                  d="M 100 300 Q 200 200 300 300 T 500 300" 
                                  fill="none" 
                                  stroke="transparent" 
                                  stroke-width="1"/>
                            
                            <!-- Minimal Metrics Display -->
                            <g class="metrics" transform="translate(300, 500)">
                                <text x="0" y="0" text-anchor="middle" fill="#667eea" font-size="32" font-weight="700" opacity="0.9">+300%</text>
                                <text x="0" y="20" text-anchor="middle" fill="#666" font-size="12" font-weight="400">зростання продажів</text>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 parallax-slow">
            <div class="flex flex-col items-center">
                <span class="text-sm text-gray-500 mb-2">Прокрутіть вниз</span>
                <svg class="w-6 h-6 text-gray-400 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </section>

    <!-- Why Sales Don't Work -->
    <section id="about" class="min-h-screen flex items-center py-20 bg-white relative parallax-section">
        <div class="bg-animated parallax-element absolute inset-0">
            <svg viewBox="0 0 1200 600" xmlns="http://www.w3.org/2000/svg">
                <circle cx="100" cy="100" r="3" fill="#667eea" opacity="0.3">
                    <animate attributeName="cy" values="100;150;100" dur="4s" repeatCount="indefinite"/>
                </circle>
                <circle cx="300" cy="200" r="2" fill="#764ba2" opacity="0.3">
                    <animate attributeName="cy" values="200;250;200" dur="5s" repeatCount="indefinite"/>
                </circle>
                <circle cx="500" cy="150" r="2.5" fill="#667eea" opacity="0.3">
                    <animate attributeName="cy" values="150;200;150" dur="6s" repeatCount="indefinite"/>
                </circle>
            </svg>
        </div>
        <div class="mx-auto w-full relative z-10 parallax-element px-6 lg:px-8">
            <div class="mb-12">
                <span class="inline-block px-4 py-2 bg-red-50 text-red-700 rounded-full text-xs font-semibold mb-6">Проблема</span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 text-gray-900 tracking-tight animate-on-scroll fade-in-up">
                    Чому продажі<br><span class="bg-gradient-to-r from-red-500 to-orange-500 bg-clip-text text-transparent">не працюють?</span>
                </h2>
                <p class="text-lg md:text-xl text-gray-600 leading-relaxed animate-on-scroll fade-in-up">
                    Сьогодні в більшості українських компаній продажі працюють за застарілою моделлю
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <div class="bg-white rounded-2xl p-10 border-2 border-gray-100 shadow-xl card-hover animate-on-scroll fade-in-left transform hover:scale-105 transition-all">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center mb-6 pulse-animation shadow-lg">
                        <span class="text-4xl">👤</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Менеджер обслуговує лише готових</h3>
                    <p class="text-base text-gray-600 leading-relaxed">Менеджер обслуговує тільки тих, хто сам прийшов і вже готовий купити. Немає роботи зі створенням інтересу та попиту.</p>
                </div>
                <div class="bg-white rounded-2xl p-10 border-2 border-gray-100 shadow-xl card-hover animate-on-scroll fade-in-up transform hover:scale-105 transition-all" style="transition-delay: 0.1s;">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-yellow-100 to-yellow-200 flex items-center justify-center mb-6 pulse-animation shadow-lg" style="animation-delay: 0.2s;">
                        <span class="text-4xl">📢</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900">Звинувачення реклами</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Якщо продажів немає — звинувачують рекламу або ринок. Але проблема не в маркетингу, а в системі продажів.</p>
                </div>
                <div class="bg-white rounded-2xl p-10 border-2 border-gray-100 shadow-xl card-hover animate-on-scroll fade-in-right transform hover:scale-105 transition-all" style="transition-delay: 0.2s;">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-100 to-orange-200 flex items-center justify-center mb-6 pulse-animation shadow-lg" style="animation-delay: 0.4s;">
                        <span class="text-4xl">💥</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900">Відсутність системи</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">Відсутність системи веде до хаосу, низької конверсії та закриття компаній, хоча продукт і маркетинг часто ні до чого.</p>
                </div>
            </div>
            <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-3xl p-8 border-2 border-blue-200 shadow-xl">
                <p class="text-lg md:text-xl text-gray-800 leading-relaxed">
                    <strong class="text-gray-900 font-extrabold">Гіганти давно зрозуміли:</strong> потрібно створити інтерес → попит → сервіс → довести до угоди.<br>
                    <span class="text-base text-gray-600 mt-3 block">Просто консультувати та виставляти рахунок — вже не працює.</span>
                </p>
            </div>
        </div>
    </section>

    <!-- Our Approach -->
    <section class="py-20 bg-blue-600 text-white relative overflow-hidden">
        <!-- Animated background illustration -->
        <div class="absolute inset-0 opacity-10">
            <svg viewBox="0 0 1200 600" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                <!-- Animated grid pattern -->
                <defs>
                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1" opacity="0.3"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)">
                    <animate attributeName="opacity" values="0.1;0.2;0.1" dur="4s" repeatCount="indefinite"/>
                </rect>
                <!-- Floating shapes -->
                <circle cx="200" cy="150" r="60" fill="white" opacity="0.1">
                    <animate attributeName="cy" values="150;200;150" dur="6s" repeatCount="indefinite"/>
                    <animate attributeName="opacity" values="0.1;0.2;0.1" dur="6s" repeatCount="indefinite"/>
                </circle>
                <circle cx="800" cy="400" r="80" fill="white" opacity="0.1">
                    <animate attributeName="cy" values="400;350;400" dur="8s" repeatCount="indefinite"/>
                    <animate attributeName="opacity" values="0.1;0.15;0.1" dur="8s" repeatCount="indefinite"/>
                </circle>
                <circle cx="1000" cy="100" r="50" fill="white" opacity="0.1">
                    <animate attributeName="cx" values="1000;1050;1000" dur="5s" repeatCount="indefinite"/>
                </circle>
            </svg>
        </div>
        <div class="mx-auto w-full relative z-10 px-6 lg:px-8">
            <div class="mb-12">
                <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm text-white rounded-full text-xs font-semibold mb-6">Підхід</span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 text-white tracking-tight animate-on-scroll fade-in-up">
                    Наш<br><span class="bg-gradient-to-r from-white to-blue-100 bg-clip-text text-transparent">підхід</span>
                </h2>
                <p class="text-lg md:text-xl mb-12 text-blue-100 leading-relaxed animate-on-scroll fade-in-up">
                    Ми створюємо в компаніях систему продажів, яка працює <strong class="text-white font-extrabold">незалежно від настрою менеджерів</strong>, кон'юнктури та «пощастить-не пощастить».
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white/20 backdrop-blur-md rounded-2xl p-10 text-center border-2 border-white/30 animate-on-scroll scale-in card-hover transform hover:scale-105 shadow-2xl">
                    <svg class="w-24 h-24 mx-auto mb-6 float-animation text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <h3 class="text-xl font-bold mb-3 text-white">Системність</h3>
                    <p class="text-blue-100 text-base">Чіткі процеси замість хаосу</p>
                </div>
                <div class="bg-white/20 backdrop-blur-md rounded-2xl p-10 text-center border-2 border-white/30 animate-on-scroll scale-in card-hover transform hover:scale-105 shadow-2xl" style="transition-delay: 0.1s;">
                    <svg class="w-24 h-24 mx-auto mb-6 float-animation text-white" style="animation-delay: 0.2s;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                    <h3 class="text-2xl font-bold mb-4 text-white">Передбачуваність</h3>
                    <p class="text-blue-100 text-lg">Результати незалежно від обставин</p>
                </div>
                <div class="bg-white/20 backdrop-blur-md rounded-2xl p-10 text-center border-2 border-white/30 animate-on-scroll scale-in card-hover transform hover:scale-105 shadow-2xl" style="transition-delay: 0.2s;">
                    <svg class="w-24 h-24 mx-auto mb-6 float-animation text-white" style="animation-delay: 0.4s;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <h3 class="text-2xl font-bold mb-4 text-white">Масштабованість</h3>
                    <p class="text-blue-100 text-lg">Зростання без втрати якості</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Decision Funnel -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Background animated illustration -->
        <div class="absolute inset-0 opacity-5">
            <svg viewBox="0 0 1200 800" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                <!-- Animated connecting lines -->
                <path d="M100 400 Q300 200 500 400 T900 400" fill="none" stroke="#667eea" stroke-width="2" stroke-dasharray="10,5">
                    <animate attributeName="stroke-dashoffset" values="0;-30" dur="2s" repeatCount="indefinite"/>
                </path>
                <!-- Floating dots -->
                <circle cx="200" cy="300" r="4" fill="#667eea">
                    <animate attributeName="cy" values="300;250;300" dur="4s" repeatCount="indefinite"/>
                </circle>
                <circle cx="600" cy="400" r="4" fill="#764ba2">
                    <animate attributeName="cy" values="400;450;400" dur="5s" repeatCount="indefinite"/>
                </circle>
                <circle cx="1000" cy="350" r="4" fill="#667eea">
                    <animate attributeName="cx" values="1000;1050;1000" dur="6s" repeatCount="indefinite"/>
                </circle>
            </svg>
        </div>
        <div class="mx-auto w-full relative z-10 px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900 animate-on-scroll fade-in-up">
                Як ми допомагаємо прийняти рішення
            </h2>
            <p class="text-gray-600 mb-12 text-lg animate-on-scroll fade-in-up">
                Показуємо реальну картину: що відбувається, скільки ви втрачаєте, як виправити та скільки заробите
            </p>
            
            <!-- Funnel Steps - Simple Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <!-- Step 1: Problem -->
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-200 card-hover animate-on-scroll scale-in relative overflow-hidden">
                    <!-- Animated illustration -->
                    <svg class="absolute top-0 right-0 w-32 h-32 opacity-5" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="40" fill="none" stroke="#ef4444" stroke-width="2" stroke-dasharray="5,5">
                            <animateTransform attributeName="transform" type="rotate" values="0 50 50;360 50 50" dur="10s" repeatCount="indefinite"/>
                        </circle>
                        <path d="M30 50 L45 65 L70 35" stroke="#ef4444" stroke-width="2" fill="none" stroke-linecap="round">
                            <animate attributeName="stroke-dasharray" values="0,50;25,25;50,0" dur="2s" repeatCount="indefinite"/>
                        </path>
                    </svg>
                    <div class="relative z-10 w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center mb-4 float-animation">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="relative z-10 text-lg font-bold mb-3 text-gray-900">Показуємо проблему</h3>
                    <p class="relative z-10 text-gray-600 text-sm leading-relaxed mb-4">
                        Проводимо аудит та виявляємо реальні проблеми у вашому відділі продажів.
                    </p>
                    <div class="relative z-10 text-xs text-gray-500 italic">
                        "Я думав, що проблема в рекламі..."
                    </div>
                </div>

                <!-- Step 2: Losses -->
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-200 card-hover animate-on-scroll scale-in relative overflow-hidden" style="transition-delay: 0.1s;">
                    <!-- Animated illustration -->
                    <svg class="absolute top-0 right-0 w-32 h-32 opacity-5" viewBox="0 0 100 100">
                        <rect x="20" y="20" width="60" height="60" fill="none" stroke="#f97316" stroke-width="2">
                            <animate attributeName="width" values="60;70;60" dur="2.5s" repeatCount="indefinite"/>
                            <animate attributeName="height" values="60;70;60" dur="2.5s" repeatCount="indefinite"/>
                        </rect>
                        <circle cx="50" cy="50" r="15" fill="#f97316" opacity="0.3">
                            <animate attributeName="r" values="15;20;15" dur="2s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                    <div class="relative z-10 w-12 h-12 rounded-lg bg-orange-100 flex items-center justify-center mb-4 float-animation" style="animation-delay: 0.2s;">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="relative z-10 text-lg font-bold mb-3 text-gray-900">Скільки втрачаєте</h3>
                    <div class="relative z-10 space-y-2 mb-4">
                        <div class="text-2xl font-bold text-red-600 pulse-animation">₴50,000</div>
                        <div class="text-xs text-gray-500">втрати щодня</div>
                    </div>
                    <p class="relative z-10 text-gray-600 text-sm leading-relaxed">
                        Виправлення коштує не $200, а мінімум 3-4 оклади РОПа. Але це інвестиція.
                    </p>
                </div>

                <!-- Step 3: Solution -->
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-200 card-hover animate-on-scroll scale-in relative overflow-hidden" style="transition-delay: 0.2s;">
                    <!-- Animated illustration -->
                    <svg class="absolute top-0 right-0 w-32 h-32 opacity-5" viewBox="0 0 100 100">
                        <path d="M50 10 L90 90 L10 90 Z" fill="none" stroke="#3b82f6" stroke-width="2">
                            <animateTransform attributeName="transform" type="rotate" values="0 50 50;360 50 50" dur="8s" repeatCount="indefinite"/>
                        </path>
                        <circle cx="50" cy="50" r="20" fill="#3b82f6" opacity="0.2">
                            <animate attributeName="r" values="20;25;20" dur="3s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                    <div class="relative z-10 w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center mb-4 float-animation" style="animation-delay: 0.4s;">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="relative z-10 text-lg font-bold mb-3 text-gray-900">Як виправити</h3>
                    <ul class="relative z-10 space-y-2 text-sm text-gray-600">
                        <li class="flex items-center animate-on-scroll fade-in-left">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Аудит та аналіз
                        </li>
                        <li class="flex items-center animate-on-scroll fade-in-left" style="transition-delay: 0.1s;">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Побудова системи
                        </li>
                        <li class="flex items-center animate-on-scroll fade-in-left" style="transition-delay: 0.2s;">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Запуск та супровід
                        </li>
                    </ul>
                </div>

                <!-- Step 4: Results -->
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-200 card-hover animate-on-scroll scale-in relative overflow-hidden" style="transition-delay: 0.3s;">
                    <!-- Animated illustration -->
                    <svg class="absolute top-0 right-0 w-32 h-32 opacity-5" viewBox="0 0 100 100">
                        <path d="M50 10 Q90 50 50 90 Q10 50 50 10" fill="none" stroke="#22c55e" stroke-width="2">
                            <animate attributeName="d" values="M50 10 Q90 50 50 90 Q10 50 50 10;M50 20 Q80 50 50 80 Q20 50 50 20;M50 10 Q90 50 50 90 Q10 50 50 10" dur="3s" repeatCount="indefinite"/>
                        </path>
                        <circle cx="50" cy="50" r="10" fill="#22c55e" opacity="0.3">
                            <animate attributeName="r" values="10;15;10" dur="2s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                    <div class="relative z-10 w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center mb-4 float-animation" style="animation-delay: 0.6s;">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="relative z-10 text-lg font-bold mb-3 text-gray-900">Скільки заробите</h3>
                    <div class="relative z-10 space-y-2 mb-4">
                        <div class="text-2xl font-bold text-green-600 pulse-animation">+250%</div>
                        <div class="text-xs text-gray-500">зростання продажів</div>
                    </div>
                    <p class="relative z-10 text-gray-600 text-sm leading-relaxed">
                        Система працює незалежно від настрою менеджерів. Передбачуваний дохід замість хаосу.
                    </p>
                </div>
            </div>

            <!-- CTA after funnel -->
            <div class="bg-gray-50 rounded-xl p-8 border border-gray-200 animate-on-scroll fade-in-up">
                <p class="text-lg text-gray-700 mb-4">
                    Готові побачити, скільки ви втрачаєте та як це виправити?
                </p>
                <a href="#contact" class="inline-block bg-purple-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-purple-700 transition-all transform hover:scale-105 shadow-lg hover:shadow-xl">
                    Отримати безкоштовний аудит
                </a>
            </div>
        </div>
    </section>

    <!-- How Our Sales System Works -->
    <section class="py-20 bg-gray-50 relative">
        <div class="mx-auto w-full relative z-10 px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-gray-900 animate-on-scroll fade-in-up">
                Як працює наша система продажів
            </h2>
            <div class="space-y-6">
                <div class="stage-item flex flex-col md:flex-row items-center gap-8 bg-white rounded-xl p-8 border border-gray-200 card-hover relative overflow-hidden">
                    <!-- Animated background illustration -->
                    <svg class="absolute top-0 right-0 w-64 h-64 opacity-5" viewBox="0 0 200 200">
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#667eea" stroke-width="2" stroke-dasharray="5,5">
                            <animate attributeName="r" values="80;90;80" dur="4s" repeatCount="indefinite"/>
                            <animateTransform attributeName="transform" type="rotate" values="0 100 100;360 100 100" dur="20s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="100" cy="100" r="50" fill="#667eea" opacity="0.2">
                            <animate attributeName="opacity" values="0.2;0.4;0.2" dur="3s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                    <div class="relative z-10 text-6xl font-bold gradient-text w-20 h-20 flex items-center justify-center bg-gray-50 rounded-xl float-animation">1</div>
                    <div class="flex-1 relative z-10">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Аудит відділу продажів</h3>
                        <p class="text-gray-600 leading-relaxed">Знаходимо вузькі місця, помилки в процесах, воронці та роботі менеджерів. Виявляємо, що саме гальмує зростання продажів.</p>
                    </div>
                </div>
                <div class="stage-item flex flex-col md:flex-row items-center gap-8 bg-white rounded-xl p-8 border border-gray-200 card-hover relative overflow-hidden">
                    <svg class="absolute top-0 right-0 w-64 h-64 opacity-5" viewBox="0 0 200 200">
                        <rect x="50" y="50" width="100" height="100" fill="none" stroke="#764ba2" stroke-width="2" stroke-dasharray="8,4">
                            <animateTransform attributeName="transform" type="rotate" values="0 100 100;-360 100 100" dur="15s" repeatCount="indefinite"/>
                        </rect>
                        <circle cx="100" cy="100" r="30" fill="#764ba2" opacity="0.2">
                            <animate attributeName="r" values="30;40;30" dur="3s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                    <div class="relative z-10 text-6xl font-bold gradient-text w-20 h-20 flex items-center justify-center bg-gray-50 rounded-xl float-animation" style="animation-delay: 0.2s;">2</div>
                    <div class="flex-1 relative z-10">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Побудова системи продажів та регламентів</h3>
                        <p class="text-gray-600 leading-relaxed">Скрипти, процеси, CRM-логіка, KPI — повний порядок у продажах. Перетворюємо вхідні та вихідні контакти на передбачуваний дохід.</p>
                    </div>
                </div>
                <div class="stage-item flex flex-col md:flex-row items-center gap-8 bg-white rounded-xl p-8 border border-gray-200 card-hover relative overflow-hidden">
                    <svg class="absolute top-0 right-0 w-64 h-64 opacity-5" viewBox="0 0 200 200">
                        <polygon points="100,20 180,180 20,180" fill="none" stroke="#ec4899" stroke-width="2">
                            <animateTransform attributeName="transform" type="rotate" values="0 100 100;360 100 100" dur="12s" repeatCount="indefinite"/>
                        </polygon>
                        <circle cx="100" cy="100" r="40" fill="#ec4899" opacity="0.15">
                            <animate attributeName="opacity" values="0.15;0.3;0.15" dur="4s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                    <div class="relative z-10 text-6xl font-bold gradient-text w-20 h-20 flex items-center justify-center bg-gray-50 rounded-xl float-animation" style="animation-delay: 0.4s;">3</div>
                    <div class="flex-1 relative z-10">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Відділ продажів під ключ</h3>
                        <p class="text-gray-600 leading-relaxed">З нуля створюємо систему, процеси, інструменти, звітність та результат. Від ідеї до працюючого відділу.</p>
                    </div>
                </div>
                <div class="stage-item flex flex-col md:flex-row items-center gap-8 bg-white rounded-xl p-8 border border-gray-200 card-hover relative overflow-hidden">
                    <svg class="absolute top-0 right-0 w-64 h-64 opacity-5" viewBox="0 0 200 200">
                        <path d="M100 20 Q150 50 180 100 Q150 150 100 180 Q50 150 20 100 Q50 50 100 20" fill="none" stroke="#22c55e" stroke-width="2">
                            <animate attributeName="d" values="M100 20 Q150 50 180 100 Q150 150 100 180 Q50 150 20 100 Q50 50 100 20;M100 30 Q140 60 170 100 Q140 140 100 170 Q60 140 30 100 Q60 60 100 30;M100 20 Q150 50 180 100 Q150 150 100 180 Q50 150 20 100 Q50 50 100 20" dur="5s" repeatCount="indefinite"/>
                        </path>
                        <circle cx="100" cy="100" r="25" fill="#22c55e" opacity="0.2">
                            <animate attributeName="r" values="25;35;25" dur="3s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                    <div class="relative z-10 text-6xl font-bold gradient-text w-20 h-20 flex items-center justify-center bg-gray-50 rounded-xl float-animation" style="animation-delay: 0.6s;">4</div>
                    <div class="flex-1 relative z-10">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Підбір та навчання менеджерів</h3>
                        <p class="text-gray-600 leading-relaxed">Набираємо тих, хто реально продає, а не «приймає замовлення». Вчимо за нашою методикою та підвищуємо конверсію.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Cards -->
    <section id="services" class="min-h-screen flex items-center py-20 bg-white relative parallax-section">
        <div class="mx-auto w-full relative z-10 parallax-element px-6 lg:px-8">
            <div class="mb-12">
                <span class="inline-block px-4 py-2 bg-purple-50 text-purple-700 rounded-full text-xs font-semibold mb-6">Послуги</span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-8 text-gray-900 tracking-tight animate-on-scroll fade-in-up">
                    Наші<br><span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">послуги</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-10 border-2 border-gray-100 shadow-xl card-hover animate-on-scroll scale-in service-card transform hover:scale-105 transition-all">
                    <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center mb-6 shadow-lg">
                        <span class="text-5xl">🔍</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Аудит відділу продажів</h3>
                    <p class="text-base text-gray-600 mb-4 leading-relaxed">Знаходимо вузькі місця, помилки в процесах, воронці та роботі менеджерів</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center"><span class="text-green-500 mr-3 text-xl">✓</span> Аналіз воронки продажів</li>
                        <li class="flex items-center"><span class="text-green-500 mr-3 text-xl">✓</span> Виявлення помилок у процесах</li>
                        <li class="flex items-center"><span class="text-green-500 mr-3 text-xl">✓</span> Оцінка роботи менеджерів</li>
                        <li class="flex items-center"><span class="text-green-500 mr-3 text-xl">✓</span> Детальні рекомендації</li>
                    </ul>
                </div>
                <div class="bg-white rounded-2xl p-10 border-2 border-gray-100 shadow-xl card-hover animate-on-scroll scale-in service-card transform hover:scale-105 transition-all" style="transition-delay: 0.1s;">
                    <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-purple-100 to-purple-200 flex items-center justify-center mb-6 shadow-lg float-animation">
                        <span class="text-5xl">📋</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Побудова системи продажів та регламентів</h3>
                    <p class="text-base text-gray-600 mb-4 leading-relaxed">Скрипти, процеси, CRM-логіка, KPI — повний порядок у продажах</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center animate-on-scroll fade-in-left"><span class="text-green-500 mr-2">✓</span> Розробка скриптів продажів</li>
                        <li class="flex items-center animate-on-scroll fade-in-left" style="transition-delay: 0.1s;"><span class="text-green-500 mr-2">✓</span> Налаштування CRM-логіки</li>
                        <li class="flex items-center animate-on-scroll fade-in-left" style="transition-delay: 0.2s;"><span class="text-green-500 mr-2">✓</span> Впровадження KPI</li>
                        <li class="flex items-center animate-on-scroll fade-in-left" style="transition-delay: 0.3s;"><span class="text-green-500 mr-2">✓</span> Створення регламентів</li>
                    </ul>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-200 card-hover animate-on-scroll scale-in service-card" style="transition-delay: 0.2s;">
                    <div class="w-10 h-10 rounded-lg bg-pink-100 flex items-center justify-center mb-4 float-animation" style="animation-delay: 0.2s;">
                        <span class="text-lg">🏗️</span>
                    </div>
                    <h3 class="text-lg font-bold mb-3 text-gray-900">Відділ продажів під ключ</h3>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">З нуля створюємо систему, процеси, інструменти, звітність та результат</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Структура відділу</li>
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Процеси та інструменти</li>
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Система звітності</li>
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Запуск та супровід</li>
                    </ul>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-200 card-hover animate-on-scroll scale-in service-card" style="transition-delay: 0.3s;">
                    <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center mb-4 float-animation" style="animation-delay: 0.4s;">
                        <span class="text-lg">👥</span>
                    </div>
                    <h3 class="text-lg font-bold mb-3 text-gray-900">Підбір та навчання менеджерів</h3>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">Набираємо тих, хто реально продає, а не «приймає замовлення». Вчимо за нашою методикою</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Професійний підбір</li>
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Оцінка навичок</li>
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Навчання методиці</li>
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Адаптація та розвиток</li>
                    </ul>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-200 card-hover animate-on-scroll scale-in service-card" style="transition-delay: 0.4s;">
                    <div class="w-10 h-10 rounded-lg bg-yellow-100 flex items-center justify-center mb-4 float-animation" style="animation-delay: 0.6s;">
                        <span class="text-lg">🎓</span>
                    </div>
                    <h3 class="text-lg font-bold mb-3 text-gray-900">Навчання поточних менеджерів</h3>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">Підвищуємо конверсію, навички доведення до рішення, роботи з запереченнями та структурою угоди</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Робота з запереченнями</li>
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Доведення до рішення</li>
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Структура угоди</li>
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Підвищення конверсії</li>
                    </ul>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-200 card-hover opacity-75 animate-on-scroll scale-in service-card" style="transition-delay: 0.5s;">
                    <div class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center mb-4">
                        <span class="text-lg">🌐</span>
                    </div>
                    <h3 class="text-lg font-bold mb-3 text-gray-900">Віддалений відділ продажів</h3>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">Розглядаємо як продукт, але поки обмежені ресурсами</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Організація віддаленої роботи</li>
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Управління та контроль</li>
                        <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Система звітності</li>
                        <li class="flex items-center"><span class="text-gray-400 mr-2">⏳</span> У розробці</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Tags -->
    <section class="py-20 bg-gray-50">
        <div class="mx-auto w-full relative z-10 px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-3">
                <a href="#services" class="px-5 py-2.5 bg-white text-gray-700 rounded-lg hover:bg-gray-50 transition border border-gray-200 text-sm font-medium">Таргет</a>
                <a href="#services" class="px-5 py-2.5 bg-white text-gray-700 rounded-lg hover:bg-gray-50 transition border border-gray-200 text-sm font-medium">Google Ads</a>
                <a href="#services" class="px-5 py-2.5 bg-white text-gray-700 rounded-lg hover:bg-gray-50 transition border border-gray-200 text-sm font-medium">SEO</a>
                <a href="#services" class="px-5 py-2.5 bg-white text-gray-700 rounded-lg hover:bg-gray-50 transition border border-gray-200 text-sm font-medium">Залучення клієнтів</a>
                <a href="#services" class="px-5 py-2.5 bg-white text-gray-700 rounded-lg hover:bg-gray-50 transition border border-gray-200 text-sm font-medium">Інтернет-магазин</a>
                <a href="#services" class="px-5 py-2.5 bg-white text-gray-700 rounded-lg hover:bg-gray-50 transition border border-gray-200 text-sm font-medium">CRM системи</a>
            </div>
        </div>
    </section>

    <!-- Cases -->
    <section id="cases" class="min-h-screen flex items-center py-20 bg-white parallax-section">
        <div class="mx-auto w-full relative z-10 parallax-element px-6 lg:px-8">
            <div class="mb-12">
                <span class="inline-block px-4 py-2 bg-purple-50 text-purple-700 rounded-full text-xs font-semibold mb-6">Кейси</span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-8 text-gray-900 tracking-tight">
                    Наші<br><span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">кейси</span>
                </h2>
            </div>
            <div class="text-gray-500 text-lg">
                <p>Кейси будуть додані найближчим часом</p>
            </div>
        </div>
    </section>

    <!-- Reviews -->
    <section id="reviews" class="min-h-screen flex items-center py-20 bg-gray-50 relative parallax-section">
        <div class="mx-auto w-full relative z-10 parallax-element px-6 lg:px-8">
            <div class="mb-12">
                <span class="inline-block px-4 py-2 bg-yellow-50 text-yellow-700 rounded-full text-xs font-semibold mb-6">Відгуки</span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-8 text-gray-900 tracking-tight animate-on-scroll fade-in-up">
                    Відгуки<br><span class="bg-gradient-to-r from-yellow-500 to-orange-500 bg-clip-text text-transparent">клієнтів</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-10 border-2 border-gray-100 shadow-xl card-hover animate-on-scroll fade-in-left transform hover:scale-105">
                    <div class="flex items-center mb-6">
                        <div class="text-yellow-400 text-3xl">★★★★★</div>
                    </div>
                    <p class="text-base text-gray-600 mb-6 leading-relaxed">"Після аудиту та впровадження системи продажі зросли на 250% за 3 місяці! Тепер у нас передбачувані результати, а не хаос."</p>
                    <div class="font-bold text-lg text-gray-900">Олександр П.</div>
                    <div class="text-sm text-gray-500">CEO, Малий бізнес</div>
                </div>
                <div class="bg-white rounded-2xl p-10 border-2 border-gray-100 shadow-xl card-hover animate-on-scroll fade-in-up transform hover:scale-105" style="transition-delay: 0.1s;">
                    <div class="flex items-center mb-6">
                        <div class="text-yellow-400 text-3xl">★★★★★</div>
                    </div>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">"Професійний підхід, чіткі регламенти, відмінні результати. Система працює незалежно від настрою команди. Рекомендую!"</p>
                    <div class="font-bold text-xl text-gray-900">Марія К.</div>
                    <div class="text-base text-gray-500">Директор з продажів, Середній бізнес</div>
                </div>
                <div class="bg-white rounded-xl p-8 border border-gray-200 card-hover animate-on-scroll fade-in-right" style="transition-delay: 0.2s;">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 text-xl">★★★★★</div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">"Відділ продажів був побудований з нуля за 2 місяці. Від ідеї до працюючої системи. Все працює ідеально!"</p>
                    <div class="font-semibold text-gray-900">Дмитро В.</div>
                    <div class="text-sm text-gray-500">Засновник, Стартап</div>
                </div>
            </div>
            <div class="mt-16">
                <p class="text-gray-600 mb-4">Також читайте наші відгуки на Google</p>
                <a href="#" class="inline-block bg-white px-6 py-3 rounded-lg border border-gray-200 hover:bg-gray-50 transition text-sm font-medium">
                    Переглянути на Google Reviews
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact" class="min-h-screen flex items-center py-20 bg-gradient-to-br from-gray-50 via-white to-purple-50/30 relative parallax-section">
        <div class="mx-auto w-full relative z-10 parallax-element px-6 lg:px-8">
            <div class="mb-12">
                <span class="inline-block px-4 py-2 bg-green-50 text-green-700 rounded-full text-xs font-semibold mb-6">Контакти</span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-4 text-gray-900 tracking-tight animate-on-scroll fade-in-up">
                    Залиште<br><span class="bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">заявку</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl animate-on-scroll fade-in-up">
                    Зв'яжіться з нами для безкоштовної консультації та обговорення вашого проекту
                </p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8 mb-12">
                <!-- Contact Info Card 1 -->
                <div class="bg-white rounded-2xl p-8 border-2 border-gray-100 shadow-xl card-hover animate-on-scroll fade-in-left">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-100 to-purple-200 flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Телефон</h3>
                    <p class="text-gray-600 mb-2">+380 (XX) XXX-XX-XX</p>
                    <p class="text-sm text-gray-500">Пн-Пт: 9:00 - 18:00</p>
                </div>

                <!-- Contact Info Card 2 -->
                <div class="bg-white rounded-2xl p-8 border-2 border-gray-100 shadow-xl card-hover animate-on-scroll fade-in-up">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Email</h3>
                    <p class="text-gray-600 mb-2">info@systemni-prodazhi.com</p>
                    <p class="text-sm text-gray-500">Відповідаємо протягом 24 годин</p>
                </div>

                <!-- Contact Info Card 3 -->
                <div class="bg-white rounded-2xl p-8 border-2 border-gray-100 shadow-xl card-hover animate-on-scroll fade-in-right">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Офіс</h3>
                    <p class="text-gray-600 mb-2">Київ, Україна</p>
                    <p class="text-sm text-gray-500">Онлайн та офлайн консультації</p>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Contact Form -->
                <div class="bg-white rounded-3xl p-10 border-2 border-gray-100 shadow-2xl animate-on-scroll scale-in">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-2 text-gray-900">Надішліть заявку</h3>
                        <p class="text-gray-600">Заповніть форму і ми зв'яжемося з вами найближчим часом</p>
                    </div>
                    <form id="contactForm" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2 text-sm">Ім'я *</label>
                                <input type="text" name="name" required 
                                       class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-gray-50 transition-all"
                                       placeholder="Ваше ім'я">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2 text-sm">Телефон *</label>
                                <input type="tel" name="phone" required 
                                       class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-gray-50 transition-all"
                                       placeholder="+380 (XX) XXX-XX-XX">
                            </div>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2 text-sm">Email *</label>
                            <input type="email" name="email" required 
                                   class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-gray-50 transition-all"
                                   placeholder="your@email.com">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2 text-sm">Повідомлення</label>
                            <textarea name="message" rows="5" 
                                      class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-gray-50 transition-all resize-none"
                                      placeholder="Опишіть ваш проект або питання..."></textarea>
                        </div>
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-5 rounded-xl text-lg font-semibold hover:from-purple-700 hover:to-blue-700 transition-all transform hover:scale-[1.02] shadow-xl hover:shadow-2xl flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            Відправити заявку
                        </button>
                    </form>
                </div>

                <!-- Additional Info Block -->
                <div class="space-y-6">
                    <!-- Quick Response Card -->
                    <div class="bg-gradient-to-br from-purple-600 to-blue-600 rounded-3xl p-8 text-white shadow-2xl animate-on-scroll fade-in-right">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold">Швидка відповідь</h3>
                        </div>
                        <p class="text-purple-100 text-lg leading-relaxed">
                            Ми відповідаємо на заявки протягом <strong class="text-white">2 годин</strong> в робочий час. 
                            Безкоштовна консультація та аналіз вашого бізнесу.
                        </p>
                    </div>

                    <!-- Social Links Card -->
                    <div class="bg-white rounded-3xl p-8 border-2 border-gray-100 shadow-xl animate-on-scroll fade-in-right">
                        <h3 class="text-xl font-bold mb-6 text-gray-900">Ми в соцмережах</h3>
                        <div class="space-y-4">
                            <a href="#" class="flex items-center gap-4 p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 hover:bg-purple-50 transition-all group">
                                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center group-hover:bg-blue-200 transition-colors">
                                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0C5.374 0 0 5.373 0 12s5.374 12 12 12 12-5.373 12-12S18.626 0 12 0zm5.568 8.16c.169.122.302.29.386.483.085.193.118.404.096.614-.022.21-.096.41-.217.58-.121.17-.285.303-.478.387-.193.085-.404.118-.614.096-.21-.022-.41-.096-.58-.217l-3.725 3.725c.12.17.195.37.217.58.022.21-.011.421-.096.614-.085.193-.219.361-.387.483-.168.122-.37.195-.58.217-.21.022-.421-.011-.614-.096-.193-.085-.361-.219-.483-.387-.122-.168-.195-.37-.217-.58-.022-.21.011-.421.096-.614.085-.193.219-.361.387-.483l3.725-3.725c-.12-.17-.195-.37-.217-.58-.022-.21.011-.421.096-.614.085-.193.219-.361.387-.483.168-.122.37-.195.58-.217.21-.022.421.011.614.096.193.085.361.219.483.387z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Telegram</div>
                                    <div class="text-sm text-gray-500">@systemni_prodazhi</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center gap-4 p-4 rounded-xl border-2 border-gray-200 hover:border-blue-500 hover:bg-blue-50 transition-all group">
                                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center group-hover:bg-blue-200 transition-colors">
                                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">LinkedIn</div>
                                    <div class="text-sm text-gray-500">Системні продажі</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Trust Badges -->
                    <div class="bg-gray-50 rounded-3xl p-8 border-2 border-gray-200 animate-on-scroll fade-in-right">
                        <h3 class="text-xl font-bold mb-6 text-gray-900">Чому обирають нас</h3>
                        <div class="space-y-4">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900 mb-1">Безкоштовна консультація</div>
                                    <div class="text-sm text-gray-600">Перша консультація безкоштовна</div>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900 mb-1">Гарантія результату</div>
                                    <div class="text-sm text-gray-600">98% клієнтів досягають цілей</div>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900 mb-1">Швидкий старт</div>
                                    <div class="text-sm text-gray-600">Початок роботи через 3-5 днів</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-20">
        <div class="mx-auto w-full relative z-10 px-6 lg:px-8">
            <div class="text-center mb-8">
                <div class="text-2xl font-bold mb-4">Системні продажі</div>
                <p class="text-gray-400 mb-6">Виводимо продажі малого та середнього бізнесу на новий рівень</p>
                <div class="flex justify-center space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition text-sm">Телеграм</a>
                    <a href="#" class="text-gray-400 hover:text-white transition text-sm">LinkedIn</a>
                    <a href="#" class="text-gray-400 hover:text-white transition text-sm">Email</a>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-sm text-gray-500">
                <p>© 2025 Системні продажі. Всі права захищені.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.01,
            rootMargin: '200px 0px 200px 0px' // Increased bottom margin for last sections
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Special observer for last section (contact) with larger bottom margin
        const contactObserverOptions = {
            threshold: 0.01,
            rootMargin: '200px 0px 400px 0px' // Extra large bottom margin for last section
        };

        const contactObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    entry.target.classList.add('visible');
                }
            });
        }, contactObserverOptions);

        // Observe all animated elements
        document.querySelectorAll('.animate-on-scroll').forEach(item => {
            // Use special observer for contact section elements
            if (item.closest('#contact')) {
                contactObserver.observe(item);
            } else {
                observer.observe(item);
            }
        });

        document.querySelectorAll('.stage-item').forEach(item => {
            observer.observe(item);
        });

        // Parallax effect on scroll
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const scrolled = window.pageYOffset;
                    const parallaxElements = document.querySelectorAll('.parallax');
                    
                    parallaxElements.forEach(element => {
                        const speed = parseFloat(element.dataset.speed) || 0.5;
                        const yPos = -(scrolled * speed);
                        element.style.transform = `translateY(${yPos}px)`;
                    });
                    
                    ticking = false;
                });
                ticking = true;
            }
        });

        // Animate numbers on scroll
        const animateNumbers = (element, target, duration = 2000) => {
            let start = 0;
            const increment = target / (duration / 16);
            const timer = setInterval(() => {
                start += increment;
                if (start >= target) {
                    element.textContent = target;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(start);
                }
            }, 16);
        };

        const numberObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                    entry.target.classList.add('counted');
                    const target = parseInt(entry.target.dataset.target);
                    if (!isNaN(target)) {
                        animateNumbers(entry.target, target);
                    }
                }
            });
        }, { threshold: 0.1, rootMargin: '200px 0px' });

        document.querySelectorAll('[data-target]').forEach(item => {
            numberObserver.observe(item);
        });

        // Stagger animations for cards
        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animated');
                    }, index * 100);
                }
            });
        }, { threshold: 0.01, rootMargin: '200px 0px 200px 0px' });

        document.querySelectorAll('.card-hover').forEach((card, index) => {
            card.style.transitionDelay = `${index * 0.05}s`;
            cardObserver.observe(card);
        });

        // Smooth reveal animations with delay
        const revealElements = document.querySelectorAll('.animate-on-scroll');
        revealElements.forEach((el, index) => {
            if (!el.style.transitionDelay) {
                el.style.transitionDelay = `${index * 0.1}s`;
            }
        });

        // Form submission with animation
        document.getElementById('contactForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const button = this.querySelector('button[type="submit"]');
            const originalText = button.textContent;
            
            // Button loading animation
            button.textContent = 'Відправка...';
            button.disabled = true;
            button.classList.add('opacity-75');
            
            // Simulate async submission
            setTimeout(() => {
                button.textContent = '✓ Відправлено!';
                button.classList.remove('opacity-75');
                button.classList.add('bg-green-600');
                
                setTimeout(() => {
                    alert('Дякуємо за заявку! Ми зв\'яжемося з вами найближчим часом.');
                    this.reset();
                    button.textContent = originalText;
                    button.disabled = false;
                    button.classList.remove('bg-green-600');
                }, 1000);
            }, 1500);
        });

        // Add hover effects to service cards
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Navigation scroll effect
        const navbar = document.getElementById('navbar');
        let lastScroll = 0;
        let navbarTicking = false;

        function updateNavbar() {
            const currentScroll = window.pageYOffset;
            const scrollDifference = currentScroll - lastScroll;

            if (currentScroll > 50) {
                // Scrolled down - show navbar with background
                navbar.classList.remove('navbar-hidden');
                navbar.classList.add('navbar-visible');
            } else {
                // At top - transparent navbar
                navbar.classList.remove('navbar-visible');
                navbar.classList.remove('navbar-hidden');
            }

            // Hide/show on scroll direction
            if (scrollDifference > 5 && currentScroll > 100) {
                // Scrolling down - hide navbar
                navbar.classList.add('navbar-hidden');
            } else if (scrollDifference < -5) {
                // Scrolling up - show navbar
                navbar.classList.remove('navbar-hidden');
            }

            lastScroll = currentScroll;
            navbarTicking = false;
        }

        function requestNavbarTick() {
            if (!navbarTicking) {
                requestAnimationFrame(updateNavbar);
                navbarTicking = true;
            }
        }

        window.addEventListener('scroll', requestNavbarTick);
        updateNavbar();

        // Mobile menu toggle
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

        // Active navigation link highlighting
        const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');
        const sections = document.querySelectorAll('section[id]');

        function updateActiveNav() {
            let currentSection = '';
            const scrollPosition = window.pageYOffset + window.innerHeight / 3;

            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    currentSection = sectionId;
                }
            });

            // If no section found, check if we're at the top
            if (!currentSection && window.pageYOffset < 100) {
                currentSection = 'hero';
            }

            // Update active state for all nav links
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === `#${currentSection}`) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        }

        // Throttle scroll events for nav
        let navScrollTicking = false;
        function onNavScroll() {
            if (!navScrollTicking) {
                window.requestAnimationFrame(() => {
                    updateActiveNav();
                    navScrollTicking = false;
                });
                navScrollTicking = true;
            }
        }

        window.addEventListener('scroll', onNavScroll);
        updateActiveNav();
    </script>

    <!-- Navigation and Parallax Scripts -->
    <script>

        // Parallax effects for sections
        const parallaxSections = document.querySelectorAll('.parallax-section');
        let parallaxTicking = false;

        function updateParallax() {
            parallaxSections.forEach(section => {
                const rect = section.getBoundingClientRect();
                const scrollProgress = (window.innerHeight - rect.top) / (window.innerHeight + rect.height);
                
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    const parallaxElements = section.querySelectorAll('.parallax-element');
                    parallaxElements.forEach((el, index) => {
                        const speed = 0.3 + (index * 0.1);
                        const yPos = -(rect.top * speed * 0.5);
                        el.style.transform = `translateY(${yPos}px)`;
                    });

                    // Opacity removed - sections should stay fully visible
                }
            });
            parallaxTicking = false;
        }

        function requestParallaxTick() {
            if (!parallaxTicking) {
                requestAnimationFrame(updateParallax);
                parallaxTicking = true;
            }
        }

        window.addEventListener('scroll', requestParallaxTick);
        updateParallax();

    </script>
    </main>
</body>
</html>
