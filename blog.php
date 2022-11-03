	<!-- Start Blog Area -->
  <section class="blog-area pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span>Gizem Lojistik</span>
					<h2>Bloglar</h2>
					<p>Firmamızla İlgili Güncel Kampanyalara, Haberlere ve Diğer Sektörel Gelişmelere Blogumuz Aracılığıyla Ulaşabilirsiniz. </p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
          <?php
          $blogsor=$db->prepare("select * from blog order by blog_zaman DESC limit 9");
          $blogsor->execute();

          while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) { ?>	
						<div class="single-blog">
            <a href="<?=seo($blogcek["sef"])?>">
              <img src="img/blog/<?php echo $blogcek['blog_resim']; ?>" alt="<?php echo $blogcek['blog_ad']; ?>">		
          </a>
								
							<div class="blog-content">
								<ul>
									<li>
                  <a href="<?=seo($blogcek["sef"])?>"><img src="tema/assets/img/blog/4.jpg" alt="Image"></a>
                  <a href="<?=seo($blogcek["sef"])?>"><?php echo $blogcek['blog_ad']; ?></a>
									</li>
									<li><?php echo $blogcek['blog_zaman']; ?></li>
								</ul>
								<h3>
                <a href="<?=seo($blogcek["sef"])?>">
										<?php echo $blogcek['blog_title'] ?>
									</a>
								</h3>
                <p><?php echo $blogcek['blog_desc'] ?></p>
								<a href="<?=seo($blogcek["sef"])?>">
									Devamını oku
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
						</div>
            <?php } ?> 
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->
  