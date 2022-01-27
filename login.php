<!DOCTYPE html> 
<html> 
    <head> 
        <?php
            include("head.php");
        ?>
        <link  rel="stylesheet" href="style.css" id="style">
        <title></title>  
    </head> 
    <body>
        <?php
            include("nav.php");
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-5 col-md-4 text-center">
                    <h1 class='text-white'>Login Form</h1>
                    <form action="" method="post" name="Login_Form" class="form-login"></br>
                        <h4>Secure Login</h4>
                        </br>
                        <input type="text" id="userName" name="Username" class="form-control input-sm chat-input" placeholder="username"/>
                        </br></br>
                        <input type="password" id="userPassword" name="Password" class="form-control input-sm chat-input" placeholder="password"/>
                        </br></br>
                        
                            <input name="Submit" type="submit" value="Login" class="Button3">
                       
                    </form>
                </div>
            </div>
            </br></br></br>
            
        </div>
        <?php 
            if(isset($_POST['Submit']))
            {
            
                $logins = array("Username"=>'Vaishnavi',"Password"=>'vaishu@27'); 
                // Check and assign submitted Username and Password to new variable /
                $Username=$_POST['Username'];
                $Password=$_POST['Password'];
                if($_POST['Username']==$Username){$_POST['Username'] = '';}
                if($_POST['Password']==$Password) { $_POST['Password'] = '';} 
                // Check Username and Password /
                if ($logins['Username']== $Username && $logins['Password'] == $Password)
                {
                    
                    echo "<span style='color:white'><h2> Login SuccessFull!!</h2></span>"; 
                    
                } 
                else
                { 
                    echo "<span style='color:red; padding-bottom:20px'><h2>Invalid Login Details</h2></span>"; 
                } 
            } 
        ?>

        <?php       
            include("foot.php");
        ?>

    </body>
</html>


