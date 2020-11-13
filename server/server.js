const exp = require('express')
const PORT = process.env.PORT || 7000
const {success, error} = require('consola')
const db = require('./config/db')
const app = exp()

// DB config test
db.connect((err)=>{
    if(err) throw err
    success({message: 'Database is connected', badge: true})
})

app.get('/', (req, res)=>{
    res.json({msg: "Welcome to my javascript backend"})
})

// Users route
app.use('/users', require('./router/'))

app.listen(PORT, (err)=>{
    if(err) throw err
    success({message: `Server run on port ${PORT}`, badge: true})
})