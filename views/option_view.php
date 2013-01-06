<html>
    <head>
        <title>Employee Option's</title>
       
        <style>
            body
            {
                font-family:"Verdana";
                font-size:15px;
            }
            table
            {
                border-collapse:collapse;
            }
            table, th
            {
                border:1px solid black;
            }
            input 
            {
                font-family:"Verdana";
            }
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
           
        </style>
    </head>
    
    <body>
        
         <ul>
            <li><a href="/ecwm604/index.php/auth/add_employee">Add</a></li>
            <li><a href="/ecwm604/index.php/edit/">Edit</a></li>
            <li><a href="/ecwm604/index.php/search/">Search</a></li>
            <li><a onclick="myFunction()">Sign Out</a></li><!--CHANGE LINK-->
        </ul>
        
        <Form>
            <table align="center" width="250" cellpadding="5">
                <tr>
                    <th align="left">Employee Options</th>        
                </tr>
                 <tr>
                    <td align="center"><input type=button value="Change Username" onclick="window.location = '/ecwm604/index.php/option/changeUsername';" style="width:200px;"></td>              
                </tr>
      
                <tr>
                    <td align="center"><input type=button value="Change Password" onclick="window.location = '/ecwm604/index.php/option/changePassword';" style="width:200px;"></td>              
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