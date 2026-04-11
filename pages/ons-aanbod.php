<?php require "includes/header.php"; ?>
<img scr="/assets/images/team/brian-mensah.png">

<style>
    .team-sub {
  font-size: 16px;
  color: #555;
  line-height: 1.7;
  margin-bottom: 2rem;
}

.team-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.5rem;
}

.card {
  border: 1px solid #e5e5e5;
  border-radius: 12px;
  overflow: hidden;
}

.card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  object-position: top;
  display: block;
}

.card-body { padding: 1rem; }
.card-name { font-size: 15px; font-weight: 500; margin-bottom: 2px; }
.card-role { font-size: 12px; color: #888; text-transform: uppercase; letter-spacing: 0.04em; margin-bottom: 0.75rem; }
.card-quote { font-size: 14px; color: #555; line-height: 1.6; border-left: 2px solid #ddd; padding-left: 0.75rem; }

@media (max-width: 768px) { .team-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 480px) { .team-grid { grid-template-columns: 1fr; } }
  * { box-sizing: border-box; margin: 0; padding: 0; }

  main {
    max-width: 1100px;
    margin: 0 auto;
    padding: 2rem 1.5rem;
    font-family: sans-serif;
  }

  .banner {
    width: 100%;
    height: 340px;
    object-fit: cover;
    border-radius: 12px;
    display: block;
  }

  .section-title {
    font-size: 22px;
    font-weight: 500;
    margin: 2.5rem 0 1rem;
  }

  .divider {
    border: none;
    border-top: 1px solid #e5e5e5;
    margin-bottom: 2rem;
  }

  .grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: center;
  }

  .grid p {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
  }

  .grid p + p {
    margin-top: 1rem;
  }

  .workplace {
    width: 100%;
    height: 280px;
    object-fit: cover;
    border-radius: 12px;
    display: block;
  }

  @media (max-width: 680px) {
    .grid { grid-template-columns: 1fr; gap: 1.5rem; }
    .banner { height: 200px; }
  }
</style>

<main>
    <img class="banner" src="/assets/images/banner.jpeg" alt="Banner">

    <h2 class="section-title">Over Rydr.</h2>
    <hr class="divider">

    <div class="grid">
        <div>
            <p>
                Ons hoofdkantoor bevindt zich in het bruisende hart van Rotterdam, direct naast het Centraal Station.
                Hier combineren we technologie, design en klantgerichtheid onder één dak.
            </p>
            <p>
                In een modern pand met uitzicht op de skyline werken we elke dag aan de mobiliteit van morgen.
                Loop je een keer binnen? De koffie staat klaar.
            </p>
        </div>

        <div>
            <img class="workplace" src="/assets/images/work-place.png" alt="Werkplek">
        </div>
    </div>
</main>

<!-- Team sectie -->
<section class="team-section">
  <h2 class="section-title">Ons team.</h2>
  <p class="team-sub">
    Achter Rydr zit een gedreven team dat elke dag werkt aan slimmere mobiliteit.
    Mensen met passie, kennis en een gezonde dosis Rotterdamse nuchterheid.
  </p>
  <hr class="divider">

  <div class="team-grid">

    <div class="card">
      <img src="/../assets/images/team/brian-mensah.png" alt="Jordan de Vries">
      <div class="card-body">
        <p class="card-name">youssef amrani</p>
        <p class="card-role">Head of Product</p>
        <p class="card-quote">"Bij Rydr bouwen we niet zomaar een app — we herdefiniëren hoe de stad beweegt."</p>
      </div>
    </div>

    <div class="card">
      <img src="/../assets/images/team/jasper-van-den-brink.png" alt="jasper-van-den-brink">
      <div class="card-body">
        <p class="card-name">jasper van den brink</p>
        <p class="card-role">CEO & Co-founder</p>
        <p class="card-quote">"Rotterdam is de perfecte plek om iets nieuws te bouwen. De energie hier is ongeëvenaard."</p>
      </div>
    </div>

    <div class="card">
      <img src="/../assets/images/team/lotte-de-graaf.png" alt="Lisa van den Berg">
      <div class="card-body">
        <p class="card-name">lotte de graaf</p>
        <p class="card-role">Lead Designer</p>
        <p class="card-quote">"Goed design merk je niet — het voelt gewoon logisch. Dat is waar ik elke dag voor ga."</p>
      </div>
    </div>

    <div class="card">
      <img src="/../assets/images/team/youssef-amrani.png" alt="Karim Essaidi">
      <div class="card-body">
        <p class="card-name">Brian-mensah</p>
        <p class="card-role">Tech Lead</p>
        <p class="card-quote">"De technologie achter Rydr is schaalbaar, snel en gebouwd om mee te groeien met de stad."</p>
      </div>
    </div>

  </div>
</section>
<?php require "includes/footer.php"; ?>
