<?php include 'Includes/header.php' ?>
<?php include 'Includes/section_heading.php' ?>
<?php include 'Includes/cosmetic_side_tab.php' ?>

<?php print_heading("Braces","Cosmetic Treatment","cosmeticTreatments.php"); ?>

<div class="mx-2 mx-md-5 px-0 px-md-5">
    <div class="row pt-2 pt-md-5">
        <?php side_bar_active(1) ?>
        <div class="col-lg-8 mx-3 mx-md-0">
        <div id="Braces" class="services_contents">
                <div class="mb-5">
                    <h2 class="heading mb-1 h1">Braces</h2>
                    <p class="subline mb-1">Braces Create Joyful Smiles</p>
                    <p class="content border-top pt-3">
                        Braces align teeth for a balanced smile and improved function, boosting confidence for those
                        hesitant in social settings or photos. They prevent health issues by combating bacteria buildup
                        and tooth misalignment, promoting long-term oral health and confidence.</p>
                </div>
                <div class="service_image">
                    <img src="https://picsum.photos/500/400" class="object-cover" alt="">
                </div>
                <p class="mt-4 subline">Benefits of Braces</p>
                <ul class="mt-3">
                    <li><strong>Alignment Improvement</strong> <br>
                        Braces are effective in aligning
                        teeth that are crooked, prominent, or spaced, promoting a more uniform and aesthetically
                        pleasing dental structure.</li>

                    <li><strong>Enhancement of Smile Aesthetics:</strong> <br>
                        They contribute to a more pleasing and
                        attractive smile, positively impacting one's overall facial appearance.</li>

                    <li><strong>Confidence Boost and Personality Improvement:</strong> <br>
                        Braces play a crucial role in restoring lost confidence and enhancing personality, especially
                        for
                        individuals who may have felt self-conscious about their dental alignment.</li>

                    <li><strong>Decay Prevention Through Improved Cleaning:</strong> <br> By facilitating easier removal
                        of
                        debris after achieving regular teeth alignment, braces help prevent the chances of decay. This
                        ensures better oral hygiene and overall dental health.</li>

                    <li><strong>Reduction of Strain on Soft Tissues:</strong> <br> Braces aid in reducing undue strain
                        on
                        soft tissues such as the lips and chin, particularly when dealing with more prominent teeth.
                        This contributes to a more comfortable and balanced oral environment.</li>
                </ul>
                <p class="mt-4">What Age Can I Have Braces?</p>
                <p>Braces treatment can typically commence once a patient's permanent teeth, up to the 1st permanent
                    molars, have erupted. There is no specified age for starting braces, as the eruption of permanent
                    teeth varies among children. Generally, the permanent teeth, including the 1st permanent molars,
                    erupt between eleven and a half to thirteen years of age.</p>
            </div>
        </div>
    </div>
</div>

<script>
    let valuee = window.location.href.split("/");
    console.log(valuee[4].replace(".php", ""));
</script>



<?php include '../Includes/footer.php' ?>