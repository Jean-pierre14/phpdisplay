const express = require('express')
const {success, error} = require('consola')
const bodyParser = require('body-parser')

const PORT = process.env.PORT || 7000
const app = express()

app.use(express.urlencoded({extended: false}))
app.use(bodyParser.urlencoded({extended: false}))
app.use(bodyParser.json())

app.use('/', require('./router/'))

app.listen(PORT, (e)=>{
    if(e) throw e
    success({message: `server is runnig on port ${PORT}`, badge: true})
})
