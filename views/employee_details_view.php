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
            <li><a href="/ecwm604/index.php/edit">Edit</a></li>
            <li><a href="/ecwm604/index.php/search/">Search</a></li>
            <li><a href="/ecwm604/index.php/option/">Options</a></li>
            <li><a onclick="myFunction()">Sign Out</a></li><!--CHANGE LINK-->
        </ul>
        
        
        <h2>Edit/Delete Employee</h2>  



         
 <!-- GET EMPLOYEES DETAILS -->
                
                <Form action="/ecwm604/index.php/edit/updateEmployee" method="GET">
                    <table align="left" cellpadding="5">
            <?php
        
                foreach ($results as $val)
                { 
              ?>
                        <tr>
                            <td><input type=text name="emp_no"  readonly value="<?php  echo $val['emp_no'];?>" size="25"></td>
                        </tr>
                <tr>
                    <td><input type=text name="firstname" placeholder="Employee First Name" value="<?php  echo $val['first_name'];?>" size="25"></td>            
                    <td><input type=text name="lastname" placeholder="Employee Last Name" value="<?php  echo $val['last_name'];?>" size="25"></td>
                    
                </tr>
                <tr>
                    <td>Gender &nbsp;<input type="radio" name="gender" value="M">Male &nbsp;
                                <input type="radio" name="gender" value="F">Female</td>
                    <td>Date of birth (YYYY-MM-DD)</td>
                    <td><input type="text" name="DOB" value="<?php  echo $val['birth_date'];?>"></td>
                </tr>
                <tr>
                    <td><input type=text name="jobtitle" placeholder="Job title"  size="25" value="<?php  echo $val['title'];?>"  ></td>
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
                    <td><input type=text name="username" placeholder="Employee Username" value="<?php  echo $val['username'];?>"  size="25"></td>
                    <td><input type=text name="password" placeholder="Employee Password" value="<?php  echo $val['password'];?>"  size="25"></td>
                </tr>
                 <?php }

                    ?>
                <tr>
                    <td><input type=submit value="Update Employee" style="width:150px;">&nbsp;&nbsp;&nbsp;</td>
                </tr>
                
                   <tr>
                    <td><input type=button value="Delete Employee" onClick="'/ecwm604/index.php/edit/deleteEmployee'" style="width:150px;">&nbsp;&nbsp;&nbsp;</td>
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