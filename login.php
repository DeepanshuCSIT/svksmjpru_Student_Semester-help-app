<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVKSMJPRU</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
    *{
    margin: 0;
    padding: 0;
}
body{
    height: 100%;
    width: 100%;
    background-image: url("vector2.jpg");

}


 section .contentbx{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 43px 1px;
}
section .contentbx .formbx{
    width: 57%;
    background: linear-gradient(326deg, rgb(120 232 178 / 79%) 0%, rgba(207,208,209,0.8242647400757178) 50%, rgba(196,215,220,1) 100%);
    border-radius: 42px;
    padding: 28px 36px;
}
section .contentbx .formbx h2{
    color: #972727;
    font-weight: 600;
    font-size: 1.5rem;
    text-transform: uppercase;
    margin-bottom: 20px;
    border-bottom: 4px solid #972727;
    display: inline-block;
    letter-spacing: 1px;
}
section .contentbx .formbx .inputbx{
    margin-bottom: 29px;
}  
section .contentbx .formbx .inputbx abbr{
    border-radius: 10px;
}
section .contentbx .formbx .inputbx span{
    font-size: 16px;
    margin-bottom: 5px;
    display: inline-block;
    color: #1550e7;
    font-weight: 300;
    font-size: 16px;
    letter-spacing: 1px;
}
section .contentbx .formbx .inputbx input{
    width: 82%;
    padding: 13px 40px;
    outline: none;
    font-weight: 400;
    border:  1px solid #1550e7;
    font-size: 16px;
    letter-spacing: 1px;
    color: #1550e7;
    background: #ffffff;
    border-radius: 30px;
}
section .contentbx .formbx .inputbx input[type="submit"]
{
    background: linear-gradient(29deg, rgba(183,216,176,0.9139005944174545) 0%, rgb(203 57 41 / 80%) 100%);
    color: #fff;
    outline:none;
    border: none;
    font-weight: 500;
    cursor: pointer;  
    margin: 0px 34px;
} 
section .contentbx .formbx .inputbx input[type="submit"]:hover{
    background: #21ac4b;
}

.social{
    margin: 10px 30px;
}
section .contentbx .formbx .social a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(0 188 236 /24%);
    margin:0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #dc851d;
    transition: all 0.5s ease;
}
section .contentbx .formbx .social a:hover{
    color: #24262b;
    background-color: #ffffff;
}
section .contentbx .formbx .inputbx p a{
    color: #ef0808;
}
section .contentbx .formbx h3{
    color: #594ecc;
    text-align: center;
    margin: 21px 26px;
}





.h-primary{
    font-size: 2.1rem;
    padding: 5px 358px;
    width: 801px;
    color: rgb(40 139 234 / 95%);
    font-family: 'Ibarra Real Nova', serif;
}
.h-primary hr{
    border-color: brown;
}
.h-secondary{
    font-size: 1.4rem;
    padding: 66px 0px;
    margin: -83px -80px;
    width: 389px;
    color: rgb(168 36 36);
    font-family: 'Ibarra Real Nova', serif;
}
.h-fourth{
    padding: 5px 108px;
    margin: -79px 10px;
    color: brown;
    font-size: 1.2rem;
}
.h-fifth{
    padding: 5px 108px;
    margin: 92px 10px;
    color: brown;
    font-size: 1.2rem;
}
.h-six{
        font-size: 1.1rem;
        color: #d68d8d ;
        margin: 17px -37px;
}
.h-six pre{
    margin: -24px -132px;
}
.h-seven{
    font-size: 1.2rem;
    color: #1f525c ;
    margin: 6px -14px;
    width: 250px;
}
.h-eight{
    font-size: 1.2rem;
    color: #d68d8d ;
    margin: 6px -43px;
}
.h-twele{
    color: rgb(56, 49, 49);
    padding: 35px 1px;
    font-family: 'Ibarra Real Nova', serif;
    text-decoration: none;
}
.h-thirteen{
    font-size: 1.1rem;
    color: #e76f2a ;
}
.h-forteen{
    font-size: 1rem;
    color: #d68d8d ;
}
.h-fifteen{
    font-size: 1rem;
    width: 385px;
    padding: 2px 9px;
    margin: -39px 470px;
    color: rgb(99 232 245);
    font-family: 'Ibarra Real Nova', serif;
}
.h-sixteen{
    font-size: 1.1rem;
    padding: 12px 55px;
     color: rgb(121, 107, 107) ;
}
.h-seventeen{
    font-size: 1.2rem;
    padding: 5px 47px;
    color: rgb(53, 44, 49);
}
</style>






</head>
<body>
    
    <section>
        <div class="contentbx">
             <div class="formbx">
                <h2>Login</h2>
                <form  action="#" method="POST">
                    <div class="inputbx">
                        <span><i class="fa fa-envelope" aria-hidden="true"></i> Username</span>
                        <abbr title="Enter Email id"><input type="text" placeholder="Enter Email id" name="spemail" required></abbr>
                    </div>
                    <div class="inputbx">
                        <span><i class="fa fa-lock" aria-hidden="true"></i> Password</span>
                        <abbr title="Enter Password"><input type="password" placeholder="Enter Password" name="sppass" required></abbr>
                    </div>
                <div class="inputbx">
                    <input type="submit" value="Sign in" name="ssubmit">
                </div>
                <div class="inputbx">
                    <p class="h-seven">Don't have an account? <a href="index.php">Sign up</a></p>
                </div>
                </form>
                <div class="social">
                    <a href="https://www.linkedin.com/in/deepanshu-saxena-b33a82214"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/dipanshu.saxena.9809"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/BALAJIISVKS?t=ig3BlyUumtYkdyECOb9fA&s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </div>
             </div>
        </div>
    </section>





<?php

include 'database.php';

if(isset($_POST['ssubmit']))
{
    $email = $_POST['spemail'] ;
    $password = $_POST['sppass'] ;

    $email_search = " SELECT * FROM registration WHERE email = '$email' && password = '$password' ";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count == 1){
            ?>
                 <script>
                  location.replace("home page.php") ;
                 </script>
            <?php
        }else{
            ?>
            <script>
              alert("Incorrect password or email") ;  
            </script>
            <?php         
       }
       
    }
?>





<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "signup";

$con = mysqli_connect($server,$user,$password,$db);

?> 

</body>
</html>