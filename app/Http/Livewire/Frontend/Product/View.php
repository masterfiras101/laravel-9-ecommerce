<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Cart;
use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class View extends Component
{
    public $category,$product,$productColorSelectedQunatity,$quantityCount = 1,$productColorId;

    public function addToWishlist($productId)
    {
        // dd($productId);
        if(Auth::check()){

            if( Wishlist::where('user_id',auth()->user()->id)->where('product_id', $productId)->exists()){
                session()->flash('message','قد تمت إضافة المنتج الى المفضلة');
                $this->dispatchBrowserEvent('message',[
                    'text' =>'قد تمت إضافة المنتج الى المفضلة',
                    'type' => 'warning',
                    'status' => 409
                ]);
                return false;

            }
            else{

                $wishlist = Wishlist::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $productId
                ]);
                session()->flash('message',' اضيف الى المفضلة بنجاح');
                $this->dispatchBrowserEvent('message',[
                    'text' =>' اضيف المنتج الى المفضلة بنجاح' ,
                    'type' => 'success',
                    'status' => 200
                ]);

            }

        }
        else{
            session()->flash('message',' من فضلك قم بتسجيل الدخول اولا');

            $this->dispatchBrowserEvent('message',[
                'text' => ' من فضلك قم بتسجيل الدخول اولا' ,
                'type' => 'info',
                'status' => 401
            ]);
            return false;
        }
    }

    public function colorSelected($productColorId)
    {
        // dd($productColorId);
        $this->productColorId = $productColorId;
        $productColor = $this->product->productColors()->where('id',$productColorId)->first();
        $this->productColorSelectedQunatity = $productColor->quantity;

        if($this->productColorSelectedQunatity == 0){
            $this->productColorSelectedQunatity = 'outOfStock';
        }

    }

    public function incrementQuantity()
    {
        if($this->quantityCount < 10){

            $this->quantityCount++;
        }
    }

    public function decrementQuantity()
    {
        if($this->quantityCount > 1){

            $this->quantityCount--;

        }

    }

    public function addToCart(int $productId)
    {
        if(Auth::check())
        {

            if($this->product->where('id',$productId)->where('status','0')->exists())
            {
                //check for product color quantity and add to cart
                if($this->product->productColors()->count() > 1){

                    if($this->productColorSelectedQunatity != NULL)
                    {
                        if(Cart::where('user_id',auth()->user()->id)
                            ->where('product_id',$productId)
                            ->where('product_color_id',$this->productColorId)
                            ->exists())
                        {
                            $this->dispatchBrowserEvent('message',[
                                'text' => 'قد تمت إضافة المنتج الى الكرت من قبل' ,
                                'type' => 'warning',
                                'status' => 200
                            ]);
                        }
                        else
                        {

                            $productColor = $this->product->productColors()->where('id',$this->productColorId)->first();
                            if($productColor->quantity > 0)
                            {

                                if($productColor->quantity > $this->quantityCount){

                                    //insert product to cart
                                    Cart::create([
                                        'user_id' => auth()->user()->id,
                                        'product_id' => $productId,
                                        'product_color_id'=> $this->productColorId,
                                        'quantity'=> $this->quantityCount
                                    ]);
                                    $this->emit('CartAddedUpdated');
                                    $this->dispatchBrowserEvent('message',[
                                        'text' => 'تمت إضافة هذ المنتج إلى الكرت',
                                        'type' => 'success',
                                        'status' =>200
                                    ]);
                                }
                                else{
                                    $this->dispatchBrowserEvent('message',[
                                        'text' => 'لايوجد سوى' .$productColor->quantity. 'قطعة من  هذا اللون ',
                                        'type' => 'warning',
                                        'status' => 404
                                    ]);
                                }

                            }
                            else
                            {
                                $this->dispatchBrowserEvent('message',[
                                    'text' => 'لاتوجد هذة الكمية لدينا',
                                    'type' => 'warning',
                                    'status' => 404
                                ]);
                            }

                        }


                    }
                    else
                    {
                            $this->dispatchBrowserEvent('message',[
                                'text' => 'إختر لون المنتج',
                                'type' => 'info',
                                'status' => 404
                            ]);
                    }
                }
                else
                {

                    if(Cart::where('user_id',auth()->user()->id)->where('product_id',$productId)->exists())
                    {

                        $this->dispatchBrowserEvent('message',[
                            'text' => 'قد تمت إضافة المنتج الى الكرت من قبل' ,
                            'type' => 'warning',
                            'status' => 404
                        ]);

                    }
                    else
                    {

                        if($this->product->quantity > 0){

                                if($this->product->quantity > $this->quantityCount){

                                    //insert product to cart
                                    Cart::create([
                                        'user_id' => auth()->user()->id,
                                        'product_id' => $productId,
                                        'quantity'=> $this->quantityCount
                                    ]);

                                    $this->emit('CartAddedUpdated');
                                    $this->dispatchBrowserEvent('message',[
                                        'text' => 'تمت إضافة هذ المنتج إلى الكرت',
                                        'type' => 'success',
                                        'status' =>200
                                    ]);



                                }else{
                                    $this->dispatchBrowserEvent('message',[
                                        'text' => 'لايوجد سوى'.$this->product->quantity.'من  هذاالمنتج',
                                        'type' => 'warning',
                                        'status' => 404
                                    ]);
                                }
                        }
                        else{
                            $this->dispatchBrowserEvent('message',[
                                'text' => ' هذة الكمية ليست متوفرة',
                                'type' => 'warning',
                                'status' => 404
                            ]);
                        }
                    }
                }
            }
            else
            {

                $this->dispatchBrowserEvent('message',[
                    'text' => 'product  dose note exists' ,
                    'type' => 'warning',
                    'status' => 404
                ]);

            }

        }
        else
        {

            $this->dispatchBrowserEvent('message',[
                'text' => ' من فضلك قم بتسجيل الدخول اولاً للإضافة الى الكرت' ,
                'type' => 'info',
                'status' => 401
            ]);

        }
    }


    public function mount($category,$product)
    {
        $this->category = $category;
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.frontend.product.view',[
            'category' => $this->category,
            'product' => $this->product,
        ]);
    }
}






