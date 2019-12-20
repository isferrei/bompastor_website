<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		$nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $assunto = $_POST['assunto'];
		$mensagem = $_POST['mensagem'];
		
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "isa.vormund@hotmail.com.br");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "isabelad-carvalho@hotmail.com");
        $content = new SendGrid\Content("text/html", "Olá, <br><br>Nova mensagem recebida pela ouvidoria do bairro<br><br>Nome: $nome<br>Email: $email <br>Telefone: $telefone <br>assunto: $assunto <br>Mensagem: $mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        $apiKey = 'SENDGRID_API_KEY';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso!";
		
        ?>
    </body>
</html>
