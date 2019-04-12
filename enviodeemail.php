
#Para envio de email
#Autor:Ivens Ramon
#email:ivens-oliveira@hotmail.com
#=============================================================================#
<html>
<head><title></title>
</head>
<body>
<?php
$Nome=$_POST['Nome'];
$Fone=$_POST['Fone'];
$Email=$_POST['Email'];
$Assunto=$_POST['Assunto'];
?>
<?php
$to ="#";
$subject ="Assunto";
$message ="$Nome <br> $Fone <br> $Email <br> $Assunto";
$header ="MIME-version: 1.0 \n";
$header .="Content-type: text/html; charset=iso-8859-1\n";
$header .="from: $email\n";
mail ($to, $subject, $message, $header);
echo"Mensagem enviada com sucesso!.<br>";
echo"<a href='index.php'><h2>sair</h2></a>";
?>
</body>

</html>

