<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> How upload file on php</title>
    <title>Only select</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>

<p>
    
</p>

<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
        <?php $imges = array("image/png", "image/jpg", "image/jpeg");
        
             if(isset($_FILES['photo'])){
                $someImages = count($_FILES["photo"]["name"]);
                for($i=0;$i<$someImages;$i++){
                if(in_array($_FILES["photo"]["type"][$i],$imges)!==false){
                    echo move_uploaded_file($_FILES['photo']['tmp_name'][$i], "imgs/" . $_FILES["photo"]["name"][$i]);
                 }
                }
            }  
            

            print_r ($_FILES);
          
    ?>
            <form action="file_upload.php" method="post" enctype="multipart/form-data">
                <label for="photo">Upload a photo here</label>
                <input type="file" name="photo[]" id="photo">
                <input type="file" name="photo[]" id="photo">
                <input type="file" name="photo[]" id="photo">
                <input type="submit" value="send">
            </form>
        </div>
    </div>
</div>


    
</body>
</html>