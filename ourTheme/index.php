<!DOCTYPE html>
<html>
<style>
team{
 font-size: 0.5em;
 text-align: right;
 display: block;
}

description{
 //border: solid grey 2px;
 //border-radius: 9px;
 font-size: 0.7em;
 padding: 1em;
}

h1{
color: yellow;
font-family: "sans-serif";
}

body
 {
  background-image: url('<?php echo get_bloginfo( 'template_directory' );?>/img/Mserentatis.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  
 }
.wrapper
 {
  opacity: 0.8;
  color: orange;
  text-shadow: 2px 2px blue;
 }
</style>
<body>
<div class="wrapper">
<h1><?php bloginfo('name'); ?></h1>
<team> Matt Dennis Productions</team>
<description> <? bloginfo('description'); ?>
</description> 
<?php while(have_posts()){
       the_post(); ?>
       <h2><?php the_title(); ?></h2>
<?php
         the_content();
      }

?>
</div>
</body>
</html>