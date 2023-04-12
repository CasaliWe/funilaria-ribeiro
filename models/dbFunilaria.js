const {DataTypes} = require('sequelize')

const db = require('../db/conn')

const dbFunilaria = db.define('infos', {
     instagram: {
          type: DataTypes.STRING,
          required: true
     },
     whatsapp: {
          type: DataTypes.STRING,
          required: true
     },
     facebook: {
          type: DataTypes.STRING,
          required: true
     },
     email: {
          type: DataTypes.STRING,
          required: true
     },
     img_sobre_nos: {
          type: DataTypes.STRING,
          required: true
     },
     txt_sobre_nos: {
          type: DataTypes.STRING,
          required: true
     },
})

module.exports = dbFunilaria