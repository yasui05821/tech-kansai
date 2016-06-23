<?php get_header();?>
	<div class="contents-blog">
		<?php
		if( have_posts() ) :
			while ( have_posts() ) : the_post();
				?>
		<div class="container">
			<div id="<?php the_ID(); ?>" class="blog__single">
				<div class="blog__header">
					<h1 class="blog-h1"><?php the_title(); ?></h1>
					<p class="blog__date"><?php the_date(); ?></p>
					<div class="blog__writer">
						<div class="writer-icon" style="background-image: url(
							<?php
							$user_email = get_the_author_meta('user_email');
							$img_hash = md5( "$user_email" );
							if($img_hash != "5c352d2f2b385a211964ad3daf1fe230")  {
								echo "https://www.gravatar.com/avatar/"."$img_hash";
							}else{
								echo "http://placekitten.com/400/400";
							}
							?>
							)">
						</div>
						<p class="writer-name"><?php the_author();?></p>
					</div>
					<div class="blog__sns">
						<div class="sns__btn">
							<div class="sns__title sns__title--tw">
								<img  src="/wp-content/themes/tech-kansai/images/ic_sns-tw.png" alt="twitterで">
								<span>ツイート</span>
							</div>
							<div class="sns__count sns__count--tw"><span>123</span></div>
						</div>

						<div class="sns__btn">
							<div class="sns__title sns__title--fb">
								<img src="/wp-content/themes/tech-kansai/images/ic_sns-fb.png" alt="Facebookで">
								<span>いいね</span>
							</div>
							<div class="sns__count sns__count--fb"><span>123</span></div>
						</div>
						<div class="sns__btn">
							<div class="sns__title sns__title--hb">
								<img src="/wp-content/themes/tech-kansai/images/ic_sns-hb.png" alt="はてブ">
								<span>ブクマ</span>
							</div>
							<div class="sns__count sns__count--hb"><span>123</span></div>
						</div>

					</div>
				</div>

				<div id="blog__content">
					<?php the_content(); ?>
					<div class="blog-end__line"></div>

					<div class="blog__tags" >
						<?php the_tags('tag: '); ?>
					</div>
					<div class="blog__community"><a href="">[ 関西フロントエンドUG ]</a></p></div>
					<div class="blog__writer-profile">
						<div class="writer-profile__ttl">記事を書いた人</div>
						<div class="writer-icon" style="background-image: url(
						<?php
						$user_email = get_the_author_meta('user_email');
						$img_hash = md5( "$user_email" );
						if($img_hash != "5c352d2f2b385a211964ad3daf1fe230")  {
							echo "https://www.gravatar.com/avatar/"."$img_hash";
						}else{
							echo "http://placekitten.com/400/400";
						}
						?>
							)">
						</div>
						<p class="writer-name">
							<a href="<?php echo esc_url(
								get_author_posts_url( get_the_author_meta('ID') )
							); ?>">
								<?php the_author();?>
							</a>

						</p>
						<div class="writer-skill">フルスタックエンジニア</div>
						<div class="writer-sns">
							<div class="writer-sns__icon writer-sns--tw"><i class="fa fa-twitter"></i></div>
							<div class="writer-sns__icon writer-sns--fb"><i class="fa fa-facebook"></i></div>
						</div>
					</div>
					<div class="share-sns">
						<div class="share-sns__btn twitter share-btn">
							<img class="twitter-icon" src="/wp-content/themes/tech-kansai/images/ic_sns-tw.png" alt="">
							<span>ツイート</span>
						</div>
						<div class="share-sns__btn facebook ">
							<img class="facebook-icon" src="/wp-content/themes/tech-kansai/images/ic_sns-fb.png" alt="">
							<span>いいね</span>
						</div>
						<div class="share-sns__btn hatebu">
							<img class="hatebu-icon" src="/wp-content/themes/tech-kansai/images/ic_sns-hb.png" alt="">
							<span>はてブ</span>
						</div>
					</div>
				</div>

			</div>
		</div>

				<div class="articles articles--related">
					<?php
						$categories = get_the_category( $post->ID );
						$category_ID = array();
						foreach ( $categories as $category ){
							array_push( $category_ID, $category->cat_ID );
						}
						$sticky = get_option( 'sticky_posts' );
						$args = array(
							'post__not_in' => array($post->ID),
							'post__not_in' => $sticky,
							'category__in' => $category_ID,
							'posts_per_page' => 3,
							'orderby' => 'date',
						);
						$my_query = new WP_Query( $args ); ?>
					<div class="container">
						<p class="articles__ttl">関連の記事</p>
						<?php
						if( $my_query->have_posts() ) :
							while ( $my_query->have_posts() ) : $my_query->the_post();
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
											<a class="titleLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</p>
										<div class="article__text">
											<?php the_excerpt();?>
										</div>
										<span class="article__date"><?php the_date(); ?></span>

										<div class="article__writer">
											<div class="writer-icon" style="background-image: url(
												<?php
												$user_email = get_the_author_meta('user_email');
												$img_hash = md5( "$user_email" );
												if($img_hash != "5c352d2f2b385a211964ad3daf1fe230")  {
													echo "https://www.gravatar.com/avatar/"."$img_hash";
												}else{
													echo "http://placekitten.com/400/400";
												}
												?>
												)">
											</div>
											<span class="writer-name"><?php the_author();?></span>
										</div>

									</div>
								</div>
								<?php
							endwhile;
						else :
							?>
							<p>関連するの記事は見つかりませんでした。</p>
							<?php
						endif;
						wp_reset_postdata();
						?>
					</div>
				</div>
				<div class="articles articles--new">
					<?php
					$sticky = get_option( 'sticky_posts' );
					$args = array(
						'post__not_in' => array($post->ID),
						'post__not_in' => $sticky,
						'posts_per_page' => 3,
						'orderby' => 'date',
					);
					$my_query = new WP_Query( $args ); ?>
					<div class="container">
						<p class="articles__ttl">最新の記事</p>
						<?php
						if( $my_query->have_posts() ) :
							while ( $my_query->have_posts() ) : $my_query->the_post();
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
											<a class="titleLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</p>
										<div class="article__text">
											<?php the_excerpt();?>
										</div>
										<span class="article__date"><?php the_date(); ?></span>

										<div class="article__writer">
											<div class="writer-icon" style="background-image: url(
												<?php
												$user_email = get_the_author_meta('user_email');
												$img_hash = md5( "$user_email" );
												if($img_hash != "5c352d2f2b385a211964ad3daf1fe230")  {
													echo "https://www.gravatar.com/avatar/"."$img_hash";
												}else{
													echo "http://placekitten.com/400/400";
												}
												?>
													)">
												</div>
											<span class="writer-name"><?php the_author();?></span>
										</div>

									</div>
								</div>
								<?php
							endwhile;
						else :
							?>
							<p>関連するの記事は見つかりませんでした。</p>
							<?php
						endif;
						wp_reset_postdata();
						?>
					</div>
				</div>


		<?php
			endwhile;
			else :
		?>
			<div class="post">
				<h2>記事がありません。</h2>
				<p>お探しの記事が見つかりませんでした。</p>
			</div>
			<?php
		endif;
		?>
	</div>


	<div class="contact pc--none">
		<p class="contact__message">運営に関するお問い合わせはこちら</p>
		<div class="contact__btn"><a href="">お問い合わせ</a></div>
	</div>
<?php get_footer();?>