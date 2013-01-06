<html>
    <head>
        <title>Create Employee</title>
        
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
            <li><a href="/ecwm604/index.php/search/">Search</a></li>
            <li><a href="/ecwm604/index.php/auth/add_employee">Add</a></li>
            <li><a href="/ecwm604/index.php/edit/">Edit</a></li>
            <li><a href="/ecwm604/index.php/option/">Options</a></li>
            <li><a onclick="myFunction()">Sign Out</a></li><!--CHANGE LINK-->
        </ul>
        
        <h2>Create new employee - confirmation</h2>
    
//<?php 
//    $firstname = $_POST['firstname']; 
//    $lastname = $_POST['lastname']; 
//    $dob = $_POST['DOB'];
//    
//    $jobTitle = $_POST['jobtitle']; 
//    $department = $_POST['dept']; 
//    $gender = $_POST['gender'];
//    
//    $currentDate = date("Y-m-d");
//    
//    if (($firstname == "") || ($lastname == "") || ($dob == "")||($jobTitle == ""))
//        {
//            print "Error, none of the text boxes must be empty";
//        }
//    else 
//        {
//            print ($firstname);
//            print ($lastname);
//            print ($dob);
//            print ($jobTitle);
//            print ($department);
//            print ($gender);
//            print ($currentDate);
//        }
//?>


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
    
    
</body>


  