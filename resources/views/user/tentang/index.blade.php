@extends('layouts_user.menu')

@section('content')
    @inject('brt','App\Models\Berita')
    @inject('brt','App\Models\Berita')

    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                        </div>
                        <div class="blog_details">
                            <h2>{!! $tentang->judul !!}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#">{!! $tentang->nama !!}</a></li>
                            </ul>
                            <p class="excert">
                                {!! $tentang->text !!}
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    @include('layouts_user.right')
                </div>

            </div>
        </div>
    </section>
@endsection
