<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_id = htmlspecialchars(trim($_POST['form_id']));
    $form_title = htmlspecialchars(trim($_POST['form_title']));
    $name = htmlspecialchars(trim($_POST['Name']));
    $email = htmlspecialchars(trim($_POST['Email']));
    $phone = htmlspecialchars(trim($_POST['Phone']));
    $checkbox = isset($_POST['Checkbox']) ? 'yes' : 'no';
    $checkbox_2 = isset($_POST['Checkbox_2']) ? 'yes' : 'no';
    $checkbox_3 = isset($_POST['Checkbox_3']) ? 'yes' : 'no';
    $checkbox_4 = isset($_POST['Checkbox_4']) ? 'yes' : 'no';
    $checkbox_5 = isset($_POST['Checkbox_5']) ? 'yes' : 'no';
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
</head>
<body>
    <h1>Submitted Data</h1>
    <p><strong>Form ID:</strong> <?php echo $form_id; ?></p>
    <p><strong>Form Title:</strong> <?php echo $form_title; ?></p>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <p><strong>Checkbox Consent:</strong> <?php echo $checkbox; ?></p>
    <p><strong>Checkbox Terms:</strong> <?php echo $checkbox_2; ?></p>
    <p><strong>Checkbox Non-refundable:</strong> <?php echo $checkbox_3; ?></p>
    <p><strong>Checkbox Rules:</strong> <?php echo $checkbox_4; ?></p>
    <p><strong>Checkbox Attendance:</strong> <?php echo $checkbox_5; ?></p>
</body>
</html>
