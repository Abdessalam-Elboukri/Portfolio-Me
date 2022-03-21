<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="x-icon" href="images/author/logopng.png">
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
                    <div class="pd-content div_rel">
                        <div class="row ">
                                    <div class="title">
                                        <h4>Contact Me</h4>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-12 mb-5">
                                        <div class="contact_form">
                                            <form method="post" action="#" id="contactForm">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" class="required" name="full_name" placeholder="Full Name *"/>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="required" name="email" placeholder="Email *"/>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" name="phone" placeholder="Phone"/>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="required" name="sjubject" placeholder="Subject *"/>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea name="message" rows="7" resize="none" class="required" placeholder="Message *"></textarea>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btt_btn"><span><i class="icon icon-Mail"></i>Send Message</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!-- Button trigger modal -->
                                    <?php include 'signin_modal.php'; ?>
                                    <!--  -->
                                    <div class=" col-lg-6 col-12">
                                        <div class="box">
                                        <i class="bi bi-telephone"></i>
                                            <span>Télephone</span>
                                            <p>+212 6 5329 2739</p>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-12">
                                        <div class="box">
                                        <i class="bi bi-envelope-check"></i>
                                            <span>E-mail</span>
                                            <p>AbdessalamElboukri @gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <?php  include 'includes/footer.php';  ?>
                            </div>
</body>
</html>