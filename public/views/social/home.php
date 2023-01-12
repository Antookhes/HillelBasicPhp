<!DOCTYPE html>
<head>
</head>

<body>

    <form action="" method="GET">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname">
        <input type="submit" value="Submit">
    </form>

<?php foreach ($data as $key => $value):?>
    <p><?= $key ?> - <p><?= $value ?> </p>
<?php endforeach; ?>
</body>
</html>


