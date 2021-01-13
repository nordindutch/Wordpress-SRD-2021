<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://use.typekit.net/vpu0zcy.css">
  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
  <link href="https://fonts.googleapis.com/css?family=Roboto:bold,bolditalic,italic,light" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
<?php wp_head();?>
</head>
<body class="<?php echo get_post_type(); ?>">
  <header>
    <div id="tracker">
    <div id="current-header">Test Text</div> 
    <button id="to-top" onclick="jump()"><i class="arrow up"></i></button> 
    </div>
    
  </header>
  <div class="main-container">
