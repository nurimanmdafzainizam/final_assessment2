<?php
include "db.php";
include "auth.php";

$id = (int)($_GET['id'] ?? 0);

$sql = $conn->prepare("SELECT * FROM result WHERE number = ?");
$sql->bind_param("i", $id);
$sql->execute();

$row = $sql->get_result()->fetch_assoc();

if (!$row) {
    header("Location: index.php");
    exit;
}

$student_name = $row['student_name'];
$matric_no = $row['matric_no'];
$subject_name = $row['subject_name'];
$subject_code = $row['subject_code'];
$test1 = $row['test_1'];
$test2 = $row['test_2'];
$final = $row['final'];
$total = $row['total'];


if (isset($_POST['submit'])){
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

    $sql = $conn ->prepare("UPDATE result SET
    student_name = ?,
    matric_no = ?,
    subject_name = ?,
    subject_code = ?,
    test_1 = ?,
    test_2 = ?,
    final = ?,
    total = ?,
    grade = ?
    WHERE number = ?");

    $sql->bind_param("ssssddddsi",
        $student_name, $matric_no, $subject_name,
        $subject_code, $test1, $test2, $final, $total, $grade, $id);

    if ($sql -> execute()) {
        header("Location: index.php");
        exit;
    }
}

include "header.php";
?>

<h2>Edit Result</h2>

<?php
include "form.php";
include "footer.php";
?>