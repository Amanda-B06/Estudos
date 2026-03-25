function jogo(id){
    let jogo = document.getElementById(`game-${id}`);
    let img = jogo.querySelector('.dashboard__item__img');
    let button = jogo.querySelector('.dashboard__item__button');
    

    if (button.classList.contains('dashboard__item__button--return')){
        button.classList.remove('dashboard__item__button--return');
        img.classList.remove('dashboard__item__img--rented');
        button.innerHTML=`Alugar`

        } else{
        button.classList.add('dashboard__item__button--return');
        img.classList.add('dashboard__item__img--rented');
        button.innerHTML=`Devolver`
        }
}

