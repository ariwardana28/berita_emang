@extends('layouts_user.menu')

@section('content')
<main>
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3>{!! $daerah->nama !!}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach($beritaDaerahs as $berita)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0"
                                         src="{!! asset('data/beritaDaerah') !!}/{!! $berita->foto !!}"
                                         alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>{!! date_format($berita->created_at,"d") !!}</h3>
                                        <p>{!! date_format($berita->created_at,"M") !!}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{!! route('daerah.show',$berita->id) !!}">
                                        <h2>{!! $berita->judul !!}</h2>
                                    </a>

                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> {!! $daerah->nama !!}</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-eye"></i> {!! $berita->view !!}</a></li>
                                    </ul>
                                </div>

                            </article>
                        @endforeach
                    </div>
                </div>
                <br>

                <div class="col-lg-4">
                    @include('layouts_user.right')
                </div>
            </div>
        </div>
    </section>


</main>
@endsection
