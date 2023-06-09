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
        document.getElementById("btn-toggler-mobile").src = 'img/close2.png'
        menuMobile = false
     }else{
        document.getElementById('menu-btns-mobile').style.display = 'none'
        document.getElementById('menu-btns-mobile').classList.remove('animaMenuMobile')
        document.getElementById("btn-toggler-mobile").src = 'img/bars.png'
        menuMobile = true
     }
}



//VERIFICAR SE INSERIU A IMG E ATIVAR O BTN
function checkEntradaImg(){
    document.getElementById("btn-submit-add-img-sobre-nos").disabled = false
}


//VERIFICAR SE INSERIU A IMG E ATIVAR O BTN
function checkEntradaImgService(){
    document.getElementById("btn-submit-add-img-service").disabled = false
}

//VERIFICAR SE INSERIU A IMG E ATIVAR O BTN
function checkEntradaImgGaleria(){
    document.getElementById("btn-submit-add-img-galeria").disabled = false
}