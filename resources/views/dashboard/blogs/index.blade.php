@extends('dashboard.layouts.app')
@section('content')
    <style>
        .form-group{
            direction: rtl;
            text-align: right
        }
    </style>
    <div class="content-wrapper" style="min-height: 1200.88px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>إدارة المحتويات</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right" style="direction: rtl">
                            <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                            <li class="breadcrumb-item active">المحتويات</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">قائمة المحتويات</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">إضافة محتوى جديد</a></li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="activity">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Responsive Hover Table</h3>

                                                <div class="card-tools">
                                                    <div class="input-group input-group-sm" style="width: 150px;">
                                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>الرقم</th>
                                                        <th>الصورة</th>
                                                        <th>الكاتب</th>
                                                        <th>عنوان المحتى</th>
                                                        <th>التصنيف</th>
                                                        <th>تاريخ الإضافة</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($blogs as $blog)
                                                        <tr>
                                                            <td>#{{$blog->id}}</td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <img class="profile-user-img img-fluid img-circle" @if($blog->image == null) src="{{asset('assets/dashboard/dist/img/user4-128x128.jpg')}}" @else src="{{url('public/' . $blog->image)}}"  @endif alt="User profile picture">
                                                                </div>
                                                            </td>
                                                            <td>{{$blog->user->name}}</td>
                                                            <td>{{$blog->title}}</td>
                                                            <td>{{$blog->category->name}}</td>
                                                            <td>{{$blog->created_at}}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="timeline">
                                <!-- The timeline -->
                                <form class="form-horizontal" action="{{route('addBlog')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">عنوان المحتوى</label>
                                        <div class="col-sm-10">
                                            <input type="title" class="form-control" name="title" placeholder="اكتب عنوان المحتى">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">التصنيف</label>
                                        <div class="col-sm-10">
                                            <select name="category" class="form-control">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">الصورة الرئيسية</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile"></label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">رفع</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-outline card-info">
                                        <div class="card-body pad">
                                            <div class="mb-3">
                                                <textarea name="body" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none; text-align: right; direction: rtl"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <div class="col col-md-3">
                                                <div class="form-check" style="direction: rtl;text-align: right;">
                                                    <input name="main" class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">    عرض في الصفحة الرئيسية</label>
                                                </div>
                                            </div>
                                            <div class="col col-md-3">
                                                <div class="form-check">
                                                    <input name="slider" class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">عرض في السلايدر الرئيسي</label>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">حفظ المحتوى</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.row -->
                <!-- /.row -->
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
