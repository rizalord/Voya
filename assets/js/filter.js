let filterShow = document.querySelector('.filter-show');
let filter = document.querySelector('.filter');
let click = false;

    filter.addEventListener('click',function(){
        if(click == false){
            filterShow.style.display = 'block';
            click = true;
        }else {
            filterShow.style.display = 'none';
            click = false;
        }
    });