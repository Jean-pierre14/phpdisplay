const exp = require('express')
const router = exp.Router()
const db = require('../config/connection')

router.get('/', (req, res)=>{
    db.find({}).toArray((err, results)=>{
        if(err) throw err
        res.json(results)
    })
})

router.post('/', (req, res)=>{
    const {username,name,email,password} = req.body
    if(!username || !name || !email || !password){
        res.json({message: "Empty fields"})
    }else{
        req.json('passed')
    }
})

module.exports = router