   <!-- Start Testimonials Area Three -->
		<section class="testimonials-three pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span>Gizem Lojistik</span>
					<h2>Müşteri Yorumları</h2>
				</div>
				<div class="row" style="background-color:#24416b">
					<div class="testimonials-wrap-three owl-carousel owl-theme">
                    <?php 
                            $i = 10;
                            $yorumsor=$db->prepare("select * from yorum order by yorum_sira DESC");
                            $yorumsor->execute();
                            while($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)) {
								
						?>
						<div class="testimonials-content-three">
							<div class="testimonials-top-content">
								<img src="tema/assets/img/testimonials/anonim.png" alt="Image">
								<h3><?php echo $yorumcek['yorum_ad'] ?></h3>
							</div>
							<p><?php echo $yorumcek['yorum_detay']; ?></p>
							<ul>
								<li>
									<i class='bx bxs-star'></i>
								</li>
								<li>
									<i class='bx bxs-star'></i>
								</li>
								<li>
									<i class='bx bxs-star'></i>
								</li>
								<li>
									<i class='bx bxs-star'></i>
								</li>
								<li>
									<i class='bx bxs-star'></i>
								</li>
							</ul>
						</div>
						<?php } ?> 
					</div>       
				</div>
			</div>
		</section>
		<!-- End Testimonials Area Three -->
