<?php
include_once 'seguretat.php';

include 'plantilles/cap.php';
include 'plantilles/menu.php';
?>


<div class="container">
  <h3>Benvingut <?php  echo $_SESSION['username'];  ?></h3>
  <p> Petita Aplicació per utilitzar sessions i validació d'usuaris</p>
</div>


<?php
  include 'plantilles/peu.php';
?>


