<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="p-3 m-0 border-0 bd-example">
    <div class="container text-center">
        <form method="POST" action="">
            <div class="row">
                <h1>Calculadora Básica</h1>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="input-group mb-3">
                        <input type="text" name="num1" class="form-control" aria-label="Text input with dropdown button">
                        <select name="opciones" class="form-select" aria-label="Default select example">
                            <option selected>Operación</option>
                            <option value="1">Sumar</option>
                            <option value="2">Restar</option>
                            <option value="3">Multiplicar</option>
                            <option value="4">Dividir</option>
                        </select>
                        <input type="text" name="num2" class="form-control" aria-label="Text input with dropdown button">
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>

<?php

    class matematica {
        public static function sumar($n1, $n2){
            $suma = $n1 + $n2;
            return $suma;
        }

        public static function restar($n1, $n2){
            $restar = $n1 - $n2;
            return $restar;
        }

        public static function mul($n1, $n2){
            $mul = $n1 * $n2;
            return $mul;
        }

        public static function div($n1, $n2){
            $div = $n1 / $n2;
            return $div;
        }
    }

    if (isset($_REQUEST['calcular'])) {

        $n1 = $_REQUEST['num1'];
        $n2 = $_REQUEST['num2'];
        $op = $_REQUEST['opciones'];

        switch($op){
            case 1: echo "$n1 + $n2 = ".matematica::sumar($n1,$n2); break;
            case 2: echo "$n1 - $n2 = ".matematica::restar($n1,$n2); break;
            case 3: echo "$n1 * $n2 = ".matematica::mul($n1,$n2); break;
            case 4: echo "$n1 / $n2 = ".matematica::div($n1,$n2); break;
        }
    }

?>