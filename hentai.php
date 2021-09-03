<?php

$id = $_GET["id"];
$hentai = $_GET["hentai"];
$year = $_GET["year"];
$group = $_GET["group"];
$studios = $_GET["studios"];
$quality = $_GET["quality"];
$file = $_GET["file"];
$cover = $_GET["cover"];
$tags = $_GET["tags"];
$description = $_GET["description"];

require_once("config.php");
require_once("mcfg.php");

?>

<!doctype html>
<html lang="en">

<head>
    <title><?php echo $hentai; echo $watch_hentai; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="bs-example">

        <div class="alert alert-primary" role="alert">
            <nav class="navbar navbar-expand-lg navbar-light bg-ligh" style="padding-left: 15%; padding-right: 15%;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Hentai H33T</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="docs.php">Documentation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Other Links
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="https://h33t.moe">H33T.moe</a>
                                    </li>
                                    <li><a class="dropdown-item" href="https://haho.moe">Hentai AHO</a>
                                    </li>
                                    <li><a class="dropdown-item" href="https://status.h33t.moe">Server
                                            Status</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container">
            <div class="container">
                <center>
                    <h1><?php echo "<small style='font-size:20px;'>"; echo $id; echo "</small>"; echo " "; echo $hentai; ?>
                    </h1>
                </center>
                <div class="row">
                    <div class="col-3">
                        <img src="covers/<?php echo $cover; ?>" width="100%;">
                    </div>
                    <div class="col-7" width="90%;">

                        <div class="row">
                            <div class="col-2">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action active" id="list-home-list"
                                        data-bs-toggle="list" href="#list-home" role="tab"
                                        aria-controls="list-home">General</a>
                                    <a class="list-group-item list-group-item-action" id="list-profile-list"
                                        data-bs-toggle="list" href="#list-profile" role="tab"
                                        aria-controls="list-profile">Stream</a>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                        aria-labelledby="list-home-list">
                                        <b><u>Studio:</u></b> <?php echo $studios; ?><br>
                                        <b><u>Translation:</u></b> <?php echo $group; ?><br>
                                        <b><u>Release Date:</u></b> <?php echo $year; ?><br>
                                        <b><u>Description:</u></b> <?php echo $description; ?><br>
                                        <b><u>Tags:</u></b> <?php echo $tags; ?>
                                    </div>
                                    <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                        aria-labelledby="list-profile-list">
                                        <video width="100%" controls muted>
                                            <source src="files/<?php echo $file; ?>" type="video/mp4">
                                            Your browser does not support HTML video.
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <hr>
            <?php echo $footer; ?>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>