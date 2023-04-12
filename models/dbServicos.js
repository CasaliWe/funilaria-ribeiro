const {DataTypes} = require('sequelize')

const db = require('../db/conn')

const dbServicos = db.define('servicos', {
     img_servicos: {
          type: DataTypes.STRING,
          required: true
     },
     title_servicos: {
          type: DataTypes.STRING,
          required: true
     },
     sub_servicos: {
          type: DataTypes.STRING,
          required: true
     }
})

module.exports = dbServicos