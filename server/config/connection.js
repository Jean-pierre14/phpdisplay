const MongoClient = require('mongodb')
const MongoClient = require('mongodb').MongoClient
var url = 'mongodb://localhost:27017/crud'
const db = MongoClient.connect(url, function(err){
    if(err) throw err
    console.log("connected or Database created...")
})

module.exports = db