//ABRIR MENU MOBILE
var menuMobile = true

function abrirMenu(){
    if(menuMobile){
        document.querySelector('#nav-mobile').style.cssText = 'width:70%'
        menuMobile = false
        document.querySelector('.bars-toggler').style.cssText = 'display:none'
        document.querySelector('.close-toggler').style.cssText = 'display:block'
    }else {
        document.querySelector('#nav-mobile').style.cssText = 'width:0%'
        menuMobile = true
        document.querySelector('.bars-toggler').style.cssText = 'display:block'
        document.querySelector('.close-toggler').style.cssText = 'display:none'
    }
}