<?php
//Yöntem #1
require_once "MesajPaneliApi.php";

try {
    $smsApi = new MesajPaneliApi();
    $mesaj  = new TopluMesaj( 'test', '5321234567' );
    //$mesaj->numaraEkle( '5321234567' );
    $smsCevap = $smsApi->topluMesajGonder( 'TEST_BASLIK', $mesaj );
}
catch ( Exception $e ) {
    echo $e->getMessage();
}

///////////////////////
//Yöntem #2
require_once "MesajPaneliApi.php";

try {
    $smsApi = new MesajPaneliApi();

    $data = [
        "msg" => "mesaj metni",
        "tel" => [ "5321234567", "5321234567" ]
    ];

    $smsCevap = $smsApi->topluMesajGonder( 'TEST_BASLIK', $data );
}
catch ( Exception $e ) {
    echo $e->getMessage();
}
?>
  
