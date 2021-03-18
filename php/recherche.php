<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="description" content=" Vous voulez participer à la recherche de tous ceux qui ont consacrés leur vie au sauvetage de personnes en mer ou vous recherchez une personne de votre famille en tant que saveteur en mer ? Venez essayer notre site !">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Les Sauveteurs en Mer</title>

    <link rel="stylesheet" type="text/css" href="../css/search.css"/>
    <link rel="stylesheet" type="text/css" href="../css/article.css"/>

    <link rel="icon" href="../img/Entete.png">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

    <script type="text/javascript" src="../js/jquery.js"></script>

</head>

<body id="haut">

    <img ref="../index.php" class="logo" src="../img/Logo-remake.png" alt="logo">
    <header>

        <div class="title">
            <h1>Les sauveteurs<br/>en Mer</h1>

            <h2>Sauveteurs du Dunkerquois 1740-2021</h2>

            <ul>
            <li><a href="#sch" class="cd-scroll">Qui sommes-nous ?</a></li>
                <li><a href="">Contactez-nous !</a></li>
            </ul>
        </div>
    </header>

        <div class="centerform">
        <form method="POST" action="recherche.php">
            <label for="search">Rechercher un sauveteur</label>
            <input id="search" type="search" placeholder="Rechercher..." name="recherche" />
            <button type="submit">Go</button>    
        </form>
    </div>

    <h2>Résultat de la recherche</h2>

    <div id="grid-article">

	<!-- Léo Lassus - PHP - Sauveteur de Dunkerque -->

<?php
	 
	$connect = new PDO('mysql:host=localhost;dbname=sdktest', 'root', '',[
    	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  	]);


    $sql='select p.pers_matricule as matriculepers, p.pers_nom as nompersonne, p.pers_prenom1 as prenompersonne, p.pers_nationalite as nationalitey,
	p.pers_ddn as naissancepersonne, p.pers_lieu_naissance as lieunaissancepersonne, b.bat_nom as nomdubateau, 
	stm.sort_mer_date_sauvetage as lapetitedate from concerne_sm_avec_commandant_et_equipe_sauvetage as csc 
	inner join personne as p on csc.autre_personne1 = p.pers_matricule inner join bateau as b on csc.autre_bateau1 = 
	b.bat_matricule inner join sortie_en_mer as stm on csc.sort_mer_matricule = stm.sort_mer_matricule';


				$params=[];
				if(isset($_POST['recherche'])){
					$sql.=' where p.pers_nom like :nom;';
					$params[':nom']="%".addcslashes($_POST['recherche'],'_')."%";
				}
				$resultats=$connect->prepare($sql);
				$resultats->execute($params);
				
				if($resultats->rowCount()>0){
					while($d=$resultats->fetch(PDO::FETCH_ASSOC)){
					?>

                        <article>
                            <div class="container">
                            <h3> <?=$d['nompersonne']?> <?=$d['prenompersonne']?></h3>

                            <div class="button">
	                            <a href="#">
		                            En savoir plus
		                            <span class="shift">›</span>
	                            </a>
	                            <div class="mask"></div>
                            </div>
                    </div>

                        </article>
					<?php
					}
					$resultats->closeCursor();
				}
				else echo '<tr><li colspan=4>aucun résultat trouvé</li></tr>'.
				$connect=null;
?>

            </div>

</body>
</html>