<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          $texte = "hello world !";

          // On écrit le contenu de la variable 'texte' dans la page Web
          echo $texte;
          ?>
          <br>

        <?php
          //Exercice 4
          $prenom = "Marc";

          echo "Bonjour " . $prenom;
          //Fonctionne
          echo "Bonjour $prenom";
          //Fonctionne
          echo 'Bonjour $prenom';
          //n'affiche pas la valeur de la variable

          echo $prenom;
          //Fonctionne
          echo "$prenom";
          //Fonctionne
          ?>

          <br>
        <?php
          //Exercice 5
          $marque = "Audi";
          $couleur = "Violet";
          $immatriculation = "FT653RD";

          echo "Voiture $immatriculation de marque $marque (couleur $couleur)";

          $voiture1 = array(
            'immatriculation' => '15sh36',
            'marque' => 'Modus',
            'couleur' => 'violet'
            );

          echo "<pre>";
          print_r($voiture1);
          echo "</pre>";

          echo "Voiture $voiture1[immatriculation] de marque $voiture1[marque] (couleur $voiture1[couleur])";

          $voiture2 = array(
            'immatriculation' => '169fdh789',
            'marque' => 'Volvo',
            'couleur' => 'verte');


          $v[] = $voiture1;
          $v[] = $voiture2;

          $v4 = array ();
          $v4Empty = empty($v4);
          if(empty($v4))
          echo "v4Empty";

          ?>
          <h3>"Liste de voiture :"</h3>

          <ul><?php print_r($v[0])?></ul>
          <ul><?php print_r($v[1])?></ul>

          
        ?>

    </body>
</html> 