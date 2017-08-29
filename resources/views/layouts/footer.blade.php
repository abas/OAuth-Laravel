
<footer>
    <div class="container footer-top">

        <div class="row">

            <div class="col-md-3">
                <div class="footer-about">
                    <img class="footer-about-logo" src="#" />

                    <div class="clearfix"></div>

                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Contact Info </h4>
                    <ul class="contact-info">
                        akhmadbasir5@gmail.com
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">@lang('app.campaigns') </h4>
                    <ul class="contact-info">
                        <li><a href="#">start_a_campaign</a> </li>
                        <li><a href="#">app.discover_campaign</a> </li> 
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">@lang('app.about_us') </h4>
                    <ul class="contact-info">
                        <li><a href="{{route('home')}}">@lang('app.home')</a> </li>

                    </ul>
                </div>
            </div>

        </div><!-- #row -->
    </div>


    <div class="container footer-bottom">
        <div class="row">
            <div class="col-md-12">
                <p class="footer-copyright">OAuth</p>
            </div>
        </div>
    </div>


</footer>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>

<!-- Conditional page load script -->
@if(request()->segment(1) === 'dashboard')
    <script src="{{ asset('assets/plugins/metisMenu/dist/metisMenu.min.js') }}"></script>
    <script>
        $(function() {
            $('#side-menu').metisMenu();
        });
    </script>
@endif
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    var toastr_options = {closeButton : true};
</script>
<script>
    $('.box-campaign-lists').masonry({
        itemSelector : '.box-campaign-item'
    });
</script>
@yield('page-js')


</body>
</html>
