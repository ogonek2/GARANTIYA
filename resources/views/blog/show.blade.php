@extends('layouts.app')

@section('title', $post['title'] . ' - Блог - Системні продажі')

@section('content')
<div class="min-h-screen py-20">
    <article class="max-w-4xl mx-auto px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-12">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-purple-600 hover:text-purple-700 mb-6">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Назад до блогу
            </a>
            <span class="inline-block px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold mb-4">{{ $post['category'] }}</span>
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-gray-900">{{ $post['title'] }}</h1>
            <p class="text-gray-500">{{ \Carbon\Carbon::parse($post['date'])->format('d.m.Y') }}</p>
        </div>

        <!-- Content -->
        <div class="prose prose-lg max-w-none">
            <div class="bg-white rounded-3xl p-10 border-2 border-gray-100">
                {!! $post['content'] !!}
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-12 bg-gradient-to-r from-purple-600 to-blue-600 rounded-3xl p-10 text-center text-white">
            <h2 class="text-2xl font-bold mb-4">Потрібна допомога з продажами?</h2>
            <a href="{{ route('contact.index') }}" class="inline-block bg-white text-purple-600 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition-colors shadow-lg">
                Отримати консультацію
            </a>
        </div>
    </article>
</div>
@endsection



