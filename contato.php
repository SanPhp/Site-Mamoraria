<?php header("Content-type: text/html; charset=utf-8"); ?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="pt"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="pt"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="pt"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="pt"> <![endif]-->
<!--[if gt IE 9]><!--><html lang='pt-BR'><!--<![endif]-->

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/demo.css">
<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>

<link rel="shortcut icon" href="estru/favicon.png" sizes="32x32"> 
<link rel="shortcut icon" href="estru/favicon.ico" sizes="32x32">

<meta name="author" content="HRS-Web Desenvolvimento Web, hrsweb.com.br"> 
<meta name="service" content="Corte de marmore, cortato marmore sob medida, Loja de marmores arapongas parana">

<meta name="description" content="Loja de Marmores sob medida para sua casa ou seu escritório, marmores para a sua piscina, marmores para jardins, pisos de marmores arapongas parana">

<meta name="keywords" content="Marmore, Granitos, granito, marmoglass, quartz-stone, travertinos, Sub, medida, em arapongas, arapongas, parana, paraná, marmores arapongas, loja, loja de marmore, fabrica, hrsweb.com.br, marmorariatangara.com.br, catalogo, marmores, catálogo de marmore">

<title>CONTATO - Marmoraria Tangará.</title>
</head>

<body class="demas_pages">
        
        
<header>

               
<?php include'menutop.php'; ?>
      
        
</header>        
        

<div id="allcontent"> <!-- ALLCONTENT -->

	<h1>Contato</h1>

<section id="mapa_localizacao"> <!-- MAPA LOCALIZACAO -->

  <aside id="endereco">
     
            <table class="table_tlf" border="0">
                  <tr>
                  <th>Telefone:</th>
                  <th>Email:</th>
                  </tr>
                  
                  <tr>
                  <td>(43)3252-7910</td>
                  <td>marmorariatangara@marmorariatangara.com.br</td>
                  </tr>
                  
                  <tr>
                  <td>(43)9965-1223</td>
                  <td>marmorariatangara@hotmail.com</td>
                  </tr>
                  
    
                  
                                 
            </table>
            
            <table border="0" class="table_end">
              <tr>
              <th>Endereço:</th>
               </tr>
                  
               <tr>
               <td>Rua: Tangará 427 - Vila Triângulo - Arapongas -Pr</td>
               </tr>
            </table>
  
  </aside>

   <aside id="localizacao">
      
       <iframe width="470" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=rua+tangara+427+arapongas&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=41.546728,56.513672&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Tangar%C3%A1,+427+-+Arapongas+-+Paran%C3%A1,+86709-000,+Rep%C3%BAblica+Federativa+do+Brasil&amp;t=m&amp;ll=-23.405207,-51.452322&amp;spn=0.015754,0.04034&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=rua+tangara+427+arapongas&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=41.546728,56.513672&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Tangar%C3%A1,+427+-+Arapongas+-+Paran%C3%A1,+86709-000,+Rep%C3%BAblica+Federativa+do+Brasil&amp;t=m&amp;ll=-23.405207,-51.452322&amp;spn=0.015754,0.04034&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left"></a></small>
   
   </aside>

</section> <!-- /MAPA LOCALIZACAO -->
  <section id="contato">
  
  
   
<?php
if (isset($_POST['submit'])){	
$name = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$mensagem = $_POST['mensagem'];
$output_form = 'no';

if (empty($name) || empty($email) || empty($fone) || empty($mensagem)){
	echo '<p>Por favor preencha todos os campos do formulario, Obrigado!</p></br>';
	$output_form = 'yes';
  }
}
else {
	 $output_form = 'yes';
 }

if (!empty($name) && !empty($email) && !empty($fone) && !empty($mensagem)) {
    $from = 'Studio London';
	$to = 'sideshowbob3d@hotmail.com';
	$subject = 'Contato Studio London';
	$msg = "From: $from \n" .
	        "Nome: $name \n" .
	        "Email: $email \n" .
			"Fone: $fone \n" .
			"Mensagem: $mensagem";
	        mail($to, $subject, $msg);
			echo '<p>Mensagem enviada com sucesso</p></br><a href="contato.php">Voltar</a>';
			$output_form = 'no';
			
			
}



	
if ($output_form == 'yes') {
?>

<table>
<form method="post" action="<?php $_SERVER['PHP_SELF'] ;?>">
<tr>   

<td><input type="text " id="nome" name="nome" placeholder="Nome" value="<?php echo $name; ?>" size="60"></td>
</tr>   

<tr>   

<td><input type="text" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>" size="30"></td>   
</tr>   

<tr>

<td><input type="text" id="fone" name="fone" placeholder="Fone" value="<?php echo $fone; ?>" size="30">
</tr>

<tr>

<td><textarea id="mensagem" class="mensagem" name="mensagem" placeholder="Mensagem" cols="30" rows="5"><?php echo $mensagem; ?></textarea>

<tr>

<td><input type="submit" name="submit" id="submit" value="Enviar"></td>
</tr>


</form>
</table>

<?php
}
?>
   
   </section>




</div>      <!--/ ALLCONTENT -->  


 <nav id="main">
<!-- <ul>
       <li>|<a href="#">Fotos</a></li>
       <li>|<a href="#">Album</a></li>
       <li>|<a href="#">O Studio</a></li>
       <li>|<a href="#">Contato</a></li>
       <li>|<a href="#">Orçamento</a></li>
   </ul>  

</nav> -->
        
       <?php include 'footer.php'; ?>

</body>
</html>