<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" width="device-width" initial-scale="1.0">
    <title>Taj Hotel | The Luxurious Hotel of Ranchi</title>
    <?php require('inc/links.php')?>
    <style>
        input[type=number] {
            -moz-appearance: textfield;
        }

        .availibility-form {
            margin-top: -50px;
            position: relative;
            z-index: 2;
            border-radius: 10px
        }
    </style>
</head>

<body class="bg-light">
    <?php require('inc/header.php') ?>
    <!-- carousel -->
    <div class="container-fluid">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-interval="4000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/carousel/IMG_15372.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/carousel/IMG_40905.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/carousel/IMG_55677.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/carousel/IMG_62045.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/carousel/IMG_93127.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/carousel/IMG_99736.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
            </button>
        </div>
    </div>

    <!-- Check Booking Availability -->

    <div class="container availibility-form ">
        <div class="row bg-white rounded">
            <div class="col-lg-12 shadow p-4">
                <h5 class="mb-4">Check Booking Availability</h5>

                <form>
                    <div class="row align-items-end ">
                        <div class="col-lg-3">
                            <label class="form-label">Check-in</label>
                            <input type="date" class="form-control shadow-none mb-3">
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label">Check-out</label>
                            <input type="date" class="form-control shadow-none mb-3">
                        </div>
                        <div class="col-lg-3">
                            <label for="" class="form-label">Adult</label>
                            <select value="" class="form-select shadow-none mb-3" aria-label="Default select example">
                                <option value="none">SELECT</option>
                                <option name="0" id="">0</option>
                                <option name="1" id="">1</option>
                                <option name="2" id="">2</option>
                                <option name="3" id="">3</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label for="" class="form-label">Children</label>
                            <select value="" class="form-select shadow-none mb-3" aria-label="Default select example">
                                <option value="none">SELECT</option>
                                <option name="0" id="">0</option>
                                <option name="1" id="">1</option>
                                <option name="2" id="">2</option>
                                <option name="3" id="">3</option>
                            </select>
                        </div>
                        <div class="col-lg-1">
                            <button type="submit" class="btn shadow-none text-light custom-bg mb-3">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- OUR ROOMS -->
    <h2 class="mt-5 mb-4 fw-bold text-center h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow border-none" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="fw-bold">Deluxe Double Room</h4>
                        <h6 class="">₹600 Per night</h6>

                        <div class="features mt-4">
                            <h6 class="">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark">2 Balcony</span>
                        </div>
                        <div class="facilities mt-3">
                            <h6 class="">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark">Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark">Television</span>
                            <span class="badge rounded-pill bg-light text-dark">AC</span>
                            <span class="badge rounded-pill bg-light text-dark">Room heater</span>
                        </div>
                        <div class="ratings mt-3">
                            <h6>Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn custom-bg shadow-none text-light mt-3">Book Now</a>
                            <a href="#" class="btn btn-outline-dark mt-3">More Details</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6  mb-4">
                <div class="card shadow border-none" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/IMG_11892.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="fw-bold">Royal Suite</h4>
                        <h6 class="">₹400 Per night</h6>

                        <div class="features mt-4">
                            <h6 class="">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark">2 Balcony</span>
                        </div>
                        <div class="facilities mt-3">
                            <h6 class="">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark">Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark">Television</span>
                            <span class="badge rounded-pill bg-light text-dark">AC</span>
                            <span class="badge rounded-pill bg-light text-dark">Room heater</span>
                        </div>
                        <div class="ratings mt-3">
                            <h6>Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn custom-bg shadow-none text-light mt-3">Book Now</a>
                            <a href="#" class="btn btn-outline-dark mt-3">More Details</a>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->

            <div class="col-lg-4 col-md-6  mb-4">
                <div class="card shadow border-none" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/IMG_39782.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="fw-bold">Standard Double Room</h4>
                        <h6 class="">₹300 Per night</h6>

                        <div class="features mt-4">
                            <h6 class="">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark">2 Balcony</span>
                        </div>
                        <div class="facilities mt-3">
                            <h6 class="">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark">Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark">Television</span>
                            <span class="badge rounded-pill bg-light text-dark">AC</span>
                            <span class="badge rounded-pill bg-light text-dark">Room heater</span>
                        </div>
                        <div class="ratings mt-3">
                            <h6>Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn custom-bg shadow-none text-light mt-3">Book Now</a>
                            <a href="#" class="btn btn-outline-dark mt-3">More Details</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=" text-center mt-4 mb-2">
        <a href="" class="btn shadow-none btn-outline-dark ">More Rooms>>></a>

    </div>

    <!-- OUR ROOMS -->
    <h2 class="mt-5 mb-4 fw-bold text-center h-font">OUR FACILITIES</h2>
    <div class="container">
        <div class="row d-flex justify-content-evenly">
            <div class="col-lg-2 col-md-2 bg-white rounded shadow text-center py-4 my-3">
                <img src="./images/facilities/IMG_27079.svg" alt="" width="70px">
                <h4 class="mt-2">Heater</h4>
            </div>
            <div class=" col-lg-2 col-md-2 bg-white rounded shadow text-center py-4 my-3">
                <img src="./images/facilities/IMG_41622.svg" alt="" width="70px">
                <h4 class="mt-2">Television</h4>
            </div>
            <div class="col-lg-2 col-md-2 bg-white rounded shadow text-center py-4 my-3">
                <img src="./images/facilities/IMG_43553.svg" alt="" width="70px">
                <h4 class="mt-2">Wifi</h4>
            </div>
            <div class="col-lg-2 col-md-2 bg-white rounded shadow text-center py-4 my-3">
                <img src="./images/facilities/IMG_47816.svg" alt="" width="70px">
                <h4 class="mt-2">Spa</h4>
            </div>
            <div class="col-lg-2 col-md-2 bg-white rounded shadow text-center py-4 my-3">
                <img src="./images/facilities/IMG_49949.svg" alt="" width="70px">
                <h4 class="mt-2">AC</h4>
            </div>
            <div class="col-12 text-center mt-4 mb-2">
                <a href="#" class="btn btn-outline-dark  ">More Facilities>>></a>
            </div>

        </div>
    </div>

    <!-- REACH US -->
    <h2 class="mt-5 mb-5 fw-bold text-center h-font">REACH US</h2>
    <div class="container">
        <div class="row d-flex justify-content-evenly align-items-center text-center">
            <div class="col-md-8 bg-white rounded p-3 shadow">
                <iframe height="450px" class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.9124813330263!2d85.32375051448642!3d23.355185084785756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e1a6703e0cf1%3A0xe90470de80c22839!2sGossner%20College%20Ranchi!5e0!3m2!1sen!2sin!4v1671558721742!5m2!1sen!2sin"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-3 p-3 ">
                <div class=" bg-white rounded p-3 shadow">
                    <h4>Call us</h4>
                    <a href="tel:+917070634920" class="text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i>&nbsp+91 7070634920</a><br>
                    <a href="tel:+916205325596" class="text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i>&nbsp+91 6205325596</a>
                </div>
                <div class=" bg-white rounded p-3 shadow mt-3">
                    <h4>Mail at</h4>
                    <a href="mailto: ansraritaj2017@gmail.com" class="text-decoration-none text-dark"><i
                            class="bi bi-envelope-at-fill"></i>&nbsp helpdesk@taj.com</a><br>
                    <a href="mailto: ansraritaj2017@gmail.com" class="text-decoration-none text-dark"><i
                            class="bi bi-envelope-at-fill"></i>&nbsp support@taj.com</a>
                </div>

                <div class=" bg-white rounded p-3 shadow mt-3">
                    <h4>Follow us</h4>
                    <span class="badge rounded-pill bg-light p-2 mb-2">
                        <a href="#" class="text-decoration-none text-dark"><i
                                class="bi bi-twitter"></i>&nbsp&nbspTwitter</a><br>
                    </span><br>
                    <span class="badge rounded-pill bg-light p-2 mb-2">
                        <a href="#" class="text-decoration-none text-dark"><i
                                class="bi bi-facebook"></i>&nbsp&nbspFacebook</a>
                    </span><br>
                    <span class="badge rounded-pill bg-light p-2 ">
                        <a href="#" class="text-decoration-none text-dark"><i
                                class="bi bi-instagram"></i>&nbsp&nbspInstagram</a>
                    </span><br>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require('inc/footer.php') ?>
</body>

</html>