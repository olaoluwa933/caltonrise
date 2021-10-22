<?php include('parts/header.php'); ?>

<script>
    var page = document.getElementById("<?php echo $name; ?>");
    page.classList.add("active");
</script>

<div class="hero section">
    <div style="text-align:center" class="main-text">
        <h1>
            Check Out Who We Work With
        </h1>
    </div>
    <div class="arrow-down">
        <a href="#content"><ion-icon name="arrow-down-outline"></ion-icon></a>
    </div>
</div>

<div id="content" class="partners-content section">
    <div class="partners">
        <div class="partner">
            <div class="partner-image">
                <img src="assets/images/partners/sdtpsjs.png" alt="Shandong Taipus Metal Products Co Limited">
            </div>
            <div class="partner-info">
                <h2 class="name">Shandong Taipus Metal Products Co Limited</h2>
                <p class="address">2222, Zingmei Shandong Province, China</p>
                <a href="en.sdtpsjs.cn" target="_blank" class="website">en.sdtpsjs.cn</a>
                <a href="mailto:miller@sdtpsjs.cn" class="email">miller@sdtpsjs.cn</a>
            </div>
        </div>

        <div class="partner">
            <div class="partner-image">
                <img src="assets/images/partners/redline-logoo.png" alt="Redline Logistics Nigeria Limited">
            </div>
            <div class="partner-info">
                <h2 class="name">Redline Logistics Nigeria Limited</h2>
                <p class="address">52, Cole Street, Off Ogunlana Drive, Surulere, Lagos, Nigeria</p>
                <a href="redinlogs.com" target="_blank" class="website">redlinlogs.com</a>
                <a href="mailto:info@redlinelogs.com" class="email">info@redlinelogs.com</a>
            </div>
        </div>

        <div class="partner">
            <div class="partner-image">
                <!-- <img src="assets/images/partners/redline-logoo.png" alt="Redline Logistics Nigeria Limited"> -->
            </div>
            <div class="partner-info">
                <h2 class="name">Pilot Projects Limited - Architects & Project Managers</h2>
                <p class="address">12, Pat Amadi Crescent, Ikenegbu, Owerri, Imo State.</p>
            </div>
        </div>
    </div>
</div>

<div style="text-align: center; padding-top: 0" class="contact-btn section">
    <a href="contact.php" class="button">CONTACT US</a>
</div>

<?php 
// include('parts/contact.php'); 

include('parts/footer.php'); ?>