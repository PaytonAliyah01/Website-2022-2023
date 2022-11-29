<!doctype html>
<html lang="en-US">
<head>
    <title>Fraaipaso</title>
    <!--<link href="css/main.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        aside, div, nav, main, footer, header {
            outline:1px solid rgb(0, 0, 0);
        }
        #logo {
            height: 100px;
            width: 200px;
            top: 11px;
            left: 11px;
            position: relative;
        }
    </style>
</head>
<body>
<div id="container">
    <div class="row">
        <header class="col-10 offset-md-1">
            <div id="logo" class="">Logo</div>
            <img src="" alt="">
            header
        </header>
        <nav class=" col-10 offset-md-1">
            <a href="index.php">home</a>
            <a href="contact.php">contact</a>
            <a href="products.php">products</a>
            <a href="#">items</a>
        </nav>
        <aside class="col-3 offset-md-1">Side bar</aside>
        <main class="col-sm-12 col-md-7">
            <h1>Master</h1>
            <p>
                <?php
                $master_content =  ob_get_contents();
                ob_end_clean();
                echo $master_content;
                ?>
            </p>
        </main>
        <footer class="col-10 offset-md-1">Master footer</footer>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
