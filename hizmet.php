<section class="service-area service-area-two pt-100 pb-100">
			<div class="container">
				<div class="section-title">
					<span>Gizem Lojistik</span>
					<h2>Hizmetlerimiz</h2>
				</div>
				<div class="row">
                <?php
				$iceriksor=$db->prepare("select * from icerik ");
				$iceriksor->execute();
				while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { ?>
					<div class="col-lg-4 col-sm-6">
						<div class="single-service">
							<div class="service-content-wrap">
								<i class="<?php echo $icerikcek['oz1']?>" style="font-size:40px;"></i>
								<h3><?php echo $icerikcek['icerik_ad']?></h3>
								<p><?php echo $icerikcek['icerik_detay']?></p>
							</div>
							<div class="service-heading">
								<a class="circle-read-more" href="<?php echo $icerikcek['sef']?>">
									<h3><?php echo $icerikcek['icerik_ad']?></h3>
									<i class="flaticon-right-1"></i>
								</a>
							</div>
						</div>
					</div>
                    <?php } ?> 
				</div>
			</div>
		</section>
	