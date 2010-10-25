<?php
require_once 'php/login.php';
require_once 'php/functions.php';

$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());

mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());

$userid="default"; // Qui dovr˜ pescare dal nome utente della sessione e sostituire il valore che adesso  default
$query = "SELECT * FROM notes WHERE author ='$userid'";
$result = mysql_query($query, $db_server) or die(mysql_error($db_server));

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Lollo Sticky Notes Project</title>
 <!-- <link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css">  -->
  <link rel="stylesheet" href="CSS_normalization.css" type="text/css" />  <!-- foglio reset browser css default -->
  <link rel="stylesheet" href="style.css" type="text/css" />
  <script type='text/javascript' src='jquery/jquery-1.4.2-min.js'></script>
  <script type='text/javascript' src='jquery/jquery-ui-1.8.5.custom.min.js'></script>
  <script type='text/javascript' src='jquery/jquery.js'></script>
</head>

<body>
  <div id="ui">
    <div id="new_note_button">
      Add a new note;
    </div>
    <div id="trash">
      Trashcan
    </div>
  </div>
  <ul>
    <?php
      while ($row = mysql_fetch_array($result)) {
      create_note($row);
    }
    ?>
    <li>
        <div class="icon round"></div>
        <h2>Nota uno</h2>
        <p class="note_content">Text Content #1</p>
    </li>
    <!--
    <li>
      <a href="#">
        <img class=logo src='images/round.png' />
        <h2>nota 2</h2>
        <p>Text Content #2</p>
      </a>
    </li>
    <li>
      <a href="#">
        <img class=logo src='images/square.png' />
        <h2>supernota 3</h2>
        <p>Text Content #3</p>
      </a>
    </li>
    <li>
      <a href="#">
        <img class=logo src='images/triangle.png' />
        <h2>Title #4</h2>
        <p>Text Content #4</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #5</h2>
        <p>Text Content #5</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #6</h2>
        <p>Text Content #6</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #2</h2>
        <p>Text Content #2</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #7</h2>
        <p>Text Content #7</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #8</h2>
        <p>Text Content #8</p>
      </a>
    </li>
    <li>
      <a href="#">
        <img class=logo src='images/star.png' />
        <h2>Nota uno</h2>
        <p class="note_content">Text Content #1</p>
      </a>
    </li>
    <li>
      <a href="#">
        <img class=logo src='images/round.png' />
        <h2>nota 2</h2>
        <p>Text Content #2</p>
      </a>
    </li>
    <li>
      <a href="#">
        <img class=logo src='images/square.png' />
        <h2>supernota 3</h2>
        <p>Text Content #3</p>
      </a>
    </li>
    <li>
      <a href="#">
        <img class=logo src='images/triangle.png' />
        <h2>Title #4</h2>
        <p>Text Content #4</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #5</h2>
        <p>Text Content #5</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #6</h2>
        <p>Text Content #6</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #2</h2>
        <p>Text Content #2</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #7</h2>
        <p>Text Content #7</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #8</h2>
        <p>Text Content #8</p>
      </a>
    </li>
    <li>
      <a href="#">
        <img class=logo src='images/star.png' />
        <h2>Nota uno</h2>
        <p class="note_content">Text Content #1</p>
      </a>
    </li>
    <li>
      <a href="#">
        <img class=logo src='images/round.png' />
        <h2>nota 2</h2>
        <p>Text Content #2</p>
      </a>
    </li>
    <li>
      <a href="#">
        <img class=logo src='images/square.png' />
        <h2>supernota 3</h2>
        <p>Text Content #3</p>
      </a>
    </li>
    <li>
      <a href="#">
        <img class=logo src='images/triangle.png' />
        <h2>Title #4</h2>
        <p>Text Content #4</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #5</h2>
        <p>Text Content #5</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #6</h2>
        <p>Text Content #6</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #2</h2>
        <p>Text Content #2</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #7</h2>
        <p>Text Content #7</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Title #8</h2>
        <p>Text Content #8</p>
      </a>
    </li> -->
  </ul>
<?php mysql_close($db_server); ?>
</body>
</html>