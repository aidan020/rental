<?php require "includes/header.php" ?>
<?php require "database/connection.php" ?>

<?php
$where = [];
$params = [];

if (!empty($_GET['merk'])) {
    $where[] = "merk = :merk";
    $params[':merk'] = $_GET['merk'];
}

if (!empty($_GET['capaciteit'])) {
    $where[] = "capaciteit = :capaciteit";
    $params[':capaciteit'] = $_GET['capaciteit'];
}

if (!empty($_GET['prijs'])) {
    $where[] = "prijs <= :prijs";
    $params[':prijs'] = $_GET['prijs'];
}

$sql = "SELECT * FROM autos";
if (!empty($where)) {
    $sql .= " WHERE " . implode(" AND ", $where);
}

$query = $conn->prepare($sql);
foreach ($params as $key => $value) {
    $query->bindValue($key, $value);
}
$query->execute();
$autos = $query->fetchAll(PDO::FETCH_ASSOC);

$merken = $conn->query("SELECT DISTINCT merk FROM autos ORDER BY merk")->fetchAll(PDO::FETCH_COLUMN);
$capaciteiten = $conn->query("SELECT DISTINCT capaciteit FROM autos ORDER BY capaciteit")->fetchAll(PDO::FETCH_COLUMN);
?>

<main>
    <h2 class="section-title">Ons aanbod</h2>

    <div class="aanbod-layout">

        <form class="filter-sidebar" method="GET" action="/ons-aanbod">

            <h3>Filteren</h3>

            <div class="filter-group">
                <label for="merk">Automerk</label>
                <select name="merk" id="merk">
                    <option value="">Alle merken</option>
                    <?php foreach ($merken as $merk): ?>
                        <option value="<?= htmlspecialchars($merk) ?>" <?= (isset($_GET['merk']) && $_GET['merk'] === $merk) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($merk) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="filter-group">
                <label for="capaciteit">Aantal personen</label>
                <select name="capaciteit" id="capaciteit">
                    <option value="">Alle capaciteiten</option>
                    <?php foreach ($capaciteiten as $cap): ?>
                        <option value="<?= htmlspecialchars($cap) ?>" <?= (isset($_GET['capaciteit']) && $_GET['capaciteit'] == $cap) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($cap) ?> personen
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="filter-group">
                <label for="prijs">Max prijs per dag: €<span id="prijs-waarde"><?= isset($_GET['prijs']) ? $_GET['prijs'] : 2500 ?></span></label>
                <input type="range" name="prijs" id="prijs" min="0" max="2500" value="<?= isset($_GET['prijs']) ? $_GET['prijs'] : 2500 ?>" oninput="document.getElementById('prijs-waarde').textContent = this.value">
            </div>

            <button type="submit" class="button-primary">Filteren</button>

            <?php if (!empty($_GET)): ?>
                <a href="/ons-aanbod" class="filter-reset">Reset filters</a>
            <?php endif; ?>

        </form>

        <div class="aanbod-cars">
            <?php if (empty($autos)): ?>
                <p class="geen-resultaten">Geen auto's gevonden met deze filters.</p>
            <?php else: ?>
                <div class="cars">
                    <?php foreach ($autos as $car): ?>
                        <div class="car-details">
                            <div class="car-brand">
                                <h3><?= htmlspecialchars($car['merk']) ?></h3>
                                <div class="car-type"><?= htmlspecialchars($car['autotype']) ?></div>
                            </div>

                            <img src="assets/images/products/<?= htmlspecialchars($car['afbeelding']) ?>" alt="">

                            <div class="car-specification">
                                <span><img src="assets/images/icons/gas-station.svg" alt=""><?= htmlspecialchars($car['benzine']) ?></span>
                                <span><img src="assets/images/icons/profile-2user.svg" alt=""><?= htmlspecialchars($car['capaciteit']) ?></span>
                            </div>

                            <div class="rent-details">
                                <span><span class="font-weight-bold">€<?= htmlspecialchars($car['prijs']) ?></span> / dag</span>
                                <a href="/car-detail?Id=<?= (int)$car['Id'] ?>" class="button-primary">Bekijk nu</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php require "includes/footer.php" ?>
