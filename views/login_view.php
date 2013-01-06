<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sign In</title>
        <script>
            function publicSearch()
            {
                document.getElementById("demo").innerHTML="Hello World";
            }
        </script>
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
            
          
        </style>
    </head>
    <body>
        
       
        <Form action="/ecwm604/index.php/auth/authenticate" method="GET">
            <table align="center" width="250" cellpadding="5">
                <tr>
                    <th align="left">Sign In</th>        
                </tr>

                <tr>
                    <td><b>Username</b></td>              
                </tr>
                <tr>
                    <td  align="right"><input type=text name="username" length="10"  size="25">&nbsp;&nbsp;&nbsp;</td>
                </tr>
                <tr>
                    <td><b>Password</b></td>
                </tr>
                <tr>
                    <td  align="right"><input type=password name="password"  length="10"  size="25">&nbsp;&nbsp;&nbsp;</td>
                </tr>
                <tr>
                    <td align="right"><input type=submit value="Sign In" style="width:100px;">&nbsp;&nbsp;&nbsp;</td>
                </tr>
                <tr>
                    <td align="center"><a href="/ecwm604/index.php/password"><u>Forgot your password?</u></a> <!-- MAKE LINK --> </td>
                </tr>
            </table>
        </Form>
        <Form action="/ecwm604/index.php/search/public_search" method="GET">
            <table align="center" width="250" cellpadding="5">
                <tr>
                    <td>Don't have an account? You can still search</td>
                </tr>
                <tr>
                    <td align="center"><input type=submit value="Search" style="width:200px;"></td>
                </tr>
            </table>
        </Form>
        
    </body>
</html>
