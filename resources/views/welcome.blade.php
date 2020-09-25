<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>H.I.R.E. Initiative</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Krona One" rel="stylesheet">

        <!-- Styles -->

        <style>
            body, html {
                height: 100%;
                max-width: 100vw;
                margin: 0px;
            }

            /* The hero image */
            .hero-image {
                /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/storage/img/Memorial.jpg");

                /* Set a specific height */
                height: 100vh;

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

            /* Style Media Box */
            #media {
                background-color: white;
                max-width: 50%;
                height: 360;
                text-align: center;
                padding-top: 50px;
                padding-bottom: 50px;
                background-size: cover;
            }

            /* This will apply to all text boxes on page */
            .textBox{
                font-family: 'Roboto';
                padding: 2%;
            }
            #speech{
                background-color: lightgrey;
                
            }
            #testimonial{
                background-color: teal;
            }
            h1 {
                text-align: center;
            }
        </style>


    </head>
    <body>
            <!-- Create a placeholder so you can put an image along with a title for the webpage -->
            <div class="hero-image">

                <!-- Login Register Div -->
                <div class="loginRegisterBar">
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

                <div class="hero-text">
                    <h1>9/11 Memorial Tribute</h1>
                    <h2>H.I.R.E Initiative</h2>
                    <h2>Honesty Integrity Respect and Equality </h2>
                </div>
            </div>
            <!-- End of the hero -->

            <!-- Fox News Video -->
            <div id="media">
                <iframe scrolling="no" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen allow="autoplay; fullscreen" src="https://w3.cdn.anvato.net/player/prod/v3/anvload.html?key=eyJtIjoiRVBGT1giLCJ2IjoiODUwMDIwIiwiYW52YWNrIjoiN3h5S09PSzdYcGNPYkxadTVTN0VhOEJURDdHcFp5dmUiLCJzaGFyZUxpbmsiOiJodHRwczovL3d3dy5mb3g1bnkuY29tL25ld3MvYW1lcmljYS1yZW1lbWJlcnMtOS0xMS12aXJ1cy1hbHRlcnMtZmFtaWxpYXItdHJpYnV0ZXMiLCJwbHVnaW5zIjp7ImN1c3RvbUNvbXNjb3JlUGx1Z2luIjp7ImMzIjoiRk9YIDUgTlkiLCJjNiI6ImZ0cyIsInNjcmlwdCI6Imh0dHBzOi8vc3RhdGljLmZveHR2LmNvbS9zdGF0aWMvb3Jpb24vc2NyaXB0cy9jb3JlL3V0aWxzL2NvbXNjb3JlL0N1c3RvbUNvbXNjb3JlUGx1Z2luLmpzIiwic2RrIjoiaHR0cHM6Ly9zdGF0aWMuZm94dHYuY29tL3N0YXRpYy9vcmlvbi9zY3JpcHRzL2NvcmUvdXRpbHMvY29tc2NvcmUvY29tc2NvcmUtNy4wLjAuMTkxMDE0LmpzIiwiY2xpZW50SWQiOiI2MDQyOTAxIiwibnNfc3Rfc3QiOiJXTllXIiwidGl0bGUiOiI5LzExIFRyaWJ1dGUgaW4gUXVlZW5zIiwibnNfc3RfY2kiOiI4NTAwMjAifSwiY3VzdG9tU2VnbWVudFBsdWdpbiI6eyJzY3JpcHQiOiJodHRwczovL3N0YXRpYy5mb3h0di5jb20vc3RhdGljL29yaW9uL3NjcmlwdHMvY29yZS91dGlscy9DdXN0b21TZWdtZW50UGx1Z2luLmpzIiwicHJpbWFyeV9idXNpbmVzc191bml0IjoiZnRzIiwic2Vjb25kYXJ5X2J1c2luZXNzX3VuaXQiOiJ3bnl3IiwiYXBwX25hbWUiOiJmb3g1bnkuY29tIiwiYXBwX3BsYXRmb3JtIjoid2ViIiwiYXBwX3ZlcnNpb24iOiIxLjAuMCIsInNlZ21lbnRJZCI6InpvSTQ4TkZwSklvT3VaNENxU3g4WlQ2VGRIUW96dFc4In0sImRmcCI6eyJjbGllbnRTaWRlIjp7ImFkVGFnVXJsIjoiaHR0cHM6Ly9wdWJhZHMuZy5kb3VibGVjbGljay5uZXQvZ2FtcGFkL2Fkcz9pdT0vNjM3OTA1NjQvd255d19mb3g1JmRlc2NyaXB0aW9uX3VybD1bcGxhY2Vob2xkZXJdJmVudj12cCZpbXBsPXMmY29ycmVsYXRvcj0mdGZjZD0wJm5wYT0wJmdkZnBfcmVxPTEmb3V0cHV0PXZhc3Qmc3o9MTAwMXgxMDAxJnVudmlld2VkX3Bvc2l0aW9uX3N0YXJ0PTEmY21zaWQ9dW5kZWZpbmVkJnZpZD1BTlZfRVBGT1hfODUwMDIwIiwia2V5VmFsdWVzIjp7InN0eXBlIjpbIm5ld3MiXSwicHR5cGUiOiJ2aWRlby1jbGlwIiwiYyI6WyJuZXdzIiwibWlkZGxlLXZpbGxhZ2UiLCJxdWVlbnMiLCJueWMiLCJzZXB0ZW1iZXItMTEiXSwiZCI6IndlYiJ9fX0sImhlYWx0aEFuYWx5dGljcyI6eyJhY2Nlc3NLZXkiOiI3eHlLT09LN1hwY09iTFp1NVM3RWE4QlREN0dwWnl2ZSIsInBsYXllclZlcnNpb24iOiIzLjUuMiIsInBsYXllckJ1aWx0IjoiMSIsInBsYXllclJldmlzaW9uIjoiM2FiMDVmMyJ9fSwiaHRtbDUiOnRydWUsImZvcm1hdCI6Im0zdTgiLCJ0b2tlbiI6ImV5SmhiR2NpT2lKSVV6STFOaUlzSW5SNWNDSTZJa3BYVkNKOS5leUoyYVdRaU9pSTROVEF3TWpBaUxDSnBjM01pT2lJM2VIbExUMDlMTjFod1kwOWlURnAxTlZNM1JXRTRRbFJFTjBkd1dubDJaU0lzSW1WNGNDSTZNVFl3TVRBME9UTTJPU3dpYVdGMElqb3hOakF4TURRMU56WTVmUS5ab2ZKZDlVY0JqTnpxUE13eFJPSWkybmhJVFlXTFV6WUhra1BaQmE3MjdVIn0%3D"  width ="640" height="360"></iframe>
            </div>
            
            <!-- Insert Speech here! -->
            <div id="speech" class="textBox">
                <h1>9/11 Tribute Speech</h1>
                
                <p>"Now some of you may know me as outgoing smart funny I could go on but I won’t.</p> 
                
                <p>Honestly when it comes to speaking from the heart I get nervous.  As I guess many of you would too. You see when you speak from the heart you open yourself up , make yourself vulnerable.  How ever people I am nervous,  I am nervous for all of us.  We see our society changing on a daily basis.  We see nation for our children that we don’t want them to grow up in.  The only way to fix it, is to be the change you are looking for.  I believe Elon musk said it best,” I can either sit back and watch it happen , or I can be a part of it”.  People, be a part of the change you are looking for.  The tribute you see here is provided by an organization called the H.I.R.E initiative. H.I.R.E stands for humanity ?? - Honesty, Integrity, Respect, and Equality. Virtues that if we all adhere to, Can change the world.</p>

                <p>And so now if you would allow me just a couple more minutes of your time.</p>

            </div>
            
            <!-- Insert the testimonial -->
            <div id="testimonial"class="textBox">
                <h1>A Tribute to Our city</h1>

                <p>There are days in our lives that we may forget, and other days which can never and should never be forgotten. September 11, 2001 is one of these days.  America was attacked at its very core by entities which seek to do use harm. They seek to do us harm because America provides a freedom they are not willing to.</p>

                <p>On that day We as Americans witnessed the worst terror attack in modern history.  We watched as friends, family, loved ones died for no other reason than showing up to work.  So many share stories of loved ones who perished, and others share stories of how they or their loved ones were able, one way or another, to make it home and are grateful for the time they have.</p>

                <p>We watched as the twin towers crumbled to the ground and our hearts ached that day.  What I saw and watched, following. The days and weeks after 9-11 I saw humans come together side by side giving their time, money, blood, sweat, tears anything to help to overcome what happened. I saw people hugging strangers in the streets. The city of  New York and The nation was transformed into a different society. The kind of society we could only hope for, in these current times.</p>

                <p>What you see here before you is a reminder to never forget. Never forget where you were when you heard the news , never forget the first phone call you made to a loved one. never forget the joy you felt when  your loved one called you back. Never forget where you sat and cried when they didn’t.  I remember all of these as if it was yesterday and I, we ( all of you out there right now) will never forget. </p>

                <p>As you stand here with me I ask for a moment of silence, for all those who perished that day and all of the people who have passed since ,due to illness related to 9-11 
                So please a moment of silence</p>

                <p>Thank you to all of you who have come tonight.  I invite you to come up and view this tribute the memory of 9-11.</p>

            </div>
    </body>
</html>
