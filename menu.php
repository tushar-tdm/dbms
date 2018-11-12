<?php
	session_start();
	include_once 'db.php';

	if($_SESSION['uid']){
		if($_SESSION['cid']){
			$user = $_SESSION['uid'];
			$cid = $_SESSION['cid'];

			$sql = "SELECT * FROM `users` WHERE `user_id`='$user'";
			$result = mysqli_query($conn,$sql);
			/* $row = $result->fetch_all(MYSQLI_ASSOC); */
			$row = mysqli_fetch_assoc($result);

			include_once './header_login.php';
		}
	}
	else{
		header("Location: login/login.html?Login_To_Continue");
		exit();
	}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Jewel a Jewellery Category Bootstrap responsive Web Template | About :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Jewel a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script src="http://yui.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>
        <script>
                // Create a new YUI instance and populate it with the required modules.
                YUI().use('calendar', function (Y) {
                    // Calendar is available and ready for use. Add implementation
                    // code here.
                });
        </script>
        <style>
            .yui3-button {
            margin:10px 0px 10px 0px;
            color: #fff;
            background-color: #3476b7;
			}
			
			#bookbutton{
				margin-left:30%;
				background-color:#66FF00 ;
				border-color: transparent;
				color:white;
				font-weight:bold;
				width:160px;
				height:66px;
				border-radius: 10px;
			}

		</style>
	<script>

		addEventListener("load", function(){
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">

	<style>
/* this is not the original style and the function also has certain modifications */
	body {
  font: 16px Arial; 
}
.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}
input {
  border: 1px solid transparent;
  background-color: white;
  padding: 10px;
  font-size: 16px;
}
input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}
input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
} 
.autocomplete-items {
  position: absolute;
  border: 1px solid red;
  border-bottom: none;
  border-top: none;
  z-index: 99;

  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color:#fff; 
  border-bottom: 1px solid #d4d4d4; 
}
.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9;
  color: red;
}
.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}

.close-item{
	float:right;
	cursor:pointer;
	background-color:red;
	font-weight:bold;
	color: white;
	border-color: transparent;
	width:35px;
	height:40px;
}

.add{
	background-color:#338DFF;
	font-weight:bold;
	color: white;
	border-color: transparent;
	width:55px;
	height:40px;
}

.cost{
	font-weight:bold;
	margin-left: 40%;
	margin-bottom: 20px;
	font-family: 'Quicksand', sans-serif;
	color: orange;
	font-size: 35px;
}

	</style>
</head>
<body>
<?php

?>

<!-- make three buttons called hindu muslim and christian -->
<br>
<div class="reli" >
	<button class="religion_food" onclick="fillreligion(0)"> Hindu </button>
	<button class="religion_food" onclick="fillreligion(1)"> Muslim </button>
	<button class="religion_food" onclick="fillreligion(2)"> Christian </button>
	<button class="religion_food" onclick="fillreligion(3)"> My Menu!! </button>
</div>

<!-- make checkboxes for veg and non-veg  -->
<!-- <form action="#" method="POST" id="colorform" style="margin-left:20px;">
    <input type="checkbox" name="color" value="Veg" onclick="food_cat(0)" class="food-type">  <span class="fcategory"> Veg</span> <br>
    <input type="checkbox" name="color" value="NVeg" onclick="food_cat(1)" class="food-type"> <span class="fcategory"> Non-Veg</span> <br>
</form> -->
<br><br>
<form autocomplete="off" action="#">
	<div class="container autocomplete">
		<div class="row">
			<div class="col-lg-4">
				<button class="add" onclick="add_item(0)" style="float: right;cursor:pointer;" >Add </button>
				<div class="menu" style="overflow: hidden; padding-right: .5em;">
					<input id="menu_starter" type="text" placeholder="Starters" />
				</div>​
			</div>
			<div class="col-lg-4">
				<button class="add" onclick="add_item(1)" style="float: right;cursor:pointer;" >Add </button>
				<div class="menu" style="overflow: hidden; padding-right: .5em;">
					<input id="menu_dessert" type="text" placeholder="Desserts" />
				</div>​
			</div>
			<div class="col-lg-4">
				<button class="add" onclick="add_item(2)" style="float: right;cursor:pointer;" >Add </button>
				<div class="menu" style="overflow: hidden; padding-right: .5em;">
					<input id="menu_mcourse" type="text" placeholder="Main Course" />
				</div>​
			</div>			
			
		</div>
	</div>
