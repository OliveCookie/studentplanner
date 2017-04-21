    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idTeacher = isset($_GET['idTeacher']) ? $_GET['idTeacher'] : '';
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $gender = isset($_GET['gender']) ? $_GET['gender'] : ''; 
    $telephone = isset($_GET['telephone']) ? $_GET['telephone'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $photo = isset($_GET['photo']) ? $_GET['photo'] : '';

    $q=mysqli_query($con, "UPDATE teacher SET name='$name', gender='$gender', telephone='$telephone', email='$email', photo='$photo')
                           WHERE idTeacher='$idTeacher'")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('updated'));
    } 
     
    mysqli_close($con);
    ?>
