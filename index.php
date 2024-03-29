<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dektra's CV</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>

<body>
    <div id="offcanvas-nav" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">

            <ul class="uk-nav uk-nav-default">
                <li class="uk-active"><a href="#"> <b>DEKTRA</b> </a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#" uk-scroll="offset: 50">Home</a></li>
                <li><a href="#scroll-about" uk-scroll="offset: 120">About Me</a></li>
                <li><a href="#scroll-skill" uk-scroll="offset: 50">Skill</a></li>
            </ul>

        </div>
    </div>
    <div id="scroll-home" class="uk-background-muted"
        uk-sticky="sel-target: .navbar-sticky; cls-active: uk-navbar-sticky">
        <nav class="uk-container navbar-sticky" uk-navbar>
            <div class=" uk-navbar-left">
                <a class=" uk-navbar-item uk-logo" href="#">Dektra's CV</a>
            </div>
            <div class="uk-navbar-right">
                <a class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #offcanvas-nav" uk-navbar-toggle-icon
                    href="#"></a>
                <ul class="uk-navbar-nav uk-visible@m">
                    <li class="uk-active">
                        <a href="#" uk-scroll="offset: 50">Home</a>
                    </li>
                    <li>
                        <a href="#scroll-about" uk-scroll="offset: 120"> About</a>
                    </li>
                    <li><a href="#scroll-skill" uk-scroll="offset: 50">Skill</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>


    </nav>
    <div class="uk-width-1-1 uk-height-large uk-background-cover uk-flex uk-flex-center uk-flex-middle"
        data-src="foto.jpg" uk-img>
        <h1 style="color: white;">Hello, I'm Dektra</h1>
    </div>
    <br><br>
    <nav id="scroll-about" class="uk-container">
        <div class="uk-child-width-expand@s" uk-grid>
            <div class="uk-grid-item-match">
                <div class="uk-card uk-card-default uk-card-body">
                    <p>
                        <img src="dektra.jpg" width="100%" alt="">
                    </p>
                </div>
            </div>
            <div>
                <br>
                <h3>About Me</h3>
                <p>
                    I hereby submit this resume so that you can accept me to carry out street vendors in your company.
                    Even though I have skills that are still lacking by company standards, I will try to learn while
                    walking and be disciplined in learning so that my abilities are increasingly improved.</p>
                <br><br>
                <p uk-margin>
                    <button class="uk-button uk-button-primary">HIRE ME</button>
                    <button class="uk-button uk-button-default uk-margin-left">CONTACT</button>
                </p>
            </div>
        </div>

    </nav>
    <div id="scroll-skill" class="uk-container uk-padding">
        <h2 class="uk-text-center">My Skill</h2>
        <br><br>
        <div uk-grid>

            <div class="uk-width-1-2@m uk-width-1-1@s">
                <h5 class="uk-margin-remoe-top">HTML : <span class="uk-text-bold">70/100</span></h5>
                <progress id="js-progressbar1" class="uk-progress" value="0" max="100"></progress>
                <script>
                    UIkit.util.ready(function () {

                        var bar = document.getElementById('js-progressbar1');

                        var animate = setInterval(function () {

                            bar.value += 5;

                            if (bar.value >= 70) {
                                clearInterval(animate);
                            }

                        }, 1000);

                    });
                </script>

                <h5 class="uk-margin-remove-top">CSS : <span class="uk-text-bold">70/100</span></h5>
                <progress id="js-progressbar2" class="uk-progress" value="0" max="100"></progress>
                <script>
                    UIkit.util.ready(function () {

                        var bar = document.getElementById('js-progressbar2');

                        var animate = setInterval(function () {

                            bar.value += 5;

                            if (bar.value >= 70) {
                                clearInterval(animate);
                            }

                        }, 1000);

                    });
                </script>

                <h5 class="uk-margin-remove-top">PHP : <span class="uk-text-bold">40/100</span></h5>
                <progress id="js-progressbar3" class="uk-progress" value="0" max="100"></progress>
                <script>
                    UIkit.util.ready(function () {

                        var bar = document.getElementById('js-progressbar3');

                        var animate = setInterval(function () {

                            bar.value += 5;

                            if (bar.value >= 40) {
                                clearInterval(animate);
                            }

                        }, 1000);

                    });
                </script>
            </div>

            <div class="uk-width-1-2@m  uk-width-1-1@s">
                <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus sequi minus culpa optio
                    aspernatur praesentium totam, molestiae blanditiis nulla inventore aut accusantium nam saepe nihil
                    fugiat voluptatem dicta debitis quibusdam.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti sit, sequi facere voluptatum sunt
                    saepe, eum esse minima dolores harum ea officiis! Modi praesentium in perspiciatis cupiditate ipsum
                    vero voluptatem.</p>
            </div>
        </div>
        <br><br>
        <footer>
            <div class="uk-container uk-padding">
                <p class="uk-text-center">Copyright &copy; 2019 Dektra All right reserved.</p>
            </div>
        </footer>

</body>

</html>