<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.body.style.opacity = 0;
        fadeIn(300);
    });

    function fadeIn(time) {
        var opacity = 0;
        var intervalID = setInterval(function () {
            opacity += 0.01;
            document.body.style.opacity = opacity;
            if (opacity >= 1) clearInterval(intervalID);
        }, time / 150);
    }
    </script>
</head>
<body>
    <div class="container">
        <h2>While Loop Application</h2>
        <p><a href="loop.php">Loop</a></p>
        <p><a href="foreach.php">Foreach loop</a></p>
        <form method="post">
            Enter a message: <input type="text" name="message"><br>
            Enter a number: <input type="text" name="number"><br><br>
            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $message = $_POST['message'];
            $number = $_POST['number'];
            $i = 0;
            echo "<ul>";
            while ($i < $number) {
                echo "<li>$message</li>";
                $i++;
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>
