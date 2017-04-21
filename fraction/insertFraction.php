    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idTask = isset($_GET['idTask']) ? $_GET['idTask'] : '';
    $percent = isset($_GET['percent']) ? $_GET['percent'] : ''; 
    $grade = isset($_GET['grade']) ? $_GET['grade'] : '';
    $idSubject = isset($_GET['idSubject']) ? $_GET['idSubject'] : '';

    $q=mysqli_query($con, "INSERT INTO fraction (idTask, percent, grade, idSubject)
                           VALUES ('$idTask','$percent', '$grade', '$idSubject')")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('inserted'));
    } 
     
    mysqli_close($con);
    ?>
