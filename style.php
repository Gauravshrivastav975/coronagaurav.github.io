
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing:border-box;
			font-family: 'Noto Sans JP', sans-serif;
			margin-bottom: 0px;
		}
/* header start */
ul li a{
  border-bottom: 1px solid black;
  line-height: 16px;
  transition: all 1s;
}
ul li:hover a{
  
  text-shadow: -1px 0px black,0px 1px black,
	               1px 0px black, 0px -1px black;
	               font-size: 21px;
}
.navbar_work{
	margin-top: -10px;
}
.navbar-brand img{
	animation: 10s earth linear infinite;
}
@keyframes earth{
	from {
		transform: rotate(0deg);
	}
	to{
		transform: rotate(360deg);
	}
}
		.border_header_down{
			width: 80%;
			height: 1px;
			background: black;
			margin: -62px 0px 0px 20% ;

		}
		.border_header_right{
			width:1px;
			height: 11px;
			background: black;
			position: absolute;
			margin:-11px 0px 0px 40%;
		}
		.border_header_right_1{
			width:1px;
			height: 11px;
			background: black;
			position: absolute;
			margin:-11px 0px 0px 49%;
		}
		.border_header_right_2{
			width:1px;
			height: 11px;
			background: black;
			position: absolute;
			margin:-11px 0px 0px 56%;
		}
		.border_header_right_3{
			width:1px;
			height: 11px;
			background: black;
			position: absolute;
			margin:-11px 0px 0px 63%;
		}
		.client{
			margin: 40px;
		}
		input{
			font-size: 10px !important;
			padding: 5px 10px !important;
			width: 250px;
		}
		.header_submit_button{
			font-size: 10px;
			padding: 5px 21px;
			font-weight: bold;
		}
		.header_1_footer{
			font-size: 13px;
			margin-left: 40%;
		}
.close_panel{
padding: 10px;
	background: black;
	color: white;
	border: none;
margin-left: 88%;
border-bottom-left-radius: 10px;
border-bottom-right-radius: 10px;
outline: none;
border: none;

}
.close_panel .close_sign{
border-radius: 50%;
text-align: center;
background: gray;
margin: 2px;

}
.close_panel:hover .close_sign{
	background: orange;
	
}
.main_header{
	background: black;
display: none;

}
/* header end */
.main_body{
	margin-top: 13%;
}
.main_body_box1 h1{
	font-size: 91px;
}
.animation_text::after{
	color: orange;
	content: "";
	animation: text_animation 10s linear alternate infinite;
	text-shadow: -1px 0px black,0px 1px black,
	               1px 0px black, 0px -1px black;
}
@keyframes text_animation{
	0%{
		content: "FOLLOW RULES";
	}
	20%{
		content: "DISTANCE";
	}
	35%{
		content: "GOOD HEALTH";
	}
	35%{
		content: "GOOD IMMUNITY";
	}
	60%{
		content: "SAFTY FOR SELF";
	}
	80%{
		content: "WILL POWER";
	}
	100%{
		content: "RESPECT CORONA WORRIOIRS";
	}
}
.img-jumbo{
	margin-top: 120px;
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(images/download.png);
	background-size: 100% 100%;
}
.img-jumbo h1{
	text-shadow: -1px 0px black,0px 1px black,
	               1px 0px black, 0px -1px black;
	               font-size: 51px;
}

.footer_2_work{
	background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8))
	,url(images/covid.png);
	background-size: 100% 100%;
	margin-top: -2%;
}
.body_background{ background-image: url(images/Coronavirus.jpg);
background-size:100% 100%;
background-repeat: no-repeat;
}

#preloader{
	width: 100%;
	height: 100%;
	position: fixed;
	z-index: 99999;
	background:#fff url(images/icon.png) no-repeat center;
}

/* mediaquery (max-width:1200px) start */
@media  (max-width:1499px){
.border_header_down{display: none;}
.border_header_right{display: none;}
.border_header_right_1{display: none;}
.border_header_right_2{display: none;}
.border_header_right_3{display: none;}



}
/* mediaquery (max-width:1200px) end */
 

/* mediaquery (min-width:769px) start */
@media (min-width:769px) and (max-width:1100px){
	.border_header_down{display: none;}
.border_header_right{display: none;}
.border_header_right_1{display: none;}
.border_header_right_2{display: none;}
.border_header_right_3{display: none;}

.header_1_footer{ margin-left: -2%; padding:15px 0px 15px 0px;}
.main_body_box1 h1{ font-size: 31px; }
.main_body_box1 p{ font-size: 13px; }
.main_body_box2 img{ width: 300px; }

}
/* mediaquery (max-width:1100px) end */


/* mediaquery (min-width:600px) and  (max-width:768px) start */
@media (min-width:600px) and (max-width:768px){

.border_header_down{display: none;}
.border_header_right{display: none;}
.border_header_right_1{display: none;}
.border_header_right_2{display: none;}
.border_header_right_3{display: none;}


	.client{margin-left:20%;}
	.username_1{padding:0px 0px 10px 0px;}
	.password_1{padding:0px 10px 0px 0px;}
.header_1_footer{ margin-left: -17%; padding:25px 0px 25px 0px;}
.main_body_box1 h1{ font-size: 31px; }
.main_body_box1 p{ font-size: 13px; }
.main_body_box2 img{ width: 300px; }


}
/* mediaquery (min-width:600px) and (max-width:768px) end */


/* mediaquery (min-width:500px) (max-width:599px) start */


@media (min-width:500px) and (max-width:599px){

.border_header_down{display: none;}
.border_header_right{display: none;}
.border_header_right_1{display: none;}
.border_header_right_2{display: none;}
.border_header_right_3{display: none;}


	.client{margin-left:20%;}
	.username_1{padding:0px 0px 10px 0px;}
	.password_1{padding:0px 10px 0px 0px;}
.header_1_footer{ margin-left: -17%; padding:25px 0px 25px 0px;}
.main_body_box1 h1{ font-size: 31px; }
.main_body_box1 p{ font-size: 13px; }
.main_body_box2 img{ width: 300px;  margin-left: 15%; }
.table-responsive{
	margin-bottom: 15% !important;
}
.padding_work{
	padding-top:10%;
}


}
/* mediaquery (max-width:599px) end */
 


	</style>

</head>
<body>
	
</body>
</html>