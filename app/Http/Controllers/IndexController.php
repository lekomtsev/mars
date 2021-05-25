<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show() {

        $array = [
            'title' => 'Mars project',
            'data' => [
                'one' => 'List 1',
                'two' => 'List 2',
                'three' => 'List 3',
                'four' => 'List 4',
                'five' => 'List 5',
            ],
            'list' => ['Item 1', 'Item 2', 'Item 3', 'Item 4', 'Item 5'],
            'blog' => [
                 'title' => 'New mega title 1',
            ],
            'script' => "<script>console.log('Alert')</script>",
        ];


        return view('default.index', $array);
    }
}
