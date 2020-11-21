const db = require('../config/db')

class User{
    static findAll(cb) {
        db.query("SELECT * FROM users ORDER BY id DESC", (err, results) => {
            if (err) throw err
            cb(results)
        })
    }
}
module.exports = User