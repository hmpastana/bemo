<?php

use Illuminate\Database\Seeder;
use App\Models\GeneralSetting;

class GeneralSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = GeneralSetting::create([
            'logo_image' => '/storage/bemo-logo2.jpeg',
            'facebook_icon' => 'fa fa-facebook',
            'facebook_link' => 'https://www.facebook.com/bemoacademicconsulting',
            'twitter_icon' => 'fa fa-twitter',
            'twitter_link' => 'https://twitter.com/BeMo_AC',
            'show_noindex' => true,
            'google_analytics' => "<script>
                                        (function(i, s, o, g, r, a, m) {
                                            i['GoogleAnalyticsObject'] = r;
                                            i[r] = i[r] || function() {
                                                (i[r].q = i[r].q || []).push(arguments)
                                            }, i[r].l = 1 * new Date();
                                            a = s.createElement(o),
                                                m = s.getElementsByTagName(o)[0];
                                            a.async = 1;
                                            a.src = g;
                                            m.parentNode.insertBefore(a, m)
                                        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                                        ga('create', 'UA-56991678-1', 'auto');
                                        ga('send', 'pageview');
                                    </script>",
            'facebook_pixel' => "<script>
                                    (function() {
                                        var _fbq = window._fbq || (window._fbq = []);
                                        if (!_fbq.loaded) {
                                            var fbds = document.createElement('script');
                                            fbds.async = true;
                                            fbds.src = '//connect.facebook.net/en_US/fbds.js';
                                            var s = document.getElementsByTagName('script')[0];
                                            s.parentNode.insertBefore(fbds, s);
                                            _fbq.loaded = true;
                                        }
                                        _fbq.push(['addPixelId', '235586069975455']);
                                    })();
                                    window._fbq = window._fbq || [];
                                    window._fbq.push(['track', 'PixelInitialized', {}]);
                                </script>"

        ]);
    }
}
