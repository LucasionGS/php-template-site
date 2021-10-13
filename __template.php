<?php
include("__content.php");
// Optional things below. Default things will be used if you they are null.
// Title of this page
$title = null;
// Description of this page
$description = null;

ob_start();
?>

<!-- Start of page content -->
<div>
  
</div>
<!-- End of page content -->

<?php
$content = ob_get_clean();
setContentBody($content, $title, $description);
?>