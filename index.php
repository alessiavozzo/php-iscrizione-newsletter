<?php

session_start();


require_once __DIR__ . "/helpers/functions.php";

$email = $_POST["email"];

//se $email è definita, allora devo controllare se l'email è valida
//se l'email è valida, deve restituirmi un msg, se non è valida deve restituirmene un altro 
if (isset($email)) {
    $response = checkValidEmail($email);
    $message = getAlertMsg($response);

    //altri file devono avere accesso a message: lo salvo nella super globale session
    $_SESSION["message"] = $message;

    //reindirizzo l'utente
    redirectUser($response);
};

?>

<!-- html -->
<?php

include_once __DIR__ . "./views/head.php";
include_once __DIR__ . "./views/header.php";

?>



<main id="site_main" class="bg-secondary py-3">

    <!-- news examples -->
    <section id="news" class="my-4">
        <div class="container">

            <!-- cards -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-4">
                <div class="col">

                    <!-- single card news -->
                    <div class="card">
                        <img src="https://picsum.photos/300/200" class="card-img-top" alt="news-image">
                        <div class="card-body  d-flex flex-column">
                            <h5 class="card-title text-center">News 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus ipsa aperiam iure eos molestiae voluptate sed porro molestias itaque fuga.</p>
                            <a href="#" class="btn btn-primary text-center">Clicca qui per leggere di più</a>
                        </div>
                    </div>

                </div>

                <div class="col">

                    <!-- single card news -->
                    <div class="card">
                        <img src="https://picsum.photos/300/200" class="card-img-top" alt="news-image">
                        <div class="card-body  d-flex flex-column">
                            <h5 class="card-title text-center">News 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus ipsa aperiam iure eos molestiae voluptate sed porro molestias itaque fuga.</p>
                            <a href="#" class="btn btn-primary text-center">Clicca qui per leggere di più</a>
                        </div>
                    </div>

                </div>

                <div class="col">

                    <!-- single card news -->
                    <div class="card">
                        <img src="https://picsum.photos/300/200" class="card-img-top" alt="news-image">
                        <div class="card-body  d-flex flex-column">
                            <h5 class="card-title text-center">News 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus ipsa aperiam iure eos molestiae voluptate sed porro molestias itaque fuga.</p>
                            <a href="#" class="btn btn-primary text-center">Clicca qui per leggere di più</a>
                        </div>
                    </div>

                </div>

                <div class="col">

                    <!-- single card news -->
                    <div class="card">
                        <img src="https://picsum.photos/300/200" class="card-img-top" alt="news-image">
                        <div class="card-body  d-flex flex-column">
                            <h5 class="card-title text-center">News 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus ipsa aperiam iure eos molestiae voluptate sed porro molestias itaque fuga.</p>
                            <a href="#" class="btn btn-primary text-center">Clicca qui per leggere di più</a>
                        </div>
                    </div>

                </div>

                <div class="col">

                    <!-- single card news -->
                    <div class="card">
                        <img src="https://picsum.photos/300/200" class="card-img-top" alt="news-image">
                        <div class="card-body  d-flex flex-column">
                            <h5 class="card-title text-center">News 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus ipsa aperiam iure eos molestiae voluptate sed porro molestias itaque fuga.</p>
                            <a href="#" class="btn btn-primary text-center">Clicca qui per leggere di più</a>
                        </div>
                    </div>

                </div>

                <div class="col">

                    <!-- single card news -->
                    <div class="card">
                        <img src="https://picsum.photos/300/200" class="card-img-top" alt="news-image">
                        <div class="card-body  d-flex flex-column">
                            <h5 class="card-title text-center">News 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus ipsa aperiam iure eos molestiae voluptate sed porro molestias itaque fuga.</p>
                            <a href="#" class="btn btn-primary text-center">Clicca qui per leggere di più</a>
                        </div>
                    </div>

                </div>




            </div>
        </div>
    </section>

    <!-- subscribe here -->
    <section id="subscribe" class="bg-light mx-4 p-4 rounded">
        <div class="container">
            <h1 class="text-center">Iscriviti</h1>
            <!-- form -->
            <form action="" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Scrivi la tua email:</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelper" placeholder="email@email.it" value="<?php echo $email ?>" />
                </div>

                <button class="btn btn-outline-primary" type="submit">Iscriviti</button>

            </form>
        </div>
    </section>

    <?php
    include_once __DIR__ . "./views/alert.php";;
    ?>

</main>

<?php
include_once __DIR__ . "./views/footer.php";
include_once __DIR__ . "./views/foot.php";
?>