<div>
        @include('livewire.admin.brand.modal-form')

          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                        <h4>
                            قائمة الماركات
                            <a href="#"data-bs-toggle="modal" data-bs-target="#AddBrandeModal" class="btn btn-primary text-white float-end btn-sm">اضافة ماركة</a>
                        </h4>
                      </div>
                      <div class="card-body">
                          <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>الرقم</th>
                                    <th>الاسم</th>
                                    <th>الصنف</th>
                                    <th>النوع</th>
                                    <th>الحاله</th>
                                    <th>الحدث</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($brands as $brand)
                                <tr>
                                    <td>{{$brand->id}}</td>
                                    <td>{{$brand->name}}</td>
                                    <td>
                                        @if ($brand->category)
                                        {{$brand->category->name}}
                                        @else
                                            لايوجد صنف منتج
                                        @endif
                                    </td>
                                    <td>{{$brand->slug}}</td>
                                    <td>{{$brand->status == '1' ? 'hidden':'visible' }}</td>
                                    <td>
                                        <a href="#" wire:click="editBrand({{$brand->id}})" data-bs-toggle="modal" data-bs-target="#UpdateBrandeModal" class="btn btn-sm btn-success">تحرير</a>
                                        <a href="#" wire:click="DeleteBrand({{$brand->id}})"data-bs-toggle="modal" data-bs-target="#DeleteBrandeModal" class="btn btn-sm btn-danger">حذف</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5">لاتوجد اي ماركة</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $brands->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@push('script')

    <script>
        window.addEventListener('close-modal', event=> {
            $('#AddBrandeModal').modal('hide');
            $('#UpdateBrandeModal').modal('hide');
            $('#DeleteBrandeModal').modal('hide');
        });
    </script>

@endpush
