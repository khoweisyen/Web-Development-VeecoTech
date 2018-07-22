<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $name = $_POST['name'];
    $address= $_POST['address'];
    $email = $_POST['email'];
        
    // checking empty fields
    if(empty($name) || empty($address) || empty($email)) {                
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($address)) {
            echo "<font color='red'>Address field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$address','$email')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index6.php'>View Result</a>";
    }
}
?>
</body>
</html>