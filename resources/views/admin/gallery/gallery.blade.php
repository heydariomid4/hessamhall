@extends('admin.layouts.admin')
@section('style')
    <!--venobox lightbox-->
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/magnific-popup/dist/magnific-popup.css"/>

@endsection
@section('content')
    <div class="container">

        <!-- SECTION FILTER
        ================================================== -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="portfolioFilter">
                    <a href="#" data-filter="*" class="current waves-effect waves-custom">همه</a>
                    @foreach($category as $category)
                        <a href="#" data-filter=".{{ $category->english }}" class="waves-effect waves-custom">{{ $category->title }}</a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row port m-b-20">
            <div class="portfolioContainer">
                @foreach($gallery as $item)
                <div class="col-sm-6 col-lg-3 col-md-4 {{ $item->categorie->english }}">
                    <div class="gal-detail thumb">
                        <a href="{{ $item->path }}" class="image-popup" title="Screenshot-1">
                            <img src="{{ $item->path }}" class="thumb-img" alt="work-thumbnail">
                        </a>
                        <h4>{{ $item->title }}</h4>
                        <p class="text-muted">
                            @if($item->show == 1)
                                <span class="label label-warning">عمومی</span>
                            @else
                                <span class="label label-info">خصوصی</span>
                            @endif
                        </p>
                    </div>
                </div>
                @endforeach

            </div><!-- end portfoliocontainer-->
            {{ $gallery->links() }}

        </div> <!-- End row -->


    </div> <!-- container -->
@endsection
@section('plugin')
    <!-- isotope filter plugin -->
    <script type="text/javascript" src="{{ asset('') }}assets/plugins/isotope/dist/isotope.pkgd.min.js"></script>

    <!-- Magnific popup -->
    <script type="text/javascript" src="{{ asset('') }}assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
@endsection
@section('script')
    <script type="text/javascript">
        $(window).load(function(){
            var $container = $('.portfolioContainer');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });

            $('.portfolioFilter a').click(function(){
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');

                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });
        });
        $(document).ready(function() {
            $('.image-popup').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-fade',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                }
            });
        });
    </script>


@endsection
