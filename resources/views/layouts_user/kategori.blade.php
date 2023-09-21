@inject('brt','App\Models\Berita')
@inject('ktgr','App\Models\Kategori')
@php
    $berita = $brt->where('created_at','desc')->get();

    $kategoris = $ktgr->all();
@endphp

<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach($kategoris as $kategori)
                        @php
                            // $beritas = $brt->where('kategori_id',$kategori->id)->OrderBy('created_at','desc')->limit(4)->get();
                             $beritas = $brt->OrderBy('created_at','desc')->limit(4)->get();
                             $max = $brt->where('kategori_id',$kategori->id)->max('view');

                             $up = $brt->where('view',$max)->where('kategori_id',$kategori->id)->first();
                        @endphp
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-tittle mb-30">
                                            <div style="float: left">
                                                <h3>{!! $kategori->nama !!}</h3>

                                            </div>
                                            <div style="float: right">
                                                <a href="{!! route('kategori.index',$kategori->id) !!}"
                                                   class="badge bg-danger">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0"
                                             src="{!! asset('data/berita') !!}/{!! $up->foto !!}"
                                             alt="">
                                        <a href="#" class="blog_item_date">
                                            <h3>{!! date_format($up->created_at,"d") !!}</h3>
                                            <p>{!! date_format($up->created_at,"M") !!}</p>
                                        </a>
                                    </div>

                                    <div class="blog_details">
                                        <a class="d-inline-block" href="{!! route('kategori.show',$up->id) !!}">
                                            <h2>{!! $up->judul !!}</h2>
                                        </a>

                                        <ul class="blog-info-link">
                                            <li><a href="#"><i class="fa fa-user"></i> {!! $kategori->nama !!}</a></li>
                                            <li><a href="#"><i class="fa fa-eye"></i> 03 view</a></li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="trending-area fix">
                                        <div class="container">
                                            <div class="trending-tittle">
                                                @foreach($beritas as $berita)
                                                    <div class="col-lg-3">
                                                        <div class="single-bottom mb-35">
                                                            <div class="trend-bottom-img mb-30">
                                                                <img src="{!! asset('data/berita') !!}/{!! $berita->foto !!}"
                                                                     alt="" style="max-height: 100px">
                                                            </div>
                                                            <div class="trend-bottom-cap">
                                                                <span class="color1">{!! $berita->Kategori->nama !!}</span>
                                                                <h6 style="font-size: 12px"><a
                                                                            href="{!! route('kategori.show',$berita->id) !!}">{!! $berita->judul !!}</a>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <br>
                    @endforeach

                </div>
            </div>
            <div class="col-lg-4">
                @include('layouts_user.right')
            </div>
        </div>
    </div>
</section>

