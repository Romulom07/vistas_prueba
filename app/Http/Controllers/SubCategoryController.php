<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(Request $request)
    {
        $sub_categories = SubCategory::with('category')->orderBy('name', 'ASC')->paginate(4);

    


        return view('sub_categories.index')->with('sub_categories', $sub_categories);
    }                                           
}
