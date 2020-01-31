<?php
/* Template Name: sitemap */
?> 
<?php get_header(); ?>
<div class='clearfix'></div>
<div id="main">
<div id="content">
    <div class="entry">
 <div id="daftar">
 <div class="daftarisi">
 <h1><?php the_title(); ?></h1>
 <ol>
 <?php $cats = get_categories('exclude=');
 foreach ($cats as $cat) {
 echo "<li><h4>".$cat->cat_name." :</h4>";
 echo "<ol>";
 query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
 while(have_posts()) {
 the_post();
 $category = get_the_category();
 if ($category[0]->cat_ID == $cat->cat_ID) {
 echo '<li><a target="_blank" href="'.get_permalink().'">'.get_the_title().'</a></li>';}}
 echo "</ol>";
 echo "</li>";}?>
 </ol>
 </div>
 </div>
    </div>     
    </div>
<?php get_sidebar(); ?>
<div class='clearfix'></div>
<?php get_footer(); ?>