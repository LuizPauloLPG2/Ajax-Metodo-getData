<!DOCTYPE html>
<html>
    <head>
        <title>AJAX</title>
    </head>
    <body>
        <h1>AJAX</h1>
        <button type="button" id="sendMessage">ENVIAR</button>
        <br>
        <div id="popula">

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="index.js"></script>
    </body>
</html>















<?php
//class ModelCliente
//{
//
//    public static function allClientes()
//    {
//        try {
//            $sql = Db::_conexao()->query("select * from tbcliente")->fetchAll(PDO::FETCH_ASSOC);
//        } catch (Exception $e) {
//            echo $e->getMessage();
//        }
//        return $sql;
//    }
//
//}
//
//abstract class Model_All
//{
//
//    protected $nome;
//
//}
//
//abstract class Model_Implementa extends Model_All
//{
//
//    abstract function calculaValor($num1, $num2);
//}
//
//class Model_Calca extends Model_Implementa
//{
//
//    public function calculaValor($num1, $num2)
//    {
//        $pi = 3.14;
//        $valor = (($num1 + $num2) * 2) * $pi;
//        return $valor;
//    }
//
//}
//
//class Model_Resultado
//{
//
//    protected $valor;
//
//    public function setValor($valor)
//    {
//        return $this->valor = $valor;
//    }
//
//    public function getValor()
//    {
//        return $this->valor;
//    }
//
//    public function mostraValor()
//    {
//        $valor = Model_Calca::calculaValor(10, 20);
//        return $valor;
//    }
//
//}
//
//class Model_Studing
//{
//
//    public static function studing()
//    {
//        try {
//            $stmt = Db::_conexao()->query("select * from tbcliente")->fetchAll(PDO::FETCH_ASSOC);
//        } catch (Exception $e) {
//            echo $e->getMessage();
//        }
//        return $stmt;
//    }
//
//}
//
//$pr = array(
//    [
//        "produto" => "notebook"
//    ],
//    [
//        "produto" => "jeep renegade"
//    ],
//    [
//        "produto" => "iphone"
//    ],
//    [
//        "produto" => "calca"
//    ],
//    [
//        "produto" => "camiseta"
//    ],
//    [
//        "produto" => "bermuda"
//    ],
//    [
//        "produto" => "colete"
//    ],
//);
//
//$clientes = array(
//    [
//        "nome" => "luiz",
//        "produto" => $pr[0]['produto']
//    ],
//    [
//        "nome" => "pedro",
//        "produto" => $pr[1]['produto']
//    ],
//    [
//        "nome" => "zeze",
//        "produto" => $pr[2]['produto']
//    ],
//    [
//        "nome" => "jose",
//        "produto" => $pr[3]['produto']
//    ],
//    [
//        "nome" => "zezinho",
//        "produto" => $pr[4]['produto']
//    ],
//    [
//        "nome" => "pedrinho",
//        "produto" => $pr[5]['produto']
//    ],
//    [
//        "nome" => "paulo",
//        "produto" => $pr[6]['produto']
//    ],
//);
//
//$produtos = array();
//
//foreach ($clientes as $cliente) {
//    echo "<br>" . strtoupper($cliente['nome']) . " COMPROU:  " . strtoupper($produtos = $cliente['produto']) . "<br>";
//}

