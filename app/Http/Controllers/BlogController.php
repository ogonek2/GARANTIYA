<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'slug' => 'yak-pobuduvaty-systemu-prodazhiv',
                'title' => 'Як побудувати систему продажів з нуля',
                'excerpt' => 'Покроковий гайд зі створення ефективної системи продажів для вашого бізнесу',
                'date' => '2024-01-15',
                'category' => 'Системні продажі',
            ],
            [
                'slug' => 'crm-dlya-malogo-biznesu',
                'title' => 'CRM для малого бізнесу: як обрати та налаштувати',
                'excerpt' => 'Огляд найкращих CRM-систем та рекомендації щодо вибору для малого бізнесу',
                'date' => '2024-01-10',
                'category' => 'CRM',
            ],
            [
                'slug' => 'kpi-v-prodazhah',
                'title' => 'KPI в продажах: які метрики відстежувати',
                'excerpt' => 'Детальний огляд ключових показників ефективності для відділу продажів',
                'date' => '2024-01-05',
                'category' => 'Метрики',
            ],
        ];

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $posts = [
            'yak-pobuduvaty-systemu-prodazhiv' => [
                'title' => 'Як побудувати систему продажів з нуля',
                'content' => 'Детальний контент статті...',
                'date' => '2024-01-15',
                'category' => 'Системні продажі',
            ],
        ];

        if (!isset($posts[$slug])) {
            abort(404);
        }

        $post = $posts[$slug];
        $post['slug'] = $slug;

        return view('blog.show', compact('post'));
    }
}
