@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 mb">
        <div class="card">
            <div class="card-header">
                <h4>اضافة
                    <a href="{{url('admin/products')}}" class="btn btn-danger text-white float-end">
                        تعديل
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

            <form action="{{url('admin/products')}}" method="POST" enctype="multipart/form-data">
                @csrf
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
                        <button class="nav-link" id="color-tab" data-bs-toggle="tab" data-bs-target="#color-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="false">
                            الوان المنتج
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="mb-3">
                                        <label>صنف المنتج</label>
                                        <select name="category_id" class="form-control">
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>اسم المنتج</label>
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                    <div class="mb-3">
                                        <label>تمييز المنتج كتابع لصنف</label>
                                        <input type="text" name="slug" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label>اختر الماركة</label>
                                        <select name="brand" class="form-control" >
                                            @foreach ($brands as $brand)
                                            <option value="{{$brand->name}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>وصف صغير للمنتج</label>
                                        <textarea name="small_descriptioin" class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label>وصف المنتج</label>
                                        <textarea name="descriptioin" class="form-control" rows="4"></textarea>
                                    </div>

                                </div>
                                <div class="tab-pane fade border p-3" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">
                                    <div class="mb-3">
                                        <label>عنوان وصفي</label>
                                        <input type="text" name="meta_title" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Meta Description</label>
                                        <textarea name="meta_description" class="form-control" rows="4"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label>Meta Keyword</label>
                                        <textarea name="meta_keyword" class="form-control" rows="4"></textarea>
                                    </div>

                                </div>
                                <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>السعر السابق</label>
                                                <input type="text" name="original_price" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>السعر الحالي</label>
                                                <input type="text" name="selling_price" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>الكمية</label>
                                                <input type="number" name="quantity" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>شائع</label>
                                                <input type="checkbox" name="trending" style="width: 20px; height: 20px;" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>الحالة</label>
                                                <input type="checkbox" name="status"  style="width: 20px; height: 20px;" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade border p-3 " id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                                        <div class="mb-3">
                                            <label>رفع صورة للمنتج</label>
                                            <input type="file" name="image[]" multiple class="form-control" />
                                        </div>
                                    </div>
                                    <div class="tab-pane fade border p-3 " id="color-tab-pane" role="tabpanel" aria-labelledby="color-tab" tabindex="0">
                                        <div class="mb-3">
                                            <label>اختر اللون</label>
                                            <div class="row">
                                                @forelse ($colors as $coloritem)
                                                <div class="col-md-3" >
                                                    <div class="p-2 border mb-3">
                                                        اللون:<input type="checkbox"  name="colors[{{ $coloritem->id }}]" value="{{$coloritem->id}}" />
                                                            {{$coloritem->name}}
                                                            <br/>
                                                        الكمية : <input type="number" name="colorquantity[{{$coloritem->id}}]" style="width:70px;border:1px solid black;">

                                                    </div>
                                                </div>

                                                @empty
                                                <div class="col-md-12">
                                                    <h2>لم يتم ايجاد اي لون</h2>
                                                </div>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            <div>
                                <button type="submit" class="btn btn-primary">حفظ</button>
                            </div>
                        </form>

            </div>

        </div>
    </div>
</div>



@endsection
