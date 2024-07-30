<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    // Проверяем, что согласие на обработку данных было дано
    if (isset($_POST['consent'])) {
        echo "<h2>Спасибо за регистрацию!</h2>";
        echo "<p>Ваши данные:</p>";
        echo "<ul>";
        echo "<li>Имя: " . $name . "</li>";
        echo "<li>Email: " . $email . "</li>";
        echo "<li>Телефон: " . $phone . "</li>";
        echo "</ul>";
    } else {
        echo "<h2>Ошибка</h2>";
        echo "<p>Вы не дали согласие на обработку персональных данных.</p>";
    }
} else {
    echo "<h2>Ошибка</h2>";
    echo "<p>Неверный метод запроса.</p>";
}
?>
