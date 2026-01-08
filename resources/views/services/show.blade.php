@extends('layouts.app')

@section('title', $service['title'] . ' - Системні продажі')

@section('content')
<div class="min-h-screen py-20">
    <!-- Header -->
    <div class="mx-auto w-full px-6 lg:px-8 mb-16">
        <div class="max-w-4xl mx-auto">
            <a href="{{ route('services.index') }}" class="inline-flex items-center gap-2 text-purple-600 hover:text-purple-700 mb-6">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Назад до послуг
            </a>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 text-gray-900">
                {{ $service['title'] }}
            </h1>
        </div>
    </div>

    <!-- Problem Section -->
    <section class="mx-auto w-full px-6 lg:px-8 mb-20">
        <div class="max-w-4xl mx-auto">
            <div class="bg-red-50 rounded-3xl p-10 border-2 border-red-100">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">{{ $service['problem']['title'] }}</h2>
                <p class="text-lg text-gray-700 mb-6">{{ $service['problem']['description'] }}</p>
                <ul class="space-y-4">
                    @foreach($service['problem']['points'] as $point)
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-gray-700">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="mx-auto w-full px-6 lg:px-8 mb-20">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">{{ $service['process']['title'] }}</h2>
            <div class="space-y-8">
                @foreach($service['process']['steps'] as $index => $step)
                <div class="flex gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-purple-600 to-blue-600 text-white flex items-center justify-center font-bold text-lg">
                            {{ $index + 1 }}
                        </div>
                    </div>
                    <div class="flex-1 bg-white rounded-2xl p-6 border-2 border-gray-100">
                        <h3 class="text-xl font-bold mb-2 text-gray-900">{{ $step['title'] }}</h3>
                        <p class="text-gray-600">{{ $step['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Result Section -->
    <section class="mx-auto w-full px-6 lg:px-8 mb-20">
        <div class="max-w-4xl mx-auto">
            <div class="bg-green-50 rounded-3xl p-10 border-2 border-green-100">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">{{ $service['result']['title'] }}</h2>
                <ul class="space-y-4">
                    @foreach($service['result']['items'] as $item)
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700 text-lg">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <!-- Price & CTA Section -->
    <section class="mx-auto w-full px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-3xl p-12 text-center text-white">
                @if(isset($service['price']))
                <div class="text-4xl font-bold mb-4">{{ $service['price'] }}</div>
                @endif
                <h2 class="text-3xl font-bold mb-6">{{ $service['cta'] }}</h2>
                <a href="{{ route('contact.index') }}" class="inline-block bg-white text-purple-600 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition-colors shadow-lg">
                    Зв'язатися з нами
                </a>
            </div>
        </div>
    </section>
</div>
@endsection



