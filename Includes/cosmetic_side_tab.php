<?php function side_bar_active($active_number){ ?>
    
<div class="col-lg-3 d-none d-md-block">
    <div class="services_navbar">
        <a href="invisalign.php" <?php if($active_number == 0){echo "class='active'";} ?>>
            <p>Invisalign</p><i class="fa-solid fa-chevron-right"></i>
        </a>
        <a href="braces.php" <?php if($active_number == 1){echo "class='active'";} ?>>
            <p>Braces</p><i class="fa-solid fa-chevron-right"></i>
        </a>
        <a href="smile-makeover.php" <?php if($active_number == 2){echo "class='active'";} ?>>
            <p>Smile Makeover</p><i class="fa-solid fa-chevron-right"></i>
        </a>
        <a href="teeth-whitening.php" <?php if($active_number == 3){echo "class='active'";} ?>>
            <p>Teeth Whitening</p><i class="fa-solid fa-chevron-right"></i>
        </a>
        <a href="dentures.php" <?php if($active_number == 4){echo "class='active'";} ?>>
            <p>Dentures</p><i class="fa-solid fa-chevron-right"></i>
        </a>
        <a href="gum-surgeries.php" <?php if($active_number == 5){echo "class='active'";} ?>>
            <p>Gum Surgeries</p><i class="fa-solid fa-chevron-right"></i>
        </a>
        <a href="cosmetic-jaw-surgeries.php" <?php if($active_number == 6){echo "class='active'";} ?>>
            <p>Cosmetic Jaw Surgeries</p><i class="fa-solid fa-chevron-right"></i>
        </a>
    </div>
</div>

<?php } ?>