<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemata</title>
    <link rel="stylesheet" href="csss/theme.css">   
    <link rel="stylesheet" href="csss/index-style.css">   
    <link rel="icon" href="assets/icon.png"> 
</head>
<body>
    <div id="wrapper">
        <?php
            require_once("headers/header.html");
        ?>
        <ul class="nav">
            <li class="first-nav-li"><button class="nav-button">Rozwiń  menu</button></li>
            <li><a href="index.php">Strona główna</a></li>
            <li><a href="htmls/about.php">O nas</a></li>
            <li><a href="htmls/new-ofert.php">Oferta</a></li>
            <li><a href="htmls/opinion.php">Opinie</a></li>
            <li><a href="htmls/new-faq.php">FAQ</a></li>
        </ul>
        <main>
            <div class="main-panel">
                <span class="main-title">Nie potrafisz matematyki jak jak 99% naszych klientów?</span>
                <p>Nie martw sie! I tak nie zdasz ale mozesz wydać pieniądze na to czego nienawidzisz. </p>
            </div>
        </main>
        <?php
            require_once("headers/footer.html");
        ?>
    </div>
    <script src="scripts/responsive-script.js"></script>
</body>
</html>