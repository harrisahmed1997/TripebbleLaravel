<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Tue May 16 2023 15:36:15 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="64617cac4bc9d89c2dbeb207" data-wf-site="6461523a72d54f527019cb40">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta
        content="MOSS portfolio has a a bold, modern design, a clean user experience and advanced Webflow interactions. Perfect choice for freelancers and agencies in the design niche. It comes with CMS integration for Projects and Blog to make it easy to customize."
        name="description">
    <meta content="MOSS – Webflow HTML website template" property="og:title">
    <meta
        content="MOSS portfolio has a a bold, modern design, a clean user experience and advanced Webflow interactions. Perfect choice for freelancers and agencies in the design niche. It comes with CMS integration for Projects and Blog to make it easy to customize."
        property="og:description">
    <meta content="https://fouroom.co/templates/opengraph/moss_open-graph.png" property="og:image">
    <meta content="MOSS – Webflow HTML website template" property="twitter:title">
    <meta
        content="MOSS portfolio has a a bold, modern design, a clean user experience and advanced Webflow interactions. Perfect choice for freelancers and agencies in the design niche. It comes with CMS integration for Projects and Blog to make it easy to customize."
        property="twitter:description">
    <meta content="https://fouroom.co/templates/opengraph/moss_open-graph.png" property="twitter:image">
    <meta property="og:type" content="website">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/webflow.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tripebble-fc67f2.webflow.css') }}">


    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.png" rel="apple-touch-icon">
    <style>
        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>

