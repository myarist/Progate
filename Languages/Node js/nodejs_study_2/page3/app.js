const express = require('express');
const mysql = require('mysql');
const app = express();

app.use(express.static('public'));

const connection = mysql.createConnection({
  host: 'localhost',
  user: 'progate',
  password: 'password',
  database: 'list_app'
});

app.get('/', (req, res) => {
  res.render('top.ejs');
});

app.get('/index', (req, res) => {
  // Ketik code untuk mengakses data dari database 
  connection.query(
    'SELECT * FROM items', 
    (error, results) => {
      console.log(results)
      res.render('index.ejs');
    }
  )
  
  // Hapus code dibawah
});

app.listen(3000);