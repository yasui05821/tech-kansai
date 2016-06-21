<!doctype html>
<html lang="ja">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!--<base href="http://tec-kansai.tech/">-->
	<title>
		<?php
		if ( is_front_page()){
			wp_title(":", true, 'right');
		}
		bloginfo('name');
		?>
	</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/4.1.1/normalize.css">
</head>
<body>
<div class="header">
	<div class="container">
		<h1 class="header__logo"><a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Tech Tech Kansai"></a></h1>
		<div class="search">
			<div class="search__input"></div>
			<div class="search__btn">詳細検索</div>
			<div class="search__btn--sp"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
		</div>
	</div>
</div>
<div class="pc-colmn-wrap">
	<div class="pc-column-left sp--none">
		<div class="about">
			<div class="container">
				<div class="about__ttl"><img src="/wp-content/themes/tech-kansai/images/logo.png" alt=""></div>
				<div class="about__description">
					関西のWeb・IT業界のコミュニティ
					（勉強会・交流会）情報を中心に、
					「おもろい」感じの学べるイベントを
					沢山紹介していきます。
				</div>
			</div>
		</div>
		<nav class="information">
			<ul>
				<li class="information__item">
					<a href=""><i class="fa fa-gratipay" aria-hidden="true"></i><br>はじめて勉強会に参加する方へ</a>
				</li>
				<li class="information__item">
					<a href=""><i class="fa fa-group" aria-hidden="true"></i><br>関西のコミュニティ紹介</a>
				</li>
				<li class="information__item">
					<a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i><br>ブログ書いてみませんか？</a>
				</li>
			</ul>
		</nav>
		<div class="contact">
			<p class="contact__message">運営に関する<br>お問い合わせはこちら</p>
			<div class="contact__btn"><a href="">お問い合わせ</a></div>
		</div>
	</div>
	<div class="pc-column-center">