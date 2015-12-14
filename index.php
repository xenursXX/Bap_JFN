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
                    <h2 class="animated fadeIn">forum <strong><?php// the_field("");?></strong> paris</h2>
                </div>
            </div>
        </div>

        <!--Fin Header Forum-->

        <!--Présentation-->

        <div class="container presentation">
            <div class="contenu text-center">
                <h1>Présentation Jeunes Femmes et Numérique</h1>
                <hr>
                <p class="texte_presentation text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam culpa dolore dolores ea error, et expedita illum natus nisi nostrum numquam quas qui quidem repudiandae tempore veniam vitae? Inventore, repellat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor magnam natus nemo nesciunt optio, quasi qui quibusdam quo reiciendis veritatis vitae. Alias aut consequuntur dolorem obcaecati perspiciatis ratione repellat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium blanditiis, corporis dicta dolores eaque error exercitationem laborum magnam minus molestiae? Deserunt dolorem illo, labore maxime nostrum rem tempore veritatis voluptates.
                    <br>
                    <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur mollitia nihil non quam reprehenderit veritatis. Accusantium asperiores atque dicta et harum molestias sed tenetur voluptas. Consequatur in inventore minima vel? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet architecto debitis in nobis odio qui quo quod recusandae, saepe similique, sit! Animi deleniti dicta enim expedita, magnam velit voluptatibus.
                    <br>
                    <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorum error excepturi explicabo facere fugiat illo impedit in inventore modi nostrum optio praesentium, quas quis repellat repellendus temporibus vitae voluptas.</p>
                <hr>
            </div>
        </div>

        <!--Fin Présentation-->

        <!--Transition 1-->

        <div class="container-fluid transition">
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
                    </div>
                </div>
            </div>
        </div>


        <!--Fin Transition-->

        <!--L'équipe-->
        <div class="container-fluid equipe">
            <div class="contenu_equipe text-center">
                <h1>L'Équipe</h1>
                <hr>
                <div class="row">
                    <div class="col-md-3 col-sm-6 ">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body">
                                <h4>Abed Ajraou </h4>
                                <hr>
                                <h5>Responsable du partrimoine Business Intelligence</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body">
                                <h4>Abed Ajraou </h4>
                                <hr>
                                <h5>Responsable du partrimoine Business Intelligence</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body">
                                <h4>Abed Ajraou </h4>
                                <hr>
                                <h5>Responsable du partrimoine Business Intelligence</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body">
                                <h4>Abed Ajraou </h4>
                                <hr>
                                <h5>Responsable du partrimoine Business Intelligence</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body">
                                <h4>Abed Ajraou </h4>
                                <hr>
                                <h5>Responsable du partrimoine Business Intelligence</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body">
                                <h4>Abed Ajraou </h4>
                                <hr>
                                <h5>Responsable du partrimoine Business Intelligence</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body">
                                <h4>Abed Ajraou </h4>
                                <hr>
                                <h5>Responsable du partrimoine Business Intelligence</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body">
                                <h4>Abed Ajraou </h4>
                                <hr>
                                <h5>Responsable du partrimoine Business Intelligence</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Fin Équipe-->


        <!--Partenaires-->


        <section id="partenaires">
            <div class="col-md-12 slider">
                <div class="container-fluid">
                    <div class="row">
                        <h2>PARTENAIRES ET EXPOSANT-E-S</h2>
                        <hr>
                        <div class="filter">
                            <select class="js-tp-voucher-filter form-control">
                                <option value="__">all</option>
                                <option value="|A|">A</option>
                                <option value="|B|">B</option>
                                <option value="|C|">C</option>
                                <option value="|D|">D</option>
                                <option value="|E|">E</option>
                            </select>
                        </div>
                        <div class="content">
                            <h2>Responsive Display</h2>
                            <div class="js-tp-slider-filter">
                                <div class="block-1" data-filter="|A|B|"><h3>A, B</h3></div>
                                <div class="block-1" data-filter="|A|D|"><h3>A, D</h3></div>
                                <div class="block-1" data-filter="|B|D|"><h3>B, D</h3></div>
                                <div class="block-1" data-filter="|C|A|"><h3>C, A</h3></div>
                                <div class="block-1" data-filter="|E|"><h3>E (1)</h3></div>
                                <div class="block-1" data-filter="|C|"><h3>C (2)</h3></div>
                                <div class="block-1" data-filter="|B|"><h3>B (3)</h3></div>
                                <div class="block-1" data-filter="|A|"><h3>A (4)</h3></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!--Fin Partenaires-->

        <!--Newsletter-->


        <section id="newsletter_accueil">
            <div class="col-md-6 abonnement">
                <div class="container-fluid">
                    <div class="row">
                        <h2>S'ABONNER A LA NEWSLETTER</h2>
                        <hr>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="votre@mail.com" id="email" required
                                   data-validation-required-message="Please enter your email address.">

                            <p class="help-block text-danger"></p>
                            <button type="submit" class="btn btn-xl">S'inscrire</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 twitter">
                <div class="container-fluid">
                    <div class="row">
                        <h2>Emplacement du plugin wordpress twitter</h2>
                    </div>

                </div>
            </div>
        </section>

        <!--Fin Newsletter-->

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
        <script type="text/javascript" src="node_modules/bootstrap/js/slick.min.js"></script>
        <script type="text/javascript" src="node_modules/bootstrap/js/trieur.js"></script>



</html>
