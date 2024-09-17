<?php

namespace App\Http\Livewire\Admin\Category;

use bootstrap;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;


class Index extends Component
{
    use WithPagination;
    public $category_id;

    protected $paginationTheme = 'bootstrap';

     public function deleteCategory($category_id)
     {
         $this->category_id=$category_id;
     }

     public function destroyCategory()
     {
          $category= Category::find($this->category_id);
          $path = 'uploads/category/'.$category->image;
          if(File::exists($path)){
              File::delete($path);
          }
            $category->delete();
            session()->flash('message',' category is deleted');
            $this->dispatchBrowserEvent('close-modal');
     }


    public function render()
    {

        $categories = Category::orderBy('id','DESC')->paginate(2);
        return view('livewire.admin.category.index',['categories' => $categories]);

    }
}
