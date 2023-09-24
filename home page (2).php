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
	animation: example 40s linear infinite alternate;
}  
@keyframes example{
    0% {
		background-image: url("vector1.jpg");
	}
    50% {
		background-image: url("vector3.png");
    }
    100% {
		background-image: url("vector6.jpg");
    }
}
  
.dropbutton{
    position: fixed;
    width: 60px;
    height: 59px;
    background: linear-gradient(144deg, rgb(192 210 94) 0%, rgb(210 127 168 / 60%) 100%);
    bottom: 40px;
    right: 9px;
    text-decoration: none;
    text-align: center;
    line-height: 57px;
    color: whitesmoke;
    font-size: 2rem;
    border-radius: 50px;

}
.dropbutton:hover{
    background: linear-gradient(32deg, rgba(141,200,202,1) 0%, rgba(179,145,211,0.8830882694874825) 35%, rgba(155,200,209,0.8746849081429446) 100%);
}

.menu-bar{
    align-items: center;
    text-align: center;
    position: fixed;
    background: radial-gradient(circle, rgb(146 209 210) 0%, rgb(231 202 142) 100%);
     margin: -46px 0px;
     border-radius: 10px;
     width: 100%;
}
.menu-bar ul{
    display: flex;
    margin: 1px -29px;
}
.menu-bar ul li{
    list-style: none;
    font-size: 1.3rem;
    width: 224px;
}
.menu-bar ul li a{
  color: brown;
  display: block;
  margin: 10px -40px;
  width: 277px;
  border-radius: 70px;
  text-decoration: none;
}
.menu-bar ul li a:hover{
    color: rgb(235, 56, 178);
    background-color: rgb(226, 208, 220);
}
.active, .menu-bar ul li:hover{
    border-radius: 3px;   
}
.menu-bar .fa{
  margin-right: 3px;
}
.sub-menu-1{
    display: none;
}
.menu-bar ul li:hover .sub-menu-1{
    display: block;
    position: absolute;
    background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgb(191, 199, 222) 100%);
    margin-top: 7px;
    margin-left: -7px;
    border-radius: 17px;
 }
.menu-bar ul li:hover .sub-menu-1 ul{
   display: block;
   margin: 19px;
 }
 .menu-bar ul li:hover .sub-menu-1 ul li{
   width: 180px;
   padding: 6px;
   border-bottom: 1px dotted brown;
   background: transparent;
   text-align: center;
 }
 .menu-bar ul li:hover .sub-menu-1 ul li a:hover{
    color: rgb(233, 103, 207);
 }


.imageslide{
	width: 1257px;
	height: 334px;
    border-radius: 8px;
    padding: 115px;
    margin: 46px 16px;
	background-size: 100% 100%;
	animation: changeImage 15s linear infinite;
}
@keyframes changeImage{
    0% {
		background-image: url("web-mjpru.jpg");
	}
    25% {
		background-image: url("mjpimage1.jpg");
    }
    50% {
		background-image: url("exam1.jpg");
	}
    75% {
		background-image: url("books.jpg");
    }
    100% {
		background-image: url("web-mjpru.jpg");
    }
}




.table1 .h-third{
    padding: 1px 108px;
    margin: -74px 10px;
    color: brown;
    font-size: 1.2rem;
}
.table1 h3{
    padding: 93px 118px;
    color: brown;
    font-size: 1.2rem;
}
.table1{
    padding: 50px 37px;
}
.table1 table{
    padding: 30px 370px;
    margin: -284px 2px;
}
.table1 tr td{
    padding: 11px 1px;
    background: linear-gradient(29deg, rgba(238,236,126,0.9139005944174545) 0%, rgba(175,98,184,0.8018557764902836) 100%);
    border-radius: 10px;
    
}
.table1 tr td a {
    text-decoration: none;
    color: #2a44a5;
}
.table1 tr td a:hover{
    color: rgb(251, 111, 5);
}
.table1 legend{
    border-style: dotted;
    padding: 21px 588px;
    border-width: 2px;
    border-radius: 50px;
    background: linear-gradient(29deg, rgba(238,236,126,0.9139005944174545) 0%, rgba(175,98,184,0.8018557764902836) 100%);

}
.table1 fieldset{
    padding: 116px 4px;
    border-width: 10px;
    border-radius: 150px;
}

.studydrop{
    display: none;
}
.table1 tr td:hover .studydrop{
    display: block;
    position: absolute;
    background: radial-gradient(circle, rgb(154, 158, 234) 0%, rgb(191, 199, 222) 100%);
    margin-top: 15px;
    margin-left: -15px;
    border-radius: 17px;
 }
.table1 tr td:hover .studydrop ul{
   display: block;
   margin: 10px;
 }
.table1 tr td:hover .studydrop ul li{
   width: 115px;
   padding: 6px;
   border-bottom: 1px dotted brown;
   background: transparent;
   border-radius: 0;
   text-align: center;
 }
 .table1 tr td:hover .studydrop ul li a:hover{
    color: rgb(235, 64, 64);
 }


.table2 .h-third{
    padding: 1px 108px;
    margin: -74px 10px;
    color: brown;
    font-size: 1.2rem;
}
.table2 h3{
    padding: 93px 118px;
    color: brown;
    font-size: 1.2rem;
}
.table2{
    padding: 50px 37px;
}
.table2 table{
    padding: 30px 370px;
    margin: -284px 2px;
}
.table2 tr td{
    padding: 11px 1px;
    background: linear-gradient(90deg, rgba(126,179,242,0.9447129193474265) 0%, rgba(227,147,120,1) 100%);
    border-radius: 10px;
    
}
.table2 tr td a {
    text-decoration: none;
    color: #2a44a5;
}
.table2 tr td a:hover{
    color: white;
}
.table2 legend{
    border-style: dotted;
    padding: 21px 588px;
    border-width: 2px;
    border-radius: 50px;
    background: linear-gradient(90deg, rgba(126,179,242,0.9447129193474265) 0%, rgba(227,147,120,1) 100%);

}
.table2 fieldset{
    padding: 116px 1px;
    border-width: 10px;
    border-radius: 150px;
}

.studydrop{
    display: none;
}
.table2 tr td:hover .studydrop{
    display: block;
    position: absolute;
    background: radial-gradient(circle, rgb(154, 158, 234) 0%, rgb(191, 199, 222) 100%);
    margin-top: 15px;
    margin-left: -15px;
    border-radius: 17px;
 }
.table2 tr td:hover .studydrop ul{
   display: block;
   margin: 10px;
 }
.table2 tr td:hover .studydrop ul li{
   width: 115px;
   padding: 6px;
   border-bottom: 1px dotted brown;
   background: transparent;
   border-radius: 0;
   text-align: center;
 }
 .table2 tr td:hover .studydrop ul li a:hover{
    color: rgb(235, 64, 64);
 }


.table3 .h-third{
    padding: 1px 108px;
    margin: -74px 10px;
    color: brown;
    font-size: 1.2rem;
}
.table3 h3{
    padding: 93px 118px;
    color: brown;
    font-size: 1.2rem;
}
.table3{
    padding: 50px 37px;
}
.table3 table{
    padding: 30px 370px;
    margin: -284px 2px;
}
.table3 tr td{
    padding: 11px 3px;
    background: linear-gradient(183deg, rgba(218,126,217,0.6365896700477065) 0%, rgba(193,201,214,1) 100%);
    border-radius: 10px;
    
}
.table3 tr td a {
    text-decoration: none;
    color: #2a44a5;
}
.table3 tr td a:hover{
    color: white;
}
.table3 legend{
    border-style: dotted;
    padding: 21px 588px;
    border-width: 2px;
    border-radius: 50px;
    background: linear-gradient(183deg, rgba(218,126,217,0.6365896700477065) 0%, rgba(193,201,214,1) 100%);

}
.table3 fieldset{
    padding: 116px 1px;
    border-width: 10px;
    border-radius: 150px;
}


.studydrop{
    display: none;
}
.table3 tr td:hover .studydrop{
    display: block;
    position: absolute;
    background: radial-gradient(circle, rgb(154, 158, 234) 0%, rgb(191, 199, 222) 100%);
    margin-top: 15px;
    margin-left: -15px;
    border-radius: 17px;
 }
.table3 tr td:hover .studydrop ul{
   display: block;
   margin: 10px;
 }
.table3 tr td:hover .studydrop ul li{
   width: 115px;
   padding: 6px;
   border-bottom: 1px dotted brown;
   background: transparent;
   border-radius: 0;
   text-align: center;
 }
 .table3 tr td:hover .studydrop ul li a:hover{
    color: rgb(235, 64, 64);
 }

.table4 .h-third{
    padding: 1px 108px;
    margin: -74px 10px;
    color: brown;
    font-size: 1.2rem;
}
.table4 h3{
    padding: 93px 118px;
    color: brown;
    font-size: 1.2rem;
}
.table4{
    padding: 50px 37px;
}
.table4 table{
    padding: 30px 370px;
    margin: -284px 2px;
}
.table4 tr td{
    padding: 11px 6px;
    background: radial-gradient(circle, rgb(137 202 161) 0%, rgba(173,45,253,0.5301470930168943) 100%);
    border-radius: 10px;
    
}
.table4 tr td a {
    text-decoration: none;
    color: #2a44a5;
}
.table4 tr td a:hover{
    color: white;
}
.table4  legend{
    border-style: dotted;
    padding: 21px 588px;
    border-width: 2px;
    border-radius: 50px;
    background: radial-gradient(circle, rgb(137 202 161) 0%, rgba(173,45,253,0.5301470930168943) 100%);

}
.table4 fieldset{
    padding: 116px 1px;
    border-width: 10px;
    border-radius: 150px;
}

.studydrop{
    display: none;
}
.table4 tr td:hover .studydrop{
    display: block;
    position: absolute;
    background: radial-gradient(circle, rgb(154, 158, 234) 0%, rgb(191, 199, 222) 100%);
    margin-top: 15px;
    margin-left: -15px;
    border-radius: 17px;
 }
.table4 tr td:hover .studydrop ul{
   display: block;
   margin: 10px;
 }
.table4 tr td:hover .studydrop ul li{
   width: 95px;
   padding: 6px;
   border-bottom: 1px dotted brown;
   background: transparent;
   border-radius: 0;
   text-align: center;
 }
 .table4 tr td:hover .studydrop ul li a:hover{
    color: rgb(235, 64, 64);
 }

.table5 .h-third{
    padding: 1px 108px;
    margin: -74px 10px;
    color: brown;
    font-size: 1.2rem;
}
.table5 h3{
    padding: 93px 118px;
    color: brown;
    font-size: 1.2rem;
}
.table5{
    padding: 50px 37px;
}
.table5 table{
    padding: 30px 370px;
    margin: -284px 2px;
}
.table5 tr td{
    padding: 11px 6px;
    background: linear-gradient(146deg, rgba(203,216,112,0.9643207624846813) 0%, rgba(223,190,159,0.8046568969384629) 50%, rgba(145,238,238,0.8242647400757178) 100%);
    border-radius: 10px;
    
}
.table5 tr td a {
    text-decoration: none;
    color: #2a44a5;
}
.table5 tr td a:hover{
    color: rgb(235, 114, 201);
}
.table5  legend{
    border-style: dotted;
    padding: 21px 588px;
    border-width: 2px;
    border-radius: 50px;
    background: linear-gradient(146deg, rgba(203,216,112,0.9643207624846813) 0%, rgba(223,190,159,0.8046568969384629) 50%, rgba(145,238,238,0.8242647400757178) 100%);


}
.table5 fieldset{
    padding: 116px 1px;
    border-width: 10px;
    border-radius: 150px;
}

