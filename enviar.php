<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $tel = addslashes($_POST['tel']);

    $para = "marianaantunes.ux@gmail.com";
    $assunto = "Coleta de dados - Portifólio";

    $corpo =  "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$tel;

    $cabeca = "From: mari.antunes911@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();
    
    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o E-mail!")
    }

    ?>