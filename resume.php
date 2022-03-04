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
        <div class="container-fluid col-md-11  mt90" >
            <div class="row justify-content-center">
                <!-- profile card -->
                <?php include 'includes/profilecolumn.php'; ?>
                <!-- content -->
                <div class="col-lg-8 col-md-7" >
                    <!-- navbar -->
                <?php include 'includes/navbar.php'; ?>
                    <div class="container-fluid content-mod ">
                        <div class="row ">
                            <div class="pd-content div_rel">
                                <img src="./images/bg/6.png" class="img_info">
                                <div class="title pb-2">
                                    <h4>Education</h4>
                                </div>
                                <div class="row mt-3">
                                    <div class=" col-lg-6 col-12">
                                    <div class="box edu">
                                            <i class="bi bi-building"></i>
                                            <span class="h5">Youcode</span>
                                            <p class="mt-4">Oct 2021 - Aujourd'hui <span>Youssoufia</span></p> 
                                            <ul class="list-unstyled text-white ps-2" >
                                                <li>1'er anneé developpeur web full stack à Youcode.</li>
                                            </ul>                                          
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class=" col-lg-6">
                                        <div class="box edu">
                                            <i class="bi bi-building"></i>
                                            <span class="h5">Université Sultan Moulay Slimane</span>
                                            <p class="mt-4">Oct 2017 - 2019<span>Khouribga</span></p> 
                                            <ul class="list-unstyled text-white ps-2" >
                                                <li>Sciences mathematiques, informatiques et applications</li>
                                            </ul>                                          
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class=" col-lg-6">
                                        <div class="box edu">
                                            <i class="bi bi-building"></i>
                                            <span class="h5">Baccalauréat, Sciences physiques</span>
                                            <p class="mt-4">Jui 2017 <span>Khouribga</span></p> 
                                            <ul class="list-unstyled text-white ps-2" >
                                                <li>Baccalauréat, Sciences physiques à Lycée Ibn Yassine</li>
                                            </ul>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="title pb-2">
                                    <h4>Certefication</h4>
                                </div>
                                <div class="row mt-3">
                                    <div class=" col-lg-6 col-12">
                                    <div class="box edu">
                                            <i class="bi bi-building"></i>
                                            <span class="h5">The Complete Front-End Web Development Course!</span>
                                            <p class="mt-4">april 2021  <span>Udemy</span></p> 
                                            <ul class="list-unstyled text-white ps-2" >
                                                <li><b>What I learnt</b><br/>
                                                        -Build a simple HTML text site<br/>
                                                        -Style web pages using CSS<br/>
                                                        -Program websites with JavaScript<br/>
                                                        -Build a Pipboy using Bootstrap<br/>
                                                        -Build and publish a Google Chrome Extension</li>
                                            </ul>                                          
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class=" col-lg-6">
                                        <div class="box edu">
                                            <i class="bi bi-building"></i>
                                            <span class="h5">PHP for Beginners: PHP Crash Course 2022</span>
                                            <p class="mt-4">Mars 2021<span>Udemy</span></p> 
                                            <ul class="list-unstyled text-white ps-2" >
                                                <li><b>What I learnt</b><br/>
                                                    -You will be able to install and work comfortably with PHP<br/>
                                                    -You will be able to read and write PHP code<br/>
                                                    -You will be able to understand some backend key terms<br/>
                                                    -You will be able to dive deep into some PHP complex topics easily<br/>
                                                    -You will be able to grasp most common PHP standards code in no time</li>
                                            </ul>                                          
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                                <div class="title pb-2">
                                    <h4>Experience</h4>
                                </div>
                                <div class="row mt-3">
                                    <div class=" col-lg-6 col-12">
                                    <div class="box edu">
                                            <i class="bi bi-building"></i>
                                            <span class="h5">Freelance</span>
                                            <p class="mt-4">Fev 2020 - Aujourd'hui <span>Amazon Kdp</span></p> 
                                            <ul class="list-unstyled text-white ps-2" >
                                                <li>Création des modéles des books pour la mettre sur la platforme
                                                        amazon KDP (kidel direct publishing)</li>
                                            </ul>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="text-muted text-center pb-2">
                                    <h5>Examples Of My Works</h5>
                                </div>
                                <div class="col-12 row text-center mb-3 books_ex">
                                    <div class="col-lg-3 image_books">
                                        <i></i>
                                        <img src="./images/home_01/1.jpg" width="150px">
                                        <a href="" >View on Amazon</a>
                                    </div>
                                    <div class=" col-lg-3 image_books">
                                        <i></i>
                                        <img src="./images/home_01/1.jpg" width="150px">
                                        <a href="" >View on Amazon</a>
                                    </div>
                                    <div class="col-lg-3 image_books">
                                        <i></i>
                                        <img src="./images/home_01/1.jpg" width="150px">
                                        <a href="" >View on Amazon</a>
                                    </div>
                                    <div class="col-lg-3 image_books">
                                        <i></i>                                                       
                                        <img src="./images/home_01/1.jpg" width="150px">
                                        <a href="" >View on Amazon</a>
                                    </div>
                                </div>
                                    <!--  --> 
                                    <div class="title pb-2">
                                        <h4>Programing Languages & Tools</h4>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 languages_tools"> 
                                            <ul class="list-unstyled">
                                                <li>HTML</li>
                                                <li>CSS</li>
                                                <li>Bootstrap</li>
                                                <li>Tail Wind</li>
                                                <li>PHP</li>
                                                <li>MySQL</li>
                                                <li>SQL</li>
                                                <li>Javascript</li>
                                                <li>C</li>
                                                <li>Git</li>                                              
                                                <li>Github-Flow</li>
                                                <li>Json</li>
                                                <li>VsCode</li>
                                                <li>PhpStorm</li>
                                                <li>Trello</li>
                                                <li>AdobeXd</li>
                                            </ul>
                                        </div>
                                    </div>     
                            </div>
                        </div>
                    <?php include 'includes/footer.php'; ?>