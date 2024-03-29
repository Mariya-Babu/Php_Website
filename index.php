<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        Name : <input type="text" name="name" />
        <input type="submit" value="submit" name="submit" />
    </form>

    <?php

    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo $name;
    }
    ?>
</body>

</html>


<!-- echo "
    <script>
        let x = document.getElementById("container");
        x.textContent = "Hello World! This is Mariya Babu";
    </script>

"; -->