.studydrop{
    display: none;
}
.table5 tr td:hover .studydrop{
    display: block;
    position: absolute;
    background: radial-gradient(circle, rgb(154, 158, 234) 0%, rgb(191, 199, 222) 100%);
    margin-top: 15px;
    margin-left: -15px;
    border-radius: 17px;
 }
.table5 tr td:hover .studydrop ul{
   display: block;
   margin: 10px;
 }
.table5 tr td:hover .studydrop ul li{
   width: 115px;
   padding: 6px;
   border-bottom: 1px dotted brown;
   background: transparent;
   border-radius: 0;
   text-align: center;
 }
 .table5 tr td:hover .studydrop ul li a:hover{
    color: rgb(235, 64, 64);
 }



.table6 .h-third{
    padding: 1px 108px;
    margin: -74px 10px;
    color: brown;
    font-size: 1.2rem;
}
.table6 h3{
    padding: 93px 118px;
    color: brown;
    font-size: 1.2rem;
}
.table6{
    padding: 50px 37px;
}
.table6 table{
    padding: 30px 370px;
    margin: -284px 2px;
}
.table6 tr td{
    padding: 11px 2px;
    background: linear-gradient(305deg, rgba(168,172,218,0.96) 0%, rgba(223,159,213,0.8046568969384629) 50%, rgba(87,168,188,0.8242647400757178) 100%);
    border-radius: 10px;
    
}
.table6 tr td a {
    text-decoration: none;
    color: #2a44a5;
}
.table6 tr td a:hover{
    color: white;
}
.table6  legend{
    border-style: dotted;
    padding: 21px 588px;
    border-width: 2px;
    border-radius: 50px;
    background: linear-gradient(305deg, rgba(168,172,218,0.96) 0%, rgba(223,159,213,0.8046568969384629) 50%, rgba(87,168,188,0.8242647400757178) 100%);
}
.table6 fieldset{
    padding: 116px 1px;
    border-width: 10px;
    border-radius: 150px;
}



.studydrop{
    display: none;
}
.table6 tr td:hover .studydrop{
    display: block;
    position: absolute;
    background: radial-gradient(circle, rgb(154, 158, 234) 0%, rgb(191, 199, 222) 100%);
    margin-top: 15px;
    margin-left: -15px;
    border-radius: 17px;
 }
.table6 tr td:hover .studydrop ul{
   display: block;
   margin: 10px;
 }
.table6 tr td:hover .studydrop ul li{
   width: 115px;
   padding: 6px;
   border-bottom: 1px dotted brown;
   background: transparent;
   border-radius: 0;
   text-align: center;
 }
 .table6 tr td:hover .studydrop ul li a:hover{
    color: rgb(235, 64, 64);
 }


.table7 .h-third{
    padding: 1px 108px;
    margin: -74px 10px;
    color: brown;
    font-size: 1.2rem;
}
.table7 h3{
    padding: 93px 118px;
    color: brown;
    font-size: 1.2rem;
}
.table7{
    padding: 50px 37px;
}
.table7 table{
    padding: 30px 370px;
    margin: -284px 2px;
}
.table7 tr td{
    padding: 11px 8px;
    background: radial-gradient(circle, rgb(226 159 144) 0%, rgb(235 196 188) 100%);
    border-radius: 10px;
    
}
.table7 tr td a {
    text-decoration: none;
    color: #2a44a5;
}
.table7 tr td a:hover{
    color: white;
}
.table7  legend{
    border-style: dotted;
    padding: 21px 588px;
    border-width: 2px;
    border-radius: 50px;
    background: radial-gradient(circle, rgb(226 159 144) 0%, rgb(235 196 188) 100%);

}
.table7 fieldset{
    padding: 116px 1px;
    border-width: 10px;
    border-radius: 150px;
}

.studydrop{
    display: none;
}
.table7 tr td:hover .studydrop{
    display: block;
    position: absolute;
    background: radial-gradient(circle, rgb(154, 158, 234) 0%, rgb(191, 199, 222) 100%);
    margin-top: 15px;
    margin-left: -15px;
    border-radius: 17px;
 }
.table7 tr td:hover .studydrop ul{
   display: block;
   margin: 10px;
 }
.table7 tr td:hover .studydrop ul li{
   width: 144px;
   padding: 6px;
   border-bottom: 1px dotted brown;
   background: transparent;
   border-radius: 0;
   text-align: center;
 }
 .table7 tr td:hover .studydrop ul li a:hover{
    color: rgb(235, 64, 64);
 }



.table8 .h-third{
    padding: 1px 108px;
    margin: -74px 10px;
    color: brown;
    font-size: 1.2rem;
}
.table8 h3{
    padding: 93px 118px;
    color: brown;
    font-size: 1.2rem;
}
.table8{
    padding: 50px 37px;
}
.table8 table{
    padding: 30px 512px;
    margin: -284px 2px;
}
.table8 tr td{
    padding: 11px 5px;
    background: radial-gradient(circle, rgb(204 245 30 / 60%) 0%, rgb(222 190 190) 100%);
    border-radius: 10px;
    
}
.table8 tr td a {
    text-decoration: none;
    color: #2a44a5;
}
.table8 tr td a:hover{
    color: rgb(235, 114, 201);
}
.table8  legend{
    border-style: dotted;
    padding: 21px 583px;
    border-width: 2px;
    border-radius: 50px;
    background: radial-gradient(circle, rgb(239 143 74) 0%, rgb(222 190 190) 100%);

}
.table8 fieldset{
    padding: 116px 4px;
    border-width: 10px;
    border-radius: 150px;
}


.studydrop{
    display: none;
}
.table8 tr td:hover .studydrop{
    display: block;
    position: absolute;
    background: radial-gradient(circle, rgb(154, 158, 234) 0%, rgb(191, 199, 222) 100%);
    margin-top: 15px;
    margin-left: -15px;
    border-radius: 17px;
 }
.table8 tr td:hover .studydrop ul{
   display: block;
   margin: 10px;
 }
.table8 tr td:hover .studydrop ul li{
   width: 115px;
   padding: 6px;
   border-bottom: 1px dotted brown;
   background: transparent;
   border-radius: 0;
   text-align: center;
 }
 .table8 tr td:hover .studydrop ul li a:hover{
    color: rgb(235, 64, 64);
 }


.table9 .h-third{
    padding: 1px 108px;
    margin: -74px 10px;
    color: brown;
    font-size: 1.2rem;
}
.table9 h3{
    padding: 93px 118px;
    color: brown;
    font-size: 1.2rem;
}
.table9{
    padding: 50px 37px;
}
.table9 table{
    padding: 30px 507px;
    margin: -284px 2px;
}
.table9 tr td{
    padding: 11px 5px;
    background: linear-gradient(29deg, rgba(183,216,176,0.9139005944174545) 0%, rgba(227,163,156,0.8018557764902836) 100%);
    border-radius: 10px;
    
}
.table9 tr td a {
    text-decoration: none;
    color: #2a44a5;
}
.table9 tr td a:hover{
    color: white;
}
.table9  legend{
    border-style: dotted;
    padding: 21px 583px;
    border-width: 2px;
    border-radius: 50px;
    background: linear-gradient(29deg, rgba(183,216,176,0.9139005944174545) 0%, rgba(227,163,156,0.8018557764902836) 100%);
}
.table9 fieldset{
    padding: 116px 4px;
    border-width: 10px;
    border-radius: 150px;
}



/*FOOTER SECTION8*/

