<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="/LPTVBr/resources/css/letra-musica.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/primeui-2.2-min.css">
<script type="text/javascript" src="/LPTVBr/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/LPTVBr/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/LPTVBr/resources/js/primeui-2.2-min.js"></script>
<script type="text/javascript">
	document.title = 'LinkinParkTVBr : Músicas Traduzidas';
	
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
	<article>
		<div class="button-wrapper">
			<button id="btn" class="mobile-btn">
				<img src="/LPTVBr/resources/imagens/menu-icon.png"
					id="btn-img">
			</button>
		</div>
		<div id="mus-tabView" class="tabView">
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
									<a href="albuns/the-hunting-party/" class="link">
										<img class="linkImg"
										src="/LPTVBr/resources/imagens/albuns/cover/thp.jpg"
										alt="Capa The Hunting Party" /> <label class="nomeLink">The
											Hunting Party</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="albuns/living-things" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/albuns/cover/lt.jpg"
										alt="Capa Living Things" /> <label class="nomeLink">Living
											Things</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td>
								<div class="linkPanel">
									<a href="albuns/a-thousand-suns/" class="link">
										<img class="linkImg"
										src="/LPTVBr/resources/imagens/albuns/cover/ats.jpg"
										alt="Capa A Thousand Suns" /> <label class="nomeLink">A
											Thousand Suns</label>
									</a>
								</div>
							</td>
							<td>
								<div class="linkPanel">
									<a href="albuns/road-to-revolution/"
										class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/albuns/cover/road-to-revolution.jpg"
										alt="Capa Road To Revolution" /> <label class="nomeLink">Road
											To Revolution</label>
									</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="linkPanel">
									<a href="albuns/minutes-to-midnight/"
										class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/albuns/cover/mtm.jpg"
										alt="Capa Minutes to Midnight" /> <label class="nomeLink">Minutes
											To Midnight</label>
									</a>
								</div>
							</td>
							<td>
								<div class="linkPanel">
									<a href="albuns/collision-course/" class="link">
										<img class="linkImg"
										src="/LPTVBr/resources/imagens/albuns/cover/collision-course.jpg"
										alt="Capa Collision Course" /> <label class="nomeLink">Collision
											Course</label>
									</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="linkPanel">
									<a href="albuns/live-in-texas/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/albuns/cover/lit.jpg"
										alt="Capa Live In Texas" /> <label class="nomeLink">Live In
											Texas</label>
									</a>
								</div>
							</td>
							<td>
								<div class="linkPanel">
									<a href="albuns/meteora/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/albuns/cover/meteora.jpg"
										alt="Capa Meteora" /> <label class="nomeLink">Meteora</label>
									</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="linkPanel">
									<a href="albuns/hybrid-theory/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/albuns/cover/hybrid-theory.jpg"
										alt="Capa Hybrid Theory" /> <label class="nomeLink">Hybrid
											Theory</label>
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
									<a href="singles/final-masquerade/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/final-masquerade.jpg"
										alt="Capa Single Final Masquerade" /> <label class="nomeLink">Final
											Masquerade</label>
									</a>
								</div></td>
							<td>
								<div class="linkPanel">
									<a href="singles/rebellion/" class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/rebellion.jpg"
										alt="Capa Single Rebellion" /> <label class="nomeLink">Rebellion</label>
									</a>
								</div>
							</td>
							<td>
								<div class="linkPanel">
									<a href="singles/wastelands/" class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/wastelands.jpg"
										alt="Capa Single Wastelands" /> <label class="nomeLink">Wastelands</label>
									</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="linkPanel">
									<a href="singles/until-its-gone/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/until-its-gone.jpg"
										alt="Capa Single UIG" /> <label class="nomeLink">Until It's
											Gone</label>
									</a>
								</div>
							</td>
							<td>
								<div class="linkPanel">
									<a href="singles/guilty-all-the-same/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/guilty-all-the-same.jpg"
										alt="Capa Single GATS" /> <label class="nomeLink">Guilty All
											The Same</label>
									</a>
								</div>
							</td>
							<td>
								<div class="linkPanel">
									<a href="singles/a-light-that-never-comes/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/a-light-that-never-comes.jpg"
										alt="Capa Single ALTNC" /> <label class="nomeLink">A Light
											That Never Comes</label>
									</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="linkPanel">
									<a href="singles/castle-of-glass/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/castle-of-glass.jpg"
										alt="Capa Single COG" /> <label class="nomeLink">Castle Of
											Glass</label>
									</a>
								</div>
							</td>
							<td>
								<div class="linkPanel">
									<a href="singles/powerless/" class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/powerless.jpg"
										alt="Capa Single Powerless" /> <label class="nomeLink">Powerless</label>
									</a>
								</div>
							</td>
							<td><div class="linkPanel">
									<a href="singles/lost-in-the-echo/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/lost-in-the-echo.jpg"
										alt="Capa Single LITE" /> <label class="nomeLink">Lost In The
											Echo</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td>
								<div class="linkPanel">
									<a href="singles/burn-it-down/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/burn-it-down.jpg"
										alt="Capa Single BID" /> <label class="nomeLink">Burn It Down</label>
									</a>
								</div>
							</td>
							<td>
								<div class="linkPanel">
									<a href="singles/iridescent/" class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/iridescent.jpg"
										alt="Capa Single Iridescent" /> <label class="nomeLink">Iridescent</label>
									</a>
								</div>
							</td>
							<td>
								<div class="linkPanel">
									<a href="singles/download-tsunami/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/download-tsunami.jpg"
										alt="Capa Single DFT" /> <label class="nomeLink">Download To
											Donate: Tsunami Relief</label>
									</a>
								</div>
							</td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="singles/burning-in-the-skies/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/burning-in-the-skies.png"
										alt="Capa Single BITS" /> <label class="nomeLink">Burning In
											The Skies</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/waiting-for-the-end/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/waiting-for-the-end.jpg"
										alt="Capa Single WFTE" /> <label class="nomeLink">Waiting For
											The End</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/the-catalyst/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/the-catalyst.jpg"
										alt="Capa Single TC" /> <label class="nomeLink">The Catalyst</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="singles/download-haiti/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/download-haiti.jpg"
										alt="Capa Single DFH" /> <label class="nomeLink">Download To
											Donate For Haiti</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/new-divide/" class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/new-divide.jpg"
										alt="Capa Single ND" /> <label class="nomeLink">New Divide</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/leave-out-all-the-rest/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/leave-out-all-the-rest.jpg"
										alt="Capa Single LOATR" /> <label class="nomeLink">Leave Out
											All The Rest</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="singles/given-up/" class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/given-up.jpg"
										alt="Capa Single GU" /> <label class="nomeLink">Given Up</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/shadow-of-the-day/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/shadow-of-the-day.jpg"
										alt="Capa Single SOTD" /> <label class="nomeLink">Shadow Of
											The Day</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/bleed-it-out/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/bleed-it-out.jpg"
										alt="Capa Single BIO" /> <label class="nomeLink">Bleed It Out</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="singles/what-ive-done/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/what-ive-done.jpg"
										alt="Capa Single WID" /> <label class="nomeLink">What I've
											Done</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/numb-encore/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/numb-encore.jpg"
										alt="Capa Single Numb/Encore" /> <label class="nomeLink">Numb/Encore</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/numb-encore-itunes/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/numb-encore-itunesep.jpg"
										alt="Capa Single Numb/Encore iTunes EP" /> <label
										class="nomeLink"> Numb/Encore<br />(iTunes EP)
									</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="singles/numbv2/" class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/numbv2.jpg"
										alt="Capa Single Numb V2" /> <label class="nomeLink"> Numb<br />(Versão
											2)
									</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/numbv1/" class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/numbv1.jpg"
										alt="Capa Single Numb V1" /> <label class="nomeLink"> Numb<br />(Versão
											1)
									</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/breaking-the-habit/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/breaking-the-habit.jpg"
										alt="Capa Single BTH" /> <label class="nomeLink">Breaking The
											Habit</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="singles/from-the-inside/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/from-the-inside.jpg"
										alt="Capa Single FTI" /> <label class="nomeLink">From The
											Inside</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/faint/" class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/faint.jpg"
										alt="Capa Single Faint" /> <label class="nomeLink">Faint</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/somewhere-i-belong/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/somewhere-i-belong.jpg"
										alt="Capa Single SIB" /> <label class="nomeLink">Somewhere I
											Belong</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="singles/pts-of-athrty/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/pts.of.athrty.jpg"
										alt="Capa Single pts.of.athrty" /> <label class="nomeLink">Pts.Of.Athrty</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/in-the-end-rare/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/in-the-end-live-rare.jpg"
										alt="Capa Single ITELR" /> <label class="nomeLink"> In The
											End:<br />Live And Rare
									</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/in-the-end/" class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/in-the-end.jpg"
										alt="Capa Single ITE" /> <label class="nomeLink">In The End</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="singles/in-the-end-version-two/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/in-the-endv2.jpg"
										alt="Capa Single ITE2" /> <label class="nomeLink"> In The End<br />(Versão
											2)
									</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/papercut/" class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/papercut.jpg"
										alt="Capa Single Papercut" /> <label class="nomeLink">Papercut</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="singles/crawling/" class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/crawling.png"
										alt="Capa Single Crawling" /> <label class="nomeLink">Crawling</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="singles/one-step-closer/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/singles/cover/one-step-closer.jpg"
										alt="Capa Single OSC" /> <label class="nomeLink">One Step
											Closer</label>
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
									<a href="remixes/a-light-that-never-comes/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/remixes/cover/a-light-that-never-comes.jpg"
										alt="Capa Remix ALTNCR" /> <label class="nomeLink">A Light
											That Never Comes (Remixes)</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="remixes/recharged/" class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/remixes/cover/recharged.jpg"
										alt="Capa Remix Recharged" /> <label class="nomeLink">Recharged</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="remixes/eight-bit-rebellion/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/remixes/cover/8bit-rebellion.jpg"
										alt="Capa Remix 8BR" /> <label class="nomeLink">8-Bit
											Rebellion</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="remixes/reanimation/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/remixes/cover/reanimation.jpg"
										alt="Capa Remix Reanimation" /> <label class="nomeLink">Reanimation</label>
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
									<a href="lpu/lpu15/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpu15.jpg"
										alt="Capa Single LPU15" /> <label class="nomeLink">LPU 15</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="lpu/lpu14/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpuxiv.png"
										alt="Capa Single LPUXIV" /> <label class="nomeLink">LPU XIV</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="lpu/lpu13/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpuxiii.jpg"
										alt="Capa Single LPUXIII" /> <label class="nomeLink">LPU XIII</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="lpu/lpu12/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpu12.jpg"
										alt="Capa Single LPU12" /> <label class="nomeLink">LP
											Underground 12</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="lpu/lpu11/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpu11.jpg"
										alt="Capa Single LPU11" /> <label class="nomeLink">LP
											Underground 11</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="lpu/a-decade-underground/" class="link">
										<img class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/a-decade-underground.jpg"
										alt="Capa Single ADU" /> <label class="nomeLink">A Decade
											Underground</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="lpu/songs-from-the-underground/"
										class="link"> <img class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/songs-from-the-underground.jpg"
										alt="Capa Single SFTU" /> <label class="nomeLink">Songs From
											The Underground</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="lpu/lpu10/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpux.jpg"
										alt="Capa Single LPUX" /> <label class="nomeLink">LP
											Underground X</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="lpu/lpu9/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpu9.jpg"
										alt="Capa Single LPU9" /> <label class="nomeLink">LP
											Underground 9</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="lpu/lpu8/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpu8.jpg"
										alt="Capa Single LPU8" /> <label class="nomeLink">LP
											Underground 8</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="lpu/lpu7/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpu7.jpg"
										alt="Capa Single LPU7" /> <label class="nomeLink">LP
											Underground 7</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="lpu/lpu6/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpu6.jpg"
										alt="Capa Single LPU6" /> <label class="nomeLink">LP
											Underground 6</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="lpu/lpu5/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpu5.jpg"
										alt="Capa Single LPU5" /> <label class="nomeLink">LP
											Underground 5</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="lpu/lpu4/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpu4.jpg"
										alt="Capa Single LPU4" /> <label class="nomeLink">LP
											Underground 4</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="lpu/lpu3/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpu3.jpg"
										alt="Capa Single LPU3" /> <label class="nomeLink">LP
											Underground 3</label>
									</a>
								</div></td>
						</tr>
						<tr>
							<td><div class="linkPanel">
									<a href="lpu/lpu2/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpu2.jpg"
										alt="Capa Single LPU2" /> <label class="nomeLink">LP
											Underground 2</label>
									</a>
								</div></td>
							<td><div class="linkPanel">
									<a href="lpu/lpu1/" class="link"> <img
										class="linkImg"
										src="/LPTVBr/resources/imagens/lpu/cover/lpu1.jpg"
										alt="Capa Single LPU1" /> <label class="nomeLink"> Hybrid
											Theory EP<br />(LPU 1)
									</label>
									</a>
								</div></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</article>
</body>
</html>