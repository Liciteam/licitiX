	

document.onclick = function(e){
	var settings = document.getElementById('user-nav-id');
    var target = (e && e.target) || (event && event.srcElement);
    var display = 'none';

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