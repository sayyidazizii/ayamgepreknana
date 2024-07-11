

	<!-- home page slider -->
	<div class="homepage-slider" id="beranda">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Sedap & enak</p>
								<h1>Ayam Geprek Nana</h1>
								<div class="hero-btns">
									<a href="shop.html" class="boxed-btn">Order</a>
									<a href="contact.html" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Fresh Setiap Hari</p>
								<h1>100% Halal</h1>
								<div class="hero-btns">
									<a href="shop.html" class="boxed-btn">Order</a>
									<a href="contact.html" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Pesan Sekarang</p>
								<h1>Lezat , Pedas , Menggugah Selera</h1>
								<div class="hero-btns">
									<a href="shop.html" class="boxed-btn">Order</a>
									<a href="contact.html" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80" >
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Pesan Antar</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>Respon Cepat</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Pelayanan Maksimal</h3>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

  <!-- tentang section -->
	<section class="cart-banner pt-100 pb-100" id="profil">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>100%</strong> <br>Mantap
                                </span>
                            </div>
                        </div>
                    	<img src="<?= base_url() ?>assets/fruitkha-1.0.0/assets/img/tentang.jpg" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Tentang</span> Kami</h3>
                    <h4>Ayam Geprek NANA</h4>
                    <div class="text"><?= $beranda->deskripsi?></div>
                	<a href="cart.html" class="cart-btn mt-3"><i class="fas fa-book"></i> Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
  <!-- end tentang section -->

  <!-- menu section -->
	<div class="product-section mt-150 mb-150" id="menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Daftar</span> Menu</h3>
						<p>Berikut daftar menu terbaru kami.</p>
					</div>
				</div>
			</div>

			<div class="row">
        <?php foreach($menu as $val){ ?>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="<?= base_url() ?>assets/fruitkha-1.0.0/assets/img/products/<?=$val->image?>" alt="menu"></a>
						</div>
						<h3><?=$val->menu?></h3>
						<p class="product-price"> <?=$val->harga?> </p>
						<a href="https://wa.me/<?= $informasi->whatsapp?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Beli</a>
					</div>
				</div>
        <?php } ?>
			</div>
		</div>
	</div>
	<!-- end menu section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150" id="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="<?= base_url() ?>assets/fruitkha-1.0.0/assets/img/testimoni/testi1.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Lutfiani Putri</h3>
								<p class="testimonial-body">
									" Ayamnya sangat krispi,rasa sambal ijonya pengen nambah lagi "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="<?= base_url() ?>assets/fruitkha-1.0.0/assets/img/testimoni/testi2.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Nurafiat Amaliyah. S</h3>
								<p class="testimonial-body">
									" Enak banget, dari rasa ​asinnya, gurihnya pas ​banget, ayamnya gede+juicy "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="<?= base_url() ?>assets/fruitkha-1.0.0/assets/img/testimoni/testi3.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Putriani Sastri</h3>
								<p class="testimonial-body">
									" Harganya worth it untuk ​anak kuliah "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->

	<!-- peta section -->
	<div class="abt-section mb-150" id="maps">
		<div class="container">
			<div class="row">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.02443173057466!2d120.19039916745912!3d-2.9888679999999943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d915fdbc5ef14b9%3A0x1535edb084eacd09!2sKEDAI%20NANA(AYAM%20GEPREK)!5e0!3m2!1sid!2sid!4v1720628593348!5m2!1sid!2sid" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
	<!-- end peta section -->


  <!-- footer -->
	<div class="footer-area" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Tentang Kami</h2>
						<p>KEDAI NANA (AYAM GEPREK)</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Alamat</h2>
						<ul>
							<li><?= $beranda->alamat?></li>
							<li><?= $beranda->telepon?></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
								<li><a href="#beranda">Beranda</a></li>
								<li><a href="#profil">Profil</a></li>
								<li><a href="#menu">Menu</a></li>
								<li><a href="#contact">Kontak</a></li>
								<li><a href="#testimonial">Ulasan</a></li>
								<li><a href="#maps">Lokasi</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Kontak Kami</h2>
						<p>Silahkan Hubungi kami</p>
						<div class="social-icons">
							<ul>
								<li><a href="https://wa.me/<?= $informasi->whatsapp?>" target="_blank"><i class="fab fa-whatsapp"></i> <?= $informasi->whatsapp?></a></li>
							</ul>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	