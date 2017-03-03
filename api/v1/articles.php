<?php
require_once 'dbHandler.php';

$db = new DbHandler();
$query = "select distinct a.article_number, a.article_name, a.article_price_origin, a.article_price_discount, a.image_link from articles a order by a.article_number";
$result = $db->getManyRecords($query);

$arr = array();
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $arr[] = $row;
    }
}
# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;

?>