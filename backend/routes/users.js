const exp = require('express')
const router = exp.Router()
const User = require('../models/User')

router.get('/', (req, res) => {
    User.findAll((results) => {
        res.json(results)
    })
})

module.exports = router