<body>
    <div class="navigation">
        <div class="brand-wrapper">
            <div class="magnetic-link">
                <a href="{{url('/')}}" id="w-node-_8ae57029-6c9a-477c-cd90-cde36d328f1e-6d328f1c" aria-current="page"
                    class="brand-link w-inline-block w--current">
                    <div class="brand-size-style">
                        <div class="link-overflow">
                            <div class="link-label">tripebble.</div>
                            <div class="link-label on-hover">tripebble.</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div data-collapse="all" data-animation="default" data-duration="0" data-easing="ease" data-easing2="ease"
            role="banner" class="navbar w-nav">
            <div id="w-node-_8ae57029-6c9a-477c-cd90-cde36d328f24-6d328f1c" class="navbar-controls">
                <nav role="navigation" class="navbar-menu w-nav-menu">
                    <div class="navbar-wrapper">
                        <div class="navbar-rounded-fixed">
                            <div class="navbar-rounded-wrapper">
                                <div class="navbar-rounded-div"></div>
                            </div>
                        </div>
                        <div class="w-layout-grid navbar-menu-grid">
                            <div class="w-layout-grid navbar-menu-column">
                                <div class="navbar-menu-font-style">
                                    <a href="{{url('/')}}" aria-current="page"
                                        class="navbar-menu-item-wrapper w-inline-block w--current">
                                        <div class="navbar-menu-item">
                                            <div class="navbar-menu-link">Home</div>
                                        </div>
                                        <div class="navbar-menu-background"></div>
                                        <div class="navbar-menu-scrolling-wrapper">
                                            <div class="navbar-menu-scrolling">
                                                <div class="navbar-menu-link">Home</div>
                                                <div class="navbar-menu-link">Home</div>
                                                <div class="navbar-menu-link">Home</div>
                                            </div>
                                            <div class="navbar-menu-scrolling">
                                                <div class="navbar-menu-link">Home</div>
                                                <div class="navbar-menu-link">Home</div>
                                                <div class="navbar-menu-link">Home</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="navbar-menu-font-style">
                                    <a href="{{url('/about')}}" class="navbar-menu-item-wrapper w-inline-block">
                                        <div class="navbar-menu-item">
                                            <div class="navbar-menu-link">About</div>
                                        </div>
                                        <div class="navbar-menu-background"></div>
                                        <div class="navbar-menu-scrolling-wrapper">
                                            <div class="navbar-menu-scrolling">
                                                <div class="navbar-menu-link">About</div>
                                                <div class="navbar-menu-link">About</div>
                                                <div class="navbar-menu-link">About</div>
                                            </div>
                                            <div class="navbar-menu-scrolling">
                                                <div class="navbar-menu-link">About</div>
                                                <div class="navbar-menu-link">About</div>
                                                <div class="navbar-menu-link">About</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="navbar-menu-font-style">
                                    <a href="{{url('/work')}}" class="navbar-menu-item-wrapper w-inline-block">
                                        <div class="navbar-menu-item">
                                            <div class="navbar-menu-link">Work</div>
                                        </div>
                                        <div class="navbar-menu-background"></div>
                                        <div class="navbar-menu-scrolling-wrapper">
                                            <div class="navbar-menu-scrolling">
                                                <div class="navbar-menu-link">Work</div>
                                                <div class="navbar-menu-link">Work</div>
                                                <div class="navbar-menu-link">Work</div>
                                            </div>
                                            <div class="navbar-menu-scrolling">
                                                <div class="navbar-menu-link">Work</div>
                                                <div class="navbar-menu-link">Work</div>
                                                <div class="navbar-menu-link">Work</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="navbar-menu-font-style">
                                    <a href="{{url('/notes')}}" class="navbar-menu-item-wrapper w-inline-block">
                                        <div class="navbar-menu-item">
                                            <div class="navbar-menu-link">Notes</div>
                                        </div>
                                        <div class="navbar-menu-background"></div>
                                        <div class="navbar-menu-scrolling-wrapper">
                                            <div class="navbar-menu-scrolling">
                                                <div class="navbar-menu-link">Notes</div>
                                                <div class="navbar-menu-link">Notes</div>
                                                <div class="navbar-menu-link">Notes</div>
                                            </div>
                                            <div class="navbar-menu-scrolling">
                                                <div class="navbar-menu-link">Notes</div>
                                                <div class="navbar-menu-link">Notes</div>
                                                <div class="navbar-menu-link">Notes</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="navbar-menu-font-style">
                                    <a href="{{url('contact')}}" class="navbar-menu-item-wrapper w-inline-block">
                                        <div class="navbar-menu-item">
                                            <div class="navbar-menu-link">Contact</div>
                                        </div>
                                        <div class="navbar-menu-background"></div>
                                        <div class="navbar-menu-scrolling-wrapper">
                                            <div class="navbar-menu-scrolling">
                                                <div class="navbar-menu-link">Contact</div>
                                                <div class="navbar-menu-link">Contact</div>
                                                <div class="navbar-menu-link">Contact</div>
                                            </div>
                                            <div class="navbar-menu-scrolling">
                                                <div class="navbar-menu-link">Contact</div>
                                                <div class="navbar-menu-link">Contact</div>
                                                <div class="navbar-menu-link">Contact</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="w-layout-grid navbar-meta">
                                <div class="w-layout-grid navbar-social-grid">
                                    <div class="magnetic-link">
                                        <a href="https://www.instagram.com/tripebble/" class="link-block w-inline-block">
                                            <div class="magnetic-item">
                                                <div class="link-overflow">
                                                    <div class="navbar-menu-item">
                                                        <div class="link-label">Instagram</div>
                                                    </div>
                                                    <div class="link-label on-hover">Instagram</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="navbar-menu-item"> • </div>
                                    </div>
                                    <div class="magnetic-link">
                                        <a href="#" class="link-block w-inline-block">
                                            <div class="magnetic-item">
                                                <div class="link-overflow">
                                                    <div class="navbar-menu-item">
                                                        <div class="link-label">Twitter</div>
                                                    </div>
                                                    <div class="link-label on-hover">Twitter</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="navbar-menu-item"> • </div>
                                    </div>
                                    <div class="magnetic-link">
                                        <a href="#" class="link-block w-inline-block">
                                            <div class="magnetic-item">
                                                <div class="link-overflow">
                                                    <div class="navbar-menu-item">
                                                        <div class="link-label">Dribbble</div>
                                                    </div>
                                                    <div class="link-label on-hover">Dribbble</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div data-w-id="8ae57029-6c9a-477c-cd90-cde36d328f83" class="menu-button w-nav-button">
                    <div class="menu-button-wrapper">
                        <div class="close-top"></div>
                        <div class="close-bottom"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layout">

        @yield('content')


        <div class="footer wf-section">
            <div class="footer-container">
                <div class="footer-contact-wrapper">
                    <div class="footer-contact-holder">
                        <div id="w-node-_2a0360a7-8c37-3c88-d72a-f4c9441485f9-daee86cb"
                            class="footer-meta-contact-wrapper">
                            <div id="w-node-e08911ff-064a-6bf3-45be-a18808e08eb2-daee86cb" class="magnetic-link">
                                <a href="#" class="footer-button is-avatar w-inline-block">
                                    <div class="magnetic-item is-absolute"><img
                                            src="images/ueno-template-about-team-04.jpg" loading="lazy"
                                            sizes="(max-width: 479px) 30vw, (max-width: 991px) 10vw, (max-width: 1279px) 5vw, 6vw"
                                            srcset="images/ueno-template-about-team-04-p-500.jpg 500w, images/ueno-template-about-team-04-p-800.jpg 800w, images/ueno-template-about-team-04-p-1080.jpg 1080w, images/ueno-template-about-team-04-p-1600.jpg 1600w, images/ueno-template-about-team-04-p-2000.jpg 2000w, images/ueno-template-about-team-04.jpg 2004w"
                                            alt="" class="footer-avatar"></div>
                                </a>
                            </div>
                            <div class="magnetic-link">
                                <a href="mailto:hello@tripebble.com?subject=New%20Inquiry"
                                    class="footer-button w-inline-block">
                                    <div class="magnetic-item">
                                        <div class="link-overflow">
                                            <div class="link-label">Hello@tripebble.com</div>
                                            <div class="link-label on-hover">hello@tripebble.com</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="magnetic-link"></div>
                        </div>
                    </div>
                    <div class="footer-contact-title">Interested in working together?</div>
                </div>
                <div class="footer-meta">
                    <div class="footer-meta-template-buy">
                        <div class="magnetic-link"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6461523a72d54f527019cb40"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/webflow.js') }}"></script>

</body>

</html>
