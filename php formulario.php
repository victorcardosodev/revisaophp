<?php

    $loginComSucesso = False;
    
    $login = $_POST["nomeDoUsuario"];
    $senha = $_POST["senhaDoUsuario"];

    $nomeValidoDeUsuario = "aluno1";
    $senhaValidaDeUsuario = 123;

    echo "<script> alert ('".$login."') </script>";
    echo "<script> alert ('".$senha."') </script>";

    if ( $login == $nomeValidoDeUsuario && $senha == $senhaValidaDeUsuario) {
        $loginComSucesso = true;
    }


    echo "alert('$loginComSucesso <br>')";
    echo $loginComSucesso;
    echo $loginComSucesso;

    if($loginComSucesso == false) {
        echo "<script> alert ('".$loginComSucesso."') </script>";
        echo "<script> alert('$loginComSucesso era falso e foi convertido como string vazia e login falhou') </scri´t>";

    }else{
    echo "<script> alert ('".$loginComSucesso."') </script>";
    echo "<script> alert ('Ou seja, Login Com Sucesso') </script>";

    }

    ?>