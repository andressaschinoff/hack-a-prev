<?php include 'includes/header.php'; ?>

<!-- Navigation -->
<?php include 'includes/navegation.php'; ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col m6 s12">
            <img src="" alt="" />
            <h1>Colocar uma foto bacana</h1>
        </div>
        <div class="col m6 s12">
            <div class="well">
                <h4>Login</h4>
                <form>
                    <div class="input-field col s12">
                        <input name="username" id="username" type="text" class="validate">
                        <label for="username">Username</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="password" id="password" type="password" class="validate">
                        <label for="password">Senha</label>
                    </div>
                    <div class="input-field col s12">
                        <span class="input-group-btn">
                            <a href="./user/index.php" class="btn waves-effect waves-light" name="login" type="submit">Entrar</a>
                        </span>
                        <span class="input-group-btn">
                            <a href="registration.php" class="btn waves-effect waves-light">Registrar</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <?php include 'includes/footer.php' ?>