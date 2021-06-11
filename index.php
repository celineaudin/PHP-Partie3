<!DOCTYPE html>
<html>
<body>

  <h1>Exercice 1</h1>
  <p>Créez une fonction qui retourne un booléen.</p>
  <?php
    function ex1() : bool {
      return true;
    }
    echo ex1();
  ?>

  <h1>Exercice 2</h1>
  <p>Créez une fonction qui retourne une chaîne de caractère</p>
  <?php
    $string = 'Ceci est l\'exercice 2 de la partie3';
    function ex2(string $string = 'coucou') : string {
      return $string;
    }
    echo ex2();
  ?>

  <h1>Exercice 3</h1>
  <p>Créez deux variables contenant chacune une string. Créez une fonction qui retourne
    le contenu de ces deux variables.</p>
  <?php
    $text1 = 'Céline';
    $text2 = 'Audin';
    $text3 = 'ca va ?';
    $text4 = 'yo';
    $text5 = 'ya';
    function ex3($string1, $string2){
    $concatText = $string1. ' '. $string2;
      return $concatText;
    }
    echo ex3 ($text1, $text3);
    echo ex3 ('yo','ya ');
    echo ex3 ($text4, $text5);
  ?>

 <h1>Exercice 4</h1>
 <p>Créez une fonction qui retourne deux nombres aléatoire allant de 1 à 15.
   Si le premier nombre est plus grand que le deuxième affichez "le premier nombre est
   plus grand que le deuxième" sinon si le deuxième nombre est plus grand affichez
   "le premier nombre est plus petit que le deuxième". affichez "les deux nombres sont égaux"
   si les deux nombres sont identiques.</p>
  <?php
   $premier = rand(1, 15);
   $deuxieme = rand(1, 15);
   function ex4($random1, $random2) {
    if ($random1 < $random2) {
        return "$random1 plus petit que $random2";
    }
    if ($random1 > $random2) {
        return "$random1 plus grand que $random2";
    }
        return "$random1 égal à $random2";
    }
    echo $premier . '<br>';
    echo $deuxieme . '<br>';
    echo ex4($premier, $deuxieme);
  ?>

  <h1>Exercice 5</h1>
  <p>Créez une fonction qui retourne une chaîne de caractère et un nombre aléatoire.</p>
  <?php
     $random = rand(0,100);
     $chaine = 'hello';
     function ex5($string1, $string2){
      $concatText = $string1. ' '. $string2;
         return $concatText;
     }
        echo ex5($chaine, $random);
      ?>

  <h1>Exercice 6</h1>
  <p>Créez une fonction qui retourne l'addition de trois nombres.</p>
  <?php
        function ex6($nombre1 = 3, $nombre2 = 5, $nombre3 = 8){
        $addition = $nombre1 + $nombre2 + $nombre3;
            return 'l\'addition de '. $nombre1 . ' + ' . $nombre2 . ' + ' . $nombre3 . ' = ' . $addition;
        }
        echo ex6();
  ?>
  </body>
</html>
