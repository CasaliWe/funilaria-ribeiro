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

//MOSTRA O ADM
router.get('/admin', funilariaControllers.showAdmin)

//SALVA OS DADOS INFOS VINDOS DO ADM
router.post('/salvarInfosAdm', funilariaControllers.salvarInfosDB)

//SALVAR A IMAGEM SOBRE NOS VINDA DO ADM
router.post('/addImgSobreNos', upload.single('file'), funilariaControllers.salvarImgSobreNosDB)




module.exports = router