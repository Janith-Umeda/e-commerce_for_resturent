<?php 
  require_once("linkfixer.php");
  $uri = fixedlink();
  $fixedlink = $uri[0];
  $uriloc = $uri[1];

?>

<link
  rel="shortcut icon"
  href="<?php echo $fixedlink ?>assets/images/brand_logo.jpg"
  type="image/x-icon"
/>
<link rel="stylesheet" href="<?php echo $fixedlink ?>assets/bootstrap/css/bootstrap.min.css" />
<link
  rel="stylesheet"
  href="<?php echo $fixedlink ?>assets/bootstrap-icons/bootstrap-icons.css"
/>
<link rel="stylesheet" href="<?php echo $fixedlink ?>assets/css/styles.css" />