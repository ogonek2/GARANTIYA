<footer class="bg-gray-900 text-white py-12 mt-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Logo & Description -->
            <div class="col-span-1 md:col-span-2">
                <a href="{{ route('home') }}" class="flex items-center gap-2 mb-4">
                    <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span class="text-xl font-bold">Системні продажі</span>
                </a>
                <p class="text-gray-400 mb-4">Виводимо продажі малого та середнього бізнесу на новий рівень. Системні, передбачувані та масштабовані продажі.</p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="font-semibold mb-4">Швидкі посилання</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Головна</a></li>
                    <li><a href="{{ route('services.index') }}" class="text-gray-400 hover:text-white transition-colors">Послуги</a></li>
                    <li><a href="{{ route('blog.index') }}" class="text-gray-400 hover:text-white transition-colors">Блог</a></li>
                    <li><a href="{{ route('contact.index') }}" class="text-gray-400 hover:text-white transition-colors">Контакти</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="font-semibold mb-4">Контакти</h3>
                <ul class="space-y-2 text-gray-400">
                    <li>Email: info@systemni-prodazhi.com</li>
                    <li>Телефон: +380 (XX) XXX-XX-XX</li>
                    <li class="flex gap-3 mt-4">
                        <a href="#" class="hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C5.374 0 0 5.373 0 12s5.374 12 12 12 12-5.373 12-12S18.626 0 12 0zm5.568 8.16c.169.122.302.29.386.483.085.193.118.404.096.614-.022.21-.096.41-.217.58-.121.17-.285.303-.478.387-.193.085-.404.118-.614.096-.21-.022-.41-.096-.58-.217l-3.725 3.725c.12.17.195.37.217.58.022.21-.011.421-.096.614-.085.193-.219.361-.387.483-.168.122-.37.195-.58.217-.21.022-.421-.011-.614-.096-.193-.085-.361-.219-.483-.387-.122-.168-.195-.37-.217-.58-.022-.21.011-.421.096-.614.085-.193.219-.361.387-.483l3.725-3.725c-.12-.17-.195-.37-.217-.58-.022-.21.011-.421.096-.614.085-.193.219-.361.387-.483.168-.122.37-.195.58-.217.21-.022.421.011.614.096.193.085.361.219.483.387z"/>
                            </svg>
                        </a>
                        <a href="#" class="hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; {{ date('Y') }} Системні продажі. Всі права захищені.</p>
        </div>
    </div>
</footer>



