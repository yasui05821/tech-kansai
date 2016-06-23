<?php get_header();?>
		<div class="contents-top">
			<div class="about pc--none">
				<div class="container">
					<div class="about__ttl"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></div>
					<div class="about__description">
						関西のWeb・IT業界のコミュニティ<br>
						（勉強会・交流会）情報を中心に、<br>
						「おもろい」感じの学べるイベントを<br>
						沢山紹介していきます。
					</div>
				</div>
			</div>

			<div class="articles articles--new">
				<div class="container">
					<p class="articles__ttl">最新の記事</p>
						<?php
						if( have_posts() ) :
							while ( have_posts() ) : the_post();
								?>
								<div id="post-<?php the_ID(); ?>"class="articles__article clickBobble">
									<div class="article__thumb">
										<div class="article__thumb-img" style="background-image: url(<?php
											$directory = get_template_directory_uri();
											if( has_post_thumbnail() ) {
												echo wp_get_attachment_url( get_post_thumbnail_id() );
											} else {
												echo $directory."/images/no-img.jpg";
											}
										?>)">
										</div>
										<?php
											$cats = get_the_category();
											$cats = $cats[0];
										?>
										<div class="article__category <?php echo $cats->category_nicename;?>">
											<img src="<?php echo get_template_directory_uri(); ?>/images/ic_<?php echo $cats->category_nicename;?>.png" alt="">
											<div class="article__category-ttl"><?php the_category(); ?></div>
										</div>
										<span class="article__community"><a href="">[ PHP勉強会 ]</a></span>
									</div>
									<div class="article__detail">
										<p class="article__ttl">
											<?php the_title(); ?>
										</p>
										<div class="article__text">
											<?php the_excerpt();?>
										</div>
										<span class="article__date"><?php the_date(); ?></span>

										<div class="article__writer">
											<div class="writer-icon"></div>
											<span class="writer-name"><?php the_author();?></span>
										</div>

									</div>
								</div>
								<?php
							endwhile;
						else :
							?>
							<h2>記事はありません</2>
							<p>お探しの記事は見つかりませんでした。</p>
							<?php
						endif;
						?>
					<div class="pagination">
						<?php $args = array(
							'prev_text' => '&laquo; PREV',
							'next_text' => 'NEXT &raquo;',
							'show_all' => false,
							'mid_size' => 1,
							'screen_reader_text' => 'pagination',
						);
						the_posts_pagination( $args ); ?>
					</div>
				</div>
			</div>

			<div class="events  pc--none">
				<h1 class="events__ttl">開催予定のイベント</h1>
				<div class="container">
					<div class="events__event">
						<span class="event__prefectures">大阪府</span>
						<span class="event__date">6月12日</span>
						<span class="event__time">13:00-</span>
						<a class="event__ttl" href="#" >もくもく会</a>
						<span class="event__community">[ leccafe ]</span>
						<span class="event__seat seat--vacancy">２人分の空席</span>
						<span class="event__place">株式会社chatbox</span>
					</div>
					<div class="events__event">
						<span class="event__prefectures">京都府</span>
						<span class="event__date">6月16日</span>
						<span class="event__time">19:00-</span>
						<a class="event__ttl" href="#">フロントエンドUI/UXについて語ろう勉強会</a>
						<span class="event__community">[ 関西フロントエンドUG ]</span>
						<span class="event__seat seat--overflow">キャンセル待ち105名</span>
						<span class="event__place">TAMコワーキングTAMコワーキングTAMコワーキングTAMコワーキング</span>
					</div>
					<div class="events__event">
						<span class="event__prefectures">京都府</span>
						<span class="event__date">6月16日</span>
						<span class="event__time">19:00-</span>
						<a class="event__ttl" href="#">フロントエンドUI/UXについて語ろう勉強会フロントエンドUI/UXについて語ろう勉強会フロントエンドUI/UXについて語ろう勉強会</a>
						<span class="event__community">[ 関西フロントエンドUG ]</span>
						<span class="event__seat seat--overflow">キャンセル待ち105名</span>
						<span class="event__place">TAMコワーキング</span>
					</div>
					<div class="events__event">
						<span class="event__prefectures">大阪府</span>
						<span class="event__date">6月12日</span>
						<span class="event__time">13:00-</span>
						<a class="event__ttl" href="#" >もくもく会</a>
						<span class="event__community">[ leccafe ]</span>
						<span class="event__seat seat--full">満席</span>
						<span class="event__place">株式会社chatbox</span>
					</div>
					<div class="events__event">
						<span class="event__prefectures">大阪府</span>
						<span class="event__date">6月12日</span>
						<span class="event__time">13:00-</span>
						<a class="event__ttl" href="#" >もくもく会</a>
						<span class="event__community">[ leccafe ]</span>
						<span class="event__seat seat--vacancy">２人分の空席</span>
						<span class="event__place">株式会社chatbox</span>
					</div>
					<div class="events__event">
						<span class="event__prefectures">大阪府</span>
						<span class="event__date">6月12日</span>
						<span class="event__time">13:00-</span>
						<a class="event__ttl" href="#" >もくもく会</a>
						<span class="event__community">[ leccafe ]</span>
						<span class="event__seat seat--vacancy">２人分の空席</span>
						<span class="event__place">株式会社chatbox</span>
					</div>
					<div class="events__event">
						<span class="event__prefectures">京都府</span>
						<span class="event__date">6月16日</span>
						<span class="event__time">19:00-</span>
						<a class="event__ttl" href="#" >フロントエンドUI/UXについて語ろう勉強会</a>
						<span class="event__community">[ 関西フロントエンドUG ]</span>
						<span class="event__seat seat--overflow">キャンセル待ち105名</span>
						<span class="event__place">TAMコワーキングTAMコワーキングTAMコワーキングTAMコワーキング</span>
					</div>
					<div class="events__event">
						<span class="event__prefectures">京都府</span>
						<span class="event__date">6月16日</span>
						<span class="event__time">19:00-</span>
						<a class="event__ttl" href="#" >フロントエンドUI/UXについて語ろう勉強会フロントエンドUI/UXについて語ろう勉強会フロントエンドUI/UXについて語ろう勉強会</a>
						<span class="event__community">[ 関西フロントエンドUG ]</span>
						<span class="event__seat seat--overflow">キャンセル待ち105名</span>
						<span class="event__place">TAMコワーキング</span>
					</div>
					<div class="events__event">
						<span class="event__prefectures">大阪府</span>
						<span class="event__date">6月12日</span>
						<span class="event__time">13:00-</span>
						<a class="event__ttl" href="#" >もくもく会</a>
						<span class="event__community">[ leccafe ]</span>
						<span class="event__seat seat--full">満席</span>
						<span class="event__place">株式会社chatbox</span>
					</div>
					<div class="events__event">
						<span class="event__prefectures">大阪府</span>
						<span class="event__date">6月12日</span>
						<span class="event__time">13:00-</span>
						<a class="event__ttl" href="#" >もくもく会</a>
						<span class="event__community">[ leccafe ]</span>
						<span class="event__seat seat--vacancy">２人分の空席</span>
						<span class="event__place">株式会社chatbox</span>
					</div>
					<div class="link__event-archives">
						<a class="" href="">イベント一覧へ</a>
					</div>
				</div>
			</div>
			<nav class="information pc--none">
				<ul>
					<li class="information__item">
						<a href=""><i class="fa fa-gratipay" aria-hidden="true"></i>はじめて勉強会に参加する方へ</a>
					</li>
					<li class="information__item">
						<a href=""><i class="fa fa-group" aria-hidden="true"></i>関西のコミュニティ紹介</a>
					</li>
					<li class="information__item">
						<a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ブログ書いてみませんか？</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="contact pc--none">
			<p class="contact__message">運営に関するお問い合わせはこちら</p>
			<div class="contact__btn"><a href="">お問い合わせ</a></div>
		</div>
		<?php get_footer(); ?>