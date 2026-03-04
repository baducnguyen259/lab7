<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Nguyen Van A',
            'age' => 20,
            'school' => 'Đại học CNTT',
        ];

        $name = $data['name'];
        $age = $data['age'];
        $school = $data['school'];

        return view('welcome', compact('data', 'name', 'age', 'school'));
    }

    public function multiplication($n)
    {
        $isValid = is_numeric($n);
        $number = $isValid ? (int) $n : null;

        return view('bang-cuu-chuong', compact('isValid', 'number', 'n'));
    }
}
