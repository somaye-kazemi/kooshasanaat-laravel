@extends("layouts.admin.master-admin")

@section("main")
    <form class="row" action="/admin/services/create" method="post" >
        @csrf

        <div class="col-md-6">
            <input type="text" class="form-control  mb-4 mt-4"
                   placeholder=" عنوان سرویس وارد کنید " name="title">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">توضیحات</label>

                <textarea class="form-control " id="exampleFormControlTextarea1"
                          rows="3" name="description"></textarea>

            </div>
            <div class="form-group">
                <label for="validationDefault03">کلمات کلیدی</label>
                <input type="text" class="form-control" id="validationDefault03" name="keywords" required>
            </div>
            <button class="btn btn-success mb-4 mt-4" type="submit">درج در سایت</button>
            <button class="btn btn-danger mb-4 mt-4" type="reset">حذف</button>

        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="imgUp mr-4">
                    <div class="imagePreview"></div>
                    <label class="btn btn-light">
                        <input type="file" class="uploadFile img"
                               value="Upload Photo"
                               style=overflow:hidden;>
                    </label>
                </div>

            </div>
        </div>
    </form>
@endsection
