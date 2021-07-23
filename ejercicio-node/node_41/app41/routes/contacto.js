// importamos express
const express = require('express');

// ejecutar el sistema de routing de express

const router = express.Router();

router.get ('/', function(request,response) {
    // response.sent("esto es contacto")
    //render ('vista a renderizar', {data a enviar a la vista})
    response.render ('contacto.hbs', {titulo:"contacto", data: "hola mundo"})

});


module.exports = router;
