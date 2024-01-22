<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email from Form</title>
</head>

<body>
    <form action="send.php" method="post">
        <p>
            <label for="">
                Full names
            </label>
            <input type="text" name="names" id="">
        </p>
        <p>
            <label for="">
                Email
            </label>
            <input type="email" name="email" id="">
        </p>
        <p>
            <button type="submit" name="cfn">
                Confirm
            </button>
        </p>
    </form>
</body>

</html>