<?php  session_start(); 

if (isset($_SESSION['login']) ){
                $con = mysqli_connect('localhost','root','universe','mydb');
         
                 $result = mysqli_query($con,"select * from student where pid=".$_SESSION['login'].";");
            

                 $row = mysqli_fetch_array($result);
                               }

      if ( !isset($row['cg']) ) {
                $company = 1;
                $con = mysqli_connect('localhost','root','universe','mydb');
         
                 $result = mysqli_query($con,"select * from company where pid=".$_SESSION['login'].";");
            

                 $row = mysqli_fetch_array($result);
                                }


                $con2 = mysqli_connect('localhost','root','universe','mydb');
         
                 $result2 = mysqli_query($con2,"select * from student where pid=".$_POST['pid'].";");
            

                 $row2 = mysqli_fetch_array($result2);
                              
 

?>



<!doctype html>
<html>
      <head>
            <title> Tnp-Cell IIT Ropar </title>
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/styles.css" rel="stylesheet">
      </head>

      <body>
            <div class="navbar navbar-inverse navbar-fixed-top">
            
                 <div class="container">
                   <a href="index.php" class="navbar-brand"> Training and Placement Cell IIT Ropar </a>
              
                   <button class="navbar-toggle" data-toggle="collpase" data-target=".navHeaderCollapse">
                      <span class="icon-bar"> </span>
                      <span class="icon-bar"> </span>
                      <span class="icon-bar"> </span>
                   </button>
                    <div class ="collapse navbar-collapse navHeaderCollapse">
                      <ul class="nav navbar-nav navbar-right">
                         <li>  <a href="index.php"> Home </a> </li>
                         <li>  <a href="studentlogin.php"> Student </a> </li>
                         <li>  <a href="companylogin.php"> Company </a> </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Services </a>
                            <ul class="dropdown-menu">
                               <li> <a href="http://services.iitrpr.ac.in"> Services Home </a> </li>
                               <li> <a href="http://10.1.201.10"> Satluj-Intranet </a> </li>
                               <li> <a href="http://10.1.201.10/moodle"> Moodle </a> </li>
                               <li> <a href="http://10.1.0.78/mediawiki"> Media Wiki </a> </li>
                               <li> <a href="http://10.1.1.150/videoportal"> Video Portal </a> </li>
                            </ul>
                         </li> 
                      
                        <li>  <a href="#contact" data-toggle="modal"> Contact us </a> </li>

                        <?php  if (isset($_SESSION['login']) ){
                                     ?>
                            
                       <li> 
                         <a href="logout.php"> Logout  </a> </li>
   

                       <?php
                                                      }
                        else   {
                       ?>
                <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Join </a>
                             <ul class="dropdown-menu">
                                <li> <a href="newstudent.php"> New Student </a>
                                <li> <a href="newcompany.php"> New Company </a>
                             </ul>
                        </li>
               <?php
                                }
                           ?>         
                       </ul>                
                     </div>
                 </div>
 
            </div>
<br>
<br>
<br>
<br>
<br>



            <div class="container">

                  <div class="jumbotron">
                          <h1>  TnP Cell - IIT ROPAR </h1>

    <?php
               if (!isset($_SESSION['login'])) {
     ?>
	
                          <p> 

Welcome to the training and placement website of IIT Ropar. It is a matter of great pleasure for the institute to take this opportunity to invite potential companies to experience and evaluate the dexterities, competency, skills and talent of our students and absorb them into their esteemed organizations.
                          </p>
                        <center>
                    <form action="studentlogin.php">
                        <input type="submit" class="btn btn-success" value="I'm a STUDENT"> 
                    </form>
                    <form action="companylogin.php">
                        <input  type="submit" class ="btn btn-primary" value="I'm a COMPANY">
                    </form>
                        </center>
 
       <?php  
                                                }

                 else                           {

                                                
         ?>

            <p> Welcome <?php  echo $row['username']; ?>  , you're at <?php echo $row2['username'];?> </p>

            

          <?php
                                                   }
            ?>

            </div>
            </div>

            

            <div class="container">
               <div class="jumbotron">
                   <p>

<?php
    echo "information about student..................";
    echo "<br>";

     

    ?>
                       

                    </p>  
         
               </div>
                 
            </div>

            


 
            <div class="navbar navbar-default navbar-fixed-bottom">
                     <div class="container">
                         <p class="navbar-text pull-left"> Site built by Team 6(Vishwash Batra,Jaskaran virdi,Lalit Verma,Navneet Singh,Bhavia Raj, Alok mishra) </p>
                         <a href="http://www.iitrpr.ac.in" class="navbar-buton btn-danger btn-pull-right"> IIT Ropar </a>
                     </div>
            </div>

 
            <div class="modal fade" id="contact" role="dialog">
                       <div class="modal-dialog">
                                  <div class="modal-content">
                                          <div class="modal-header">
                                               <h4> Contact TnP Cell </h4>

                                           </div>
                                           <div class="modal-body">
                                              <p> To Contact TnP Cell IIT Ropar </p>
                                              <a class="btn btn-default">Contact </a>
                                              <a class="btn btn-default" data-dismiss="modal">Close </a>
                                           </div>
                                  </div>
                       </div>
            </div>

            

           <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
           <script src="js/bootstrap.js"> </script>
      </body>
</html>
