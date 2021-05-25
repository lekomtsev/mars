<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoreController extends Controller
{

    public function getArticles() {
        echo 'getArticles';
    }

    public function getArticle() {
        echo 'getArticle';
    }
}
