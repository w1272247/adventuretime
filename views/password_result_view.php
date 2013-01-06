<html>
    <head>
        <title>Password Result</title>
        
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
            <li><a href="/ecwm604/index.php/auth/">Sign In</a></li>
        </ul>
        
        <?php
        $username = $_GET['username']; 
        ?>
    
    <h2>Employee Password Results for <?php  echo $username; ?></h2>
    
        <?php
        
          foreach ($results as $val)
          {
               echo "Your password is " . $val['password'];
          }

        ?>
</body>
</html>
