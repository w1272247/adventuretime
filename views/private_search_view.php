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
            <li><a href="/ecwm604/index.php/edit/">Edit</a></li>
            <li><a href="/ecwm604/index.php/option/">Options</a></li>
            <li><a onclick="myFunction()">Sign Out</a></li><!--CHANGE LINK-->
        </ul>
        
        
        <h2>Employee Search - Private</h2>
        
        <h2>Welcome</h2>
        
        Search for employees by providing any of the information below
              
        <Form action="/ecwm604/index.php/find/findemp/" method="GET">
            <table align="left" cellpadding="5">

                <tr>
                    <td>Fist name</td> 
                    <td><input type=text name="firstname" size="25"></td>
                    <td>Last name</td>
                    <td><input type=text name="lastname" size="25"></td>
                </tr>
                <tr>
                    <td>Job title</td>
                    <td><input type=text name="jobtitle" size="25"></td>
                    <td>Department</td>
                    <td><select name="dept">
                            <option value="customerservice">Customer Service</option>
                            <option value="development">Development</option>
                            <option value="finance">Finance</option>
                            <option value="hr">Human Resources</option>
                            <option value="marketing">Marketing</option>
                            <option value="production">Production</option>
                            <option value="qualitymangement">Quality Management</option>
                            <option value="research">Research</option>
                            <option value="sales">Sales</option>
                        </select></td>
                </tr>   
                <tr>
                    <td align="right"><input type=submit value="Search" id="findsubmit" style="width:100px;">&nbsp;&nbsp;&nbsp;</td>
                </tr>
              
            </table>
        </Form>
        
        <div id="mydiv"></div>
        <script language="javascript">
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
