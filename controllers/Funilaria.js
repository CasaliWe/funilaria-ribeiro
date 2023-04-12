const dbFunilaria = require('../models/dbFunilaria')
const dbServicos = require('../models/dbServicos')
const dbGaleria = require('../models/dbGaleria')


module.exports = class PostsControllers {
         
        //MOSTRA O SITE
        static showHome(req,res){
              res.render('home')
        }
       
        //MOSTRA O ADM
        static showAdmin(req,res){
              res.render('admin')
        }
        
        //SALVAR AS INFOS VINDAS DO ADM
        static async salvarInfosDB(req,res){
              const instagram = req.body.instagram
              const whatsapp = req.body.whatsapp
              const facebook = req.body.facebook
              const email = req.body.email
              const txt_sobre_nos = req.body.txt_sobre_nos


              await dbFunilaria.update({instagram, whatsapp, facebook, email, txt_sobre_nos}, {where:{id: 1}})

              res.redirect('/admin')
        }


        //SALVA A IMG SOBRE NOS VINDA DO ADM
        static async salvarImgSobreNosDB(req,res){
            const img_sobre_nos = req.file.filename

            await dbFunilaria.update({img_sobre_nos}, {where:{id: 1}})

            res.redirect('/admin')
        }

}