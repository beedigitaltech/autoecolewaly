<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/logo_auto_ecole.svg" type="image/x-icon">
    <title>Agence Ngor | Auto Ecole Waly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">

</head>

<body>
    <!-- Nav bar -->
    <?php
    include_once('nav.php')
    ?>
    <div>
        <img src="/images/covoer-ngor.jpg" width="100%" height="100%" alt="Cover Ngor" class="img-fluid">
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/IMG-20201217-WA0035.jpg" class="d-block w-100" height="400" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/IMG-20201217-WA0033.jpg" class="d-block w-100" height="400" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/IMG-20201217-WA0009.jpg" class="d-block w-100" height="400" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div id="agence">
                    <?php include_once('localisation.php')  ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once('footer.php')  ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <script src="/js/app.js"></script>
</body>

</html>