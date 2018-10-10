<?php
require('path.php');
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>cebufull</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="js/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

	<header>
		<div id="groval-navi">
			<div class="navi">
				<h1 class="logo"><a href="/Lechon/index.php"><?php logoimg(); ?></a></h1>

				<!--pcOnly navi-->
				<ul class="navilist pcOnly">
					<li>
						<p><a href="#aboutWrap">ABOUT</a>
						</p>
					</li>
					<li>
						<p><a href="#nowWrap">NOW</a>
						</p>
					</li>
					<li>
						<p><a href="#howToWrap">BLOG</a>
						</p>
					</li>
					<li>
						<p><a href="#bbsWrap">BBS</a>
						</p>
					</li>
					<li class="login">
						<p><a href="/Lechon/signin.php">LOGIN</a>
						</p>
					</li>
					<li class="newA">
						<p><a href="/Lechon/register/signup.php">NEW ACCOUNT</a>
						</p>
					</li>
				</ul>
				<!--pcOnly navi-->

				<!--spOnly navi-->
				<div class="spnavi">
				<div id="overlay">
					<ul>
						<li><a href="#">ABOUT</a>
						</li>
						<li><a href="#nowWrap">NOW</a>
						</li>
						<li><a href="blog/blog_list.php">BLOG</a>
						</li>
						<li><a href="bbs/bbs_list.php">BBS</a>
						</li>
						<li><a href="/Lechon/signin.php">LOGIN</a>
						</li>
						<li><a href="/Lechon/register/signup.php">NEW ACCOUNT</a>
						</li>
					</ul>
				</div>
				<a class="menu-trigger" href="#"><span></span><span></span><span></span></a>
				</div>
				<!--spOnly navi-->
					
			</div>
	</header>
	</div>
	<div class="headimg"><video src="img/sea.mp4" autoplay loop="auto"></video>
	</div>
	<article class="wrap">
		<section id="aboutWrap">
			<div class="acWrap">
				<h1><img src="img/about.png" alt="cebufullについて"></h1>
				<div class="aboutTxet">
					<p class="ajp">
						このサイトはセブ留学生による、セブ留学生の為の情報交換サイトです。<br> セブに留学に来たあなたの情報で当サイトを育ててあげてください♪
					</p>
					<p class="aen">
						This site is for Cebu international students by international students in Cebu.<br> Please raise this site with your information came to study in Cebu♪
					</p>
				</div>
				<div class="howbtn">
					<P><a href="#">How to use<span><img src="img/arrow.png" alt="サイトの使い方"></span></a>
					</P>
				</div>
			</div>
			</section>
		</div>
		<!--aboutWrap-->

		<section id="nowWrap">
			<div class="ncWrap">
				<h1><img src="img/now.png" alt="つぶやき"></h1>
				<iframe id="now" width="100%" height="200" src="now.php"></iframe>
			</div>
		</section>
		<!--nowWrap-->

		<section id="howToWrap">
			<div class="hcWrap">
				<div class="bgimg">
					<h1><img src="img/howtocebu.png" alt="howtocebu"></h1>
				</div>
				<div class="teWrap">
					<div class="howtoTxet">
						<p class="ajp">
							役に立ったり立たなかったり？！なコラム集。セブ生活をもっと知りたい方は必見です！
						</p>
						<p class="aen">
							Is it useful or not? ! Column collection. It is a must-see for those who want to know more about Cebu life!
						</p>
						<div class="howtobtn">
							<P><a href="blog/blog_list.php">Blog list<span><img src="img/arrow.png" alt="サイトの使い方"></span></a>
							</P>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--howToWrap-->

		<section id="bbsWrap">
			<div class="bcWrap">
				<h1><img src="img/morefun.png" alt="もっと楽しもう"></h1>
				<div class="slick_container pcOnlylist">
					<section class="regular slider">
						<div>
							<img src="http://placehold.it/350x300?text=1">
						</div>
						<div>
							<img src="http://placehold.it/350x300?text=2">
						</div>
						<div>
							<img src="http://placehold.it/350x300?text=3">
						</div>
						<div>
							<img src="http://placehold.it/350x300?text=4">
						</div>
						<div>
							<img src="http://placehold.it/350x300?text=5">
						</div>
						<div>
							<img src="http://placehold.it/350x300?text=6">
						</div>
					</section>
				</div>
				<div class="bbsbtn">
					<P><a href="bbs/bbs_list.php">BBS list<span><img src="img/arrow.png" alt="サイトの使い方"></span></a>
					</P>
				</div>
			</div>
	</section>
		</article>
		<!--bbsWrap-->
		<div id="footer">
			<div class="footerWrap">
				<div class="flogo"><img src="img/flogo.png" alt="cebufull">
				</div>
				<div class="footerMenu">
					<ul class="fmenu1">
						<li>
							<p><span><img src="img/farrow.png"></span>About us
							</p>
						</li>
						<li>
							<p><a href="#"><span><img src="img/sankaku.png"></span>How to use</a>
							</p>
						</li>
					</ul>
					<ul class="fmenu2">
						<li>
							<p><a href="index.php"><span><img src="img/farrow.png"></span>NOW</a>
							</p>
						</li>
						<li>
							<p><a href="blog/blog_list.php"><span><img src="img/farrow.png"></span>HOW TO CEBU</a>
							</p>
						</li>
						<li>
							<p><a href="bbs/bbs_list.php"><span><img src="img/farrow.png"></span>BBS</a>
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>


	</div>
	<!--wrap-->

	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="js/slick/slick.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/style.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>