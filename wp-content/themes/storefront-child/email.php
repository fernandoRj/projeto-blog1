  <?php /* Template name: email */ ?>
 
 
 <?php get_header()?>
 
 
 
 <?php 
 
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $menssagem = $_POST['menssagem'];
 
 



$headers = 'From: equipe@9mobile.com.br' . "\r\n" .
    'Reply-To: equipe@9mobile.com.br' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
 $msg = $nome."\r\n".$email."\r\n".$menssagem."\r\n";
 



mail('equipe@9mobile.com.br', 'Contato 9mobile', $msg, $headers );

?>




 
 
 <script type="text/javascript">
alert("Email enviado com sucesso!");
window.location = "https://9mobile.com.br/";
</script> 
 
 
 
 
 
 
 
 <?php get_footer('blog')?>