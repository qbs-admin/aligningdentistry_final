<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/fav_icon.png" type="image/x-icon">
    <title>Aligning Dentistry</title>
</head>

<aside class="side_bar">
    <div class="d-flex justify-content-between align-items-center pl-5">
        <button type="button" class="btn side_bar_toggler z-index-10"><i class="fa-side-bar-close"><span
                    class="d-none">hamburger_btn</span></i></button>
        <p class="sidebar_heading">Links</p>
    </div>
    <ul class="side_links overflow-auto">
        <li class="d-block"><a href="index.php">Home</a></li>
        <li class="d-block"><a href="about.php">About Us</a></li>
        <li class="d-block" data-target_elemenr="drop_open_dental">
            <a href="#" class="open_side_drop" data-target_element="drop_open_cosmetics">Cosmetics Treatment</a>
            <div class="drop-down drop_open_cosmetics">
                <ul>
                    <li><a href="invisalign.php" data-content_select="Invisalign">Invisalign</a></li>
                    <li><a href="braces.php" data-content_select="Braces">Braces</a></li>
                    <li><a href="smile-makeover.php" data-content_select="Smile_Makeover">Smile Makeover</a></li>
                    <li><a href="teeth-whitening.php" data-content_select="Teeth_Whitening">Teeth Whitening</a></li>
                    <li><a href="dentures.php" data-content_select="Dentures">Dentures</a></li>
                    <li><a href="gum-surgeries.php" data-content_select="Gum_Surgeries">Gum Surgeries</a></li>
                    <li><a href="cosmetic-jaw-surgeries.php" data-content_select="Cosmetic_Jaw_Surgeries">Cosmetic Jaw Surgeries</a></li>
                </ul>
            </div>
        </li>
        <li class="d-block" data-target_elemenr="drop_open_dental">
            <a href="#" class="open_side_drop" data-target_element="drop_open_dental">Dental Treatment</a>
            <div class="drop-down drop_open_dental">
                <ul>
                    <li><a href="root-canal.php" data-content_select="Invisalign">Root canal</a></li>
                    <li><a href="implants.php" data-content_select="Invisalign">Implants</a></li>
                    <li><a href="crown_bridges.php" data-content_select="Invisalign">Crown &amp; Bridges</a></li>
                    <li><a href="teeth-extraction.php" data-content_select="Invisalign">Teeth Extractions</a></li>
                    <li><a href="snoring-appliances.php" data-content_select="Invisalign">Snoring Appliances</a></li>
                    <li><a href="laser-dentistry.php" data-content_select="Invisalign">Laser Dentistry</a></li>
                    <li><a href="kids-dentistry.php" data-content_select="Invisalign">Kids Dentistry</a></li>
                    <li><a href="full-mouth-rehabilitation.php" data-content_select="Invisalign">Full Mouth Rehabilitation</a></li>
                </ul>
            </div>
        </li>
        <li class="d-block"><a href="contact.php">Contact Us</a></li>
        <li class="d-none"><a href="#">Appointment</a></li>
    </ul>
</aside>
<nav class="main_nav d-flex justify-content-between align-items-center px-3">
    <a href="index.php" class="logo z-index-1">
        <img src="images/logo.png" class="object-contain" alt="">
</a>
    <ul class="d-none justify-content-md-around align-items-center w-lg-50 w-md-75 d-lg-flex z-index-1 ml-auto pr-3">
        <li class="nav_links"><a href="index.php">Home</a></li>
        <li class="nav_links"><a href="about.php">About Us</a></li>
        <li class="nav_links">
            <a href="cosmeticTreatments.php">Cosmetic Treatment</a>
            <div class="drop-down">
                <ul>
                    <li><a href="invisalign.php" data-content_select="Invisalign">Invisalign</a></li>
                    <li><a href="braces.php" data-content_select="Braces">Braces</a></li>
                    <li><a href="smile-makeover.php" data-content_select="Smile_Makeover">Smile Makeover</a></li>
                    <li><a href="teeth-whitening.php" data-content_select="Teeth_Whitening">Teeth Whitening</a></li>
                    <li><a href="dentures.php" data-content_select="Dentures">Dentures</a></li>
                    <li><a href="gum-surgeries.php" data-content_select="Gum_Surgeries">Gum Surgeries</a></li>
                    <li><a href="cosmetic-jaw-surgeries.php" data-content_select="Cosmetic_Jaw_Surgeries">Cosmetic Jaw Surgeries</a></li>
                </ul>
            </div>
        </li>
        <li class="nav_links">
            <a href="dentalTreatments.php">Dental Treatment</a>
            <div class="drop-down">
                <ul>
                    <li><a href="root-canal.php" data-content_select="Invisalign">Root canal</a></li>
                    <li><a href="implants.php" data-content_select="Invisalign">Implants</a></li>
                    <li><a href="crown_bridges.php" data-content_select="Invisalign">Crown &amp; Bridges</a></li>
                    <li><a href="teeth-extraction.php" data-content_select="Invisalign">Teeth Extractions</a></li>
                    <li><a href="snoring-appliances.php" data-content_select="Invisalign">Snoring Appliances</a></li>
                    <li><a href="laser-dentistry.php" data-content_select="Invisalign">Laser Dentistry</a></li>
                    <li><a href="kids-dentistry.php" data-content_select="Invisalign">Kids Dentistry</a></li>
                    <li><a href="full-mouth-rehabilitation.php" data-content_select="Invisalign">Full Mouth Rehabilitation</a></li>
                </ul>
            </div>
        </li>
        <li class="nav_links"><a href="contact.php">Contact</a></li>
    </ul>
    <button type="button"
        class="btn btn-primary d-none d-lg-block show_appointment z-index-999">Appointment</button>
    <button type="button" class="btn d-block d-lg-none side_bar_toggler z-index-10"><i
            class="fa-side-bar-icon"><span class="d-none">hamburger_btn</span></i></button>
</nav>

<body>
    <main>
        <div class="notification_bar">
            <span class="rounded-lg bg-white text-center p-3 mb-5 para shadow-lg">Appointment Sent !</span>
        </div>
        <div class="appointment_container">
            <div class="new_form bg-white rounded-lg dont-close">
                <div class="p-4 dont-close">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <p class="medium-heading dont-close">Send Appointment</p>
                        <p class="medium-heading hover-pointer"><i class="close_btn_border fa-solid fa-x"></i></p>
                    </div>
                    <input type="text" class="form-control" name="Name" placeholder="Your Name">
                    <input type="email" class="form-control my-4" name="Email" placeholder="Your Email ID">
                    <input type="number" class="form-control" name="phone" placeholder="Your Mobile Number">
                    <textarea name="message" class="form-control my-4" cols="30"
                        placeholder="Your Message Here"></textarea>
                    <button type="button" class="btn btn-primary form_submit">Submit</button>
                </div>
            </div>
        </div>