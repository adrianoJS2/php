<?php 
// pegar os dados da tela

$email  =  $_POST["email"];
$senha  =  $_POST["senha"];

/*
echo "E-mail ".$email. "<br>";
echo "Senha ".$senha. "<br>";
*/


//abrir a conexao com o banco de dados
// myslql_connect (SERVIDOR, USUARIO, SENHA, BANCO)
$con = mysqli_connect("localhost","root","","aulaprojeto");
// montar a instrução de seleção para ir ao banco
$sql = "select * from usuario where email = '".$email."' and senha ='".$senha."'"; 

//executar a instrução
//if(mysqli_query($con,$sql)){
$rs =mysqli_query($con,$sql);
if(mysqli_num_rows($rs)--1){

   
    //echo $ "Encontrei";
    //redirecionar para a página, que está da pasta ADM
echo "<script>";
echo "location.href='ADM/painel.php'";
echo "</script>";


}else{
    //echo "Não encontrei";
echo "<script>";
echo "location.href='logar.php";
echo "</script>";
}
?>