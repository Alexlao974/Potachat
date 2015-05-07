<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/site.css" />
        <title>Pot'achat- Echange de légumes</title>
    </head>

    <body>
        <div id="bloc_page">
		<?php include("header.php"); ?>
            
            
            <div id="banniere_image">
                <div id="banniere_description">
                    Découvrez l'offre du jour !
                    <a href="../html/annonces.html" class="bouton_rouge">Voir les produits <img src="../img/orange.jpg" alt="" /></a>
                </div>
            </div>
            
            <section>
                <article>
				<p>Découvrez les produits de <em>votre</em> région!</p>			
                    <img src="../img/carte.png"/>
                </article>
                <aside>
		
                
				<h3>Connexion</h3>

				<form action="/signin" method="post">
					<label>Identifiant</label>:
						
                    <input type="text" name="username" id="signin-username" value="" /> </br>
					
                    <label>Mot de passe</label>: </br>
						
						<input type="password" name="password" id="signin-password" value="" /> </br>
					
					<p>
						<input type="submit" value="Connexion" />
					</p>
                    <a href="inscription.php">Pas encore inscrit? C'est par ici!</a>
				</form>

			
                </aside>
            </section>
            <?php include("footer.php"); ?>
            
        </div>
    </body>
</html>