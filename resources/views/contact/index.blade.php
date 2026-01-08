@extends('layouts.app')

@section('title', 'Контакти - Системні продажі')
@section('description', 'Зв\'яжіться з нами для консультації та обговорення вашого проекту')

@section('content')
<div class="min-h-screen py-20">
    <!-- Header -->
    <div class="mx-auto w-full px-6 lg:px-8 mb-16">
        <div class="text-center max-w-3xl mx-auto">
            <span class="inline-block px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold mb-6">Контакти</span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 text-gray-900">
                Зв'яжіться з <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">нами</span>
            </h1>
            <p class="text-lg text-gray-600">
                Залиште заявку і ми зв'яжемося з вами найближчим часом
            </p>
        </div>
    </div>

    <div class="mx-auto w-full px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <!-- Contact Form -->
            <div class="bg-white rounded-3xl p-10 border-2 border-gray-100 shadow-xl">
                <h2 class="text-2xl font-bold mb-6 text-gray-900">Надішліть заявку</h2>
                
                @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 border-2 border-green-200 rounded-lg text-green-700">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2 text-sm">Ім'я *</label>
                        <input type="text" name="name" required value="{{ old('name') }}" 
                               class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-gray-50 transition-all">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2 text-sm">Email *</label>
                        <input type="email" name="email" required value="{{ old('email') }}" 
                               class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-gray-50 transition-all">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2 text-sm">Телефон *</label>
                        <input type="tel" name="phone" required value="{{ old('phone') }}" 
                               class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-gray-50 transition-all">
                        @error('phone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2 text-sm">Повідомлення</label>
                        <textarea name="message" rows="5" 
                                  class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-gray-50 transition-all resize-none">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-5 rounded-xl text-lg font-semibold hover:from-purple-700 hover:to-blue-700 transition-all transform hover:scale-[1.02] shadow-xl hover:shadow-2xl">
                        Відправити заявку
                    </button>
                </form>
            </div>

            <!-- Contact Info & Social -->
            <div class="space-y-6">
                <!-- Contact Cards -->
                <div class="grid gap-6">
                    <div class="bg-white rounded-2xl p-8 border-2 border-gray-100 shadow-xl">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-100 to-purple-200 flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Телефон</h3>
                        <p class="text-gray-600 mb-2">+380 (XX) XXX-XX-XX</p>
                        <p class="text-sm text-gray-500">Пн-Пт: 9:00 - 18:00</p>
                    </div>

                    <div class="bg-white rounded-2xl p-8 border-2 border-gray-100 shadow-xl">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Email</h3>
                        <p class="text-gray-600 mb-2">info@systemni-prodazhi.com</p>
                        <p class="text-sm text-gray-500">Відповідаємо протягом 24 годин</p>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="bg-white rounded-2xl p-8 border-2 border-gray-100 shadow-xl">
                    <h3 class="text-xl font-bold mb-6 text-gray-900">Ми в соцмережах</h3>
                    <div class="space-y-4">
                        <a href="https://wa.me/380XXXXXXXXX" target="_blank" class="flex items-center gap-4 p-4 rounded-xl border-2 border-gray-200 hover:border-green-500 hover:bg-green-50 transition-all group">
                            <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center group-hover:bg-green-200 transition-colors">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">WhatsApp</div>
                                <div class="text-sm text-gray-500">Написати в WhatsApp</div>
                            </div>
                        </a>
                        <a href="https://t.me/your_username" target="_blank" class="flex items-center gap-4 p-4 rounded-xl border-2 border-gray-200 hover:border-blue-500 hover:bg-blue-50 transition-all group">
                            <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center group-hover:bg-blue-200 transition-colors">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0C5.374 0 0 5.373 0 12s5.374 12 12 12 12-5.373 12-12S18.626 0 12 0zm5.568 8.16c.169.122.302.29.386.483.085.193.118.404.096.614-.022.21-.096.41-.217.58-.121.17-.285.303-.478.387-.193.085-.404.118-.614.096-.21-.022-.41-.096-.58-.217l-3.725 3.725c.12.17.195.37.217.58.022.21-.011.421-.096.614-.085.193-.219.361-.387.483-.168.122-.37.195-.58.217-.21.022-.421-.011-.614-.096-.193-.085-.361-.219-.483-.387-.122-.168-.195-.37-.217-.58-.022-.21.011-.421.096-.614.085-.193.219-.361.387-.483l3.725-3.725c-.12-.17-.195-.37-.217-.58-.022-.21.011-.421.096-.614.085-.193.219-.361.387-.483.168-.122.37-.195.58-.217.21-.022.421.011.614.096.193.085.361.219.483.387z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Telegram</div>
                                <div class="text-sm text-gray-500">Написати в Telegram</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



