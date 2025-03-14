<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(){
        $news=News::lastest()->get();
        return view('news.index', compact('news'));
    }
}
