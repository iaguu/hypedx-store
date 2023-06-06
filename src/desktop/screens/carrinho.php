<?php
	include_once('config.php');
	@session_start();

    $a = $_SESSION['cartProds'];
	$b = $_SESSION['cartQnt'];
	$c = $_SESSION['cartTam'];

    $a = substr($a,0,-1);
	$b = substr($b,0,-1);
	$c = substr($c,0,-1);

    $email = $_SESSION['user'];

	$q = "SELECT * FROM usuarios WHERE email = '$email'";
	$rn = $mysqli->query($q);
	$user = $rn->fetch_array();

	$nome = $user['nome'];

	$total = 0;

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho - Checkout</title>

    <script src="https://kit.fontawesome.com/b37cf30113.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/jquery.mask.js"></script>

		<!-- Facebook Pixel Code -->
			<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window,document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '913689742675022'); 
			fbq('track', 'PageView');
			</script>
			<noscript>
			<img height="1" width="1" 
			src="https://www.facebook.com/tr?id=913689742675022&ev=PageView
			&noscript=1"/>
			</noscript>
			<!-- End Facebook Pixel Code -->

    <style>
        			/* width */
			::-webkit-scrollbar {
                width: 10px;
              }
              
              /* Track */
              ::-webkit-scrollbar-track {
                background: #f1f1f1; 
              }
               
              /* Handle */
              ::-webkit-scrollbar-thumb {
                background: #888; 
              }
              
              /* Handle on hover */
              ::-webkit-scrollbar-thumb:hover {
                background: #555; 
              }
			  
        body{
            background-color: whitesmoke;
        }
        a{
            text-decoration: underline #7700ff;
        }
        .menu{
            top:0;
            left:0;
            position:fixed;
            width: 100%;
            height: 100px;
            background-color: black;
            z-index: 1000;
        }
        .menu img{
            float: left;
            border-radius: 55px;
            padding: 20px;
        }
        .menu h2{
            text-align: center;
            font-family: Raleway, sans-serif;
            font-weight: 800;
            color: whitesmoke;
            font-size: 38px;
            margin-bottom: 20px;
            margin-right:75px;
            z-index: 1000;
        }
        .container{
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
            text-align: center;
            padding: 0px;
        }
        .main{
            position:initial;
            margin-top:180px;
            align-self: center;
            background-color: white;
            padding: 50px;
            -webkit-box-shadow: 1px 3px 10px 6px rgba(0,0,0,0.20); 
            box-shadow: 1px 3px 10px 6px rgba(0,0,0,0.20);
            width: 650px;
        }
        .main-header{
            align-items: center;
            align-self: center;
            padding: 50px;
        }
        .main-body{
            align-items: center;
            align-self: center;
            margin: 20px;
            border: 1px solid #eee;
            box-shadow: 1px 3px 10px 3px rgba(0,0,0,0.14);

        }
        .main-footer-checkout{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
        }
        .separator{
            align-items: center;
            align-self: center;
            padding: 20px;
            border: 1px solid #eee;
        }
        .circle{
            width: 72px;
            height: 72px;
            border-radius: 100%;
            background-color: #e8f0ff;
            position: absolute;
            margin-top: -50px;
            cursor: pointer;
            justify-content: center;
            box-shadow: 1px 3px 12px 3px rgba(0,0,0,0.15);
        }

        .circle h4{
            font-family: 'Rubik',Helvetica,Arial,Lucida,sans-serif;
            font-weight: 600;
            font-size:13px;
            color: #7700ff;
            margin-top:35px;
        }

        .circle h3{
            font-family: 'Rubik',Helvetica,Arial,Lucida,sans-serif;
            font-weight: 600;
            font-size: 14px;
            color: #02044a;
            margin-top:-26px;
        }

        .circle i{margin-top:30px}

        .left{margin-left:30px;}
        .middle{margin-left:245px;}
        .right{margin-left:455px;}

        .checked i{color: #7700ff !important;}

        .active{background-color: #7700ff !important;}
        .active i{color: white !important;}
        
        
        .waiting i{color: #50607a !important;}
        .waiting h4{color: #50607a !important; cursor:default;}

        .standby{opacity: 0.6; cursor: default !important;}
        .arrow{
            display: flex;
            width: 8px;
            height: 8px;
            padding: 16px;
            border-radius: 100%;
            background-color: #7700ff;
            color: white;
            cursor: pointer;
            float: right; 
            transition-duration: 0.3s;
            justify-content: center;
            text-align: center;
            box-shadow: 1px 3px 10px 4px rgba(0,0,0,0.10);
        }
        .arrow:hover{
            opacity: 0.6;
        }
        .arrow i{align-self: center;}

        .mobile-hide{}

        .dashed-line{
            border:1px dashed #7700ff;
        }
        .shop-btn{
            display: flex;
            justify-content: center;
            text-align: center;
            background-color: #7700ff;
            color: white;

            padding-left: 15px;
            padding-right: 15px;
            padding-top: 5px;
            padding-bottom: 3px;

            
            border-radius: 15px;
            border: 1px solid #eee;
            box-shadow: 1px 3px 11px 7px rgba(0,0,0,0.18);
            transition-duration: 0.2s;

            cursor: pointer;
            margin: 3px;
        }
        .shop-btn:hover{
            opacity: 0.7;
        }
        .shop-btn i{
            margin-top:12px;
        }
        .shop-btn h2{
            font-family: 'Rubik',Helvetica,Arial,Lucida,sans-serif;
            font-weight: 600;
            font-size: 14px;
            margin-left:5px;
        }
        .obs{
            font-family: Open Sans,Arial,sans-serif;
            font-size: 12px;
            font-weight: 500;
            text-align: center;
            opacity: 0.9;
        }
        .loader {
                border: 6px solid white;
                border-radius: 50%;
                border-top: 6px solid #7700ff;
                width: 220px;
                height: 220px;
                -webkit-animation: spin 2s linear infinite; /* Safari */
                animation: spin 2s linear infinite;
              }

              .loader-div{
                  margin-top:18%;
                  display: flex; 
                  flex-direction: column; 
              }

			  .loader-img{
				  padding: 10px;
                  margin-top: -185px;
                  margin-left:-15px;
			  }
              .loader-text{
                font-family: 'Rubik',Helvetica,Arial,Lucida,sans-serif;
                font-weight: 600;
                font-size: 14px;
                margin-top:60px;
              }
              /* Safari */
                @-webkit-keyframes spin {
                0% { -webkit-transform: rotate(0deg); }
                100% { -webkit-transform: rotate(360deg); }
                }

                @keyframes spin { 
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
                }
        @media screen and (max-width: 700px){
        .loader-div{
            margin-top:200px;
            display: flex; 
            flex-direction: column; 
        }
        .dashed-line{
            border:1px dashed #7700ff;
        }
        html, body{
            overflow-x: hidden; 
        }
        body{
            background-color: whitesmoke;
            position:relative;
        }
        .mobile-hide{
            display:none;
        }
        .menu{
            top:0;
            left:0;
            position:fixed;
            width: 500px;
            height: 100px;
            background-color: black;
            z-index: 1000;
        }
        .menu img{
            float: left;
            border-radius: 55px;
            padding: 20px;
        }
        .menu h2{
            text-align: center;
            font-family: Raleway, sans-serif;
            font-weight: 800;
            color: whitesmoke;
            font-size: 38px;
            margin-bottom: 20px;
            margin-right:140px;
            z-index: 1000;
        }
        .container{
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
            text-align: center;
            padding: 1px;
        }
        .main{
            position:initial;
            margin-top:100px;
            align-self: center;
            background-color: white;
            padding: 50px;
            -webkit-box-shadow: 1px 3px 10px 6px rgba(0,0,0,0.20); 
            box-shadow: 1px 3px 10px 6px rgba(0,0,0,0.20);
            width: 650px;
        }
        .main-header{
            align-items: center;
            align-self: center;
            padding: 85px;
        }
        .main-body{
            align-items: center;
            align-self: center;
            margin: 20px;
            border: 1px solid #eee;
            box-shadow: 1px 3px 12px 5px rgba(0,0,0,0.17);
        }
        .main-footer-checkout{
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-content: center;
        }
        .separator{
            align-items: center;
            align-self: center;
            padding: 20px;
            border: 1px solid #eee;
        }
        .circle{
            width: 72px;
            height: 72px;
            border-radius: 100%;
            background-color: #e8f0ff;
            position: absolute;
            margin-top: -50px;
            cursor: pointer;
            justify-content: center;
            box-shadow: 1px 3px 12px 3px rgba(0,0,0,0.15);
        }

        .circle h4{
            font-family: 'Rubik',Helvetica,Arial,Lucida,sans-serif;
            font-weight: 600;
            font-size:13px;
            color: #7700ff;
            margin-top:35px;
        }

        .circle h3{
            font-family: 'Rubik',Helvetica,Arial,Lucida,sans-serif;
            font-weight: 600;
            font-size: 14px;
            color: #02044a;
            margin-top:-26px;
        }

        .circle i{margin-top:30px}

        .left{margin-left:-80px;}
        .middle{margin-left:50px;}
        .right{margin-left:180px;}

        .checked i{color: #7700ff !important;}

        .active{background-color: #7700ff !important;}
        .active i{color: white !important;}
        
        
        .waiting i{color: #50607a !important;}
        .waiting h4{color: #50607a !important; cursor:default;}

        .standby{opacity: 0.6; cursor: default !important;}
        .arrow{
            display: flex;
            width: 8px;
            height: 8px;
            padding: 16px;
            border-radius: 100%;
            background-color: #7700ff;
            color: white;
            cursor: pointer;
            float: right; 
            transition-duration: 0.3s;
            justify-content: center;
            text-align: center;
            box-shadow: 1px 3px 10px 4px rgba(0,0,0,0.10);
        }
        .arrow:hover{
            opacity: 0.6;
        }
        .arrow i{align-self: center;}

        }



    </style>

</head>
<body>
    <header>
        <div class="menu">
        <a href="https://hypedx.com.br/Inicio"><img width="64" src="../Inicio/images/HypedX.jpg" alt=""></a>
            <a href="https://hypedx.com.br/Inicio"><h2>HypedX</h2></a>
        </div>
    </header>
    <br>
    <section>
        


        <div class="container">

            <div style="display:none;" class="loader-div" id="loader">
                <div class="loader"></div>
                <div class="loader-img">
                    <img width="128" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iNTExcHQiIHZlcnNpb249IjEuMSIgdmlld0JveD0iLTM4IDAgNTExIDUxMS45OTk1NiIgd2lkdGg9IjUxMXB0Ij4KPGcgaWQ9InN1cmZhY2UxIj4KPHBhdGggZD0iTSA0MTMuNDc2NTYyIDM0MS45MTAxNTYgQyAzOTkuNzE0ODQ0IDM3OS4yMDcwMzEgMzc4LjkwMjM0NCA0MTEuNjM2NzE5IDM1MS42MDkzNzUgNDM4LjI4OTA2MiBDIDMyMC41NDI5NjkgNDY4LjYyNSAyNzkuODYzMjgxIDQ5Mi43MzA0NjkgMjMwLjY5OTIxOSA1MDkuOTI1NzgxIEMgMjI5LjA4NTkzOCA1MTAuNDg4MjgxIDIyNy40MDIzNDQgNTEwLjk0OTIxOSAyMjUuNzEwOTM4IDUxMS4yODkwNjIgQyAyMjMuNDc2NTYyIDUxMS43MzA0NjkgMjIxLjIwMzEyNSA1MTEuOTY4NzUgMjE4Ljk0OTIxOSA1MTIgTCAyMTguNTA3ODEyIDUxMiBDIDIxNi4xMDU0NjkgNTEyIDIxMy42OTE0MDYgNTExLjc1NzgxMiAyMTEuMjk2ODc1IDUxMS4yODkwNjIgQyAyMDkuNjA1NDY5IDUxMC45NDkyMTkgMjA3Ljk0NTMxMiA1MTAuNDg4MjgxIDIwNi4zMzk4NDQgNTA5LjkzNzUgQyAxNTcuMTE3MTg4IDQ5Mi43Njk1MzEgMTE2LjM4NjcxOSA0NjguNjc1NzgxIDg1LjI4OTA2MiA0MzguMzM5ODQ0IEMgNTcuOTg0Mzc1IDQxMS42ODc1IDM3LjE3NTc4MSAzNzkuMjc3MzQ0IDIzLjQzMzU5NCAzNDEuOTgwNDY5IEMgLTEuNTU0Njg4IDI3NC4xNjc5NjkgLTAuMTMyODEyIDE5OS40NjQ4NDQgMS4wMTE3MTkgMTM5LjQzMzU5NCBMIDEuMDMxMjUgMTM4LjUxMTcxOSBDIDEuMjYxNzE5IDEzMy41NTQ2ODggMS40MTAxNTYgMTI4LjM0NzY1NiAxLjQ5MjE4OCAxMjIuNTk3NjU2IEMgMS45MTAxNTYgOTQuMzY3MTg4IDI0LjM1NTQ2OSA3MS4wMTE3MTkgNTIuNTg5ODQ0IDY5LjQzNzUgQyAxMTEuNDU3MDMxIDY2LjE1MjM0NCAxNTYuOTk2MDk0IDQ2Ljk1MzEyNSAxOTUuOTA2MjUgOS4wMjczNDQgTCAxOTYuMjQ2MDk0IDguNzE0ODQ0IEMgMjAyLjcwNzAzMSAyLjc4OTA2MiAyMTAuODQ3NjU2IC0wLjExNzE4OCAyMTguOTQ5MjE5IDAuMDAzOTA2MjUgQyAyMjYuNzYxNzE5IDAuMTA1NDY5IDIzNC41NDI5NjkgMy4wMDc4MTIgMjQwLjc3MzQzOCA4LjcxNDg0NCBMIDI0MS4xMDU0NjkgOS4wMjczNDQgQyAyODAuMDIzNDM4IDQ2Ljk1MzEyNSAzMjUuNTYyNSA2Ni4xNTIzNDQgMzg0LjQyOTY4OCA2OS40Mzc1IEMgNDEyLjY2NDA2MiA3MS4wMTE3MTkgNDM1LjEwOTM3NSA5NC4zNjcxODggNDM1LjUyNzM0NCAxMjIuNTk3NjU2IEMgNDM1LjYwOTM3NSAxMjguMzg2NzE5IDQzNS43NTc4MTIgMTMzLjU4NTkzOCA0MzUuOTg4MjgxIDEzOC41MTE3MTkgTCA0MzYgMTM4LjkwMjM0NCBDIDQzNy4xNDA2MjUgMTk5LjA0Njg3NSA0MzguNTU0Njg4IDI3My44OTg0MzggNDEzLjQ3NjU2MiAzNDEuOTEwMTU2IFogTSA0MTMuNDc2NTYyIDM0MS45MTAxNTYgIiBzdHlsZT0iIHN0cm9rZTpub25lO2ZpbGwtcnVsZTpub256ZXJvO2ZpbGw6cmdiKDAlLDg2LjY2NjY2NyUsNTAuMTk2MDc4JSk7ZmlsbC1vcGFjaXR5OjE7IiAvPgo8cGF0aCBkPSJNIDQxMy40NzY1NjIgMzQxLjkxMDE1NiBDIDM5OS43MTQ4NDQgMzc5LjIwNzAzMSAzNzguOTAyMzQ0IDQxMS42MzY3MTkgMzUxLjYwOTM3NSA0MzguMjg5MDYyIEMgMzIwLjU0Mjk2OSA0NjguNjI1IDI3OS44NjMyODEgNDkyLjczMDQ2OSAyMzAuNjk5MjE5IDUwOS45MjU3ODEgQyAyMjkuMDg1OTM4IDUxMC40ODgyODEgMjI3LjQwMjM0NCA1MTAuOTQ5MjE5IDIyNS43MTA5MzggNTExLjI4OTA2MiBDIDIyMy40NzY1NjIgNTExLjczMDQ2OSAyMjEuMjAzMTI1IDUxMS45Njg3NSAyMTguOTQ5MjE5IDUxMiBMIDIxOC45NDkyMTkgMC4wMDM5MDYyNSBDIDIyNi43NjE3MTkgMC4xMDU0NjkgMjM0LjU0Mjk2OSAzLjAwNzgxMiAyNDAuNzczNDM4IDguNzE0ODQ0IEwgMjQxLjEwNTQ2OSA5LjAyNzM0NCBDIDI4MC4wMjM0MzggNDYuOTUzMTI1IDMyNS41NjI1IDY2LjE1MjM0NCAzODQuNDI5Njg4IDY5LjQzNzUgQyA0MTIuNjY0MDYyIDcxLjAxMTcxOSA0MzUuMTA5Mzc1IDk0LjM2NzE4OCA0MzUuNTI3MzQ0IDEyMi41OTc2NTYgQyA0MzUuNjA5Mzc1IDEyOC4zODY3MTkgNDM1Ljc1NzgxMiAxMzMuNTg1OTM4IDQzNS45ODgyODEgMTM4LjUxMTcxOSBMIDQzNiAxMzguOTAyMzQ0IEMgNDM3LjE0MDYyNSAxOTkuMDQ2ODc1IDQzOC41NTQ2ODggMjczLjg5ODQzOCA0MTMuNDc2NTYyIDM0MS45MTAxNTYgWiBNIDQxMy40NzY1NjIgMzQxLjkxMDE1NiAiIHN0eWxlPSIgc3Ryb2tlOm5vbmU7ZmlsbC1ydWxlOm5vbnplcm87ZmlsbDpyZ2IoMCUsNjYuNjY2NjY3JSwzOC44MjM1MjklKTtmaWxsLW9wYWNpdHk6MTsiIC8+CjxwYXRoIGQ9Ik0gMzQ2LjEwMTU2MiAyNTYgQyAzNDYuMTAxNTYyIDMyNi4yMDcwMzEgMjg5LjA5NzY1NiAzODMuMzU1NDY5IDIxOC45NDkyMTkgMzgzLjYwNTQ2OSBMIDIxOC41IDM4My42MDU0NjkgQyAxNDguMTQ0NTMxIDM4My42MDU0NjkgOTAuODk0NTMxIDMyNi4zNTkzNzUgOTAuODk0NTMxIDI1NiBDIDkwLjg5NDUzMSAxODUuNjQ0NTMxIDE0OC4xNDQ1MzEgMTI4LjM5ODQzOCAyMTguNSAxMjguMzk4NDM4IEwgMjE4Ljk0OTIxOSAxMjguMzk4NDM4IEMgMjg5LjA5NzY1NiAxMjguNjQ4NDM4IDM0Ni4xMDE1NjIgMTg1Ljc5Njg3NSAzNDYuMTAxNTYyIDI1NiBaIE0gMzQ2LjEwMTU2MiAyNTYgIiBzdHlsZT0iIHN0cm9rZTpub25lO2ZpbGwtcnVsZTpub256ZXJvO2ZpbGw6cmdiKDEwMCUsMTAwJSwxMDAlKTtmaWxsLW9wYWNpdHk6MTsiIC8+CjxwYXRoIGQ9Ik0gMzQ2LjEwMTU2MiAyNTYgQyAzNDYuMTAxNTYyIDMyNi4yMDcwMzEgMjg5LjA5NzY1NiAzODMuMzU1NDY5IDIxOC45NDkyMTkgMzgzLjYwNTQ2OSBMIDIxOC45NDkyMTkgMTI4LjM5ODQzOCBDIDI4OS4wOTc2NTYgMTI4LjY0ODQzOCAzNDYuMTAxNTYyIDE4NS43OTY4NzUgMzQ2LjEwMTU2MiAyNTYgWiBNIDM0Ni4xMDE1NjIgMjU2ICIgc3R5bGU9IiBzdHJva2U6bm9uZTtmaWxsLXJ1bGU6bm9uemVybztmaWxsOnJnYig4OC4yMzUyOTQlLDkyLjE1Njg2MyUsOTQuMTE3NjQ3JSk7ZmlsbC1vcGFjaXR5OjE7IiAvPgo8cGF0aCBkPSJNIDI3Ni40MTc5NjkgMjM3LjYyNSBMIDIxOC45NDkyMTkgMjk1LjEwMTU2MiBMIDIwNi41MzEyNSAzMDcuNTE5NTMxIEMgMjAzLjU5NzY1NiAzMTAuNDUzMTI1IDE5OS43NSAzMTEuOTE3OTY5IDE5NS45MDYyNSAzMTEuOTE3OTY5IEMgMTkyLjA1ODU5NCAzMTEuOTE3OTY5IDE4OC4yMTQ4NDQgMzEwLjQ1MzEyNSAxODUuMjc3MzQ0IDMwNy41MTk1MzEgTCAxNTguNTc4MTI1IDI4MC44MDg1OTQgQyAxNTIuNzEwOTM4IDI3NC45NDE0MDYgMTUyLjcxMDkzOCAyNjUuNDM3NSAxNTguNTc4MTI1IDI1OS41NjY0MDYgQyAxNjQuNDM3NSAyNTMuNjk5MjE5IDE3My45NTMxMjUgMjUzLjY5OTIxOSAxNzkuODIwMzEyIDI1OS41NjY0MDYgTCAxOTUuOTA2MjUgMjc1LjY1MjM0NCBMIDI1NS4xNzU3ODEgMjE2LjM4MjgxMiBDIDI2MS4wNDI5NjkgMjEwLjUxMTcxOSAyNzAuNTU4NTk0IDIxMC41MTE3MTkgMjc2LjQxNzk2OSAyMTYuMzgyODEyIEMgMjgyLjI4NTE1NiAyMjIuMjUgMjgyLjI4NTE1NiAyMzEuNzY1NjI1IDI3Ni40MTc5NjkgMjM3LjYyNSBaIE0gMjc2LjQxNzk2OSAyMzcuNjI1ICIgc3R5bGU9IiBzdHJva2U6bm9uZTtmaWxsLXJ1bGU6bm9uemVybztmaWxsOnJnYig3MC41ODgyMzUlLDgyLjM1Mjk0MSUsODQuMzEzNzI1JSk7ZmlsbC1vcGFjaXR5OjE7IiAvPgo8cGF0aCBkPSJNIDI3Ni40MTc5NjkgMjM3LjYyNSBMIDIxOC45NDkyMTkgMjk1LjEwMTU2MiBMIDIxOC45NDkyMTkgMjUyLjYwNTQ2OSBMIDI1NS4xNzU3ODEgMjE2LjM4MjgxMiBDIDI2MS4wNDI5NjkgMjEwLjUxMTcxOSAyNzAuNTU4NTk0IDIxMC41MTE3MTkgMjc2LjQxNzk2OSAyMTYuMzgyODEyIEMgMjgyLjI4NTE1NiAyMjIuMjUgMjgyLjI4NTE1NiAyMzEuNzY1NjI1IDI3Ni40MTc5NjkgMjM3LjYyNSBaIE0gMjc2LjQxNzk2OSAyMzcuNjI1ICIgc3R5bGU9IiBzdHJva2U6bm9uZTtmaWxsLXJ1bGU6bm9uemVybztmaWxsOnJnYig0My41Mjk0MTIlLDY0LjcwNTg4MiUsNjYuNjY2NjY3JSk7ZmlsbC1vcGFjaXR5OjE7IiAvPgo8L2c+Cjwvc3ZnPg==" />
                </div>

                <p id="text1" class="loader-text">Estamos finalizando o seu pedido...</p>
                <p style="display: none;" id="text2" class="loader-text">Isso pode demorar alguns instantes...</p>
            </div>	

            <script>
                function remove(id) { 
                    window.location.href = 'remove.php?id=' + id;
                 }
            </script>

            <div id="cart" class="main">
                <div class="main-header">
                    
                    <div class="circle left checked"><i class="fa-solid fa-check"></i><br><h4>1/3</h4><br><h3>Loja</h3></div>
                    <div class="circle middle active"><i class="fa-solid fa-cart-shopping"></i><br><h4>2/3</h4><br><h3>Carrinho</h3></div>
                    <div onclick="$('#cart').hide(); $('#checkout').fadeIn(1500)" class="circle right waiting"><i class="fa-solid fa-credit-card"></i><br><h4>3/3</h4><br><h3>Pagamento</h3></div>

                    <hr size="1" class="dashed-line">
                </div>
                <br>
                <div class="main-body">

                    <?php
                    if(isset($_SESSION['cartProds']))
                    {
                    ?>
                    <div class="product-label" style="background-color: #eee !important;">
                        <div style="width: 50px;"></div>
                        <h3 style="width: 124px !important;">PRODUTO</h3>
                        <h3>PREÇO</h3>
                        <h3 class="mobile-hide">QUANTIDADE</h3>
                        <h3 class="mobile-hide">SUBTOTAL</h3>
                        <h2 style="width: 25px !important;"></h2>
                        <h3 class="mobile-hide" style="width: 5px !important;"></h3>
                    </div>
                    <?php
                    $a = explode(",", $a);

                    $b = explode(",", $b);

                    $c = explode(",", $c);

                    for ($i = 0; $i < sizeof($a); $i++){


                        $q = "SELECT * FROM produtos WHERE id = ";

                        $q .= $a[$i];

                        $rn = $mysqli->query($q);
                        
                        $prod = $rn->fetch_array();
                        
                        $total = $total + $prod['preco'];

                        $imgs = explode(",", $prod['img']);
                    ?>
                    <div class="product-label">
                        <img width="72" src="../Catalogo/images/<?php echo $imgs[0]; ?>" alt=""> 
                        <h2 style="width: 120px !important; margin-left: -25px;"><?php echo $prod['nome']; ?></h2>
                        <h2>R$<?php echo $prod['preco']; ?>,00</h2>
                        <h2 class="mobile-hide">1</h2>
                        <h2 class="mobile-hide">R$<?php echo $prod['preco']; ?>,00</h2>
                        <h2 style="width: 26px !important;"><a style="text-decoration: none; font-size: 18px; color:#7700ff;" href="javascript:remove(<?php echo $prod['id']; ?>)">&times;</a></h2>
                        <h2 class="mobile-hide" style="width: 5px !important;"></h2>
                    </div>
                    <?php 
                            }
                        }else{
                    ?>
                    <h2 class="ops">Ooops... Seu carrinho está vazio!</h2>
                    <?php 
                        }
                    ?>
                </div>
                <div class="main-footer">
                    <a style="text-decoration: none;" href="../Catalogo"><div style="background-color: white !important; color:#7700ff !important;" class="shop-btn"><i class="fa-solid fa-cart-shopping"><p> </p></i> <h2> Continuar Comprando</h2></div></a>
                    <?php
                    if(isset($_SESSION['cartProds']))
                    {
                    ?>
                    <a style="text-decoration: none;" href="javascript: $('#cart').hide(); $('#checkout').fadeIn(1500);"><div style="margin-top:15px;" class="shop-btn"><i class="fa-solid fa-check"><p> </p></i> <h2> Finalizar Compra</h2></div></a>
                    <?php
                    }
                    ?>
                    <br>

                    <!-- <div class="arrow" onclick="$('#cart').hide(); $('#checkout').fadeIn(1500)" ><i class="fa-solid fa-arrow-right"></i><br><h4></h4></div> -->

                    <br>
                    <p class="cnpj">CNPJ: 44.919.104/0001-70</p>
                </div>
            </div>

            <div id="checkout" class="main" style="display: none;">
                <div class="main-header mobile">
                    
                    <div class="circle left checked"><i class="fa-solid fa-check"></i><br><h4>1/3</h4><br><h3>Loja</h3></div>
                    <div onclick="location.reload()" class="circle middle checked"><i class="fa-solid fa-check"></i><br><h4>2/3</h4><br><h3>Carrinho</h3></div>
                    <div class="circle right active"><i class="fa-solid fa-credit-card"></i><br><h4>3/3</h4><br><h3>Pagamento</h3></div>

                    <hr size="1" class="dashed-line">
                </div>
                <br>
                <div class="main-body">
                    <div class="checkout-form">
                        <form id="formCad">
                            <div class="separator">

                                <h2>Informações de Cobrança:</h2>

                                <label for="name">Nome: <span>*</span> </label>
                                <input required placeholder="Seu nome" type="text" name="" id="nome" style="width: 100px !important;">
                                <br>
                                <label for="midname">Sobrenome: <span>*</span> </label>
                                <input required placeholder="Seu sobrenome" type="text" name="" id="midname" style="width: 150px !important;">
                                <br>
                                <br>
                                <label for="email">Email: <span>*</span> </label>
                                <input required placeholder="email@hotmail.com" type="email" name="" id="email" style="width: 250px !important;">
                                <br>
                                <label for="tel">Celular: <span>*</span> </label>
                                <input onkeydown="$(this).mask('(00) 00000-0000');" required placeholder="(11) 99999-9999" type="phone" name="" id="tel" style="width: 200px !important;">
                                
                            </div>
                            <br>
                            <br>
                            <div class="separator">
                                <h2>Informações para o Envio:</h2>

                                <label for="end">Endereço: <span>*</span> </label>
                                <input required placeholder="Av. Brasil" type="text" name="" id="end">
                                <br>
                                <label for="n">Nº: <span>*</span> </label>
                                <input required placeholder="3113" type="text" name="" id="n" style="width: 75px !important;">
                                <br>
                                <label for="cep">CEP: <span>*</span> </label>
                                <input onkeydown="$(this).mask('00000-000');" required placeholder="02431020" type="postal" name="" id="cep" style="width: 150px !important;">
                                <br>
                                <label for="compl">Complemento: </label>
                                <input placeholder="Apartamento 212 bloco A" type="text" name="" id="compl" style="width: 200px !important;">
                            </div>
                            <br>
                            <br>
                            <div class="separator">

                                <h2>Formas de Pagamento:</h2>
                                <div class="payment-forms">
                                    <br>
                                    <br>
                                    <img class="hover-pay" width="100" id="mercc" onclick="choosePlat('merc'); $(this).toggleClass('active-pay');" src="images/mercadopago.jpg" alt="">
                                    <img class="hover-pay" width="100" id="pagg" onclick="alert('PagSeguro está em manutenção no momento, por favor escolha outra plataforma ou entre em contato conosco.')" src="images/pagseguro.jpg" alt="">
                                    <!-- <img class="hover-pay" width="100" id="pagg" onclick="choosePlat('pag'); $(this).toggleClass('active-pay'); " src="images/pagseguro.jpg" alt=""> -->
                                    <br>
                                </div>

                            </div>
                            <br>
                            <div class="separator">

                                <div class="infos">
                                    <h3>Produtos: R$<?php echo $total; ?>,00</h3>
                                    <h3>Descontos: R$0,00</h3>
                                    <h3>Frete: R$0,00</h3>
                                    <h2>Subtotal: R$<?php echo $total; ?>,00</h2>
                                    <hr />
                                    <br>
                                    <br>
                                    <hr />
                                    <h2>Total: R$<?php echo $total; ?>,00</h2>
                                    <hr />
                                    <br>
                                    <h3 style="display: none;" id="mercform">Forma de Pagamento: MercadoPago</h3>
                                    <h3 style="display: none;" id="pagform">Forma de Pagamento: PagSeguro</h3>
                                    <br>
                                    <div class="main-footer-checkout">
                                        
                                        <div id="paybtn" onclick="$('#formCad').submit();" class="pay-btn standby"><i class="fa-solid fa-lock"></i><h4 style="color:white !important;">Pagar</h4></div>
                                        <!-- <div id="paybtn" onclick="$('#checkout').hide();$('#loader').show();" class="pay-btn standby"><i class="fa-solid fa-lock"></i><h4 style="color:white !important;">Pagar</h4></div> -->
                                        <br>
                                        <p class="obs mobile-hide">(Você será redirecionado para a plataforma escolhida p/ realizar o pagamento com segurança e privacidade).</p>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
            


        </div>
    </section>

    <style>
        
        .infos{
            padding: 60px;
            text-align: center;
        }
        .infos h3{
            font-family: Open Sans,Arial,sans-serif;
            font-weight: 600;
            font-size: 12px !important;
            color: #011e3f!important;
        }
        .infos h4{
            font-family: Open Sans,Arial,sans-serif;
            font-weight: 500;
            font-size: 13px !important;
            color: #011e3f!important;
        }
        .pay-btn{

            display: flex;
            justify-content: center;
            text-align: center;
            align-content: center;
            align-self: center;

            background-color: #7700ff;
            color: white;
            
            width: 100px;

            padding-left: 4px;
            padding-right: 4px;

            padding-top: -1px;
            padding-bottom: -1px;
            
            border-radius: 14px;

            border: 2px solid #eee;
            box-shadow: 1px 3px 9px 5px rgba(0,0,0,0.20);

            transition-duration: 0.2s;

            cursor: pointer;
        }
        .pay-btn h4{
            font-family: 'Rubik',Helvetica,Arial,Lucida,sans-serif;
            font-weight: 600;
            font-size: 14px;
            margin-left:5px;
        }
        .pay-btn i{margin-top:18px;}

        .pay-btn:hover{opacity: 0.6;}

        .payment-forms{
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
        }
        .checkout-form{
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 50px;
            text-align: left;
        }
        .checkout-form h2{
            font-family: Open Sans,Arial,sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: #011e3f!important;
        }

        .checkout-form span{
            color: red;
        }

        .product-label{
            display: flex;
            flex-direction: row;
            border-bottom: 1px solid #eee;
            justify-content: space-between;
            align-content:center;
        }
        .product-label img{
            float: left;
        }
        .product-label h2{
            font-family: 'Rubik',Helvetica,Arial,Lucida,sans-serif;
            font-weight: 600;
            font-size: 14px;
            color: #02044a;
            width: 30px;
            margin-top:24px;
        }
        .product-label h3{
            font-family: Open Sans,Arial,sans-serif;
            font-weight: 700;
            font-size: 12px;
            color: #4f5e78 !important;
            width: 30px;
        }
        @media screen and (max-width: 700px){
            .mobile{
                margin-left:50px; 
            }
            .product-label{
            display: flex;
            flex-direction: row;
            border-bottom: 1px solid #eee;
            justify-content: space-between;
            align-content:center;
            width: 300px;
            padding:1px;
        }
        .product-label img{
            float: left;
        }
        .product-label h2{
            font-family: 'Rubik',Helvetica,Arial,Lucida,sans-serif;
            font-weight: 600;
            font-size: 12px;
            color: #02044a;
            width: 30px;
            margin-top:24px;
        }
        .product-label h3{
            font-family: Open Sans,Arial,sans-serif;
            font-weight: 700;
            font-size: 12px;
            color: #4f5e78 !important;
            width: 30px;
        }
        }
        label{
            -webkit-font-smoothing: antialiased;
            word-wrap: break-word;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            -webkit-text-size-adjust: 100%;
            vertical-align: baseline;
            background: transparent;
            display: block;
            line-height: 2;
            font-family: 'Rubik',Helvetica,Arial,Lucida,sans-serif;
            font-weight: 500;
            font-size: 12px;
            color: #4f5e78!important;
        }
        input{  
            -webkit-font-smoothing: antialiased;
            word-wrap: break-word;
            -webkit-text-size-adjust: 100%;
            border: 1px solid #bbb;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            margin-bottom: 25px !important;
            outline: 0;
            -webkit-appearance: none;
            max-width: 100%;
            font-size: 14px;
            line-height: 1.7em;
            border-style: solid;
            height: auto;
            padding-top: 11px;
            padding-right: 8px;
            padding-bottom: 11px;
            padding-left: 8px;
            color: #4f5e78;
            font-family: 'Rubik',Helvetica,Arial,Lucida,sans-serif!important;
            border-width: 1px;
            border-color: #e2e4e9;
            background-color: #fafbfc;
            border-radius: 4px 4px 4px 4px;
            overflow: hidden;
        }
        .hover-pay{
            opacity:0.5;
            cursor:pointer;
        }
        .active-pay{
            opacity:1 !important;
        }
        .hover-pay:hover{
            opacity:1;
        }
        .disabled{
            opacity: 0.5 !important;
        }
        .disabled:hover{
            opacity: 0.5 !important;
        }
        .ops{
            font-family: Open Sans,Arial,sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: #011e3f!important;
        }
        .cnpj{
            font-family: Open Sans,Arial,sans-serif;
            font-weight: 700;
            font-size: 11px;
            color: #011e3f!important;
            margin-left:0px;
        }
    </style>

        <input type="hidden" id="platform" value="">
  
  <script>

      function alterText() {
          $("#text1").hide(100);
          $("#text2").show(100);
      }

    $(function() {
        $('#formCad').on('submit', function(e) {
            e.preventDefault();
    
                var nome = $('#nome').val();
                var email = $('#email').val();
                var tel = $('#tel').val();
                var cep = $('#cep').val();
                var num = $('#n').val();
                var pw = "12345678";

            if(nome.length > 3 && email.length > 10 && tel.length > 8 && cep.length > 6 && num.length > 0 && window.enabled == "true"){
                
                $("#checkout").hide();
                $("#loader").show();

				myVar = setTimeout(alterText, 2500);
                
            $.ajax({
                type: 'post',
                url: 'https://hypedx.com.br/Carrinho/cadastro.php',
                data: {
                    getNome: nome,
                    getEmail: email,
                    getTel: tel,
                    getCep: cep,
                    getPw: pw,
                    getNum: num
                },
                success: function (data) {
                    
                    var total = "<?php echo $total; ?>";
                    var pay = "null";
                    var platform = $("#platform").val()

                    var descri = "<?php echo $descricao?>";
                    
                        if(platform == 'mercadopago'){
                            window.location.href = 'checkout/mercadopago/?total=' + total + '&payment=' + pay;
                        }
                        if(platform == "pagseguro"){
                            window.location.href = 'checkout/pagseguro/?total=' + total + '&payment=' + pay + '&descri=' + descri;
                        }
    
                }
    
            });
            }else{
    
                alert('Verifique se os campos estão preenchidos e/ou a forma de pagamento está selecionada.')
    
            }
        });
    });
    
    </script>
        <script>
            function choosePlat(a) {

                $('#mercform').hide();
                $('#pagform').hide();

                if(a == "pag"){
                    $("#platform").val("pagseguro");
                    $('#pagform').show(500);
                }
                if(a == "merc"){
                    $("#platform").val("mercadopago");
                    $('#mercform').show(500);
                }

                $('#mercc').removeClass('active-pay');
                $('#pagg').removeClass('active-pay');

                $('#paybtn').removeClass('standby');

                window.enabled = "true";
            }
        </script>
        <a class="mobile-hide" href="https://wa.me/551151998446?text=Poderiam%20me%20ajudar?" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
        z-index:1000;" target="_blank">
            <i style="margin-top:16px" class="fa fa-whatsapp"></i>
      </a>
</body>
</html>