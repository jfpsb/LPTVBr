<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="/LPTVBr/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/LPTVBr/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<link rel="shortcut icon" href="/LPTVBr/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/LPTVBr/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<title>Músicas Traduzidas</title>
<link rel="stylesheet" type="text/css"
	href="/LPTVBr/resources/css/release-lista.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/primeui-2.2-min.css">
<script type="text/javascript"
	src="/LPTVBr/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript"
	src="/LPTVBr/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript"
	src="/LPTVBr/resources/js/primeui-2.2-min.js"></script>
<script type="text/javascript"
	src="/LPTVBr/resources/js/focusMainSection.js"></script>
<script type="text/javascript">
	$(function() {
		$('#mus-tabView').puitabview();
	});

	$(document).ready(function() {
		$(".mobile-btn").click(function(){
	    	$(".tabs.nav").toggle('hide');
		});

		window.onclick = function(event) {
			var isVisible = $(".tabs.nav").is(":visible");
			var buttonClicked = event.target.matches(".mobile-btn");
			var imageClicked = event.target.matches("#btn-img");
			if (!buttonClicked && isVisible && !imageClicked) {
					$(".tabs.nav").toggle('hide');
			}
		};
	});
</script>
</head>
<body>
	<?php
	include_once '../template/header.php';
	?>
	<section id="main-section" class="body-section">
		<article>
			<div class="button-wrapper">
				<button id="btn" class="mobile-btn">
					<img alt="" src="/LPTVBr/resources/imagens/menu-icon.png"
						id="btn-img">
				</button>
			</div>
			<div id="mus-tabView">
				<ul class="tabs">
					<li><a href="#albuns">Álbuns</a></li>
					<li><a href="#singles">Singles</a></li>
					<li><a href="#remixes">Remixes</a></li>
					<li><a href="#lpu">LP Underground</a></li>
				</ul>
				<ul class="tabs nav">
					<li class="mobile-li"><a href="#albuns">Álbuns</a></li>
					<li class="mobile-li"><a href="#singles">Singles</a></li>
					<li class="mobile-li"><a href="#remixes">Remixes</a></li>
					<li class="mobile-li"><a href="#lpu">LP Underground</a></li>
				</ul>
				<div>
					<div id="albuns">
						<h2 class="titulo">Álbuns</h2>
						<table>
							<tr>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/albuns/the-hunting-party"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/albuns/cover/thp.jpg"
											alt="Capa The Hunting Party" />
											<p class="nomeLink">The Hunting Party</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/albuns/living-things" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/albuns/cover/lt.jpg"
											alt="Capa Living Things" />
											<p class="nomeLink">Living Things</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td>
									<div class="linkPanel">
										<a href="/LPTVBr/musicas/albuns/a-thousand-suns" class="link">
											<img class="linkImg"
											src="/LPTVBr/resources/imagens/albuns/cover/ats.jpg"
											alt="Capa A Thousand Suns" />
											<p class="nomeLink">A Thousand Suns</p>
										</a>
									</div>
								</td>
								<td>
									<div class="linkPanel">
										<a href="/LPTVBr/musicas/albuns/road-to-revolution"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/albuns/cover/road-to-revolution.jpg"
											alt="Capa Road To Revolution" />
											<p class="nomeLink">Road To Revolution</p>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="linkPanel">
										<a href="/LPTVBr/musicas/albuns/minutes-to-midnight"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/albuns/cover/mtm.jpg"
											alt="Capa Minutes to Midnight" />
											<p class="nomeLink">Minutes To Midnight</p>
										</a>
									</div>
								</td>
								<td>
									<div class="linkPanel">
										<a href="/LPTVBr/musicas/albuns/collision-course" class="link">
											<img class="linkImg"
											src="/LPTVBr/resources/imagens/albuns/cover/collision-course.jpg"
											alt="Capa Collision Course" />
											<p class="nomeLink">Collision Course</p>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="linkPanel">
										<a href="/LPTVBr/musicas/albuns/live-in-texas" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/albuns/cover/lit.jpg"
											alt="Capa Live In Texas" />
											<p class="nomeLink">Live In Texas</p>
										</a>
									</div>
								</td>
								<td>
									<div class="linkPanel">
										<a href="/LPTVBr/musicas/albuns/meteora" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/albuns/cover/meteora.jpg"
											alt="Capa Meteora" />
											<p class="nomeLink">Meteora</p>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="linkPanel">
										<a href="/LPTVBr/musicas/albuns/hybrid-theory" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/albuns/cover/hybrid-theory.jpg"
											alt="Capa Hybrid Theory" />
											<p class="nomeLink">Hybrid Theory</p>
										</a>
									</div>
								</td>
							</tr>
						</table>
					</div>
					<div id="singles">
						<h2 class="titulo">Singles</h2>
						<table>
							<tr>
								<td><div class="linkPanel">
										<a href="singles/final-masquerade/fm-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/final-masquerade.jpg"
											alt="Capa Single Final Masquerade" />
											<p class="nomeLink">Final Masquerade</p>
										</a>
									</div></td>
								<td>
									<div class="linkPanel">
										<a href="singles/rebellion/rebellion-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/rebellion.jpg"
											alt="Capa Single Rebellion" />
											<p class="nomeLink">Rebellion</p>
										</a>
									</div>
								</td>
								<td>
									<div class="linkPanel">
										<a href="singles/wastelands/wastelands-page.php" class="link">
											<img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/wastelands.jpg"
											alt="Capa Single Wastelands" />
											<p class="nomeLink">Wastelands</p>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="linkPanel">
										<a href="singles/until-its-gone/until-its-gone-page.php"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/until-its-gone.jpg"
											alt="Capa Single UIG" />
											<p class="nomeLink">Until It's Gone</p>
										</a>
									</div>
								</td>
								<td>
									<div class="linkPanel">
										<a href="singles/guilty-all-the-same/gats-page.php"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/guilty-all-the-same.jpg"
											alt="Capa Single GATS" />
											<p class="nomeLink">Guilty All The Same</p>
										</a>
									</div>
								</td>
								<td>
									<div class="linkPanel">
										<a href="singles/a-light-that-never-comes/altnc-page.php"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/a-light-that-never-comes.jpg"
											alt="Capa Single ALTNC" />
											<p class="nomeLink">A Light That Never Comes</p>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="linkPanel">
										<a href="singles/castle-of-glass/cog-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/castle-of-glass.jpg"
											alt="Capa Single COG" />
											<p class="nomeLink">Castle Of Glass</p>
										</a>
									</div>
								</td>
								<td>
									<div class="linkPanel">
										<a href="singles/powerless/powerless-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/powerless.jpg"
											alt="Capa Single Powerless" />
											<p class="nomeLink">Powerless</p>
										</a>
									</div>
								</td>
								<td><div class="linkPanel">
										<a href="singles/lost-in-the-echo/lite-page.php" class="link">
											<img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/lost-in-the-echo.jpg"
											alt="Capa Single LITE" />
											<p class="nomeLink">Lost In The Echo</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td>
									<div class="linkPanel">
										<a href="singles/burn-it-down/bid-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/burn-it-down.jpg"
											alt="Capa Single BID" />
											<p class="nomeLink">Burn It Down</p>
										</a>
									</div>
								</td>
								<td>
									<div class="linkPanel">
										<a href="singles/iridescent/iridescent-page.php" class="link">
											<img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/iridescent.jpg"
											alt="Capa Single Iridescent" />
											<p class="nomeLink">Iridescent</p>
										</a>
									</div>
								</td>
								<td>
									<div class="linkPanel">
										<a href="singles/download-tsunami/tsunami-page.php"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/download-tsunami.jpg"
											alt="Capa Single DFT" />
											<p class="nomeLink">Download To Donate: Tsunami Relief</p>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="singles/burning-in-the-skies/bits-page.php"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/burning-in-the-skies.png"
											alt="Capa Single BITS" />
											<p class="nomeLink">Burning In The Skies</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/waiting-for-the-end/wfte-page.php"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/waiting-for-the-end.jpg"
											alt="Capa Single WFTE" />
											<p class="nomeLink">Waiting For The End</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/the-catalyst/catalyst-page.php" class="link">
											<img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/the-catalyst.jpg"
											alt="Capa Single TC" />
											<p class="nomeLink">The Catalyst</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="singles/download-haiti/haiti-page.php" class="link">
											<img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/download-haiti.jpg"
											alt="Capa Single DFH" />
											<p class="nomeLink">Download To Donate For Haiti</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/new-divide/divide-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/new-divide.jpg"
											alt="Capa Single ND" />
											<p class="nomeLink">New Divide</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/leave-out-all-the-rest/loatr-page.php"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/leave-out-all-the-rest.jpg"
											alt="Capa Single LOATR" />
											<p class="nomeLink">Leave Out All The Rest</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="singles/given-up/gu-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/given-up.jpg"
											alt="Capa Single GU" />
											<p class="nomeLink">Given Up</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/shadow-of-the-day/sotd-page.php" class="link">
											<img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/shadow-of-the-day.jpg"
											alt="Capa Single SOTD" />
											<p class="nomeLink">Shadow Of The Day</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/bleed-it-out/bio-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/bleed-it-out.jpg"
											alt="Capa Single BIO" />
											<p class="nomeLink">Bleed It Out</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="singles/what-ive-done/wid-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/what-ive-done.jpg"
											alt="Capa Single WID" />
											<p class="nomeLink">What I've Done</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/numb-encore/ne-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/numb-encore.jpg"
											alt="Capa Single Numb/Encore" />
											<p class="nomeLink">Numb/Encore</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/numb-encore-itunes/nei-page.php" class="link">
											<img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/numb-encore-itunesep.jpg"
											alt="Capa Single Numb/Encore iTunes EP" />
											<p class="nomeLink">
												Numb/Encore<br />(iTunes EP)
											</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="singles/numbv2/numbv2-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/numbv2.jpg"
											alt="Capa Single Numb V2" />
											<p class="nomeLink">
												Numb<br />(Versão 2)
											</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/numbv1/numbv1-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/numbv1.jpg"
											alt="Capa Single Numb V1" />
											<p class="nomeLink">
												Numb<br />(Versão 1)
											</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/breaking-the-habit/bth-page.php" class="link">
											<img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/breaking-the-habit.jpg"
											alt="Capa Single BTH" />
											<p class="nomeLink">Breaking The Habit</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="singles/from-the-inside/fti-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/from-the-inside.jpg"
											alt="Capa Single FTI" />
											<p class="nomeLink">From The Inside</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/faint/faint-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/faint.jpg"
											alt="Capa Single Faint" />
											<p class="nomeLink">Faint</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/somewhere-i-belong/sib-page.php" class="link">
											<img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/somewhere-i-belong.jpg"
											alt="Capa Single SIB" />
											<p class="nomeLink">Somewhere I Belong</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="singles/pts.of.athrty/pts-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/pts.of.athrty.jpg"
											alt="Capa Single pts.of.athrty" />
											<p class="nomeLink">Pts.Of.Athrty</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/in-the-end-rare/iter-page.php" class="link">
											<img class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/in-the-end-live-rare.gif"
											alt="Capa Single ITELR" />
											<p class="nomeLink">
												In The End:<br />Live And Rare
											</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/in-the-end/ite-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/in-the-endv1.jpg"
											alt="Capa Single ITE" />
											<p class="nomeLink">In The End</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="singles/in-the-endv2/itev2-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/in-the-endv2.jpg"
											alt="Capa Single ITE2" />
											<p class="nomeLink">
												In The End<br />(Versão 2)
											</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/papercut/papercut-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/papercut.jpg"
											alt="Capa Single Papercut" />
											<p class="nomeLink">Papercut</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="singles/crawling/crawling-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/crawling.png"
											alt="Capa Single Crawling" />
											<p class="nomeLink">Crawling</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="singles/one-step-closer/osc-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/singles/cover/one-step-closer.jpg"
											alt="Capa Single OSC" />
											<p class="nomeLink">One Step Closer</p>
										</a>
									</div></td>
							</tr>
						</table>
					</div>
					<div id="remixes">
						<h2 class="titulo">Remixes</h2>
						<table>
							<tr>
								<td><div class="linkPanel">
										<a href="remixes/a-light-that-never-comes/altnc-page.php"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/remixes/cover/a-light-that-never-comes.jpg"
											alt="Capa Remix ALTNCR" />
											<p class="nomeLink">A Light That Never Comes (Remixes)</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="remixes/recharged/recharged-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/remixes/cover/recharged.jpg"
											alt="Capa Remix Recharged" />
											<p class="nomeLink">Recharged</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="remixes/8bit-rebellion/8bit-page.php" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/remixes/cover/8bit-rebellion.jpg"
											alt="Capa Remix 8BR" />
											<p class="nomeLink">8-Bit Rebellion</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="remixes/reanimation/reanimation-page.php"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/remixes/cover/reanimation.jpg"
											alt="Capa Remix Reanimation" />
											<p class="nomeLink">Reanimation</p>
										</a>
									</div></td>
							</tr>
						</table>
					</div>
					<div id="lpu">
						<h2 class="titulo">LP Underground</h2>
						<table>
							<tr>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu15"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpu15.jpg"
											alt="Capa Single LPU15" />
											<p class="nomeLink">LPU 15</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu14"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpuxiv.png"
											alt="Capa Single LPUXIV" />
											<p class="nomeLink">LPU XIV</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu13"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpuxiii.jpg"
											alt="Capa Single LPUXIII" />
											<p class="nomeLink">LPU XIII</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu12"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpu12.jpg"
											alt="Capa Single LPU12" />
											<p class="nomeLink">LP Underground 12</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu11"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpu11.jpg"
											alt="Capa Single LPU11" />
											<p class="nomeLink">LP Underground 11</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a
											href="/LPTVBr/musicas/lpu/a-decade-underground"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/a-decade-underground.jpg"
											alt="Capa Single ADU" />
											<p class="nomeLink">A Decade Underground</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/songs-from-the-underground"
											class="link"> <img class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/songs-from-the-underground.jpg"
											alt="Capa Single SFTU" />
											<p class="nomeLink">Songs From The Underground</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu10" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpux.jpg"
											alt="Capa Single LPUX" />
											<p class="nomeLink">LP Underground X</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu9" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpu9.jpg"
											alt="Capa Single LPU9" />
											<p class="nomeLink">LP Underground 9</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu8" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpu8.jpg"
											alt="Capa Single LPU8" />
											<p class="nomeLink">LP Underground 8</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu7" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpu7.jpg"
											alt="Capa Single LPU7" />
											<p class="nomeLink">LP Underground 7</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu6" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpu6.jpg"
											alt="Capa Single LPU6" />
											<p class="nomeLink">LP Underground 6</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu5" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpu5.jpg"
											alt="Capa Single LPU5" />
											<p class="nomeLink">LP Underground 5</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu4" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpu4.jpg"
											alt="Capa Single LPU4" />
											<p class="nomeLink">LP Underground 4</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu3" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpu3.jpg"
											alt="Capa Single LPU3" />
											<p class="nomeLink">LP Underground 3</p>
										</a>
									</div></td>
							</tr>
							<tr>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu2" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpu2.jpg"
											alt="Capa Single LPU2" />
											<p class="nomeLink">LP Underground 2</p>
										</a>
									</div></td>
								<td><div class="linkPanel">
										<a href="/LPTVBr/musicas/lpu/lpu1" class="link"> <img
											class="linkImg"
											src="/LPTVBr/resources/imagens/lpu/cover/lpu1.jpg"
											alt="Capa Single LPU1" />
											<p class="nomeLink">
												Hybrid Theory EP<br />(LPU 1)
											</p>
										</a>
									</div></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</article>

		?>
	</section>
	<?php
	include_once '../template/footer.php';
	?>
</body>
</html>