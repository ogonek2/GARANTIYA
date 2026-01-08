<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        return view('quiz.index');
    }

    public function store(Request $request)
    {
        // Валідація та збереження результатів опитування
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'answers' => 'required|array',
        ]);

        // Тут можна додати логіку обробки відповідей та збереження
        
        return back()->with('success', 'Дякуємо за проходження опитування! Ми проаналізуємо ваші відповіді та зв\'яжемося з вами.');
    }
}
