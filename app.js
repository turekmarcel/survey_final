const setStep = step => {
	document.querySelectorAll(".step-content").forEach(element => element.style.display = "none");
	document.querySelector("[data-step='" + step + "']").style.display = "block";
	console.log("dziala")
};
document.querySelectorAll("[data-set-step]").forEach(element => {
	element.onclick = event => {
		setStep(parseInt(element.dataset.setStep));
	};
});