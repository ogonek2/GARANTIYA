@extends('layouts.app')

@section('title', 'Послуги - Системні продажі')
@section('description', 'Комплексні послуги з аудиту, побудови системи продажів, підбору та навчання менеджерів')

@section('content')
<div class="min-h-screen py-20">
    <!-- Header -->
    <div class="mx-auto w-full px-6 lg:px-8 mb-16">
        <div class="text-center max-w-3xl mx-auto">
            <span class="inline-block px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold mb-6">Послуги</span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 text-gray-900">
                Наші <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">послуги</span>
            </h1>
            <p class="text-lg text-gray-600">
                Комплексні рішення для побудови ефективної системи продажів
            </p>
        </div>
    </div>

    <!-- Services Grid -->
    <div class="mx-auto w-full px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            @foreach($services as $service)
            <a href="{{ route('services.show', $service['slug']) }}" class="group bg-white rounded-3xl p-8 border-2 border-gray-100 hover:border-purple-500 transition-all duration-300 hover:shadow-2xl transform hover:-translate-y-2">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-100 to-blue-100 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-purple-600 transition-colors">{{ $service['title'] }}</h3>
                <p class="text-gray-600 mb-6">{{ $service['description'] }}</p>
                <span class="text-purple-600 font-semibold flex items-center gap-2 group-hover:gap-3 transition-all">
                    Детальніше
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </span>
            </a>
            @endforeach
        </div>
    </div>

    <!-- CTA Section -->
    <div class="mx-auto w-full px-6 lg:px-8 mt-20">
        <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-3xl p-12 text-center text-white max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Готові почати?</h2>
            <p class="text-lg mb-8 text-purple-100">Отримайте безкоштовну консультацію та розрахунок вартості</p>
            <a href="{{ route('contact.index') }}" class="inline-block bg-white text-purple-600 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition-colors shadow-lg">
                Отримати консультацію
            </a>
        </div>
    </div>
</div>
@endsection



