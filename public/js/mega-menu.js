
	 
	
$(function () {
 $('.toggle-menu').click(function(){
	$('.exo-menu').toggleClass('display');
	
 });
 
});



function changeImage(imgName,title,description)
  {
     image = document.getElementById('img-responsive');
     image.src = "https://www.canvaschamp.com/skin/frontend/default/cptheme1/images/" + imgName;
    
    document.getElementById('titleDiv').innerHTML  = title;
    document.getElementById('descriptionDiv').innerHTML  = description;
    
  }

function menu_mouse_hover() {
        var element = document.getElementsByTagName('body')[0];
        element.classList.add("overlay_active");
  }

function menu_mouse_out() {
        var element = document.getElementsByTagName('body')[0];
        element.classList.remove("overlay_active");
  }

