<?php include('parts/header.php'); ?>

<script>
    var page = document.getElementById("<?php echo $name; ?>");
    page.classList.add("active");
</script>

<div class="hero section">
    <div style="text-align:center" class="main-text">
        <h1>
            We Would Like to Hear From You
        </h1>
    </div>
    <div class="arrow-down">
        <a href="#contact"><ion-icon name="arrow-down-outline"></ion-icon></a>
    </div>
</div>




<?php include('parts/contact.php'); 

include('parts/footer.php'); ?>