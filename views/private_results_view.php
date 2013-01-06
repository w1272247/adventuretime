<html>
    <head>
        <title>Search Results - Private</title>
        
        <style>
            ul
            {
                list-style-type:none;
                margin:0;
                padding:0;
                overflow:hidden;
            }
            li
            {
                float:left;
            }
            a:link,a:visited,a
            {
                display:block;
                width:120px;
                font-weight:bold;
                color:#FFFFFF;
                background-color:#98bf21;
                text-align:center;
                padding:4px;
                text-decoration:none;
                text-transform:uppercase;
            }
            a:hover,a:active
            {
                background-color:#7A991A;
            }
            body
            {
                font-family:"Verdana";
                font-size:15px;
            }
           
            input 
            {
                font-family:"Verdana";
            }
        </style>
    </head>


<body>
        <ul>
            <li><a href="/ecwm604/index.php/auth/add_employee">Add</a></li>
            <li><a href="/ecwm604/index.php/edit/">Edit</a></li>
            <li><a href="/ecwm604/index.php/search/">Search</a></li>
            <li><a href="/ecwm604/index.php/option/">Options</a></li>
            <li><a onclick="myFunction()">Sign Out</a></li><!--CHANGE LINK-->
        </ul>
    
    <h2>Employee Search Results - Private</h2>
   
<?php

    $firstname = $_GET['firstname']; 
    $lastname = $_GET['lastname'];
    $jobtitle = $_GET['jobtitle']; 
    $dept = $_GET['dept']; 
    
    print ("You searched for " .'<br>');
    print ("First name: " . $firstname . '<br>');
    print ("Last name: " . $lastname . '<br>');
    print ("Job title: " . $jobtitle . '<br>');
    print ("department: " . $dept . '<br><br>');
    
?>
    
<div style="width: 800px; height: 500px; overflow: scroll;">
     <table border="1">  
        <tr>
            <td width="150">Employee Number</td>
            <td width="150">First Name</td>
            <td width="150">Last Name</td>
            <td width="150">Job Title</td>
            <td width="150">Employee Salary</td>
            <td width="150">Permission</td>
        </tr>
    </table> 
        
   <?php
        // List up all results.
        foreach ($results as $val)
   {
            
   ?>
        <table border="1">  
        <tr>
            <td width="150"><?php echo $val['emp_no'] ?></td>
            <td width="150"><?php echo $val['first_name'] ?></td>
            <td width="150"><?php echo $val['last_name'] ?></td>
            <td width="150"><?php echo $val['title'] ?></td>
            <td width="150"><?php echo $val['salary'] ?></td>
            <td width="150"><?php echo $val['permission'] ?></td>
        </tr>
    </table> 
            
   <?php
   
   }
        
   ?>
</div>
    
    
</body>

        <script>
            function myFunction()
            {

                var r = confirm("Are you sure you want to sign out?");
                if (r == true)
                  {
                    window.location = "/ecwm604/index.php"; 
                    
                  }
                else
                  {
                    alert= "You pressed Cancel!";
                  }
                document.getElementById("demo").innerHTML=x;
            }
        </script>
</html>

