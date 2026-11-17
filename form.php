<style>
    label {
        display: inline-block;
        width: 150px;
    }
</style>

<form method="post">
    <label for="">Student Name:</label>
    <input type="text" name="student_name" value="<?php echo htmlspecialchars($student_name); ?>" required><br><br>
    <label for="">Matric Number:</label>
    <input type="text" name="matric_no" value="<?php echo htmlspecialchars($matric_no); ?>" required><br><br>
    <label for="">Subject Name:</label>
    <input type="text" name="subject_name" value="<?php echo htmlspecialchars($subject_name); ?>" required><br><br>
    <label for="">Subject Code:</label>
    <input type="text" name="subject_code" value="<?php echo htmlspecialchars($subject_code); ?>" required><br><br>
    <label for="">Test 1:</label>
    <input type="text" name="test_1" value="<?php echo htmlspecialchars($test1); ?>" required><br><br>
    <label for="">Test 2:</label>
    <input type="text" name="test_2" value="<?php echo htmlspecialchars($test2); ?>" required><br><br>
    <label for="">Final:</label>
    <input type="text" name="final" value="<?php echo htmlspecialchars($final); ?>" required><br><br>
    <label for="">Total:</label>
    <input type="text" name="total" value="<?php echo htmlspecialchars($total); ?>" readonly placeholder="Calculated automatically"><br><br>
    <button type="submit" name="submit">Save</button>
    <a href="index.php">Cancel</a>
</form>