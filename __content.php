<?php
// Include config
require_once("./__config.php");
// Include php components
include "./components/header.php";
function setContentBody(string $html, $title, $description)
{
  global $CFG;
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description ? $description : $CFG["description"]; ?>">
    <title><?php echo $title ? $title : $CFG["title"]; ?></title>
    <link rel="stylesheet" href="/src/base.css">
  </head>

  <body>
    <?= createHeader() ?>
    <main class="main-content">
      <?= $html; ?>
    </main>

  </body>

  </html>
<?php
}
