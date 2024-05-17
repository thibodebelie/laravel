<?php

namespace App\Http\Controllers;

abstract class ThemeController
{
    public function changeTheme(Request $request) {
        $theme = session('theme') === 'light' ? 'dark' : 'light';
        session(['theme' => $theme]);

        return redirect()->back();
    }
}
