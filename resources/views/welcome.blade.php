<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>H.I.R.E. Initiative</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Krona One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">

        <!-- Boostrap -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Inline Styles for Hero, body, HTML, and Headers.  No need to touch.  Boostrap is being used for the rest.-->
        <style>
            body, html {
                height: 100%;
                width: 100%;
                margin: 0px;
                background-color: lightgrey;
                font-family: "Raleway", Arial, sans-serif;
            }

            .w3-row img {margin-bottom: -8px}

            /* The hero image */
            .hero-image {
                /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/storage/img/Memorial.jpg");

                /* Set a specific height */
                height: 100%;



                /* Position and center the image to scale nicely on all screens */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }

            /* Place text in the middle of the image */
            .hero-text {
                background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
                font-family: 'Krona One';
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
                border: 3px solid #f1f1f1;
                padding: 20px;
            }  
        
            .row {

            }
        </style>

        <!-- Scripts -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
    <body>
       
        <!-- !PAGE CONTENT! -->
        <div class="w3-content" style="max-width:1500px">

        <!-- Header -->
        <header class="w3-container w3-xlarge w3-padding-24">
            <!-- Login Register Div -->
            <div id="loginRegisterBar">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </header>

        <!-- Photo Grid -->
        <div class="w3-row">
            <div class="w3-half">
            <img src="/storage/img/Memorial.jpg" style="width:100%">
            <img src="/storage/img/Memorial001.jpg" style="width:100%">
            <img src="/storage/img/Memorial002.jpg" style="width:100%">
            </div>

            <div class="w3-half">
            <img src="/storage/img/Memorial003.jpg" style="width:100%">
            <img src="/storage/img/Memorial004.jpg" style="width:100%">
            <img src="/storage/img/Memorial005.jpg" style="width:100%">
            </div>
        </div>
        
        <!-- End Page Content -->
        </div>

        <!-- Footer / About Section -->
        <footer class="w3-light-grey w3-padding-64 w3-center" id="about">
        <h2>About</h2>
        <img src="https://via.placeholder.com/150" class="w3-image w3-padding-32" width="300" height="300">
        <form style="margin:auto;width:60%" action="/action_page.php" target="_blank">
            <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
            <p class="w3-large w3-text-pink">Do not hesitate to contact me!</p>
            <div class="w3-section">
            <label><b>Name</b></label>
            <input class="w3-input w3-border" type="text" required name="Name">
            </div>
            <div class="w3-section">
            <label><b>Email</b></label>
            <input class="w3-input w3-border" type="text" required name="Email">
            </div>
            <div class="w3-section">
            <label><b>Message</b></label>
            <input class="w3-input w3-border" required name="Message">
            </div>
            <button type="submit" class="w3-button w3-block w3-dark-grey">Send</button>
        </form>
        <br>
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
        </footer>


    </body>
</html>
