var id1 = document.getElementById("1");
var id2 = document.getElementById("2");
var id3 = document.getElementById("3");
var id4 = document.getElementById("4");
var id5 = document.getElementById("5");

var midVideo1 = document.querySelector('.midVideo video');
var leftVideo1 = document.querySelector('.leftVideo video');
var left2Video1 = document.querySelector('.left2Video video');
var rightVideo1 = document.querySelector('.rightVideo video');
var right2Video1 = document.querySelector('.right2Video video');

var videoArray = [
	midVideo1, left2Video1, leftVideo1, right2Video1, rightVideo1
];


var tombolRight = document.querySelector('.fa-chevron-right');
var tombolLeft = document.querySelector('.fa-chevron-left');

var array = [
	id1, id2, id3, id4, id5
];

var leftVideo = document.querySelector(".leftVideo");
var midVideo = document.querySelector(".midVideo");

let jumlahClick = 0;



tombolRight.addEventListener('click', function () {
	videoArray.forEach(element => {
		element.removeAttribute('controls');
		element.removeAttribute('autoplay');
		element.pause();
	});

	if (jumlahClick == 0) {



		id3.classList.toggle('midVideo');
		id3.classList.toggle('rightVideo');
		id5.classList.toggle('rightVideo');
		id5.classList.toggle('right2Video');
		id4.classList.toggle('right2Video');
		id4.classList.toggle('left2Video');
		id1.classList.toggle('left2Video');
		id1.classList.toggle('leftVideo');
		id2.classList.toggle('leftVideo');
		id2.classList.toggle('midVideo');




		jumlahClick++;
	} else if (jumlahClick == 1) {


		id3.classList.toggle('rightVideo');
		id3.classList.toggle('right2Video');
		id5.classList.toggle('right2Video');
		id5.classList.toggle('left2Video');
		id4.classList.toggle('left2Video');
		id4.classList.toggle('leftVideo');
		id1.classList.toggle('leftVideo');
		id1.classList.toggle('midVideo');
		id2.classList.toggle('midVideo');
		id2.classList.toggle('rightVideo');
		jumlahClick++;


	} else if (jumlahClick == 2) {

		id3.classList.toggle('right2Video');
		id3.classList.toggle('left2Video');
		id5.classList.toggle('left2Video');
		id5.classList.toggle('leftVideo');
		id4.classList.toggle('leftVideo');
		id4.classList.toggle('midVideo');
		id1.classList.toggle('midVideo');
		id1.classList.toggle('rightVideo');
		id2.classList.toggle('rightVideo');
		id2.classList.toggle('right2Video');
		jumlahClick++;


	} else if (jumlahClick == 3) {

		id3.classList.toggle('left2Video');
		id3.classList.toggle('leftVideo');
		id5.classList.toggle('leftVideo');
		id5.classList.toggle('midVideo');
		id4.classList.toggle('midVideo');
		id4.classList.toggle('rightVideo');
		id1.classList.toggle('rightVideo');
		id1.classList.toggle('right2Video');
		id2.classList.toggle('right2Video');
		id2.classList.toggle('left2Video');
		jumlahClick++;


	} else if (jumlahClick == 4) {

		id3.classList.toggle('leftVideo');
		id3.classList.toggle('midVideo');
		id5.classList.toggle('midVideo');
		id5.classList.toggle('rightVideo');
		id4.classList.toggle('rightVideo');
		id4.classList.toggle('right2Video');
		id1.classList.toggle('right2Video');
		id1.classList.toggle('left2Video');
		id2.classList.toggle('left2Video');
		id2.classList.toggle('leftVideo');
		jumlahClick = 0;


	}

	let vidMid = document.querySelector('.midVideo video');
	vidMid.setAttribute('controls', 'controls');
	vidMid.setAttribute('autoplay', 'autoplay');
	vidMid.play();

});
tombolLeft.addEventListener('click', function () {
	videoArray.forEach(element => {
		element.removeAttribute('controls');
		element.removeAttribute('autoplay');
		element.pause();
	});

	if (jumlahClick == 0) {
		id3.classList.toggle('midVideo');
		id3.classList.toggle('leftVideo');
		id5.classList.toggle('rightVideo');
		id5.classList.toggle('midVideo');
		id4.classList.toggle('right2Video');
		id4.classList.toggle('rightVideo');
		id1.classList.toggle('left2Video');
		id1.classList.toggle('right2Video');
		id2.classList.toggle('leftVideo');
		id2.classList.toggle('left2Video');
		jumlahClick = 4;
	} else if (jumlahClick == 4) {
		id3.classList.toggle('leftVideo');
		id3.classList.toggle('left2Video');
		id5.classList.toggle('midVideo');
		id5.classList.toggle('leftVideo');
		id4.classList.toggle('rightVideo');
		id4.classList.toggle('midVideo');
		id1.classList.toggle('right2Video');
		id1.classList.toggle('rightVideo');
		id2.classList.toggle('left2Video');
		id2.classList.toggle('right2Video');
		jumlahClick--;
	} else if (jumlahClick == 3) {
		id3.classList.toggle('left2Video');
		id3.classList.toggle('right2Video');
		id5.classList.toggle('leftVideo');
		id5.classList.toggle('left2Video');
		id4.classList.toggle('midVideo');
		id4.classList.toggle('leftVideo');
		id1.classList.toggle('rightVideo');
		id1.classList.toggle('midVideo');
		id2.classList.toggle('right2Video');
		id2.classList.toggle('rightVideo');
		jumlahClick--;
	} else if (jumlahClick == 2) {
		id3.classList.toggle('right2Video');
		id3.classList.toggle('rightVideo');
		id5.classList.toggle('left2Video');
		id5.classList.toggle('right2Video');
		id4.classList.toggle('leftVideo');
		id4.classList.toggle('left2Video');
		id1.classList.toggle('midVideo');
		id1.classList.toggle('leftVideo');
		id2.classList.toggle('rightVideo');
		id2.classList.toggle('midVideo');
		jumlahClick--;
	} else if (jumlahClick == 1) {
		id3.classList.toggle('rightVideo');
		id3.classList.toggle('midVideo');
		id5.classList.toggle('right2Video');
		id5.classList.toggle('rightVideo');
		id4.classList.toggle('left2Video');
		id4.classList.toggle('right2Video');
		id1.classList.toggle('leftVideo');
		id1.classList.toggle('left2Video');
		id2.classList.toggle('midVideo');
		id2.classList.toggle('leftVideo');
		jumlahClick--;
	}

	let vidMid = document.querySelector('.midVideo video');
	vidMid.setAttribute('controls', 'controls');
	vidMid.setAttribute('autoplay', 'autoplay');
	vidMid.play();
});
