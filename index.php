<!DOCTYPE html>
<html lang="fr-FR">

<head>

    <meta charset="utf-8"/>
    <meta name="description" content=" Vous voulez participer à la recherche de tous ceux qui ont consacrés leur vie au sauvetage de personnes en mer ou vous recherchez une personne de votre famille en tant que saveteur en mer ? Venez essayer notre site !"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Les Sauveteurs en Mer</title>

    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link rel="icon" href="img/Entete.png"/>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

</head>

<body id="haut">

    <a href="index.php"><img class="logo" src="img/Logo-remake.png" alt="logo"></a>
    <header>

        <div class="title">
            <h1>Les sauveteurs<br/>en Mer</h1>

            <h2>Sauveteurs du Dunkerquois 1740-2021</h2>

            <ul>
                <li><a href="#">Contactez-nous !</a></li>
            </ul>
        </div>

        <div class="scroll-wrap">
            <a href="#sch" class="cd-scrolling">
                <img src="img/icons/arrow-down-sign-to-navigate.svg" alt="Flèche qui descend"/>
            </a>
        </div>

    </header>

    <div id="sch"></div>

    <div class="centerform">
        <form method="POST" action="php/recherche.php">
            <label for="search">Rechercher un sauveteur</label>
            <input id="search" type="search" placeholder="Rechercher..." name="recherche" required />
            <button type="submit">Go</button>    
        </form>
    </div>
    

    <main>
        <div id="grid">

            <img src="img/28519.jpg" alt="Test"/>

            <div class="text">
                <h2>L'histoire des sauveteurs !</h2>
                <p>
                    Des hommes, des femmes et aussi des enfants ont agi, parfois au péril de leur vie pour sauver leurs
                    semblables que ce soit en mer, dans les ports, les plages, les canaux voire dans les zones
                    habitées.<br><br>

                    Vous découvrirez la vie et les actes de nos sauveteurs emblématiques (Looten, Lauwick ...) et des
                    actes individuels qui méritent d'être rappelés à la mémoire collective.<br><br>

                    S'ils étaient souvent marins ou proches du monde maritime il ne faut pas oublier nos douaniers qui,
                    à partir des années 1860 assureront, de par leur présence permanente dans le secteur portuaire, le
                    sauvetage d'un nombre conséquent de personnes.</p>
            </div>

        </div>
    </main>


    <footer>

        <div class="first">
            <a href="#"><img src="img/Logo-remake.png" alt="logo"></a>
        </div>
   
            <div class="container_deux">
                <h2>Sources</h2>
                <ul class="sources">
                    <li>La Société Centrale <br> de Sauvetage des Naufragés</li>
                    <li>Les Hospitaliers Bretons</li>
                    <li>Société Humaine de Dunkerque</li>
                    <li>La SCSN et la SNSM</li>
                </ul>
            </div>
            
            <div class="container_un">
                <h2>Legal</h2>
                <ul class="legal">
                    <li>Copyright</li>
                    <li>Les termes d'utilisations</li>
                    <li>RGPD</li>
                </ul>
            </div>
        </div>
        
    </footer>

            <!--<ul class="media">
                <li class="FB"><a href="https://www.facebook.com/groups/938396409644949/"><img src="img/icons/facebook.png" alt="Facebook"></a></li>
                <li class="TW"><a href="https://twitter.com/boutelierphili1"><img src="img/icons/twitter.png" alt="Twitter"></a></li>
                <li class="mail"><a href=""><img src="img/icons/email.svg" alt="Mail"></a></li>
            </ul>-->
    

    <div id="copyright">
        <ul>
            <li>Copyright GCL - 2020/2021</li>
       </ul>
    </div>

</body>

</html>