<?php 
try
{
$bdd = new PDO('mysql:host=localhost;dbname=potachat;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/site.css" />
        <title>Inscription</title>
    </head>
    
    <body>
    <div id="bloc_page">
    <?php include ("header.php"); ?>
    <div id="banniere_image">
                <div id="banniere_description">
                    Découvrez l'offre du jour !
                    <a href="../html/annonces.html" class="bouton_rouge">Voir les produits <img src="../img/orange.jpg" alt="" /></a>
                </div>
            </div>
            <section1>
                
                <center><h3 id="Insc">S'inscrire</h3></center>
                
                <nav1>
                <form action=".....php" method="post">
                    
                    <label>Nom</label> : <input type="text" name="Name_First_Cli" id="Name_First_Cli" />
                    <label>Prénom</label> : <input type="text" name="Name_Last_Cli" id="Name_Last_Cli" /></br>
                    <label>Adresse</label> : <input type="text" name="Adress1_Cli" id="Adress1_Cli" /></br>
                <label>Ville</label> : <input type="text" name="City_Cli" id="City_Cli" />
        <label>Code postal</label> : <input type="text" name="Zip_Cli" id="Zip_Cli" /></br>
              <label>Numéro de téléphone</label> : <input type="text" name="Tel1_Cli" id="Tel1_Cli" /></br>  
        <label>E-mail</label> : <input type="mail" name="Mail_Cli" id="Mail_Cli" /></br>
                    
         <label>Avatar</label> : <input type="file" name="Avatar_Cli" id="Avatar_Cli" /> </br>          
<label>Mot de passe</label> : <input type="password" name="Password_cli" id="Password_cli" /> </br>
<label>Confirmation Mot de passe</label> : <input type="password" name="Password_cli" id="Password_cli" /> </br>
                    
<label>Description</label> : </br>
<textarea type="text" name="Desc_Cli" id="Desc_Cli" rows="10" cols="80" ></textarea>

 <center><input type="submit" value="S'inscire" id="bouton" /></center>
                    
                    </form>                
                </nav1>
<?php
$nom=$_POST['Name_First_Cli'];
$prenom=$_POST['Name_Last_Cli'];
$adresse=$_POST['Adress1_Cli'];
$ville=$_POST['City_Cli'];
$code=$_POST['Zip_Cli'];
$num=$_POST['Tel1_Cli'];
$mail=$_POST['Mail_Cli'];
$avatar=$_POST['Avatar_Cli'];
$password=$_POST['Password_Cli'];
$desc=$_POST['Desc_Cli'];

$req = $bdd->prepare('INSERT INTO cli(Name_First_Cli,Name_Last_Cli,Adress1_Cli,City_Cli,Zip_Cli,Tel1_Cli,Mail_Cli,Avatar_Cli,Password_cli,Desc_Cli) VALUES(:Name_First_Cli,:Name_Last_Cli,:Adress1_Cli,:City_Cli,:Zip_Cli,:Tel1_Cli,:Mail_Cli,:Avatar_Cli,:Password_cli,:Desc_Cli)');
$req->execute(array(
'Name_First_Cli'=>$nom,
'Name_Last_Cli'=>$prenom,
'Adress1_Cli'=>$adresse,

'City_Cli'=>$ville,
'Zip_Cli'=>$code,
'Tel1_Cli'=>$num,

'Mail_Cli'=>$mail,
'Avatar_Cli'=>$avatar,
'Password_cli'=>$password,



'Desc_Cli'=>$desc
)); ?>


<?php include ("footer.php"); ?>