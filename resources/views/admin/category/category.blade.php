@extends('admin.layouts.admin')
@section('style')


@endsection
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">ایجاد دسته بندی</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data"
                              class="form-horizontal" role="form">
                            @method('POST')
                            @csrf
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">عنوان</label>
                                    <div class="col-md-10">
                                        <input name="title" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">عنوان انگلیسی</label>
                                    <div class="col-md-10">
                                        <input name="english" type="text" class="form-control">
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="form-group">
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-success waves-effect w-md waves-light m-b-5">
                                        ثبت
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div><!-- end row -->
                </div>
            </div><!-- end col -->
            <div class="col-sm-12">
                <div class="card-box">

                    <h4 class="header-title m-t-0 m-b-30">لیست دسته بندی ها</h4>

                    <table class="table table-striped m-0">
                        <thead>
                        <tr>
                            <th>عنوان</th>
                            <th>عنوان انگلیسی</th>
                            <th style="width: 160px">#</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->english }}</td>
                                <td>

                                    <form action="{{ route('category.destroy', $item->id) }}" method="post" id="delete-category-{{ $item->id }}">
                                        @csrf
                                        @method('DELETE')

                                    </form>

                                    <a onclick="event.preventDefault(); document.getElementById('delete-category-{{ $item->id }}').submit()" href="#"
                                       class="btn btn-icon waves-effect waves-light btn-danger"> <i
                                            class="fa fa-remove"></i> </a>

                                    <a href="{{ route('category.edit', $item->id) }}"
                                       class="btn btn-icon waves-effect waves-light btn-warning"> <i
                                            class="fa fa-wrench"></i> </a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- container -->
@endsection
@section('plugin')

@endsection
@section('script')

@endsection
