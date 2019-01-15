<?php
//
// page.phpのサンプル
//
?>
<?php get_header(); ?>

<div class="col-xs-12 wrap single">

	<?php get_template_part( 'meta' ); ?>

	<h1><?php the_title(); ?></h1>

	<p class="cat"><?php the_category( ' ' ); ?></p>

<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>

<?php // $B%9%3%"I=<($3$3$+$i(B?>
<table class="table table-striped" style="width: 332px;margin: auto;">
<tr>
<th scope="col">Name</th>
<th scope="col">Score</th>
</tr>
<?php	

// include$B$7$H$/$H4X?t$,;H$($k(B
include 'wp-load.php';
$data = $wpdb->get_results( "SELECT * FROM {$wpdb->score}" );


// $B$3$3$G%9%3%"$,9b$$=g$K$9$k(B
foreach((array)$data as $key => $value){
$sort[$key] = $value->score;
}
array_multisort ( $sort , SORT_DESC , $data);

// $BI=<($9$k(B
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
<?php // $B%9%3%"I=<($3$3$^$G(B ?>
	<?php get_template_part( 'sns' ); ?>

</div>
<?php get_footer(); ?>
