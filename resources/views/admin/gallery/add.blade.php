@extends('admin.layouts.admin')
@section('style')
    <!-- form Uploads -->
    <link href="{{ asset('assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Plugins css-->
    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>

@endsection
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">ایجاد گالری</h4>
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
                        <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data"
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
                                    <label class="col-md-2 control-label">بخش</label>
                                    <div class="col-md-10">
                                        <select name="category" class="form-control">
                                            @foreach($category as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="example-email">نمایش ؟</label>
                                    <div class="col-md-10">
                                        <input name="show" type="checkbox" checked data-plugin="switchery"
                                               data-color="#00b19d"/>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-lg-6">
                                <input name="path" type="file" class="dropify" data-height="300"/>
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
        </div>
        <!-- end row -->
    </div> <!-- container -->
@endsection
@section('plugin')
    <!-- file uploads js -->
    <script src="{{ asset('assets/plugins/fileuploads/js/dropify.min.js') }}"></script>
    <!-- Plugins Js -->
    <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
@endsection
@section('script')

    <script type="text/javascript">
        $('.dropify').dropify({
            messages: {
                'default': 'فایل را به اینجا بکشید یا کلیک کنید',
                'replace': 'برای جایگزینی فایل را به اینجا بکشید یا کلیک کنید',
                'remove': 'پاک کردن',
                'error': 'با پوزش فراوان، خطایی رخ داده'
            },
            error: {
                'fileSize': 'حجم فایل بیشتر از حد مجاز است (1M).'
            }
        });
    </script>

@endsection
