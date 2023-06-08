<?php

include('../../../config.php');

function sanitizeString($string) {

    // matriz de entrada
    $what = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º' );

    // matriz de saída
    $by   = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-' );

    // devolver a string
    return str_replace($what, $by, $string);
}


// Dados do formulário
$productName = $_POST["product-name"];
$productDescription = $_POST["product-description"];
$productShortDescription = $_POST["product-short-description"];
$productPrice = $_POST["product-price"];
$productCategory = $_POST["product-category"];
$href = sanitizeString($productName);

// Diretório para armazenar as imagens
$targetDir = "../../../assets/images/products/";
$targetFile = $targetDir . basename($_FILES["product-image"]["name"]);
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
$image = basename($_FILES["product-image"]["name"]);
// Verifica se a imagem é válida
$uploadOk = true;
if (isset($_POST["submit"])) {
  $check = getimagesize($_FILES["product-image"]["tmp_name"]);
  if ($check === false) {
    echo "O arquivo enviado não é uma imagem.";
    $uploadOk = false;
  }
}

// Verifica o tamanho máximo da imagem (opcional)
$maxFileSize = 5 * 1024 * 1024; // 5MB
if ($_FILES["product-image"]["size"] > $maxFileSize) {
  echo "O arquivo enviado é muito grande. O tamanho máximo permitido é 5MB.";
  $uploadOk = false;
}

// Verifica o formato da imagem (opcional)
$allowedFormats = ["jpg", "jpeg", "png", "gif"];
if (!in_array($imageFileType, $allowedFormats)) {
  echo "Formato de imagem não suportado. São permitidos apenas arquivos JPG, JPEG, PNG e GIF.";
  $uploadOk = false;
}

// Move o arquivo para o diretório de destino
if ($uploadOk) {
  if (move_uploaded_file($_FILES["product-image"]["tmp_name"], $targetFile)) {
      @header('Location: https://hypedx.com.br/painel-administrativo');
  } else {
    echo "Erro ao enviar a imagem.";
  }
}

// Cria a query SQL para inserção dos dados
$sql = "INSERT INTO produtos (nome, descricao_principal, descricao_auxiliar, preco, categoria, href, imagem)
        VALUES ('$productName', '$productDescription', '$productShortDescription', '$productPrice', '$productCategory', '$href', '$image')";

// Executa a query
if ($mysqli->query($sql) === TRUE) {
    @header('Location: https://hypedx.com.br/painel-administrativo');
} else {
  echo "Erro ao adicionar o produto: " . $mysqli->error;
}
@header('Location: https://hypedx.com.br/painel-administrativo');

?>
