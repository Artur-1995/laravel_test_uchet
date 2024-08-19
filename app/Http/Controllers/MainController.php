<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke()
    {
        // return view('base.index', ['breadcrumbs' => 'main.topic.subtopic.index', 'sub' => $subtopic, 'title' => "Подтема $subtopic", 'subtopic' => $subtopic, 'topic' => $topic]);
        return view('main.index', ['breadcrumbs' => 'main.index', 'title' => 'Меню']);
    }
}
