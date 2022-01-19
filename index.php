Arquivo:
<form method="POST" enctype="multipart/form-data" action="recebedor.php">
    <input type="file" name="arquivo"/><br/><br/>
    <input type="submit" value="Enviar"/>

</form>
Vários arquivos:
<form method="POST" enctype="multipart/form-data" action="recebedor2.php">
    <input type="file" name="arquivo[]" multiple /><br/><br/>
    <input type="submit" value="Enviar"/>

</form>