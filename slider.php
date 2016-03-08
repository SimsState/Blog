
<div id="conteneur">
	<ul class="bjqs">
	
	<?php
	
	$res=mysql_query("SELECT * FROM articles ORDER BY date desc LIMIT 3") or die('Erreur SQL !'.$res.'<br>'.mysql_error());

	while($data=mysql_fetch_array($res)){ 
		echo '<li><div>';
		$id=$data['id'];
		echo '<h3><center>'.$data['titre'].'</center></h3>'; 	
		$chemin=dirname(__FILE__).'/data/img/'.$id.'.jpg'; 
	
		if(file_exists($chemin)){ 
	?>
			<img src="vignette.jpg.php?id=<?php echo $id;?>" class="img-rounded pull-left" style="margin-bottom:10px; margin-right:15px;">
	<?php 
		}
	
		echo '<p>'.nl2br($data['contenu']).'</p></div></li>';
		
	}
		?>
	</ul>
</div>



<script>
jQuery(document).ready(function($) {
				$('#conteneur').bjqs({
					'height' : 320,
					'width' : 620,
					'responsive' : true
				});
		});
</script>
