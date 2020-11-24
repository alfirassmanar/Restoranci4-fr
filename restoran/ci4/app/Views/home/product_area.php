<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
<!-- Firas -->
            <h1 class="logo mr-auto"><a href="<?= base_url('/homepage') ?>"><img src="upload/icon/restoran.svg" style="margin-bottom: 5px; width: 45px;" alt=""> §ukå-Måju </a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="<?= base_url('/homepage') ?>">Home</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#about">Informasi</a></li>
                    <!-- <li><a href="#specials">Specials</a></li>
                    <li><a href="#events">Events</a></li> -->
                    <!-- <li><a href="#gallery">Gallery</a></li> -->
                    <!-- <li><a href="#chefs">Chefs</a></li> -->
                    <li><a href="#contact">Kontak</a></li>
                    <li>
                        <div class="top-search"><a href="<?php echo base_url('cart'); ?>"><i class="ti-bag"></i></div></a>
                    
                        <div class="sinlge-bar shopping">
						<a href="<?php echo base_url('cart'); ?>" class="single-icon"><img src="<?= base_url('upload/icon/shopping-cart.svg') ?>" style="width: 20px;" alt=""> <span class="total-count"><?= $cart->totalItems() ?></span></a>
						<!-- Shopping Item -->
						<div class="shopping-item">
                            
                        </li>
        
						<?php if (empty(session()->get('pelanggan'))) : ?>
							<li class="book-a-table text-center"><i class="ti-power-off"></i><a href="<?= base_url('/login') ?>">Login</a></li>
                            <?php else : ?>
                                <li class="book-a-table text-center"><i class="ti-power-off"></i><a href="<?= base_url('/login/logout') ?>">Logout</a></li>
                                <?php endif ?>
                                
                                <?php if (!empty(session()->get('pelanggan'))) : ?>
                                    <li><img src="<?= base_url('upload/icon/user.svg') ?>" style="width: 33px; margin: left;" alt=""><a href="<?= base_url('/profile/index/'.session()->get('idpelanggan')) ?>"><?= session()->get('pelanggan'); ?></a></li>
                                    <?php endif ?>
                        
                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Welcome to <span>Suka-Maju</span></h1>
                    <h2>Warung Makan Tradisional Sidoarjo Jawa Timur</h2>

                    <div class="btns">
                        <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
                        <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
                </div>

            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
<!-- Firas -->
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="img/hero/hero-bg2.jpg" alt="">
                        </div>
                        <p>Warung Tradisional Berlokasi di Sidoarjo Kota, Menyajikan Menu Makanan, Minuman, dan Kue Tradisional Khas Sidoarjo dan Sekitarnya.</p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content"  data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="img/hero/hero-bg.jpg" style="width: 550px;"> 
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
       

        <!-- End Why Us Section -->

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">                 
                    <p>Menu Suka-Maju</p>
                </div>

                <div class="row">
			<div class="col-12">
				<div class="product-info">
					<div class="nav-main">
						<?= $this->renderSection('header_inner') ?>
						<?php if (session()->getFlashdata('success') != null) { ?>
							<div class="alert alert-success">
								<?php echo session()->getFlashdata('success'); ?>
							</div>
						<?php } ?>
						<?php if (session()->getFlashdata('error') != null) { ?>
							<div class="alert alert-danger">
								<?php echo session()->getFlashdata('error'); ?>
							</div>
						<?php } ?>
						<!-- Tab Nav -->
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#all" role="tab">Daftar Menu</a></li>
							<?php foreach ($kategori as $key => $value) : ?>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href=".kategori<?php echo $value['idkategori'] ?>" role="tab"><?= $value['kategori'] ?></a></li>
							<?php endforeach ?>
						</ul>
						<!--/ End Tab Nav -->
					</div>
                    
                    <?php foreach ($kategori as $key => $value) : ?>
                <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                <?php foreach ($menu as $key => $data) : ?>
				<?php if ($data['idkategori'] === $value['idkategori']) : ?>
                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="<?= base_url('/upload/' . $data['gambar'] . '') ?>" class="menu-img" style="width: 120px; border-radius: 5%;" alt="">
                        <div class="menu-content">
                            <a href="<?= base_url('productdetail/index' . $data['idmenu']) ?>" style="margin-left: 10px;"><?= $data['menu'] ?></a><span>Rp.<?= $data['harga'] ?></span>
                        </div>
                        <div class="menu-ingredients"> 
                            <div style="margin-left: 45px;"><?php echo $value['keterangan'] ?></div>
                        </div>
                        <div class="box" style="margin-top: 10px;" data-aos="zoom-in" data-aos-delay="100">
                            <a style="margin-left: 10px; " title="Add to cart" href="<?= base_url('cart/buy/' . $data['idmenu']) ?>">Add to Card</a>
                        </div>
                    </div>
                    <?php endif ?>
					<?php endforeach ?>
            </div>
					<?php endforeach ?>
        </section>
        <!-- End Menu Section -->
<!-- Firas -->
        <!-- ======= Specials Section ======= -->
        <section id="specials" class="specials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Spesial</h2>
                    <p>Tentang Produk</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Makanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-2">Minuman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-3">Kue</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Makanan Tradisional dari Sidoarjo</h3>
                                        <p class="font-italic">Makanan ini Sudah Aja Sejak Zaman Dahulu Kala di Sidoarjo Jawa Timur</p>
                                        <p>Makanan di restoran kami disediakan / dimasak sesuai prosedur restoran sudah lulus seleksi Makanan sehingga 100% aman dikonsumsi dan halal</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="img/logo/pecel.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Minuman Tradisional dari Sidoarjo</h3>
                                        <p class="font-italic">Minuman ini Sudah Aja Sejak Zaman Dahulu Kala di Sidoarjo Jawa Timur</p>
                                        <p>Minuman di restoran kami disediakan / dimasak sesuai prosedur restoran sudah lulus seleksi Minuman sehingga 100% aman dikonsumsi dan halal</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="img/logo/esteh.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Kue / Jajanan Tradisional dari Sidoarjo</h3>
                                        <p class="font-italic">Kue ini Sudah Aja Sejak Zaman Dahulu Kala di Sidoarjo Jawa Timur</p>
                                        <p>Kue di restoran kami disediakan / dimasak sesuai prosedur restoran sudah lulus seleksi Kue sehingga 100% aman dikonsumsi dan halal</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="img/logo/rangin.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                                        <p class="font-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                                        <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis
                                            aperiam quia a laborum inventore</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/specials-4.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                        <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                                        <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/specials-5.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Specials Section -->
<!-- Firas -->
        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">


            </div>
        <!-- End Book A Table Section -->

        <!-- ======= Testimonials Section ======= -->
    
        <!-- End Testimonials Section -->

        <!-- ======= Gallery Section ======= -->

        <!-- End Gallery Section -->

        <!-- ======= Chefs Section ======= -->
        <!-- End Chefs Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Location</h2>
                    <p>Warung Suka-Maju Sidoarjo</p>
                </div>
            </div>

            <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen></iframe>
            </div>

            <!-- https://www.google.co.id/maps/place/Wardoyo+(Warung+Podojoyo)/@-7.454739,112.7011853,710m/data=!3m2!1e3!4b1!4m5!3m4!1s0x2dd7e137580e39b3:0x6083725744b5dbe0!8m2!3d-7.454739!4d112.703374?hl=id -->
        
        </section>
        <!-- End Contact Section -->
<!-- Firas -->
    </main>
    <!-- End #main -->