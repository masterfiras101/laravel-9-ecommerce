
<div>

<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">تفاصيل الصنف</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="destroyCategory">
                <div class="modal-body">
                <h6> هل انت متاكد من حذف هذا الصنف ؟</h6>
                </div>
                <div class="modal-footer">
                <button type="button" id="i" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                <button type="submit" id="i" class="btn btn-primary">نعم</button>
                </div>
        </form>

        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-12">

        @if(session('message'))
                <div class="alert alert-success">{{ session('message')}}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>الصنف
        <a href="{{url('admin/category/create')}}" id="i"class="btn btn-primary btn-sm float-end">اضافة صنف</a>
                </h3>
            </div>
                <div class="card-body">
                <table class="table table-bordered  table-striped">
                    <thead>
                        <tr>
                            <th>رقم</th>
                            <th>اسم الصنف</th>
                            <th>الحالة</th>
                            <th>الحدث</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)

                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->status == '1' ? 'hidden':'visible' }}</td>
                            <td>
                                <a href="{{ url('admin/category/'.$category->id.'/edit') }}" class="btn btn-success">تعديل</a>
                                <a href="#" wire:click="deleteCategory({{$category->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">حذف</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>

                </table>
                <div>

                    {{ $categories->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')

    <script>
        window.addEventListener('close-modal',event=> {
            $('#deleteModal').modal('hide');
        });
    </script>

@endpush


