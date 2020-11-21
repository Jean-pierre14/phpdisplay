const exp = require('express')
const router = exp.Router()
const User = require('../models/User')

router.get('/', (req, res) => {
    User.findAll((results) => {
        res.json(results)
    })
})

router.post('/', (req, res) => {
    const { name, email, phone } = req.body
    if (!name || !email || !phone) {
        res.json({message: "empty fileds"})
    } else {
        User.create(name, email, phone, (result) => {
            res.json(result)
        })
    }
})

module.exports = router