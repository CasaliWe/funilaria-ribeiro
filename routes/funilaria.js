const express = require('express')
const router = express.Router()

//MULTER
const multer = require('multer')
const path = require('path')
const storage = multer.diskStorage({
    destination: function(req, file, cb){
          cb(null, "public/img/")
    },
    filename: function(req, file, cb){
        cb(null, file.originalname + Date.now() + path.extname(file.originalname))
    }
})
const upload = multer({storage})



const funilariaControllers = require('../controllers/Funilaria')



//MOSTRA O SITE
router.get('/', funilariaControllers.showHome)

//MOSTRA O LOGIN
router.get('/admin', funilariaControllers.showLogin)

//VERIFICAR LOGIN 
router.post('/dashboard', funilariaControllers.verificarLogin)

//FAZER LOGOUT
router.get('/logout', funilariaControllers.logout)

//SALVA OS DADOS INFOS VINDOS DO ADM
router.post('/salvarInfosAdm', funilariaControllers.salvarInfosDB)

//SALVAR A IMAGEM SOBRE NOS VINDA DO ADM
router.post('/addImgSobreNos', upload.single('file'), funilariaControllers.salvarImgSobreNosDB)

//SALVAR DADOS SERVIÇOS QUE VEM DO ADM
router.post('/addImgServico', upload.single('file'), funilariaControllers.salvarImgServicesDB)

//SALVAR IMAGEM GALERIA QUE VEM DO ADM
router.post("/addImgGaleria",  upload.single('file'), funilariaControllers.salvarImgGaleriaDB)

//EXLUIR SERVIÇO ADMIN
router.post('/deletarServico', funilariaControllers.deletarServico)

//EXLUIR IMG GALERIA ADMIN
router.post('/deletarImgGaleria', funilariaControllers.deletarImgGaleria)

//ENVIO DE EMAIL
router.post('/enviarEmail', funilariaControllers.enviarEmail)


module.exports = router