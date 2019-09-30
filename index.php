<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les variables</title>
</head>
<body>
    <?php
    //Variables
    $nom = "Smith";
    $prenom = "Will";
    $age = 35;
    $km = 1;
    $string = "cordes";
    $int = 42;
    $float = 3.14;
    $bool = true;
    $add = 3+4;
    $mult =5*20;
    $div = 45/5;
    ?>
    
    <?php
    
    ?>


    <?php
        echo  $prenom . " ". $nom . " " . $age . " ans." . "<br/>";
        $km = 3;
        echo "km : ". $km . "<br>" .' changement de la valeur ci-dessous'. "<br/>";
        $km = 125;
        echo "km : ". $km . '<br>';

        echo "Pour une guitare il faut des $string. <br>
        A ce que j'ai compris le sens de la vie c'est $int. <br>
        Mais je sais surtout que pi c'est $float. <br><br>";

        if($bool == true){
            echo "J'ai du faire un if pour afficher mon booléens. <br> <br>";
        }

        echo "addition : $add. multiplication : $mult. division : $div.";
    ?>


</body>
</html>