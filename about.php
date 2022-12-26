<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" width="device-width" initial-scale="1.0">
    <title>Taj Hotel | About</title>
    <?php require('inc/links.php') ?>
    <style>
        input[type=number] {
            -moz-appearance: textfield;
        }

        .box {
            border-top-color: var(--tale) !important;

        }
    </style>
</head>

<body class="bg-light">
    <!-- Header -->
    <?php require('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3 mb-5">
            Taj Hotel was established in November 2022 and now it’s the best hotel in Ranchi which is fully renovated
            with modern style. With an ideal location in main road Ranchi which is only 1.8 kilometers drive from Birsa
            Munda Airport, the Taj Hotel ranks among the best hotels in Ranchi near airport. We provide exceptional food
            & beverage facilities, intimate, understated surroundings, and 24 hours personalized services. We offer a
            very relaxed atmosphere, well-equipped bedrooms, safety, security & luxurious facilities to make your stay
            truly memorable.
        </p>

        <div class="container">
            <div class="row d-flex justify-content-evenly align-items-center">
                <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2 ">
                    <h3 class="mb-3">OUR FOUNDER TAJ ANSARI</h3>
                    <p>
                        Taj Ansari is an computer programmer & entrepreneur. He is a
                        co-founder of TAJ HOTEL, a famous hotel.<br><br>

                        About his physical appearance, Taj’s body is 170 centimeters tall with 76 kg weight. His hair
                        color is Black his eyes are brown. Taj Ansari was born on 15th March 2003 in Jharkhand,
                        INDIA. Therefore, he is 19 years old by 2022.
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-1 order-1 ">
                    <img src="images/about/CEO_PIC.jpg" alt="Founder and ceo of TAJ HOTEL" width="100%"
                        class="p-2 rounded bg-white">
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class=" bg-white rounded shadow p-4 border-top border-4 border-dark text-center box">
                        <img src="images/about/hotel.svg" width="70px" alt="">
                        <h4 class="mt-4">100+ ROOMS</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class=" bg-white rounded shadow p-4 border-top border-4 border-dark text-center box">
                        <img src="images/about/customers.svg" width="70px" alt="">
                        <h4 class="mt-4">800+ CUSTOMERS</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class=" bg-white rounded shadow p-4 border-top border-4 border-dark text-center box">
                        <img src="images/about/rating.svg" width="70px" alt="">
                        <h4 class="mt-4">500+ REVIEWS</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class=" bg-white rounded shadow p-4 border-top border-4 border-dark text-center box">
                        <img src="images/about/staff.svg" width="70px" alt="">
                        <h4 class="mt-4">200+ STAFFS</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require('inc/footer.php') ?>
</body>

</html>