<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shifumi</title>
</head>
<body>
    <h1>Jeu du Shifumi</h1>

    <form action="" method="post">

    <?php
        //var_dump($_POST); voit la valeur quapere avoir fait un select
    if(!empty($_POST)){ //JAI CLIQUE SUR VALIDER
        echo "Vous avez choisi " . $_POST['choix'] . "<br>";

        $possibilites = array('pierre', 'feuille', 'ciseau'); //CHOIX DE LORDI
        $choix_ordi = rand(0,2);
        echo "J'ai choisi " . $possibilites[$choix_ordi]  . "<br>";
        $choix_joueur = $_POST['choix'];
        $choix_ordi = $possibilites[$choix_ordi];

        if( $choix_joueur== $choix_ordi){ // cas meme que lordi 
            echo "Match null. On recommence...";
        }elseif( 
        ($choix_joueur=='ciseau' && $choix_ordi == 'feuille') ||
        ($choix_joueur=='pierre' && $choix_ordi == 'ciseau') ||
        ($choix_joueur=='feuille' && $choix_ordi == 'pierre')
        ){ //cas ou on gagne
            echo "Vous gagnez!!";
        }else { // cas ou lordi gagne
            echo "Je gagne !!";
        }
    }
    
    ?>
    <form action="" method="post">
    <select name="choix">
        <option value="pierre">Pierre</option>
        <option value="feuille">Feuille</option>
        <option value="ciseau">Ciseau</option>
    </select>

        <button type="submit">Valider</button>
    </form>

</body>
</html>