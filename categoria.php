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
    <title>Categoria</title>
</head>
<body>
    <!-- incluir nav bar --> 
    <?php include('componentes/navbar.php'); ?>

    <header>
        <div class="text-center p-4 p-md-5 mb-4  text-white bg-dark">
            <div class="col-lg-12 px-0">
                <h1 class="display-4 fw-bolder">Nome da Categoria</h1>
                <p class="lead my-3">Aqui vai uma descrição curta da categoria</p>
            </div>
        </div>
    </header>

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