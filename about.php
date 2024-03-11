<?php include 'Includes/header.php' ?>
<style>
    footer {
        border-top: 1px solid #413c9640;
        margin-top: 45px;
    }

    .loading_screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: white;
        opacity: 50%;
        z-index: 999;
    }
</style>

<div class="loading_screen d-none">

</div>

<div class="section-heading">
    <img src="images/logo_part.png" class="section_bg" alt="">
    <div class="section-padding-left">
        <h1 class="h1">About Us</h1>
        <p class="h6"><a href="index.php" class="go_back_link">Home </a> About</p>
    </div>
</div>

<!-- about -->
<div class="container">
    <div class="row py-5">
        <div class="col-lg-6 d-none d-md-block reveal-r">
            <div class="align-center">
                <div class="about_page_img rounded-lg overflow-hidden">
                    <img src="images/Mobile_slider_2.png" class="object-cover" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6 reveal-l mx-4 mx-md-0">
            <p class="h5">Our Story</p>
            <p class="h2 big-heading mt-3 mb-4 my-md-0 mb-md-2">Transforming Smiles, Building Confidence</p>
            <p class="para text-justify">At Aligning Dentistry, located in the heart of Chennai, we are dedicated to spreading beautiful,
                everlasting smiles through our specialized dental treatments. Led by our chief Orthodontist, Dr. N.
                Subash Chandar, and our Smile Correction Specialist & Chief Cosmetic Dentist, Dr. Venkata Seetha Lakshmi
                Subash, our team of highly experienced dentists and staff is committed to providing personalized care
                and tailored treatment plans. With the latest technological equipment and stringent sterilization
                protocols, we ensure the highest quality of dental care for our patients, ranging from simple to complex
                dental rehabilitations.
            </p>
        </div>
    </div>
</div>

<!-- points -->
<div class="bg-light mb-5">
    <div class="container py-3 bg-light">
        <div class="row mx-0 mx-md-5 my-5 text-center">
            <div class="col-lg-12 mb-5">
                <p class="h2 big-heading font-weight-bold reveal-r active">Commitment to Excellence</p>
            </div>
            <div class="col-lg-4 reveal-up-0_5">
                <div class="align-center">
                    <div>
                        <p class="h3 mb-4">Vision</p>
                        <p class="text-justify text-md-center para">To become the leading destination for transforming smiles and promoting oral health
                            through cutting-edge dental solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 reveal-up-1_0 border-left-right my-5 my-lg-0">
                <div class="align-center">
                    <div>
                        <p class="h3 mb-4">Mission</p>
                        <p class="text-justify text-md-center para">Our mission is to provide specialized treatment services utilizing state-of-the-art
                            technology and personalized care, with a focus on achieving each patient's perfect smile.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 reveal-up-1_5">
                <div class="align-center">
                    <div>
                        <p class="h3 mb-4">Values</p>
                        <p class="text-justify text-md-center para">Our core principles include Patient-Centered Care, Excellence, Innovation, Integrity, and
                            Collaboration for outstanding results.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- doctors section -->
<div class="mx-0 mx-md-0 mb-5">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <p class="h1">Our Doctors</p>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="d-flex justify-content-between align-items-center doctor_container1 reveal-r">
                <div class="w-60 text-center reveal-r">
                    <p class="h4">Dr Subash Chandar</p>
                    <p class="h6">MDS (Orthodontics)</p>
                </div>
                <div class="doctor_images w-40">
                    <img src="images/doctors/dr-subash-chandar.png" class="object-fit-height-auto" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="d-flex justify-content-between align-items-center doctor_container2 reveal-l">
                <div class="doctor_images w-40">
                    <img src="images/doctors/dr-venkata-seetha-lakshmi-subash.png" class="object-fit-height-auto"
                        alt="">
                </div>
                <div class="w-60 text-center reveal-L">
                    <p class="h4">Dr Venkata Seetha Lakshmi Subash</p>
                    <p class="h6">MDS (Prosthodontics)</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- gallery -->
<div class=" border-top pt-4">
    <div class="row">
        <div class="col-lg-12 mb-3 reveal-up-0_5">
        <p class="h2 text-center">Gallery</p>
        </div>
        <div class="col-12 reveal-r">
            <div class="gallery_slider">
                <div class="gallery_container">
                    <img src="images/gallery/gallery_img (1).jpg" class="object-cover" alt="">
                </div>
                <div class="gallery_container">
                    <img src="images/gallery/gallery_img (2).jpg" class="object-cover" alt="">
                </div>
                <div class="gallery_container">
                    <img src="images/gallery/gallery_img (3).jpg" class="object-cover" alt="">
                </div>
                <div class="gallery_container">
                    <img src="images/gallery/gallery_img (4).jpg" class="object-cover" alt="">
                </div>
                <div class="gallery_container">
                    <img src="images/gallery/gallery_img (6).jpg" class="object-cover" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'Includes/footer.php' ?>
<script>
    $('.gallery_slider').slick({
        slidesToShow: 4,
        speed: 1000,
        arrows: false,
        // autoplay: true,
        autoplaySpeed: 1000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
</script>