<!DOCTYPE html>
<?php
        include __DIR__ . '/model/model_patients.php';
        include __DIR__ . '/functions.php';
        $patients = getPatients();
?>
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <style>
            .nav {
 padding: 0px 50px;
    font-family: sans-serif;
}
 
 .nav .menu-btn {
  display:none;
 }
  
.nav-content {
 padding: 0;
 list-style-type: none;
 display: inline-block;
 margin: 0px;
}
 
 .nav-content li {
  display: inline-block;
 }
  
  .nav-content li a {
   text-decoration:none;
   padding: 14px 10px;
   display: flex;
  }
   
   .nav-content li a .fa-caret-down {
    padding: 0px 10px;
   }
 
.dropdown .close-dropdown .fa-times {
 padding-right:10px;
 float: right;
 display:none;
}
 
.dropdown:hover .dropdown-menu {
    display: block;
}
 
.dropdown-menu {
    position: absolute;
    z-index: 1;
    min-width: 130px;
 display:none;
}
 
.search-area {
 float:right;
 list-style-type: none;
 display: inline-block;
 padding: 8px;
}
 
 .search-area input {
  border-radius: 4px;
  padding: 6px;
  transition: all .5s;
 }
  
 .search-area input:focus {
  border-radius: 4px;
  outline: none;
 }
 
.btn-search {
 border-radius: 4px;
 padding: 6px;
    cursor: pointer;
 transition: all .5s;
}
 
svg:not(:root).svg-inline--fa {
    padding-right: 5px;
}
/*  CSS for style layout end*/
 
 
/* CSS Media Query for 768p start */
@media screen and (max-width: 768px) {
  
 .bottom-border-nav{
  border-bottom:0.1px solid;
 }
  
 .nav {
  padding: 0px;
 }
  
 .nav .menu-btn {
  display:block;
  padding: 10px;
  font-size:2rem;
 }
  
 .nav-elements {
  display:none;
 }
  
 .nav-sky .search-area {
  border-top: 1px solid #fff;
 }
  
 .nav-content {
  display: block;
 }
  
  .nav-content li {
   display: block;
  }
  
 .dropdown-menu {
  position: relative;
  min-width: auto;
 }
  
  .dropdown-menu a {
   padding-left: 20px !important;
  }
   
 .search-area {
  float: none;
  width: 100%;
  padding: 12px 8px;
  border-top:0.1px solid;
 }
} 
/* CSS Media Query for 768p end */
 
 
/* CSS for sky theme start*/
.nav-sky {
 color:#fff;
 background-image: linear-gradient(#44adff, #8acbfd);
}
 
 .nav-sky .nav-content li a {
  color:#fff;
 }
  
 .nav-sky .nav-content li a:hover, .nav-sky .dropdown:hover .dropdown-link {
  background-image: linear-gradient(#1096ff, #5fb8ff);
 }
   
 .nav-sky .dropdown-menu {
  background-color: #a2d5fd;
  box-shadow: 0px 5px 10px #abdaff;
 }
  
 .nav-sky .search-area input {
  color: #fff;
  background: transparent;
  border: 1px solid #fff;
 }
  
 .nav-sky .search-area input:focus {
  box-shadow: 0px 0px 10px #fff;
 }
 
  
 .nav-sky .search-area input::placeholder {
  color:#fff;
 }
  
 .nav-sky .btn-search {
  background: transparent;
  border: 1px solid #fff;    
  color: #fff;
 }
  
 .nav-sky .btn-search:hover, .btn-search:focus {
  background-color: #0182e6;
  border: 1px solid #0182e6;    
  color: #fff;
 }
 
 .nav-sky .active {
  background-image: linear-gradient(#1096ff, #5fb8ff);
 }
        </style>
    </head>
    <body id="viewPatients">

        <ul>
            <li><a href="https://se266-oliva.herokuapp.com/">Home</a></li>
        </ul>

        <div class="nav nav-sky">
    
    <div class="menu-btn"> <i class="fas fa-bars"></i> </div>
     
    <div class="nav-elements">
     
     <ul class="nav-content">
       
      <li> <a href="#" title="Home" class="active"> <i class="fas fa-home"></i> Home </a> </li>
       
      <li> <a href="#" title="About"> <i class="fas fa-address-card"></i> About </a> </li>
       
      <li>
        
       <div class="dropdown">
         
        <a href="#" class="dropdown-link" title="Gallery">
         <i class="fas fa-camera"></i> Gallery <i class="fas fa-caret-down"> </i>  
        </a>
         
        <div class="dropdown-menu">       
          
         <a href="#" title="Option 1"> Opton 1 </a>
         <a href="#" title="Option 2"> Opton 2 </a>
         <a href="#" title="Option 3"> Opton 3 </a>
          
        </div>
         
       </div>
        
      </li>
       
      <li> <a href="#" title="Contact"> <i class="fas fa-phone"></i> Contact </a> </li>
       
     </ul>
</div>
</div>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birthdate</th>
                    <th>Age</th>
                    <th>Married</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($patients as $row): ?>
                    <tr>
                        <td><?= $row['id'];?></td>
                        <td><?= $row['patientFirstName'];?></td>
                        <td><?= $row['patientLastName'];?></td>
                        <td><?= $row['patientBirthDate'];?></td>
                        <td><?= calcAge($row['patientBirthDate'])->format("%y Years");?></td>

                        <td>
                            <!--<?= $row['patientMarried']==1?"Yes":"No";?>-->

                            <?php 
                            if($row['patientMarried'] == 1)
                            {
                                $status = "Yes";
                                echo $status;
                            }
                            else
                            {
                                $status = "No";
                                echo $status; 
                            } 
                            ?>

                        </td>

                        <td><a class="editLink" href="addPatient.php?id=<?=$row['id']?>&action=edit">Edit</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
            <a href="addPatient.php?action=add" id="addBtn">Add Patient</a>
            
            <script>
    $(document).ready(function(){
        $(".menu-btn").click(function(){
            $(this).toggleClass("bottom-border");
            $(this).next(".nav-elements").slideToggle("slow");
        });
    });
</script>
            <script data-src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script defer data-src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
    </body>
</html>