<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tergo</title>
    <link rel="stylesheet" href="../css/banner.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/warehouse.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
</head>

<body>

    <?php
    include("nav.php");

    ?>

    <div class="warehouse-hero">

        <div class="warehouse-illustration">
            <div class="warehouse-overlay"></div>
            <!-- <img src="../img/warehouse-img.jpg" alt=""> -->

            <div class="hero-section-text">
                <p class="warehouse-hero-text">We're offering a warehouse </p>
                <p class="solution">solution</p>
                <p class="warehouse-hero-text"> for any of your demandings!</p>
            </div>
        </div>
    </div>

    <div class="content">
        <!-- HEADING -->
         <div class="warehouse-heading">
            <h2>SERVICES WE ARE PROUD OF</h2>
        </div>
        <!-- CARDS -->
        <div class="warehouse-wrapper">
            <div class="warehouse-service-wrapper">
                <div class="card-icon">
                    <i class="fa-regular fa-circle-check"></i>
                </div>
                <h3>WAREHOUSING SERVICES</h3>
                <p>At our company, we understand that efficient warehousing is the backbone of successful logistics operations. With our state-of-the-art warehouse facilities, equipped with advanced surveillance cameras and forklifts, and our expert team, we offer comprehensive warehousing solutions tailored to meet your unique business needs.</p>
            </div>
            <div class="warehouse-service-wrapper">
                <div class="card-icon">
                    <i class="fa-regular fa-circle-check"></i>
                </div>
                <H3>CUSTOMIZED SOLUTIONS</H3>
                <p>We understand that every business has unique warehousing requirements. That's why we offer customizable warehousing solutions that can be tailored to suit your specific industry and product demands. Whether you need specialized storage conditions, pick and pack services, or cross-docking capabilities, we can design a solution that fits seamlessly into your supply chain.</p>
            </div>
            <div class="warehouse-service-wrapper">
                <div class="card-icon">
                    <i class="fa-regular fa-circle-check"></i>
                </div>
                <h3>EFFICIENT DISTRIBUTION</h3>
                <p>Our warehousing services are closely integrated with our transportation and distribution network. This synergy allows for efficient order fulfillment and on-time deliveries, helping you meet your customers' demands promptly and reliably.</p>
            </div>

        </div>

    </div>
    <?php
    include("form.php");
     include("map.php");
    include("footer.html");
    ?>
    
</body>