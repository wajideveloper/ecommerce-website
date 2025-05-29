<?php
//I need to get the first name of the user using GET
//step 1: confirm if there is any data in the url
if(isset($_GET['first'])){
    $firstName=$_GET['first'];
    $secondName=$_GET['second'];
    print($firstName."  ".$secondName);

}


?>