<?php require "includes/header.php" ?>
<?php require "database/connection.php" ?>
<main>
    <form action="/login-handler" class="account-form" method="post">
        <h2>Log in</h2>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="message"><?= htmlspecialchars($_SESSION['message']) ?></div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="succes-message"><?= htmlspecialchars($_SESSION['success']) ?></div>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>

        <label for="Email">Uw e-mail</label>
        <input type="email" name="Email" id="Email" placeholder="johndoe@gmail.com" required autofocus>

        <label for="password">Uw wachtwoord</label>
        <input type="password" name="password" id="password" placeholder="Uw wachtwoord" required>

        <input type="submit" value="Log in" class="button-primary">

        <p>Nog geen account? <a href="/register-form">Registreren</a></p>
    </form>
</main>

<?php require "includes/footer.php" ?>
