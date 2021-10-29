<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>TOP 10 Lists</title>
</head>
<body>
    <div class="container jumbotron">

        <div class="row bg-info">
            <div class="col-md-7">
                <strong>10 TOP Lists</strong>
            </div>
            <div class="col-md-5">
                <p>
                    <strong>Faça suas listas "TOP 10"!!!</strong>
                </p>
                <p>
                    <strong>Compartilhe com seus amigos!</strong>
                </p>
            </div>
        </div> <!-- div row bg-info 1-->

        <div class="row bg-info">

            <div class="col-md-10">
                <a class="btn btn-dark" href="/" role="button">HOME</a>
            </div>

            <div class="col-md-1">
            <a class="btn btn-dark" href="/cadastrar" role="button">Cadastrar</a>
            </div>

            <div class="col-md-1">
                <a class="btn btn-dark" href="logar.html" role="button">Entrar</a>
            </div>

        </div> <!-- div row bg-info 2-->

        <div>
            @yield('content')
        </div>
        
    </div> <!-- fim container -->



      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </scrip> 
    

</body>
</html>