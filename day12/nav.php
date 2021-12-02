<?php 
if ($_SESSION['username']==''){
  header("location:index.php");
}
?>

<style>
  .sai{
    font-size: 30px;
    color: rgb(255, 255, 255);
  }
  .den{
    padding-bottom: 0px;
    padding-top: 0px;
  }
  .xnxx{
    padding-bottom: 30px;
    padding-top: 0px;
  }
  .colornav{
  color: rgb(255, 255, 255)
  }
</style>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="data.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="da1.php">novel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="da2.php">novel2</a>
      </li>    
    </ul>
  </div>  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <form class="form-inline" action="">
    <input class="form-control mr-sm-2" type="text"  placeholder="Search">
    <button class="btn btn-success" type="submit">ค้นหา</button>
  </form>
  </div>
  <div class="colornav">ผู้ใช้งาน :<?php echo $_SESSION['username'].'/'.$_SESSION['name']?></div>
</nav>
