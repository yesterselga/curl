<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.missmanila.ph/wp-admin/admin-ajax.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);

$data = array(
     'action' => 'jet_engine_add_to_store_like',
     'store' => 'like',
     'post_id' => '698'
);

curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$output = curl_exec($ch);
$info = curl_getinfo($ch);

echo $output;

curl_close($ch);

sleep(1);
