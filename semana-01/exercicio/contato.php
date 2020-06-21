<?php



$nome = filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'txtTel', FILTER_SANITIZE_NUMBER_INT);
$tipocontato = filter_input(INPUT_POST, 'tipoContato', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST, 'txtMensagem', FILTER_SANITIZE_STRING);
$erro = false;

$erro = validar($nome, $email, $telefone, $tipocontato, $mensagem, $erro);
    


function validar($nome, $email, $telefone, $tipocontato, $mensagem, $erro) {

    if(strlen($nome) < 3 || strlen($nome) > 50) {
        return false;
    }if(!preg_match('/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i', $email)) {
        return false;
    }if(!preg_match('/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/', $telefone)) {
        return false;
     if(strlen($mensagem) < 10) {
         return false;
     }
}
return true;
}

switch($tipocontato) {
    case 1:
        $assuntocontato = 'Comercial';
    break;
    case 2:
        $assuntocontato = 'Dúvidas';
    break;
    case 3:
        $assuntocontato = 'Parceria';
    break;
    case 4:
        $assuntocontato = 'Outros';
    break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações de contato</title>
    <link href="paginacontato.css" rel="stylesheet">
</head>
<body>
    <div class="max-width">
    <div id="informacoes_contato">
    <h2>Suas informações:</h2>
    <div class="area_infos">
    <?php if($erro) : ?>
    <h3><span class="info">Olá <?php echo $nome ?>, recebemos suas informações e em breve nosso suporte irá responde-lo.</span></h3>
    <p><?php echo 'Nome: ' . $nome; ?></p>
    <p><?php echo 'Email: ' . $email; ?></p>
    <p><?php echo 'Telefone: ' . $telefone ?></p>
    <p><?php echo 'Assunto: ' . $assuntocontato; ?></p>
    <p><?php echo 'Mensagem: ' . $mensagem; ?></p>
    <?php else : ?>
    <p>Inválido</p>

    <?php endif; ?>

</div>
</div>
</div>
</body>
</html>