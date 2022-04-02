<?php

    include 'sql/config.php';

    $id=$_GET['id'];
    $sql = "SELECT * FROM projects WHERE id=$id ";
    $query= Mysqli_query($conn, $sql);
    $result = Mysqli_fetch_array($query);

    $sql1 = "SELECT * FROM projects_images WHERE id=$id ";
    $query1= Mysqli_query($conn, $sql1);
    $result1 = Mysqli_fetch_array($query1);
                                    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="images/author/logopng.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Project</title>
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
                    <div class="container-fluid content-mod rounded" >
                        <div class="pt-3 ">
                            <div class="row justify-content-center">
                                <div class="col-12" >
                                    <img src="<?php echo 'images/project_imgs/'.$result1['image1']; ?>" width="100%">
                                </div>
                                <div class="container-fluid row mt-2 justify-content-center">
                                    <a href="<?php echo $result['github_link']; ?>" 
                                        class="col-6 shadow proj_nav text-center navig1 p-3 text-white fw-300" target="_blank">
                                        <?php 
                                            if(empty($result['github_link'])){
                                                echo 'Indisponible';
                                            }else{
                                                echo 'Github';
                                                echo '<div class="sing_folio_anim"><img src="images/folio/github-icon.png"></div>';
                                            }
                                        ?>
                                    </a>

                                    <a href="<?php echo $result['website_link']; ?>"
                                        class="col-6 shadow proj_nav text-center navig2 p-3 text-white fw-300" target="_blank">
                                        <?php 
                                            if(empty($result['website_link'])){
                                                echo 'Indisponible';
                                            }else{
                                                echo 'Website';
                                                echo '<div class="sing_folio_anim"><img src="images/folio/website-icon.png"></div>';
                                            }
                                        ?>
                                    </a>
                                </div>
                            </div>
                            <!--  -->
                            <div class="mt-2 pd-content content-column">
                                <div class="title">
                                    <h4>About the project</h4>
                                </div>
                                <div class="mt-3  short-bio">
                                    <div class="row small">
                                        <span class="col-12">
                                            <?php 
                                                echo $result['description'];
                                            ?>
                                        </span>                                      
                                        <div class=" col-lg-6 col-12">
                                            <div class="box">
                                                <i class="bi bi-person-check"></i>
                                                <span>Client</span>
                                                <p><?php 
                                                    echo $result['client'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class=" col-lg-6 col-12">
                                            <div class="box">
                                                <i class="bi bi-calendar-check"></i>
                                                <span>Date</span>
                                                <p><?php 
                                                    echo $result['date'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class=" col-lg-6 col-12">
                                            <div class="box">
                                                <i class="bi bi-tools"></i>
                                                <span>Tools</span>
                                                <p><?php 
                                                    echo $result['tools_used'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class=" col-lg-6 col-12">
                                            <div class="box">
                                                <i class="bi bi-terminal"></i>
                                                <span>Language</span>
                                                <p><?php 
                                                    echo $result['lang_used'];
                                                ?></p>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>                                   
                        <!--  -->
                        <?php  include 'includes/footer.php' ?>
</body>
</html> 