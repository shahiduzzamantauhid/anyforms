<?php
function is_checkedany($input, $value){
    if(isset($_REQUEST[$input]) && is_array($_REQUEST[$input]) && in_array($value, $_REQUEST[$input])){
        echo " checked ";
    }
}

function displyOption($options){
    foreach($options as $option){
        printf("<option value='%s'>%s</option>", strtolower($option), ucwords($option));
    }
}