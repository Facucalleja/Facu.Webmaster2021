var express = require('express');
var router = express.Router();


let year = new Date().getFullYear()

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index.hbs', { title: 'Inmuebles destacados',year: year });
});

module.exports = router;
