<?php
    include 'sql/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="x-icon" href="images/author/logopng.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="dark">
    <main class="d-flex justify-content-center ">
        <div class="container-fluid col-12 col-md-11 mt90">
            <div class="row justify-content-center">
                <!-- profile card -->
                <?php include 'includes/profilecolumn.php'; ?>
                <!-- content -->
                <div class="col-lg-8 col-md-7">
                    <!-- navbar -->
                <?php include 'includes/navbar.php'; ?>
                    <div class="container-fluid content-mod">
                        <div class="pt-4">
                                <div class="title mb-4">
                                    <h4>My Projects</h4>
                                </div>
                                <div class="row">
                                    <?php
                                        $sql= "SELECT * FROM projects";
                                        $query= Mysqli_query($conn, $sql);
                                        while($result = Mysqli_fetch_array($query)){
                                    ?>
                                    <div class="col-lg-6 folio_effect" style="display: inline-block;  opacity: 1;">
                                        <div class="folio_item">
                                            <a href="singlefolio.php?id=<?php echo $result['id']; ?>" class="folio_item_thumbs">
                                                <div class="folio_stack">
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_img_holder">
                                                        <img class="folio_img" src="<?php echo 'images/folio/' .$result['image']; ?>" alt="Image" width="90%">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="folio_content">
                                                <h3 class="folio_title fw-300"><a href="singlefolio.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></h3>
                                                <p class="folio_cat"><span><?php echo $result['category']; ?></span></p>
                                            </div>                   
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                <!--  -->
                                </div>                          
                            <div class="col-12 project-notif mt-2 mb-3 d-flex justify-content-center">
                                <div class=" col-md-4  text-center">
                                    <div class="animation_prj"></div>
                                    <span class="text-white small fw-500"> More Projects are Soon</span>
                                </div>                                
                            </div>
                        <!--  -->
                        <?php  include 'includes/footer.php' ?>
</body>
</html>