.container{
	max-width: 1318px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background: linear-gradient(246deg, rgb(129 202 205) 0%, rgb(82 17 142) 35%, rgb(48 138 157) 100%);
    padding: 41px 0px;
    width: 1518px;
}
.footer-col{
   width: 22%;
   padding: 6px 72px;
}
.footer-col h4{
	font-size: 20px;
	color: #add348e3;
	text-transform: capitalize;
	margin-bottom: 35px;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #add348e3;
	height: 3px;
	box-sizing: border-box;
	width: 36px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 17px;
	text-transform: capitalize;
	text-decoration: none;
	font-weight: 300;
	color: #d68d8d;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: rgb(236, 234, 244);
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin: 12px 21px 10px -7px;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #daf5c6;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}
.footer .footer_logo{
    width: 18%;
    border-top: solid 3px #96a460;
    padding-right: 67px;
    margin: 16px 453px;
}
.footer .footer_logo input{
    width: 80%;
    height: 30px;
    border-radius: 9px;
    font-size: 13px;
    font-weight: 400;
    padding: 1px 2px 0px 13px;
}
.footer .footer_logo input.submit{
    width: 69px;
    height: 32px;
    padding: 0;
    background: #699fc2;
    position: absolute;
    border: none;
    color: #ffffff;
    font-style: normal;
    font-size: 13px;
    font-weight: 500;
}
input[type=submit]{
    outline: none;
    cursor: pointer;
    display: inline-block;
    letter-spacing: 0.8px;
}
.slide_animation{
    background: #a385e4;
    box-shadow: inset 0 0 0 0 #e781e7;
}


.h-primary{
    font-size: 2rem;
    padding: 5px 376px;
    width: 766px;
    color: rgb(40 139 234 / 95%);
    font-family: 'Ibarra Real Nova', serif;
    text-shadow: 1px 1px 25px #00ff89;
}
.h-primary hr{
    border-color: brown;
    width: 610px;
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
    margin: -24px -169px;
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
    width: 450px;
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
      <div class="dropbutton"><a href=""><i class="fa fa-hand-o-up" aria-hidden="true"></i></a></div>
    </section>


    <div class="menu-bar">
        <ul> 
         <li class="active"><a href="http://site.indiaresults.com/up/mjpru/default.aspx">MJP Result</a> 
        <li class="active"><a href="http://mjpruiums.in/(S(ncmr4qmzhdntv1q50wwu2fw2))/main.aspx">MJP Exam Form</a>
        <li class="active"><a href="https://clist.by">Coding Fest</a>
            <li><a href="#">Master Entrance Form<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="https://gate.iitk.ac.in/index.html">GATE</a></li>
                    <li><a href="https://iimcat.ac.in/per/g01/pub/756/ASM/WebPortal/1/index.html?756@@1@@1">CAT</a></li>
                    <li><a href="https://nbe.edu.in/">NEET(PG)</a></li>
                    <li><a href="https://gpat.nta.nic.in/">GPAT</a></li> 
                    <li><a href="https://jipmer.edu.in/">JIPMER(Medical)</a></li> 

               </ul>
                        </div>
                    </li>
         <li><a href="#">Govt. Job<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="https://www.sarkariresult.com/">Sarkari Result</a></li>
                    <li><a href="https://sarkarijobfind.com/">Sarkari Job</a></li>
                    <li><a href="https://www.naukri.com/">Naukri</a></li>
                 </ul>
                        </div>
             </li>
        <li><a href="#">Private Job<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="https://careers.google.com/jobs/results/">Google</a></li>
                    <li><a href="https://careers.microsoft.com/us/en">Microsoft</a></li>
                    <li><a href="https://www.infosys.com/careers/">Infosys</a></li>
                    <li><a href="https://www.hcltech.com/careers/Careers-in-india">HCL</a></li>
                    <li><a href="https://www.accenture.com/in-en/careers">Accenture</a></li>
                    <li><a href="https://careers.wipro.com/careers-home/">WIPRO</a></li>
                    <li><a href="https://www.tcs.com/careers/entry-level">TCS</a></li>
                    <li><a href="https://careers.cognizant.com/in/en">Cognizant</a></li>
                 </ul>
            </div>
            </li>
         <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="imageslide"></div>
    <h1 class="h-primary"> MJPRU Semester Exam Prepartion Material<hr><hr></h1>

     <div class="table1">
        <fieldset>
        <table border="0">
                <legend>
            <h2 class="h-secondary">B.TECH(CS&IT) Previous paper <i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>
        </legend>
        <h3 class="h-third">1st and 2nd Mid Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                <td><a href="https://drive.google.com/file/d/16LYVBkiw61EeG5F1gvdg5HR2L2fQsAXf/view?usp=share_link"><b>1st Sem</a></td>
                <td><a href="sorry.webp"><b>2nd Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1l9EomwPqEHCvHopcb9d5I8otKXYf57qw/view?usp=share_link"><b>3rd Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1qqijUdChxTjIj_IATIMrvSFzCKweXHJ3/view?usp=share_link"><b>4th Sem</a></td>
                <td><a href="https://drive.google.com/file/d/14CzoALUV1KJmpCcAK6n-76b227coVLuf/view?usp=share_link"><b>5th Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1lTSI9yHnJk2WgCfmZNSVZm7wmudBuxr-/view?usp=share_link"><b>6th Sem</a></td>
                <td><a href="https://drive.google.com/file/d/17DDs-PiuvlEjh4RuNUsKH7oPpo8vvVed/view?usp=share_link"><b>7th Sem</a></td>
                <td><a href="sorry.webp"><b>8th Sem</a></td>
            </tr>
            <h3>Study Material(Notes)  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                <td><a href="#"><b>1st Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                    <div class="studydrop">
                    <ul>
                        <li><a href="https://drive.google.com/file/d/12HDefuEA4iRGUP-VwHp9wxE1HkAcW5h3/view?usp=share_link">Physics(1)</a></li>
                        <li><a href="https://drive.google.com/file/d/1EcPISFeUoHEvlBuIvStUPyoh7VNbgERs/view?usp=share_link">Economics</a></li>
                        <li><a href="https://drive.google.com/file/d/1pjhtDm7qja0uFyuK_MoshM8DlolYXJBW/view?usp=share_link">Math(1)</a></li>
                        <li><a href="https://drive.google.com/file/d/1agkIsM4-eNpXWpQ2kvBzuT0-_MFTUAOO/view?usp=share_link">Manufecturing</a></li>
                        <li><a href="https://drive.google.com/file/d/1wDgy4WN31KRWwXZeQzabFXxl-F0ULie8/view?usp=share_link">Eng. Graphic</a></li>
                        <li><a href="https://drive.google.com/file/d/1WTPh2puxtZ9gh-PlPOP96n9ynRpwq54o/view?usp=share_link">Environmental</a></li>  
                        <li><a href="https://drive.google.com/file/d/1YZpA2jugl5FuIfxQyJMSMgyw1h-8yLZi/view?usp=share_link">Electronics</a></li>   
                    </ul>
                </td>
            </div>
                <td><a href="#"><b>2nd Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                    <div class="studydrop">
                        <ul>
                            <li><a href="https://drive.google.com/file/d/1PKGAMWbM4sfyr5DXxbZQ12HOOdw0GRDp/view?usp=share_link">Physics(2)</a></li>
                            <li><a href="https://drive.google.com/file/d/1FtOfrPtUcqxx1j3lAuuq1-jBTe8ucjT2/view?usp=share_link">Chemistry</a></li>
                            <li><a href="https://drive.google.com/file/d/15cDI4TH5cw1M3hu5l7MTjTAYVSUCZAnx/view?usp=share_link">Math(2)</a></li>
                            <li><a href="https://drive.google.com/file/d/1k0nAxY12_D6XNX_eAv-uBP7-JL_-iWeu/view?usp=share_link">English</a></li>
                            <li><a href="https://drive.google.com/file/d/1oKBUC59WL412YKiQupzsGrStP9ki6-1E/view?usp=share_link">Electrical Eng.</a></li>
                            <li><a href="https://drive.google.com/file/d/1dawlHovwsTWv_XOkJrHBK42OduZr2Vyo/view?usp=share_link">Mechanical Eng.</a></li>  
                            <li><a href="https://drive.google.com/file/d/1Z-e0_gAXa8tl8YANw1xm3zVdmTn922ER/view?usp=share_link">C Prog.</a></li>   
                        </ul>
                </div>
                </td>
                <td><a href="#"><b>3rd Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                    <div class="studydrop">
                        <ul>
                            <li><a href="https://drive.google.com/file/d/1MXYfb8PDHjZdXUyk1EhC22C2eQ5FuqHG/view?usp=share_link">DMS</a></li>
                            <li><a href="https://drive.google.com/file/d/14MkShFKVGDunQHIYHi0dopRRyx2okM1m/view?usp=share_link">DS</a></li>
                            <li><a href="https://drive.google.com/file/d/1tCijCN1_oPa0PgMnAE8zAUtR0WNIHAZ9/view?usp=share_link">OOPs</a></li>
                            <li><a href="https://drive.google.com/file/d/1y1K0VWOqY1ihtnsRYGbwvrFHYx5MhL6c/view?usp=share_link">Mathematics</a></li>
                            <li><a href="https://drive.google.com/file/d/1UaokeAJrB20eO16Ey2mOZAbmmeGdPFHR/view?usp=share_link">Digital Ele.</a></li>
                            <li><a href="sorry.webp">Human Val.</a></li>     
                        </ul>
                    </div>
                </td>
                <td><a href="#"><b>4th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                    <div class="studydrop">
                        <ul>
                            <li><a href="https://drive.google.com/file/d/1Qrv_Ek9gR6NLfi3bSSTStcwKdZjiraQf/view?usp=share_link">CO</a></li>
                            <li><a href="https://drive.google.com/file/d/1m3KDHD8AsdbhGGvoyoO94Oc1V5M-ImMR/view?usp=share_link">CN</a></li>
                            <li><a href="https://drive.google.com/file/d/19RVoegOzwxl1BSgC4hFU4DRtfczPAcxR/view?usp=share_link">DBMS</a></li>
                            <li><a href="https://drive.google.com/file/d/1HonjhzZH7qkDInwOppRCqQpdMaSxH8Up/view?usp=share_link">Python</a></li>
                            <li><a href="sorry.webp">Human Value</a></li>
                            <li><a href="sorry.webp">???</a></li>     
                        </ul>
                    </div>
                </td>
                <td><a href="#"><b>5th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                    <div class="studydrop">
                        <ul>
                            <li><a href="https://drive.google.com/file/d/1809yQubPl07K6ewmCFvEBDqwrfXneyn3/view?usp=share_link">Data Mining</a></li>
                            <li><a href="https://drive.google.com/file/d/1Wo4tBEPlYko5vRDMAofpL3JvNQWEDu59/view?usp=share_link">Soft. Eng.</a></li>
                            <li><a href="https://drive.google.com/file/d/1kSZ3W2LixeqEGhOEF9X4EWPTf-gKdP-d/view?usp=share_link">R Programming</a></li>
                            <li><a href="https://drive.google.com/file/d/14kBqEmhWCnUf_9YEQW7pOrqR175CRSMV/view?usp=share_link">TOC</a></li>
                            <li><a href="https://drive.google.com/file/d/11LcxlmR0ioZneZfBW4T3sg3KZuS5wv7z/view?usp=share_link">OS</a></li>
                            <li><a href="sorry.webp">Prof. Com.</a></li>     
                        </ul>
                    </div>
                </td>
                <td><a href="#"><b>6th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                    <div class="studydrop">
                        <ul>
                            <li><a href="https://drive.google.com/file/d/10cvSvRJFGmrE9-kx8wDUIcBL0_COJUfJ/view?usp=share_link">Cloud Comp.</a></li>
                            <li><a href="https://drive.google.com/file/d/14gN5jILK4sVnV5GksblWTDpBvYh-5tbZ/view?usp=share_link">Graphics</a></li>
                            <li><a href="https://drive.google.com/file/d/1LULkXNSpaQcQB-ev4Q563VA54XnfW0kj/view?usp=share_link">Wire. Net.</a></li>
                            <li><a href="https://drive.google.com/file/d/1PiG9l4rJHn-yUJJ5rUfsS5Yh-CAbvmid/view?usp=share_link">Compiler</a></li>
                            <li><a href="sorry.webp">Soft Skill</a></li>
                            <li><a href="https://drive.google.com/file/d/1676uC1qaQBI2xaatPdC5JSWxmV6aWDqp/view?usp=share_link">Dept. Ele.</a></li>     
                        </ul>
                    </div>
                </td>
                <td><a href="#"><b>7th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                    <div class="studydrop">
                        <ul>
                            <li><a href="https://drive.google.com/file/d/1Q5-oi5x5mXurRpe40V7gHEbVh_cowIg_/view?usp=share_link">ML</a></li>
                            <li><a href="sorry.webp">DIP</a></li>
                            <li><a href="toutube1.jpg">Dept. Ele.</a></li>
                            <li><a href="https://drive.google.com/file/d/1PsE6KaLNe7jATLXS_P3BANJlubttQsV-/view?usp=share_link">Cyber Sec.</a></li>
                            <li><a href="toutube1.jpg">Open Ele.</a></li>
                            <li><a href="sorry.webp">Seminar</a></li>     
                        </ul>
                    </div>
                </td>
                <td><a href="#"><b>8th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                    <div class="studydrop">
                        <ul>
                            <li><a href="sorry.webp">Advan. Comput. Arctec.</a></li>
                            <li><a href="sorry.webp">Wireless Net.&Mob. Comp.</a></li>     
                        </ul>
                    </div>
                </td>
            </tr>
            <h4 class="h-fourth">Syllabus  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h4>
            <tr>
                <td><a href="https://drive.google.com/file/d/1B5qdWwzDhiFy-5mJs6LyB_tOIKltgr1q/view?usp=share_link"><b>1st Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1q2_WJCpiBoQKfmmTvwvYmh163eyKNBU0/view?usp=share_link"><b>2nd Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1VUCjqKljQ9p7xoH3xVQYqSLAJihZAdpj/view?usp=share_link"><b>3rd Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1Or_wOoHe6x-fSD9at5YGwSWwhWtqLAeN/view?usp=share_link"><b>4th Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1QW71m1BJvFDMJgqrErh3XodqB8asylxH/view?usp=share_link"><b>5th Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1zy9kPZB3vyKnNzqXrA9BnpNbepLKrnHG/view?usp=share_link"><b>6th Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1FeJszOp9FD0E7gG34dNVllbTl0rGpO6V/view?usp=share_link"><b>7th Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1gcbfqbryAxdoota9-9hsVzmr7RpH_Hy2/view?usp=share_link"><b>8th Sem</a></td>
            </tr>
            <h5 class="h-fifth">End Sem Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h5>
            <tr>
                <td><a href="https://drive.google.com/file/d/1s4D-llQFi-msMXsujeUtldNI4LsCu1mV/view?usp=share_link"><b>1st Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1uh7P09ubY3J3pxJr2e0QJhRt9aNOdKe3/view?usp=share_link"><b>2nd Sem</a></td>
                <td><a href="https://drive.google.com/file/d/17qAg1eNNfvhM9h9LAe2ZKFhIUyj2n-uf/view?usp=share_link"><b>3rd Sem</a></td>
                <td><a href="https://drive.google.com/file/d/12ISQQko7bsD-spUWF3p5-La-2Z6H01Hp/view?usp=share_link"><b>4th Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1FzS1LF32eTNlMi8qNDjzEx_I8H84OoI2/view?usp=share_link"><b>5th Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1I1MGEwRRklsMpOT_MY-hoCV2FNtcUM4C/view?usp=share_link"><b>6th Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1LuiV5b1vN-pFV01kUwaYRpMJXOVkLqoX/view?usp=share_link"><b>7th Sem</a></td>
                <td><a href="https://drive.google.com/file/d/1OdhrMVxmWEL-Msj1JYqX4XtR_lwshMtz/view?usp=share_link"><b>8th Sem</a></td>
            </tr>
        </table>
    </fieldset>
     </div>

     <div class="table2">
        <fieldset>
        <table border="0">
                <legend>
            <h2 class="h-secondary">B.TECH(EE) Previous paper <i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>
        </legend>
        <h3 class="h-third">1st and 2nd Mid Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                    <td><a href="https://drive.google.com/file/d/1djRFcU7ltSeIraxchN9pit2Hf0ehOAhf/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="sorry.webp"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1pV3U45SUz42ZdKswmGt7YUvPCFo-eeDp/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="sorry.webp"><b>4th Sem</a></td>
                    <td><a href="sorry.webp"><b>5th Sem</a></td>
                    <td><a href="sorry.webp"><b>6th Sem</a></td>
                    <td><a href="sorry.webp"><b>7th Sem</a></td>
                    <td><a href="sorry.webp"><b>8th Sem</a></td>
            </tr>
            <h3>Study Material(Notes)  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                    <td><a href="#"><b>1st Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1kkCPcNl0Upkf9jiMSPEF2lRokYqzwe8I/view?usp=share_link">Physics(1)</a></li>
                                <li><a href="https://drive.google.com/file/d/1OGHM0azwBh1FtXMHqIZ0PSEPi-2uBXPA/view?usp=share_link">Chemistry</a></li>
                                <li><a href="https://drive.google.com/file/d/1OoK0Y9DYW7Ct6z7QBnqN9632-fMphW4-/view?usp=share_link">Math(1)</a></li>
                                <li><a href="https://drive.google.com/file/d/1z5L37YJyuZWVxn3e4wHI_Q9UWMHrcpSw/view?usp=share_link">English</a></li>
                                <li><a href="https://drive.google.com/file/d/1MQ0spshVeVIoKSpl53VO2bCvm2HfyGP0/view?usp=share_link">Electrical Eng.</a></li>
                                <li><a href="https://drive.google.com/file/d/17dqkcXaPE9qhJLsNznFxTkOxxYsK4V85/view?usp=share_link">Mechanical Eng.</a></li>  
                                <li><a href="https://drive.google.com/file/d/1UCVYKaZRq3F32d8-jcvGS3qFnmto_OOh/view?usp=share_link">C Prog.</a></li>   
                            </ul>
                    </div>
                    </td>
                    <td><a href="#"><b>2nd Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1DwYbkQIY_fg8-sAMxe3UY-JBQGJ88wMc/view?usp=share_link">Physics(2)</a></li>
                                <li><a href="https://drive.google.com/file/d/1cFTcdHTVA5LnF8mIZu4OnyMyh3va8Ybq/view?usp=share_link">Economics</a></li>
                                <li><a href="https://drive.google.com/file/d/1AAE7Yc4rjWu3EmZb6NO5sDf21uDzFl_o/view?usp=share_link">Math(2)</a></li>
                                <li><a href="https://drive.google.com/file/d/1p6yFEBgrAeY0dkvCo1bT1VTlON-rGlJV/view?usp=share_link">Manufecturing</a></li>
                                <li><a href="https://drive.google.com/file/d/1BoN3dZgkKgOg_N7oMLq6cd44XCS62RAr/view?usp=share_link">Eng. Graphic</a></li>
                                <li><a href="https://drive.google.com/file/d/1x_O4QoR2EdDBkpBaULamoQc56GF2Oc4i/view?usp=share_link">Environmental</a></li>  
                                <li><a href="https://drive.google.com/file/d/1kEDxkDfnF5hrPUMBufHuRBuk3ppynxoP/view?usp=share_link">Electronics</a></li>   
                            </ul>
                    </div>
                    </td>
                    <td><a href="#"><b>3rd Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1O2762RVdqaTqS8aeAU4qDHz8jMYTi4J1/view?usp=share_link">Mathematics</a></li>
                                <li><a href="https://drive.google.com/file/d/1hrWBPmh2eMODtnvEJMoJtFfX4B7N7TkK/view?usp=share_link">Analog Ele.</a></li>
                                <li><a href="sorry.webp">Network Ana.</a></li>
                                <li><a href="https://drive.google.com/file/d/1NNdZQadS8DO7UNKHhmrSfVkfJFRrgtBE/view?usp=share_link">Electri. Mach.</a></li>
                                <li><a href="https://drive.google.com/file/d/1iQkeLuOS1_rpw4TOyhY4FTt7zZFtba2b/view?usp=share_link">Ele. Measure.</a></li>
                                <li><a href="https://drive.google.com/file/d/1aIZdM06sqYhfECYdU_5yG5wpw174ig2J/view?usp=share_link">Ele. Eng. Mat.</a></li>   
                            </ul>
                    </div>
                    </td>
                    <td><a href="#"><b>4th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/10h57Z-RAhKmkOjyAYdIo9lKc1R4EQDYB/view?usp=share_link">Linear Int.</a></li>
                                <li><a href="https://drive.google.com/file/d/1ySCoXlbayX5u6_VDklsu6b9lGTenzip6/view?usp=share_link">Electro. The.</a></li>
                                <li><a href="https://drive.google.com/file/d/1tvZKD1-xdcz7shTHJTI0fo9fCUewom5d/view?usp=share_link">Digital Ele.</a></li>
                                <li><a href="https://drive.google.com/file/d/1d5iWnRkQcp195gB6sOQIR25P_2ALfqw3/view?usp=share_link">Comp. Org.</a></li>
                                <li><a href="https://drive.google.com/file/d/1sEfrLFFWQzDG6WAE1mrNhT5jBoR9blD2/view?usp=share_link">Ele. Mach.</a></li>
                                <li><a href="https://drive.google.com/file/d/10h57Z-RAhKmkOjyAYdIo9lKc1R4EQDYB/view?usp=share_link">Indus. Manage.</a></li>  
                            </ul>
                    </div>
                    </td>
                    <td><a href="#"><b>5th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1uURF-IAp6YtzWsvgTlmwgWyNIQB-MyXM/view?usp=share_link">Control Sys</a></li>
                                <li><a href="https://drive.google.com/file/d/15eAaw6Bg_3Xn3hnt6huCajEDx6fmZPzL/view?usp=share_link">Power Ele.</a></li>
                                <li><a href="https://drive.google.com/file/d/14_cUqeau0e4Vr8XBaQUSfVdrenkmGstG/view?usp=share_link">Power Sys.</a></li>
                                <li><a href="https://drive.google.com/file/d/1wVc1dqoZfw1e9k8jqD6qyUH8K3jaG1s1/view?usp=share_link">Instrument.</a></li>
                                <li><a href="https://drive.google.com/file/d/16ELMUbCLn3Xvu4deZXwHYG9pgUNiqoiG/view?usp=share_link">8085&8086</a></li>
                                <li><a href="https://drive.google.com/file/d/16ELMUbCLn3Xvu4deZXwHYG9pgUNiqoiG/view?usp=share_link">Signal&Sys</a></li>   
                            </ul>
                    </div>
                    </td>
                    <td><a href="#"><b>6th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/14_cUqeau0e4Vr8XBaQUSfVdrenkmGstG/view?usp=share_link">Power Sys.(2)</a></li>
                                <li><a href="https://drive.google.com/file/d/1I-gDDtjlEmzsRo8lKdwfJ3CRfhI1uq6C/view?usp=share_link">Power Plant</a></li>
                                <li><a href="sorry.webp">Comp. Simul.</a></li>
                                <li><a href="sorry.webp">Digital&Non Lin.</a></li>
                                <li><a href="sorry.webp">Special Purpose</a></li>
                                <li><a href="sorry.webp">Element of Comm.</a></li>  
                            </ul>
                    </div>
                    </td>
                    <td><a href="#"><b>7th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1IdqhivRlcvRe3oQ0JuoXVYrCIdVlftuR/view?usp=share_link">Protection&Swi.</a></li>
                                <li><a href="https://drive.google.com/file/d/1z5AdlQK7TKqS9QaU_gnnhTxgnfZQfPpH/view?usp=share_link">High Vol. Eng.</a></li>
                                <li><a href="sorry.webp">Ind. Trai.</a></li>
                                <li><a href="sorry.webp">Eng. Eco.</a></li>
                                <li><a href="https://drive.google.com/file/d/1BmURzWcjZhfYRzPOPOiiZQzVjaCKPpVu/view?usp=share_link">Open Elective</a></li>
                                <li><a href="sorry.webp">Pool Elective</a></li>  
                            </ul>
                        </div>
                    
                    </td>
                    <td><a href="#"><b>8th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                        
                                <li><a href="https://drive.google.com/file/d/1dfBlz1flopCMAJTOVYsEXbgk6GmFYnkl/view?usp=share_link">Electric Dri.</a></li>
                                <li><a href="https://drive.google.com/file/d/1h9SAP5uVKY1qiDz4llryLnA7rBCEJ4jt/view?usp=share_link">Electric Mach.</a></li>
                                <li><a href="sorry.webp">Open Elective</a></li>
                                <li><a href="sorry.webp">Pool Elect</a></li> 
                            </ul>
                    </div>
                     
                    </td>
            </tr>
            <h4 class="h-fourth">Syllabus  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h4>
            <tr>
                    <td><a href="https://drive.google.com/file/d/16ENsft4cDZ2aJFVBu32dMvmXYIE6bxQ4/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/14oN4-Brg0ear_Giw9kGx15sXpXpKmjzO/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1oN_v3a2nkCxONQW1KSWy-sGteLcqxtnw/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1enZcGpB0W2IMCjcOBVZ36F6Y_Zdc3WM1/view?usp=share_link"><b>4th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1_EcWEXLB4oilixeGZ2MEdzock5XzfmTW/view?usp=share_link"><b>5th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1HQv8Izi0zy7YoEuMNvf2tIe3qF0BwM9M/view?usp=share_link"><b>6th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1O9cSdRWvRBeg7rusLLFzyexd5VslI7eP/view?usp=share_link"><b>7th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1r5MZEo0EEYygsgipCsswq-UhgSz8cF0p/view?usp=share_link"><b>8th Sem</a></td>
            </tr>
            <h5 class="h-fifth">End Sem Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h5>
            <tr>
                    <td><a href="https://drive.google.com/file/d/1Z5cpAsSEwYc6RiLgVY7x8sZ9cLnr1dxg/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1QQ5Od7w5pbO7E-xRNmmMHOnmuGKPwnWX/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/14kJEA7QTqzVSXTcH_ylRqkOZ_wWuw_XU/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="sorry.webp"><b>4th Sem</a></td>
                    <td><a href="sorry.webp"><b>5th Sem</a></td>
                    <td><a href="sorry.webp"><b>6th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1ul81h6sTuYWHcSONAfJRm3xj9SUim7NR/view?usp=share_link"><b>7th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1ul81h6sTuYWHcSONAfJRm3xj9SUim7NR/view?usp=share_link"><b>8th Sem</a></td>
            </tr>
        </table>
    </fieldset>
     </div>

     <div class="table3">
        <fieldset>
        <table border="0">
                <legend>
            <h2 class="h-secondary">B.TECH(EC) Previous paper <i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>
        </legend>
        <h3 class="h-third">1st and 2nd Mid Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                    <td><a href="sorry.webp"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/16LYVBkiw61EeG5F1gvdg5HR2L2fQsAXf/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="sorry.webp"><b>3rd Sem</a></td>
                    <td><a href="sorry.webp"><b>4th Sem</a></td>
                    <td><a href="sorry.webp"><b>5th Sem</a></td>
                    <td><a href="sorry.webp"><b>6th Sem</a></td>
                    <td><a href="sorry.webp"><b>7th Sem</a></td>
                    <td><a href="sorry.webp"><b>8th Sem</a></td>
            </tr>
            <h3>Study Material(Notes)  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                    <td><a href="#"><b>1st Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1oY_ungXvLq30OYkGr7eKL-yjdr6xZHbA/view?usp=share_link">Physics(1)</a></li>
                                <li><a href="https://drive.google.com/file/d/17fTg9VxSp06cr3dYK-o5OfTEG5KU6aQ6/view?usp=share_link">Chemistry</a></li>
                                <li><a href="https://drive.google.com/file/d/19-c5NM25_2C1ZP8lnTIqZliyzZ-Pt3K2/view?usp=share_link">Math(1)</a></li>
                                <li><a href="https://drive.google.com/file/d/1dWUfFvgQ_WWDKZXVsTsJM4nW90Yu1WaI/view?usp=share_link">English</a></li>
                                <li><a href="https://drive.google.com/file/d/1HLLk5Oowsw5vGZWCR_sIefvMMuk9Oes4/view?usp=share_link">Electrical Eng.</a></li>
                                <li><a href="https://drive.google.com/file/d/1g--K_NUChARx6BGpf1RK7_G53zw45y1h/view?usp=share_link">Mechanical Eng.</a></li>  
                                <li><a href="https://drive.google.com/file/d/1XXKhmN6Y9zkoOOeV_JwUrX8s_2ZAuXjs/view?usp=share_link">C Prog.</a></li>   
                            </ul>
                      </div>
                    </td>
                    <td><a href="#"><b>2nd Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1YVVE9AYcE8TBRLmqeVa3CcuzeOf0UhXN/view?usp=share_link">Physics(2)</a></li>
                                <li><a href="https://drive.google.com/file/d/1j3iTHjlMcPqJqUHcRDaa5XsTRWozYITh/view?usp=share_link">Economics</a></li>
                                <li><a href="https://drive.google.com/file/d/15XjtdfPSoMIvkZiUoJ4K3wlRcf5RJ811/view?usp=share_link">Math(2)</a></li>
                                <li><a href="https://drive.google.com/file/d/1esApTbdN3Wcfq_FJb37WOCl3-CYC-uzZ/view?usp=share_link">Manufecturing</a></li>
                                <li><a href="https://drive.google.com/file/d/1gljsIZfjYqQ_OnSuwHsDqAdPHxkzx4nA/view?usp=share_link">Eng. Graphic</a></li>
                                <li><a href="https://drive.google.com/file/d/1JRppAru7eqUvr1XwIc9e0-hA7Xzc5Dc2/view?usp=share_link">Environmental</a></li>  
                                <li><a href="https://drive.google.com/file/d/1yj7hSofKFtDbiVFLREquwVmdmk4OB9p1/view?usp=share_link">Electronics</a></li>   
                            </ul>
                      </div>
                    </td>
                    </td>
                    <td><a href="#"><b>3rd Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1PRbNRPK9CttK4ynIiRxDcZNlVldBLtXH/view?usp=share_link">Elec. Eng. Mat.</a></li>
                                <li><a href="https://drive.google.com/file/d/1AIXi830YyuXo7Ln5IAvscn5YFABpxtGA/view?usp=share_link">Electromagnetic</a></li>
                                <li><a href="https://drive.google.com/file/d/1qrnyBX6xJnwUwLBGkk_fz9rpHT6byLbv/view?usp=share_link">Math(2)</a></li>
                                <li><a href="https://drive.google.com/file/d/1wrl7peeyAirLttJhZEk4GupgN6hb59MB/view?usp=share_link">Network & Syn.</a></li>
                                <li><a href="https://drive.google.com/file/d/1IKfilLushvQ3dZ9R2ipIRzO7TSXYhSWf/view?usp=share_link">Analog Elec.</a></li>
                                <li><a href="https://drive.google.com/file/d/12okARvTKZ5MUWFbw9OCt77sAifIjJnG5/view?usp=share_link">Ele.&Instr.</a></li>  
                            </ul>
                      </div>
                    </td>
                    <td><a href="#"><b>4th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1on0vLEdeONhG_aZry18lIP_A4xLONTsN/view?usp=share_link">Signal and Sys.</a></li>
                                <li><a href="https://drive.google.com/file/d/1vDv9mrlJm0nXFRHnblj_9-CRXxm-eWmH/view?usp=share_link">Digital Elec.</a></li>
                                <li><a href="https://drive.google.com/file/d/1BygF6_TRogLmUQ2Uh5TM17DdArQosxIE/view?usp=share_link">Linear Int. Cir.</a></li>
                                <li><a href="https://drive.google.com/file/d/1sno2s3bEZh0BwQ9sC8IGPiAOlAGh3eR3/view?usp=share_link">Computer Org.</a></li>
                                <li><a href="https://drive.google.com/file/d/1TOymiL-6JGRUY4xb-fs08g-uWxF1dRtk/view?usp=share_link">Element of Elec.</a></li>
                                <li><a href="toutube1.jpg">Ind. Management</a></li>  
                            </ul>
                      </div>
                    </td>
                    <td><a href="#"><b>5th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1HdnGFUOFRtihl7sGN8z8RUkz93SLjlbM/view?usp=share_link">Analog Com. Sys.</a></li>
                                <li><a href="https://drive.google.com/file/d/1rWTFJQG5PG1vbw_r7PB09rhN_HWDMny6/view?usp=share_link">Antenna&Wave Prop.</a></li>
                                <li><a href="https://drive.google.com/file/d/1Zs-30PQejgKyBSc5u1kIdv3MG7bmBWOc/view?usp=share_link">Consumer Elect.</a></li>
                                <li><a href="https://drive.google.com/file/d/1McWAMdLou-g4p--qT8XWsi95cKYr1BdI/view?usp=share_link">Microprocessor</a></li>
                                <li><a href="https://drive.google.com/file/d/1PcX1j0HELsLle8jkJosJLoYVdX0Ds9lR/view?usp=share_link">Control Sys.</a></li>
                                <li><a href="https://drive.google.com/file/d/1GiCufCzIAeqKbIOs0RCghJ1kh7DVB8JV/view?usp=share_link">Power Elec.</a></li>  
                            </ul>
                      </div>
                    </td>
                    <td><a href="#"><b>6th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href= "https://drive.google.com/file/d/12zIkY_2CFBFD9OCrXXj9jsCf65FSk-nY/view?usp=share_link">DSP</a></li>
                                <li><a href="https://drive.google.com/file/d/1oreOUvPjVSNReYRGUt6tb_t74AWHkvS7/view?usp=share_link">Digital Com. Sys.</a></li>
                                <li><a href="https://drive.google.com/file/d/1ou7VoaBvNcNO7R7Y4GYY2bkP_09Ec4S3/view?usp=share_link">Microelectronics</a></li>
                                <li><a href="https://drive.google.com/file/d/1AYq5AOb8gjm9GWE7hXRIwPuyzyJu0lUc/view?usp=share_link">RADAR & Nav. Aids</a></li>
                                <li><a href="https://drive.google.com/file/d/1AYq5AOb8gjm9GWE7hXRIwPuyzyJu0lUc/view?usp=share_link">Data Network </a></li>
                                <li><a href="https://drive.google.com/file/d/19ZwnmehQ9SgztWlG5VbCsF7hyIqFlrUl/view?usp=share_link">Micro. & Emb. Sys.</a></li>  
                            </ul>
                      </div>
                    </td>
                    <td><a href="toutube1.jpg"><b>7th Sem</a></td>
                    <td><a href="toutube1.jpg"><b>8th Sem</a></td>
            </tr>
            <h4 class="h-fourth">Syllabus  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h4>
            <tr>
                    <td><a href="https://drive.google.com/file/d/1Eym899F55Mf8OBcAKdo9B21TBm_EJcbh/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1gtDqlUYoSrwPu4vZnPf2P0ewp1zuKiGZ/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1t_xeEjtq6x1on9ZUh0o-uEtCWdRkeYXo/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1TXnXLdoOG4tdJqKZ3VpbHKybovtGnYJ9/view?usp=share_link"><b>4th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1falDwWb5wMVzNrQLG1YTxYakp2RNV_ot/view?usp=share_link"><b>5th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1xEHPuMvCrdlOCtiTCqEwq9hJF_tn2lqa/view?usp=share_link"><b>6th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1ovs0n8OOfhkO2012eBKd8gPb5p3OIYmR/view?usp=share_link"><b>7th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/16t_8CX7tqwH_tmTISV-D2ykyFgW3ANkw/view?usp=share_link"><b>8th Sem</a></td>
            </tr>
            <h5 class="h-fifth">End Sem Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h5>
            <tr>
                    <td><a href="https://drive.google.com/file/d/10uIZJO3MxmQ5kONOnsPQrSNVMzvvDlBp/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1o4mh2-fWzwBcv2Cj1h2w1LwUTYCbdQp3/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1MpfZV8xii21JKtuT6Ii-VjtNuQQeK0wQ/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1wyj4Au2ryY9qBlPpXRibVznAmdELHF02/view?usp=share_link"><b>4th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1KfPs697sWCv-yTQc1g32k2ttWNN0ti7N/view?usp=share_link"><b>5th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1kP9uhHdT_41ygBuzBVZdRTTIqLI06ksu/view?usp=share_link"><b>6th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1MqVWJTYgJOqiT0pHJnsKriDe0xgwmUz4/view?usp=share_link"><b>7th Sem</a></td>
                    <td><a href="sorry.webp"><b>8th Sem</a></td>
            </tr>
        </table>
    </fieldset>
     </div>

     <div class="table4">
        <fieldset>
        <table border="0">
                <legend>
            <h2 class="h-secondary">B.TECH(ME) Previous paper <i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>
        </legend>
        <h3 class="h-third">1st and 2nd Mid Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                    <td><a href="https://drive.google.com/file/d/14BFWN9lW_HrHbRSBeyRSedwgoDK9abpb/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="sorry.webp"><b>2nd Sem</a></td>
                    <td><a href="sorry.webp"><b>3rd Sem</a></td>
                    <td><a href="sorry.webp"><b>4th Sem</a></td>
                    <td><a href="sorry.webp"><b>5th Sem</a></td>
                    <td><a href="sorry.webp"><b>6th Sem</a></td>
                    <td><a href="sorry.webp"><b>7th Sem</a></td>
                    <td><a href="sorry.webp"><b>8th Sem</a></td>
            </tr>
            <h3>Study Material(Notes)  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                    <td><a href="#"><b>1st Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/12fOHtPfmIUdQIBR5wCCWwKk4Gx2qh4Jo/view?usp=share_link">Physics(1)</a></li>
                                <li><a href="https://drive.google.com/file/d/12_vVKmAK2c9FaSjOr8n9F2oTUJAAVMSN/view?usp=share_link">Economics</a></li>
                                <li><a href="https://drive.google.com/file/d/12_vVKmAK2c9FaSjOr8n9F2oTUJAAVMSN/view?usp=share_link">Math</a></li>
                                <li><a href="https://drive.google.com/file/d/16rMgWgAcINnj6JBlCipYi5qOmwpCEHgf/view?usp=share_link">Manufecturing</a></li>
                                <li><a href="https://drive.google.com/file/d/13iokW6C3uzO2DedE8OTMrO8L0_XQfi-e/view?usp=share_link">Eng. Graphic</a></li>
                                <li><a href="https://drive.google.com/file/d/19nexsMb0m2CmTx_ZWT6eoOQHCmF84JVE/view?usp=share_link">Environmental</a></li>  
                                <li><a href="https://drive.google.com/file/d/1O6pQ40vtAF1OAUQmb3vt6rRTqT9z7KZ4/view?usp=share_link">Electronics</a></li>   
                            </ul>
                        </td>
                    </div>
                    <td><a href="#"><b>2nd Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1TRQi9rPGbuT7rkDjn7EtkMFqYvYEhmuR/view?usp=share_link">Physics(2)</a></li>
                                <li><a href="https://drive.google.com/file/d/1uFTmS3W3lEiZnt1vE1_yvLqUFZXYpgvM/view?usp=share_link">Chemistry</a></li>
                                <li><a href="https://drive.google.com/file/d/1K-b2rxdmsCymquweBI2K7WNRqwtAA-ca/view?usp=share_link">Math(2)</a></li>
                                <li><a href="https://drive.google.com/file/d/1uc2taN_W2LJmNb1mt1e0C2hENKWNEJU0/view?usp=share_link">English</a></li>
                                <li><a href="https://drive.google.com/file/d/13CgYgUzNOL15NHC5h-2O9_PH1VpZetQ2/view?usp=share_link">Electrical Eng.</a></li>
                                <li><a href="https://drive.google.com/file/d/1UjVYapwf61LgKcyMhxmkpwco4VHRCUfD/view?usp=share_link">Mechanical Eng.</a></li>  
                                <li><a href="https://drive.google.com/file/d/186uLS5P-46H_nDvcRpLE-WDrDXpqW5Vh/view?usp=share_link">C Prog.</a></li>   
                            </ul>
                      </div>
                    </td>
                
                <td><a href="sorry.webp"><b>3rd Sem</a></td>
                <td><a href="sorry.webp"><b>4th Sem</a></td>
                    <td><a href="toutube1.jpg"><b>5th Sem</a></td>
                        <td><a href="sorry.webp"><b>6th Sem</a></td>
                            <td><a href="toutube1.jpg"><b>7th Sem</a></td>
                                <td><a href="sorry.webp"><b>8th Sem</a></td>
                </tr>
            <h4 class="h-fourth">Syllabus  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h4>
            <tr>
                   <td><a href="https://drive.google.com/file/d/15jQyaNaYbfFpeDHR1UPE7fkdXNT0E6H-/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1-hGhXqiluCbNf41KG-2EncKgng1r7RJS/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1BJISvx-DJRza5icQZyRTSDBcETd-YRyt/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1KvVZndnitRH9swWTRhzYw33wP90cP9aE/view?usp=share_link"><b>4th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1xb4XK6K585Je2NSKcqWLVmzzP0TASsmq/view?usp=share_link"><b>5th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/19qD09GOCyLUiWflDMRE7Y8Sd74ROkKa0/view?usp=share_link"><b>6th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1nyLqP0t9CMbWIh5HT9w4j__uLo--GejA/view?usp=share_link"><b>7th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1t50N3_x0yQcVN9WUFoA0cyis77eWcsey/view?usp=share_link"><b>8th Sem</a></td>
            </tr>
            <h5 class="h-fifth">End Sem Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h5>
            <tr>
                    <td><a href="https://drive.google.com/file/d/1bkJjlZYKMdhgfubvxTwBTSWSHRpavwF5/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1iuo6BSzESOpvpMzHzV3hbL7Y2AIp2OJI/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1qh7_Lmp4RcTj9R_asdkBlFTqsiP71w3J/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/14w9H9aO936R0lTWxvjiPHkQMl3aFfF9f/view?usp=share_link"><b>4th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1Xk4UYE9Lfu8UNZd1N-8e051KGOi3ZakW/view?usp=share_link"><b>5th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1G6tjOtkHkztYuK2jA41WnEBz2aHlYAF9/view?usp=share_link"><b>6th Sem</a></td>
                    <td><a href="sorry.webp"><b>7th Sem</a></td>
                    <td><a href="sorry.webp"><b>8th Sem</a></td>
            </tr>
        </table>
    </fieldset>
     </div>

     <div class="table5">
        <fieldset>
        <table border="0">
                <legend>
            <h2 class="h-secondary">B.TECH(CH) Previous paper <i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>
        </legend>
        <h3 class="h-third">1st and 2nd Mid Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                    <td><a href="https://drive.google.com/file/d/1BuBeuFtkjFTuUc3O9O783i5SkkXPQsDQ/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="sorry.webp"><b>2nd Sem</a></td>
                    <td><a href="sorry.webp"><b>3rd Sem</a></td>
                    <td><a href="sorry.webp"><b>4th Sem</a></td>
                    <td><a href="sorry.webp"><b>5th Sem</a></td>
                    <td><a href="sorry.webp"><b>6th Sem</a></td>
                    <td><a href="sorry.webp"><b>7th Sem</a></td>
                    <td><a href="sorry.webp"><b>8th Sem</a></td>
            </tr>
            <h3>Study Material(Notes)  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                    <td><a href="#"><b>1st Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1C5WO2dlUxkcg9gQ3bP_Tmwffv2Zm-S8F/view?usp=share_link">Physics(1)</a></li>
                                <li><a href="https://drive.google.com/file/d/1CSbCKFGTh3QIGiH1lL6pGNSRS7c71jQU/view?usp=share_link">Economics</a></li>
                                <li><a href="https://drive.google.com/file/d/1sBohR5XccuDsTBQNGRRelvWFDHCf6JYz/view?usp=share_link">Math</a></li>
                                <li><a href="https://drive.google.com/file/d/1FAfbyKk4LspO7TpPdVRYlG_Js-cb0_1I/view?usp=share_link">Manufecturing</a></li>
                                <li><a href="https://drive.google.com/file/d/1PZ9kq-fQMflG8wBue8X4fyc0bTbOP1UN/view?usp=share_link">Eng. Graphic</a></li>
                                <li><a href="https://drive.google.com/file/d/19I8Vtp49vLYpRwjHBsJjAxlo0RRk2uSW/view?usp=share_link">Environmental</a></li>  
                                <li><a href="https://drive.google.com/file/d/1q8YNg72WE6Hz5pPGQ6MqtPfn1zcLNc7p/view?usp=share_link">Electronics</a></li>   
                            </ul>
                    </div>
                    </td>
                    <td><a href="#"><b>2nd Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1v0iqIerKGQlUb-z1BA8rx7VKZIbSf3Rt/view?usp=share_link">Physics(2)</a></li>
                                <li><a href="https://drive.google.com/file/d/1xASCMnzlzwLFpsU2I33AfwYJvLZ9cQ-_/view?usp=share_link">Chemistry</a></li>
                                <li><a href="https://drive.google.com/file/d/1BQodH4ejuDTGYPv2bh4l7Xuvy6uUhiU8/view?usp=share_link">Math(2)</a></li>
                                <li><a href="https://drive.google.com/file/d/1HVGNn7HV0thqumqi-hkrxFj_-uDsi5Cn/view?usp=share_link">English</a></li>
                                <li><a href="https://drive.google.com/file/d/1cq0DzFo57g5qixgB1BOXNDHxgvmE4Zqa/view?usp=share_link">Electrical Eng.</a></li>
                                <li><a href="https://drive.google.com/file/d/1aM382V43dSrSvP8e13YYpZBU7x2KX3OX/view?usp=share_link">Mechanical Eng.</a></li>  
                                <li><a href="https://drive.google.com/file/d/1QA8sGmJwpZdor4Jd4Vb6fKVMnEpQHBWg/view?usp=share_link">C Prog.</a></li>   
                            </ul>
                      </div>
                    </td>
                    <td><a href="toutube1.jpg"><b>3rd Sem</a></td>
                    <td><a href="toutube1.jpg"><b>4th Sem</a></td>
                    <td><a href="toutube1.jpg"><b>5th Sem</a></td>
                    <td><a href="toutube1.jpg"><b>6th Sem</a></td>
                    <td><a href="toutube1.jpg"><b>7th Sem</a></td>
                    <td><a href="toutube1.jpg"><b>8th Sem</a></td>
            </tr>
            <h4 class="h-fourth">Syllabus  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h4>
            <tr>
                    <td><a href="https://drive.google.com/file/d/17uQkrdOoUQke-osGqmKbv9gJrzvCfQi8/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1rAlGIeY-3N9Q9mKCTsXdG5P_ML_Q5XqN/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1ODsdolI_fMZQygpaXaoXA2yEdEb4OVnQ/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1fKrvQylWOuhj1j50XnjMmsSvMVVPYpdG/view?usp=share_link"><b>4th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1wdmc-6L-efa22XLch0pgQqvWpp5Dwzge/view?usp=share_link"><b>5th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1ujMcwnR082zbOdNegAGyqGdkvlQcNkp1/view?usp=share_link"><b>6th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1V8wA98J0Ze1xt22N-1gni-R5rCKwGfu-/view?usp=share_link"><b>7th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1BJ8v89RRdLAx8DZYyVhuMvIHQMdEf1E7/view?usp=share_link"><b>8th Sem</a></td>
            </tr>
            <h5 class="h-fifth">End Sem Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h5>
            <tr>
                    <td><a href="https://drive.google.com/file/d/1NHurS8kRkosjs_NzwvrVIVx_QI5ZClUW/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/18vVxEgmXdFmA8uVZkHojqnX0DVTcwF44/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1agjWB8vAlbtUaGnvh4GVMZgeF5_tTY8B/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1mqNktYegOIf6_YEUqH9HIuZ6RCr4GPjE/view?usp=share_link"><b>4th Sem</a></td>
                    <td><a href="sorry.webp"><b>5th Sem</a></td>
                    <td><a href="sorry.webp"><b>6th Sem</a></td>
                    <td><a href="sorry.webp"><b>7th Sem</a></td>
                    <td><a href="sorry.webp"><b>8th Sem</a></td>
            </tr>
        </table>
    </fieldset>
     </div>

     <div class="table6">
        <fieldset>
        <table border="0">
                <legend>
            <h2 class="h-secondary">B.TECH(EI) Previous paper <i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>
        </legend>
        <h3 class="h-third">1st and 2nd Mid Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                    <td><a href="https://drive.google.com/file/d/18aoYSA104rhZbLddH5tumYZ4YSFts9Ks/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="sorry.webp"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/16711RcHiNgeZ1mLcxjNU3vigFCrehZn_/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="sorry.webp"><b>4th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1BZFE1F4KFslyqXfFqix0kQUZ_TDetKcl/view?usp=share_link"><b>5th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1MVWonv4gwnodvbISge95KVydFuNHL8K7/view?usp=share_link"><b>6th Sem</a></td>
                    <td><a href="sorry.webp"><b>7th Sem</a></td>
                    <td><a href="sorry.webp"><b>8th Sem</a></td>
            </tr>
            <h3>Study Material(Notes)  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                    <td><a href="#"><b>1st Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1YVVE9AYcE8TBRLmqeVa3CcuzeOf0UhXN/view?usp=share_link">Physics(1)</a></li>
                                <li><a href="https://drive.google.com/file/d/17fTg9VxSp06cr3dYK-o5OfTEG5KU6aQ6/view?usp=share_link">Chemistry</a></li>
                                <li><a href="https://drive.google.com/file/d/19-c5NM25_2C1ZP8lnTIqZliyzZ-Pt3K2/view?usp=share_link">Math(1)</a></li>
                                <li><a href="https://drive.google.com/file/d/1dWUfFvgQ_WWDKZXVsTsJM4nW90Yu1WaI/view?usp=share_link">English</a></li>
                                <li><a href="https://drive.google.com/file/d/1HLLk5Oowsw5vGZWCR_sIefvMMuk9Oes4/view?usp=share_link">Electrical Eng.</a></li>
                                <li><a href="https://drive.google.com/file/d/1g--K_NUChARx6BGpf1RK7_G53zw45y1h/view?usp=share_link">Mechanical Eng.</a></li>  
                                <li><a href="https://drive.google.com/file/d/1XXKhmN6Y9zkoOOeV_JwUrX8s_2ZAuXjs/view?usp=share_link">C Prog.</a></li>   
                            </ul>
                      </div>
                    </td>
                    <td><a href="#"><b>2nd Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1YVVE9AYcE8TBRLmqeVa3CcuzeOf0UhXN/view?usp=share_link">Physics(2)</a></li>
                                <li><a href="https://drive.google.com/file/d/1j3iTHjlMcPqJqUHcRDaa5XsTRWozYITh/view?usp=share_link">Economics</a></li>
                                <li><a href="https://drive.google.com/file/d/15XjtdfPSoMIvkZiUoJ4K3wlRcf5RJ811/view?usp=share_link">Math(2)</a></li>
                                <li><a href="https://drive.google.com/file/d/1esApTbdN3Wcfq_FJb37WOCl3-CYC-uzZ/view?usp=share_link">Manufecturing</a></li>
                                <li><a href="https://drive.google.com/file/d/1gljsIZfjYqQ_OnSuwHsDqAdPHxkzx4nA/view?usp=share_link">Eng. Graphic</a></li>
                                <li><a href="https://drive.google.com/file/d/1JRppAru7eqUvr1XwIc9e0-hA7Xzc5Dc2/view?usp=share_link">Environmental</a></li>  
                                <li><a href="https://drive.google.com/file/d/1yj7hSofKFtDbiVFLREquwVmdmk4OB9p1/view?usp=share_link">Electronics</a></li>   
                            </ul>
                    </div>
                    </td>
                    <td><a href="#"><b>3rd Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1pQanTn4GhjXnpAyx2PLnXLXQ3A1VYG0s/view?usp=share_link">Analog Ele.</a></li>
                                <li><a href="https://drive.google.com/file/d/12YT3RokW6cnx9ZVRrXrP8CEUf4p743GM/view?usp=share_link">Electronic Mea.</a></li>
                                <li><a href="https://drive.google.com/file/d/1-eIRgU4p3hbT3DfcUDyFNvd_coshb-4A/view?usp=share_link">Data Structure</a></li>
                                <li><a href="https://drive.google.com/file/d/1UwbK6F-xpVhjbuOeUuT9uHYWlIRckOyt/view?usp=share_link">Electromag. The.</a></li>
                                <li><a href="https://drive.google.com/file/d/18KEpKUBacwgrnoME_sokICFoDX8Yx5O6/view?usp=share_link">Network Ana.</a></li>
                                <li><a href="https://drive.google.com/file/d/1ssXvxsXuqVI_MLpzD72ZddDXeR2nHRpO/view?usp=share_link">Eng. MAthematics</a></li>  
                         
                            </ul>
                      </div>
                    </td>
                    <td><a href="#"><b>4th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1jKErWg4A-IIKTqA72MexcBd9VolpET9A/view?usp=share_link">Linear Int. Cir.</a></li>
                                <li><a href="sorry.webp">Signal&Sys.</a></li>
                                <li><a href="sorry.webp">Dig. Ele. Cir.</a></li>
                                <li><a href="https://drive.google.com/file/d/1zywPToABToC9RXmqFz-rNwZElmfm3z57/view?usp=share_link">Comp. Org.</a></li>
                                <li><a href="sorry.webp">Element of Ele. Mache.</a></li>
                                <li><a href="sorry.webp">Prof. Ethics</a></li>  
                     
                            </ul>
                      </div>
                    </td>
                    <td><a href="#"><b>5th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="sorry.webp">Analog Comm.</a></li>
                                <li><a href="https://drive.google.com/file/d/10mgbKDn57Bf3oTYtzinqartOuFOR5Jnt/view?usp=share_link">8085&8086</a></li>
                                <li><a href="sorry.webp">Sensor&Trans.</a></li>
                                <li><a href="sorry.webp">Control Sys.</a></li>
                                <li><a href="https://drive.google.com/file/d/1oJeImiLQ6VV7-aF1dNPm_Mf6Y4S8XeD7/view?usp=share_link">Power Ele.</a></li>
                                <li><a href="sorry.webp">Ind. Instr.</a></li>  
                
                            </ul>
                      </div>
                    </td>
                    <td><a href="#"><b>6th Sem</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1ejfFwJx2xnmh8p1_FwEQf7pjAG1DAMu0/view?usp=share_link">DSP</a></li>
                                <li><a href="sorry.webp">Embed. Sys.</a></li>
                                <li><a href="sorry.webp">Digital Comm. Sys.</a></li>
                                <li><a href="https://drive.google.com/file/d/1m_mxhaSIGYutYkr5tZMsB9U9y_VY-e8m/view?usp=share_link">Optical Fibre Inst.</a></li>
                                <li><a href="sorry.webp">Modern Control Sys.</a></li>
                                <li><a href="sorry.webp">Power Plant</a></li>  
                                
                            </ul>
                      </div>
                    </td>
                    <td><a href="sorry.webp"><b>7th Sem</a></td>
                    <td><a href="sorry.webp"><b>8th Sem</a></td>
            </tr>
            <h4 class="h-fourth">Syllabus  <i class="fa fa-hand-o-right" aria-hidden="true" style="color : #2a44a5"></i></h4>
            <tr>
                    <td><a href="https://drive.google.com/file/d/1bSsy1BEquZrIBOJJ2-fLbLlnZKotHQX2/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1aG2Hvh6xV8zxmCbtiHTKI42HDHnhoPSW/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/17i3kQ8I6R8hJJPzvl1OKW6NSOqTx1Lfo/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1k700NbLr_1E1UyEW298MKKHssqyl22OI/view?usp=share_link"><b>4th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1BP_pg99HlwZPOoDYgTiGgzgJsm6atXTr/view?usp=share_link"><b>5th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1ZOZbvlAusSVUZIgJltBQ4xGzX7_m79KL/view?usp=share_link"><b>6th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1Qrmx5olDpzGHJRuBT_CIxnbsZ1_L4BDc/view?usp=share_link"><b>7th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/174qeCtnn8VF-e9o0xAAQkn8Vy1DK5irH/view?usp=share_link"><b>8th Sem</a></td>
            </tr>
            <h5 class="h-fifth">End Sem Paper  <i class="fa fa-hand-o-right" aria-hidden="true" style="color : #2a44a5"></i></h5>
            <tr>
                    <td><a href="https://drive.google.com/file/d/1k4uitAFszBXLCKi7I5OzyHfI8M3BJAl8/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1JEgo2SQPopr0-5-V14-Kv_rAXE8Fg83_/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1qMMmEN3oecNa3OB9spF-puORgju7YPfi/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="sorry.webp"><b>4th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1H0Gal5TWRzSAInstjcb3NP11zpzeW93G/view?usp=share_link"><b>5th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1JUj2eg54sYBqNELsIrgOg46BBss6DiSh/view?usp=share_link"><b>6th Sem</a></td>
                    <td><a href="sorry.webp"><b>7th Sem</a></td>
                    <td><a href="sorry.webp"><b>8th Sem</a></td>
            </tr>
        </table>
    </fieldset>
     </div>

     <div class="table7">
        <fieldset>
        <table border="0">
                <legend>
            <h2 class="h-secondary">BPHARMA Previous paper <i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>
        </legend>
        <h3 class="h-third">1st and 2nd Mid Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                    <td><a href="https://drive.google.com/file/d/1uBd8FpaGcvksZkShcf71p5MYlsQg-n1s/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="sorry.webp"><b>2nd Sem</a></td>
                    <td><a href="sorry.webp"><b>3rd Sem</a></td>
                    <td><a href="sorry.webp"><b>4th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1c77Y-XIiLBzVLqrgzkC_irMW7-0PcaFk/view?usp=share_link"><b>5th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1i5yxSbudQq7oTGsDFwVepq4gckBHatv3/view?usp=share_link"><b>6th Sem</a></td>
                    <td><a href="sorry.webp"><b>7th Sem</a></td>
                    <td><a href="sorry.webp"><b>8th Sem</a></td>
            </tr>
            <h3>Study Material(Notes)  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                    <td><a href="#"><b>BOOK</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1nthj5oGlOALZSUldETgRFFLHxDT-ub3q/view?usp=share_link">BioChemistry</a></li>
                                <li><a href="https://drive.google.com/file/d/1VorTP-AecKKmll6_fICdn_8KahINiT53/view?usp=share_link">Comp. Appl. in Phar.</a></li>
                                <li><a href="https://drive.google.com/file/d/1VRCsF7mDhYaql7_Y-oUS4vMnJg6u6gZD/view?usp=share_link">Human Anatomy</a></li>
                                <li><a href="https://drive.google.com/file/d/1VRCsF7mDhYaql7_Y-oUS4vMnJg6u6gZD/view?usp=share_link">Human&Physiology(1)</a></li>
                                <li><a href="https://drive.google.com/file/d/1ICQJR8rxAJtTE38ixakvvWXjd8JWZlEF/view?usp=share_link">Human&Physiology(2)</a></li>
                                <li><a href="https://drive.google.com/file/d/1iRwJ1iLXP_uc4r80_pKfU_-A2QMnYtdi/view?usp=share_link">Pharmaceutical</a></li>  
                                
                            </ul>
                      </div>
                    </td>
                    <td><a href="#"><b>BOOK</a>&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color : #2a44a5"></i>
                        <div class="studydrop">
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1HX7EeJOZfw6ldp3Vdnvx4UqWyHGQXuvj/view?usp=share_link">Pharmaceutical inorg.</a></li>
                                <li><a href="https://drive.google.com/file/d/1rs3ZCeqkfNIgOmgrzEizaRxRqA3Ofy-O/view?usp=share_link">Pharm. Organic</a></li>
                                <li><a href="https://drive.google.com/file/d/1yahG8sBBOkL_QjQgq2ixM8aMBuYk00Kq/view?usp=share_link">Pharmaceutics</a></li>
                                <li><a href="https://drive.google.com/file/d/1uO8OPcsyIt5fz2JlZai2GJ6qP0tCbIHD/view?usp=share_link">Physical Pharmaceutic</a></li>
                            </ul>
                      </div>
                    </td>
            </tr>
            <h4 class="h-fourth">Syllabus  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h4>
            <tr>
                    <td><a href="https://drive.google.com/file/d/1ZJNx_AeYuHTfGVAvCXprByjqRKYddiA1/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1L65albEYxW6sVLBbnokNtO8veSy8VSgm/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1mmCGb0E-8Bw85wXVd67uhVD3ziHE5ZLV/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1eF15Mzw8itMCYCDD0x26HEbjj-Dajqv3/view?usp=share_link"><b>4th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1gbE1f2nkHNBNlOk2V5-O7QajjUjWeaOX/view?usp=share_link"><b>5th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1wBNM-mssPGIuGssNiN1qjAnyclYbxPuc/view?usp=share_link"><b>6th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1g6J3cMpJNO72UfKLu1oOJl-xjYcGGgwa/view?usp=share_link"><b>7th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1-qSwAyRwyWXfKUaNBI9rTh4yRMsz07In/view?usp=share_link"><b>8th Sem</a></td>
            </tr>
            <h5 class="h-fifth">End Sem Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h5>
            <tr>
                    <td><a href="https://drive.google.com/file/d/1APn_fl2PaWE64zJhvz0OdqOokYh18ZPl/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1fe5topEV47r6yxtA-EIwB5zLLcm3TY4j/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1tUrHJ00qUk55SbnlX33vbXXNkuwdiilx/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="sorry.webp"><b>4th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1I_GkSU8tGowXQHY0OCyuiqinJpBqMXtV/view?usp=share_link"><b>5th Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1lGg3kYtqrt0bXLtTSXvoR-Nt5tb0ISPS/view?usp=share_link"><b>6th Sem</a></td>
                    <td><a href="sorry.webp"><b>7th Sem</a></td>
                    <td><a href="sorry.webp"><b>8th Sem</a></td>
            </tr>
        </table>
    </fieldset>
     </div>

     <div class="table8">
        <fieldset>
        <table border="0">
                <legend>
            <h2 class="h-secondary">MBA(Marketi.) Previous paper <i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>
        </legend>
        <h3 class="h-third">1st and 2nd Mid Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                    <td><a href="https://drive.google.com/file/d/1GpH42baZ3lFTAiy0KbB67aHQ4Ws2evVx/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1PqvfjJp16cOucMDU9ZSxBalDFxtddEZ1/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1Rxj8ZBOumMCADXqeyHlccPaCJNQUkbnm/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1Rxj8ZBOumMCADXqeyHlccPaCJNQUkbnm/view?usp=share_link"><b>4th Sem</a></td>
            </tr>
            <h3>Study Material(Notes)  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                   <td><a href="toutube1.jpg"><b>1st Sem</a></td>
                    <td><a href="toutube1.jpg"><b>2nd Sem</a></td>
                    <td><a href="toutube1.jpg"><b>3rd Sem</a></td>
                    <td><a href="toutube1.jpg"><b>4th Sem</a></td>
                    
            </tr>
            <h4 class="h-fourth">Syllabus  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h4>
            <tr>
                   <td><a href="https://drive.google.com/file/d/1A9krIhgSIlyKW4Xv_1sjXWVTc75To-C8/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/17twU3DP3RjUQLO8_h8Vn605rNQjwUID_/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1IbiqUagX0Y0H0UX0buYPePLwZqvEErH-/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/10uWN46mQuRNpRLpW2z-xR1d5e2iTw_20/view?usp=share_link"><b>4th Sem</a></td>
                    
            </tr>
            <h5 class="h-fifth">End Sem Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h5>
            <tr>
                    <td><a href="https://drive.google.com/file/d/1I4Gw-RdcEXkr858UkyW2pAYV1TnTKYWC/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/10g51ThQMZfyak8_dhH3cArwVWMg4XU18/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1De6eTU8RxPty-k5dSyOegAzpAEQEt87n/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1De6eTU8RxPty-k5dSyOegAzpAEQEt87n/view?usp=share_link"><b>4th Sem</a></td>
                    
            </tr>
        </table>
    </fieldset>
     </div>

     <div class="table9">
        <fieldset>
        <table border="0">
                <legend>
          <h2 class="h-secondary">&emsp;MBA(General) Previous paper <i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>
        </legend>
        <h3 class="h-third">1st and 2nd Mid Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                <td><a href="https://drive.google.com/file/d/1GpH42baZ3lFTAiy0KbB67aHQ4Ws2evVx/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1PqvfjJp16cOucMDU9ZSxBalDFxtddEZ1/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1Rxj8ZBOumMCADXqeyHlccPaCJNQUkbnm/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1Rxj8ZBOumMCADXqeyHlccPaCJNQUkbnm/view?usp=share_link"><b>4th Sem</a></td>
            </tr>
            <h3>Study Material(Notes)  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3>
            <tr>
                   <td><a href="toutube1.jpg"><b>1st Sem</a></td>
                    <td><a href="toutube1.jpg"><b>2nd Sem</a></td>
                    <td><a href="toutube1.jpg"><b>3rd Sem</a></td>
                    <td><a href="toutube1.jpg"><b>4th Sem</a></td>
                    
            </tr>
            <h4 class="h-fourth">Syllabus  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h4>
            <tr>
                   <td><a href="https://drive.google.com/file/d/1iXWCkrFMzo3HnD0irVo6p8zvvQG6xTaX/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1GzaaDxDYIJACpUy7giO2fQs2nr4Z6gaJ/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1kve99dXfhr7MqDrrO_9FV8rIB_iun6WW/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1Jl3UlOT55yq5__K66hSBx8-xNpTuezhR/view?usp=share_link"><b>4th Sem</a></td>
                    
            </tr>
            <h5 class="h-fifth">End Sem Paper  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h5>
            <tr>
                     <td><a href="https://drive.google.com/file/d/1I4Gw-RdcEXkr858UkyW2pAYV1TnTKYWC/view?usp=share_link"><b>1st Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/10g51ThQMZfyak8_dhH3cArwVWMg4XU18/view?usp=share_link"><b>2nd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1De6eTU8RxPty-k5dSyOegAzpAEQEt87n/view?usp=share_link"><b>3rd Sem</a></td>
                    <td><a href="https://drive.google.com/file/d/1De6eTU8RxPty-k5dSyOegAzpAEQEt87n/view?usp=share_link"><b>4th Sem</a></td>
                    
            </tr>
        </table>
    </fieldset>
     </div>

     

     <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col">
              <h4>Contact Us</h4>
                <h6 class="h-six"><i class="fa fa-map-marker" aria-hidden="true"></i>
                    <pre>
                     Deepanshu Saxena
                     Aligarh,Uttar Pradesh
                     Pin Code-202002<br>
                </pre> 
            </h6>
                <h8 class="h-eight"><i class="fa fa-envelope" aria-hidden="true"></i>&emsp;deepanshusaxena241@gmail.com</h8>
            </div>
            <div class="footer-col">
              <h4>Site developed by !</h4>
              <ul>
                <li><a href="#"><i class="fa fa-diamond" aria-hidden="true"></i>$VK$future</education></a></li>
                <li><a href="tel:8476832779"><i class="fa fa-phone" aria-hidden="true"></i>+91-84X6-832-X79</a></li>
              </ul>
              <h14 class="h-forteen">(Mon to Sat - 10:00 AM - 02:00 PM)</h14>
            </div>
            <div class="footer-col">
              <h4>follow</h4>
              <div class="social-links">
              <a href="https://www.linkedin.com/in/deepanshu-saxena-b33a82214"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/dipanshu.saxena.9809"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="https://twitter.com/BALAJIISVKS?t=ig3BlyUumtYkdyECOb9fA&s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
          </div>
        <div class="footer_logo">
            <h13 class="h-thirteen">Get Update Paper in your inbox</h13>
            <form action="#">
            <input type="text" value="" placeholder="&emsp;Enter your email address!" name="">
            <input type="submit" name="" class="submit slide_animation">
            </form>
            <p class="h-fifteen"><b>© 2022 $VK$MJP , ALIGARH 202125 - All Rights Reserved</p>
            <span></span>
        </div>
     </footer>
    
</body>
</html>