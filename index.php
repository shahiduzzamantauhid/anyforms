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
    <?php include_once("function.php") ?>
</head>
<body>

    

    
    <div class="row">
    <div class="column column-60 column-offset-20">
    <h1>Hellow World</h1>

<?php
    $fname ='';
    $lname =''; 
    $cbone = '';
    $selectSomeName = ['md', 'shahrier', 'shahiduzzaman', 'tauhid'];
    
    
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
<p>
    <?php  
    $someNamean = $_post["a_name"];
    if(count[$someNamean]>0){
        
        echo "You are selected : ", join(", ",$someNamean);
         
    //printf("Yo are selected : %s", filter_input(INPUT_POST, 'a_name', FILTER_SANITIZE_STRING));
}; ?>
</p>

<br><br>
    <form action="index.php" method="post">
        <label for="fname">Fname</label>
        <input type="text" name="fname" id="fname">
        <label for="lname">Lname</label>
        <input type="text" name="lname" id="lname">
        
        <input type="checkbox" name="cbone" id="cbone" <?php echo $cbone ?>>
        <label class="check_label" for="cbone">Remember me</label>

        <label class="" for="wanna_meet">wanna meet!</label>
        <input type="checkbox" name="tauhid[]" id="tauhid" value="md" <?php is_checkedany('tauhid','md') ?>>
        <label class="label-inline" for="tauhid">Tauhid</label><br>
        <input type="checkbox" name="tauhid[]" id="shahrier" value="shahrier" <?php is_checkedany('tauhid','shahrier') ?>>
        <label class="label-inline" for="shahrier">Shahrier</label><br>
        <input type="checkbox" name="tauhid[]" id="shahiduzzaman" value="shahiduzzaman" <?php is_checkedany('tauhid','shahiduzzaman') ?>>
        <label class="label-inline" for="shahiduzzaman">Shahiduzzaman</label> <br>
        <br>
        <label for="a_name">Select a name</label>
        <select name="a_name[]" id="a_name" multiple>
            <option value="" selected disabled>Select one</option>
            <?php displyOption($selectSomeName) ?>
        </select>
       

        <input class="submit_btn" type="submit" value="Send">
    </form>








</body>
</html>

