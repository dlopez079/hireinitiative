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
                background-color: white;
                font-family: "Raleway", Arial, sans-serif;
            }

            .w3-row img {margin-bottom: -8px}

            /* The hero image */
            .hero-image {
                /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/storage/img/Memorial.jpg");

                /* Set a specific height */
                height: 100%;
                width: 100%;


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
            <!-- N5avbar (sit on top) -->
    <div class="w3-top">
    <div class="w3-bar w3-teal w3-wide w3-padding w3-card">
        <a href="#home" class="w3-bar-item w3-button"><b>H.I.R.E</b> Initiative </a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
        <a href="#projects" class="w3-bar-item w3-button">Projects</a>
        <a href="#about" class="w3-bar-item w3-button">About</a>
        <a href="#contact" class="w3-bar-item w3-button">Contact</a>
        </div>
    </div>
    </div>

    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:100%;" id="home">

        <!-- Main image for the site. -->
        <img src="/storage/img/Memorial.jpg" alt="towers" width="100%">

        <!-- Title text that sites on top of the image. -->
        <div class="w3-display-middle w3-margin-top w3-center">
        <h1 class="w3-jumbo w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>H.I.R.E</b> <span class="w3-hide-small w3-text-teal">Initiative</span></span></h1>
        </br>
        <h1 class="w3-xxxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Honesty Integrity Respect Equality</b></span></h1>
    </div>
    </header>

    <!-- Page content -->
    <div class="w3-content w3-padding" style="max-width:1564px">

        <!-- Project Section -->
        <div class="w3-container w3-padding-32" id="projects">

            <!-- Projects title with border underneath -->
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
        </div>

        <!-- Set of large images displaying under projects -->
        <div class="w3-row-padding">

            <!-- Column 001 - Twin Towers -->
            <div class="w3-col 3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Twin Towers</div>
                    <img src="/storage/img/Memorial001-480x360.jpg" alt="Twin Towers" style="width:100%">
                </div>
            </div>
            
            <!-- Column 002 - The H.I.R.E Initiative -->
            <div class="w3-col 3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">The H.I.R.E Initiative</div>
                    <img src="/storage/img/Memorial005-480x360.jpg" alt="The H.I.R.E Initiative" style="width:100%">
                </div>
            </div>

            <!-- Column 003: Police Tribute -->
            <div class="w3-col 3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Police</div>
                    <img src="/storage/img/Memorial003-480x360.jpg" alt="Police" style="width:100%">
                </div>
            </div>

            <!-- Column 004: Firemen Tribute -->
            <div class="w3-col 3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Firemen</div>
                    <img src="/storage/img/Memorial006-480x360.jpg" alt="Firemen" style="width:100%">
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="w3-container w3-padding-32" id="about">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        
        <!-- Bio Card Section -->
        <div class="w3-container w3-padding-32 w3-teal">
                <div class="card w3-auto w3-center w3-text-teal" style="width:400px;">
                    <div class="card-body">
                        <div class="card-img-top">
                            <img src="/storage/img/Mark001.jpg" alt="Card Image" style="width:100%">
                        </div>
                        <h3 class="card-title">Mark Papadimitriou</h3>
                        <p class="card-text">Founder</p>
                    </div>                    
                </div>
        </div>
        

        <!-- Contact Section -->
        <div class="w3-container w3-padding-32" id="contact">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
            <p>Lets get in touch and talk about your next project.</p>
            <form action="/action_page.php" target="_blank">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
            <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
            <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
            <button class="w3-button w3-black w3-section" type="submit">
                <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
            </form>
        </div>
        

    <!-- End page content -->   
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-teal w3-padding-16">
    <p>Created by <a href="https://www.mattmen.com/" title="Mattmen, Inc." target="_blank" class="w3-text-yellow w3-visited-text-grey w3-hover-text-white w3-active-text-orange">Mattmen, Inc.</a></p>
    </footer>

</body>
    </body>
</html>
