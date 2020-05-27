<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;
use App\Models\Comment;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard', [
            'users' => User::count(),
            'articles' => Article::count(),
            'comments' => Comment::count()
        ]);
    }
}
