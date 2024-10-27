<?php

if (isset($_POST['voriprice'], $_POST['voriquantity'], $_POST['anaquantity'], $_POST['rotiquantity'], $_POST['pointquantity'])) {
    $voriprice = $_POST['voriprice'];
    $voriquantity = $_POST['voriquantity'];
    $anaquantity = $_POST['anaquantity'];
    $rotiquantity = $_POST['rotiquantity'];
    $pointquantity = $_POST['pointquantity'];

    $anaprice = $voriprice / 16;
    $rotiprice = $anaprice / 6;
    $pointprice = $rotiprice / 10;

    // Perform the calculation
    $result = ($voriprice * $voriquantity) + ($anaprice * $anaquantity) + ($rotiprice * $rotiquantity) + ($pointprice * $pointquantity);

    // Output result as plain text
    echo number_format($result, 2) . " BDT";
} else {
    // Handle case when required POST data isn't available
    echo "Please provide all required values.";
}

?>
