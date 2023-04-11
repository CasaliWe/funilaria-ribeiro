//ABRIR MENU MOBILE
var menuMobile = true

function abrirMenu(){
    if(menuMobile){
        document.querySelector('#nav-mobile').style.cssText = 'width:70%'
        menuMobile = false
        document.querySelector('.bars-toggler').style.cssText = 'display:none'
        document.querySelector('.close-toggler').style.cssText = 'display:block'
        document.querySelector('body').style.cssText = `position: fixed;`
    }else {
        document.querySelector('#nav-mobile').style.cssText = 'width:0%'
        menuMobile = true
        document.querySelector('.bars-toggler').style.cssText = 'display:block'
        document.querySelector('.close-toggler').style.cssText = 'display:none'
        document.querySelector('body').style.cssText = `position: inherit;`
    }
}


//TROCAR CAROUSEL BANNER INICAL
var controllerCarouselBannerInicial = 1

function trocarCarousel(lado){
     if(lado == 'next'){
            controllerCarouselBannerInicial == 2 ? controllerCarouselBannerInicial = 1 : controllerCarouselBannerInicial = 2
            
            if(controllerCarouselBannerInicial == 1){
                document.querySelector('._content2-carousel').classList.add('d-none') 
                document.querySelector('._content1-carousel').classList.remove('d-none')
                document.querySelector('._content1-carousel').classList.add('animaTrocaCarousel')
            }else{
                document.querySelector('._content2-carousel').classList.remove('d-none')
                document.querySelector('._content2-carousel').classList.add('animaTrocaCarousel')
                document.querySelector('._content1-carousel').classList.add('d-none')
            }
     }else{
        controllerCarouselBannerInicial == 1 ? controllerCarouselBannerInicial = 2 : controllerCarouselBannerInicial = 1
        
            if(controllerCarouselBannerInicial == 1){
                document.querySelector('._content2-carousel').classList.remove('d-none')
                document.querySelector('._content2-carousel').classList.add('animaTrocaCarousel')
                document.querySelector('._content1-carousel').classList.add('d-none')
            }else{
                document.querySelector('._content2-carousel').classList.add('d-none')
                document.querySelector('._content1-carousel').classList.remove('d-none')
                document.querySelector('._content1-carousel').classList.add('animaTrocaCarousel')
            }
     }
}



//MASCARA INPUT TEL
document.getElementById('tel-form').addEventListener('keyup', (e)=>{
    let input = e.target
    input.value = phoneMask(input.value)
})


const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
}
