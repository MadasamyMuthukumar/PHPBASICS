<?php
function showUsers(){
    return json_decode(file_get_contents('data.json'),true);
}
?>