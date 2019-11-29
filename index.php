<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Portfolio</title>
</head>
<body>
    <nav>
        <div class="container fixed-top">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navbar" id="navbar">
                        <li>
                            <a href="#" id="home">HOME</a>
                        </li>
                        <li>
                            <a href="#portfolio">PORTFOLIO</a>
                        </li>
                        <li>
                            <a href="#">A PROPOS</a>
                        </li>
                        <li>
                            <a href="#">CONTACT</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <header>
        <div class="filtre"></div>
        <div id="social-media">
            <div class="background-fb rlt border-media marge-media">
                <a class="icon-media box-media" href="https://www.facebook.com/profile.php?id=100011370194524" target="_blank"><img src="asset/images/Facebook.svg" alt="facebook" id="logo-fb" class="transition-social box-media"></a>
                <a class="icon-media absl" href="https://www.facebook.com/profile.php?id=100011370194524" target="_blank"><img src="asset/images/Facebook.svg" alt="facebook" id="logo-fb" class="opacite-social social-center box-media absl"></a>
            </div>
            <div class="background-git rlt border-media marge-media">
                <a class="icon-media box-media" href="https://github.com/Milena90" target="_blank"><img src="asset/images/github.svg" alt="github" id="logo-git" class="transition-social box-media"></a>
                <a class="icon-media absl" href="https://github.com/Milena90" target="_blank"><img src="asset/images/github.svg" alt="facebook" id="logo-fb" class="opacite-social social-center box-media absl"></a>
            </div>
            <div class="background-insta rlt border-media marge-media">
                <a class="icon-media box-media" href="https://www.instagram.com/milena_tonelli/?hl=fr" target="_blank"><img src="asset/images/instagram.svg" alt="instagram" id="logo-insta" class="transition-social box-media"></a>
                <a class="icon-media absl" href="https://www.instagram.com/milena_tonelli/?hl=fr" target="_blank"><img src="asset/images/instagram.svg" alt="facebook" id="logo-fb" class="opacite-social social-center box-media absl"></a>
            </div>
            <div class="background-link rlt border-media marge-media">
                <a class="icon-media box-media" href="https://www.linkedin.com/in/milena-wachtel-193389194/" target="_blank"><img src="asset/images/linkedin.svg" alt="linkedin" id="logo-link" class="transition-social box-media"></a>
                <a class="icon-media absl" href="https://www.linkedin.com/in/milena-wachtel-193389194/" target="_blank"><img src="asset/images/linkedin.svg" alt="facebook" id="logo-fb" class="opacite-social social-center box-media absl"></a>
            </div>
        </div>
        <div id="photo-couverture" class="container-fluid h-100">
            <div class="row h-100">
                <div id="titre-flex"class="col-lg-12 h-100">
                    <div id="titre">
                        <h1>MILENA</h1>
                        <p class="nom">WACHTEL</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="portfolio">
        <?php require 'asset/php/portfolio.php'; ?>
    </section>



</body>
<footer>
</footer>
</html>