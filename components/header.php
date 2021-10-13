<?php
require_once("icon.php");
function createHeaderButton(string $text, string $url, string $icon = null)
{
  echo "<div class=\"header-button\"><a href=\"$url\">";
  if ($icon != null) {
    echo "<img src=\"" . getLogoPath($icon) . "\" alt=\"$text\" />";
  }
  echo "$text</a></div>";
}

function createHeader()
{
?>
  <header>
    <nav class="header-nav">
      <?= createHeaderButton("Index", "/") ?>
      <?= createHeaderButton("Page 2", "/page2") ?>
      <?= createHeaderButton("Page 3", "/page3") ?>
      <?= createHeaderButton("Page 4", "/page4") ?>
    </nav>
  </header>
<?php

}
?>