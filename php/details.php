<html>

<?php 



$connect = new PDO('mysql:host=localhost;dbname=sdktest', 'root', '',[
    	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  	]);
	
	
	$le_matricule = $_GET["id"];
	//var_dump($le_matricule);
	
	
$sql="select p.pers_matricule as matriculepers, p.pers_nom as nompersonne, p.pers_prenom1 as prenompersonne, p.pers_nationalite as nationalitey,
	p.pers_ddn as naissancepersonne, p.pers_lieu_naissance as lieunaissancepersonne, b.bat_nom as nomdubateau, 
	stm.sort_mer_date_sauvetage as lapetitedate from concerne_sm_avec_commandant_et_equipe_sauvetage as csc 
	inner join personne as p on csc.autre_personne1 = p.pers_matricule inner join bateau as b on csc.autre_bateau1 = 
	b.bat_matricule inner join sortie_en_mer as stm on csc.sort_mer_matricule = stm.sort_mer_matricule";
	

				
				
				$sql.=" where p.pers_matricule like '$le_matricule';";
				//var_dump($sql);
				$resultats=$connect->prepare($sql);
				$resultats->execute();
				
				if($resultats->rowCount()>0){
				$d=$resultats->fetch(PDO::FETCH_ASSOC)
				?>

								<li>Prénom : <?=$d['prenompersonne']?></li> 
								<li>Nationalité : <?=$d['nationalitey']?></li> 
								<li>Né(e) le  : <?=$d['naissancepersonne']?></li> 
								<li>Né(e) à : <?=$d['lieunaissancepersonne']?></li> 
								<li>Bateau : <?=$d['nomdubateau']?></li> 
								<li>Date du sauvetage : <?=$d['lapetitedate']?></li>
			<?php
			
			
					$resultats->closeCursor();
				}
				?>
			</html>					