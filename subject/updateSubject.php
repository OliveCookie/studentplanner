    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idSubject = isset($_GET['idSubject']) ? $_GET['idSubject'] : '';
    $idSemester = isset($_GET['idSemester']) ? $_GET['idSemester'] : '';
    $name = isset($_GET['name']) ? $_GET['name'] : '';

    $q=mysqli_query($con, "UPDATE subject SET name='$name', idSemester='$idSemester'
                           WHERE idSubject='$idSubject'")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('updated'));
    } 
     
    mysqli_close($con);
    ?>
