
<?php 
include('wordpress/wp-includes/wp-db.php');
require('./wordpress/wp-blog-header.php');
global $wpdb;

session_start(); 
if (!empty($_SESSION['log_in']))
{
  $logged_in = true;
  $userType= $_SESSION['userType'];
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Jogjakarta Community School</title>

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/timeline.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.web/js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>

<!-- Old nav bar -->
<div class="container">
  <div class="row h_menu">
    <nav class="navbar navbar-default navbar-left" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="education.html">Education at JCS</a></li>
            <li><a href="about.html">About Us</a></li>
            <?php if($logged_in==true){ ?> 
            <li class="active"><a href="timeline.php">JCS Events</a></li> 
            <li><a href="blog.php">JCS Community</a></li> <?php } ?>
            <li><a href="contact.php">Contact</a></li>
            <li class="divider"></li>
          </ul>
        </div>
        <div class="clearfix"></div>
    </nav>
                </ul>
              </div>
                 
              </div>
            </div>
          </div>






<div class="container">
    <div class="page-header text-center">
        <h1 id="timeline" class="pull-left">Our last events</h1>
    </div>
    <ul class="timeline">
        <?php 
        query_posts( 'category_name=events&posts_per_page=10' );          

        if ( have_posts() ) {

        $i = 0;
        while ( have_posts() ) { the_post(); 
        $i++;

        if ($i % 2 == 0) {
        ?> 
        <li>
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
            <?php
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID, 'full'), 'full');
             $url = $thumb[0];
            ?>
              <img class="img-responsive" src="<?php echo $url; ?>" />             
            </div>
            <div class="timeline-body">
              <h4 class="timeline-title"><?php the_title( '<h3>', '</h3>' ); ?></h4>
              <p><?php the_excerpt(); ?></p>
              
            </div>
            
            <div class="timeline-footer">
            <div> <p style="display:inline"><small class="text-muted"><i class="glyphicon glyphicon-time"></i><?php echo 'Posted '. (human_time_diff( get_the_time('U'), current_time('timestamp')) .' ago'); ?></small></p>
            <a href="single-page.php?postid=<?php echo get_the_ID(); ?>" class="btn btn-danger pull-right">Read more</a></div>
            </div>
          </div>
        </li>
      <?php  } else { ?>
        <li  class="timeline-inverted">
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
               <?php
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID, 'full'), 'full');
             $url = $thumb[0];
            ?>
              <img class="img-responsive" src="<?php echo $url; ?>" />   
              
            </div>
            <div class="timeline-body">
            <h4 class="timeline-title"><?php the_title( '<h3>', '</h3>' ); ?></h4>
             <p><?php the_excerpt(); ?></p>
              
            </div>
            
            <div class="timeline-footer">
               <div> <p style="display:inline"><small class="text-muted"><i class="glyphicon glyphicon-time"></i><?php echo 'Posted '.(human_time_diff( get_the_time('U'), current_time('timestamp')) .' ago'); ?></small></p>
                <a href="single-page.php?postid=<?php echo get_the_ID(); ?>" class="btn btn-success pull-right">Read more</a></div>
            </div>
          </div>
        </li> 
     <?php  }
   }
 }
 ?>
        <li class="clearfix" style="float: none;"></li>
    </ul>
</div>
<!--
<div class="container">
    <div class="page-header">
        <h1 id="timeline">Our Latest events</h1>
    </div>
    <ul class="timeline">
      <?php 
      query_posts( 'category_name=events&posts_per_page=4' );          

      if ( have_posts() ) {

      $i = 0;
      while ( have_posts() ) { the_post(); 
      $i++;

      if ($i % 2 == 0) {
      ?> 
        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-hand-left"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
           <?php
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID, 'full'), 'full');
             $url = $thumb[0];
            ?>
              <img class="img-responsive" src="<?php echo $url; ?>" />
            </div>
              <h4 class="timeline-title"><?php the_title( '<h3>', '</h3>' ); ?></h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i><?php echo 'Posted '. human_time_diff( get_the_time('U'), current_time('timestamp') .' ago'); ?></small></p>
            
            <div class="timeline-body">
              <p><?php the_excerpt(); ?></p>
              <a href="single-page.php?postid=<?php echo get_the_ID(); ?>"class="btn btn-success pull-right">read more</a>
            </div>
          </div>
        </li>
        <?php } 
        else {
        ?>
        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-hand-right"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
            <?php
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID, 'full'), 'full');
             $url = $thumb[0];
            ?>
              <img class="img-responsive" src="<?php echo $url; ?>" />
              </div>
              <h4 class="timeline-title"><?php the_title( '<h3>', '</h3>' ); ?></h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i><?php echo 'Posted '. human_time_diff( get_the_time('U'), current_time('timestamp') .' ago'); ?></small></p>
            <div class="timeline-body">
              <p><?php the_excerpt();?></p>
              <a href="single-page.php?postid=<?php echo get_the_ID(); ?>"class="btn btn-warning pull-right">read more</a>
            </div>
          </div>
        </li>
<?php 
          }
       } 
        } 
?>
    </ul>
</div>
-->
</body>
</html>