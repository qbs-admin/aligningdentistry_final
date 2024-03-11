<?php include 'Includes/header.php' ?>
<?php include 'Includes/section_heading.php' ?>
<?php include 'Includes/cosmetic_side_tab.php' ?>

<?php print_heading("Teeth Whitening", "Cosmetic Treatment", "cosmeticTreatments.php"); ?>

<div class="mx-2 mx-md-5 px-0 px-md-5">
    <div class="row pt-2 pt-md-5">
        <?php side_bar_active(3) ?>
        <div class="col-lg-8 mx-3 mx-md-0">
            <div id="Teeth_Whitening" class="services_contents">
                <div class="mb-5">
                    <h2 class="heading mb-1 h1">Teeth Whitening</h2>
                    <p class="subline mb-1">There are so many ways for brightening your teeth, but where do you start?
                    </p>
                    <p class="content border-top pt-3">As teeth darken over time and accumulate surface stains, many
                        seek to brighten their smile. We offer various whitening options, including toothpaste, at-home
                        kits, and in-office treatments. Our team considers your oral health and advises on the most
                        suitable whitening method for you.</p>
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