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
    redirectUser($response, $email);
};

?>

<!-- head html -->
<?php include_once __DIR__ . "./views/head.php" ?>

<!-- header -->
<header id="site_header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar w/ text</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Navbar text with an inline element
                </span>
            </div>
        </div>
    </nav>
</header>

<main id="site_main">
    <section id="news">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">

                    <!-- single card news -->
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>

                <div class="col">

                    <!-- single card news -->
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
                <div class="col">

                    <!-- single card news -->
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
                <div class="col">

                    <!-- single card news -->
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </section>

    <section id="subscribe">
        <div class="container">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelper" placeholder="Scrivi email" value="<?php echo $email ?>" />
                    <small id="emailHelper" class="form-text text-muted">Scrivi la tua email</small>
                </div>

                <button class="btn btn-primary" type="submit">Iscriviti</button>

            </form>
        </div>

    </section>

    <!-- alert if message exists -->
    <?php if (isset($message)) : ?>
        <div class="alert <?php echo $message["class"] ?>" role="alert">
            <strong>Alert</strong>
            <span><?php echo $message["message"] ?></span>
        </div>
    <?php endif; ?>

</main>

<footer id="site_footer" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li><a href="">Lorem, ipsum dolor.</a></li>
                    <li><a href="">Illo, est libero.</a></li>
                    <li><a href="">Voluptatum, laborum veniam?</a></li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li><a href="">Lorem, ipsum dolor.</a></li>
                    <li><a href="">Illo, est libero.</a></li>
                    <li><a href="">Voluptatum, laborum veniam?</a></li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li><a href="">Lorem, ipsum dolor.</a></li>
                    <li><a href="">Illo, est libero.</a></li>
                    <li><a href="">Voluptatum, laborum veniam?</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- foot html -->
<?php include_once __DIR__ . "./views/foot.php" ?>