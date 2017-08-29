
<footer style="margin-top:23%;">
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
                    <h4 class="">Contact Info </h4>
                    <ul class="contact-info">
                        akhmadbasir5@gmail.com
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-widget">
                    <h4 class="">OAuth Service Login</h4>
                    <ul class="contact-info">
                        <li><a href="https://developers.facebook.com">Facebook</a></li>
                        <li><a href="https://developers.google.com">Google</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-widget">
                    <h4 class="">Email Forward Service</h4>
                    <ul class="contact-info">
                        <li><a href="https://mailgun.com">mailgun</a></li>
                        <li><a href="https://mailtrap.com">mailtrap</a></li>
                    </ul>
                </div>
            </div>

        </div><!-- #row -->
    </div>


    <div class="container footer-bottom">
        <div class="row">
            <div class="col-md-12">
                <p class="footer-copyright">&copy; OAuth by <a href="https://github.com/ahmadbasir/OAuth-Facebook"><b>Abas_</b></a></p>
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
