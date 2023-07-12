<?php
include('../../../config.php');

$id = $_GET['collection_id'];
$collectionStatus = $_GET['collection_status'];
$payId = $_GET['payment_id'];
$payStatus = $_GET['status'];
$href = $_GET['external_reference'];
$payType = $_GET['payment_type'];
$merchandOrderId = $_GET['merchant_order_id'];
$preferenceId = $_GET['preference_id'];
$merchantId = $_GET['merchant_account_id'];

// Cria a query SQL para inserção dos dados
$sql = "INSERT INTO compras (collection_id, collection_status, payment_id, pay_status, href, payment_type, merchant_order_id, preference_id, merchant_account_id)
VALUES ('$id', '$collectionStatus', '$payId', '$payStatus', '$href', '$payType', '$merchandOrderId', '$preferenceId', '$merchantId')";
        

// Executa a query
if ($mysqli->query($sql) === TRUE) {
  header('Location: https://www.hypedx.com.br/purchase-status/' . $payId);
} else {
  echo "Erro ao adicionar o produto: " . $mysqli->error;
}

?>