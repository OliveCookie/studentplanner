    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $teacherName = isset($_GET['teacherName']) ? $_GET['teacherName'] : '';
    $gender = isset($_GET['gender']) ? $_GET['gender'] : ''; 
    $telephone = isset($_GET['telephone']) ? $_GET['telephone'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $photo = isset($_GET['photo']) ? $_GET['photo'] : '';
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';

    $q=mysqli_query($con, "INSERT INTO teacher (teacherName, gender, telephone, email, photo, idUser)
                           VALUES ('$teacherName','$gender', '$telephone', '$email', '$photo', '$idUser')")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('inserted'));
    } 
     
    mysqli_close($con);
    ?>
