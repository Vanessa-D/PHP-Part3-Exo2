<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 2</title>
</head>
<body>
    <p>
        Créer une fonction qui retourne une chaîne de caractères : 
    </p>
    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php
            function returnString($var){
                /* La fonction strval retourne la valeur de la variable donnée 
                   sous la forme d'une chaîne de caractères */

                /* Démonstration de la conversion en chaînes de caractères avec gettype */   
                if(gettype($var) == 'string'){
                    echo $var. ' (' .gettype($var). ') reste ' .strval($var). ' (' .gettype(strval($var)). ')<br>';
                }else{
                    echo $var. ' (' .gettype($var). ') devient ' .strval($var). ' (' .gettype(strval($var)). ')<br>';
                }
            }
            returnString('carotte');
            returnString(true);
            returnString(10);
            returnString('0,7');
        ?>
    </div>
</body>
</html>