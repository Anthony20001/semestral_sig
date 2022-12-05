<?php 
use Facturapi\Facturapi;
require_once 'vendor/autoload.php';$facturapi = new Facturapi( "sk_test_5D9MEv2GKbNejZWXOBY7eNZgmx34lVnk6r0mBzgaQd" );

$invoice = $facturapi->Invoices->create([
  "customer" => [
    "legal_name" => isset($_POST['name']) ? $_POST['name'] : "Anthony Ledezma",
    "email" =>  isset($_POST['email']) ? $_POST['email'] : "ledezmaanthonydeveloper@gmail.com",
    "tax_id" => "ABC101010111",
    "tax_system" => "601",
    "address" => [
      "zip" => "85900"
    ]
  ],
  "items" => [
    [
      "quantity" => 1,
      "product" => [
        "description" => "Ukelele",
        "product_key" => "60131324",
        "price" => 345.60
      ]
    ],
  ],
  "payment_form" => "28" // Tarjeta de crédito
]);

$facturapi->Invoices->send_by_email($invoice->id);

header("Location:index.php");
?>