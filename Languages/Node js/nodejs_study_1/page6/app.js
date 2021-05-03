const express = require('express');
const app = express();

app.use(express.static('public'));

app.get('/', (req, res) => {
  res.render('hello.ejs');
});

app.get('/top', (req, res) => {
  res.render('top.ejs');
});

// Tambahkan rute untuk halaman daftar
app.get('/index', (req, res) => {
  res.render('index.ejs');
});

app.listen(3000);
