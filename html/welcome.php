<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="alert('page loaded')">
    Welcome to our website!
    <?php
    if(isset($_GET['age_submit'])){
        $age=$_GET['age'];
        
        if($age>=18){
            echo"You are eligible";

        }
        else{
            $rem=18-$age;
    
            echo"Sorry.... you're not eligible.".$rem." year remaining. " ;
            
        }
    }
    else{
    ?>
     <form action="" method="GET" onsubmit="alert('form submitted')">
Enter age: <input type="text" name="age">
<input type="submit" value="submit" name="age_submit" >
</form>
<?php
}
?>

</body>
</html>