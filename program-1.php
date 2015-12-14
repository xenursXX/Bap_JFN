<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>accueil</title>

        <!--boostrap link -->
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="slick.css">
        <link rel="stylesheet" href="slick-theme.css">
        <link rel="stylesheet" href="style.css">

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
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="index.php">Accueil</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programmes<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="forum.php">Programme 1</a>
                                </li>
                                <li>
                                    <a href="#">Programme 2</a>
                                </li>
                                <li>
                                    <a href="#">Programme 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="actu.php">Actualités</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php">FR</a>
                        </li>
                        <li>
                            <a href="#">EN</a>
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
                    <h2 class="animated fadeIn"> <strong><?php// the_field("");?></strong> Programme 1</h2>
                </div>
            </div>
        </div>

        <!--Fin Header Forum-->

        <div class="container programme">

            <div class="titre-programme">
                <h1>programme</h1>
                <hr>
            </div>

            <div class="position">
                <div class="tittel">Accueil</div>
                <div class="info">
                    <h3>1 - Big Data</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur beatae, commodi, consectetur consequuntur dignissimos eaque error eveniet, id pariatur perferendis quisquam rerum similique suscipit tempore vel veniam. Ducimus, veritatis.</h4>
                    <br>
                    <h3>2 - Sante</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto autem deleniti eius error inventore laudantium officiis repudiandae ullam velit! Ab aut consectetur error illo molestias porro repellat? Recusandae, unde.</h4>
                    <br>
                    <h3>3 - internet des objets</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut consectetur debitis dolor dolore dolorem dolorum fugiat hic iusto laborum nulla odit pariatur quam quia quisquam sequi totam vitae voluptatum?</h4>
                </div>
            </div>

            <div class="position">
                <div class="tittel">
                    <strong>CONFÉRENCE 1 </strong>: Transition et innovation numérique : enjeux actuels et futurs
                    <br>
                    Avec la participation de John Smith, Benoit Thieulin
                </div>
                <div class="info">
                    <h3>1 - Big Data</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur beatae, commodi, consectetur consequuntur dignissimos eaque error eveniet, id pariatur perferendis quisquam rerum similique suscipit tempore vel veniam. Ducimus, veritatis.</h4>
                    <br>
                    <h3>2 - Sante</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto autem deleniti eius error inventore laudantium officiis repudiandae ullam velit! Ab aut consectetur error illo molestias porro repellat? Recusandae, unde.</h4>
                    <br>
                    <h3>3 - internet des objets</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut consectetur debitis dolor dolore dolorem dolorum fugiat hic iusto laborum nulla odit pariatur quam quia quisquam sequi totam vitae voluptatum?</h4>
                </div>
            </div>

            <div class="position">
                <div class="tittel">
                    <strong>CONFÉRENCE 1 </strong>: Transition et innovation numérique : enjeux actuels et futurs
                    <br>
                    Avec la participation de John Smith, Benoit Thieulin
                </div>
                <div class="info">
                    <h3>1 - Big Data</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur beatae, commodi, consectetur consequuntur dignissimos eaque error eveniet, id pariatur perferendis quisquam rerum similique suscipit tempore vel veniam. Ducimus, veritatis.</h4>
                    <br>
                    <h3>2 - Sante</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto autem deleniti eius error inventore laudantium officiis repudiandae ullam velit! Ab aut consectetur error illo molestias porro repellat? Recusandae, unde.</h4>
                    <br>
                    <h3>3 - internet des objets</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut consectetur debitis dolor dolore dolorem dolorum fugiat hic iusto laborum nulla odit pariatur quam quia quisquam sequi totam vitae voluptatum?</h4>
                </div>
            </div>

            <div class="position">
                <div class="tittel">
                    <strong>CONFÉRENCE 1 </strong>: Transition et innovation numérique : enjeux actuels et futurs
                    <br>
                    Avec la participation de John Smith, Benoit Thieulin
                </div>
                <div class="info">
                    <h3>1 - Big Data</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur beatae, commodi, consectetur consequuntur dignissimos eaque error eveniet, id pariatur perferendis quisquam rerum similique suscipit tempore vel veniam. Ducimus, veritatis.</h4>
                    <br>
                    <h3>2 - Sante</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto autem deleniti eius error inventore laudantium officiis repudiandae ullam velit! Ab aut consectetur error illo molestias porro repellat? Recusandae, unde.</h4>
                    <br>
                    <h3>3 - internet des objets</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut consectetur debitis dolor dolore dolorem dolorum fugiat hic iusto laborum nulla odit pariatur quam quia quisquam sequi totam vitae voluptatum?</h4>
                </div>
            </div>

            <div class="position">
                <div class="tittel">
                    <strong>CONFÉRENCE 1 </strong>: Transition et innovation numérique : enjeux actuels et futurs
                    <br>
                    Avec la participation de John Smith, Benoit Thieulin
                </div>
                <div class="info">
                    <h3>1 - Big Data</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur beatae, commodi, consectetur consequuntur dignissimos eaque error eveniet, id pariatur perferendis quisquam rerum similique suscipit tempore vel veniam. Ducimus, veritatis.</h4>
                    <br>
                    <h3>2 - Sante</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto autem deleniti eius error inventore laudantium officiis repudiandae ullam velit! Ab aut consectetur error illo molestias porro repellat? Recusandae, unde.</h4>
                    <br>
                    <h3>3 - internet des objets</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut consectetur debitis dolor dolore dolorem dolorum fugiat hic iusto laborum nulla odit pariatur quam quia quisquam sequi totam vitae voluptatum?</h4>
                </div>
            </div>

            <div class="position">
                <div class="tittel">
                    <strong>CONFÉRENCE 1 </strong>: Transition et innovation numérique : enjeux actuels et futurs
                    <br>
                    Avec la participation de John Smith, Benoit Thieulin
                </div>
                <div class="info">
                    <h3>1 - Big Data</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur beatae, commodi, consectetur consequuntur dignissimos eaque error eveniet, id pariatur perferendis quisquam rerum similique suscipit tempore vel veniam. Ducimus, veritatis.</h4>
                    <br>
                    <h3>2 - Sante</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto autem deleniti eius error inventore laudantium officiis repudiandae ullam velit! Ab aut consectetur error illo molestias porro repellat? Recusandae, unde.</h4>
                    <br>
                    <h3>3 - internet des objets</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut consectetur debitis dolor dolore dolorem dolorum fugiat hic iusto laborum nulla odit pariatur quam quia quisquam sequi totam vitae voluptatum?</h4>
                </div>
            </div>

            <div class="position">
                <div class="tittel">
                    <strong>CONFÉRENCE 1 </strong>: Transition et innovation numérique : enjeux actuels et futurs
                    <br>
                    Avec la participation de John Smith, Benoit Thieulin
                </div>
                <div class="info">
                    <h3>1 - Big Data</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur beatae, commodi, consectetur consequuntur dignissimos eaque error eveniet, id pariatur perferendis quisquam rerum similique suscipit tempore vel veniam. Ducimus, veritatis.</h4>
                    <br>
                    <h3>2 - Sante</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto autem deleniti eius error inventore laudantium officiis repudiandae ullam velit! Ab aut consectetur error illo molestias porro repellat? Recusandae, unde.</h4>
                    <br>
                    <h3>3 - internet des objets</h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut consectetur debitis dolor dolore dolorem dolorum fugiat hic iusto laborum nulla odit pariatur quam quia quisquam sequi totam vitae voluptatum?</h4>
                </div>
            </div>

        </div>

        <!--Transition 1 programme-->

        <div class="container-fluid transition-programme">
            <div class="row">
                <div class="col-md-6 block1"></div>

                <div class="col-md-6 block2">
                    <div class="contenu_block2 text-center">
                        <h2>Lorem Ipsum</h2>
                        <hr>
                        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos id mollitia rerum? Adipisci cupiditate dolorum nisi possimus reiciendis. Ad aliquid consectetur, delectus necessitatibus neque quas veritatis. Non provident reiciendis soluta? lorem
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at laudantium ut. A ab alias error, fuga ipsa iure labore maxime nam nobis officia placeat possimus quaerat rerum, tempore velit?</p>

                        <a href="#">Télécharger la présentation de l'événement</a>
                    </div>
                </div>
            </div>
        </div>


        <!--Fin Transition-->



        <!--Intervenant-E-S-->

        <div class="container intervenant">
            <div class="titre-intervenant">
                <h1>intervenant-E-S</h1>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 intervenant-item">
                    <a href="#intervenant1" class="intervenant-link" data-toggle="modal">
                        <div class="intervenant-hover">
                            <div class="intervenant-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/city.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="intervenant-caption">
                        <h4>Abed Ajraou</h4>
                        <p class="text-muted">Responsable du Patrimoine</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 intervenant-item">
                    <a href="#intervenant1" class="intervenant-link" data-toggle="modal">
                        <div class="intervenant-hover">
                            <div class="intervenant-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/city.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="intervenant-caption">
                        <h4>Abed Ajraou</h4>
                        <p class="text-muted">Responsable du Patrimoine</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 intervenant-item">
                    <a href="#intervenant1" class="intervenant-link" data-toggle="modal">
                        <div class="intervenant-hover">
                            <div class="intervenant-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/city.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="intervenant-caption">
                        <h4>Abed Ajraou</h4>
                        <p class="text-muted">Responsable du Patrimoine</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 intervenant-item">
                    <a href="#intervenant1" class="intervenant-link" data-toggle="modal">
                        <div class="intervenant-hover">
                            <div class="intervenant-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/city.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="intervenant-caption">
                        <h4>Abed Ajraou</h4>
                        <p class="text-muted">Responsable du Patrimoine</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 intervenant-item">
                    <a href="#intervenant1" class="intervenant-link" data-toggle="modal">
                        <div class="intervenant-hover">
                            <div class="intervenant-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/city.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="intervenant-caption">
                        <h4>Abed Ajraou</h4>
                        <p class="text-muted">Responsable du Patrimoine</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 intervenant-item">
                    <a href="#intervenant1" class="intervenant-link" data-toggle="modal">
                        <div class="intervenant-hover">
                            <div class="intervenant-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/city.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="intervenant-caption">
                        <h4>Abed Ajraou</h4>
                        <p class="text-muted">Responsable du Patrimoine</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 intervenant-item">
                    <a href="#intervenant1" class="intervenant-link" data-toggle="modal">
                        <div class="intervenant-hover">
                            <div class="intervenant-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/city.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="intervenant-caption">
                        <h4>Abed Ajraou</h4>
                        <p class="text-muted">Responsable du Patrimoine</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 intervenant-item">
                    <a href="#intervenant1" class="intervenant-link" data-toggle="modal">
                        <div class="intervenant-hover">
                            <div class="intervenant-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/city.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="intervenant-caption">
                        <h4>Abed Ajraou</h4>
                        <p class="text-muted">Responsable du Patrimoine</p>
                    </div>
                </div>
            </div>
            <a class="voir-plus" href="#">Voir tous les intervenants</a>
        </div>




        <!--Fenêtre Intervenant-E-S-->

        <div class="intervenant modal fade" id="intervenant1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Abed Ajraou</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="images/city.jpg" alt="">
                                <p><a href="#">Abed Ajraou</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, ad amet assumenda blanditiis consequuntur dolorum esse facere officiis praesentium quibusdam quidem quis recusandae repellat repudiandae saepe sed similique tempora tenetur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae commodi consequuntur, dicta, ea earum laboriosam laborum laudantium nihil nisi non nulla perferendis quaerat quisquam repellat, temporibus ullam voluptates voluptatibus.</p>
                                <p>Vous pouvez aller voir son site <a href="#">ici</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Fin Intervenant-E-S-->

        <div class="container partenaire-exposant">
            <div class="titre-partenaire-exposant">
                <h1>partenaire & exposant-E-S</h1>
                <hr>
            </div>
        </div>



        <section id="contact" class="map">
            <div class="row">
                <div class="col-md-3">
                    <h2>Rendez-vous</h2>
                    <hr>
                    <h4>151 boulevard de l'hôpital</h4>
                    <h4>75013 Paris</h4>
                </div>
                <div class="col-md-9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.9131090534433!2d2.355500107628238!3d48.833244437900206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6718c8bdc82cf%3A0x35f8de1b0a103495!2s151+Boulevard+de+l&#39;H%C3%B4pital%2C+75013+Paris!5e0!3m2!1sfr!2sfr!4v1448557426774"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>

        <footer>
            <div class="container-fluid footer_accueil">
                <div class="row">
                    <div class="col-xs-3 .col-sm-3 .col-md-3 logo">
                        <div class="butfooter">
                            <p>LOGO</p>
                        </div>
                    </div>

                    <div class="col-xs-3 .col-sm-3 .col-md-3 copyright">

                        <p>COPYRIGHT 2015</p>

                    </div>

                    <div class="col-xs-6 .col-sm-6 .col-md-6">
                        <div class="footerdroite">
                            <div class="butfooter">
                                <p>A PROPOS</p>
                            </div>
                            <div class="butfooter">
                                <p>MENTIONS LEGALES</p>
                            </div>
                            <div class="butfooter">
                                <p>CONTACT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>


    </body>

    <script type="text/javascript" src="node_modules/bootstrap/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap/js/toggleList.js"></script>


</html>