<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = [
            [
                'slug' => 'audit',
                'title' => 'Аудит відділу продажів',
                'description' => 'Комплексний аналіз поточної системи продажів та виявлення точок росту',
                'icon' => 'audit',
            ],
            [
                'slug' => 'system-building',
                'title' => 'Побудова системи продажів',
                'description' => 'Створення ефективної системи продажів з нуля або оптимізація існуючої',
                'icon' => 'system',
            ],
            [
                'slug' => 'turnkey',
                'title' => 'Відділ продажів під ключ',
                'description' => 'Повний цикл: від аналізу до запуску відділу продажів',
                'icon' => 'turnkey',
            ],
            [
                'slug' => 'recruitment',
                'title' => 'Підбір менеджерів',
                'description' => 'Професійний підбір та відбір менеджерів з продажів',
                'icon' => 'recruitment',
            ],
            [
                'slug' => 'training',
                'title' => 'Навчання менеджерів',
                'description' => 'Навчання та підвищення кваліфікації менеджерів з продажів',
                'icon' => 'training',
            ],
            [
                'slug' => 'remote',
                'title' => 'Віддалений відділ продажів',
                'description' => 'Організація та управління віддаленим відділом продажів',
                'icon' => 'remote',
            ],
        ];

        return view('services.index', compact('services'));
    }
}
