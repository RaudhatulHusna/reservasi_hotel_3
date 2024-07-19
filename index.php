
<?php
session_start();
if(isset($_GET['x']) && $_GET['x']=='home'){
  $page = "home.php";
  include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='booking'){
  $page = "booking.php";
  include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='user'){
  if($_SESSION['level_hotel']==1){
    $page = "user.php";
    include "main.php";
  }else{
    $page = "home.php";
    include "main.php";
  }
}elseif(isset($_GET['x']) && $_GET['x']=='facilities'){
  $page = "facilities.php";
  include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='activities'){
  $page = "activities.php";
  include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='destination'){
  $page = "destination.php";
  include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='event'){
  $page = "event.php";
  include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='penawaran'){
  $page = "penawaran.php";
  include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='gallery'){
  $page = "gallery.php";
  include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='report'){
  if($_SESSION['level_hotel']==1){
  $page = "report.php";
  include "main.php";
}else{
  $page = "home.php";
  include "main.php";
}
}elseif(isset($_GET['x']) && $_GET['x']=='menu'){
  $page = "menu.php";
  include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='login'){
  include "login.php";
}elseif(isset($_GET['x']) && $_GET['x']=='logout'){
  include "proses/logout.php";
}else{
  $page = "home.php";
  include "main.php";
}
?>
