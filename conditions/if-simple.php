<?php
/*****************************************/
/********** Conditions Simples ***********/
/*****************************************/
//### Exemples ###//
echo "CONDITIONS SIMPLES <br><br><br>";

$animal = "Chat";
echo "1.Est-ce un chat : ";
if($animal == "Chat"){
  //condition vraie
  echo "Oui";
}else{
  //condition fausse
  echo "Non";
}
echo "<br><br>";
/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/
// Écrire la condition qui affiche "Non" quand $chat vaut "Chien" et affiche "Oui" quand $chat vaut "Chat" ###//
$chat = "Chien"; // $chat = "Chat";
echo "2.Est-ce un chat : ";
if($chat == "Chat"){
  //condition vraie
  echo "Oui";
}else{
  //condition fausse
  echo "Non";
}
echo "<br><br>";

//----------------------------------------
// Écrire la condition qui affiche "Oui" quand $chat vaut true et affiche "Non" dans le cas contraire ###//
$chat = true; // $chat = false;
echo "2.Est-ce un chat : ";
if($chat == "Chat"){
  //condition vraie
  echo "Oui";
}else{
  //condition fausse
  echo "Non";
}
echo "<br><br>";
