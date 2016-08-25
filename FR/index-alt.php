<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>La Dianétique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Orbitron:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href='assets/css/font-awesome.min.css' />
    <link rel="stylesheet" type="text/css" href='assets/css/animate.min.css' />
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css" media="all" />
    <style type="text/css">
        #offer_shape {
            width: 120px;
            height: 120px;
            position: absolute !important;
            right: -8px;
            bottom: -5px;
            display: table;
        }
        #offer_shape .text-holder {
            height: 100px;
            display: table-cell;
            vertical-align: middle;
            border-radius: 100%;
            margin-top: 28px;
            margin-left: 28px;
            position: relative;
            font-size: 15px;
        }
        #order_form {
            padding: 10px;
        }
        #order_form h5 {
            color: white;
            text-align: center;
            font-size: 15px;
            margin-bottom: 15px;
        }
        #order_form .form-input {
            margin-bottom: 5px !important;
        }
        #order_form input {
            padding: 5px !important;
        }
        #order_form .cta-button {
            font-size: 15px
            margin-top: 0px;
        }
        #order_form .form-input.error:after {
            position: absolute;
            right: 2px;
            top: 2px;
            padding: 3px 5px;
        }
        #video_box h1 {
            text-align: center;
            margin-bottom: 30px;
            font-family: 'Orbitron', sans-serif;
            line-height: 1.6em;
            font-weight: bold;
            color: white;
        }
        @media (max-width: 800px) {
            .col-30, .col-70 {
                width: 100%;
            }

            #order_form {
                padding: 15px;
                margin-bottom: 20px;
            }
            #order_form h5 {
                color: white;
                text-align: center;
                font-size: 15px;
                margin-bottom: 15px;
            }
            #order_form .form-input {
                margin-bottom: 10px !important;
            }
            #order_form input {
                padding: 10px !important;
            }
            #order_form .cta-button {
                font-size: 15px
                margin-top: 0px;
            }
            #order_form .form-input.error:after {
                padding: 8px !important;
            }
        }
    </style>
