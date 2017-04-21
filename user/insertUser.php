    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");
	
    $username = isset($_GET['username']) ? $_GET['username'] : '';
    $password = isset($_GET['password']) ? $_GET['password'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    
    $q=mysqli_query($con, "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')") or die (mysqli_error($con)); 

     if ($q) {
        print(json_encode('inserted'));
    } 
     
    mysqli_close($con);
    ?>
