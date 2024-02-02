<!-- rappel du contenu "header" en PHP -->
<?php require('header.php'); ?>

<div class="row g-0 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
    <div class="col">
        <img src="assets/img/gallery/visuel/visuel_3.jpg" class="w-100 img-fluid" alt="banner-contact">
    </div>
</div>

<section>
    <div class="p-5">
        <h3 class="fonc text-center ">LE TRAINING FONCTIONNEL</h3>
        <img class="rounded mx-auto d-block" src="assets/img/icons/bg_titre.jpg " alt="">
    </div>

    <div class="container">
        <div class="row align-items-start row-cols-sm-1 row-cols-md-1 row-cols-lg-2">
            <div class="col p-2">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
                    recusandae sin
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem harum
                    sapiente quidem eum inventore magni, voluptatum omnis vitae atque
                    commodi?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias,
                    nesciunt fugiat! Nesciunt quisquam quas illum?
                </p>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn text-light btn1" type="button">
                        VOIR NOS OFFRES<br>ET FORMULES
                    </button>
                    <button class="btn text-light bd-highlight btn1" type="button">
                        CONTACT<br>ET RESERVATIONS
                    </button>
                </div>
            </div>
            <div class="col p-2">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/gallery/bg_temoignage.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/gallery/news-defaut.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/gallery/image_map.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- SECTION INFO -->


<!-- EXO EXEMPLE -->
<section>
    <div class="d-flex justify-content-center align-items-center flex-column p-5">
        <h6 class="fs-4 fw-bold text-uppercase">les ateliers présents dans le training fonctionnel</h6>
        <img src="assets/img/icons/bg_titre.jpg" alt="">
    </div>
</section>

<div class="container-fluid p-5">
    <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-5">
        <div class="col">
            <div class="card border-white">
                <img src="assets/img/gallery/training/image-actu-TRX.jpg" class="img-fluid w-100" alt="TRX CORE">
                <div class="card-body">
                    <h5 class="card-title fw-bold">TRX CORE</h5>
                    <p class="card-text">Ce cours a pour but d'améliorer votre force fonctionelle ainsi que
                        votre
                        mobilité à l'aide de sangles en suspension.<br>
                        L'accent est mis sur le CORE ( centre du corps ) afin d'obtenir un gainage, une sangle
                        abdominable résistante à toute épreuve et un renforcement musculaire.<br>
                        En compléments, des automassages et des exercices de mobilité et d'étirements sont
                        également
                        présents dans ce cours.</p>
                    <div>
                        <p><span class="fw-bold">Durée :</span> 45 minutes</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-white">
                <img src="assets/img/gallery/training/image-actu-boxe.jpg" class="img-fluid w-100" alt="boxe">
                <div class="card-body">
                    <h5 class="card-title fw-bold">BOXE</h5>
                    <p class="card-text">Ici un seul mot d'ordre : se défouler!<br>
                        Mélange de naraté, de boxe, de kick bocking et de MMA, le cours se déroule face a un sac
                        de
                        frappe, gants aux poings et accompagné de petits matériels :
                        corde à sauté, slam ball...<br>
                        L'objectif ici est d'améliorer vos qualités de résistance à l'effort, de vitesse, de
                        coordinaton et d'agilité.</p>
                    <div>
                        <p><span class="fw-bold">Durée :</span> 30 minutes</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-white">
                <img src="assets/img/gallery/training/image-actu-hiit.jpg" class="img-fluid w-100" alt="hiit">
                <div class="card-body">
                    <h5 class="card-title fw-bold">HIIT</h5>
                    <p class="card-text">Le HIIT est l'acrinyme de High Itensity Interval training en
                        anglais.<br>
                        Cet entrainement à haut intensité réalisé avec le poids du corps, alterne période de
                        récupération active, dans le but de bruler un maximum de calories.</p>
                    <div>
                        <p><span class="fw-bold">Durée :</span> 30 minutes</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-white">
                <img src="assets/img/gallery/training/image-actu-fusion.jpg" class="img-fluid w-100" alt="TRX fusion">
                <div class="card-body">
                    <h5 class="card-title fw-bold">TRX FUSION</h5>
                    <p class="card-text">Un excellent programme pour travailler l'ensemblre du corps et
                        transpirer à
                        grosses gouttes. Grâce à des exercices d'une intensité
                        allant de modérée à forte, vous allez sculpter et tonifier votre corps tout en perdant
                        du
                        poids.<br>
                        Un bon compromis entre renforcement musculaire et cardio.<br>
                        Dans cet atlier, vous utiliserez des sangles de TRX et accessoires comme le Kettlebell,
                        Slamball ou le ViPR.
                        Votre mental et votre systèpe cardio-vasculaire seront mis à rudes épreuves!
                    </p>
                    <div>
                        <p><span class="fw-bold">Durée :</span> 30 minutes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- rappel du contenu "footer" en PHP -->
<?php require('footer.php'); ?>