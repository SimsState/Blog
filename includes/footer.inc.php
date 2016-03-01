 
          </div>
          
          <form action="index.php" method="post">
			<input type="text" name="search" placeholder="Recherche"/>
			<input type="submit" class="btn btn-primary" value="Valider">
		  </form>
          
          <nav class="span4">
            <h2>Menu</h2>
            
            <ul id="ulmenu">
                <li><a href="index.php">Accueil</a></li>
                
                <?php
                include("includes/verif_util.inc.php");
                if($connecte==false) { ?>
                
                <li><a href="inscription.php">Inscription</a></li>
                
                <?php }
                if($connecte==true) { ?>
					
                <li><a href="article.php">Rédiger un article</a></li>
                <li><a href="deconnexion.php">Déconnexion</a></li>
                
                <?php } else { $connecte=""; ?>
				
				<li><a href="connexion.php">Connexion</a></li>
				
				<?php } ?>
				
			<div class="row">
				<div class="input-group">
					<input type="text" id="newsletter" name="newsletter" class="form-control" placeholder="Email pour Newsletter">
					<input type="submit" id="nwsletterSub" class="btn btn-primary" value="Abonnez-vous">
					<p id="alertBox1" class="alert" style="display:none; background-color:green;">Vous avez bien été abonné</p>
					<p id="alertBox2" class="alert" style="display:none;">Cet email est déjà utilisé</p>
					<p id="alertBox3" class="alert" style="display:none; background-color:red;">L'email n'est pas valide</p>
				</div>
			</div>

            </ul>
            
          </nav>
        </div>
        
      </div>

      <footer>
        <p>&copy; Nilsine & ULCO 2015</p>

      </footer>

    </div>
    
    <script>
		$(document).ready(function(){
			$('.span4').mouseover(function(){
				$('#ulmenu').slideDown(100);
			});
			$('.span4').mouseleave(function(){
				$('#ulmenu').slideUp(100);
			});
		});
		
		$("#nwsletterSub").click(function(){
			var nws= $.ajax({
				url : "newsletter.php",
				type : "post",
				data : { email: $("#newsletter").val() },
				success : function(){
					if(nws.responseText == "Ok"){
						$("#alertBox1").show().delay(3000).fadeOut();
					}
					if(nws.responseText == "Email deja abonne"){
						$("#alertBox2").show().delay(3000).fadeOut();
					}
					else if(nws.responseText == "Email non valide"){
						$("#alertBox3").show().delay(3000).fadeOut();
					}
				}
				
			});
			
		});
    </script>

  </body>
</html>

