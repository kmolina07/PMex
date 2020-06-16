// JavaScript Document
function dropFunction(){ 		
	document.getElementById("projectSites").classList.toggle("show");
}

window.onclick = function(event) {
	if (!event.target.matches('.pSites')){
		var dropdowns = document.getElementByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')){
				open.Dropdown.classList.remove('show');
			}
		}
	}
}