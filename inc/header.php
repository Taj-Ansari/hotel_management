<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-4 fs-4 fw-5 h-font" href="index.php"><img src="./LOGO.png"  height="40px"alt=""></a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item me-2">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link " aria-current="page" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link " aria-current="page" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link " aria-current="page" href="about.php">About us</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link " aria-current="page" href="contact.php">Contact us</a>
                </li>
            </ul>
            <button type="button" class="btn btn-outline-dark shadow-none me-3" data-bs-toggle="modal"
                data-bs-target="#loginid">
                Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal"
                data-bs-target="#registerid">
                Register
            </button>
        </div>
    </div>
</nav>

<div class="modal fade" id="loginid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">
                    <i class="bi bi-person-fill fs-3 me-2"></i>
                    User Login
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label m-0">Email</label>
                        <input type="email" class="form-control shadow-none" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleInputPassword1" class="form-label m-0">Password</label>
                        <input type="password" class="form-control shadow-none" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <button type="submit" class="btn btn-outline-dark shadow-none me-3">Login</button>
                        <a href="javascript: void(0)" class="text-decoration-none text-secondary">Forget
                            Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registerid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel">
                    <i class="bi bi-person-lines-fill fs-3 me-3"></i>Registration Form
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">Fill All the Details
                    Carefully and It Must be Match With Your ID
                    Card(AADHAR CARD, PAN CARD, PASSPORT etc..)</span>
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="mb-2 col-md-6">
                            <label for="exampleInputEmail1" class="form-label m-0">Full Name</label>
                            <input type="text" class="form-control shadow-none" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2 col-md-6">
                            <label for="exampleInputPassword1" class="form-label m-0">Email</label>
                            <input type="email" class="form-control shadow-none" id="exampleInputPassword1">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="mb-2 col-md-6">
                            <label for="exampleInputEmail1" class="form-label m-0">Phone Number</label>
                            <input type="number" class="form-control shadow-none" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2 col-md-6">
                            <label for="exampleInputPassword1" class="form-label m-0">Password</label>
                            <input type="password" class="form-control shadow-none" id="exampleInputPassword1">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="mb-2 col-md-6">
                            <label for="exampleInputPassword1" class="form-label m-0">ID Card Type</label>
                            <select value="" class="form-select shadow-none" aria-label="Default select example">
                                <option value="none">SELECT</option>
                                <option name="aadharcard" id="">AADHAR CARD</option>
                                <option name="pancard" id="">PAN CARD</option>
                                <option name="passport" id="">PASSPORT</option>
                            </select>
                        </div>
                        <div class="mb-2 col-md-6">
                            <label for="exampleInputEmail1" class="form-label m-0">ID Card Number</label>
                            <input type="number" class="form-control shadow-none" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="exampleInputPassword1" class="form-label m-0">Upload Image</label>
                            <input type="file" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label m-0">Date Of Birth</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <div class="col-md-12">
                            <label for="exampleFormControlTextarea1" class="form-label m-0 ">Permanent
                                Adress</label>
                            <textarea class="form-control shadow-none" id="exampleFormControlTextarea1"
                                rows="1"></textarea>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-dark shadow-none">Register</button>
                </div>
            </div>
        </div>
    </div>
</div>