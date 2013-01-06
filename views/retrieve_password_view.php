<html>
    <head>
        <title>Forgot Password</title>
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
            a:link,a:visited
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
            <li><a href="/ecwm604/index.php/auth/">Sign In</a></li>
        </ul>
        
        <Form  action="/ecwm604/index.php/password/get_password/" method="GET">
            <table align="center" width="250" cellpadding="5">
                <tr>
                    <th align="left">Forgot your password</th>        
                </tr>

                 <tr>
                    <td>Please enter your employee username and employee number</td>              
                </tr>
                <tr>
                    <td><b>*Username</b></td>              
                </tr>
                <tr>
                    <td  align="right"><input type=text name="username" length="10"  size="25">&nbsp;&nbsp;&nbsp;</td>
                </tr>
                <tr>
                    <td><b>*Employee Number</b></td>
                </tr>
                <tr>
                    <td  align="right"><input type=text name="emp_no"  length="10"  size="25">&nbsp;&nbsp;&nbsp;</td>
                </tr>
                <tr>
                    <td align="right"><input type=submit value="Retrieve Password" style="width:200px;">&nbsp;&nbsp;&nbsp;</td>
                </tr>
            </table>
        </Form>
    </body>
    
</html>