const express = require('express')
const router = express.Router()

const funilariaControllers = require('../controllers/Funilaria')



router.get('/', funilariaControllers.showHome)

router.get('/admin', funilariaControllers.showAdmin)

module.exports = router