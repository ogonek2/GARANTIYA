@extends('layouts.app')

@section('title', 'Попередній аудит продажів - Системні продажі')
@section('description', 'Пройдіть безкоштовний аудит вашої системи продажів та отримайте рекомендації')

@section('content')
<div class="min-h-screen py-20">
    <!-- Header -->
    <div class="mx-auto w-full px-6 lg:px-8 mb-16">
        <div class="text-center max-w-3xl mx-auto">
            <span class="inline-block px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold mb-6">Безкоштовний аудит</span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 text-gray-900">
                Попередній <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">аудит продажів</span>
            </h1>
            <p class="text-lg text-gray-600">
                Відповідайте на питання та отримайте персональні рекомендації щодо покращення вашої системи продажів
            </p>
        </div>
    </div>

    <div class="mx-auto w-full px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            @if(session('success'))
            <div class="mb-8 p-6 bg-green-50 border-2 border-green-200 rounded-3xl text-green-700 text-center">
                <svg class="w-16 h-16 mx-auto mb-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-2xl font-bold mb-2">Дякуємо за проходження опитування!</h3>
                <p>{{ session('success') }}</p>
            </div>
            @else
            <form action="{{ route('quiz.store') }}" method="POST" id="quizForm" class="bg-white rounded-3xl p-10 border-2 border-gray-100 shadow-xl">
                @csrf
                
                <!-- Contact Info -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold mb-6 text-gray-900">Контактна інформація</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Ім'я *</label>
                            <input type="text" name="name" required value="{{ old('name') }}" 
                                   class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-gray-50">
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Email *</label>
                            <input type="email" name="email" required value="{{ old('email') }}" 
                                   class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-gray-50">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-gray-700 font-semibold mb-2">Телефон *</label>
                            <input type="tel" name="phone" required value="{{ old('phone') }}" 
                                   class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-gray-50">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Quiz Questions -->
                <div class="space-y-10">
                    <h2 class="text-2xl font-bold mb-8 text-gray-900">Питання про вашу систему продажів</h2>
                    
                    <!-- Question 1 -->
                    <div class="quiz-question">
                        <label class="block text-lg font-semibold mb-4 text-gray-900">
                            1. Скільки менеджерів працює у вашому відділі продажів?
                        </label>
                        <div class="space-y-3">
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[managers]" value="1-3" class="mr-3 w-5 h-5 text-purple-600" required>
                                <span>1-3 менеджери</span>
                            </label>
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[managers]" value="4-10" class="mr-3 w-5 h-5 text-purple-600">
                                <span>4-10 менеджерів</span>
                            </label>
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[managers]" value="11+" class="mr-3 w-5 h-5 text-purple-600">
                                <span>Більше 10 менеджерів</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="quiz-question">
                        <label class="block text-lg font-semibold mb-4 text-gray-900">
                            2. Чи використовуєте ви CRM-систему?
                        </label>
                        <div class="space-y-3">
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[crm]" value="yes" class="mr-3 w-5 h-5 text-purple-600" required>
                                <span>Так, використовуємо</span>
                            </label>
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[crm]" value="no" class="mr-3 w-5 h-5 text-purple-600">
                                <span>Ні, не використовуємо</span>
                            </label>
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[crm]" value="planning" class="mr-3 w-5 h-5 text-purple-600">
                                <span>Плануємо впровадити</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="quiz-question">
                        <label class="block text-lg font-semibold mb-4 text-gray-900">
                            3. Яка конверсія лідів у продажі?
                        </label>
                        <div class="space-y-3">
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[conversion]" value="<10%" class="mr-3 w-5 h-5 text-purple-600" required>
                                <span>Менше 10%</span>
                            </label>
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[conversion]" value="10-20%" class="mr-3 w-5 h-5 text-purple-600">
                                <span>10-20%</span>
                            </label>
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[conversion]" value="20-30%" class="mr-3 w-5 h-5 text-purple-600">
                                <span>20-30%</span>
                            </label>
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[conversion]" value="30%+" class="mr-3 w-5 h-5 text-purple-600">
                                <span>Більше 30%</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="quiz-question">
                        <label class="block text-lg font-semibold mb-4 text-gray-900">
                            4. Чи є у вас система звітності та KPI?
                        </label>
                        <div class="space-y-3">
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[kpi]" value="yes" class="mr-3 w-5 h-5 text-purple-600" required>
                                <span>Так, є повна система</span>
                            </label>
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[kpi]" value="partial" class="mr-3 w-5 h-5 text-purple-600">
                                <span>Частково</span>
                            </label>
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[kpi]" value="no" class="mr-3 w-5 h-5 text-purple-600">
                                <span>Ні, немає</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 5 -->
                    <div class="quiz-question">
                        <label class="block text-lg font-semibold mb-4 text-gray-900">
                            5. Яка основна проблема у вашому відділі продажів?
                        </label>
                        <div class="space-y-3">
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[problem]" value="low_conversion" class="mr-3 w-5 h-5 text-purple-600" required>
                                <span>Низька конверсія лідів</span>
                            </label>
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[problem]" value="no_system" class="mr-3 w-5 h-5 text-purple-600">
                                <span>Відсутність системи</span>
                            </label>
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[problem]" value="team" class="mr-3 w-5 h-5 text-purple-600">
                                <span>Проблеми з командою</span>
                            </label>
                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="answers[problem]" value="other" class="mr-3 w-5 h-5 text-purple-600">
                                <span>Інше</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-12">
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-5 rounded-xl text-lg font-semibold hover:from-purple-700 hover:to-blue-700 transition-all transform hover:scale-[1.02] shadow-xl hover:shadow-2xl">
                        Відправити відповіді та отримати аналіз
                    </button>
                    <p class="text-center text-sm text-gray-500 mt-4">
                        Після відправки ми проаналізуємо ваші відповіді та зв'яжемося з вами з рекомендаціями
                    </p>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Form validation and enhancement
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('quizForm');
        if (form) {
            form.addEventListener('submit', function(e) {
                const requiredRadios = this.querySelectorAll('input[type="radio"][required]');
                let allAnswered = true;
                
                requiredRadios.forEach(radio => {
                    const name = radio.name;
                    const group = this.querySelectorAll(`input[name="${name}"]`);
                    if (!Array.from(group).some(r => r.checked)) {
                        allAnswered = false;
                    }
                });
                
                if (!allAnswered) {
                    e.preventDefault();
                    alert('Будь ласка, відповідайте на всі питання');
                }
            });
        }
    });
</script>
@endpush

