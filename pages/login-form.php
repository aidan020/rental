<?php require "includes/header.php" ?>
<?php require "database/connection.php" ?>
<main>
    <form action="/login-handler" class="account-form" method="post">
        <h2>Log in</h2>
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="succes-message"><?= $_SESSION['success'] ?></div>
        <?php } ?>
        <label for="Email">Uw e-mail</label>
        <input type="Email" name="Email" id="Email" placeholder="johndoe@gmail.com" value="<?= isset($_SESSION['Email']) ? htmlspecialchars($_SESSION['Email']) : '' ?>" required autofocus>
        <label for="password">Uw wachtwoord</label>
    <input type="password" name="password" d="password" placeholder="Uw wachtwoord" required>
        <input type="submit" value="Log in" class="button-primary">
    </form>
</main>
 
<?php require "includes/footer.php" ?>
