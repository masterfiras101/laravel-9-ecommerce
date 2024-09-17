
    <div wire:ignore.self class="modal fade" id="AddBrandeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title " id="exampleModalLabel">اضافة ماركة</h4>
              <button type="button"  wire:click="CloseModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="StoreBrand">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>اختر صنف</label>
                            <select wire:model.defer="category_id" class="form-control">
                                <option value="">---اختر صنف المنتج---</option>
                                @foreach ($categories as $categoryItem)
                                <option value="{{$categoryItem->id}}">{{$categoryItem->name}}</option>
                                <option value="لايوجد Null">لايوجد صنف</option>
                                @endforeach
                            </select>
                            @error('category_id')<small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label>اسم الماركة</label>
                            <input type="text" wire:model.defer="name" class="form-control">
                            @error('name')<small class="text-danger">{{$message}}</small> @enderror

                        </div>
                        <div class="mb-3">
                            <label>تمييز الماركة</label>
                            <input type="text" wire:model.defer="slug"  class="form-control">
                        @error('slug')<small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label>الحالة</label> <br/>
                            <input type="checkbox" wire:model.defer="status" /> Checked=Heddin,Un-Checked=visible
                            @error('status')<small class="text-danger">{{$message}}</small> @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button"  wire:click="CloseModal"  class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                    <button type="submit"  class="btn btn-primary">حفظ</button>
                    </div>
                </form>


            </div>
        </div>
    </div>





 <!-- Update Brands Modal -->
<div wire:ignore.self class="modal fade" id="UpdateBrandeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title " id="exampleModalLabel">تعديل الماركة</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div wire:loading class="p-2">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">...يعالج</span>
                </div>...يعالج
            </div>
            <div wire:loading.remove>
            <form wire:submit.prevent="UpdateBrand">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>اختر الصنف</label>
                            <select wire:model.defer="category_id" class="form-control">
                                <option value="">---اختر صنف المنتج---</option>
                                <option value="لايوجد Null">لايوجد صنف</option>
                                @foreach ($categories as $categoryItem)
                                <option value="{{$categoryItem->id}}">{{$categoryItem->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')<small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label>اسم الماركة</label>
                            <input type="text" wire:model.defer="name" class="form-control">
                            @error('name')<small class="text-danger">{{$message}}</small> @enderror

                        </div>
                        <div class="mb-3">
                            <label>تمييز الماركة</label>
                            <input type="text" wire:model.defer="slug"  class="form-control">
                        @error('slug')<small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label>الحالة</label> <br/>
                            <input type="checkbox" wire:model.defer="status" /> Checked=Heddin,Un-Checked=visible
                            @error('status')<small class="text-danger">{{$message}}</small> @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" wire:click="CloseModal" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                    <button type="submit"  class="btn btn-primary">تعديل</button>
                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>





<!-- Delete Brand Modal-->
<div wire:ignore.self class="modal fade" id="DeleteBrandeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title " id="exampleModalLabel">حذف الماركة</h4>
            <button type="button" wire:click="CloseModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div wire:loading class="p-2">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">...يعالج</span>
                </div>...يعالج
            </div>
            <div wire:loading.remove>
            <form wire:submit.prevent="DestroyBrand">
                    <div class="modal-body">
                       <h4>هل انت متاكد من حذف هذه الماركة ؟</h4>
                    </div>
                    <div class="modal-footer">
                    <button type="button" wire:click="CloseModal"  class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                    <button type="submit"  class="btn btn-primary">نعم</button>
                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>




















