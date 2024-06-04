<?php
include("../conn/conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['student_name'], $_POST['clubs'])) {
        $studentName = $_POST['student_name'];
        $studentClubs = $_POST['clubs'];
        $generatedCode = $_POST['generated_code'];

        try {
            $stmt = $conn->prepare("INSERT INTO tbl_student (student_name, clubs, generated_code) VALUES (:student_name, :clubs, :generated_code)");
            
            $stmt->bindParam(":student_name", $studentName, PDO::PARAM_STR); 
            $stmt->bindParam(":clubs", $studentClubs, PDO::PARAM_STR);
            $stmt->bindParam(":generated_code", $generatedCode, PDO::PARAM_STR);

            $stmt->execute();

            header("Location:masterlist.php");

            exit();
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }

    } else {
        echo "
            <script>
                alert('Please fill in all fields!');
                window.location.href = 'http://localhost:3000/page/attendance/masterlist.php';
            </script>
        ";
    }
}
?>
