(function(){
    let bar1 = document.querySelector('#burger div:nth-of-type(1)');
    let bar2 = document.querySelector('#burger div:nth-of-type(2)');
    let bar3 = document.querySelector('#burger div:nth-of-type(3)');
    let burger = document.getElementById('burger');

    /*-------------------------------------------------------------------------- 
    L'ouverture et la fermeture du bouton burger. Il se ferme uniquement
    lorsqu'on clique sur le bouton et ne suit pas le menu de navigation lors
    d'un clique à côté
    --------------------------------------------------------------------------*/
    burger.addEventListener('mousedown', function(){
        if(!bar1.classList.contains('ouvrirX1')){
            bar1.classList.remove('fermerX1');
            bar1.classList.add('ouvrirX1');
            bar2.classList.remove('fermerX2');
            bar2.classList.add('ouvrirX2');
            bar3.classList.remove('fermerX3');
            bar3.classList.add('ouvrirX3');
        }

        else{
            bar1.classList.remove('ouvrirX1');
            bar1.classList.add('fermerX1');
            bar2.classList.remove('ouvrirX2');
            bar2.classList.add('fermerX2');
            bar3.classList.remove('ouvrirX3');
            bar3.classList.add('fermerX3');
        }
    })

    /*--------------------------------------------------------------------------
    Empêche les animations du carroussel de fonctionner lors du changement de 
    grandeur de la fenêtre
    --------------------------------------------------------------------------*/
    let redimentionnementTemps;
    window.addEventListener("resize", () => {
    document.body.classList.add("arret-animation");
    clearTimeout(redimentionnementTemps);
    redimentionnementTemps = setTimeout(() => {
        document.body.classList.remove("arret-animation");
    }, 400);
    });
})()