const fs = require('fs')
const nodemailer = require('nodemailer')
require('dotenv').config()

const dbFunilaria = require('../models/dbFunilaria')
const dbServicos = require('../models/dbServicos')
const dbGaleria = require('../models/dbGaleria')



const user = process.env.emailll
const pass = process.env.senhaaa

const transporter = nodemailer.createTransport({
      host: 'smtp.gmail.com',
      port: 587,
      secure: false,
      auth: {
          user, pass  
      }
  })


module.exports = class PostsControllers {
         
        //MOSTRA O SITE
        static async showHome(req,res){
            let infos = await dbFunilaria.findAll({raw:true})
            let servicos = await dbServicos.findAll({raw:true})
            let galeria = await dbGaleria.findAll({raw:true})

            if(servicos == ''){
                servicos = false
            }

            if(galeria == ''){
                galeria = false
            }

            res.render('home', {infos, servicos, galeria})
        }



        //MOSTRAR TELA LOGIN
        static async showLogin(req,res){
            if(req.session.userid){
                  let infos = await dbFunilaria.findAll({raw:true})
                  let servicos = await dbServicos.findAll({raw:true})
                  let galeria = await dbGaleria.findAll({raw:true})
    
                  if(servicos == ''){
                      servicos = false
                  }
    
                  if(galeria == ''){
                      galeria = false
                  }
                  
                  res.render('admin', {infos, servicos, galeria})
            } else{
                  res.render('login')
            }
        }


        //VERIFICAR LOGIN e LEVAR PARA DASHBOARD
        static async verificarLogin(req,res){
            const login = req.body.login 
            const senha = req.body.senha

            if(login == process.env.login && senha == process.env.senha){

                  let infos = await dbFunilaria.findAll({raw:true})
                  let servicos = await dbServicos.findAll({raw:true})
                  let galeria = await dbGaleria.findAll({raw:true})
    
                  if(servicos == ''){
                      servicos = false
                  }
    
                  if(galeria == ''){
                      galeria = false
                  }


                  req.session.userid = process.env.userid
                  req.session.save(()=>{
                        res.render('admin', {infos, servicos, galeria})
                  })
            }else{
                  req.flash('senhaIncorreta','Verifique os dados!') //message é como deseja chamar;
                  res.redirect('/admin')
            }
        }


        //FAZER LOGOUT
        static logout(req,res){
            req.session.destroy()
            res.redirect('/admin')
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


        //SALVAR OS DADOS SERVIÇOS QUE VEM DO ADM
        static async salvarImgServicesDB(req,res){
              const img_servicos = req.file.filename
              const title_servicos = req.body.title
              const sub_servicos = req.body.descri

              await dbServicos.create({img_servicos, title_servicos, sub_servicos})

              res.redirect('/admin')
        }


        //SALVAR DADOS GALERIA QUE VEM DO ADM
        static async salvarImgGaleriaDB(req,res){
             const imgs_name = req.file.filename

             await dbGaleria.create({imgs_name})

             res.redirect('/admin')
        }


        //DELETAR SERVIÇOS
        static async deletarServico(req,res){
                const id = req.body.id

                const service = await dbServicos.findOne({raw:true},{where:{id:id}})
                const imgDeletar = service.img_servicos

                await dbServicos.destroy({where:{id:id}})
                
                if(imgDeletar){
                  fs.unlink(`public/img/${imgDeletar}`, (err) => {
                       if (err) {
                         return;
                       }
                  });
                }

                res.redirect('/admin')
        }


        //DELETAR IMG GALERIA
        static async deletarImgGaleria(req,res){
            const id = req.body.id

            const service = await dbGaleria.findOne({raw:true},{where:{id:id}})
            const imgDeletar = service.imgs_name

            await dbGaleria.destroy({where:{id:id}})
            
            if(imgDeletar){
              fs.unlink(`public/img/${imgDeletar}`, (err) => {
                   if (err) {
                     return;
                   }
              });
            }

            res.redirect('/admin')
        }



        static async enviarEmail(req,res){

            /*
            const email = req.body.email 
            const nome = req.body.nome
            const whatsapp = req.body.whatsapp
            const mensagem = req.body.mensagem

            const all = await dbFunilaria.findOne({raw:true, where:{id:1}})
            const emailChefe = all.email
            

            //Email para o cliente
            transporter.sendMail({
                  from: user,
                  to: email,
                  subject: 'Recebemos o seu contato!',
                  text: 'Obrigado por deixar sua mensagem, entraremos em contato em breve.'
            })


            //Email para o chefe
            transporter.sendMail({
                  from: user,
                  to: emailChefe,
                  subject: 'Novo serviço!',
                  html: `
                     <div style="padding:20px; text-align:center;">
                          <p><strong>Nome</strong>: ${nome}</p>
                          <p><strong>Whatsapp</strong>: ${whatsapp}</p>
                          <p><strong>Email</strong>: ${email}</p>
                          <p><strong>Mensagem</strong>: ${mensagem}</p>
                     </div>
                  `
            })


            //Email para o assistente
            transporter.sendMail({
                  from: user,
                  to: 'wesleicasali18@gmail.com',
                  subject: 'Novo serviço CASALI!',
                  html: `
                     <div style="padding:20px; text-align:center;">
                          <p><strong>Nome</strong>: ${nome}</p>
                          <p><strong>Whatsapp</strong>: ${whatsapp}</p>
                          <p><strong>Email</strong>: ${email}</p>
                          <p><strong>Mensagem</strong>: ${mensagem}</p>
                     </div>
                  `
            })
            */

            res.redirect('/')
        }

}