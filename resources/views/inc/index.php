<?php include 'inc/header.php'; ?>

<div class="row back">
  <div class="col-lg-2">
      </div>



<div class="col-lg-10">
  <div class="form-group ">
    <form class="" action="search.php" method="POST">
        <div class="form-group">
      <div class="col-sm-10"> <input type="text" class="form-control" id="usr" placeholder="Search Here"></div>
      <div class="col-sm-2">  <div class="input-group-btn">
          <button class="btn btn-warning" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div></div>
      </div></form></div>

</div>
</div>

<hr>
<div class="image">
<center>
  <div class="golla">
  <div class="row">
    <div class="col-lg-6 admin cir">
     <a href="admin.php" class="cadmin">
        <div class="circle">
            <br><br> admin <sub>corner</sub>
        </div> </a><div class="row">
    <div class="col-sm-10">    <div class="adminmsg msg"style="display:none">
         <b> If you are a admin of this site by company, this corner is for you. you can use the corner using your staff id and password. If you are newly appointed, please get registered as a staff . you will be able to get registered into the corner. Make your own profile. Keep update your profile.</b>
       </div></div></div>
    </div>



    <div class="col-lg-6 user cir">
     <a href="user.php" class="cuser">
        <div class="circle">
            <br><br> passengers <sub>corner</sub>
        </div> </a> <div class="row">
      <div class="col-sm-10">  <div class="passenger  msg"style="display:none">
          <b>If you are a regular passenger of tany vehicle by companybeing an employee of the company, this corner is for you. you can use the corner using your staff id and password. If you are newly appointed, please get registered as a staff . you will be able to get registered into the corner. Make your own profile. Keep update your profile.</b>
        </div></div></div>
    </div>
  </div>
</div>
</center>
 <hr>






  <div class="row">

    <div class="col-lg-2">
       <br> <br> <br> <br>
      <div class="list-group listb">
 <a href="#" class="list-group-item list">First item</a>
 <a href="#" class="list-group-item list">Second item</a>
 <a href="#" class="list-group-item list">Third item</a>
 <a href="#" class="list-group-item list">First item</a>
 <a href="#" class="list-group-item list">Second item</a>
<!-- dropdown --><div class="dropdown ">
<a href="#" class="list-group-item list  dropdown-toggle" data-toggle="dropdown">
Update & see Bill 
  <span class="caret"></span>
  <ul class="dropdown-menu">
    <?php $sql = "SELECT * FROM bus";
    $result = $db->selectDB($sql);
    if($result){
     while ($row = $result->fetch_assoc()) { ?>
    <li><a href="busbill.php?busid=<?php echo  $row['busid'];?>&busnum= <?php echo  $row['busnum'];?>" class="list-group-item list"><?php echo $row['busnum']; ?></a></li>
<?php } ?>
<?php } ?>
  </ul>  </a> </div>


<!-- dropdown -->
</div>
    </div>

    <div class="col-lg-9">
             <!--  carrosel-->
              <a href="bus.php">
               <div class="jumbotron">
               <div class="col-lg-12">
               <h1 style="color:#0cf1f9">Vist and add busses</h1>
                </div>
             </div> </a>
</div>
             <!-- carrosel -->


<div class="col-lg-1">

</div>
</div>
</div>



  <div class="row">
    <div class="col-lg-2">

    </div>
    <div class="col-lg-2">
      <br> <br> <br> <br>
         you can contact us:  <br>
         email: <a href="https//:asif.shapnil@gmail.com">asif.shapnil@gmail.com</a>
         address: 160/c, Baganbari Dhaka <br>
        Dhaka cantontonment 1206
    </div>
    <div class="col-lg-8">
      <form class="form-group" action="index.html" method="post">
        <label for=""><h3>Leave a message</h3></label> <br>
        <div class="form-controll">
          <textarea name="name" rows="8" cols="80"></textarea>
        </div>
        <div class="form-controll">
          <input type="submit" name="" value="send" class="pull-right" width="200px">
        </div>

      </form>
    </div>
  </div>









<?php include'inc/footer.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script type="text/javascript" src="js/hide.js">

</script>
