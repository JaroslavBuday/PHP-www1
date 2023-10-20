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
    <header>
        
    </header>
    <main>
        <section>
            <h1>Formular</h1>
            <form>
                <input type="text" name="first_name" placeholder="Meno"><br>
                <input type="text" name="second_name" placeholder="Priezvisko"><br>
                <input type="password" name="password" placeholder="Heslo"><br>
                <input type="email" name="email" placeholder="E-mail"><br>
                <input type="date" name="date"><br>
                <input type="hidden" name="form-type" value="kontakt">
                <textarea name="message" placeholder="Vaša správa" ></textarea><br>
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
                <button>Odoslať</button>

            </form>
        </section>
        
    </main>
    <footer>

    </footer>
</body>
</html>