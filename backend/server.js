const exp = require('express')
const app = exp()
const PORT = process.env.PORT || 7000
const { success, error } = require('consola')
const db = require('./config/db')
// Connection to the DB
db.connect((err) => {
    if (err) error({ message: `${err}`, badge: true })
    success({message: `Connected to DB`, badge: true})
})

app.use('/', require('./routes/users'))

app.listen(PORT, (err) => {
    if (err) error({ message: `${err}`, badge: true })
    success({message: `Server run on port : ${PORT}`, badge: true})
})