</head>
<body>
    <header id="top_bar" class="full-block">
        <div class="container">
            <a id="logo" href="/"> Livre Dianétique.fr</a>
        </div>
    </header>
    <section class="full-block skyblue">
        <div id="backdrop"></div>
        <div style="height:60px"></div>
        <div class="container">
            <div class="col-30">
                <div id="dvd_offer">
                    <div rel="img_holder" title="DVD La Dianétique offert">
                        <div id="offer_shape" class="star-shape animated rotateIn">
                            <div class="shape"></div>
                            <div class="text-holder">DVD Offert</div>
                        </div>
                        <img class="img-responsive" src="assets/images/dvd_offer_plain.png" alt="DVD La Dianétique offert" />
                    </div>
                </div>
                <div id="order_form">
                    <h5>Merci d'indiquer votre adresse de livraison.</h5>
                    <form>
                        <input type="hidden" name="request" value="order" />
                        <div class="form-input">
                            <i class="fa fa-user"></i>
                            <input type="text" name="name" placeholder="Votre nom *" data-required="true" />
                        </div>
                        <div class="form-input">
                            <i class="fa fa-home"></i>
                            <input type="text" name="address" placeholder="Votre adresse *" data-required="true" />
                        </div class="form-input">
                        <div class="form-input">
                            <i class="fa fa-phone"></i>
                            <input type="text" name="phone" placeholder="Votre numéro de téléphone" />
                        </div>
                        <div class="form-input">
                            <i class="fa fa-envelope"></i>
                            <input type="text" name="email" placeholder="Votre adresse e-mail" />
                        </div>
                        <div>
                            <input type="submit" class="cta-button" value="Envoyer" />
                        </div>
                    </form>
                </div>
            </div>
            <div id="video_box" class="col-70">
                <h1>Une Solution Simple Pour Être Bien Avec Soi-Même Et Les Autres</h1>
                <div id="video_holder">
                    <script src="//fast.wistia.com/embed/medias/uct89oqo67.jsonp" async></script>
                    <script src="//fast.wistia.com/assets/external/E-v1.js" async></script>
                    <div class="wistia_responsive_padding" style="padding:54.39% 0 0 0;position:relative;">
                        <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;background-color:black;">
                            <div class="wistia_embed wistia_async_uct89oqo67 videoFoam=true" style="height:100%;width:100%">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height:50px;clear:both"></div>
    </section>
    <!--
    <section id="video_block" class="full-block">
        <div class="back-overlay"></div>
        <div class="container">
            <div style="height:50px"></div>
            <div class="col-100">
                
            </div>
            <div style="height:50px"></div>
        </div>
    </section>
    -->
    <section id="purchase_block" class="full-block">
        <div class="back-overlay"></div>
        <div id="purchase_pointer">
            <div class="container">
                <h3>DÉCOUVREZ UNE SOLUTION SIMPLE POUR PARVENIR À LA CONFIANCE EN SOI.</h3>
            </div>
        </div>
        <div id="purchase_item" class="container">
            <div style="height:60px;clear:both"></div>
            <div class="col-60">
                <img class="img-responsive" src="assets/images/best_seller.png" alt="La Dianétique est un best-seller">
            </div>
            <div class="col-40">
                <div id="purchase_option">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="QM3Z7UZWHB3SU">
                        <p>Acheter :</p>
                        <p>
                            <select name="os0">
                                <option value="Le livre">Le livre €20,00 EUR</option>
                                <option value="Le film (DVD & Blu-ray)">Le film (DVD & Blu-ray) €23,00 EUR</option>
                                <option value="Le lot livre + film">Le lot livre + film €35,00 EUR</option>
                            </select>
                        </p>
                        <p>Langue :</p>
                        <p>
                            <select name="os1">
                                <option value="Français">Français </option>
                                <option value="Anglais">Anglais </option>
                                <option value="Allemand">Allemand </option>
                                <option value="Arabe">Arabe </option>
                                <option value="Chinois">Chinois </option>
                                <option value="Espagnol">Espagnol </option>
                                <option value="Italien">Italien </option>
                                <option value="Japonais">Japonais </option>
                                <option value="Russe">Russe </option>
                                <option value="Turc">Turc </option>
                            </select>
                        </p>
                        <p>
                            <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynow_LG.gif" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne" />
                            <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <div style="height:35px"></div>
    </section>
    <section id="info_block">
        <div style="height: 50px;clear:both"></div>
        <div class="container">
            <div class="col-50">
                <h1>Un best-seller</h1>
                <p>
                    La Dianétique a été écrit en 1950 et vendu à plus de 22 millions d'exemplaires à travers le monde. Il est traduit en 53 langues et disponible à la fois en livre et en DVD. Cliquez ici pour en savoir plus sur le livre et le DVD.
                </p>
            </div>
            <div class="col-50">
                <img class="img-responsive" src="assets/images/best-seller.jpg" alt="La Dianétique est un best-seller" />
            </div>
        </div>
        <div class="container" style="height:30px"></div>
        <div class="container">
            <div class="col-50">
                <img class="img-responsive" src="assets/images/dianetique-definition.png" alt="Dianétique : du grec Dia et Noûs">
            </div>
            <div class="col-50">
                <h1>Une définition de la Dianétique</h1>
                <p>
                    La Dianétique traite également des émotions inexpliquées que nous ressentons et qui sapent notre confiance en nous : la peur, la crainte de tout et de rien, l’hypocrisie, les hésitations permanentes, etc. Une fois ces mécanismes compris, vous ne serez plus ignorant fasse à vos réactions indésirables. Vous pourrez y faire quelque chose par le seul pouvoir de votre compréhension. 
                </p>
                <p>
                    La Dianétique explique en détail des découvertes jusqu’ici ignorées dans le domaine de la compréhension de l’homme. Elles permettent de découvrir la source des comportements irrationnels qui détruisent la confiance que nous pouvons avoir en nous.
                </p>
            </div>
        </div>
        <!--
        <div class="container" style="height:30px"></div>
        <div class="container">
            <div class="col-50">
                <h1>La Dianétique et la Scientologie</h1>
                <p>
                    La Dianétique est le livre fondateur de la Scientologie. Ce livre vous apportera à lui seul une compréhension de vous-même et des autres.
                </p>
            </div>
            <div class="col-50">
                <div class="videoWrapper">
                    <iframe src="https://www.youtube.com/embed/xQq3eiSR9gc?rel=0" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
        -->
        <div class="container" style="height:55px"></div>
    </section>
    <footer>
        <div style="height:50px;clear:both"></div>
        <div class="container">
            <div rel="map" class="col-50">
                <a href="https://www.google.fr/maps/place/69+Rue+Legendre,+75017+Paris/@48.8870294,2.3185165,17z/data=!3m1!4b1!4m2!3m1!1s0x47e66fae021eee05:0xfc63c3bd637f5a9f?hl=fr" target="_blank">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=48.8870294,2.3185165&amp;zoom=15&amp;size=280x220&amp;markers=color:red|48.8870294,2.3185165&amp;sensor=false" alt="Plan du quartier">
                </a>
            </div>
            <div rel="info" class="col-50">
                <h2>Librairie SEL</h2>
                <p>Librairie de livres de Scientologie et de Dianétique</p>
                <p>Adresse :</p>
                <p>Scientologie Espace Librairie</p>
                <p>69 Rue Legendre</p>
                <p>75017 Paris</p>
                <p>Téléphone : 01 46 27 65 00</p>
                <p>Email : contact@librairie-sel.com</p>
            </div>
        </div>
        <div class="socialnetwork">
            <a href="https://www.facebook.com/librairie.scientologie" target="_blank"><img src="assets/images/facebook-sel.jpg" alt="Facebook" /></a> 
            <a href="http://www.twitter.com/LibrairieSEL" target="_blank"><img src="assets/images/twitter-sel.jpg" alt="Twitter" /></a>  
            <a href="https://plus.google.com/b/106126769346190647845/+Librairiesel-livre-de-scientologie-et-dianetique/" target="_blank" rel="publisher"><img src="assets/images/google-plus-sel.jpg" alt="Google plus" /></a>
            <a href="http://librairiesel.tumblr.com/" target="_blank" rel="publisher"><img src="assets/images/tumblr-sel.jpg" alt="Tumblr" /></a> 
            <a href="https://www.youtube.com/channel/UCDxKbJbscyKtAt_ux38uQ5w/feed" target="_blank" rel="publisher"><img src="assets/images/youtube-sel.jpg" alt="Youtube" /></a> 
        </div>
        <div class="copyright">
            <p>&copy; 2016 SARL SEL. Tous droits de reproduction et d'adaptation réservés. Dianétique, La Dianétique, le symbole de La Dianétique, Scientologie, le symbole de la Scientologie et L. Ron Hubbard sont des marques déposées appartenant au Religious Technology Center et sont utilisées avec sa permission. Réalisé par nos soins.</p>
            <a href="/mentions-legales.php">Mentions Légales</a>
        
            <p style="display:none">âme - fondements de la vie - sens de la vie - spiritualité - être bien avec soi même et les autres - livre sur soi-même - compréhension de soi et de l'Homme - confiance en soi - Scientologie - Dianétique - livre bien-être - peur de la peur - peur - pensée - pouvoir -avoir plus de confiance - assurance en soi - se comprendre soi-même - livre bien-être - le pouvoirs de la pensée</p>
        </div>
        <div style="height:50px;clear:both"></div>
    </footer>
    <div id="modal_message" class="modal">
        <div class="box">
            <div class="text">Default message.</div>
            <div class="control">
                <button class="plain-button">Ok</button>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-2.2.3.min.js"></script>
    <script src="assets/js/form.js"> </script>
</body>
</html>