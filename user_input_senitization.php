<?php include_once("function.php") ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My dream</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <style>
        .check_label{
            width: auto;
            display: inline-block;
        }
        .submit_btn{
            display:block !important;
        }
    </style>
</head>
<body>
    <h1>Hellow World</h1>

    <?php
        $fname ='';
        $lname =''; 
        $cbone = '';
        
        
    ?>
    <p>
        <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){
            //$fname = htmlspecialchars($_REQUEST['fname']);
             $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
        echo "Your First Name : ".$fname;
    }; ?>
    </p>
    <p><?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){
         $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
        echo  "Your Last Name :".$lname;
    }; ?>
    </p>
    <p>
        <?php if(isset($_REQUEST['cbone'])){
            //$fname = htmlspecialchars($_REQUEST['fname']);
             //$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
        $cbone="checked";
    }; ?>
    </p>



    </div>

    </div>
    <div class="row">
    <div class="column column-60 column-offset-20">
    <form action="user_input_senitization.php" method="post">
        <label for="fname">Fname</label>
        <input type="text" name="fname" id="fname">
        <label for="lname">Lname</label>
        <input type="text" name="lname" id="lname">
        
        <input type="checkbox" name="cbone" id="cbone" <?php echo $cbone ?>>
        <label class="check_label" for="cbone">Remember me</label>

        <label class="check_label" for="wanna_meet">wanna meet!</label>
        <input type="checkbox" name="tauhid[]" id="tauhid" <?php echo $cbone ?>>
        <label class="check_label" for="tauhid">Tauhid</label>
        <input type="checkbox" name="shahrier[]" id="shahrier" <?php echo $cbone ?>>
        <label class="check_label" for="shahrier">Shahrier</label>
        <input type="checkbox" name="shahiduzzaman[]" id="shahiduzzaman" <?php echo $cbone ?>>
        <label class="check_label" for="shahiduzzaman">Shahiduzzaman</label>

        <input class="submit_btn" type="submit" value="Send">
    </form>
  <!---  <script>alert("hellow")cript> ?>







    
</body>
</html>