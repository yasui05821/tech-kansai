<?php get_header();?>
		<div class="contents-blog">
			<div class="container">
				<?php
					while ( have_posts() ) : the_post();
				?>
					<div id="<?php the_ID(); ?>" class="blog__single">
						<div class="blog__header">
							<h1 class="blog-h1"><?php the_title(); ?></h1>
							<p class="blog__date"><?php the_date(); ?></p>
							<div class="blog__writer">
								<div class="writer-icon"></div>
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
						</div>

						<div  id="blog__content">
							<div class="blog__photo">
								<img src="http://placehold.it/500x220" alt="">
							</div>

							<p class="blog__p">午後からのセッションでタイトルは「フロントエンドエンジニアのためのマイクロフレームワークLumen」です。</p>

							<h2 class="blog__h2">紙面デザインとwebデザインの比較</h2>

							<p class="blog__p">午後からのセッションでタイトルは「フロントエンドエンジニアのためのマイクロフレームワークLumen」です。</p>

							<div class="blog__table">
								<table>
									<thead>
									<tr>
										<th>特徴</th>
										<th>可変性の種類</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>情報の取捨選択方法</td>
										<td>情報量の可変性</td>
									</tr>
									<tr>
										<td>情報の取捨選択方法</td>
										<td>情報量の可変性</td>
									</tr>
									</tbody>
								</table>
							</div>

							<h3 class="blog__h3">2016/04/16 に北海道で行われた</h3>

							<p class="blog__p">１つ目は、<em class="blog__strong">強調テキスト！</em>による情報の重層化。このことによって、情報の一覧性・類似情報の提供（詳しくはこちら的なもの）が可能になります。</p>

							<ul class="blog__list">
								<li class="point">さんぷるてきすと</li>
								<li class="point"><a href="">サンプルリンク</a></li>
								<li class="point">さんぷるてきすと</li>
							</ul>

							<h4 class="blog__h4">その他</h4>

							<p class="blog__p">１つ目は、<a href="" class="link">ハイパーテキスト</a>による情報の重層化。このことによって、情報の一覧性・類似情報の提供（詳しくはこちら的なもの）が可能になります。</p>

							<hr class="blog__hr">

							<div class="blog__quotation">
								<p>吾輩は猫である。名前はまだない。吾輩は猫である。名前はまだない。吾輩は猫である。名前はまだない。</p>
							</div>
							<div class="blog-end__line"></div>

							<div class="blog__tags" >
								<?php the_tags('tag: '); ?>
							</div>
							<div class="blog__community"><a href="">[ 関西フロントエンドUG ]</a></p></div>
							<div class="blog__writer-profile">
								<div class="writer-profile__ttl">記事を書いた人</div>
								<div class="writer-icon"></div>
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
				<?php
				endwhile;
					?>
			</div>

			<div class="articles articles--related">
				<div class="container">
					<h1 class="articles__ttl">関連の記事</h1>
					<div class="articles__article">
						<div class="article__thumb">
							<div class="article__thumb-img">
							</div>
							<div class="article__category category--prog">
								<i class="material-icons">build</i>
								<span>プログラミング</span>
							</div>
							<span class="article__community"><a href="">[ PHP勉強会 ]</a></span>
						</div>
						<div class="article__detail">
							<p class="article__ttl">PHPカンファレンス北海道 2016にて登壇してきました。</p>
							<p class="article__text">ずっと先刻を観念院はもうその影響でたらなりに妨げばいなけれには批評受けるますですので、少しにも過ぎで…</p>
							<span class="article__date">2016/4/16</span>

							<div class="article__writer">
								<div class="writer-icon"></div>
								<span class="writer-name">hogekane</span>
							</div>
						</div>
					</div>
					<div class="articles__article">
						<div class="article__thumb">
							<div class="article__thumb-img">
							</div>
							<div class="article__category category--design">
								<i class="material-icons">mode_edit</i>
								<span>デザイン</span>
							</div>
							<span class="article__community"><a href="">[ PHP勉強会PHP勉強会PHP勉強会PHP勉強会PHP勉強会 ]</a></span>
						</div>
						<div class="article__detail">
							<p class="article__ttl">PHPカンファレンス北海道</p>
							<p class="article__text">ずっと先刻を観念院はもうその影響でたらなりに妨げばいなけれには批評受けるますですので、少しにも過ぎで…</p>
							<span class="article__date">2016/4/16</span>

							<div class="article__writer">
								<div class="writer-icon"></div>
								<span class="writer-name">mikakane</span>
							</div>

						</div>
					</div>
					<div class="articles__article">
						<div class="article__thumb">
							<div class="article__thumb-img">
							</div>
							<div class="article__category category--other">
								<i class="material-icons">lightbulb_outline</i>
								<span>考え方・その他</span>
							</div>
							<span class="article__community"><a href="">[ 関西フロントエンドUG ]</a></span>
						</div>
						<div class="article__detail">
							<p class="article__ttl">PHPカンファレンス北海道 2016にて登壇してきました。</p>
							<p class="article__text">ずっと先刻を観念院はもうその影響でたらなりに妨げばいなけれには批評受けるますですので、少しにも過ぎで…</p>
							<span class="article__date">2016/4/16</span>

							<div class="article__writer">
								<div class="writer-icon"></div>
								<span class="writer-name">mikakane</span>
							</div>

						</div>
					</div>
					<div class="articles__article">
						<div class="article__thumb">
							<div class="article__thumb-img">
							</div>
							<div class="article__category category--prog">
								<i class="material-icons">build</i>
								<span>プログラミング</span>
							</div>
							<span class="article__community"><a href="">[ PHP勉強会 ]</a></span>
						</div>
						<div class="article__detail">
							<p class="article__ttl">PHPカンファレンス北海道 2016にて登壇してきました。</p>
							<p class="article__text">ずっと先刻を観念院はもうその影響でたらなりに妨げばいなけれには批評受けるますですので、少しにも過ぎで…</p>
							<span class="article__date">2016/4/16</span>

							<div class="article__writer">
								<div class="writer-icon"></div>
								<span class="writer-name">mikakane</span>
							</div>

						</div>
					</div>
					<div class="articles__article">
						<div class="article__thumb">
							<div class="article__thumb-img">
							</div>
							<div class="article__category category--other">
								<i class="material-icons">lightbulb_outline</i>
								<span>考え方・その他</span>
							</div>
							<span class="article__community"><a href="">[ 関西フロントエンドUG ]</a></span>
						</div>
						<div class="article__detail">
							<p class="article__ttl">PHPカンファレンス北海道 2016にて登壇してきました。</p>
							<p class="article__text">ずっと先刻を観念院はもうその影響でたらなりに妨げばいなけれには批評受けるますですので、少しにも過ぎで…</p>
							<span class="article__date">2016/4/16</span>

							<div class="article__writer">
								<div class="writer-icon"></div>
								<span class="writer-name">mikakane</span>
							</div>

						</div>
					</div>


				</div>
			</div>
			<div class="articles articles--new">
				<div class="container">
					<h1 class="articles__ttl">最新の記事</h1>
					<div class="articles__article">
						<div class="article__thumb">
							<div class="article__thumb-img">
							</div>
							<div class="article__category category--prog">
								<i class="material-icons">build</i>
								<span>プログラミング</span>
							</div>
							<span class="article__community"><a href="">[ PHP勉強会 ]</a></span>
						</div>
						<div class="article__detail">
							<p class="article__ttl">PHPカンファレンス北海道 2016にて登壇してきました。</p>
							<p class="article__text">ずっと先刻を観念院はもうその影響でたらなりに妨げばいなけれには批評受けるますですので、少しにも過ぎで…</p>
							<span class="article__date">2016/4/16</span>

							<div class="article__writer">
								<div class="writer-icon"></div>
								<span class="writer-name">mikakane</span>
							</div>

						</div>
					</div>
					<div class="articles__article">
						<div class="article__thumb">
							<div class="article__thumb-img">
							</div>
							<div class="article__category category--design">
								<i class="material-icons">mode_edit</i>
								<span>デザイン</span>
							</div>
							<span class="article__community"><a href="">[ PHP勉強会PHP勉強会PHP勉強会PHP勉強会PHP勉強会 ]</a></span>
						</div>
						<div class="article__detail">
							<p class="article__ttl">PHPカンファレンス北海道</p>
							<p class="article__text">ずっと先刻を観念院はもうその影響でたらなりに妨げばいなけれには批評受けるますですので、少しにも過ぎで…</p>
							<span class="article__date">2016/4/16</span>

							<div class="article__writer">
								<div class="writer-icon"></div>
								<span class="writer-name">mikakane</span>
							</div>

						</div>
					</div>
					<div class="articles__article">
						<div class="article__thumb">
							<div class="article__thumb-img">
							</div>
							<div class="article__category category--other">
								<i class="material-icons">lightbulb_outline</i>
								<span>考え方・その他</span>
							</div>
							<span class="article__community"><a href="">[ 関西フロントエンドUG ]</a></span>
						</div>
						<div class="article__detail">
							<p class="article__ttl">PHPカンファレンス北海道 2016にて登壇してきました。</p>
							<p class="article__text">ずっと先刻を観念院はもうその影響でたらなりに妨げばいなけれには批評受けるますですので、少しにも過ぎで…</p>
							<span class="article__date">2016/4/16</span>

							<div class="article__writer">
								<div class="writer-icon"></div>
								<span class="writer-name">mikakane</span>
							</div>

						</div>
					</div>
					<div class="articles__article">
						<div class="article__thumb">
							<div class="article__thumb-img">
							</div>
							<div class="article__category category--prog">
								<i class="material-icons">build</i>
								<span>プログラミング</span>
							</div>
							<span class="article__community"><a href="">[ PHP勉強会 ]</a></span>
						</div>
						<div class="article__detail">
							<p class="article__ttl">PHPカンファレンス北海道 2016にて登壇してきました。</p>
							<p class="article__text">ずっと先刻を観念院はもうその影響でたらなりに妨げばいなけれには批評受けるますですので、少しにも過ぎで…</p>
							<span class="article__date">2016/4/16</span>

							<div class="article__writer">
								<div class="writer-icon"></div>
								<span class="writer-name">mikakane</span>
							</div>

						</div>
					</div>
					<div class="articles__article">
						<div class="article__thumb">
							<div class="article__thumb-img">
							</div>
							<div class="article__category category--other">
								<i class="material-icons">lightbulb_outline</i>
								<span>考え方・その他</span>
							</div>
							<span class="article__community"><a href="">[ 関西フロントエンドUG ]</a></span>
						</div>
						<div class="article__detail">
							<p class="article__ttl">PHPカンファレンス北海道 2016にて登壇してきました。</p>
							<p class="article__text">ずっと先刻を観念院はもうその影響でたらなりに妨げばいなけれには批評受けるますですので、少しにも過ぎで…</p>
							<span class="article__date">2016/4/16</span>

							<div class="article__writer">
								<div class="writer-icon"></div>
								<span class="writer-name">mikakane</span>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="contact pc--none">
			<p class="contact__message">運営に関するお問い合わせはこちら</p>
			<div class="contact__btn"><a href="">お問い合わせ</a></div>
		</div>
		<?php get_footer();?>