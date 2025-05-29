<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="test.php" method="POST" onsubmit="return ff()">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">

<script>
function ff(){
    var checkName=document.getElementById("fname").value
    var checkLastName=document.getElementById("lname").value
    if (checkName=="" && checkLastName==""){
        alert("You can't proceed before adding the first name and last name")
        return false
    }else{
        return true
    }
    

}

</script>

</form>
</body>
</html>