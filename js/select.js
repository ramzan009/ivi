let wargers = document.querySelector('.wargers');
let noyters = document.querySelector('.noyters');
let clause_toogle = document.querySelector('.clause_toogle');

wargers.addEventListener("click", function (e) {
	noyters.classList.toggle("clause_toogle");
})