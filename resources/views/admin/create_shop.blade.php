@extends("layouts.admin.master-admin")

@section("main")
    <form class="row" action="/admin/shop/create" method="post"
          enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
                <label>
                    <input type="text" class="form-control  mb-4 mt-4">
                </label>
                placeholder=" عنوان محصول وارد کنید " name="text">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">توضیحات</label>

                <textarea class="form-control " id="exampleFormControlTextarea1"
                          rows="3" name="numberBetween"></textarea>

            </div>
            <div class="form-group">
                <label for="validationDefault03">کلمات کلیدی</label>
                <input type="text" class="form-control" id="validationDefault03" name="keywords" >
            </div>
            <button class="btn btn-success mb-4 mt-4" type="submit">درج در سایت</button>
            <button class="btn btn-danger mb-4 mt-4" type="reset">حذف</button>

        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="imgUp mr-4">
                    <div class="imagePreview"></div>
                    <label class="btn btn-light">
                        <input name="image" type="file" class="uploadFile img"
                               value="Upload Photo"
                               style=overflow:hidden;>
                    </label>
                </div>

            </div>
        </div>
    </form>
@endsection
