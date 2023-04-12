const express = require('express')
const exphbs = require('express-handlebars')
const { Cookie } = require('express-session')
const session = require('express-session')
const FileStore = require('session-file-store')(session)

const multer = require('multer')
const path = require('path')

const flash = require('express-flash')

const conn = require('./db/conn')

const funilariaRoutes = require('./routes/funilaria')

const dbFunilaria = require('./models/dbFunilaria')
const dbGaleria = require('./models/dbGaleria')
const dbServicos = require('./models/dbServicos')

const app = express()

app.use(
    session({
          name: 'session',
          secret: 'nosso_secret',
          resave: false,
          saveUninitialized: false,
          store: new FileStore({
              logFn: function() {}, 
              path: require('path').join(require('os').tmpdir(), 'session'),
          }),
          cookie: {
               secure:false,
               maxAge: 360000, //TEMPO DE VALIDADE
               expires: new Date(Date.now()+360000), //TEMPO DE VALIDADE
               httpOnly: true
          }
    })
)

app.use((req, res, next)=>{
        if(req.session.userid){
             res.locals.session = req.session
        }
        next()
})

app.use(flash())

app.use(
    express.urlencoded({
         extended: true
    })
)
app.use(express.json())

app.engine('handlebars', exphbs.engine())
app.set('view engine', 'handlebars')
app.use(express.static('public')) 


app.use('/', funilariaRoutes) 



conn.sync().then(()=>{
    app.listen(3000)
}).catch((err) => console.log(err))
//Usa-se sync({force:true}) para forçar o reset e recriação das tables;