<?php
# variavel = variavel responsavel para receber arquivo ['parametro colocado no name do form de envio']
$arquivo = $_FILES['arquivo'];
#variavel para varios arquivos.
$arquivos = $_FILES['arquivos'];

if (isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])) {

    #print_r($arquivo); vou etender porque usar o 'tmp_name', pois eh onde o arquivo vai por padrao.

    #renomear arquivo para nome aleatorio
    $nomedoarquivo = md5(time().rand(0,99)).'.png';

    #escolher local para salvar arquivos
    move_uploaded_file($arquivo['tmp_name'], 'uploaded/'.$nomedoarquivo);

    echo 'Arquivo enviado com sucesso!';
}

#Varios arquivos.

if (isset($arquivos['tmp_name']) && !empty($arquivos['tmp_name'])) {
    if (count($_FILES['arquivos']['tmp_name']) > 0) {
        for ($q=0; $q <count($_FILES['arquivos']['tmp_name']); $q++) { 
            $nomedosarquivos = md5(time().rand(0,99)).'.png';

            move_uploaded_file($arquivos['tmp_name'], 'uploaded/'.$nomedoarquivos);
        
            echo 'Arquivo enviado com sucesso!';
        }
    }
}

?>