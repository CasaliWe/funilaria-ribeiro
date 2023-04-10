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


//TROCAR CAROUSEL BANNER INICAL
var controllerCarouselBannerInicial = 1

function trocarCarousel(lado){
     if(lado == 'next'){
            controllerCarouselBannerInicial == 2 ? controllerCarouselBannerInicial = 1 : controllerCarouselBannerInicial = 2
            
            if(controllerCarouselBannerInicial == 1){
                document.querySelector('._content2-carousel').style.cssText = `display: none;`
                document.querySelector('._content1-carousel').style.cssText = `display: flex;`
            }else{
                document.querySelector('._content2-carousel').style.cssText = `display: flex;`
                document.querySelector('._content1-carousel').style.cssText = `display: none`
            }
     }else{
        controllerCarouselBannerInicial == 1 ? controllerCarouselBannerInicial = 2 : controllerCarouselBannerInicial = 1
        
            if(controllerCarouselBannerInicial == 1){
                document.querySelector('._content2-carousel').style.cssText = `display: none`
                document.querySelector('._content1-carousel').style.cssText = `display: flex;`
            }else{
                document.querySelector('._content2-carousel').style.cssText = `display: flex`
                document.querySelector('._content1-carousel').style.cssText = `display: none`
            }
     }
}