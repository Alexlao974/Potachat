<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/site.css" />
        <title>Publier une annonces Pot'achat</title>
        <?php 
$bdd = new PDO('mysql:host=localhost;dbname=potachat;charset=utf8', 'root', '');

?>
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
                         
             
       
                <center><h2 id="Publier">Publier une annonce </h2></center>
       
                <nav1>
                
                <form action="....php" method="post">
                 <label>Catégorie</label> : 
				 <select name="categorie" id="categorie">
					<option value="Legumes">Legumes</option>
					<option value="Fruits">Fruits</option>       
				</select></br>
                    <label>Vous êtes un</label> 
						<input type="radio" name="type" value="particulier" id="particulier" /> 
					<label for="particulier">particulier</label> 
						<input type="radio" name="type" value="professionnel" id="professionnel" /> 
					<label for="professionnel">professionnel</label><br />
					<label>Date de vente limite</label> : 
						<input type="text" name="date" id="date" placeholder="dd/mm/aaaa"/></br>
					<label>Photo de votre produit</label>: 
						<input type="file" name="photo" /> </br>
					<label>Description de votre produit:</label> </br> 
					<textarea type="text" name="desc" id="desc" rows="10" cols="80" ></textarea>
                     <center><input type="submit" value="Publier l'annonce" id="bouton" /></center>
                
                </form>
                </nav1>
       
                

            </section1>
            
    
        </div>
     <?php include ("footer.php"); ?>
    </body>
</html>