<?php include "includes/header.php"; ?>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    if (!empty($username) && !empty($password) && !empty($email) && !empty($firstname) && !empty($lastname)) {
        $message = "Seu registro foi completado";
    } else {
        $message = "Você não pode deixar o campo em branco!";
    }
} else {
    $message = "";
}
?>


<!-- Navigation -->

<?php include "includes/navegation.php"; ?>

<!-- Page Content -->
<section id="login">
    <div class="container">
        <div class="row">
            <h1>Registro</h1>
            <h6 class="text-center"><?php echo $message; ?></h6>
            <form class="col s12" action="registration.php" method="POST" id="login-form">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="username" id="username" type="text" class="validate">
                        <label for="username">Username</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="firstname" id="firstname" type="text" class="validate">
                        <label for="firstname">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="lastname" id="lastname" type="text" class="validate">
                        <label for="lastname">Sobrenome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="password" id="password" type="password" class="validate">
                        <label for="password">Senha</label>
                    </div>
                </div>
                <input value="Enviar" name="submit" type="submit" class="waves-effect waves-light btn">
            </form>
        </div>
    </div>
</section>


<hr>



<?php include "includes/footer.php"; ?>