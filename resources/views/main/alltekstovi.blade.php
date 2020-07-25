@extends('layouts.master')
@include('layouts.menu')
@section('content')
<section class="mainContent">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="widgetTitle">CATEGORY <span>/</span> LIFESTYLE</h3>
                    </div>
                </div>
                <div class="row">

                   @foreach($tekstovi as $tekstovi)
                   <div class="blogHlafWidth">
                    <div class="clearfix"></div>
                    <div class="col-lg-4">
                        <div class="singleBlog hlafWidth">
                            <div class="blogImg">
                             <img src="/assets/img/tekstovi/medium/{{ $tekstovi->image }}" alt="{{ $tekstovi->title }}">
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-8">
                    <div class="blogDec hlafWidthdec">
                        <h2 class="blogtitle">
                            <a href="/tekstovi/{{ $tekstovi->slug }}">{!! $tekstovi->title !!}</a>
                        </h2>
                        <p>{!! \Illuminate\Support\Str::limit(strip_tags($tekstovi->description),350, $end = '...' ) !!}</p>
                        <div class="blogMeta">
                            <a href="#"><i class="fa fa-user"></i>{{$tekstovi->user->name}}s</a>
                            <a href="#"> <i class="fa fa-clock-o"></i>{!!  $tekstovi->created_at !!}</a>
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