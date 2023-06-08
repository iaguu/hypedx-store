<?php
if($_POST['username'] !== null){
    $user = $_POST['username'];
    $pass = $_POST['user_password'];

    $id = $_GET['id'];

	$sql = "SELECT * FROM usuarios WHERE email = '$user' AND senha = '$pass'";
	$exe = $mysqli->query($sql);
	$result = $exe->fetch_array();

    if($result == null){
        @header('Location: https://hypedx.com.br/');
    }else{
        if($result['level'] == 1){
            
            $_SESSION['validation-token'] = 'HPDXSTORE';

            @header('Location: https://hypedx.com.br/painel-administrativo');
        }else{
            @header('Location: https://hypedx.com.br/');
        }
    }
}
?>