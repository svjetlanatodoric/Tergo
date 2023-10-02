<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tergo</title>
    <link rel="stylesheet" href="../css/banner.css">
    <link rel="stylesheet" href="../css/services.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
</head>

<body>

    <!-- NAVBAR SECTION -->

    <?php
    include("nav.php");
    ?>


    <!-- BANNER SECTION -->
    <div class="image-section">
        <img class="banner" src="../img/hero_section.jpg" alt="">

        <div class="overlay"></div>

        <div class="text-and-button">
            <p class="hero-text">Your Transportation <br>
            <p class="hero-text">&</p>
            <p class="hero-text">Logistics Partner</p>
            </p>
            <a href="#contact-anchor">
                <button class="contact-us" href="#contact-anchor">Contact us!</button>
            </a>
        </div>

    </div>

    <!-- SERVICES SECTION -->
    <div id="services" class="services">
        <div class="main-heading">
            <p class="services-heading" id="services-anchor">HOW CAN WE HELP YOU?</p>
        </div>
        <div class="color"></div>

        <div class="arrow-element">
            <p id="arrow-text">SERVICES WE ARE PROUD OF</p>
        </div>

        <!-- CIRCLES -->
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="row">
            <!-- WAREHOUSE ICON -->
            <div class="thumbnail-element">
                <div class="thumbnail-wrapper">
                    <a href="warehousing.php">
                        <div class="small-circle c1"></div>
                        <div class="icon-wrapper ">
                            <div class="icon">
                                <i class="fa-solid fa-warehouse fa-3x"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <a href="warehousing.php">
                    <h3>WAREHOUSING</h3>
                </a>
                <div class="thumbnail-text">
                    <p>Our warehouse has about 180 pallet places, ready for storing any of your goods.</p>
                </div>
            </div>
            <!-- ROAD TRANSPORT ICON -->
            <div class="thumbnail-element">
                <div class="thumbnail-wrapper road-transport">
                    <a href="road-transport.php">
                        <div class="small-circle c2"></div>
                        <div class="icon-wrapper">
                            <div class="icon">
                                <i class="fa-solid fa-truck-fast fa-3x"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <a href="road-transport.php">
                    <h3>ROAD TRANSPORT</h3>
                </a>
                <div class="thumbnail-text">
                    <p>We offer fast and reliable transport of your goods whether it's bulked freight or freight on
                        pallets.</p>
                </div>
            </div>
            <!-- DISTRIBUTION ICON -->
            <div class="thumbnail-element">
                <div class="thumbnail-wrapper distribution">
                    <div class="small-circle c3"></div>
                    <div class="icon-wrapper">
                        <div class="icon">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 122.88" enable-background="new 0 0 122.88 122.88" xml:space="preserve">
                                <g>
                                    <path id="distribution-icon" d="M5.794,62.906c2.755,2.456,5.508,4.778,8.266,6.964c3.64-5.528,7.606-10.597,11.917-15.178 c-0.814-1.533-1.274-3.284-1.274-5.139c0-0.916,0.111-1.805,0.324-2.658c-4.504-2.918-9.139-6.172-13.965-9.798 c-3.569,7.36-5.567,15.617-5.567,24.341h0.012l0,0v0.003H5.494c0,0.592,0.012,1.182,0.03,1.769L5.794,62.906L5.794,62.906z M13.726,32.231c4.831,3.644,9.454,6.91,13.938,9.831c2-2.134,4.846-3.467,7.999-3.467c2.501,0,4.805,0.839,6.65,2.25 c1.32-0.875,2.667-1.719,4.037-2.524c5.708-3.356,11.833-6.093,18.41-8.177c-0.048-0.436-0.07-0.878-0.07-1.322 c0-1.674,0.335-3.27,0.945-4.721c-6.681-5.661-14.593-10.674-23.7-15.103c-7.599,2.83-14.416,7.264-20.044,12.892 C18.783,24.995,16.039,28.467,13.726,32.231L13.726,32.231z M49.604,6.753c7.202,3.876,13.627,8.15,19.251,12.867 c1.88-1.648,4.27-2.732,6.9-2.982c0.59-2.889,1.147-5.826,1.676-8.819c-5.068-1.511-10.434-2.327-15.989-2.327v0.012l0,0h-0.005 V5.492C57.377,5.492,53.42,5.93,49.604,6.753L49.604,6.753z M82.68,9.679c-0.465,2.599-0.952,5.159-1.462,7.678 c3.667,1.376,6.499,4.46,7.526,8.284c4.964-0.365,10.127-0.436,15.504-0.2c-1.036-1.229-2.12-2.417-3.256-3.554 C95.794,16.692,89.583,12.516,82.68,9.679L82.68,9.679z M108.505,31.204c-6.871-0.515-13.387-0.528-19.562-0.063 c-0.506,2.642-1.864,4.982-3.773,6.724c1.624,2.503,3.096,5.097,4.411,7.785c1.916,3.921,3.494,8.039,4.739,12.354 c0.379-0.039,0.764-0.061,1.156-0.061c4.919,0,9.082,3.24,10.468,7.708c3.626,0.127,7.375,0.194,11.267,0.218 c0.115-1.463,0.177-2.938,0.177-4.427h-0.012v-0.003v-0.002h0.012C117.385,50.302,114.124,39.925,108.505,31.204L108.505,31.204z M116.508,71.345c-3.545-0.025-6.974-0.087-10.303-0.197c-0.889,4.27-4.266,7.631-8.547,8.497 c0.188,5.117,0.012,10.467-0.542,16.053c3.139-0.331,6.322-0.787,9.561-1.36C111.56,87.64,114.99,79.823,116.508,71.345 L116.508,71.345z M109.836,99.284l0.012,0.057l-0.066,0.012c-1.521,1.941-3.156,3.787-4.9,5.531 c-11.109,11.109-26.469,17.982-43.438,17.984v0.012h-0.002h-0.003v-0.012c-16.969,0-32.328-6.875-43.442-17.987 C6.887,93.77,0.013,78.41,0.011,61.441H0v-0.003l0,0h0.011c0-16.971,6.876-32.33,17.988-43.442S44.467,0.011,61.437,0.011V0h0.005 l0,0v0.011c16.971,0,32.33,6.874,43.441,17.988c11.112,11.109,17.985,26.468,17.985,43.438h0.012v0.002v0.003h-0.012 C122.868,75.721,118,88.857,109.836,99.284L109.836,99.284z M101.239,100.735c-1.608,0.214-3.202,0.399-4.785,0.552 c-0.197,1.415-0.419,2.844-0.66,4.29c1.826-1.422,3.563-2.952,5.198-4.587L101.239,100.735L101.239,100.735z M89.42,109.882 c0.56-2.785,1.036-5.511,1.429-8.18c-10.021,0.521-19.598-0.202-28.866-2.159c-1.812,2.149-4.521,3.52-7.551,3.52 c-0.225,0-0.447-0.009-0.665-0.022c-1.749,4.461-3.442,8.801-4.994,12.9c4.07,0.943,8.312,1.445,12.665,1.445v-0.012h0.003h0.002 v0.012C71.632,117.386,81.188,114.653,89.42,109.882L89.42,109.882z M43.483,114.436c1.699-4.516,3.395-8.876,5.118-13.278 c-2.17-1.589-3.667-4.045-3.982-6.859c-9.941-3.939-19.579-9.404-29.108-16.404c-1.528,2.574-2.991,5.242-4.393,8.005 c2.739,5.619,6.397,10.717,10.772,15.092C27.899,106.999,35.263,111.648,43.483,114.436L43.483,114.436z M8.406,79.288 c0.882-1.61,1.787-3.188,2.714-4.735c-1.63-1.283-3.259-2.612-4.885-3.984C6.728,73.56,7.458,76.477,8.406,79.288L8.406,79.288z M45.71,45.173c0.587,1.342,0.914,2.823,0.914,4.381c0,1.048-0.149,2.063-0.424,3.023c6.021,2.88,11.939,5.166,17.937,6.971 c2.18-6.527,4.275-13.305,6.226-20.396c-1.533-0.976-2.833-2.282-3.801-3.819c-6.245,1.964-12.046,4.547-17.439,7.717 C47.969,43.728,46.828,44.438,45.71,45.173L45.71,45.173z M43.39,57.325c-1.981,1.973-4.712,3.191-7.728,3.191 c-2.202,0-4.254-0.651-5.974-1.767c-4.07,4.359-7.816,9.191-11.266,14.463c8.935,6.604,17.935,11.79,27.171,15.565 c1.622-3.236,4.971-5.459,8.837-5.459c0.372,0,0.737,0.021,1.1,0.062c2.297-6.002,4.599-12.19,6.833-18.629 C56.01,62.831,49.751,60.396,43.39,57.325L43.39,57.325z M80.367,40.572c-1.091,0.317-2.245,0.487-3.44,0.487 c-0.462,0-0.92-0.023-1.369-0.075c-1.923,6.962-3.978,13.62-6.116,20.03c5.25,1.327,10.606,2.32,16.195,3.051 c0.813-1.649,2.027-3.062,3.518-4.114c-1.175-4.168-2.683-8.13-4.52-11.89C83.369,45.472,81.945,42.979,80.367,40.572 L80.367,40.572z M92.146,79.347c-4.257-1.355-7.386-5.24-7.617-9.889c-5.808-0.773-11.386-1.821-16.86-3.223 c-2.309,6.662-4.688,13.06-7.062,19.257c2.252,1.81,3.694,4.588,3.694,7.699c0,0.41-0.027,0.813-0.075,1.211 c8.756,1.741,17.821,2.329,27.323,1.757C92.175,90.272,92.37,84.671,92.146,79.347L92.146,79.347z" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3>DISTRIBUTION</h3>
                <div class="thumbnail-text">
                    <p>We'll provide you distribution of your goods across the Europe, all depending on your
                        requirements.</p>
                </div>
            </div>
            <!-- CONTAINER ICON -->
            <div class="thumbnail-element">
                <div class="thumbnail-wrapper container">
                    <div class="small-circle c4"></div>
                    <div class="icon-wrapper">
                        <div class="icon">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 118.61 122.88" style="enable-background:new 0 0 118.61 122.88" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                    }
                                </style>
                                <g>
                                    <path id="container-icon" class="st0" d="M46.54,47.49l59.73,10.85l-43.75-30.2c-1.09,0.64-2.35,1.06-3.64,1.18c-1.37,0.13-2.79-0.06-4.09-0.64 L10.39,53.67v63.89l-9.67-1.65c-0.36-0.06-0.66-0.3-0.66-0.66v-59.8c-0.25-1.14,0.27-2.36,1.35-2.95l49.47-27.87 c-0.68-1.57-1.02-3.56-0.86-6.03l4.54,0.28c-0.12,1.84,0.12,3.18,0.58,4.12c0.77,0.15,1.47,0.62,1.87,1.36 c0.06,0.12,0.12,0.24,0.16,0.36c0.36,0.09,0.74,0.12,1.11,0.1c-0.43-0.85-0.39-1.91,0.19-2.75c0.54-0.79,1.43-1.2,2.33-1.17 c-0.16-0.19-0.34-0.34-0.51-0.49c-1.19-1.05-2.34-2.07-2.64-5.43l-0.01-0.01l-0.03-0.3c-2.18-0.87-3.73-3.01-3.73-5.5 c0-2.45,1.49-4.56,3.62-5.46V0h4.55v3.7c2.15,0.89,3.67,3,3.67,5.48c0,2.43-1.46,4.52-3.56,5.43c0.15,1.54,0.63,1.97,1.13,2.41 c0.9,0.8,1.83,1.62,2.45,3.7c0.33,1.12,0.35,2.19,0.12,3.16l51.57,35.59c0.53,0.37,0.89,0.89,1.06,1.47 c0.08,0.13,0.12,0.28,0.12,0.44v47.13c0,0.53-0.45,0.87-0.97,0.97l-71.11,13c-0.52,0.1-0.97-0.44-0.97-0.97V48.46 C45.57,47.93,46.01,47.4,46.54,47.49L46.54,47.49z M14.15,51.73l11.03-1.84v70.19l-11.03-1.88V51.73L14.15,51.73z M28.94,49.26 l12.65-2.11c0.36-0.06,0.66,0.3,0.66,0.66v74.39c0,0.36-0.3,0.72-0.66,0.66l-12.65-2.15V49.51V49.26L28.94,49.26z M115.19,64.71 v40.57h-1.25V64.71H115.19L115.19,64.71z M55.66,56.63v57.94H51.9v-59.1L55.66,56.63L55.66,56.63z M65.93,57.59v55.45h-3.44v-55.9 L65.93,57.59L65.93,57.59z M75.13,59.08v52.42H72v-53L75.13,59.08L75.13,59.08z M83.33,60.36v50.01h-2.82V59.7L83.33,60.36 L83.33,60.36z M90.89,61.57v47.4h-2.5V61.05L90.89,61.57L90.89,61.57z M97.87,62.45v45.45h-2.19V61.95L97.87,62.45L97.87,62.45z M104.12,63.59v43.34h-1.88V63L104.12,63.59L104.12,63.59z M109.94,64.57v41.45h-1.57V63.85L109.94,64.57L109.94,64.57z" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3>CONTAINER HANDLING</h3>
                <div class="thumbnail-text">
                    <p>Let the acceptance of containers in the port and transport of containers to the port become our
                        job.</p>
                </div>
            </div>

        </div>
    </div>
    <div id="about-us" class="quote">
        <p id="quote-text">THE QUOTE</p>
    </div>

    <div class="color2">
        <div class="logistics-wrapper">
            <div class="logistics">
                <p>Whether you're a global corporation or a local business, our goal remains the same: to deliver
                    your products carefully and on time. We believe in building lasting relationships with our
                    clients, and your satisfaction is our top priority.</p>
                <br>
                <p>Explore our range of logistics services and discover how we can optimize your operations, save
                    you time and money, and help you reach new heights of success. Welcome to a world where
                    logistics meets innovation, and together, we'll pave the way for a brighter logistical future.
                </p>

            </div>

        </div>


        <div class="quote-row">

            <div class="quote-wrapper">
                <blockquote class="blockquote">
                    <p>The miracle is not that we do this work, but that we are happy to do it. </p>
                    <footer>– Mother Teresa</footer>

                </blockquote>
            </div>

            <div class="quote-wrapper">
                <blockquote class="blockquote">
                    <p>Pleasure in the job puts perfection in the work. </p>
                    <footer>– Aristotle</footer>

                </blockquote>
            </div>
        </div>
    </div>


    <!-- FORM SECTION -->

    <?php
    include("form.php");
    ?>

    <!-- MAP  -->
    <?php
    include("map.php");
    ?>
    <!-- FOOTER -->
    <?php
    include("footer.html");
    ?>
    <script src="../js/services.js"></script>


    </script>

</html>