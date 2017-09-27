<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Who is he/she?</title>
    </head>
    <body>
        <div align='center'>
        <form method="POST" action="">
            Name<br>
            <input name="Name" type="text"/><br />
            Character<br>
            <input name="Character" type="text"/><br />
            <input type="submit" name="submit" value="Submit"/>
        </form>
        </div>
        <?php

        $sentence = $_POST['Name'] . " is " . $_POST['Character'].".";
              echo($sentence)
        ?>
        
    </body>
</html>

  