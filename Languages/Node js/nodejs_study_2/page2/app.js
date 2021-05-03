const express = require('express');
// Tempelkan code untuk menghubungkan MySQL
const mysql = require('mysql');

const app = express();

app.use(express.static('public'));
// Definisikan constant connection dan isikan dengan code informasi koneksi
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
  res.render('index.ejs');
});

app.listen(3000);
