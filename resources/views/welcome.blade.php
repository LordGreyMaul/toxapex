<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OG Trading Cards | The best TCG Subscription box</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald|Walter+Turncoat" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="{{URL::asset('css/site.css')}}">
    </head>
    <body>

    <!-- Nav Bar -->
    <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">OG Trading Cards</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Plans</a></li>
                        <li><a href="#">Previous Boxes</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Route::has('login'))
                                @if (Auth::check())
                                    <li><a href="{{ url('/home') }}">My Account</a></li>
                                @else
                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="{{ url('/register') }}">Register</a></li>
                                @endif
                        @endif
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    <!-- Nav Bar Finish -->

    <!-- Top Splash -->
    <div class="container-fluid padds">
        <!-- Splash -->
        <div class="parallax-window" data-parallax="scroll" data-image-src="{{URL::asset('images/splash.jpg')}}">
            <div class="container">
                <div class="row splash">
                    <div class="col-md-12 text-center">
                        <img src="images/logored.png" alt="welcome to OG Trading">
                        <h2>Subscription Boxes made for your taste! Whats your flavour?</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of splash -->
        </div>
    <!-- Top Splash End-->

    <!-- Top heading and countdown -->
    <div class="container">
    <div class="row margins text-center">
        <div class="col-md-12">
            <h3>Welcome to a new way to buy trading cards for your favourite TCG and Franchise</h3>
            <p>So you love trading card games right? Yes!? I thought so. </p>
            <p> Well my friends you have come to the right place.
            Everything we have here is for you to enjoy and for you to experience a subscription service like no other.
            We have taken the 3 main worldwide collected TCG's and given them some extra juice to allow you to get your monthly
            fill of Booster Packs and other such wonderful TCG items.</p>
            <p> Deck boxes, Card Sleeve Protectors and Card Folders from top
            TCG protection suppliers like Ultra Pro and Ultimate Guard. To sit on top of that we supply you with 5 Boosters each month
            that match the flavour of choice.</p>
        </div>
    </div>
    <div class="row margins">
        <div class="col-md-12">
            <div class="col-md-4">
                <img src="/images/pokemon.png" alt="OG Trading Pokemon" class="img-responsive">
            </div>
            <div class="col-md-8">
                <h1>Next Box Ships In:</h1>
                <p id="countdown" class="countdown"></p>
                <a href="#" class="btn btn-success center-block">Subscribe Today!</a>
            </div>
        </div>
    </div>
</div>
    <!-- Top Heading and countdown end

    <!-- Yu Gi Oh Splash -->
    <div class="container-fluid padds margins">
        <!-- Splash -->
        <div class="parallax-window" style="height: 500px; margin-top: 45px;" data-parallax="scroll" data-image-src="{{URL::asset('images/splash2.jpg')}}">
        </div>
        <!-- End of splash -->
    </div>
    <!-- Yu Gi Oh Splash End -->

    <!-- How it works -->
    <div class="container margins">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>How it works</h2>
                <div class="col-lg-4">
                    <h4>Register with us</h4>
                    <img src="images/how1.png" width="50%" alt="Register with us">
                </div>
                <div class="col-lg-4">
                    <h4>Choose your flavor</h4>
                    <img src="images/how2.png" width="50%" alt="Choose your flavor">
                </div>
                <div class="col-lg-4">
                    <h4>Sit back and enjoy</h4>
                    <img src="images/how3.png" width="50%" alt="Sit back and enjoy">
                </div>
            </div>
        </div>
    </div>
    <!-- How it works End -->

    <!-- Pokemon Splash -->
    <div class="container-fluid padds margins">
        <!-- Splash -->
        <div class="parallax-window" style="height: 500px; margin-top: 45px;" data-parallax="scroll" data-image-src="{{URL::asset('images/splash3.jpg')}}">
        </div>
        <!-- End of splash -->
    </div>
    <!-- Pokemon Splash End -->

    <!-- Flavors -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Flavors</h2>
            </div>
        </div>
    </div>
    <!-- End of flavors -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- Parallax.js -->
        <script src="js/parallax.js"></script>

        <script>
        // Set the date we're counting down to
        var countDownDate = new Date("June 30, 2017 00:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("countdown").innerHTML = days + "D " + hours + "H "
                    + minutes + "M " + seconds + "S ";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    </body>
</html>
