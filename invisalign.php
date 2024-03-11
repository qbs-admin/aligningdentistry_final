<?php include 'Includes/header.php' ?>
<?php include 'Includes/section_heading.php' ?>
<?php include 'Includes/cosmetic_side_tab.php' ?>

<?php print_heading("Invisalign","Cosmetic Treatment","cosmeticTreatments.php"); ?>

<div class="mx-2 mx-md-5 px-0 px-md-5">
    <div class="row pt-2 pt-md-5">
        <?php side_bar_active(0) ?>
        <div class="col-lg-8 mx-3 mx-md-0">
            <div id="Invisalign" class="services_contents">
                <div class="mb-5">
                    <h2 class="heading mb-1 h1">Invisalign</h2>
                    <p class="subline mb-1">A radiant smile is timeless.</p>
                    <p class="content border-top pt-3">
                        Boost your confidence! Say goodbye to crooked teeth worries. Choose Invisalign for an invisible
                        solution to straighten your smile. With advanced technology, we create a customized plan for
                        your new smile. Our aligners are comfy, removable, and barely noticeable.</p>
                </div>
                <div class="service_image">
                    <img src="https://picsum.photos/500/400" class="object-cover" alt="">
                </div>
                <div class="mt-5">
                    <p class="subline mb-3">Traditional braces and Invisalign differ in several aspects</p>
                    <p class="content">Traditional braces limit food choices, but Invisalign allows freedom to enjoy
                        favorite foods without restrictions. Discomforts like mouth injuries are common with braces, but
                        minimized with Invisalign's smooth aligners. Maintaining oral hygiene is challenging with
                        braces, leading to plaque buildup, while Invisalign aligners are removable for easy care.</p>
                </div>
                <div class="mt-5 d-none">
                    <p>Appearance</p>
                    <p>Traditional braces are visible metal brackets and wires.</p>

                    <p>Eating Restrictions</p>
                    <p>Traditional braces may require dietary restrictions to prevent damage.</p>

                    <p>Comfort</p>
                    <p>Traditional braces may cause discomfort due to wires and brackets.</p>

                    <p>Hygiene</p>
                    <p>Invisalign aligners are removable, allowing for easier brushing and flossing.</p>
                </div>
                <div class="mt-5">
                    <p class="subline my-3">Advantages of Invisalign</p>
                    <p>Seamlessly Invisible</p>
                    <p>Invisalign is clear and virtually invisible, seamlessly blending into your smile.</p>

                    <p>Universal Application</p>
                    <p>Suitable for all ages, Invisalign corrects crooked teeth effectively.</p>

                    <p>Freedom to Enjoy</p>
                    <p>Its removable nature allows you to indulge in any food without restrictions.</p>

                    <p>Preview Progress</p>
                    <p>You can visualize the end results right from the start of treatment.</p>

                    <p>Easy Maintenance</p>
                    <p>Removability facilitates regular brushing, flossing, and optimal oral hygiene.</p>

                    <p>Comfortable Wear</p>
                    <p>Made of smooth, metal-free material, Invisalign ensures a comfortable experience.</p>

                    <p>Consistent Progress</p>
                    <p>Even if dental visits are missed, Invisalign continues to adjust teeth according to doctor's
                        instructions.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let valuee = window.location.href.split("/");
    console.log(valuee[4].replace(".php", ""));
</script>



<?php include 'Includes/footer.php' ?>