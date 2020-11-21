const db = require('../config/db')

class User{
    static findAll(cb) {
        db.query("SELECT * FROM users ORDER BY id DESC", (err, results) => {
            if (err) throw err
            cb(results)
        })
    }
    static create(name, email, phone, cb) {
        let sql = "INSERT INTO users(name, email, phone_no) VALUES(?,?,?)"
        db.query(sql, [name, email, phone], (err, result) => {
            if (err) throw err
            cb(result)
        })
    }
}
module.exports = User