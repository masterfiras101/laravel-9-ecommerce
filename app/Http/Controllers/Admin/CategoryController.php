<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }

    public function create(){
        return view('admin.category.create');

    }



    public function store(CategoryFormRequest $request){

        $validateData= $request->validated();

        $category = new Category;
        $category->name=$validateData['name'];

        $category->slug=Str::slug($validateData['slug']);

        $category->description=$validateData['description'];


        $uploadpath = 'uploads/category/';

        if($request->hasFile('image')){

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();

            $filename = time().'.'.$ext;
            $file->move('uploads/category/',$filename);
            $category->image=$uploadpath.$filename;
        }
        $category->meta_title=$validateData['meta_title'];
        $category->meta_keyword=$validateData['meta_keyword'];
        $category->meta_description=$validateData['meta_description'];

        $category->status=$request->status == True ? '1':'0';
        $category->save();



        return redirect('admin/category')->with('message','Category added succefully');
    }


    public function edit(Category $category){

        return view('admin.category.edit',compact('category'));
        // return $category;

    }

    public function update(CategoryFormRequest $request , $category){

        $validateData= $request->validated();

        $category= Category::findOrFail($category);


        $category->name=$validateData['name'];
        $category->slug=Str::slug($validateData['slug']);
        $category->description=$validateData['description'];

        if($request->hasFile('image')){

                $uploadpath = 'uploads/category/';

                $path = 'uploads/category/'.$category->image;

                    if(File::exists($path)){
                        File::delete($path);
                    }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();

            $filename=time().'.'.$ext;
            $file->move('uploads/category/',$filename);
            $category->image =$uploadpath.$filename;
        }

        $category->meta_title=$validateData['meta_title'];
        $category->meta_keyword=$validateData['meta_keyword'];
        $category->meta_description=$validateData['meta_description'];

        $category->status=$request->status == True ? '1':'0';
        $category->update();


        return redirect('admin/category')->with('message','Category Updated succefully');

    }



}
