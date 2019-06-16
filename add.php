  <html>

  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
  </script>
  </head>
  <body>
  <form id="form_language" method=""> 
  <h3 >Personal Details</h3>
  <div class="col-md-4">

  <label>Name</label>
  <input type="text"  id="txt_name" name="txt_name" placeholder="Name" required="">

  </div>

  <div class="col-md-4">
  <label>Email</label>
  <input type="text"  id="email" name="email" placeholder="Email">

  </div>
  <div class="col-md-4">
  <label>Address</label>
  <input type="text"  id="address" name="address" placeholder="Address">

  </div>


  <br>
  <button type="submit" id="btnsubmit" >Submit</button>
  <center><div id="result"></div></center>

  </form>



  <table >
  <thead>
  <tr>
  <th>Sr. No</th>
  <th>NAME</th>
  <th>EMAIL</th>
  <th>ADDRESS</th>
  </tr>
  </thead>
  <tbody>

  <?php
  include("config.php");
  $sr_no=0;
  $select=mysql_query("SELECT * FROM user;");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  {

  $id=$userrow['id'];
  $name =$userrow['name'];
  $email=$userrow['email'];
  $address=$userrow['address'];
  $sr_no++;

  ?>
  <tr>
  <td><?php echo $sr_no; ?></td>

  <td><?php echo $name; ?></td>
  <td><?php echo $email; ?></td>
  <td><?php echo $address; ?></td>


  </tr>
  <?php 
  } 
  ?>
  </tbody>
  </table>
  </body></html>
  <!-- insert script -->
  <script>

  $('form#form_language').submit(function(e){

  e.preventDefault();

  $.ajax({ 

  url:'insert_language.php',
  type:'POST',

  data:new FormData(this),
  contentType:false,
  processData:false,

  success: function(data)
  {
 
  if(data==1) 
  {
  alert('successlly inserted');
  window.setTimeout(function()
  { 
  location.reload();
  } ,1500);
  }
  else 
  {
  alert('error !!!');

  } 

  }

  })

  });
  </script> 




  <!-- <td>
<a href="delete.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
        <span class="delete" title="Delete"> DELETE </span></a>
<br>
<a href="edit.php?id=<?php echo $id; ?>"><span class="edit" title="Edit" name="edit"> EDIT </span></a>
</td> -->


<!-- <?php 
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysql_query("SELECT * FROM student WHERE id='$id'");
  $profile=mysql_fetch_array($getselect);
   
    $username=$profile['name'];
  
  ?>




 -->