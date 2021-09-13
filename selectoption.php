<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Only select</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>

<?php 
    $somefruits = array('mango', 'banana', 'apple', 'lemon');
    ?>

 <?php    function selectOne($options){
        foreach($options as $option){
            printf("<option value='%s'>%s</option>\n", strtolower($option), ucwords($option));
        }
    }  
    ?>



   





    <div class="row">
        <div class="column column-60 column-offset-20">
            <form action="selectoption.php" method="post">
                <label for="fruits">Select some fruits from here</label>
                <select name="fruits[]" id="fruits" multiple>
                    <option value="" disabled selected>Select one</option>
                    <?php selectOne($somefruits) ?>
                
                </select>
                <input type="submit" value="send">
            </form>


            <p>
                <?php //if(isset($_POST['fruits']) && $_POST['fruits']!=''){
        //printf("You are selected : %s", filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING);} 

        
        if(isset($_POST["fruits"]) && count($_POST["fruits"]) > 0){
        echo "You are selected : ", join(", ",  $_POST["fruits"]);
        }
?>

    
        </p>

        </div>
    </div>





</body>
</html>