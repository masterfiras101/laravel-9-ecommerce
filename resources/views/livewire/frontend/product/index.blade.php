<div>
    <div class="row">
        <div class="col-md-3">
            @if ($category->brands)

            <div class="card">
                <div class="card-header"><h4>الماركات</h4></div>
                <div class="card-body">
                @foreach ($category->brands as $brandItem )
                <label class="d-block">
                    <input type="checkbox" wire:model="brandInputs" value="{{$brandItem->name}}" >  {{$brandItem->name}}
                </label>
                @endforeach
                </div>
            </div>
            @endif

            <div class="card mt-3">
                <div class="card-header"><h4>السعر</h4></div>
                <div class="card-body">
                <label class="d-block">
                    <input type="radio" name="priceSort" wire:model="priceInput" value="high-to-low" /> من غالي الى رخيص
                </label>
                <label class="d-block">
                    <input type="radio" name="priceSort" wire:model="priceInput" value="low-to-high" /> من رخيص الى غالي
                </label>

                </div>
            </div>
        </div>

        <div class="col-md-9">

                <div class="row">
                    @forelse ($products as $productItem)
                    <div class="col-md-4">
                        <div class="check-quantity">
                            @if ($productItem->quantity >  0)
                            <s>{{$productItem->quantity}}</s>
                            <label id="stock-motwfer" class="stock bg-success ">متوفرة</label>
                            @else
                            <s>{{$productItem->quantity}}</s>
                            <label class="stock bg-danger">ليست متوفرة</label>
                            @endif
                        </div>
                        <div class="product-card">
                            <div class="product-card-img">
                                @if ($productItem->productImages->count() > 0)
                                <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                    <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{$productItem->name}}">
                                </a>
                                @endif
                            </div>
                            <div class="product-card-body">

                                <p class="product-brand">{{$productItem->brand}}</p>
                                <h5 class="product-name">
                                    <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                        {{$productItem->name}} : اسم المنتج
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price">${{$productItem->selling_price}}</span> السعر الحالي<br>
                                    <span class="original-price">${{$productItem->original_price}}</span>   السعر السابق
                                </div>

                            </div>
                        </div>
                    </div>

                    @empty
                    <div class="col-md-12">
                        <div class="p-2">
                            <h5> لايوجد منتج هنا من هذا الصنف   </h5>
                        </div>
                    </div>

                    @endforelse
            </div>
        </div>
    </div>
</div>
