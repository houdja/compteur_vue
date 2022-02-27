<?php
require_once 'logic/authentification/connexiondb.php';
require_once 'logic/vues/updateVue.php';
$title = 'Accueil';
require_once 'component/header.php';
?>

<nav>
    <div class="container">
        <h1>Eyes</h1>
        <a href="screen/connexion.php">
            <span class="material-icons">
                login
            </span>
        </a>
    </div>
</nav>

<section class="description">
    <div class="container">
        <h1 class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
        <div class="pic"></div>
        <p class="descr_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem laboriosam debitis, officia aliquam a optio facere, sunt dolores quod maiores enim deserunt ea, ex vitae sed at reprehenderit ipsam mollitia rem reiciendis est dolorum perspiciatis saepe? Eligendi, modi corrupti quisquam, suscipit quas blanditiis maiores ad quod dignissimos debitis excepturi id ex non deserunt inventore, quidem veniam voluptates saepe porro ipsam harum vero iure. Cumque sequi, vitae expedita quisquam ex asperiores. Quos ipsam iure corrupti est beatae pariatur, id quidem officiis cupiditate ducimus explicabo incidunt quod distinctio exercitationem iusto accusamus nobis ut quo tempora maiores illo. Cumque quia et aspernatur vero!</p>
    </div>
</section>
<section class="section cards">
    <div class="container">
        <h1>Incidunt consectetur soluta est!</h1>
        <div class="contain-card">
            <div class="card">
                <img src="img/pic2.jpg" alt="ANIMALS">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti eligendi saepe inventore tempora dignissimos eaque veniam atque, maxime expedita, eum repudiandae dolorem odit sint totam sit quis dolorum laudantium nostrum.</p>
                <button class="button">
                    <p>Plus de détails</p>
                </button>
            </div>
            <div class="card">
                <img src="img/pic3.jpg" alt="ANIMALS">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti eligendi saepe inventore tempora dignissimos eaque veniam atque, maxime expedita, eum repudiandae dolorem odit sint totam sit quis dolorum laudantium nostrum.</p>
                <button class="button">
                    <p>Plus de détails</p>
                </button>
            </div>
            <div class="card">
                <img src="img/pic4.jpg" alt="ANIMALS">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti eligendi saepe inventore tempora dignissimos eaque veniam atque, maxime expedita, eum repudiandae dolorem odit sint totam sit quis dolorum laudantium nostrum.</p>
                <button class="button">
                    <p>Plus de détails</p>
                </button>
            </div>
        </div>
    </div>
</section>
<section class="section newsletter">
    <div class="container">
        <h1>Newsletter</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, amet eveniet. Eos dicta ab nemo iste voluptatibus? Obcaecati veritatis ea eum quo autem voluptates minima, consequuntur facilis? Blanditiis, beatae voluptates!</p>
        <form>
            <input type="text" placeholder="Nom">
            <input type="email" placeholder="Email">
            <button class='button'>
                <p>S'inscrire</p>
            </button>
        </form>
    </div>
</section>
<?php
require_once 'component/footer.php';
?>