<?php require "includes/header.php" ?>
<?php require "database/connection.php" ?>

<?php
$id = $_GET['Id'] ?? null;

if (!$id) {
    header('Location: /home');
    exit();
}

$query = $conn->prepare("SELECT * FROM autos WHERE Id = :id");
$query->bindParam(":id", $id);
$query->execute();
$car = $query->fetch(PDO::FETCH_ASSOC);

if (!$car) {
    header('Location: /home');
    exit();
}
?>

<main class="car-detail">
    <div class="grid">
        <div class="advertorial">
            <h2><?= htmlspecialchars($car['merk']) ?></h2>
            <p><?= htmlspecialchars($car['autotype']) ?></p>
            <img src="assets/images/products/<?= htmlspecialchars($car['afbeelding']) ?>" alt="<?= htmlspecialchars($car['merk']) ?>" class="car-main-image">
            <img src="assets/images/header-circle-background.svg" alt="" class="background-header-element">
        </div>
        <div class="row white-background">
            <h2><?= htmlspecialchars($car['merk']) ?></h2>
            <div class="rating">
                <span class="stars stars-4"></span>
                <span>440+ reviewers</span>
            </div>
            <p><?= htmlspecialchars($car['beschrijving']) ?></p>
            <div class="car-type">
                <div class="grid">
                    <div class="row">
                        <span class="accent-color">Type Car</span>
                        <span><?= htmlspecialchars($car['autotype']) ?></span>
                    </div>
                    <div class="row">
                        <span class="accent-color">Capacity</span>
                        <span><?= htmlspecialchars($car['capaciteit']) ?> personen</span>
                    </div>
                </div>
                <div class="grid">
                    <div class="row">
                        <span class="accent-color">Steering</span>
                        <span>Manual</span>
                    </div>
                    <div class="row">
                        <span class="accent-color">Gasoline</span>
                        <span><?= htmlspecialchars($car['benzine']) ?>L</span>
                    </div>
                </div>
                <div class="call-to-action">
                    <div class="row">
                        <span class="font-weight-bold">€<?= htmlspecialchars($car['prijs']) ?></span> / dag
                    </div>
                    <div class="row">
                        <a href="#" class="button-primary">Huur nu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require "includes/footer.php" ?>
