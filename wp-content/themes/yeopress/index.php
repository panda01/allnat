<?php get_header() ?>
<div id="page-content">
<?php
$query = new WP_Query(array(
  'post_type' => 'page'
));

$query->have_posts();

print_r($query);
echo $query;
?>
  <?php get_template_part('single', 'index') ?>
</div>
<?php get_sidebar() ?>
<?php get_footer() ?>
