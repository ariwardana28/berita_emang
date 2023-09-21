

<footer>
    @inject('about','App\Models\About')

    <div class="footer-bottom-area">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                <i>Adaptif.id</i>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-menu f-right">
                            @php
                                    $tentangs = $about->all()
                            @endphp
                            <ul>
                                @foreach($tentangs as $tentang)
                                <li><a href="{!! route('tentang.index',$tentang->id) !!}">{!! $tentang->judul !!}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>


<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="{!! asset('assets/js/vendor/modernizr-3.5.0.min.js') !!}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{!! asset('assets/js/vendor/jquery-1.12.4.min.js') !!}"></script>
<script src="{!! asset('assets/js/popper.min.js') !!}"></script>
<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
<!-- Jquery Mobile Menu -->
<script src="{!! asset('assets/js/jquery.slicknav.min.js') !!}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{!! asset('assets/js/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('assets/js/slick.min.js') !!}"></script>
<!-- Date Picker -->
<script src="{!! asset('assets/js/gijgo.min.js') !!}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{!! asset('assets/js/wow.min.js') !!}"></script>
<script src="{!! asset('assets/js/animated.headline.js') !!}"></script>
<script src="{!! asset('assets/js/jquery.magnific-popup.js') !!}"></script>

<!-- Breaking New Pluging -->
<script src="{!! asset('assets/js/jquery.ticker.js') !!}"></script>
<script src="{!! asset('assets/js/site.js') !!}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{!! asset('assets/js/jquery.scrollUp.min.js') !!}"></script>
<script src="{!! asset('assets/js/jquery.nice-select.min.js') !!}"></script>
<script src="{!! asset('assets/js/jquery.sticky.js') !!}"></script>

<!-- contact js -->
<script src="{!! asset('assets/js/contact.js') !!}"></script>
<script src="{!! asset('assets/js/jquery.form.js') !!}"></script>
<script src="{!! asset('assets/js/jquery.validate.min.js') !!}"></script>
<script src="{!! asset('assets/js/mail-script.js') !!}"></script>
<script src="{!! asset('assets/js/jquery.ajaxchimp.min.js') !!}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{!! asset('assets/js/plugins.js') !!}"></script>
<script src="{!! asset('assets/js/main.js') !!}"></script>


</body>
</html>