<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        $categories = Category::get();
      
        return view ('category.home', compact('categories'));
    }


    public function create(){
        return view ('category.create');
    }

    
    public function store(Request $request){
       $request->validate(['name'=>'required|max:255|string',
       'description'=>'required|max:255|string',
       'age'=>'required|max:255|string',       
       'is_active'=>'sometimes',
       'specialty'=>'required|max:255|string'
    ]);
       // to save data
       Category::create([
          'name' => $request->name,
          'description' => $request->description,
          'age' => $request->age,
          'is_active'=>$request->is_active==true ?1:0,
          'specialty' => $request->specialty,

       ]);
       return redirect ('categories/create')->with('status', 'Category Created');
    }
    public function view() {
        $categories = Category::all(); // Fetch all categories
        return view('category.index', compact('categories')); // Pass the categories variable to the view
    }
    public function doc() {
        $categories = Category::all(); // Fetch all categories
        return view('category.doc', compact('categories')); // Pass the categories variable to the view
    }
    
    
    public function edit(int $id){
       $category =Category::find($id);
       return  view('category.edit',compact('category'));
    }
    public function update(Request $request,int $id){
        $request->validate(['name'=>'required|max:255|string',
        'description'=>'required|max:255|string',
        'is_active'=>'sometimes',
        'age'=>'required|max:255|string',       
        'is_active'=>'sometimes',
        'specialty'=>'required|max:255|string'
    ]);
        // to save data
        Category::findOrFail($id)->update([
         'name' => $request->name,
         'description' => $request->description,
         'age' => $request->age,
          'is_active'=>$request->is_active==true ?1:0,      
          'specialty' => $request->specialty,
 
        ]);
        return redirect ()->back()->with('status', 'Category edited');
     }

     public function destroy(int $id){
       $category= Category::findOrFail($id);
       $category->delete();
       return redirect ()->back()->with('status', 'Category deleted');
     }
 
}
