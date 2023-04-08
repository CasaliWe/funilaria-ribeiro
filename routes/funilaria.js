const express = require('express')
const router = express.Router()

const funilariaControllers = require('../controllers/Funilaria')



router.get('/', funilariaControllers.showHome)

module.exports = router