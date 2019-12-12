<div class="home">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(assets/images/clean1.jpg)"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                    <div class="home_slider_title">A new Clean Service experience.</div>
                                    <div class="home_slider_subtitle">Melayani dengan penuh kasih.</div>
                                    <div class="button button_light home_button"><a href="#">Order Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Home Slider Dots -->

    </div>
</div>
<div class="site-section">
    <?php foreach ($produk as $produk) : ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 project-entry">
                    <a href="#" class="d-block figure">
                        <img src="<?= base_url() . 'assets/front/images/' . $produk['gambar'] ?>" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="mb-0"><?php echo $produk['nama_berita']; ?></a></h2>
                    <h4 class="mb-0"><?php echo $produk['deskripsi']; ?></a></h4>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 project-entry">
                    <a href="#" class="d-block figure">
                        <img src="<?= base_url() . 'assets/front/images/' . $produk['gambar'] ?>" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="mb-0"><?php echo $produk['nama_berita']; ?></a></h2>
                    <h4 class="mb-0"><?php echo $produk['deskripsi']; ?></a></h4>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 project-entry">
                    <a href="#" class="d-block figure">
                        <img src="<?= base_url() . 'assets/front/images/' . $produk['gambar'] ?>" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="mb-0"><?php echo $produk['nama_berita']; ?></a></h2>
                    <h4 class="mb-0"><?php echo $produk['deskripsi']; ?></a></h4>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>