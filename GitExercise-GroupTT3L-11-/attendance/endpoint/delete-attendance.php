<?php
include ('../conn/conn.php');

if (isset($_GET['attendance'])) {
    $attendance = $_GET['attendance'];

    try {

        $query = "DELETE FROM tbl_attendance WHERE tbl_attendance_id = '$attendance'";

        $stmt = $conn->prepare($query);

        $query_execute = $stmt->execute();

        if ($query_execute) {
            echo "
                <script>
                    alert('Attendance deleted successfully!');
                    window.location.href = 'http://localhost:3000/GitExercise-GroupTT3L-11-/attendance/index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Failed to delete attendance!');
                    window.location.href = 'http://localhost:3000/GitExercise-GroupTT3L-11-/attendance/index.php';
                </script>
            ";
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>