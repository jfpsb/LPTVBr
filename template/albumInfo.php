<aside class="release aside">
<div itemscope itemtype=”http://schema.org/MusicRelease”
style="text-align: center">
<img alt="Capa <?php echo $albumName?>" class="release image"
		src="/resources/imagens/<?php echo $tipo . '/cover250/' . $icone?>.jpg">
		<table style="text-align: center; margin: 0 auto;"
				class="release table">
				<tr>
				<td>
				<p class="main">Artista:</p>
				</td>
				<td>
				<p>
				<span itemprop="byArtist"><?php echo $artista?></span>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<p class="main">Lançamento:</p>
						</td>
						<td>
							<p>
								<time datetime="<?php $datetime?>"><?php echo $lancamento?></time>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<p class="main">Duração:</p>
						</td>
						<td>
							<p><?php echo $duracao?></p>
						</td>
					</tr>
					<tr>
						<td>
							<p class="main">Nº de músicas:</p>
						</td>
						<td>
							<p>
								<span itemprop="numTracks"><?php echo $numMus?></span>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<p class="main">Gravadora(s):</p>
						</td>
						<td>
							<p>
								<span itemprop="recordLabel"><?php echo $gravadora?></span>
							</p>
						</td>
					</tr>
				</table>
			</div>
		</aside>