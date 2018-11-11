
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PeacockMoon Travel & Tours</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Peacock Moon Travel & Tours" />
    <meta name="keywords" content="Peacock Moon Travel & Tours" />
    <meta name="author" content="peacockmoontravel.com" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=pyidaungsu' />


    <!-- Animate.css -->
    <link rel="stylesheet" href="{{URL::to('app-assets/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{URL::to('app-assets/css/icomoon.css')}}">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="{{URL::to('app-assets/css/themify-icons.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{URL::to('app-assets/css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{URL::to('app-assets/css/magnific-popup.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ URL::asset('plugin/datepicker/bootstrap-datepicker.min.css')}}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{URL::to('app-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('app-assets/css/owl.theme.default.min.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{URL::to('app-assets/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{URL::to('app-assets/js/modernizr-2.6.2.min.js')}}"></script>

    <script src="{{URL::to('app-assets/js/respond.min.js')}}"></script>


</head>
<body>
<body>

<div class="gtco-loader"></div>

<div id="page">


    <!-- <div class="page-inner"> -->
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">

            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="{{URL::to('/')}}"><img src="{{URL::to('images/logo.png')}}" width="150px" height="80px"></a></div>
                </div>
                <div class="col-xs-8 text-lg-right menu-1">
                    <ul>
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="{{URL::to('packages')}}">Packages</a></li>
                        <li><a href="{{URL::to('request_package')}}">Request Packages</a></li>
                        <li><a href="{{URL::to('contact_us')}}">Contact Us</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url({{URL::to('images/beach.jpg')}})">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">

                    <div class="row row-mt-15em">
                        <div class="col-md-6 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>Planing Trip To Anywhere in Myanmar?</h1>
                        </div>
                        <div class="col-md-1"></div>

                        <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                            <div class="form-wrap">
                                <div class="tab">

                                    <div class="tab-content">
                                        <div class="tab-content-inner active" data-content="signup">
                                            <h3>Book Your Trip</h3>
                                            <form action="{{URL::to('packages/booking')}}" method="post">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="activities">Packages</label>

                                                        <select name="package_id" id="activities" class="form-control" style="font-family:Pyidaungsu; padding: 20px;">
                                                            <option value="">Packages</option>
                                                            @foreach($package as $value)
                                                                <option value="{{$value['id']}}">{{$value['title']}}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>
                                                </div>


                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="fullname">Name</label>
                                                        <input type="text" id="fullname" name="name" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="phno">Phone No</label>
                                                        <input type="number" id="=phno" name="phno" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="address">Address</label>
                                                        <input type="text" name="address" id="address" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <input type="submit" class="btn btn-primary btn-block" value="Submit">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </header>

    <div class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 text-lg-center gtco-heading">
                    <h2>Most Popular Packages</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            @foreach(array_slice($package, 0, 3) as $value)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{URL::to('packages/'.$value['id'])}}" class="fh5co-card-item">
                        <figure>
                            <img src="{{URL::to('public/upload/'.$value['image'])}}" alt="Image" width="100%" height="100%">
                        </figure>
                        <div class="fh5co-text">
                            <h2 style="font-family:Pyidaungsu;">{{$value['title']}}</h2>
                            <p>Price - {{$value['amount']}} MMK</p>
                            <div class="row">
                                <span class="btn btn-primary">See More</span>
                            </div>

                        </div>
                    </a>
                </div>

            @endforeach
            </div>
        </div>
    </div>


    <div id="gtco-features">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 text-lg-center gtco-heading animate-box">
                    <h2>How It Works</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
                        <h3>Consectetur adipisicing elit</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
                        <h3>Dignissimos asperiores vitae</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>


            </div>
        </div>
    </div>



    <div id="gtco-counter" class="gtco-section">
        <div class="gtco-container">

            <div class="row">
                <div class="col-md-12 col-md-offset-2 text-lg-center gtco-heading animate-box">
                    <h2>Our Success</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="196" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Destination</span>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Hotels</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="12402" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Travelers</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="12202" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Happy Customer</span>

                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="gtco-cover gtco-cover-sm" style="background-image: url({{URL::to('images/test.jpg')}})"  data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container text-lg-center">
            <div class="display-t">
                <div class="display-tc">
                    <h1>We have high quality services that you will surely love!</h1>
                </div>
            </div>
        </div>
    </div>


<footer id="gtco-footer" role="contentinfo" style="background-color: goldenrod; color: #ffffff" >
    <div class="gtco-container">
        <div class="row row-p	b-md">

            <div class="col-md-6 col-md-push-1">
                <div class="gtco-widget">
                    <h3 style="color: #ffffff">About Us</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
                </div>
            </div>

            <div class="col-md-2"></div>


            <div class="col-md-4 col-md-push-1">
                <div class="gtco-widget">
                    <h3 style="color: #ffffff">Get In Touch</h3>
                    <ul class="gtco-quick-contact" >
                        <li><a href="#" style="color: #ffffff"><i class="fa fa-phone" ></i> +95 9 778 802333</a></li>
                        <li><a href="#" style="color: #ffffff"><i class="fa fa-envelope"></i> pmtravelsmd@gmail.com</a></li>
                        <li><a href="#" style="color: #ffffff"><i class="fa fa-home"></i> No.12, 6th Floor, U Shwe Soe Street, Kyimyindaing Township, Yangon</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="row copyright" style="color: #ffffff">
            <div class="col-md-12">
                <p class="pull-left">
                    <small class="block">&copy; 2018 Peacock Moon Travel. All Rights Reserved.</small>
                    <small class="block">Developed by <a href="https://ravenmm.co/" target="_blank" style="color: #000000">RavenMM Solutions</a> </small>
                </p>
            </div>
        </div>

    </div>
</footer>
    <!-- </div> -->

</div>


<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<script>
    var msg = '{{Session::get('book_msg')}}';
    var exist = '{{Session::has('book_msg')}}';
    if(exist){
        alert(msg);
    }
</script>


<!-- jQuery -->
<script src="{{URL::to('app-assets/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{URL::to('app-assets/js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{URL::to('app-assets/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{URL::to('app-assets/js/jquery.waypoints.min.js')}}"></script>
<!-- Carousel -->
<script src="{{URL::to('app-assets/js/owl.carousel.min.js')}}"></script>
<!-- countTo -->
<script src="{{URL::to('app-assets/js/jquery.countTo.js')}}"></script>

<!-- Stellar Parallax -->
<script src="{{URL::to('app-assets/js/jquery.stellar.min.js')}}"></script>

<!-- Magnific Popup -->
<script src="{{URL::to('app-assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::to('app-assets/js/magnific-popup-options.js')}}"></script>

<!-- Datepicker -->
<script type="text/javascript" src="{{ URL::asset('plugin/datepicker/bootstrap-datepicker.js') }}"></script>


<!-- Main -->
<script src="{{URL::to('app-assets/js/main.js')}}"></script>

</body>
</html>

