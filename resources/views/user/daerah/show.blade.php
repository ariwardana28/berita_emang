@extends('layouts_user.menu')

@section('content')

    @inject('brt','App\Models\Berita')
    @inject('kom','App\Models\KomenDaerah')

    <meta property="og:title" content="San Roque 2014 Pollos"/>
    <meta property="og:description" content="Programa de fiestas"/>
    <meta property="og:image" content="{!! asset('data/beritaDaerah') !!}/{!! $beritaDaerah->foto !!}"/>

    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{!! asset('data/beritaDaerah') !!}/{!! $beritaDaerah->foto !!}"
                                 alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{!! $beritaDaerah->judul !!}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> {!! $beritaDaerah->Daerah->nama !!}</a></li>
                                <li><a href="#"><i class="fa fa-eye"></i> {!! $beritaDaerah->view !!} View</a></li>
                            </ul>
                            <p class="excert">
                                {!! $beritaDaerah->berita !!}
                            </p>

                        </div>
                    </div>
                    {{--<div class="navigation-top">--}}
                    {{--<div class="d-sm-flex justify-content-between text-center">--}}
                    {{--<p class="like-info"><span class="align-middle">--}}
                    {{--<i class="fa fa-heart"></i>--}}
                    {{--</span>  </p>--}}
                    {{--<div class="col-sm-4 text-center my-2 my-sm-0">--}}
                    {{--<!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->--}}
                    {{--</div>--}}
                    {{--<ul class="social-icons">--}}
                    {{--<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fab fa-dribbble"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fab fa-behance"></i></a></li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="comments-area">
                        @php
                            $komens = $kom->where('berita_daerah_id',$berita_daerah_id)->get();
                            $count = $kom->where('berita_daerah_id',$berita_daerah_id)->count('berita_daerah_id');
                        @endphp
                        <h4>{!! $count !!} Comments</h4>
                        @foreach($komens as $komen)
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="desc">
                                            <p class="comment">
                                                {!! $komen->komen !!}
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="#">{!! $komen->nama !!}</a>
                                                    </h5>
                                                    <p class="date">{!! date_format($komen->created_at,"M d, Y") !!}
                                                        at {!! date_format($komen->created_at,"h:i") !!} </p>
                                                </div>
                                                <div class="reply-btn">
                                                    <a href="#" class="btn-reply text-uppercase"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="{!! route('komenDaerahs.store') !!}"
                              method="post"
                              id="commentForm">
                            @csrf
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="nama" id="name" type="text"
                                               placeholder="Name">
                                        <input class="form-control" name="berita_daerah_id" id="name" type="hidden"
                                               value="{!! $berita_daerah_id !!}" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email"
                                               placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                              <textarea class="form-control w-100" name="komen" id="comment" cols="30" rows="9"
                                        placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    @include('layouts_user.right')
                </div>

            </div>
        </div>
    </section>
@endsection

