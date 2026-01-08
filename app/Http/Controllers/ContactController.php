<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        // Валідація та збереження форми
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Тут можна додати логіку відправки email або збереження в БД
        
        return back()->with('success', 'Дякуємо за заявку! Ми зв\'яжемося з вами найближчим часом.');
    }
}
