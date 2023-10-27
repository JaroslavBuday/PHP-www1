<?php
// prepojenie s HTML

// video
?>


<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training PHP sites</title>
</head>
<body>
    <?php require "assets/header.php"; ?>
    <main>
        <section>
            <h1>Formular</h1>
            <form>
                <label for="FirstName">Meno</label>
                <input type="text" name="first_name" id="FirstName"><br>
                <label for="Weight">Váha</label>
                <input type="number" name="weight" id="Weight" min="10" max="300"><br>
                <input type="url" value="https://www." ><br>
                <input type="text" name="second_name" placeholder="Priezvisko" autofocus required><br> 
                <input type="password" name="password" placeholder="Heslo" required><br>
                <input type="email" name="email" placeholder="E-mail"><br>
                <input type="date" name="date"><br>
                <input type="hidden" name="form-type" value="kontakt">
                <textarea name="message" placeholder="Vaša správa" readonly></textarea><br>
                
    <!-- readonly - iba na citanie bez moznosti pisnia - pozri textarea,
        autofocus- po refresnuti stranky bude kurzor v danom policku(priezvisko), 
        disabled- vypnute (zalozka), 
        required- nutne vyplnit (e-kniha) -->

                <input type="checkbox" value="tricko">Tričko za 1 Eur <br>
                <input type="checkbox" value="zalozka" disabled>Založka do knihy zdarma <br>
                <input type="checkbox" value="E-kniha" required>E-kniha <b>Ako zbohatnúť</b> za 5 Eur <br><br>
                
                <select name="color">
                    <optgroup label="Matná farba">
                        <option value="red">červená</option>
                        <option value="green">Zelená</option>
                        <option value="yellow" selected>Žltá</option>
                        <!-- selected vyberie co ma byt ako nahladova moznost -->
                    </optgroup>
                    <optgroup label="Lesklá farba">
                        <option value="red2">červená</option>
                        <option value="green2">Zelená</option>
                        <option value="yellow2">Žltá</option>
                    </optgroup>
                </select><br>

                <input type="radio" name="country" value="SR">Slovensko<br>
                <input type="radio" name="country" value="AU">Rakúsko<br>
                <input type="radio" name="country" value="DE">Nemecko<br>
                <!-- ak je name rovnaka hodnota da sa vybrat iba jedna moznost -->
                <button>Odoslať</button>

            </form>
        </section><br><br>
        <a href="index.php">Späť na hlavnú stránku </a>  
    </main>
    <footer>
        <p>&copy; Všetky práva vyhradené, BJ, 2023</p>
    </footer>
</body>
</html>