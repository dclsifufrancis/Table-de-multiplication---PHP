<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style.css">
    <title>Table de multiplication PHP</title>

</head>

<body>

<section id="haut">
    <h1>TABLE DE MULTIPLICATION</h1>
</section>

<section id="selection">

    <form action="?" methode="get">
        <select id="choixTable">
            <option value="Table1"id="Table1" name="Table1">Table 1</option>
            <option value="Table2"id="Table2" name="Table2">Table 2</option>
            <option value="Table3"id="Table3" name="Table3">Table 3</option>
            <option value="Table4"id="Table4" name="Table4">Table 4</option>
            <option value="Table5"id="Table5" name="Table5">Table 5</option>
            <option value="Table6"id="Table6" name="Table6">Table 6</option>
            <option value="Table7"id="Table7" name="Table7">Table 7</option>
            <option value="Table8"id="Table8" name="Table8">Table 8</option>
            <option value="Table9"id="Table9" name="Table9">Table 9</option>
            <option value="Table0"id="Table10"name="Table10">Table 10</option>
        </select>
        <p>Choisir la table à afficher</p>
        <input type="submit" id="voir" name ="voir" value = "VOIR">
    </form>

    <!-- récupérer le choix de la table et afficher la table -->
    <div id="afficheTable">
        <?php
        if(isset($_GET['voir'])){ // si formulaire soumis
        echo $_GET['choixTable']; // recupérer le choix de la table
        echo $choixTable ;    


        }
        ?>    
        

        <?php
        // for ($i = 1; $i <= 10; $i++)
        // {
        //     Echo 'Table de multiplication de '.$i.'<br>';
        //     for ($j = 1; $j <= 30; $j++)
        //     {
        //         echo $i.' x '.$j.' = '.$i*$j.'<br>';
        //     }
        // }
        ?>








    </div>
</section>

        
    <script src="script.js"></script>
</body>
</html>

