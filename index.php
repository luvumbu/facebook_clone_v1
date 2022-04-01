<?php 
    session_start(); 
    if(isset($_SESSION['server'])){
 
     $serve=   $_SESSION['server'];
      if($serve=="on"){
        echo "connexion reussi " ; 
      
  header('Location:login/index.php');
  exit();
 
      }
      else {
        echo "echec de la connexion" ; 
      }
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>  
    <title>Bkz-technologie</title>
    <meta charset="UTF-8">    
    <link rel="icon" href="data:image/png;base64,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" type="image/gif" sizes="16x16">
</head>
<body>
  <?php 
   include("link.html"); // Source total style et scrypt    
      /*
        Liste des ressource néssesaire au programme 
        exemple: 
        * Source css
        * Class JS 
        * Class Php 
   */
  ?>
  </div>
<div id="body"   onmousemove="showCoords(event)" onmouseout="clearCoor()" onclick="showCoords_click()"> 
<!--
    @mouseover="position_mouse"    
    Code Vue JS 
    Enregistre la position de la sourie lorsque l'utilisateur survole la page web
    Raciene vue.js
-->    
<?php    
 include("model/class/php/Class.php");  
 // fichier configuration à l'interrieur 
 // contenue general de la page dans class\php\index_body.php 
 /*
 include("model/class/php/Class.php");  
                include("model/class/php/index_body.php");  
                  <index_body>
                            <header>
                            </header>
                            <section>
                            </secttion>
                            <footer>
                            </footer>
                  </index_body>
 */
?>
</div>
<!--
  Besoin de vue Js pour s'avoir le comportement des utilisateurs 
-->
<?php 
if($config_==false){ 
// si la page de connexion n'existe pas elle afiche le formulaire de connexion 
// si non elle efface a l'aide du CSS mais le formulaire est toujours present juste invisible 
    ?>
<script>
  const montre=false;
</script>
    <?php 
}
 else {
    include("model/class/php/remove_db.php"); 
    /*
    Execution d'un test si il existe pas d'erreur dans la Bdd 
    SI il existe une erreur il efface le fichier de configuration 
    */
    ?>
<script>
  const montre=true;
</script>
    <?php 
 } 
?>
<div id="showcoords_position"></div>
<style>
  #showcoords_position{
   
 
  }

</style>
 <script src="js.js"></script>

 
</body>
</html>