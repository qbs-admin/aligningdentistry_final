<?php include 'Includes/header.php' ?>
<?php include 'Includes/section_heading.php' ?>
<?php include 'Includes/cosmetic_side_tab.php' ?>

<?php print_heading("Cosmetic Jaw Surgeries", "Cosmetic Treatment", "cosmeticTreatments.php"); ?>

<div class="mx-2 mx-md-5 px-0 px-md-5">
    <div class="row pt-2 pt-md-5">
        <?php side_bar_active(6) ?>
        <div class="col-lg-8 mx-3 mx-md-0">
            <div id="Cosmetic_Jaw_Surgeries" class="services_contents">
                <div class="mb-5">
                    <h2 class="heading mb-1 h1">Cosmetic Jaw Surgeries</h2>
                    <p class="content border-top pt-3">Primarily addressing functional issues like disproportionate jaw
                        growth and bite disharmony, corrective jaw surgery is typically performed by oral and
                        maxillofacial surgeons. In some cases, plastic or cosmetic surgeons may assist in these
                        procedures, aiming to restore proper jaw function and alignment.</p>
                    <p class="subline mt-3 mb-1">WHEN IS COSMETIC SURGERY NEEDED?</p>
                    <ul>
                        <li>Difficulty in chewing food</li>
                        <li>Protruding or recessed jaw (upper/lower)</li>
                        <li>Snoring and sleep apnea</li>
                        <li>Open bite (space between upper and lower teeth when clenched)</li>
                        <li>Jaw or joint pain with associated headaches</li>
                        <li>Disproportionate facial appearance from front or side views</li>
                        <li>Facial injury</li>
                        <li>Birth defects</li>
                        <li>Speech defects related to skeletal or soft tissue issues</li>
                        <li>Jaw deviation</li>
                    </ul>
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