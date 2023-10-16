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
        <h2>For Loop Application</h2>
        <p><a href="foreach.php">Foreach loop</a></p>
        <p><a href="while.php">While loop</a></p>
        <form method="post">
            Enter a number: <input type="text" name="number"><br><br>
            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST['number'];
            echo "<ul>";
            for ($i = 1; $i <= $number; $i++) {
                echo "<li>$i</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>
