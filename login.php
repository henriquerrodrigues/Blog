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
    <title>Login</title>
</head>
<body>

    <main class="form-signin w-100 m-auto text-center mt-5">
        <form method="post"> 
            <strong class="h1 fw-bolder">Blog</strong>
            <h1 class="h3 mb-3 fw-normal">Entrar na conta</h1>
            <div class="form-floating"> 
                <input type="email" class="form-control" name="login" id="login" placeholder="name@example.com"> 
                <label for="login">Email</label> 
                <div id="msg-login" class="invalid-feedback">
                    
                </div>
            </div>
            <div class="form-floating"> 
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Password" required> 
                <label for="senha">Senha</label> 
                <div id="msg-senha" class="invalid-feedback">

                </div>
            </div>
            <div class="form-check text-start my-3"> <input class="form-check-input" type="checkbox" name="lembrar" value="Lembrar de mim"
                    id="checkDefault"> <label class="form-check-label" for="checkDefault">
                    Lembrar-me
                </label> 
            </div> 
        </form>
            <button class="btn btn-primary w-100 py-2" id="fazerLogin" name="fazerLogin" type="button">Fazer Login</button>
            <p class="mt-5 mb-3 text-body-secondary">
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
    </main>

    <?php include('componentes\footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        function validateEmail($email) {
            var emailReg = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
            return emailReg.test( $email );
            }

                $("#fazerLogin").click(function(){
                    var login = $("#login").val();
                    var senha = $("#senha").val();

                    if(login == "" || login==null){
                        $("#msg-login").html("Informe um email de login!");
                        $("#login").addClass('is-invalid');
                        $("#login").val('');
                        $("#login").focus();
                    }else
                    {
                        if( !validateEmail(login)){
                            $("#msg-login").html("Informe um email válido!");
                            $("#login").addClass('is-invalid');
                            $("#login").val('');
                            $("#login").focus();
                        }else
                        {
                            var emailok = "sim";
                        }
                    }

                    if(senha == "" || senha==null){
                        $("#msg-senha").html("Informe uma senha válida!");
                        $("#senha").addClass('is-invalid');
                        $("#senha").val('');
                        $("#senha").focus();
                    }else
                    {
                        var senhaok = "sim";
                    }

                    if(emailok == "sim" && senhaok == "sim"){
                        alert("tudo certo no formulário");
                    }
                });
    </script>
</body>
</html>