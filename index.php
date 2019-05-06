<html>
<head>
    <meta charset="UTF-8">
    <title>Conta Banco</title>
</head>
<body>
<pre>
<?php
require_once 'ContaBanco.php';

$cliente1 = new ContaBanco();
$cliente2 = new ContaBanco();
$cliente3 = new ContaBanco();

$cliente1->abrirConta("cc");
$cliente1->setNome("Carlos");
$cliente1->setnumConta(1111);
$cliente1->depositar(300);
$cliente1->pagarMensal();
$cliente1->sacar(338);
$cliente1->fecharConta();

$cliente2->abrirConta("cp");
$cliente2->setNome("Augusto");
$cliente2->setnumConta(2222);
$cliente2->depositar(500);
$cliente2->sacar(100);
$cliente2->pagarMensal();
$cliente2->sacar(530);
$cliente2->fecharConta();



print_r($cliente1);
print_r($cliente2);
?>
</pre>
</body>
</html>

