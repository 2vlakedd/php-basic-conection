<html>
<head>


<?php
include "connection.php";
?>



</head>
<body>


  <form action="" name="form1" method="post">

<p><b><h1>REGISTER</h1></b></p>
<table>

<td><b>First Name:</td>
      <td><input type="text"  id="firstname" placeholder="ENTER"  name="firstname"></td>
  </tr>
      </tr>
      <tr>
<td><b>Last Name:</td>
      <td><input type="text"  id="lastname" placeholder="ENTER" name="lastname"></td>
  </tr>
        </tr>
       <tr>
<td><b>Middle Name:</td>
      <td><input type="text"  id="middlename" placeholder="ENTER" name="middlename"></td>
  </tr>
 </tr>


     <tr>
<td><b>Employee Number
:</td>
      <td><input type="text"  id="empnumber" placeholder="ENTER" name="empnumber"></td>
  </tr><br>
  </tr>

 
 <tr>
 <td><b>Email:</td>
      <td> <input type="text"  id="email" placeholder="ENTER" name="email"></td>
  </tr>



  <tr>
  <td><b>Password:</td>
      <td> <input type="text"  id="pass" placeholder="ENTER" name="pass"></td>
  </tr>


 <td><b>Role:</td>
      <td> <input type="text"  id="role" placeholder="ENTER" name="role"></td>
  </tr>



 

<tr>
<td>                      </td>
<td>

      <input type="submit" name="insert" value="Register" />




    </td>
</tr>




  </div>





</body>

</table >

  </form>


</html>
<?php
include "connection.php";
if (isset($_POST["insert"]))
{
    mysqli_query($link,"insert into employee values('$_POST[firstname]',
    '$_POST[lastname]','$_POST[middlename]','$_POST[empnumber]','$_POST[email]',
    '$_POST[pass]','$_POST[role]')");
    ?>
        <script type ="text/javascript">

        window.location.href=window.location.href;

        </script>
        <?php
    }

?>