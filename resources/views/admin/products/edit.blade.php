@extends('layouts.admin')

@section('content')

<div class="row" style="font-weight: bold;">
    <div class="col-md-12 mb">
        @if(session('message'))
                <h5 class="alert alert-success mb-2">{{ session('message') }}</h5>
            @endif
        <div class="card">
            <div class="card-header">
                <h4>تعديل
                    <a href="{{url('admin/products')}}" class="btn btn-danger text-white float-end">
                        عودة
                    </a>
                </h4>
            </div>
        <div class="card-body">



            @if($errors->any())
            <div class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
    <form  action="{{url('admin/products/'.$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                الرئيسية</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="seotag-tab" data-bs-toggle="tab" data-bs-target="#seotag-tab-pane" type="button" role="tab" aria-controls="seotag-tab-pane" aria-selected="false">
                   التابعة لمحركات البحث
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane" aria-selected="false">
                    التفاصيل
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="false">
                    صورة المنتج
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="colors-tab" data-bs-toggle="tab" data-bs-target="#colors-tab-pane" type="button" role="tab" >
                    الوان المنتج
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="mb-3">
                                <label> صنف المنتج</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected':''}}>
                                    {{$category->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>اسم المنتج</label>
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label>تمييز المنتج كتابع لصنف</label>
                                <input type="text" name="slug"value="{{ $product->slug }}" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>اختر ماركة</label>
                                <select name="brand" class="form-control" >
                                    @foreach ($brands as $brand)
                                    <option value="{{$brand->name}}" {{$brand->name == $product->brand ? 'selected':''}}>
                                        {{$brand->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>وصف صغير للمنتج</label>
                                <textarea name="small_descriptioin"  class="form-control" rows="4">{{ $product->small_descriptioin }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label>وصف المنتج</label>
                                <textarea name="descriptioin"  class="form-control" rows="4">{{ $product->descriptioin }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade border p-3" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">
                            <div class="mb-3">
                                <label>عنوان وصفي</label>
                                <input type="text" name="meta_title"  value="{{ $product->meta_title }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="4">{{ $product->meta_description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label>Meta Keyword</label>
                                <textarea name="meta_keyword"  class="form-control" rows="4">{{ $product->meta_keyword }}</textarea>
                            </div>

                        </div>
                        <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>السعر السابق</label>
                                        <input type="text" name="original_price"  value="{{ $product->original_price }}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>السعر الحالي</label>
                                        <input type="text" name="selling_price"   value="{{ $product->selling_price }}" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>الكمية</label>
                                        <input type="number" name="quantity"  value="{{ $product->quantity }}" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>شائع</label>
                                        <input type="checkbox" name="trending" {{ $product->trending == '1' ? 'checked':'' }}  style="width: 20px; height: 20px;" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>الحالة</label>
                                        <input type="checkbox" name="status" {{ $product->status == '1' ? 'checked':'' }}  style="width: 20px; height: 20px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade border p-3 " id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                                <div class="mb-3">
                                    <label>رفع صورة للمنتج</label>
                                    <input type="file" name="image[]" multiple class="form-control" />
                                </div>
                                <div>
                                    @if ($product->productImages)
                                    <div class="row">
                                        @foreach ($product->productImages as $image)
                                        <div class="col-md-2">
                                            <img src="{{ asset($image->image) }}"style="width:80px;height:80px;"
                                            class="me-4 border" alt="Img" />
                                            <a href="{{ url('admin/product-image/'.$image->id.'/delete') }}" class="d-block">Remove</a>
                                        </div>
                                        @endforeach
                                    </div>
                                    @else
                                    <h5 style="color:black;font-size:20pt;">لم يتم اضافة صورة</h5>
                                    @endif
                                </div>
                        </div>
                        <div class="tab-pane fade border p-3 " id="colors-tab-pane" role="tabpanel"  tabindex="0">
                            <div class="mb-3">
                                <h4>اضف الوان المنتج</h4>
                                <label>اختر لون</label>
                                <hr/>
                                <div class="row">
                                    @forelse ($colors as $coloritem)
                                    <div class="col-md-3" >
                                        <div class="p-2 border mb-3">
                                            اللون :<input type="checkbox"  name="colors[{{$coloritem->id}}]" value="{{$coloritem->id}}" />
                                                {{$coloritem->name}}
                                                <br/>
                                            الكمية : <input type="number" name="colorquantity[{{$coloritem->id}}]" style="width:70px;border:1px solid black;">

                                        </div>
                                    </div>
                                    @empty
                                    <div class="col-md-12">
                                        <h2>لم يتم ايجاد لون</h2>
                                    </div>
                                    @endforelse
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>اسم اللون</th>
                                                <th>الكمية</th>
                                                <th>حذف</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product->productColors as $prodcolor)
                                            <tr class="prod-color-tr">
                                                @if ($prodcolor->color)
                                                <td>{{ $prodcolor->color->name}}</td>
                                                @else
                                                لم يتم ايجاد لون
                                                @endif
                                                <td>
                                                    <div class="input-group mb-3" style="width:150px;">
                                                        <input type="text" value="{{ $prodcolor->quantity}}" class="productColorquantity form-control form-control-sm">
                                                        <button type="button" value="{{ $prodcolor->id }}" class="updateProductColorBtn  btn btn-primary btn-sm text-white">Update</button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" value="{{ $prodcolor->id }}" class="deleteProductColorBtn btn btn-danger btn-sm text-white">Delete</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            <div class="py-2 float-end">
                                <button type="submit" class="btn btn-primary text-white">تعديل</button>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')

<script>
    $(document).ready(function (){
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click','.updateProductColorBtn',function (){
            var product_id = "{{ $product->id }}";
            var prod_color_id = $(this).val();
            var quant = $(this).closest('.prod-color-tr').find('.productColorquantity').val();
            // alert(prod_color_id);
            if(quant <= 0){
                alert('الكمية متطلبة');
                return false;
            }
            var data ={
                'product_id':product_id,
                'quant':quant
            };
            // 'prod_color_id':prod_color_id,
            $.ajax({
                type:"POST",
                url: "/admin/product-color/"+prod_color_id,
                data: data,
                success:function(response){
                    alert(response.message);
                }
            });
            // dataType:"",
        });
        $(document).on('click','.deleteProductColorBtn ',function (){
            var prod_color_id = $(this).val();
            var thisClick = $(this);
            $.ajax({
                type:"GET",
                url: "/admin/product-color/"+prod_color_id+"/delete",
                success:function(response){
                    thisClick.closest('.prod-color-tr').remove();
                    alert(response.message);
                }
            });
        });
    });

</script>


@endsection




