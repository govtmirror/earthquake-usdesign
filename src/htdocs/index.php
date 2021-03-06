<?php
if (!isset($TEMPLATE)) {
  // Page title. Shows up as <title> in <head> and an <h1> in content.
  $TITLE = 'U.S. Seismic Design Maps';

  // Cooperator Logo
    $COOPERATORS = '<a class="cooperator" href="http://www.fema.gov/">
        <img src="images/FEMA_logo.svg"
        alt="in cooperation with Federal Emergency Management Agency (FEMA)"/>
        </a>';

  // True, flase, or actual navigation markup
  $NAVIGATION = true;

  // Additional tags to add to <head> section. Typically stylesheets.
  $HEAD = '
    <link rel="stylesheet" href="css/index.css"/>
  ';

  // Additional tags to add to bottom of body section. Typically javascripts.
  $FOOT = '
    <script src="lib/leaflet/leaflet.js"></script>
    <script src="js/index.js"></script>
  ';

  include_once 'template.inc.php';
}
?>

<div class="application"></div>