</form>
<p> press '<strong style="color:red;font-weight:bold;">.</strong>' to see all the available items in the list</p>

<br><br><br>
<div class="container">
	<div class="row"> 
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="starter_div">
			<h3 style="margin-bottom:30px;">STARTERS</h3>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="dessert_div">
		<h3 style="margin-bottom:30px;">DESSERTS</h3>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="mcourse_div">
		<h3 style="margin-bottom:30px;">MAIN COURSE</h3>			
		</div>
	</div>
</div>

<br><br>
<br>
<hr>
	<span class="cost">RATE: <span id="cost"> </span>/-<sub>(per plate)</sub></span>
	<br><br>

<button id="book_btn" class="shaata" onclick="booking()"> BOOK NOW </button><br><br>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<button id="start" class="dateset_btn" style="display:none;" onclick="setstart()"> SET BOOKING DATE </button>
				</div>
			</div>
		</div>
		<!-- <input type="text" name="sdate" value="" disabled style="display:none;">
		<input type="text" name="ldate" value="" disabled style="display:none;"> -->
		<br><br><br>
		<p id="rate"></p> 

	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div id="democal" class="yui3-skin-sam yui3-g" style="display:none;"> <!-- You need this skin class -->
					<div id="leftcolumn" class="yui3-u">
					<!-- Container for the calendar -->
						<div id="mycalendar"></div>
					</div>
					<div id="rightcolumn" class="yui3-u">
						<div id="links" style="padding-left:20px;">
							<!-- The buttons are created simply by assigning the correct CSS class -->
							<br>
							<span id="select-date" style="display:none;">Selected date:</span> <span id="selecteddate"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<form action="" id="">
					<input class="bookid input__field input__field--chisato" type="text" placeholder="<?php echo $row['fname']; ?>" disabled style="display:none;margin-bottom:10px;" name="name"><br>
					<input class="bookid input__field input__field--chisato" type="number" value="" placeholder="Plates" max="700" min="50" style="display:none;margin-bottom:10px;" name="plates"><br>
					<input class="bookid input__field input__field--chisato" type="text" placeholder="<?php echo $row['email']; ?>" disabled style="display:none;margin-bottom:10px;" name="email" ><br>
					<input class="bookid input__field input__field--chisato" type="text" placeholder="<?php echo $row['contact']; ?>" disabled style="display:none;margin-bottom:10px;" name="phone" ><br>
					<input class="bookid input__field input__field--chisato" type="date" value="" disabled id="sidate" style="display:none;margin-bottom:10px;" name="sdate" placeholder="STARTING DATE">
					<button class="bookid" id="bookbutton" type="button" onclick="book()" style="display:none;">BOOK NOW!</button>
				</form>
			</div>
		</div>
	</div>
<br><br><br>
	<hr>
<section class="banner-bottom-w3ls-agileinfo">
			<div class="container">
					<h3 class="tittle text-center">Contact Us</h3>
		<div class="row inner-sec-wthree-agileits">
			<div class="col-md-8 mail_form">
					<form action="#" method="post">
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="Name" type="text" id="input-13" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-13">
								<span class="input__label-content input__label-content--chisato" data-content="Name">Name</span>
							</label>
							</span>
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="Email" type="email" id="input-14" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-14">
								<span class="input__label-content input__label-content--chisato" data-content="Email">Email</span>
							</label>
							</span>
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="Subject" type="text" id="input-15" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-15">
								<span class="input__label-content input__label-content--chisato" data-content="Subject">Subject</span>
							</label>
							</span>
							<textarea name="Message" placeholder="Your comment here..." required=""></textarea>
							<input type="submit" value="Submit">
						</form>
				
			</div>
			<div class="col-md-4 contact_grids_info">
				<div class="contact_grid">
					<div class="contact_grid_right">
						<h4>Branch 1</h4>
						<p>435 City hall,</p>
						<p>NewYork City SD092.</p>
					</div>
				</div>
				<div class="contact_grid">
					<div class="contact_grid_right">
						<h4>Branch 2</h4>
						<p>8088 Jasmine hall,</p>
						<p>NewYork City SD092.</p>
					</div>
				</div>
				<div class="contact_grid" data-aos="flip-up">

					<div class="contact_grid_right">
						<h4>OFFICE 3</h4>
						<p>436 Honey hall,</p>
						<p>NewYork City SD092.</p>
					</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>

	</div>
	</section>

	

	
