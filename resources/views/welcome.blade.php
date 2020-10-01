<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>H.I.R.E. Initiative</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.typekit.net/hef5yfi.css">

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

            #speech {
                font-family: look-script, serif;
                font-size: 22px;
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
    
    ======================================================================================================================================
    
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
                <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min">Honesty Integrity Respect Equality</span></h1>
            </div>
        </header>

        <!-- Fox News Coverage -->
        <div class="w3-container w3-auto w3-center w3-padding-32 w3-teal" style="max-width:100%">
                <iframe scrolling="no" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen allow="autoplay; fullscreen" src="https://w3.cdn.anvato.net/player/prod/v3/anvload.html?key=eyJtIjoiRVBGT1giLCJ2IjoiODUwMDIwIiwiYW52YWNrIjoiN3h5S09PSzdYcGNPYkxadTVTN0VhOEJURDdHcFp5dmUiLCJzaGFyZUxpbmsiOiJodHRwczovL3d3dy5mb3g1bnkuY29tL25ld3MvYW1lcmljYS1yZW1lbWJlcnMtOS0xMS12aXJ1cy1hbHRlcnMtZmFtaWxpYXItdHJpYnV0ZXMiLCJwbHVnaW5zIjp7ImN1c3RvbUNvbXNjb3JlUGx1Z2luIjp7ImMzIjoiRk9YIDUgTlkiLCJjNiI6ImZ0cyIsInNjcmlwdCI6Imh0dHBzOi8vc3RhdGljLmZveHR2LmNvbS9zdGF0aWMvb3Jpb24vc2NyaXB0cy9jb3JlL3V0aWxzL2NvbXNjb3JlL0N1c3RvbUNvbXNjb3JlUGx1Z2luLmpzIiwic2RrIjoiaHR0cHM6Ly9zdGF0aWMuZm94dHYuY29tL3N0YXRpYy9vcmlvbi9zY3JpcHRzL2NvcmUvdXRpbHMvY29tc2NvcmUvY29tc2NvcmUtNy4wLjAuMTkxMDE0LmpzIiwiY2xpZW50SWQiOiI2MDQyOTAxIiwibnNfc3Rfc3QiOiJXTllXIiwidGl0bGUiOiI5LzExIFRyaWJ1dGUgaW4gUXVlZW5zIiwibnNfc3RfY2kiOiI4NTAwMjAifSwiY3VzdG9tU2VnbWVudFBsdWdpbiI6eyJzY3JpcHQiOiJodHRwczovL3N0YXRpYy5mb3h0di5jb20vc3RhdGljL29yaW9uL3NjcmlwdHMvY29yZS91dGlscy9DdXN0b21TZWdtZW50UGx1Z2luLmpzIiwicHJpbWFyeV9idXNpbmVzc191bml0IjoiZnRzIiwic2Vjb25kYXJ5X2J1c2luZXNzX3VuaXQiOiJ3bnl3IiwiYXBwX25hbWUiOiJmb3g1bnkuY29tIiwiYXBwX3BsYXRmb3JtIjoid2ViIiwiYXBwX3ZlcnNpb24iOiIxLjAuMCIsInNlZ21lbnRJZCI6InpvSTQ4TkZwSklvT3VaNENxU3g4WlQ2VGRIUW96dFc4In0sImRmcCI6eyJjbGllbnRTaWRlIjp7ImFkVGFnVXJsIjoiaHR0cHM6Ly9wdWJhZHMuZy5kb3VibGVjbGljay5uZXQvZ2FtcGFkL2Fkcz9pdT0vNjM3OTA1NjQvd255d19mb3g1JmRlc2NyaXB0aW9uX3VybD1bcGxhY2Vob2xkZXJdJmVudj12cCZpbXBsPXMmY29ycmVsYXRvcj0mdGZjZD0wJm5wYT0wJmdkZnBfcmVxPTEmb3V0cHV0PXZhc3Qmc3o9MTAwMXgxMDAxJnVudmlld2VkX3Bvc2l0aW9uX3N0YXJ0PTEmY21zaWQ9dW5kZWZpbmVkJnZpZD1BTlZfRVBGT1hfODUwMDIwIiwia2V5VmFsdWVzIjp7InN0eXBlIjpbIm5ld3MiXSwicHR5cGUiOiJ2aWRlby1jbGlwIiwiYyI6WyJuZXdzIiwibWlkZGxlLXZpbGxhZ2UiLCJxdWVlbnMiLCJueWMiLCJzZXB0ZW1iZXItMTEiXSwiZCI6IndlYiJ9fX0sImhlYWx0aEFuYWx5dGljcyI6eyJhY2Nlc3NLZXkiOiI3eHlLT09LN1hwY09iTFp1NVM3RWE4QlREN0dwWnl2ZSIsInBsYXllclZlcnNpb24iOiIzLjUuMiIsInBsYXllckJ1aWx0IjoiMSIsInBsYXllclJldmlzaW9uIjoiM2FiMDVmMyJ9fSwiaHRtbDUiOnRydWUsImZvcm1hdCI6Im0zdTgiLCJ0b2tlbiI6ImV5SmhiR2NpT2lKSVV6STFOaUlzSW5SNWNDSTZJa3BYVkNKOS5leUoyYVdRaU9pSTROVEF3TWpBaUxDSnBjM01pT2lJM2VIbExUMDlMTjFod1kwOWlURnAxTlZNM1JXRTRRbFJFTjBkd1dubDJaU0lzSW1WNGNDSTZNVFl3TVRBME9UTTJPU3dpYVdGMElqb3hOakF4TURRMU56WTVmUS5ab2ZKZDlVY0JqTnpxUE13eFJPSWkybmhJVFlXTFV6WUhra1BaQmE3MjdVIn0%3D"  width ="640" height="360"></iframe>
        </div>


        <!-- Page content -->
        <div class="w3-content w3-padding" style="max-width:1024px">

            <!-- Project Section -->
            <div class="w3-container w3-padding-32" id="projects">

                <!-- Projects title with border underneath -->
                <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
            </div>

            <!-- Set of large images displaying under projects -->
            <div class="w3-row-padding" id="mainImages">

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
            <div class="w3-container w3-padding-32 w3-teal" id="bio">

                <!-- Bio Card -->
                <div class="card w3-auto w3-center w3-text-teal" style="width:300px;">
                    <div class="card-body">
                        <div class="card-img-top">
                            <img src="/storage/img/Mark001.jpg" alt="Card Image" style="width:100%">
                        </div>
                        <h3 class="card-title">Mark Papadimitriou</h3>
                        <p class="card-text">Founder</p>
                    </div>                    
                </div>

            </div>

            <!-- 9/11 Tribute Speech -->
            <div class="w3-container w3-padding-32" id="speech">
                <div class="card w3-auto" style="width:950px;">
                    <div class="card-body">
                        <div class="card-title w3-center">
                            <b>9/11 Tribute Speech</b>
                        </div>
                        <p class="card-text">
                            Now some of you may know me as outgoing smart funny I could go on but I won’t. </br>
                            </br>
                            Honestly when it comes to speaking from the heart I get nervous.  As I guess many of you would too. You see when you speak from the heart you open yourself up , make yourself vulnerable.  How ever people I am nervous,  I am nervous for all of us.  We see our society changing on a daily basis.  We see nation for our children that we don’t want them to grow up in.  The only way to fix it, is to be the change you are looking for.  I believe Elon musk said it best,” I can either sit back and watch it happen , or I can be a part of it”  People be a part of the change you are looking for.  The tribute you see here is provided by an organization called the Hire initiative. Hire stands for humanity. Honesty Integrity Respect and Equality , virtues that if we all adhere to, Can change the world.</br>
                            </br>
                            And so now if you would allow me just a couple more minutes of your time.</br>
                            </br>
                            A tribute to Our city</br>

                            There are days in our lives that we may forget, and other days which can never and should never be forgotten. September 11, 2001 is one of these days.  America was attacked at its very core by entities which seek to do use harm. They seek to do us harm because America provides a freedom they are not willing to.  
                            On that day We as Americans witnessed the worst terror attack in modern history.  We watched as friends, family, loved ones died for no other reason than showing up to work.  So many share stories of loved ones who perished, and others share stories of how they or their loved ones were able, one way or another, to make it home and are grateful for the time they have.</br> 
                            </br>
                            We watched as the twin towers crumbled to the ground and our hearts ached that day.  What I saw and watched, following. The days and weeks after 9-11 I saw humans come together side by side giving their time, money, blood, sweat, tears anything to help to overcome what happened. I saw people hugging strangers in the streets. The city of  New York and The nation was transformed into a different society. The kind of society we could only hope for, in these current times 
                            What you see here before you is a reminder to never forget. Never forget where you were when you heard the news , never forget the first phone call you made to a loved one. never forget the joy you felt when  your loved one called you back. Never forget where you sat and cried when they didn’t.  I remember all of these as if it was yesterday and I, we ( all of you out there right now) will never forget. </br>
                            </br>
                                As you stand here with me I ask for a moment of silence, for all those who perished that day and all of the people who have passed since ,due to illness related to 9-11 </br>
                                </br>
                            So please a moment of silence
                            </br>
                            Thank you to all of you who have come tonight.  I invite you to come up and view this tribute the memory of 9-11.

                        </p>
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

</html>
