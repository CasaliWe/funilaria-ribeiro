const {DataTypes} = require('sequelize')

const db = require('../db/conn')

const dbFunilaria = db.define('infos', {
     sobre: {
          type: DataTypes.STRING,
          required: true
     }
})

module.exports = dbFunilaria