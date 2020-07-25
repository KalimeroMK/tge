@extends('layouts.master')
@include('layouts.menu')
@section('content')
<section class="mainContent">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                 @foreach($eparhija as $eparhija)
                 <div class="blogHlafWidth">
                    <div class="clearfix"></div>
                    <div class="col-lg-4">
                        <div class="singleBlog hlafWidth">
                            <div class="blogImg">
                             <img src="/assets/img/eparhija/medium/{{ $eparhija->image }}" alt="{{ $eparhija->title }}">                                </div>
                         </div>
                     </div>
                     <div class="col-lg-8">
                        <div class="blogDec hlafWidthdec">
                            <h2 class="blogtitle">
                                <a href="/eparhija/{{ $eparhija->slug }}">{!! $eparhija->title !!}</a>
                            </h2>
                            <p>{!! \Illuminate\Support\Str::limit(strip_tags($eparhija->description),350, $end = '...' ) !!}</p>
                            <div class="blogMeta">
                                <a href="#"><i class="fa fa-user"></i>TavillaThemes</a>
                                <a href="#"> <i class="fa fa-clock-o"></i>18 March 2016</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</section>



@endsection