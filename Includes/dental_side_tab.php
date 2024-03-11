<?php function side_bar_active($active_number){ ?>
<div class="col-lg-3 d-none d-md-block">
            <ul class="services_navbar">
                <a href="root-canal.php" <?php if($active_number == 0){echo "class='active'";} ?>>
                    <p>Root Canal</p><i class="fa-solid fa-chevron-right"></i>
                </a>
                <a href="implants.php" <?php if($active_number == 1){echo "class='active'";} ?>>
                    <p>Implants</p><i class="fa-solid fa-chevron-right"></i>
                </a>
                <a href="crown_bridges.php" <?php if($active_number == 2){echo "class='active'";} ?>>
                    <p>Crown & Bridges</p><i class="fa-solid fa-chevron-right"></i>
                </a>
                <a href="teeth-extraction.php" <?php if($active_number == 3){echo "class='active'";} ?>>
                    <p>Teeth Extraction</p><i class="fa-solid fa-chevron-right"></i>
                </a>
                <a href="snoring-appliances.php" <?php if($active_number == 4){echo "class='active'";} ?>>
                    <p>Snoring Appliances</p><i class="fa-solid fa-chevron-right"></i>
                </a>
                <a href="laser-dentistry.php" <?php if($active_number == 5){echo "class='active'";} ?>>
                    <p>Laser Dentistry</p><i class="fa-solid fa-chevron-right"></i>
                </a>
                <a href="kids-dentistry.php" <?php if($active_number == 6){echo "class='active'";} ?>>
                    <p>Kids Dentistry</p><i class="fa-solid fa-chevron-right"></i>
                </a>
                <a href="full-mouth-rehabilitation.php" <?php if($active_number == 7){echo "class='active'";} ?>>
                    <p>Full Mouth Rehabilitation</p><i class="fa-solid fa-chevron-right"></i>
                </a>
            </ul>
        </div>
<?php } ?>