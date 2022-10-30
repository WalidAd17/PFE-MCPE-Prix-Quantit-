<?php
session_start();
// Inialize session

// Include database connection settings
include "configdb_pdo.php";

// Retrieve username and password from database according to user's input
try {

    if(empty($_POST["user"]) || empty($_POST["password"]))  
    {  
        header("location:index.html");  
    }  
    else  
    { 

$query= $mysqli->prepare("SELECT * FROM apc
 WHERE (user = '" . htmlspecialchars($_POST['user']) . "') 
 and (pass = '" . htmlspecialchars($_POST['password']) . "')");
// Check username and password match
$query->execute();
    $count = $query->rowCount();  
    if ($count > 0){
        $_SESSION['username'] = $_POST['user'];
        $_SESSION['user'] = $_POST['password'];
        $user= $_SESSION['username'] ;


        $profile = "SELECT *  FROM apc WHERE user= '".$user."'";
    $statpros= $mysqli->query($profile);
    foreach($statpros as $statpro){
        $_SESSION['apc']= $statpro['desfr'];
   
        $_SESSION['code']= $statpro['code_apc'];
        ?> 
       <script>window.location ="apc/index.php"</script> 
       <?php 
    }
}
     
           
             else
            { 
              echo "mot de passe incorect";
              $_SESSION['user'] = 0;
        ?> 
        <script>
                 alert("Votre Log In informations sont incorrect !");
                 window.location ="index.html";</script>
       <?php 
        }

    
} }
catch(PDOException $error)  
{  
     $message = $error->getMessage();  
  
}
?>
