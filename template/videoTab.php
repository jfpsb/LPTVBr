<?php 
	include_once '../../../youtube/search.php';
?>
<article class="video-article">
	<div class="destaque-panel">
		<div class="panel-header">
			<h2 class="header">Em Destaque</h2>
		</div>

		<div class="video-container">
			<iframe width="560" height="315"
				src="https://www.youtube.com/embed/<?php echo $videoId?>"				
				allowfullscreen> </iframe>
		</div>
	</div>
</article>

<article class="video-article">	
	<div>
		<div class="panel-header">
			<h2 class="header">Vídeos Relacionados</h2>
		</div>
		<div class="rel-panel">
			<div style="padding: 5px;">
				<?=$htmlBody?>
			</div>
		</div>
	</div>	
	
</article>