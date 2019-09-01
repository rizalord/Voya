let containerSet = document.querySelectorAll('.mbole-version .containerSet');
let DontainerSet = document.querySelectorAll('.dsktp-version .containerSet');
let delAcc = document.querySelector('.deleteAcc');
let btn = document.querySelectorAll('.fa-caret-down');
let number = 0;
let mobile = document.querySelector('.mbole-version');
let desktop = document.querySelector('.dsktp-version');

for(let i = 0 ; i < containerSet.length ; i++){
    btn[i].addEventListener('click' , function(){
        if(number == 0){
            containerSet[i].style.maxHeight = 'unset';

            if(i == 2){
                delAcc.style.zIndex = 1;
            }

            btn[i].classList.toggle('fa-caret-down');
            btn[i].classList.toggle('fa-caret-up');
            number++;
        }else{
            containerSet[i].style.maxHeight = '18px';
            if (i == 2) {
                delAcc.style.zIndex = '-1';
            }

            btn[i].classList.toggle('fa-caret-down');
            btn[i].classList.toggle('fa-caret-up');
            number = 0;
        }
    });
}

let listMenu = document.querySelectorAll('.leftSettings ul li');
for (let index = 0; index < listMenu.length; index++) {
    

    listMenu[index].addEventListener('click' , function(){
        for(let j = 0 ; j < listMenu.length ; j++){
            listMenu[j].classList.remove('active');

            DontainerSet[j].style.display = 'none';
        }

        listMenu[index].classList.toggle('active');
        DontainerSet[index].style.display = 'block';



    });
    
}