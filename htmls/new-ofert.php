<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemata - oferty</title>
    <link rel="stylesheet" href="../csss/theme.css">   
    <link rel="stylesheet" href="../csss/new-ofert-style.css">   
    <link rel="icon" href="../assets/icon.png"> 
</head>
<body>
    <div id="wrapper">
        <?php
            require_once("../headers/header.html");
            require_once("../headers/nav.html");
        ?>
        <main>
            <ul id="course-list">
                <li class="course-item">
                    <p class="course-title">Matematyka Podstawowa</p>
                    <ul class="course-description">
                        <li>Koszt: <span>1000$</span></li>
                        <li>Wystrzelasz 30% na maturze</li>
                        <li>Zapomnisz wszystko po nim</li>
                        <li>tani i szybki, bo i tak go nie zrobisz</li>
                        
                    </ul>
                    <div class="course-buy-now-button"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Kup teraz</a></div>
                </li>
                <li class="course-item">
                    <p class="course-title">Matematyka Rozszerzona</p>
                    <ul class="course-description">
                        <li>Koszt: <span>2000$</span></li>
                        <li>50% na ślepo</li>
                        <li>Karta nieznanych wzorów</li>
                        <li>nie niedrogo, ale cieżko</li>
                    </ul>
                    <div class="course-buy-now-button"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Kup teraz</a></div>
                </li>
                <li class="course-item">
                    <p class="course-title">Duo Pakiet</p>
                    <ul class="course-description">
                        <li>Koszt: <s>3000$</s> <span class="ranbow-span">6700$ !</span></li>
                        <li>oba pakiety w najbardziej korzystnej cenie</li>
                    </ul>
                    <div class="course-buy-now-button"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Kup teraz</a></div>                
                </li>
            </ul>
            <div id="korki">
                <form action="" method="post">
                    <label for="date">Wprowadź date korepetycji:</label>
                    <input type="date" name="date" id="date" required>
                    <label for="variant">jaki rodzaj korepetycji chcesz:</label>
                    <select name="variant" id="variant" required>
                        <option value="podstawa">Matematyka Podstawowa</option>
                        <option value="rozszerzenie">Matematyka Rozszerzena</option>
                        <option value="inne">Inne</option>
                    </select>
                    <div>
                        <input type="radio" name="h" id="h1" required>
                        <label for="h1">1h</label>
                        <input type="radio" name="h" id="h2" required>
                        <label for="h2">2h</label>
                    </div>
                    <input type="submit" value="Kup teraz">
                </form>
            </div>
        </main>
        <?php
            require_once("../headers/footer.html");
        ?>
    </div>
        <script src="../scripts/responsive-script.js"></script>
</body>
</html>