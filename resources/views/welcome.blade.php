<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body, html {
                height: 100%;
            }

            /* The hero image */
            .hero-image {
                /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/storage/img/Memorial.jpg");

                /* Set a specific height */
                height: 100%;

                /* Set a specific width */
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
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
                border: 3px solid #f1f1f1;
                padding: 20px;
            }

            .speech{
                background-color: lightgrey;
            }

            .testimonial{
                background-color: teal;
            }
        </style>

        <style>
            body {
                font-family: 'Nunito';
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
            
            <!-- Insert Speech here! -->
            <div class="speech">
                Now some of you may know me as outgoing smart funny I could go on but I won’t.
                Honestly when it comes to speaking from the heart I get nervous.  As I guess many of you would too. You see when you speak from the heart you open yourself up , make yourself vulnerable.  How ever people I am nervous,  I am nervous for all of us.  We see our society changing on a daily basis.  We see nation for our children that we don’t want them to grow up in.  The only way to fix it, is to be the change you are looking for.  I believe Elon musk said it best,” I can either sit back and watch it happen , or I can be a part of it”  People be a part of the change you are looking for.  The tribute you see here is provided by an organization called the Hire initiative. Hire stands for  humanity ?? honesty integrity respect and equality , virtues that if we all adhere to, Can change the world.
                And so now if you would allow me just a couple more minutes of your time 
            </div>
            
            <!-- Insert the testimonial -->
            <div class="testimonial">
                A tribute to Our city 
                There are days in our lives that we may forget, and other days which can never and should never be forgotten. September 11, 2001 is one of these days.  America was attacked at its very core by entities which seek to do use harm. They seek to do us harm because America provides a freedom they are not willing to.  
                On that day We as Americans witnessed the worst terror attack in modern history.  We watched as friends, family, loved ones died for no other reason than showing up to work.  So many share stories of loved ones who perished, and others share stories of how they or their loved ones were able, one way or another, to make it home and are grateful for the time they have 
                We watched as the twin towers crumbled to the ground and our hearts ached that day.  What I saw and watched, following. The days and weeks after 9-11 I saw humans come together side by side giving their time, money, blood, sweat, tears anything to help to overcome what happened. I saw people hugging strangers in the streets. The city of  New York and The nation was transformed into a different society. The kind of society we could only hope for, in these current times 
                What you see here before you is a reminder to never forget. Never forget where you were when you heard the news , never forget the first phone call you made to a loved one. never forget the joy you felt when  your loved one called you back. Never forget where you sat and cried when they didn’t.  I remember all of these as if it was yesterday and I, we ( all of you out there right now) will never forget. 
                    As you stand here with me I ask for a moment of silence, for all those who perished that day and all of the people who have passed since ,due to illness related to 9-11 
                So please a moment of silence
                Thank you to all of you who have come tonight.  I invite you to come up and view this tribute the memory of 9-11.

            </div>
    </body>
</html>
