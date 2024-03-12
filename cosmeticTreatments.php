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

<div class="section-heading">
    <img src="images/logo_part.png" class="section_bg" alt="">
    <div class="section-padding-left">
        <h1 class="h1">Cosmetic Treatments</h1>
        <p class="h6"><a href="index.php" class="go_back_link">Home </a>Cosmetic reatments</p>
    </div>
</div>

<div class="container services_points">
    <div class="row">
        <div class="col-lg-6 mt-4 mt-md-5 order-1 order-lg-1">
            <div class="align-right h-100">
                <div>
                    <h2 class="mb-3">Invisalign</h2>
                    <p>Boost your confidence! Say goodbye to crooked teeth worries. Choose Invisalign for an invisible
                        solution to straighten your smile. With advanced technology, we create a customized plan for
                        your new smile. Our aligners are comfy, removable, and barely noticeable.</p>
                    <a href="invisalign.php" class="btn btn-primary my-3"> Read More About Invisign</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-4 mt-md-5 order-2 order-lg-2">
            <div class="align-right h-100">
                <div class="services_image">
                    <img src="images/home/tooth_aligners.jpeg" class="object-cover" alt="">
                </div>
            </div>
        </div>

        <div class="col-lg-6 mt-4 mt-md-5 order-4 order-lg-3">
            <div class="align-left h-100">
                <div class="services_image">
                    <img src="images/home/braces.jpg" class="object-cover" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-4 mt-md-5 order-3 order-lg-4">
            <div class="align-center h-100">
                <div>
                    <h2 class="mb-3">Baces</h2>
                    <p>Braces align teeth for a balanced smile and improved function, boosting confidence for those
                        hesitant in social settings or photos. They prevent health issues by combating bacteria buildup
                        and tooth misalignment, promoting long-term oral health and confidence.</p>
                    <a href="braces.php" class="btn btn-primary my-3"> Read More About Baces</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mt-3 mt-md-5 order-6 order-lg-65">
            <div class="align-right h-100">
                <div class="services_image">
                    <img src="images/home/smile-makeover.png" class="object-cover" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3 mt-md-5 order-5 order-lg-5">
            <div class="align-center h-100">
                <div>
                    <h2 class="mb-3">Smile Makeover</h2>
                    <p>Achieving a dazzling smile, like those seen on actors and actresses, is now accessible through
                        procedures like laminates, veneers, or lumineers. A confident smile, addressing various dental
                        issues, has become a hallmark of modern beauty standards. In today's society, emphasis on
                        enhancing beauty and personality places the smile at the forefront of transformation.</p>
                    <a href="smile-makeover.php" class="btn btn-primary my-3"> Read More About Smile Makeover</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mt-3 mt-md-5 order-8 order-lg-7">
            <div class="align-left h-100">
                <div class="services_image">
                    <img src="images/home/smile_makeover.jpg" class="object-cover" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3 mt-md-5 order-7 order-lg-8">
            <div class="align-center h-100">
                <div>
                    <h2 class="mb-3">Teeth Whitening</h2>
                    <p>As teeth darken over time and accumulate surface stains, many seek to brighten their smile. We
                        offer various whitening options, including toothpaste, at-home kits, and in-office treatments.
                        Our team considers your oral health and advises on the most suitable whitening method for you.
                    </p>
                    <a href="teeth-whitening.php" class="btn btn-primary my-3"> Read More About Teeth Whitening</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mt-3 mt-md-5 order-10 order-lg-10">
            <div class="align-right h-100">
                <div class="services_image">
                    <img src="images/home/dentures.jpg" class="object-cover" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3 mt-md-5 order-9 order-lg-9">
            <div class="align-center h-100">
                <div>
                    <h2 class="mb-3">Dentures</h2>
                    <p>Dentures are artificial teeth fitted onto a framework that allow a person to speak, and chew food
                        naturally, which otherwise is not possible because of missing teeth.</p>
                    <a href="dentures.php" class="btn btn-primary my-3"> Read More About Dentures</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mt-3 mt-md-5 order-12 order-lg-11">
            <div class="align-left h-100">
                <div class="services_image">
                    <img src="images/home/gum_surgeries.jpg" class="object-cover" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3 mt-md-5 order-11 order-lg-12">
            <div class="align-center h-100">
                <div>
                    <h2 class="mb-3">Gum Surgeries</h2>
                    <p>Gum depigmentation, a cosmetic dental procedure, lightens or removes black spots caused by
                        melanin, often from medications or smoking. Techniques like surgical or LASER ablation target
                        melanocytes, reducing melanin production, resulting in lighter, more uniform gums.</p>
                    <a href="gum-surgeries.php" class="btn btn-primary my-3"> Read More About Gum Surgeries</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-3 mt-md-5 order-1 order-lg-1">
            <div class="align-center h-100">
                <div>
                    <h2 class="mb-3">Cosmetic Jaw Surgeries</h2>
                    <p>Primarily addressing functional issues like disproportionate jaw growth and bite disharmony,
                        corrective jaw surgery is typically performed by oral and maxillofacial surgeons. In some cases,
                        plastic or cosmetic surgeons may assist in these procedures, aiming to restore proper jaw
                        function and alignment.</p>
                    <a href="cosmetic-jaw-surgeries.php" class="btn btn-primary my-3"> Read More About Cosmetic Jaw
                        Surgeries</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3 mt-md-5 order-2 order-lg-2">
            <div class="align-right h-100">
                <div class="services_image">
                    <img src="https://picsum.photos/400/300" class="object-cover" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'Includes/footer.php' ?>
<script>servixcesPages()</script>