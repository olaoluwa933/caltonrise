<?php include('parts/header.php'); ?>

<script>
    var page = document.getElementById("<?php echo $name; ?>");
    page.classList.add("active");
</script>

<div class="hero section">
    <div class="main-text">
        <h1>
            Delivering Quality Needs At The Right Time.
        </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat volutpat, placerat euismod augue libero eget vitae sagittis urna. </p>
    </div>
    <div class="arrow-down">
        <a href="#content"><ion-icon name="arrow-down-outline"></ion-icon></a>
    </div>
</div>

<div class="about-content section">
    <div id="content" class="picture-container">
        <div class="text-container">
            <div class="section-heading">
                <h2>OUR STORY</h2>
            </div>
            <div class="content">
                <!-- <p>
                Calton-Rise Strategy Associates was incorporated in the year 2014 for the provision of services to the Nigerian Oil and Gas Industry. 
                </p>
                <p>
                The services offered by Calton-Rise can be tailored to suit a client’s specific need. The unique services offered by Calton-Rise include Global & Specialist Materials Procurement Facilities Maintenance services, Outsourcing services and Equipment leasing.
                </p>
                <p>
                Calton-Rise organisational structure, functional responsibilities, levels of authority and lines of internal and external communication for management, direction and execution of all activities affecting job quality are clearly established and documented and this ensures that responsibilities do not overlap.
                </p> -->

                <p>
                    Calton-Rise was incorporated in 2014 for provision of Oilfield Services in the Nigerian Oil 
                    and Gas industry. The unique services offered by Calton-Rise include Global & Specialist 
                    Materials Procurement Facilities Maintenance services, Outsourcing services and Equipment leasing. <br>
                    <br>
                    Calton-Rise organisational structure, functional responsibilities, levels of authority and 
                    lines of internal and external communication for management, direction and execution of all 
                    activities affecting job quality are clearly established and documented and this ensures that 
                    responsibilities do not overlap. <br>
                    <br>
                    Calton-Rise executive technical team members have more than 20 years working experience 
                    with multinational Construction Company & IOCs in the Nigerian oil and gas industry. 
                    Their combined work experience includes working in Nigeria, Cameroon, Gabon, UK and 
                    Netherlands managing various projects / services which include project management, 
                    production facilities maintenance, procurement and materials management and supply chain management. <br>
                    <br>
                    Project Management expertise/experience acquired in the following services: Procurement of 
                    offshore and onshore equipment and materials, Brownfield Engineering and Maintenance Services, 
                    HVAC Maintenance Services for FPSO & Inspection of Lifting Equipment & Accessories services.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="stats-content section">
    <div  id="counters_1" class="stats">
                <div class="stat border-right">
                    <h3 class="count"><span class="counter" data-TargetNum="20">20</span><span>+</span></h3>
                    <p>EMPLOYEES</p>
                </div>
                
                <div class="stat border-right">
                    <h3 class="count"><span class="counter" data-TargetNum="8">8</span><span>+</span></h3>
                    <p>YEARS OF EXPERIENCE</p>
                </div>
                
                <div class="stat">
                    <h3 class="count"><span class="counter" data-TargetNum="30">30</span><span>+</span></h3>
                    <p>CLIENTS</p>
                </div>
                
                <div class="stat border-left">
                    <h3 class="count"><span class="counter" data-TargetNum="120">120</span><span>+</span></h3>
                    <p>PROJECTS</p>
                </div>
            </div>
</div>


<div class="about-content other section">
    <div class="picture-container">
        <div class="text-container">
            <div class="section-heading">
                <h2>OUR VISION</h2>
            </div>
            <div class="content">
                <p>
                CALTON-RISE STRATEGY ASSOCIATES LIMITED, delivering outsourcing services that create value for the end user.
                </p>
            </div>
            <br><br><br><br>
            <div class="section-heading">
                <h2>OUR MISSION</h2>
            </div>
            <div class="content">
                <p>
                To be the most profitable, customer focused and value adding procurement &amp; outsourcing firm in the world.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- <div class="team-container section">
    <div class="section-heading">
        <h3>The Calton Team</h3>
    </div>
    <div class="team-members">
        <div class="member">
            <div class="team-image">
                <img src="assets/images/team/team-img.png" alt="Engr. Christain Nwabuikwu">
            </div>
            <div class="team-name">
                <p class="name">Engr. Christain Nwabuikwu</p>
                <p class="post">CEO</p>
            </div>
        </div>

        <div class="member">
            <div class="team-image">
                <img src="assets/images/team/team-img.png" alt="Chuka-Samuel Nwabuikwu">
            </div>
            <div class="team-name">
                <p class="name">Chuka-Samuel Nwabuikwu</p>
                <p class="post">Executive Director, BD</p>
            </div>
        </div>

        <div class="member">
            <div class="team-image">
                <img src="assets/images/team/team-img.png" alt="Samuel Nwafor">
            </div>
            <div class="team-name">
                <p class="name">Samuel Nwafor</p>
                <p class="post">Senior Project Supervisor</p>
            </div>
        </div>
    </div>
</div> -->

<div style="text-align: center; padding-top: 0" class="contact-btn section">
    <a href="contact.php" class="button">CONTACT US</a>
</div>



<?php 
// include('parts/contact.php'); 

include('parts/footer.php'); ?>