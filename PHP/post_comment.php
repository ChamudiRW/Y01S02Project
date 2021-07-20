<!DOCTYPE html>
<html>
<title> YCC: Contact us  </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="stylesheet" href="../CSS/style.css">
<link rel="stylesheet" href="../CSS/footer.css">
<link rel="stylesheet" href="../CSS/contacts.css">

</head>
<body>

<div id="navbar">
  <a href="#default" id="name">YCC Online Examination</a>
  <img src="..\IMAGES/logo.png" alt="company logo" class="logo" width="5.5%"  height="5.5%"> 
  <div id="navbar-right">
    <a  href="#home">Home</a>
    <a class="active" href="#contact">Contact</a>
    <a href="#about">User Profile</a>
    <a href="#about">About</a>
    
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>

<?php require_once 'action.php'; ?>

<?php
if(isset($_SESSION['message'])):
?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
?>
</div>
<?php endif ?>
<div class="container">
<?php
$mysqli = new mysqli('localhost', 'root', '', 'iwt') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM comments") or die($mysqli->error);

?>

<div>
<table>
    <thead>
    <tr>
    <th>Name</th>
    <th>Comment</th>
    
    </tr>
    </thead>

<?php
while ($row = $result->fetch_assoc()): ?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['comment']; ?></td>

<a href="post_comment.php?edit=<?php echo $row['id'];?>">Edit</a>
    <a href="action.php?delete=<?php echo $row['id'];?>">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table><br><br>
</div>
<?php

function pre_r($array){
    echo'<pre>';
    print_r($array);
    echo'</pre>';
}

?>
<form  id="form" class="topBefore" action="doc.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
    <label>Name</label>
    <input type="text" id="name" type="text"  placeholder="NAME" value="<?php echo $name; ?>" name="name">
    <label>Comment</label>
    <input type="text" id="message" name = "comment" type="text" placeholder="MESSAGE" value="<?php echo $comment; ?>" name="comment">
    <?php 
    if($update == true):
        ?>
    <button id="submit" type="submit" value="comment" type="submit" class="button" style="vertical-align:middle" name="update">Update</button>
    <?php else: ?>
    <button id="submit" type="submit" value="comment" type="submit" class="button" style="vertical-align:middle" name="save">Save</button>
    <?php endif; ?>
</form>


<!--footer------->
<div class="footer">
  <div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Our Service</h2>
    <br>
    <p>We understand every organization is different. That's why we've created affordable Online Testing Plans to suit our employees needs. From occasional usage to Enterprise Online exam  platform requirements, YCC Online Examination system is  Secure & reliable exam maker & online testing solution.</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Exam Policy</h2>
    <br>
    <p>Breaks are not allowed during the exam for any reason. You understand and agree that, if you take a break, your exam score will be invalidated, and you will not be allowed to resume the exam later.
        Eating, drinking, smoking, and chewing gum are prohibited during the exam.</p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Important Information</h2>
    <br>
    <p>Our web - based examination system allows to you to easily create and smoothly do online exam with advance multiple-choice questions prior to the upgrading or promoting your designation. Instead of that we  provide platform to send feedbacks through this Y.C.C examination system .</p>
  </div>
  <div class="column" style="background-color:#ddd;">
    <h2>Contact for Exam Issues</h2>
    <br>
    <br>
    <br>
    <p>Jane : +940112211111
      <br>
       Kane : +940112211111
       <br>
        Mike : +940112222222
       <br>
       YCC : ycc@gmail.com
    </p>
    <p>
  </div>
</div>
<p>Y.C.C (pvt) Ltd © 2020</p>
</div>




    </footer>
</html>
