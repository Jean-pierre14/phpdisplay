const express = require('express')
const {success, error} = require('consola')
const MongoClient = require('mongodb').MongoClient

var url = 'mongodb://localhost:27017/crud'
const PORT = process.env.PORT || 7000

const app = express()

MongoClient.connect(url, function(err, db){
    if(err) throw err
    console.log("Database created...")
})

app.listen(PORT, (e)=>{
    if(e) throw e
    success({message: `server is runnig on port ${PORT}`, badge: true})
})
