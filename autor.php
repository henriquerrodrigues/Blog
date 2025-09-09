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
    <title>Autor</title>
</head>
<body>
    <!-- incluir nav bar --> 
    <?php include('componentes/navbar.php'); ?>

    <main class = "container">
        <div class="row my-5 text-center">
            <div class ="col">
                <img width="100" height="100" class="object-fit-cover rounded-circle" src="https://s2.glbimg.com/qRXTtz5DNH4ne49_EhNkoq3JxBw=/e.glbimg.com/og/ed/f/original/2015/11/09/evolution.jpg">
                <h1>Nome do Caboclo</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur beatae et sint molestias sapiente quos eaque, similique illo earum. Fuga velit voluptatibus rerum, repudiandae soluta vel dolor necessitatibus nostrum! Corporis.
                Modi nisi, iure error voluptatum cupiditate laborum expedita, repellendus quam quas provident vitae nemo sint rerum nostrum repellat illum. Voluptatibus quod excepturi repellendus tempora maxime neque doloribus ab eos commodi?</p>
                <a href="#" class="btn btn-primary"><i class="mdi mdi-linkedin"></i> Linkedin</a>
                <a href="#" class="btn btn-danger"><i class="mdi mdi-instagram"></i> Instagram</a>
                <a href="#" class="btn btn-success"><i class="mdi mdi-github"></i> GitHub</a>
            </div>
        </div>
    </main>

    <?php include('componentes\footer.php') ?>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>