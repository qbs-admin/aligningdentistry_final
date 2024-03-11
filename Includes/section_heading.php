
<?php
function print_heading($page_title, $page_category,$link){ ?>
<div class="section-heading">
    <img src="images/logo_part.png" class="section_bg" alt="">
    <div class="section-padding-left">
        <h1 class="h1"><?php echo $page_title; ?></h1>
        <p class="h6"><a href="index.php" class="go_back_link">Home </a> <a href="<?php echo $link; ?>" class="go_back_link2"><?php echo $page_category; ?></a> <?php echo $page_title; ?>
        </p>
    </div>
</div>

<?php } ?>