	

document.onclick = function(e){

	var target = (e && e.target) || (event && event.srcElement);
	var display = 'none';
	var settings = document.getElementById('user-nav-id');
	while (target.parentNode) {

		if (target == settings) {
			if (document.getElementById('sub-nav-user-navigation').style.display == 'block')
				display ='none';
			else 
				display = 'block'
			break;
		}
		target = target.parentNode;
	}

	document.getElementById('sub-nav-user-navigation').style.display = display;		

}

function sub_nav_toggle(id) {
	//document.getElementById(id).classList.toggle("show");
	//return false;
}

function activate_register_form(class_id, activate, tab_id, second_tab_id) {
	if (document.getElementById(tab_id).style.backgroundColor != "#FFF")
	{
		document.getElementById(tab_id).style.borderBottomColor = "#FFF";
		document.getElementById(tab_id).style.backgroundColor = "#FFF";
		document.getElementById(second_tab_id).style.borderBottomColor = "#E1E3DF";
		document.getElementById(second_tab_id).style.backgroundColor = "#FAF9F5";
		var str = "header .forms .";
		str = str.concat(class_id)
		var query = document.querySelectorAll(str);
		if (activate == true) {
			document.getElementById("signin-button").setAttribute("value", "Register");
			document.getElementById("register-login-form").setAttribute("action", "register.php");

			for (i=0; i<query.length; i++)
			{
				//document.write("bla");
				if (query[i].classList.contains("clear"))
					query[i].classList.remove("clear");
			}
		} else {
			document.getElementById("signin-button").setAttribute("value", "Sign in");
			document.getElementById("register-login-form").setAttribute("action", "login.php");

			for (i=0; i<query.length; i++)
			{
				if (!query[i].classList.contains("clear"))
					query[i].classList.add("clear");
			}
		}
		
	}

	
	//document.querySelectorAll('.class1.class2');
}

function show_login_register_form(type) {
	document.getElementById('inline-overlay').style.display = "block";
	document.getElementById('exposeMask').style.display = "block";
	if(type == "login") {
		activate_register_form('register-inputs', false, 'sign-in-tab', 'register-tab');
	} else {
		activate_register_form('register-inputs', true, 'register-tab', 'sign-in-tab');
	}
	
}
function hide_login_register_form() {
	document.getElementById('inline-overlay').style.display = "none";
	document.getElementById('exposeMask').style.display = "none";
}