<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.index');


    }

    public function show($id)
    {
        $category = Category::find($id);

        return view('category.show', compact('category'));
    }

     //Destroy
     public function destroy (Category $category){
        $category->delete();
        return redirect()->route('category.index');
    }

    public function edit(Category $category){//Encuentro el Curso

        return view('category.edit',compact('category'));

      }

     //Update
    public function update(Request $request, Category $category){


        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.index');

      }













}
