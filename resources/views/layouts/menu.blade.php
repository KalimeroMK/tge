@section('menu')
<!--Header Start-->
<section class="headerTop">
    <div class="container">
        <div class="row">

            <div class="text-center">
                <div class="logo">
                    <a href="/"><img src="/assets/img/logo/{{ $settings->logo }}" alt="logo"></a>
                </div>
            </div>

        </div>
    </div>
</section>
<header class="header">
    <div class="container">
        <div class="headerIn">
            <div class="row">
                <div class="col-lg-8 col-sm-9 col-xs-12 pull-left noPaddingRight">
                    <nav class="mainNav">
                        <div class="menuBar hidden-lg hidden-md">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <ul>
                            <li class="has-menu-items"><a href="/">Почетна</a></li>
                                {{-- @foreach($staticpages as $staticpage)
                                    <li class="has-menu-items"><a
                                                href="/{{ $staticpage->slug }}">{{ $staticpage->title }}</a></li>
                                                @endforeach --}}
                                                {{--   {!! $tree !!} --}}
                                                <li class="has-menu-items"><a href="/josif-mitropolit-tetovski-gostivarski">Митрополит</a>
                                                    <li class="has-menu-items"><a href="javascript:void('0')">Епархија</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="/eparhija/tsrkva-sv-petka-i-sv-nedela-tetovo">Црква „Св. Петка и
                                                            Св. Недела“ – Тетово</a></li>
                                                            <li><a href="/eparhija/tsrkva-sv-dimitrij-tetovo">Црква „Св. Димитриј“ –
                                                            Тетово</a></li>
                                                            <li><a href="/eparhija/tsrkva-sv-bogoroditsa-tetovo">Црква „Св. Богородица“ –
                                                            Тетово</a></li>
                                                            <li><a href="/eparhija/tsrkva-sv-atanasij-tetovo">Црква „Св. Атанасиј“ –
                                                            Тетово</a></li>
                                                            <li><a href="/eparhija/tsrkva-sv-petka-gostivar">Црква „Св. Петка“ –
                                                            Гостивар</a></li>
                                                            <li><a href="/eparhija/tsrkva-sv-dimitrija-gostivar">Црква „Св. Димитрија“ –
                                                            Гостивар</a></li>


                                                        </ul>
                                                        <li class="has-menu-items"><a href="/tekstovi/all">Tекстови</a></li>

                                                    </li>

                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="col-lg-4 col-sm-3 col-xs-8 pull-right text-right">
                                            <div class="socialHeader">
                                                @if($settings->twitter)
                                                <a target="_blank" href="{{ $settings->twitter }}"><i
                                                    class="fa fa-twitter"></i></a>
                                                    @endif
                                                    @if($settings->skype)
                                                    <a target="_blank" href="{{ $settings->skype }}"><i
                                                        class="fa fa-skype"></i></a>
                                                        @endif
                                                        @if($settings->linkedin)
                                                        <a target="_blank" href="{{ $settings->linkedin }}"><i
                                                            class="fa fa-linkedin"></i></a>
                                                            @endif
                                                            @if($settings->gplus)
                                                            <a target="_blank" href="{{$settings->gplus}}"><i
                                                                class="fa fa-google-plus"></i></a>
                                                                @endif
                                                                @if($settings->youtube)
                                                                <a target="_blank" href="{{$settings->youtube}}"><i
                                                                    class="fa fa-youtube-play"></i></a>
                                                                    @endif
                                                                    @if($settings->flickr)
                                                                    <a target="_blank" href="{{ $settings->flickr }}"><i
                                                                        class="fa fa-flickr"></i></a>
                                                                        @endif
                                                                        @if($settings->facebook)
                                                                        <a target="_blank" href="{{ $settings->facebook }}"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                            @endif
                                                                            @if($settings->pinterest)
                                                                            <a target="_blank" href="{{$settings->pinterest}}"><i
                                                                                class="fa fa-pinterest"></i></a>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </header>

                                                        <!--Header End-->


                                                        @endsection
