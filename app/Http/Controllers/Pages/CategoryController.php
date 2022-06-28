<?php

namespace App\Http\Controllers\Pages;

use App\Models\Thread;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('pages.categories.index', [
            'threads'       => Thread::ForCategory($category->slug())->paginate(10),
        ]);
    }
}
