<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tergo</title>
    <link rel="stylesheet" href="../css/banner.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/warehouse.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
</head>

<body>

    <?php
    include("nav.php");

    ?>

    <div class="warehouse-illustration">
        <svg height="500" width="800">
            <image xlink:href="../img/warehouse-img.jpg" x="0" y="0" width="800" height="500" />
            <defs>
                <clipPath id="svgPath">
                    <path fill="url(../img/warehouse-img.jpg)" stroke="#000000" stroke-width="1.5794" stroke-miterlimit="10" d="M215,100.3c97.8-32.6,90.5-71.9,336-77.6
        c92.4-2.1,98.1,81.6,121.8,116.4c101.7,149.9,53.5,155.9,14.7,178c-96.4,54.9,5.4,269-257,115.1c-57-33.5-203,46.3-263.7,20.1
        c-33.5-14.5-132.5-45.5-95-111.1C125.9,246.6,98.6,139.1,215,100.3z" />
                </clipPath>
            </defs>
        </svg>
    </div>
    <div class="content">
        <div class="warehouse-wrapper">

            <div class="warehouse-service-wrapper">
                <div class="card-img">
                    <img src="../img/warehouse.png" alt="">
                </div>
                <h3>WAREHOUSING SERVICES</h3>
                <p>At our company, we understand that efficient warehousing is the backbone of successful logistics operations. With our state-of-the-art warehouse facilities, equipped with advanced surveillance cameras and forklifts, and our expert team, we offer comprehensive warehousing solutions tailored to meet your unique business needs.</p>
            </div>
            <div class="warehouse-service-wrapper">
                <div class="card-img"></div>
                <H3>CUSTOMIZED SOLUTIONS</H3>
                <p>We understand that every business has unique warehousing requirements. That's why we offer customizable warehousing solutions that can be tailored to suit your specific industry and product demands. Whether you need specialized storage conditions, pick and pack services, or cross-docking capabilities, we can design a solution that fits seamlessly into your supply chain.</p>
            </div>
            <div class="warehouse-service-wrapper">
                <div class="card-img"></div>
                <h3>EFFICIENT DISTRIBUTION</h3>
                <p>Our warehousing services are closely integrated with our transportation and distribution network. This synergy allows for efficient order fulfillment and on-time deliveries, helping you meet your customers' demands promptly and reliably.</p>
            </div>

        </div>
    </div>
    <?php
    include("form.php");
    include("map.php");
    ?>

</body>