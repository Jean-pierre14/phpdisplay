const db = require('./index')

class User{
    static created(username, email, pass, callback){
        let SQL = "INSERT INTO users(username, email, pass) VALUES(?,?,?)"
        db.query(SQL, [username, email, pass], (err, result)=>{
            if(err) throw err
            callback(result)
        })
    }
    static findAll(cb){
        let SQL = "SELECT * FROM users ORDER BY id DESC"
        db.query(SQL, (err, results)=>{
            if(err) throw err
            cb(results)
        })
    }
}
module.exports = User