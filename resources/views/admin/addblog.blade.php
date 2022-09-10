@extends("layouts.admin.master-admin")
@section("main")
                <section class="body">
                    <div class="container-fluid">
                        <d iv class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-title d-flex justify-content-between">
                                        <h3>بلاگ</h3>
                                        <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <span class="dropdown-menu dropdown-menu-left"
                                                  x-placement="bottom-start"
                                                  style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 22px, 0px);">
                                                                 <a href="#" class="dropdown-item">گزارش</a>
                                                                 <a href="#" class="dropdown-item">دانلود</a>
                                                                 <a href="#" class="dropdown-item">بستن</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-store">
                                        <form class="row">
                                            <div class="col-md-6">
                                                <label>
                                                    <input type="text" class="form-control  mb-4 mt-4"
                                                           placeholder=" عنوان خود را وارد کنید ">
                                                </label>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">متن اصلی</label>
                                                    <textarea class="form-control " id="exampleFormControlTextarea1"
                                                              rows="3"></textarea>

                                                </div>
                                                <div class="input-group mb-4 mt-4n">
                                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button">Button</button>
                                                    </div>
                                                </div>
                                                <label for="validationDefault03">کلمات کلیدی</label>
                                                <input type="text" class="form-control" id="validationDefault03"
                                                       required>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@endsection
