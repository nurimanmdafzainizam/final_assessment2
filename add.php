<?php
include "db.php";
include "auth.php";

$student_name = "";
$matric_no = "";
$subject_name = "";
$subject_code = "";
$test1 = "";
$test2 = "";
$final = "";
$total = "";

if (isset($_POST['submit'])) {
    $student_name = $_POST['student_name'];
    $matric_no = $_POST['matric_no'];
    $subject_name = $_POST['subject_name'];
    $subject_code = $_POST['subject_code'];
    $test1 = (float)$_POST['test_1'];
    $test2 = (float)$_POST['test_2'];
    $final = (float)$_POST['final'];

    $total = $test1 + $test2 + $final;

    if ($total >= 80)
        $grade = 'A';
    else if ($total >= 65)
        $grade = 'B';
    else if ($total >= 50)
        $grade = 'C';
    else if ($total >= 40)
        $grade = 'D';
    else
        $grade = 'E';

    $sql = $conn -> prepare("INSERT INTO result
    (student_name,matric_no,subject_name,
    subject_code,test_1,test_2,final,total,grade)
    VALUES (?,?,?,?,?,?,?,?,?)");

    $sql->bind_param("ssssdddds",
        $student_name, $matric_no, $subject_name,
        $subject_code, $test1, $test2, $final, $total, $grade);

    if ($sql -> execute()) {
        header("Location: index.php");
        exit;
    }
}

include "header.php";
?>

<h2>ADD RESULT</h2>



<?php
include "form.php";
include "footer.php";

?>