
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<form name="feedback" method="POST" action="">

        <label> Name:
            <input type="text" name="num" id="num">
        </label>

        <label><br>Password:
            <input type="Password" name="pass">
        </label>

        <label><br>Email:
            <input type="email" name="email">
        </label>

        <label><br>Birthday:
            <input type="date" name="date">
        </label>

    <label><br>Gender:
        <input type="radio" name="gender" value="M">M
        <input type="radio" name="gender" value="W">W
    </label>

    <label><br>Favorite color:
        <input type="color" name="color">
    </label>

    <input type="submit" name="send" value="Отправить">
</form>


</body>
</html>


<?php
if (isset($_POST)) {
echo '<br>';
    echo "<table cellpadding='6' width='200' border = 2>" . "<tr>" . "<th>Name</th>" . "<th>Password</th>" . "<th>Email</th>" .
        "<th>Birthday</th>" . "<th>Gender</th>" . "<th>Favorite Color</th>" . "</tr>";
    echo "<td>". $_POST['num']."</td>" . "<td>". $_POST['pass']."</td>" . "<td>". $_POST['email']. "<td>". $_POST['date']."</td>" .
        "<td>". $_POST['gender']."</td>" . "<td>". $_POST['color'] . "</td>";

}
?>
