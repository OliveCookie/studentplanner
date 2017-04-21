    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $description = isset($_GET['description']) ? $_GET['description'] : '';
    $deadline = isset($_GET['deadline']) ? $_GET['deadline'] : '';
    $isDone = isset($_GET['isDone']) ? $_GET['isDone'] : '';
    $type = isset($_GET['type']) ? $_GET['type'] : '';
    $idSubject = isset($_GET['idSubject']) ? $_GET['idSubject'] : '';
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';

    $q=mysqli_query($con, "INSERT INTO task (name, description, deadline, isDone, type, idSubject, idUser)
                           VALUES ('$name','$description','$deadline', $isDone,'$type','$idSubject', '$idUser')")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('inserted'));
    } 
     
    mysqli_close($con);
    ?>
