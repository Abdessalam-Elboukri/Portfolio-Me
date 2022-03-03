<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="dark">
    <main class="d-flex justify-content-center ">
        <div class="container-fluid col-md-11  mt90" style="width:90%;">
            <div class="row justify-content-center">
                <!-- profile card -->
                <?php include 'includes/profilecolumn.php'; ?>
                <!-- content -->
                <div class="col-lg-8 col-md-7">
                    <!-- navbar -->
                <?php include 'includes/navbar.php'; ?>
                    <div class="container-fluid content-mod">
                        <div class="row ">
                            <div class="pd-content div_rel">
                                <img src="./images/bg/6.png" class="img_info">
                                <div class="title">
                                    <h4>About Info</h4>
                                </div>
                                <div class="row mt-3">
                                    <div class=" col-lg-6 col-12">
                                        <div class="box">
                                            <i class="bi bi-person-check-fill"></i>
                                            <span>Full Name</span>
                                            <p>Abdessalam Elboukri</p>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class=" col-lg-6 col-12">
                                        <div class="box">
                                            <i class="bi bi-envelope-check"></i>
                                            <span>Email</span>
                                            <p style="word-wrap:wrap;">AbdessalamElboukri1@gmail.com</p>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class=" col-lg-6 col-12">
                                        <div class="box">
                                            <i class="bi bi-calendar2-date-fill"></i>
                                            <span>Age</span>
                                            <p>23 years and 22day</p>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class=" col-lg-6">
                                        <div class="box">
                                            <i class="bi bi-telephone"></i>
                                            <span>Phone Number</span>
                                            <p>+212 623872382</p>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class=" col-lg-6">
                                        <div class="box">
                                            <i class="bi bi-building"></i>
                                            <span>Address</span>
                                            <p>47 bloc 01 loi 01 zaitoun , Khouribga </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  -->
                            <div class="pd-content content-column">
                                <div class="title">
                                    <h4>Short bio</h4>
                                </div>
                                <div class="mt-3 short-bio">
                                    <div class="row small">
                                        <p class="col-lg-6">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
                                            consectetur incidunt quod repellendus ipsam aut eligendi corporis, vel
                                            aliquam mollitia laborum odio cupiditate molestiae quaerat, dolore natus
                                        </p>
                                        
                                        <p class="col-lg-6">
                                            omnis repellat iste illo dolore, eligendi provident commodi id placeat
                                            laborum totam incidunt laboriosam quaerat autem
                                            <img src="./images/home_01/signature.png" width="70%" >
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            
                            <div class="pd-content">
                                <div class="title">
                                    <h4>My Skills</h4>
                                </div>
                                <div class="row mt-3 short-bio skills">
                                    <div class="col-md-5 col-11 carde">
                                        <div class="i_div">
                                            <i class="bi bi-gear-fill"></i>
                                        </div>
                                        <h3>Web Developement</h3>
                                        <span>from scratch</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        </p>
                                    </div>
                                    <!--  -->
                                    <div class="col-md-5 col-11 carde ">
                                        <div class="i_div">
                                            <i class="bi bi-braces-asterisk"></i>
                                        </div>
                                        <h3>Front End</h3>
                                        <span>from scratch</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        </p>
                                    </div>
                                    <!--  -->
                                    <div class="col-md-5 col-11  carde ">
                                        <div class="i_div">
                                            <i class="bi bi-server"></i>
                                        </div>
                                        <h3>Back End</h3>
                                        <span>from scratch</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        </p>
                                    </div>
                                    <div class="col-md-5 col-11 carde ">
                                        <div class="i_div">
                                            <i class="bi bi-vector-pen"></i>
                                        </div>
                                        <h3>Ux Designer</h3>
                                        <span>from scratch</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!--  -->
                            <div class="container-fluid mt-3">
                                <div class="row">
                                    <div class="col-lg-5 mb-1">
                                        <div>
                                            <div class="title">
                                                <h4>I Love</h4>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <div class="interes_div mb-4 box d-flex align-items-center">
                                                    <i class="bi bi-boxes"></i>
                                                    <span class="text-white ">CyberSecurity</span>
                                                </div>
                                                <div class="interes_div mb-4 box d-flex align-items-center">
                                                    <i class="bi bi-controller"></i>
                                                    <span class="text-white">Vedio Games</span>
                                                </div>
                                                <div class="interes_div mb-4 box d-flex align-items-center">
                                                    <i class="bi bi-joystick"></i>
                                                    <span class="text-white ">Game Developement</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="col-lg-7">
                                        <div class="languageDiv">
                                            <div class="title">
                                                <h4>Langues</h4>
                                            </div>
                                            <div class="mt-3">
                                                <div class="ldInner profLevel9">
                                                    <h5 class=" ">Arabic</h5>
                                                    <span></span><span></span><span></span><span></span><span></span>
                                                    <span></span><span></span><span></span><span></span><span></span>
                                                    <i>9/10</i>
                                                </div>
                                                <div class="ldInner profLevel6">
                                                    <h5>French</h5>
                                                    <span></span><span></span><span></span><span></span><span></span>
                                                    <span></span><span></span><span></span><span></span><span></span>
                                                    <i>6/10</i>
                                                </div>
                                                <div class="ldInner profLevel7">
                                                    <h5>English</h5>
                                                    <span></span><span></span><span></span><span></span><span></span>
                                                    <span></span><span></span><span></span><span></span><span></span>
                                                    <i>7/10</i>
                                                </div>
                                            </div>
                                        </div>
                                <?php  include 'includes/footer.php' ?>
</body>
</html>