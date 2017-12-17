<html>
<head>
	
</head>
<body>
  <?php
		//error_reporting (E_ALL ^ E_NOTICE);
       include ("connect.php");
          if (isset ($_POST['buton']))
           { 
               // +++ test sa nu fie goale
            //session_start();
            $numeutilizator=$_REQUEST['us'];
			$parola=md5($_REQUEST['pas']);
			//echo $numeutilizator." ".$parola;
            //$exista=("SELECT user, passw, nume FROM elevi  WHERE user='$numeutilizator' and passw='$parola' ");
			if ($q=@mysqli_query($db_connect,"SELECT user, passw, nume FROM elevi  WHERE user='$numeutilizator' AND passw='$parola' "))
			   {
			     if (mysqli_num_rows($q)>0)
				   {
				     $linie=mysqli_fetch_array($q);
                     $_SESSION['user']=$linie[0];
					  include 'lgx.php';				      
				   }
				   else
				   {
				    include 'lgx.php';
				   ?>
				   
				   <script type="text/javascript">
								   alert("User sau parola nu exista!");
 		            </script>
				   <?php		   
				   
				   }
				  
			   
			   }
			    else
				{
				  echo "Autentificare imposibila !";
                  }
            mysqli_close($db_connect);
           }
   ?> 




</body>
</html>