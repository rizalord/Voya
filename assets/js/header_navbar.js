const profile = document.querySelector(".user");
const profileNav = document.querySelector(".userNav");
const body = document.querySelector("body");
let opened = false;
let li = document.querySelectorAll(".content li");
let html = document.querySelector('html');

profile.addEventListener("click", function () {
	if (opened == false) {
		profileNav.style.display = "block";
        opened = true;
	} else {

		profileNav.style.display = "none";
		opened = false;
	}

});

body.addEventListener("click" , function(){
	profileNav.style.display = "none";
	opened = false;
});
profileNav.addEventListener("click" , function(ev){
	ev.stopPropagation();
});
profile.addEventListener("click", function (ev) {
	ev.stopPropagation();
});



// list menu

/*
	List menu ini nantinya untuk konfigurasi jika terjadi event mouseover 
	maksudnya , ketika suati list di hover/mouse over maka warna font nya akan berubah
	dan ketika mouse leave , warna font nya akan kembali seperti semula
*/
let left = document.querySelectorAll(".left");
let right = document.querySelectorAll(".right");

for (let index = 0; index < left.length; index++) {
	li[index].addEventListener("mouseover", function () {
		left[index].style.color = 'white';
		right[index].style.color = 'white';
	});
	li[index].addEventListener("mouseleave", function () {
		left[index].style.color = 'black';
		right[index].style.color = 'black';
	});
}


// search icon click when responsive mode
let btnSearch = document.querySelector('.btnSearch');
let searchBar = document.querySelector('.searchBar');
let inputField = document.querySelector('.searchBar form input.searchField');
let opening = false;
btnSearch.addEventListener('click', function(){
	searchBar.style.display = 'block';
	opening = true;
});
body.addEventListener('click' , function(){
	var mq = window.matchMedia("(max-width: 612px)");
	if (mq.matches) {
		searchBar.style.display = 'none';
	} else {
		searchBar.style.display = 'block';
	}
});
btnSearch.addEventListener('click', function (ev) {
	ev.stopPropagation();
	searchBar.style.display = 'block';
	opening = true;
});
inputField.addEventListener('click', function (ev) {
	ev.stopPropagation();
});

window.onresize = function (event) {
	var mq = window.matchMedia("(min-width: 613px)");
	if (mq.matches) {
		searchBar.style.display = 'block';
	}else{
		searchBar.style.display = 'none';
	}
};

// modal

let sended = document.querySelector('.sended');
let canceled = document.querySelector('.canceled');
let success = document.querySelector('p.text-success');
let fm = document.querySelector('.feedbackModal');
// sended.addEventListener('click',function(){
// 	success.classList.toggle('d-none');
// 	setTimeout(function(){
// 		document.href.location = ''
// 	},2000);
// });
let clickerr = 0;
function send(eve){
	if(clickerr == 0){
		success.classList.toggle('d-none');
		clickerr++;
		setTimeout(function () {
			document.location.href = eve;
		}, 2000);
	}
}

function displayerO(){
	fm.style.display = 'block';
}

canceled.addEventListener('click' , function(){
	fm.style.display = 'none';
});