<br><br><br>

<input type="text" name="user" style="display:none" value="<?php echo "";  ?>">
<?php
    include_once 'footer_book.php'
?>

</body class="yui3-skin-sam">
<script>
	var type = [0,0,1]; //1 is catering id
	var starter = new Array();
	var desserts = new Array();
	var mcourse = new Array();

	var hs = new Array(),hd = new Array(), hm = new Array(), hsr = new Array(),hdr = new Array(), hmr = new Array() ;
	var ms = new Array(),md = new Array(), mm = new Array(), msr = new Array(),mdr = new Array(), mmr = new Array(); 
	var cs = new Array(),cd = new Array(), cm = new Array(), csr = new Array(),cdr = new Array(), cmr = new Array();

	var srate = new Array();
	var drate = new Array();
	var mrate = new Array();

	window.onload = function(){
		remove_rel();
		var count=0; var cost = 0;
		var t = JSON.stringify(type);
		var x = new XMLHttpRequest();

		x.onreadystatechange  = function(){
			if(this.readyState == 4 && this.status == 200){
				var respObj = JSON.parse(this.responseText);
			}

			for(ob in respObj){ 
				count++;
			}

			//push all the results in starter array
			for(i=0;i<count;++i){
				 if(respObj[i]['starters'] == 1){
					starter.push(respObj[i]['food_name']);
					srate.push(respObj[i]['price_per_plate']);

					if(respObj[i]['hindu'] == 1){
						hs.push(respObj[i]['food_name']);
						hsr.push(respObj[i]['price_per_plate']);
					}
					if(respObj[i]['muslim'] == 1){
						ms.push(respObj[i]['food_name']);
						msr.push(respObj[i]['price_per_plate']);
					}
					if(respObj[i]['christ'] == 1){
						cs.push(respObj[i]['food_name']);
						csr.push(respObj[i]['price_per_plate']);						
					}
				 }
				 if(respObj[i]['desserts'] == 1){
					desserts.push(respObj[i]['food_name']);
					drate.push(respObj[i]['price_per_plate']);

					if(respObj[i]['hindu'] == 1){
						hd.push(respObj[i]['food_name']);
						hdr.push(respObj[i]['price_per_plate']);
					}
					if(respObj[i]['muslim'] == 1){
						md.push(respObj[i]['food_name']);
						mdr.push(respObj[i]['price_per_plate']);
					}
					if(respObj[i]['christ'] == 1){
						cd.push(respObj[i]['food_name']);
						cdr.push(respObj[i]['price_per_plate']);						
					}
				 }
				if(respObj[i]['main_course'] == 1){
					mcourse.push(respObj[i]['food_name']); 
					mrate.push(respObj[i]['price_per_plate']);

					if(respObj[i]['hindu'] == 1){
						hm.push(respObj[i]['food_name']);
						hmr.push(respObj[i]['price_per_plate']);
					}
					if(respObj[i]['muslim'] == 1){
						mm.push(respObj[i]['food_name']);
						mmr.push(respObj[i]['price_per_plate']);
					}
					if(respObj[i]['christ'] == 1){
						cm.push(respObj[i]['food_name']);
						cmr.push(respObj[i]['price_per_plate']);						
					}
				}
			} 
		};
		x.open("GET","retrive.php?x="+t);
		x.send();
	}

	function food_cat(c){
		type[c] = (type[c]+1)%2;
		var count=0;
		
		var t = JSON.stringify(type);

		var x = new XMLHttpRequest();
		x.onreadystatechange  = function(){
			if(this.readyState == 4 && this.status == 200){
				var respObj = JSON.parse(this.responseText);
			}

			for(ob in respObj){ 
				count++;
			}
			console.log(count);

			//remove all the current elements in the array
			starter = []; desserts = []; mcourse = [];

			for(i=0;i<count;++i){
				 if(respObj[i]['starter'] == 1) 
					starter.push(respObj[i]['food_name']);
				else if(respObj[i]['dessert'] == 1)
					desserts.push(respObj[i]['food_name']);
				else
					mcourse.push(respObj[i]['food_name']); 
			}
				console.log(starter.length);
		};

		x.open("GET","retrive.php?x="+t);
		x.send();
	}

