    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idTask = isset($_GET['idTask']) ? $_GET['idTask'] : '';
    $idSemester = isset($_GET['idSemester']) ? $_GET['idSemester'] : '';
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $description = isset($_GET['description']) ? $_GET['description'] : '';
    $deadline = isset($_GET['deadline']) ? $_GET['deadline'] : '';
    $isDone = isset($_GET['isDone']) ? $_GET['isDone'] : '';
    $type = isset($_GET['type']) ? $_GET['type'] : '';

    $q=mysqli_query($con, "UPDATE task SET name='$name', idSemester='$idSemester', description='$description', deadline='$deadline', isDone='$isDone', type='$type'
                           WHERE idTask='$idTask'")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('updated'));
    } 
     
    mysqli_close($con);
    ?>
