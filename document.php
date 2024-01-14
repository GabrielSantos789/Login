<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário e aplicar validações básicas
    $username = trim($_POST["user"]);
    $email = trim($_POST["mail"]);
    $password = trim($_POST["pass"]);

    // Validar se os campos obrigatórios foram preenchidos
    if (empty($username) || empty($email) || empty($password)) {
        echo "<div class='form-container'>";
        echo "<h1>Login</h1>";
        echo "<div class='form-main-content'>";
        echo "<p class='error'>Todos os campos são obrigatórios. Por favor, preencha todos os campos.</p>";
        echo "</div>";
        echo "</div>";
    } else {
        // Exibir os dados recebidos
        echo "<div class='form-container'>";
        echo "<h1>Form Submission Result</h1>";
        echo "<div class='form-main-content'>";
        echo "<p>Username: $username</p>";
        echo "<p>Email: $email</p>";
        // Não é uma prática segura exibir senhas, isso é apenas para fins ilustrativos
        echo "<p>Password: $password</p>";
        echo "</div>";
        echo "</div>";
    }
} else {
    // Redirecionar se o formulário não foi enviado
    header("Location: index.html");
    exit();
}
?>
