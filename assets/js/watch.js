let chevron = document.getElementById('chevron');
let capt = document.querySelector('.captionVideo');
let div2 = document.getElementById('div2');
let div3 = document.getElementById('div3');

chevron.addEventListener('click', function () {
	capt.classList.toggle('d-none');
	chevron.style.display = 'none';
	div2.style.display = 'none';
	div3.classList.toggle('d-none');
});

// text area auto grow / increse height
// function auto_grow(element) {
// 		element.style.height = "30px";
// 		element.style.height = (element.scrollHeight) + "px";
// }

var textarea = document.querySelectorAll('.komenInput');

textarea[0].addEventListener('keydown', autosize);
textarea[1].addEventListener('keydown', autosize);

function autosize() {
    var el = this;
    setTimeout(function () {
        el.style.cssText = 'height:30px; padding:0px ; resize : none;';
        // for box-sizing other than "content-box" use:
        // el.style.cssText = '-moz-box-sizing:content-box';
        el.style.cssText = 'height:' + el.scrollHeight + 'px';
    }, 0);
}
