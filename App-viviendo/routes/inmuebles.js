const express = require('express')
const Sequelize = require('sequelize')
const router = express.Router()
//Conexion MYSQL
const db = require('../config/db')
//Model Tabla Productos
const tablaInmuebles = require('../models/tablaInmuebles')


let title = "Inmuebles"
let year = new Date().getFullYear()
let legalesprecios = 'Todos los precios estan expresados en moneda Dolar Estadounidense. La conversion se hará oportunamente a la hora de perfeccionarse la operacion'


// arrow function
router.get('/', async (req,res) => {
        //consulta
      const traerProd = await tablaInmuebles.findAll({
        //attributes:['id','nombre','descripcion'],
        order:[
          ['id', 'DESC']
        ]
      })
      //console.log(traerProd)
      res.render('listadoinmuebles.hbs',{title,year,productos:traerProd})
})

router.get('/:id',async (req,res) => {
    let paramURL = req.params.id

    const consultaProd = await tablaInmuebles.findOne({where:{id:paramURL}});
    //console.log(consultaProd.dataValues)
    /*
    para Bruno
    if(!user){
      res.render("error.hbs",{data})
    }else{
      res.render("gracias.hbs",{data})
    }*/

    res.render('productoSimple.hbs',{prodSingle:consultaProd,legalesprecios,title,year})
    // res.json(prodSingle)
})

module.exports = router;