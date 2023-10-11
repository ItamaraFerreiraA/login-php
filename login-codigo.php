<?php

    session_name('login');
    session_start();

    require ('conecta.php'); 
 
    $email = mysqli_real_escape_string($_conecta, $_POST['email']); 
    $senha= mysqli_real_escape_string($_conecta, $_POST['senha']);
       
    $senha=md5($senha);

    $busca=("SELECT * from usuario WHERE senhaUsuario='$senha' && emailUsuario='$email'"); 
 

    $executa_busca=mysqli_query($_conecta, $busca) or die (mysqli_error($_conecta)); 

    $conta_dados=mysqli_num_rows($executa_busca);


    if($conta_dados==0) {

      echo "<script> alert ('Login ou Senha incorretos OU você ainda não possui um cadastro')</script>";
      echo "<script>location.href='login.html'</script>";
 
      mysqli_close($_conecta);
      exit;

    } 

    else {
    
      while ($lista=mysqli_fetch_array($executa_busca)) {
    
      $email = $lista['emailUsuario'];
       //$senha = $lista['senha'];
      $id = $lista['idUsuario'];
      $nome = $lista['nomeUsuario'];
      
      } 

    }

    if(($senha==$senha) && ($email==$email)) {

       $_SESSION ['logn'] = $email;
       $_SESSION ['idS'] = $id;
       $_SESSION ['nome'] = $nome;
       $_SESSION['tempo_permitido'] = strtotime(date('H:i:s'));


      echo "<script> alert ('Acesso liberado!')</script>";
      echo "<script>location.href='login.html'</script>";
      mysqli_close($_conecta);
    }

?>
