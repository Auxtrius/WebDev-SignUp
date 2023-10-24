
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing</title>
</head>
<body>
    <?php
        $secret_number = 123;
        $attempt = 3;
        if(isset($_POST['guess'])){
            if($_POST['number'] == $secret_number){
                $message = 'Your guess is correct.';
            }else{
                $message = 'Your guess is not correct';
            }
            $attempt--;
        }
    ?>
    <form action="" method="post">
        <label for="">Guess the Number</label>
        <br>
        <input type="text" name="number" id="number">
        <br>
        <input type="submit" value="Guess" name="guess" id="guess">
        <p><?php if(isset($message)){ echo $message; } ?></p>
        <p>Your remaining attempt is: <?php if(isset($attempt)){ echo $attempt; } ?></p>
    </form>
</body>
</html>