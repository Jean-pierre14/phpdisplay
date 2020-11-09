const exp = require('express')
const router = exp.Router()

router.get('/', (req, res)=>{
    res.json("Hello mongodb")
})

router.post('/', (req, res)=>{
    const {username,name,email,password} = req.body
    if(!username || !name || !email || !password){
        res.json({message: "Empty fields"})
    }else{
        
    }
})

module.exports = router