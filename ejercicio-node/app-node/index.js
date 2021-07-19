// importa el modulo de ExpressJS

const express = require('express')

const app = express()

const port = 3000

// middelware
app.get('/', (req, res) => {
  res.send('Hello World!, ya funciona express')
})

app.get('/inicio', (req, res) => {
    res.send('<h1>Etoy en ventana inicio</h1>')
  })

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})

//uso de la carpeta "public", la mia es "assets-static" 
