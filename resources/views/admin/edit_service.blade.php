@extends("layouts.admin.master-admin")

@section("main")
    <form class="row" action="/admin/services/{{$service->id}}" method="post" >
        @csrf
        @method("PUT")
        <div class="col-md-6">
            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <input type="text" class="form-control  mb-4 mt-4"
                   placeholder=" عنوان سرویس وارد کنید " name="title"
                   value={{$service->title}}
            >
            <div class="form-group">
                <label for="exampleFormControlTextarea1">توضیحات</label>

                <textarea class="form-control " id="exampleFormControlTextarea1"
                          rows="3" name="description" >{{$service->description}}</textarea>

            </div>
            <div class="form-group">
                <label for="validationDefault03">کلمات کلیدی</label>
                <input type="text" class="form-control" id="validationDefault03" name="keywords" >
            </div>
            <button class="btn btn-success mb-4 mt-4" type="submit">اصلاح</button>
            <button class="btn btn-danger mb-4 mt-4" type="reset">پاک کردن فرم</button>

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
