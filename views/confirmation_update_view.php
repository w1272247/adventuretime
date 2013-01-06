<html>
    <head>
        <title>Change Password</title>
        
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
    </body>
    <h2>Thank You...</h2>
    
    Your details have been changed 
    
    
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