// ------------------------------------------------------------------------------------------------
	function autocomplete(inp,arr,y){
		var currentFocus;
		//when the user gives an input
		inp.addEventListener("input",function(e){
			//now we have to refresh the array

			var a,b,i,val = this.value;
			closeAllLists();
			if(!val){return false;}
			currentFocus = -1;
			
			//to contain all the values
			a = document.createElement("DIV");
			a.setAttribute("id",this.id+"autocomplete-list");
			a.setAttribute("class","autocomplete-items");

			//append this as a child to autocomplete conatiner 
			this.parentNode.appendChild(a);

			//for each item in the array 
			for(i=0;i<arr.length;++i)
			{
				if(val == '.'){
					b = document.createElement("DIV");
					b.innerHTML = "<strong>"+arr[i].substr(0,val.length)+"<strong>";
					b.innerHTML += arr[i].substr(val.length);
					//we are storing these names in an input field
					if(y == 0)
						b.innerHTML = "<input class='starter-item' type='text' value='" + arr[i] + "'>";
					else if(y == 1)
						b.innerHTML = "<input class='dessert-item' type='text' value='" + arr[i] + "'>";
					else
						b.innerHTML = "<input class='mcourse-item' type='text' value='" + arr[i] + "'>";

					b.addEventListener("click",function(e){
						inp.value = this.getElementsByTagName("input")[0].value;
						closeAllLists();
					});
					//this wll add all the similar names as suggestions to the input field
					a.appendChild(b);
				}

				else if(arr[i].substr(0,val.length).toUpperCase() == val.toUpperCase()){
					b = document.createElement("DIV");
					b.innerHTML = "<strong style='color:black;'>"+arr[i].substr(0,val.length)+"<strong>";
					b.innerHTML += arr[i].substr(val.length);
					//we are storing these names in an input field
					if(y == 0)
						b.innerHTML = "<input class='starter-item' type='text' value='" + arr[i] + "'>";
					else if(y == 1)
						b.innerHTML = "<input class='dessert-item' type='text' value='" + arr[i] + "'>";
					else
						b.innerHTML = "<input class='mcourse-item' type='text' value='" + arr[i] + "'>";

					b.addEventListener("click",function(e){
						inp.value = this.getElementsByTagName("input")[0].value;
						closeAllLists();
					});
					//this wll add all the similar names as suggestions to the input field
					a.appendChild(b);
				}
			}
		});

		inp.addEventListener("keydown",function(e){
			var x = document.getElementById(this.id+"autocomplete-list");
			if(x){
				//here it is not document, but instead its x which means that we choose the div tags inside the element 'x'
				x = x.getElementsByTagName("div");	
			}
			//defines what must happen when we use arrow keys
			if(e.keyCode == 40){ //arrow down key
				currentFocus++;
				addActive(x);
			}
			else if(e.keyCode == 38){ //up
				currentFocus--;
				addActive(x);
			}
			else if(e.keyCode == 13){ //enter
				e.preventDefault();
				if(currentFocus > -1){
					if(x) x[currentFocus].click();	
				}
			}
		});

		function addActive(x){
			if(!x) return false;
			removeActive(x);
			//if the cucrrentFocus value exceeds the nuber of div tags inside the x element
			if (currentFocus >= x.length) currentFocus = 0;
			//if we press up arrow key in the beginning then the focus must be on the last element
    		if (currentFocus < 0) currentFocus = (x.length - 1);

			x[currentFocus].classList.add("autocomplete-active");
		}

		function removeActive(x){
			for (var i = 0; i < x.length; i++) {
      			x[i].classList.remove("autocomplete-active");
    		}
		}

		function closeAllLists(elmnt){
			var x = document.getElementsByClassName("autocomplete-items");
			for(i=0;i<x.length;++i){
				if(elmnt != x[i] && elmnt != inp){
					x[i].parentNode.removeChild(x[i]);
				}
			}
		}

		document.addEventListener("click",function(e){
			closeAllLists(e.target);
		});
	}
	
	autocomplete(document.getElementById("menu_starter"),starter,0);
	autocomplete(document.getElementById("menu_dessert"),desserts,1);
	autocomplete(document.getElementById("menu_mcourse"),mcourse,2); 

	function close(z,y,v){
		if(y==0){
			var zz = starter.indexOf(v);
			cost = cost - parseInt(srate[zz],10);
			var rate = document.getElementById("cost").innerHTML = cost;
			var prnt = document.getElementById("starter_div");
		}
		else if(y==1){
			var zz = desserts.indexOf(v);
			cost = cost - parseInt(drate[zz],10);
			var rate = document.getElementById("cost").innerHTML = cost;
			var prnt = document.getElementById("dessert_div");
		}
		else{
			var zz = mcourse.indexOf(v);
			cost = cost - parseInt(mrate[zz],10);
			var rate = document.getElementById("cost").innerHTML = cost;
			var prnt = document.getElementById("mcourse_div");
		}

		var x = document.getElementById(z);
		prnt.removeChild(x);

	}

	var sid =0,did=0,cid=0;
	var s=[],de=[],m=[];

	function add_item(choice){
		var a = document.createElement("INPUT");
		var b = document.createElement("DIV");
		var c = document.createElement("SPAN");
		var d = document.createElement("BUTTON");
		var e = document.createElement("SPAN");

		c.classList.add("added-item");
		d.classList.add("close-item");
		b.classList.add("menu");
		/* d.addAttribute("onclick"); */

		a.disabled = "true";
		a.type="text";
		
		e.innerHTML = "&times";
		d.appendChild(e);
		d.style.fontWeight = "bold";
		/* d.onclick = function(){return close(c.id)} */
		
		b.style.overflow = "hidden";
		b.style.paddingRight = ".5em";

		if(choice == 0){
			sid = sid+1;
			var prnt1 = document.getElementById("starter_div");
			var v = document.getElementById("menu_starter").value;

			s.push(v);
			//check if the given value is valid or not
			var ind = starter.indexOf(v);
			if(v == ''){
				alert("please choose a starter!!");
				return;
			}
			if(ind == -1){
				alert("Please choose a valid starter item");
				return;
			}

			//for the rates ---------------------------------
			var zz = starter.indexOf(v);
			cost = cost+ parseInt(srate[zz],10);
			console.log(cost);
			var rate = document.getElementById("cost").innerHTML = cost; 
			//---------------------------------------------

			c.classList.add("sss");
			a.classList.add("starter-item");
			a.value = v;
			var id = "starter"+sid.toString();
			c.id = id;
			d.onclick = Function("close('"+id+"',0,'"+v+"')");
			b.appendChild(a);
			c.appendChild(d);
			c.appendChild(b);
			prnt1.appendChild(c);
		}
		else if(choice ==1){
			did = did+1;
			var prnt2 = document.getElementById("dessert_div");
			var v = document.getElementById("menu_dessert").value;
			de.push(v);
			a.classList.add("dessert-item");
			a.value = v;

			var ind = desserts.indexOf(v);
			if(v == ''){
				alert("please choose a Dessert!!");
				return;
			}
			if(ind == -1){
				alert("Please choose a valid Dessert item");
				return;
			}
			
			//for the rates ---------------------------------
			var zz = desserts.indexOf(v);
			
			cost = parseInt(cost,10)+ parseInt(drate[zz],10);
			var rate = document.getElementById("cost").innerHTML = cost; 
			//---------------------------------------------

			var id = "dessert"+did.toString();
			c.id = id;
			c.classList.add("ddd");
			d.onclick = Function("close('"+id+"',1,'"+v+"')");
			b.appendChild(a);
			c.appendChild(d);
			c.appendChild(b);
			prnt2.appendChild(c);
		}else if(choice ==2){
			cid = cid+1;
			var prnt3 = document.getElementById("mcourse_div");
			var v = document.getElementById("menu_mcourse").value;
			m.push(v);
			
			a.classList.add("mcourse-item");
			a.value = v;

			var ind = mcourse.indexOf(v);
			if(v == ''){
				alert("please choose a Main Course!!");
				return;
			}
			if(ind == -1){
				alert("Please choose a valid Main Course Item");
				return;
			}
			//for the rates ---------------------------------
			var zz = mcourse.indexOf(v);
			cost = parseInt(cost,10)+ parseInt(mrate[zz],10);
			var rate = document.getElementById("cost").innerHTML = cost; 
			//---------------------------------------------
			var id = "course"+cid.toString();
			c.id = id;
			d.onclick = Function("close('"+id+"',2,'"+v+"')");
			c.classList.add("mmm");
			b.appendChild(a);
			c.appendChild(d);
			c.appendChild(b);
			prnt3.appendChild(c);
		}
	}

	  function fillreligion(r){
			if(r == 3){
				//remove all child nodes.
				remove_rel();
			}
			else{
				//find the lengths of each array
				var hsl = hs.length, hdl = hd.length, hml= hm.length;
				var msl = ms.length, mdl = md.length, mml = mm.length;
				var csl = cs.length, cdl = cd.length, cml=cm.length;

				if(r==0){
					remove_rel();
					for(i=0;i<hsl;++i){
						document.getElementById("menu_starter").value = hs[i];
						add_item(0);
					}
					for(i=0;i<hdl;++i){
						document.getElementById("menu_dessert").value = hd[i];
						add_item(1);
					}
					for(i=0;i<hml;++i){
						document.getElementById("menu_mcourse").value = hm[i];
						add_item(2);
					}
				}
				else if(r==1){
					remove_rel();
					for(i=0;i<msl;++i){
						document.getElementById("menu_starter").value = ms[i];
						add_item(0);
					}
					for(i=0;i<mdl;++i){
						document.getElementById("menu_dessert").value = md[i];
						add_item(1);
					}
					for(i=0;i<mml;++i){
						document.getElementById("menu_mcourse").value = mm[i];
						add_item(2);
					}
				}
				else{
					remove_rel();
					for(i=0;i<csl;++i){
						document.getElementById("menu_starter").value = cs[i];
						add_item(0);
					}
					for(i=0;i<cdl;++i){
						document.getElementById("menu_dessert").value = cd[i];
						add_item(1);
					}
					for(i=0;i<cml;++i){
						document.getElementById("menu_mcourse").value = cm[i];
						add_item(2);
					}
				}
			}
	}  

	function remove_rel(){
		//for the rates ---------------------------------
			cost = 0;
			var rate = document.getElementById("cost").innerHTML = cost; 
			//---------------------------------------------
		//reset the id's of the foods back to zero
		sid = 0; did =0; cid = 0;
		var prnt1 = document.getElementById("starter_div");
				var cts = document.getElementById("starter_div").childElementCount;
				var prnt2 = document.getElementById("dessert_div");
				var ctd = document.getElementById("dessert_div").childElementCount;
				var prnt3 = document.getElementById("mcourse_div");
				var ctm = document.getElementById("mcourse_div").childElementCount;
				
				console.log(cts+" "+ctd+" "+ctm);

				for(i=0;i<cts-1;++i){
					// i dont know why i had to make it cts-1 and why not cts with '<' sign
					var cld = document.getElementsByClassName("sss")[0];
					cld.parentNode.removeChild(cld);
				}
				for(i=0;i<ctd-1;++i){
					var cld = document.getElementsByClassName("ddd")[0];
					//prnt2.removeChild(cld);
					cld.parentNode.removeChild(cld);
				}
				for(i=0;i<ctm-1;++i){
					var cld = document.getElementsByClassName("mmm")[0];
					cld.parentNode.removeChild(cld);	
				}
				return;
	}
