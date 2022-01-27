<?php

    error_reporting(0);
    //define variables
    $nameErr=$eidError=$passError=$confError=$genError=$cityError=$feedError="";
    if(isset($_POST['sub']))
    {
        //name validation
        $nam=$_POST['name'];
        $eid=$_POST['email'];
        $pass=$_POST['password'];
        $confpass=$_POST['confpass'];
        $city=$_POST['city'];
        $feedback=$_POST['feedback'];




        if(empty($nam))
        {
            $nameErr="Name is requried";
        }
        else 
        {
            if(!preg_match("/^[a-zA-Z ]+$/",$nam))
            {
                $nameErr="Only Alphabate Allow";
            }
        }

        //Email
        if(empty($eid))
        {
            $eidError="Email is requried";
        }
        else 
        {
            if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$eid))
            {
                $eidError="Only Alphanumeric values Allow";
            }
        }
     
        
          

        //feedback
        if(empty($feedback))
        {
            $feedError="Feedback is requried";
        }
        else 
        {
            if(!preg_match("/^[a-zA-Z ]+$/",$feedback))
            {
                $feedError="Only Alphabate Allow";
            }
        }





        

    }

   
    function input_field($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

?>






<!DOCTYPE html> 
<html> 
    <head>
        <?php
            include("head.php");
        ?>
        <style>
             .error{
                color:red;


            }
            *{
                box-sizing: border-box;
            }
            
            #fname,#email,#pass,#cpass,#gen,#city,#fback {
                width: 99%;
                padding: 12px;
                margin: 8px;
                
                border: 1px solid #ccc;
                border-radius: 4px;
                
            }

            #sub {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px ;
                
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
            }



            div {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

            .reg{
                margin-bottom:3%;
            }

        </style>
    </head>
    <body>
        <?php
            include("nav.php");
        ?>
        <div>
            <h2>contact</h2>
        </div>
        <div class="reg">
        <form method="post" class="form">
            <span class="error"></span>
            Name:<input type="text" id="fname" name="name"><span class="error"><?php echo $nameErr;?></span>
            
            Email:<input type="email" id="email" name="email"><span class="error"><?php echo $eidError;?></span>
            
        
            City:<input type="text" id="city"   name="city"><span class="error"><?php echo $cityError;?></span>
           
            FeedBack:<input type="text" id="fback"   name="feedback"><span class="error"><?php echo $feedError;?></span></br>

            
            <input type="submit" id="sub" value="Submit" name="sub"></br>

        </form>

        </div>
        

        <?php       
            include("foot.php");
        ?>
    </body>
</html>