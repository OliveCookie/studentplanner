    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $subjectName = isset($_GET['subjectName']) ? $_GET['subjectName'] : '';
    $idSemester = isset($_GET['idSemester']) ? $_GET['idSemester'] : '';
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';


    $q=mysqli_query($con, "INSERT INTO subject (subjectName, idSemester, idUser)
                           VALUES ('$subjectName', '$idSemester', '$idUser')")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('inserted'));
    } 
     
    mysqli_close($con);
    ?>
