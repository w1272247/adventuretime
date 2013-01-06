<html>
    <head>
        <title>Search - Private</title>
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
            <li><a href="/ecwm604/index.php/search/">Search</a></li>
            <li><a href="/ecwm604/index.php/option/">Options</a></li>
            <li><a onclick="myFunction()">Sign Out</a></li><!--CHANGE LINK-->
        </ul>
        
        
        <h2>Edit/Delete Employee</h2>
        
        Edit employees details by providing their employee number below

                <!-- GET EMPLOYEE NUMBER -->
                
                <Form action="/ecwm604/index.php/edit/getEmployee" method="GET">
                    <table align="left" cellpadding="5">

                        <tr>
                            <td><input type=text name="emp_no" placeholder="Employee No" size="25"></td>
                        </tr>
                        <tr>
                            <td><input type=submit value="Select Employee" style="width:150px;"></td>
                        </tr>
                    </table>
                </Form>   
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