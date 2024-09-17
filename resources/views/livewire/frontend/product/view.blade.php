<div>
<div class="py-2 py-md-5">
    <div class="container">

            @if(session()->has('message'))

                <div class="alert alert-success">
                    {{session('message')}}
                </div>

            @endif

        <div class="row">
            <div class="col-md-5 mt-3">
                <div class="bg-white border">
                    @if ($product->productImages)
                    <img src="{{ asset($product->productImages[0]->image)}}"  class="w-100" alt="Img">
                    @else
                    لايوجد صورة
                    @endif
                </div>
            </div>
            <div class="col-md-7 mt-3">
                <div class="product-view">
                    <h4 class="product-name-view">
                        {{ $product->name }}
                    </h4>
                    <hr>
                    <p class="product-path">
                        Home / {{ $product->category->name}} / {{ $product->name}}
                    </p>
                    <div>
                        <span class="selling-price"> {{ $product->selling_price}}</span>
                        <span class="original-price"> {{ $product->original_price}}</span>
                    </div>
                    <div ><!--class="for-check-quantity_and_color"-->
                        @if($product->productColors->count() > 0)<!-- this condation for check about quantity of colors-->

                            @if($product->productColors)
                                @foreach ($product->productColors as $colorItem)
                                    <label class="colorSelectionLabel text-white" style="background-color: {{$colorItem->color->code}}"
                                        wire:click="colorSelected({{$colorItem->id}})">
                                        {{$colorItem->color->name}}
                                    </label>
                                @endforeach
                            @endif
                            <div>
                                @if ($this->productColorSelectedQunatity == 'outOfStock')
                                <label class="btn-sm py-1 mt-2 text-white bg-danger">هذا اللون  ليس موجود </label>
                                @elseif($this->productColorSelectedQunatity > 0)
                                <label class="btn-sm py-1 mt-2 text-white bg-success">{{$this->productColorSelectedQunatity}}  هذا اللون موجود بكمية</label>
                                @endif
                            </div>

                        @else
                                @if($product->quantity > 0)<!-- this condation for check about  quantity of product-->
                                <label class="btn-sm py-1 mt-2 text-white bg-success">{{$product->quantity}}  هذا المنتج في المخزن بكمية</label>
                                @else
                                <label class="btn-sm py-1 mt-2 text-white bg-danger">هذا المنتج ليس في المخزن </label>
                                @endif
                        @endif

                    </div>
                    <div class="mt-2">
                        <div class="input-group">
                            <span class="btn btn1" wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                            <input type="text" wire:model="quantityCount" value="{{$this->quantityCount}}" class="input-quantity">
                            <span class="btn btn1" wire:click="incrementQuantity"> <i class="fa fa-plus"></i></span>
                        </div>
                    </div>
                    <div class="mt-2">
                        <button  type="button" wire:click="addToCart({{$product->id }})" class="btn btn1">

                            <i class="fa fa-shopping-cart"></i>إضافة للكرت

                        </button>

                        <button type="button" wire:click="addToWishlist({{ $product->id }})" class="btn btn1">
                            <span wire:loading.remove wire:target="addToWishlist">
                                <i class="fa fa-heart"></i>إضافة للمفضلة
                            </span>
                            <span wire:loading wire:target="addToWishlist">...يضيف</span>
                        </button>
                    </div>
                    <div class="mt-3">
                        <h5 class="mb-0">وصف مصغرعن المنتج</h5>
                        <p>
                            {!! $product->small_descriptioin !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>الوصف</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                {!! $product->descriptioin !!}

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
