<!DOCTYPE html>
<html lang="en">
    	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="icon" href="https://i.imgur.com/PLRLVYP.png">
        <title>Game</title>
        <!-- Fonts Defualt Nunito-->
        <link href="https://unpkg.com/nes.css@2.2.1/css/nes.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fontlibrary.org/face/press-start-2p" type="text/css"/>
	
        <!-- Styles -->
	<style>
	canvas {
    		border:1px solid #32CD32;
    		background-color: #000000;
	}
        html, body {
                background-color: #000000;
                color: #32CD32;
                font-weight: 100;
                height: 100vh;
                margin-top: 20;
        }
        .full-height {
                height: 100vh;
        }
        .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
        }
	.position-ref {
                position: relative;
        }
	.code {
                border-right: 2px solid;
                font-size: 26px;
                padding: 0 15px 0 15px;
                text-align: center;
	}
        .message {
                font-size: 18px;
                text-align: center;
        }
	.UPtext {
		font-size: 20px;
		text-align:left;
	}
	.Rtext {
		font-size: 16px;
		text-align:right;
	}
	.Dtext{
		font-size:16px;
		text-align:bottom;
	}
	.find{
		justify-content:center;
	}
	.button {
	  display: inline-block;
	  border-radius: 4px;
	  background-color: #32CD32;
	  border: none;
	  color: #000000;
	  text-align: center;
	  font-size: 14px;
	  padding: 10px;
	  width: 200px;
	  transition: all 0.5s;
	  cursor: pointer;
	  margin: 5px;
	}
	.up{
		background-color: #0f0f0f;
	}
        </style>
    	</head>
