<?php
	include "./header.php";
?>
<body onload="startGame()">
<script>

var myGamePiece;
var myObstacles = [];
var myScore;

function startGame() {
	myGamePiece = new component(30, 30, "lime", 10, 120);
	myGamePiece.gravity = 0.05;
	myScore = new component("30px", "Consolas", "black", 280, 40, "text");
	myGameArea.start();
}

var myGameArea = {
    	canvas : document.createElement("canvas"),
	start : function() {
		this.canvas.width = 480;
		this.canvas.height = 270;
		this.context = this.canvas.getContext("2d");
		document.body.insertBefore(this.canvas, document.body.childNodes[0]);
		this.frameNo = 0;
		this.interval = setInterval(updateGameArea, 20);
	},
	clear : function() {
	this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
	}
}

function component(width, height, color, x, y, type) {
    this.type = type;
    this.score = 0;
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;    
    this.x = x;
    this.y = y;
    this.gravity = 0;
    this.gravitySpeed = 0;
    this.update = function() {
        ctx = myGameArea.context;
        if (this.type == "text") {
            ctx.font = this.width + " " + this.height;
            ctx.fillStyle = color;
            ctx.fillText(this.text, this.x, this.y);
        } else {
            ctx.fillStyle = color;
            ctx.fillRect(this.x, this.y, this.width, this.height);
        }
    }
    this.newPos = function() {
        this.gravitySpeed += this.gravity;
        this.x += this.speedX;
        this.y += this.speedY + this.gravitySpeed;
        this.hitBottom();
    }
    this.hitBottom = function() {
        var rockbottom = myGameArea.canvas.height - this.height;
        if (this.y > rockbottom) {
            this.y = rockbottom;
            this.gravitySpeed = 0;
        }
    }
    this.crashWith = function(otherobj) {
        var myleft = this.x;
        var myright = this.x + (this.width);
        var mytop = this.y;
        var mybottom = this.y + (this.height);
        var otherleft = otherobj.x;
        var otherright = otherobj.x + (otherobj.width);
        var othertop = otherobj.y;
        var otherbottom = otherobj.y + (otherobj.height);
        var crash = true;
        if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
        	crash = false;
	}
        return crash;
    }
}

function updateGameArea() {
    var x, height, gap, minHeight, maxHeight, minGap, maxGap;
    for (i = 0; i < myObstacles.length; i += 1) {
        if (myGamePiece.crashWith(myObstacles[i])||myGamePiece.y<=0) {
            return;
        } 
    }
    myGameArea.clear();
    myGameArea.frameNo += 1;
    if (myGameArea.frameNo == 1 || everyinterval(150)) {
        x = myGameArea.canvas.width;
        minHeight = 20;
        maxHeight = 200;
        height = Math.floor(Math.random()*(maxHeight-minHeight+1)+minHeight);
        minGap = 50;
        maxGap = 200;
        gap = Math.floor(Math.random()*(maxGap-minGap+1)+minGap);
        myObstacles.push(new component(20, height, "green", x, 0));
        myObstacles.push(new component(20, x - height - gap, "green", x, height + gap));
    }
    for (i = 0; i < myObstacles.length; i += 1) {
        myObstacles[i].x += -1;
        myObstacles[i].update();
    }
    	myScore.text="SCORE: " + myGameArea.frameNo;
    	myScore.text="SCORE: " + myGameArea.frameNo;
        document.getElementById("score").innerHTML = myGameArea.frameNo;
        document.getElementById("cSC").value = myGameArea.frameNo;
	setCookie("score",myGameArea.frameNo,0.5);
	//myScore.update();
	myGamePiece.newPos();
	myGamePiece.update();
}

function everyinterval(n) {
	    if ((myGameArea.frameNo / n) % 1 == 0) {return true;}
	        return false;
}

function accelerate(n) {
	    myGamePiece.gravity = n*4;
}
function setCookie(cname, cvalue, exdays) {
	  var d = new Date();
	    d.setTime(d.getTime() + (exdays*24*60*60*1000));
	    var expires = "expires="+ d.toUTCString();
	      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

window.addEventListener('keydown', function(e) {
	    if (e.keyCode == 32) {
		        	accelerate(-0.2);
				    }
});

window.addEventListener('keyup', function(e) {
	    if (e.keyCode == 32) {
		        	accelerate(0.05);
				    }
});

window.addEventListener('keydown',function(e){
	if(e.keyCode == 82){
		window.location.href="https://t22.tfcis.org/CTF/flappyBlock/";
	}
});
</script>
<br>
FlappyBlock made by ニオ<br>
How To Play：Press Space or JUMP To Flap<br>
<button class="button" onpointerdown="accelerate(-0.2)" onpointerup="accelerate(0.05)">JUMP</button>
<button class="button">SCORE：<span id="score"></span></button>
<button class="button" id="restart">RESTART</button>
<script type="text/javascript">
	var RestartUrl = "https://t22.tfcis.org/CTF/flappyBlock/";
	var elem = document.getElementById("restart")
	elem.addEventListener("click",e=>{
		window.location.href = RestartUrl;
	})
</script>
<form><input type="hidden" name="cookieSC" id="cSC" value="0"></form>
<?php
	if ($_COOKIE["score"] >= "100000"){
		echo "Flag for WINNER:<br>t22CTF{too_eZ}";
	}
	else{
		echo "When you get 100000 points, I'll give you the prize！";
	}
?>
</body>
</html>
