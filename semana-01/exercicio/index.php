<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="unsemantic.css">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <form action="contato.php" method="post" id="formContato" onsubmit="return validar()">
        <div class="max-width grid-100">
            <div class="area_contato">
                <div class="grid-100 entrecontato mobile-grid-100">
                    <i class="fa fa-bars icon-top">
                    </i>
                    <h2>Entre em contato</h2>
                </div>
                <div class="grid-100">
                    <div class="grid-50 mobile-grid-100">
                        <label><i class="fa fa-user-circle-o"></i>
                            <input type="text" name="txtNome" id="txtNome" placeholder="Digite aqui seu nome"></label>
                    </div>
                    <div class="grid-50 mobile-grid-100">
                        <label><i class="fa fa-envelope"></i>
                            <input type="email" name="txtEmail" id="txtEmail"
                                placeholder="Digite aqui seu email"></label>
                    </div>
                </div>
                <div class="grid-100 gridbottom">
                    <div class="grid-50 mobile-grid-100">
                        <label><i class="fa fa-phone-square"></i>
                            <input type="text" name="txtTel" id="txtTel"
                                placeholder="Digite aqui seu telefone"></label><br>
                    </div>
                    <div class="grid-50 mobile-grid-100">
                        <label><i class="fa fa-question-circle"></i>
                            <select id="tipoContato" name="tipoContato">
                                <option value="1">Comercial</option>
                                <option value="2">Dúvidas</option>
                                <option value="3">Parceria</option>
                                <option value="4">Outros</option>
                            </select></label><br>
                    </div>
                </div>
                <div class="grid-100 gridbottom">
                    <div class="mobile-grid-100">
                        <i class="fa fa-commenting"></i>
                        <h2>Mensagem</h2>
                    </div>
                    <div class="grid-100 mobile-grid-100">
                        <textarea name="txtMensagem" id="txtMensagem" cols="30" rows="10"
                            placeholder="Digite aqui sua mensagem."></textarea>
                    </div>
                </div>
                <div class="grid-100">
                    <button class="buttonenviar" name="enviocontato" type="submit"><i
                            class="fa fa-external-link-square iconenviar"></i>Enviar</button>
                </div>

            </div>

    </form>

</body>
<script src="script.js"></script>

</html>