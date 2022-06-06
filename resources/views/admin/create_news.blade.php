

@extends("layouts.admin.master-admin")

@section("main")
    <form class="row">
        <div class="col-md-6">
            <input type="text" class="form-control  mb-4 mt-4"
                   placeholder=" تیتر خبر را وارد کنید ">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">متن اصلی</label>
                <textarea class="form-control " id="exampleFormControlTextarea1"
                          rows="3"></textarea>

            </div>
          <div class="form-group">
              <label for="validationDefault03">کلمات کلیدی</label>
              <input type="text" class="form-control" id="validationDefault03"
                     required>
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
