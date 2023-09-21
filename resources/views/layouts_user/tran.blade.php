@inject('brt','App\Models\Berita')
@inject('ktgr','App\Models\Kategori')
@php
    $max = $brt->max('view');
    $berita = $brt->where('view',$max)->first();
    $trandings = $brt->where('view','<',$max)->limit(4)->get();

    $kategoris = $ktgr->all();
@endphp
<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>Trending now</strong>
                        <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                        <div class="trending-animated">
                            <ul id="js-news" class="js-hidden">
                                @foreach($trandings as $tranding)
                                    <li class="news-item">{!! $tranding->judul !!}</li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <!-- Trending Top -->
                    <div class="trending-top mb-30">
                        <div class="trend-top-img">
                            <img src="{!! asset('data/berita') !!}/{!! $berita->foto !!}" alt="">
                            <div class="trend-top-cap">
                                <span>{!! $berita->Kategori->nama !!}</span>
                                <h2 style="width:90%"><a href="{!! route('kategori.show',$berita->id) !!}">{!! $berita->judul !!}</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            @foreach($trandings as $tranding)
                                <div class="col-lg-3">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{!! asset('data/berita') !!}/{!! $tranding->foto !!}"  alt="" style="max-height: 100px">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color1">{!! $tranding->Kategori->nama !!}</span>
                                            <h4><a href="{!! route('kategori.show',$tranding->id) !!}">{!! $tranding->judul !!}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{--<div class="col-lg-4">--}}
                                {{--<div class="single-bottom mb-35">--}}
                                    {{--<div class="trend-bottom-img mb-30">--}}
                                        {{--<img src="assets/img/trending/trending_bottom2.jpg" alt="">--}}
                                    {{--</div>--}}
                                    {{--<div class="trend-bottom-cap">--}}
                                        {{--<span class="color2">Sports</span>--}}
                                        {{--<h4><h4><a href="details.html">Get the Illusion of Fuller Lashes by--}}
                                                    {{--“Mascng.”</a></h4></h4>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-4">--}}
                                {{--<div class="single-bottom mb-35">--}}
                                    {{--<div class="trend-bottom-img mb-30">--}}
                                        {{--<img src="assets/img/trending/trending_bottom3.jpg" alt="">--}}
                                    {{--</div>--}}
                                    {{--<div class="trend-bottom-cap">--}}
                                        {{--<span class="color3">Travels</span>--}}
                                        {{--<h4><a href="details.html"> Welcome To The Best Model Winner Contest</a></h4>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>