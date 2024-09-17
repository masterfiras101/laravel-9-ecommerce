<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    /* public function mount($products , $category)
    {
        $this->products = $products;
        $this->category = $category;
    }*/
    public $products,$category,$brandInputs = [],$priceInput;

    protected $queryString = [
            'brandInputs' => ['except' =>'', 'as' => 'brand'],
            'priceInput' => ['except' =>'', 'as' => 'brand'],
        ];




        // $this->products = $products;
    public function mount($category)
    {
        $this->category = $category;
    }



    public function render()
    {
        $this->products = Product::where('category_id',$this->category->id)
                        ->when($this->brandInputs, function ($quer){  //function for brands inputs
                            $quer->whereIn('brand',$this->brandInputs);
                        })
                        ->when($this->priceInput, function ($quer){ //this is a first condation for price

                        $quer->when($this->priceInput == 'high-to-low', function ($quer2){ // this is a second condation for price
                            $quer2->orderBy('selling_price','DESC');
                            })
                            ->when($this->priceInput == 'low-to-high', function ($quer2){ // this is a second condation for price
                                $quer2->orderBy('selling_price','ASC');
                                });
                        })
                        ->where('status','0')->get();

        return view('livewire.frontend.product.index',[
            'products' =>$this->products,
            'category' =>$this->category
        ]);
    }
}
