
<?php
  
include 'createDB.php';

if($_SERVER["REQUEST_METHOD"] == "GET") {
    // username and password sent from form 
    
    $myusername = mysqli_real_escape_string($db,$_GET['username']);
    $mypassword = mysqli_real_escape_string($db,$_GET['password']); 
    
    $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";

    $result = mysqli_query($db,$sql); 

    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $active = $row['active'];
    
    //$count = mysqli_num_rows($result);
};
    


$conn->close();


$colori = array(
    'colore0' => "BLU", 
    'colore1' => "NERO",
    'colore2' => "GIALLO",
    'colore3' => "ROSSO",
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Colori</title>
</head>
    <body>
        <?php foreach ($colori as $i => $value){
            ?> <ul><?php echo $value;?><a href = "https://www.google.it/">LINK <a><ul> <?php
        } ?>

        <form method='GET' action='modif.php'>
            <h1>Login</h1>
            Username: <input type ="text" name ="name"> <br>
            Password: <input type ="password" name="password"> <br>
            <input type="submit"> 
        </form>
    </body>
</html>