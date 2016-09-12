<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 11/09/2016
 * Time: 18:19
 */

$q = strtolower($_GET["term"]);
$limit=10;
if (!$q)
    return;

$query = $this->db->query("SELECT DISTINCT nome FROM tb_clients WHERE nome LIKE '%" . $q . "%' ORDER BY nome LIMIT 0,15");

foreach ($query->result_array() as $vi) {
    $cname[] = $vi['nome'];
}
echo json_encode($cname);
?>