<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>accueil</title>

        <!--boostrap link -->
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <link href="node_modules/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">


    </head>
    <body>


    <!--Menu-->

    <nav id="mainmenu" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid menu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="forum.php">LOGO</a>
            </div>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Accueil</a>
                    </li>
                    <li>
                        <a href="services.php">Autres services</a>
                    </li>
                    <li>
                        <a href="actu.php">Actualités</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Forums<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Forum 1</a>
                            </li>
                            <li>
                                <a href="#">Forum 2</a>
                            </li>
                            <li>
                                <a href="#">Forum 3</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Fin Menu-->

    <!--Header Forum-->

    <div class="forum" id="brand">
        <div class="mask"></div>
        <div class="header-content text-center">
            <div class="header-content-inner">
                <h2 class="animated fadeIn">forum <strong>JFN</strong> paris</h2>
            </div>
        </div>
    </div>

    <!--Fin Header Forum-->

    <section id="newsletter">
        <div class="col-md-5">
            <div class="container-fluid">
                <div class="row">
                    <h2>S'ABONNER A LA NEWSLETTER DU FORUM</h2>
                    <hr>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="votre@mail.com" id="email" required
                               data-validation-required-message="Please enter your email address.">

                        <p class="help-block text-danger"></p>
                        <button type="submit" class="btn btn-xl">S'inscrire</button>
                    </div>
                    <button class="contactbut" type="button" href="#">CONTACTEZ-NOUS</button>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="container-fluid">
                <div class="row">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.9131090534433!2d2.355500107628238!3d48.833244437900206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6718c8bdc82cf%3A0x35f8de1b0a103495!2s151+Boulevard+de+l&#39;H%C3%B4pital%2C+75013+Paris!5e0!3m2!1sfr!2sfr!4v1448557426774"
                        width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <div class="itineraire">
                        <h3>JEUNES FEMMES ET NUMERIQUE PARIS</h3>

                        <p>151 Boulevard de l'Hôpital, 75013 Paris</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>
