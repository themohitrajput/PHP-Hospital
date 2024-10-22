	let menuicn = document.querySelector(".menuicn");
		let nav = document.querySelector(".navcontainer");

		menuicn.addEventListener("click", () => {
			nav.classList.toggle("navclose");
		})
			/* When the user clicks on the button, 
			toggle between hiding and showing the dropdown content */
			function myFunction() {
				document.getElementById("myDropdown").classList.toggle("show");
			}

			// Close the dropdown if the user clicks outside of it
			window.onclick = function (event) {
				if (!event.target.matches('.dropbtn')) {
					var dropdowns = document.getElementsByClassName("dropdown-content");
					var i;
					for (i = 0; i < dropdowns.length; i++) {
						var openDropdown = dropdowns[i];
						if (openDropdown.classList.contains('show')) {
							openDropdown.classList.remove('show');
						}
					}
				}
			}

			// On click Function
			function loadPage(url) {
				const iframe = document.getElementById("iframe-content");
				iframe.src = url;
			}
				
			function triggerBtnClick() {
  				document.getElementById("btn").click(); 
			} 
			
		// Add active class to the current button (highlight it)
var header = document.getElementById("nav");
var btns = header.getElementsByClassName("nav-option");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}