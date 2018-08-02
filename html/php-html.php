<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des éléves qui sont présent dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php //display the students here
       for ($i=0;$i<sizeof($students);$i++){
        echo "\n".$students[i];
      } ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day"><?php $day = [1,2,3,4,5,6,7]; "<option>"//list of day ?></select>
       <label for="month">Month</label>
       <select  name="month"><?php $month = [1,2,3,4,5,6,7,8,9,10,11,12];//list of month ?></select>
       <label for="year">Year</label>
       <select  name="year"><?php $year = [2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018];//list of year ?></select>
     </form>
     <hr>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
     <p>
       Je suis une fille
     </p>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
     <p>
       Je suis un garçon
     </p>
     <!-- Instruction : Afficher ce bloc dans les autres cas -->
     <p>
       Je suis indéfini
     </p>
  </body>
</html>
