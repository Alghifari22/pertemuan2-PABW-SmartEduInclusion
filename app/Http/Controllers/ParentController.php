<?php

namespace App\Http\Controllers;

class ParentController extends Controller
{
    public function dashboard()
    {
        return view('parent.dashboard', ['summary' => [
            ['value' => '72%', 'label' => 'Progres keseluruhan'],
            ['value' => 18, 'label' => 'Materi selesai'],
            ['value' => 86, 'label' => 'Rata-rata nilai'],
        ], 'weeklyActivity' => [45, 70, 55, 85, 65, 90, 72]]);
    }
}
