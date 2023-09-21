@inject('ktr','App\Models\Kategori')
@inject('drh','App\Models\Daerah')
@inject('brt','App\Models\Berita')
@inject('brtD','App\Models\BeritaDaerah')
@inject('ikln','App\Models\Iklan')
<div class="blog_right_sidebar">
    <aside class="single_sidebar_widget search_widget">
        <form action="{!! route('pencarian') !!}" method="post">
            @csrf
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder='Search Keyword' name="cari"
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Search Keyword'">
                    <div class="input-group-append">
                        <button class="btns" type="button"><i class="ti-search"></i></button>
                    </div>
                </div>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit">Search
            </button>
        </form>
    </aside>
    {{--    @if(Request::is('/*') ? 'active' : '' )--}}
    @php
        $iklan = $ikln->orderBy('created_at','DESC')->first();
    @endphp
    <aside class="single_sidebar_widget instagram_feeds">
        <h4 class="widget_title">Iklan</h4>
        <a href="#">
            <img class="img-fluid" src="{!! asset('data/iklan') !!}/{!! $iklan->foto !!}" alt="">

        </a>
    </aside>

    {{--@endif--}}

    <aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title">Berita Terbaru</h3>
        @php
            $beri = $brt->orderBy('created_at','DESC')->limit(5)->get();
        @endphp
        @foreach($beri as $item)
            <div class="media post_item">
                <img src="{!! asset('data/berita') !!}/{!! $item->foto !!}" alt="post"
                     style="width: 30%">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>{!! $item->judul !!}</h3>
                    </a>
                    <p>{!! date_format($item->created_at,"M d, Y") !!}</p>
                </div>
            </div>
        @endforeach

    </aside>
    <aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title">Berita Daerah</h3>
        @php
            $beriD = $brtD->orderBy('created_at','DESC')->limit(5)->get();
        @endphp
        @foreach($beriD as $item)
            <div class="media post_item">
                <img src="{!! asset('data/beritaDaerah') !!}/{!! $item->foto !!}" alt="post"
                     style="width: 30%">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>{!! $item->judul !!}</h3>
                    </a>
                    <p>{!! date_format($item->created_at,"M d, Y") !!}</p>
                </div>
            </div>
        @endforeach

    </aside>

    <aside class="single_sidebar_widget instagram_feeds">
        <h4 class="widget_title">Instagram Feeds</h4>
        <ul class="instagram_row flex-wrap">
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                </a>
            </li>
        </ul>
    </aside>


    <aside class="single_sidebar_widget newsletter_widget">
        <h4 class="widget_title">Newsletter</h4>

        <form action="#">
            <div class="form-group">
                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit">Subscribe
            </button>
        </form>
    </aside>
</div>
