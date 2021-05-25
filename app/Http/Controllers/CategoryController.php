<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CategoryController extends Controller {

    public function show($id = null) {

        // Проверка существования вида
        if (view()->exists('category')) {
            return view('category');
        }

        abort(404);
    }
}

