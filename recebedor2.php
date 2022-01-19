<?php 
#Varios arquivos.

if (isset($_FILES['arquivo'])) {
    if (count($_FILES['arquivo']['tmp_name']) > 0) {
        for ($q=0;$q<count($_FILES['arquivo']['tmp_name']);$q++) { 
            
            $nomedoarquivo = md5($_FILES['arquivo']['name'][$q].time().rand(0,99)).'.png';

            move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'uploaded/'.$nomedoarquivo);
        
            echo 'Arquivo enviado com sucesso! '.$q;
            echo '<br/>';

        }
    }
}
?>