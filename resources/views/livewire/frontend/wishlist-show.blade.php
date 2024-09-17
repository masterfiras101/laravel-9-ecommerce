<div>
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <h4 class="fa fa-heart" style="margin-left: 45%;font-size:25px;font-weight:bold" >المفضلة لديك</h4>
                    <br>
                    <br>

            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart" >

                    <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                        <div class="row">

                            <div class="col-md-6">
                                <h4>المنتج</h4>
                            </div>

                            <div class="col-md-2">
                                <h4>السعر</h4>
                            </div>


                            <div class="col-md-2">
                                <h4>حذف</h4>
                            </div>

                        </div>
                    </div>

                    @forelse ($wishlist as $wishlistItem)
                    @if ($wishlistItem->product)

                        <div class="cart-item" style="border: 1px solid rgb(68, 0, 255)">
                            <div class="row" >

                                <div class="col-md-6 my-auto" >
                                    <a href="{{url('collections/'.$wishlistItem->product->category->slug.'/'.$wishlistItem->product->slug)}}">
                                        <label class="product-name">
                                            <img src="{{$wishlistItem->product->productImages[0]->image}}"
                                                style="width: 50px; height: 50px"
                                                alt=" {{$wishlistItem->product->name}}">
                                            {{$wishlistItem->product->name}}
                                        </label>
                                    </a>
                                </div>

                                <div class="col-md-2 my-auto">
                                    <label class="price">$ {{$wishlistItem->product->selling_price}}</label>
                                </div>

                                <div class="col-md-4 col-12 my-auto">
                                    <div class="remove">
                                        <button type="button" wire:click="removeWishlistItem({{$wishlistItem->id}})" class="btn btn-danger btn-sm">
                                            <span wire:loading.remove wire:target="removeWishlistItem({{$wishlistItem->id}})">
                                                <i class="fa fa-trash"></i> حذف
                                            </span>
                                            <span wire:loading wire:target="removeWishlistItem({{$wishlistItem->id}})">
                                                <i class="fa fa-trash"></i> يحذف
                                            </span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endif

                    @empty
                        <h4>لم يتم اختيار اي شي  </h4>
                    @endforelse


                </div>
            </div>
        </div>

        </div>
    </div>
</div>

 {{-- <div class="col-md-2 col-7 my-auto">
                                    <div class="quantity">
                                        <div class="input-group">
                                            <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                            <input type="text" value="1" class="input-quantity" />
                                            <span class="btn btn1"><i class="fa fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div> --}}
