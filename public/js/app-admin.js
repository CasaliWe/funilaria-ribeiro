//TROCAR TELA CONTEÚDOS
function trocarAba(btnClicado){
    var allBtns = document.querySelectorAll('._btn-menu')
    var allBtnsMobile = document.querySelectorAll('._btn-menu-mobile')
    var allConteudos = document.querySelectorAll('._conteudo')

    
    allBtns.forEach((btn)=>{
         btn.classList.remove('active-btn')
    })

    document.getElementById(`btn${btnClicado}`).classList.add('active-btn')



    allBtnsMobile.forEach((btn)=>{
        btn.classList.remove('active-btn')
   })

   document.getElementById(`btn-mobile${btnClicado}`).classList.add('active-btn')



    allConteudos.forEach((conteudo)=>{
        conteudo.classList.add('d-none')
    })

    document.getElementById(`conteudo${btnClicado}`).classList.remove('d-none')
}




//ABRIR MENU MOBILE
var menuMobile = true

function abrirMenuMobile(){
     if(menuMobile){
        document.getElementById('menu-btns-mobile').style.display = 'block'
        document.getElementById('menu-btns-mobile').classList.add('animaMenuMobile')
        menuMobile = false
     }else{
        document.getElementById('menu-btns-mobile').style.display = 'none'
        document.getElementById('menu-btns-mobile').classList.remove('animaMenuMobile')
        menuMobile = true
     }
}