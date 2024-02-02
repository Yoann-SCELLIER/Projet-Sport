<?php

$articles = [
    [
        "image" => "assets/img/gallery/actu/image-actu-nutrition.jpg",
        "date" => "28 OCTOBRE",
        "titre" => "CONSEILLE NUTRITION",
        "paragraphe" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo error
        cupiditate rerum quod, earum aspernatur numquam ut, similique ab hic sint optio vel fugit explicabo adipisci consectetur suscipit esse unde!",
        "lire" => "LIRE LA SUITE"
    ],

    [
        "image" => "assets/img/gallery/actu/image-actu-membres.jpg",
        "date" => "22 OCTOBRE",
        "titre" => "NOS MEMBRES STAFF",
        "paragraphe" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo error
    cupiditate rerum quod, earum aspernatur, numquam ut, similique ab hic sint optio vel fugit explicabo adipisci consectetur suscipit esse unde!",
        "lire" => "LIRE LA SUITE"
    ],


    [
        "image" => "assets/img/gallery/actu/image-actu-phone.jpg",
        "date" => "19 OCTOBRE",
        "titre" => "LES ACTU'S",
        "paragraphe" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo error
        cupiditate rerum quod, earum aspernatur, numquam ut, similique ab hic sint optio vel fugit explicabo adipisci consectetur suscipit esse unde!",
        "lire" => "LIRE LA SUITE"
    ]
];

foreach ($articles as $article) : ?>

    <div class="col p-lg-5">
        <div class="card border-white">
            <img src=<?php echo $article["image"]; ?> class="img-fluid w-100" alt="nutrtion">
            <div class="card-footer">
                <small class="text-body-secondary d-flex justify-content-center align-items-center fw-bold"><?php echo $article["date"]; ?></small>
            </div>
            <div class="card-body ">
                <div></div>
                <h5 class="card-title fw-bold"><?php echo $article["titre"]; ?></h5>
                <p class="card-text"><?php echo $article["paragraphe"]; ?></p>

                <div class=" plus-hr w-45"><a class="row flex-column align-items-start mx-auto text-decoration-none fw-bold w-100 text-dark" href="404.html" target="_blank"><?php echo $article["lire"]; ?></a>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>