</script>

<!--  calender HTML -->

<script>
		// for calender
		YUI().use('calendar', 'datatype-date', 'cssbutton',  function(Y) {

		// Create a new instance of calendar, placing it in
		// #mycalendar container, setting its width to 340px,
		// the flags for showing previous and next month's
		// dates in available empty cells to true, and setting
		// the date to today's date.
		var calendar = new Y.Calendar({
		contentBox: "#mycalendar",
		width:'340px',
		showPrevMonth: true,
		showNextMonth: true,
		date: new Date()}).render();

		// Get a reference to Y.DataType.Date
		var dtdate = Y.DataType.Date;

		// Listen to calendar's selectionChange event.
		calendar.on("selectionChange", function (ev) {

		// Get the date from the list of selected
		// dates returned with the event (since only
		// single selection is enabled by default,
		// we expect there to be only one date)
		var newDate = ev.newSelection[0];

		// Format the date and output it to a DOM
		// element.
		Y.one("#selecteddate").setHTML(dtdate.format(newDate));
		});


		// When the 'Show Previous Month' link is clicked,
		// modify the showPrevMonth property to show or hide
		// previous month's dates
		Y.one("#togglePrevMonth").on('click', function (ev) {
		ev.preventDefault();
		calendar.set('showPrevMonth', !(calendar.get("showPrevMonth")));
		});

		// When the 'Show Next Month' link is clicked,
		// modify the showNextMonth property to show or hide
		// next month's dates
		Y.one("#toggleNextMonth").on('click', function (ev) {
		ev.preventDefault();
		calendar.set('showNextMonth', !(calendar.get("showNextMonth")));
		});
		});
	</script>

		<script>
			function booking(){
				document.getElementById("democal").style.display = "block";				
				document.getElementById("start").style.display = "block";
/* 				document.getElementById("last").style.display = "block"; */
				document.getElementById("select-date").style.display = "block";
				for(i=0;i<6;++i){
					document.getElementsByClassName("bookid")[i].style.display = "block";
				}	
			}

			function setstart(){
				var x = document.getElementById("selecteddate").innerHTML;
				var z = document.getElementById("sidate");
				z.value = x;
			}

			function setlast(){
				var z = document.getElementById("lidate");
				var x = document.getElementById("selecteddate").innerHTML;
				z.value = x;
			}
		</script>

		<script>
			function book(){
			var sc = document.getElementById("starter_div").childElementCount; 
			var dc = document.getElementById("dessert_div").childElementCount;
			var mc = document.getElementById("mcourse_div").childElementCount;
			var o=[];

			var p = document.getElementsByClassName("bookid")[1].value; //plates
			var date = document.getElementsByClassName("bookid")[4].value; //date
			var cost = document.getElementById("cost").innerHTML;
			var rate = parseInt(cost,10) * parseInt(p,10);

			if(1){
				var pl = p.toString();
			o.push(pl);
			o.push(date);
			o.push(rate);
			
			var myObj = {
				"starter": s,
				"dessert":de,
				"main":m,
				"other": o
			};

			var obj = JSON.stringify(myObj);

			var x = new XMLHttpRequest();

			x.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					//var resp = JSON.parse(this.responseText);
					//console.log(resp); 
					alert("BOOKING SUCCESSFULL");
				}
			}; 

			x.open("GET","book_cat.php?b="+obj,true);
			x.send();
			}
			else
				return;			
		}

		</script>
</html>
