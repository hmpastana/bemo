<!-- Footer -->
<footer class="py-5 bg-blue">
    <div class="container">
        <small class="text-white">&copy; 2013 - {{ date('Y') }} BeMo Academic Consulting Inc. All rights reserved.
            <a href="https://cdainterview.com/disclaimer-privacy-policy.html">
                <span style="text-decoration:underline; color:#FF6600;">Disclaimer & Privacy
                </spam>
            </a>&nbsp;
            <a href="{{ route('contact-us') }}">
                <span style="text-decoration:underline; color:#FF6600;">Contact Us</spam>
            </a>
        </small>
        <small class="text-muted float-right ">
            <a href="{{ displayGeneralSettings()->facebook_link }}" target="_blank" class="text-white"><i class="{{ displayGeneralSettings()->facebook_icon }} fa-2x"></i></a> &nbsp; &nbsp;
            <a href="{{ displayGeneralSettings()->facebook_link }}" target="_blank" class="text-white"><i class="{{ displayGeneralSettings()->twitter_icon }} fa-2x"></i></a>
        </small>

    </div>
    <!-- /.container -->
</footer>
