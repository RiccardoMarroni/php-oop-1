<?php 
    include __DIR__."/Views/header.php";
    include __DIR__."/Models/Movie.php";

    $movies = [
        new Movie ('Harry Potter', 'en', 5, "immagine di copertina"),
        new Movie ('Ironman', 'en', 5, "immagine di copertina"),
        new Movie ('Thor', 'en', 5, "immagine di copertina")
    ]
?>
<main class="container">
    <section>
        <h2>Movies</h2>
        <div class="row">
            <?php foreach ($movies as $movie){?>
                <div class="col-12 col-md-4 col-lg-3">
                <div class="card" >
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><?php $movie->name ?></h5>
                        <p class="card-text">descrizione dei film.</p>
                        <p><?php $movie->value ?></p>
                    </div>
                    </div>
                </div>
            <?php } ?>   
        </div>
    </section>

</main>


<?php 
include __DIR__."/Views/footer.php"; 
?> 