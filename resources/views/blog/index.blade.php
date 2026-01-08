@extends('layouts.app')

@section('title', 'Блог - Системні продажі')
@section('description', 'Корисні статті про системні продажі, CRM, бізнес та ефективність')

@section('content')
<div class="min-h-screen py-20">
    <!-- Header -->
    <div class="mx-auto w-full px-6 lg:px-8 mb-16">
        <div class="text-center max-w-3xl mx-auto">
            <span class="inline-block px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold mb-6">Блог</span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 text-gray-900">
                Корисні <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">статті</span>
            </h1>
            <p class="text-lg text-gray-600">
                Дізнавайтеся про останні тренди в продажах, CRM та бізнес-процесах
            </p>
        </div>
    </div>

    <!-- Blog Posts -->
    <div class="mx-auto w-full px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            @foreach($posts as $post)
            <article class="bg-white rounded-3xl overflow-hidden border-2 border-gray-100 hover:border-purple-500 transition-all duration-300 hover:shadow-2xl transform hover:-translate-y-2">
                <div class="h-48 bg-gradient-to-br from-purple-100 to-blue-100"></div>
                <div class="p-6">
                    <span class="inline-block px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold mb-3">{{ $post['category'] }}</span>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">
                        <a href="{{ route('blog.show', $post['slug']) }}" class="hover:text-purple-600 transition-colors">{{ $post['title'] }}</a>
                    </h3>
                    <p class="text-gray-600 mb-4">{{ $post['excerpt'] }}</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>{{ \Carbon\Carbon::parse($post['date'])->format('d.m.Y') }}</span>
                        <a href="{{ route('blog.show', $post['slug']) }}" class="text-purple-600 hover:text-purple-700 font-semibold flex items-center gap-1">
                            Читати
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</div>
@endsection



