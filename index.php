<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    
    <title>Table de multiplication PHP</title>

</head>

<body>

<div id="colorBar"></div>



<section id="haut" class="haut">
    <h1>TABLE DE MULTIPLICATION</h1>
</section>

<section id="selection" class="selection">
    <main>
        <form id="choixTables" methode="get">
            <select id="tables" name="tables">
                <option value="1" name="Table1" <?php if($_GET['tables'] == "Table1") echo 'selected' ?> >Table 1</option>
                <option value="2" name="Table2" <?php if($_GET['tables'] == "Table2") echo 'selected' ?> >Table 2</option>
                <option value="3" name="Table3" <?php if($_GET['tables'] == "Table3") echo 'selected' ?> >Table 3</option>
                <option value="4" name="Table4" <?php if($_GET['tables'] == "Table4") echo 'selected' ?> >Table 4</option>
                <option value="5" name="Table5" <?php if($_GET['tables'] == "Table5") echo 'selected' ?> >Table 5</option>
                <option value="6" name="Table6" <?php if($_GET['tables'] == "Table6") echo 'selected' ?> >Table 6</option>
                <option value="7" name="Table7" <?php if($_GET['tables'] == "Table7") echo 'selected' ?> >Table 7</option>
                <option value="8" name="Table8" <?php if($_GET['tables'] == "Table8") echo 'selected' ?> >Table 8</option>
                <option value="9" name="Table9" <?php if($_GET['tables'] == "Table9") echo 'selected' ?> >Table 9</option>
                <option value="10"name="Table10" <?php if($_GET['tables'] == "Table10") echo 'selected' ?> >Table 10</option>
            </select>
            <p><em>Choisir la table à afficher<em></p>
            <input type="submit" id="voir" name ="voir" value = "VOIR">
        </form>
    </main>
    <!-- récupérer le choix de la table-->
    <!-- afficher le numéro de la table -->
    <!-- récupérer le numéro de la table -->
    <!-- afficher la table avec le numéro -->


    <div id="afficheTables">
        <?php
            if (isset($_GET['voir'])) {                        // Si l'utilisateur clic sur "voir"

                $numTable = $_GET['tables'];                   // Get appel le "name" du select et redonne la "value"
                
                echo "<b>Table de $numTable </b>";

                for ($i = 1; $i <= 30; $i++) {                 // boucle de table de 1 à 30 
                $resultat = $i * $numTable;                    // resultat = boucle * le numéro de table récupérer 
                echo "<p><b>$i x $numTable = $resultat</b></p>";       // affiche resultat de la boucle $i "x" le numéro de table 
                }
               
            }
        ?>   


    </div>

</section>

<Footer>
</Footer>
        
    <script src="script.js"></script>
</body>
</html>

