const {DataTypes} = require('sequelize')

const db = require('../db/conn')

const dbGaleria = db.define('galeria', {
     imgs_name: {
          type: DataTypes.STRING,
          required: true
     }
})

module.exports = dbGaleria