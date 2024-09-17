<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Wishlist;

class WishlistShow extends Component
{

    public $d;
    public function removeWishlistItem(int $wishlistId)
    {
        Wishlist::where('user_id',auth()->user()->id)->where('id',$wishlistId)->delete();
        session()->flash('message','تم حذف المنتج من المفضلة');
        $this->dispatchBrowserEvent('message',[
            'text' =>'تم حذف المنتج من المفضلة' ,
            'type' => 'success',
            'status' => 200
        ]);
    }

    public function render()
    {
        $wishlist = Wishlist::where('user_id', auth()->user()->id)->get();
        return view('livewire.frontend.wishlist-show',[
            'wishlist' => $wishlist
        ]);
    }
}
