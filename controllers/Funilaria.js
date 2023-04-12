const dbFunilaria = require('../models/dbFunilaria')

module.exports = class PostsControllers {

        static showHome(req,res){
              res.render('home')
        }

        static showAdmin(req,res){
              res.render('admin')
        }

}