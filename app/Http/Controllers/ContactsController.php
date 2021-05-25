<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function show()
    {
        $array = [
            'title' => 'Mars project',
            'script' => "<script>console.log('Alert')</script>",
        ];

        return view('default.contacts', $array);
    }
}
