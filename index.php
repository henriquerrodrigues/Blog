<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <title>Blog</title>
</head>
<body>
    <!-- incluir nav bar --> 
    <?php include('componentes/navbar.php'); ?>

    <!-- inicio carousel --> 
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators"> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0"
                class="active" aria-label="Slide 1" aria-current="true"></button> <button type="button"
                data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button> <button
                type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:linear-gradient(0deg, rgba(0,0,0,0.7), rgba(0,0,0,0.9) ), url('https://www.cimentoitambe.com.br/wp-content/uploads/2023/12/faq-institucionais-uai-1000x428.jpg');"> 
                <div class="container">
                    <div class="carousel-caption text-center">
                        <h1>Example headline.</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.
                        </p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image:linear-gradient(0deg, rgba(0,0,0,0.7), rgba(0,0,0,0.9) ), url('https://www.cimentoitambe.com.br/wp-content/uploads/2023/12/faq-institucionais-uai-1000x428.jpg');"> 
                <div class="container">
                    <div class="carousel-caption text-center">
                        <h1>Example headline.</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.
                        </p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image:linear-gradient(0deg, rgba(0,0,0,0.7), rgba(0,0,0,0.9) ), url('https://www.cimentoitambe.com.br/wp-content/uploads/2023/12/faq-institucionais-uai-1000x428.jpg');"> 
                <div class="container">
                    <div class="carousel-caption text-center">
                        <h1>Example headline.</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.
                        </p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
        </div> <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev"> <span
                class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span>
        </button> <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- fim carousel -->

    <main class = "container">
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static"> <strong
                            class="d-inline-block mb-2 text-primary-emphasis">World</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-body-secondary">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p> <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#chevron-right"></use>
                            </svg> </a>
                    </div>
                    <div class="col-auto d-none d-lg-block"> 
                        <img src="https://www.cimentoitambe.com.br/wp-content/uploads/2023/12/faq-institucionais-uai-1000x428.jpg" width="200" height="250" class ="img-destaque-post">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static"> <strong
                            class="d-inline-block mb-2 text-success-emphasis">Design</strong>
                        <h3 class="mb-0">Post title</h3>
                        <div class="mb-1 text-body-secondary">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional
                            content.</p> <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#chevron-right"></use>
                            </svg> </a>
                    </div>
                    <div class="col-auto d-none d-lg-block"> 
                       <img src="https://www.cimentoitambe.com.br/wp-content/uploads/2023/12/faq-institucionais-uai-1000x428.jpg" width="200" height="250" class ="img-destaque-post">
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM DOS DESTAQUES -->

        <!-- INICIO POSTS -->
        <div class="row mb-5 row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col mt-5">
                <div class="card shadow-sm"> 
                    <img src="https://www.cimentoitambe.com.br/wp-content/uploads/2023/12/faq-institucionais-uai-1000x428.jpg" class="img-fluid">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                            content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary btn-lg stretched-link">Leia o artigo</a>
                            <small ><a href="#" class="badge bg-primary text-white">Categoria</a></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card shadow-sm"> 
                    <img src="https://www.cimentoitambe.com.br/wp-content/uploads/2023/12/faq-institucionais-uai-1000x428.jpg" class="img-fluid">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                            content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary btn-lg stretched-link">Leia o artigo</a>
                            <small ><a href="#" class="badge bg-primary text-white">Categoria</a></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card shadow-sm"> 
                    <img src="https://www.cimentoitambe.com.br/wp-content/uploads/2023/12/faq-institucionais-uai-1000x428.jpg" class="img-fluid">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                            content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary btn-lg stretched-link">Leia o artigo</a>
                            <small ><a href="#" class="badge bg-primary text-white">Categoria</a></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card shadow-sm"> 
                    <img src="https://www.cimentoitambe.com.br/wp-content/uploads/2023/12/faq-institucionais-uai-1000x428.jpg" class="img-fluid">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                            content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary btn-lg stretched-link">Leia o artigo</a>
                            <small ><a href="#" class="badge bg-primary text-white">Categoria</a></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card shadow-sm"> 
                    <img src="https://www.cimentoitambe.com.br/wp-content/uploads/2023/12/faq-institucionais-uai-1000x428.jpg" class="img-fluid">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                            content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary btn-lg stretched-link">Leia o artigo</a>
                            <small ><a href="#" class="badge bg-primary text-white">Categoria</a></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card shadow-sm"> 
                    <img src="https://www.cimentoitambe.com.br/wp-content/uploads/2023/12/faq-institucionais-uai-1000x428.jpg" class="img-fluid">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                            content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary btn-lg stretched-link">Leia o artigo</a>
                            <small ><a href="#" class="badge bg-primary text-white">Categoria</a></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card shadow-sm"> 
                    <img src="https://www.cimentoitambe.com.br/wp-content/uploads/2023/12/faq-institucionais-uai-1000x428.jpg" class="img-fluid">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                            content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary btn-lg stretched-link">Leia o artigo</a>
                            <small ><a href="#" class="badge bg-primary text-white">Categoria</a></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card shadow-sm"> 
                    <img src="https://www.cimentoitambe.com.br/wp-content/uploads/2023/12/faq-institucionais-uai-1000x428.jpg" class="img-fluid">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                            content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary btn-lg stretched-link">Leia o artigo</a>
                            <small ><a href="#" class="badge bg-primary text-white">Categoria</a></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card shadow-sm"> 
                    <img src="https://www.cimentoitambe.com.br/wp-content/uploads/2023/12/faq-institucionais-uai-1000x428.jpg" class="img-fluid">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                            content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary btn-lg stretched-link">Leia o artigo</a>
                            <small ><a href="#" class="badge bg-primary text-white">Categoria</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TERMINA POSTS -->

        <div class="row my-5">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="d-grid gap-2">
                    <button id="maisPosts" class="btn btn-primary" type="button">Ver mais postagens</button>
                </div>
            </div>
            <div class="col-3"></div>

        </div>
    </main>
    
    <?php include('componentes\footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>