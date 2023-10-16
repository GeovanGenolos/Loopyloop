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
        <h2>Foreach Loop Application</h2>
        <p><a href="loop.php">Loop</a></p>
        <p><a href="while.php">While loop</a></p>
        <form method="post">
            <input type="checkbox" name="fruits[]" value="Apple"> Apple<br>
            <input type="checkbox" name="fruits[]" value="Banana"> Banana<br>
            <input type="checkbox" name="fruits[]" value="Cherry"> Cherry<br>
            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST['fruits'])) {
                echo "<ul>";
                foreach ($_POST['fruits'] as $fruit) {
                    echo "<li>$fruit</li>";
                }
                echo "</ul>";
            }
        }
        ?>
    </div>
</body>
</html>
