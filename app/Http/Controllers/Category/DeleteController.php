<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();

<<<<<<< HEAD
        return redirect()->route('category.index');
=======
        return redirect()->route('admin.category.index');
>>>>>>> origin/main
    }
}
