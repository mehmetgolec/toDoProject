<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('panel.categories.index',compact("categories"));
    }
    public function create()
    {
        return view('panel.categories.create');
    }
    public function categoryAdd(Request $request)
    {
        $req = new Category();
        $req->name = $request->category_name;
        $req->is_active = $request->state;
        $req->save();
        return redirect()->route('panel.categories.index')->with(['success'=>"Kategori oluşturuldu"]);
    }
}
