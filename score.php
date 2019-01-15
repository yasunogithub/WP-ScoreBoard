<?php // スコア表示ここから?>
<table class="table table-striped" style="width: 332px;margin: auto;">
<tr>
<th scope="col">Name</th>
<th scope="col">Score</th>
</tr>
<?php
// includeしとくと関数が使える
include 'wp-load.php';
$data = $wpdb->get_results( "SELECT * FROM {$wpdb->score}" );
// ここでスコアが高い順にする
foreach((array)$data as $key => $value){
$sort[$key] = $value->score;
}
array_multisort ( $sort , SORT_DESC , $data);

// 表示する
foreach ($data as $value) {
echo "<tr>";
 echo "<td>" . $value->name . "</td>";
 echo "<td>" . $value->score . "</td>";
echo "<br />";
echo "</tr>";
}

?>
</tr>
</table>
<?php // スコア表示ここまで ?>
