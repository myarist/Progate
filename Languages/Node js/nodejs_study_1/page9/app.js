const express = require('express');
const app = express();

app.use(express.static('public'));

// Hapus rute di bawah
// Hapus sampai di sini

// Ganti URL milik rute ke root URL
app.get('/', (req, res) => {
  res.render('top.ejs');
});

app.get('/index', (req, res) => {
  res.render('index.ejs');
});

app.listen(3000);
