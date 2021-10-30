<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;

class PagesController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function home()
    {
        $students = Student::all();
        return view('home', compact('students'));
    }

    public function about()
    {
        return view('about', ['nama' => 'Wahyu Kurniawan Hartanto']);
    }
}