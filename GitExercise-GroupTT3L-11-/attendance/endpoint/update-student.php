<?php
include("../conn/conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['student_name'], $_POST['clubs'])) {
        $studentId = $_POST['tbl_student_id'];
        $studentName = $_POST['student_name'];
        $studentClubs = $_POST['clubs'];

        try {
            $stmt = $conn->prepare("UPDATE tbl_student SET student_name = :student_name WHERE clubs = :clubs WHERE tbl_student_id = :tbl_student_id");
            
            $stmt->bindParam(":tbl_student_id", $studentId, PDO::PARAM_STR); 
            $stmt->bindParam(":student_name", $studentName, PDO::PARAM_STR); 
            $stmt->bindParam(":clubs", $studentClubs, PDO::PARAM_STR);

            $stmt->execute();

            header("Location: http://localhost:3000/GitExercise-GroupTT3L-11-/attendance/masterlist.php");

            exit();
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }

    } else {
        echo "
            <script>
                alert('Please fill in all fields!');
                window.location.href = 'http://localhost:3000/GitExercise-GroupTT3L-11-/attendance/masterlist.php';
            </script>
        ";
    }
}
?>
