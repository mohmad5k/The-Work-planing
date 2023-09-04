<script>
    // Modify the showError function to accept an array of dates
    function showError(errorMessage, dates) {
        alert(errorMessage + "Data already exists for the following Dates: " + dates.join(', '));
    }
</script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day1 = $_POST['day1'];
    $day2 = $_POST['day2'];
    $day3 = $_POST['day3'];
    $day4 = $_POST['day4'];
    $day5 = $_POST['day5'];
    $day6 = $_POST['day6'];
    $day7 = $_POST['day7'];

    $sName = 'localhost';
    $uName = 'root';
    $pass = '';
    $db_name = 'try1';

    try {
        $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if data already exists for day1 to day7
        $existingData = array();
        $existingData['day1'] = doesDataExist($conn, $day1);
        $existingData['day2'] = doesDataExist($conn, $day2);
        $existingData['day3'] = doesDataExist($conn, $day3);
        $existingData['day4'] = doesDataExist($conn, $day4);
        $existingData['day5'] = doesDataExist($conn, $day5);
        $existingData['day6'] = doesDataExist($conn, $day6);
        $existingData['day7'] = doesDataExist($conn, $day7);

        // Check if any data already exists
        if (in_array(true, $existingData)) {
            $existingDays = [];
            foreach ($existingData as $day => $exists) {
                if ($exists) {
                    $existingDays[] = $day;
                }
            }
            echo "<script>showError('', ['$day1', '$day2', '$day3', '$day4', '$day5', '$day6', '$day7']);</script>";
        } else {
            // Prepare and execute the SQL statements for day1 to day7
            $sql1 = "INSERT INTO tr1_table(DATE, start, break, end, Total) VALUES (?, ?, ?, ?, ?)";
            $sql2 = "INSERT INTO tr1_table(DATE, start, break, end, Total) VALUES (?, ?, ?, ?, ?)";
            $sql3 = "INSERT INTO tr1_table(DATE, start, break, end, Total) VALUES (?, ?, ?, ?, ?)";
            $sql4 = "INSERT INTO tr1_table(DATE, start, break, end, Total) VALUES (?, ?, ?, ?, ?)";
            $sql5 = "INSERT INTO tr1_table(DATE, start, break, end, Total) VALUES (?, ?, ?, ?, ?)";
            $sql6 = "INSERT INTO tr1_table(DATE, start, break, end, Total) VALUES (?, ?, ?, ?, ?)";
            $sql7 = "INSERT INTO tr1_table(DATE, start, break, end, Total) VALUES (?, ?, ?, ?, ?)";

            $stmt1 = $conn->prepare($sql1);
            $stmt2 = $conn->prepare($sql2);
            $stmt3 = $conn->prepare($sql3);
            $stmt4 = $conn->prepare($sql4);
            $stmt5 = $conn->prepare($sql5);
            $stmt6 = $conn->prepare($sql6);
            $stmt7 = $conn->prepare($sql7);

            if (
                $stmt1->execute([$day1, $_POST['STtime1'], $_POST['BRtime1'], $_POST['ENDtime1'], $_POST['total1']]) &&
                $stmt2->execute([$day2, $_POST['STtime2'], $_POST['BRtime2'], $_POST['ENDtime2'], $_POST['total2']]) &&
                $stmt3->execute([$day3, $_POST['STtime3'], $_POST['BRtime3'], $_POST['ENDtime3'], $_POST['total3']]) &&
                $stmt4->execute([$day4, $_POST['STtime4'], $_POST['BRtime4'], $_POST['ENDtime4'], $_POST['total4']]) &&
                $stmt5->execute([$day5, $_POST['STtime5'], $_POST['BRtime5'], $_POST['ENDtime5'], $_POST['total5']]) &&
                $stmt6->execute([$day6, $_POST['STtime6'], $_POST['BRtime6'], $_POST['ENDtime6'], $_POST['total6']]) &&
                $stmt7->execute([$day7, $_POST['STtime7'], $_POST['BRtime7'], $_POST['ENDtime7'], $_POST['total7']])
            ) {
                echo "Data for all days inserted successfully.<br>";
            } else {
                echo "Error: " . $stmt1->errorInfo()[2] . "<br>";
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null; // Close the database connection
}

function doesDataExist($conn, $day) {
    $sql = "SELECT COUNT(*) FROM tr1_table WHERE DATE = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$day]);
    $count = $stmt->fetchColumn();
    return ($count > 0);
}
?>