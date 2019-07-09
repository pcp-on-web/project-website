function mobile() {

	if (isNaN(document.body)) {
		var width = isNaN(window.innerWidth) ? window.clientWidth : window.innerWidth;
		var height = isNaN(window.innerHeight) ? window.clientHeight : window.innerHeight;
		if (width<height) {
			document.body.classList.add("mobile");
		}
		else {
			document.body.classList.remove("mobile");
		}
	}

}
document.addEventListener("DOMContentLoaded", mobile);
window.addEventListener('resize', mobile);
window.addEventListener('orientationchange', mobile);
