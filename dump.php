<?php
    require 'AssetStorePublisherClient.class.php'; // Include the class

    // Create the client instance
    $store = new AssetStore\Client();

    // Login with your credentials
    $arr = file(".credentials/assetstore");
    $store->Login(trim($arr[0]), trim($arr[1]));

    $store->DumpData();
?>