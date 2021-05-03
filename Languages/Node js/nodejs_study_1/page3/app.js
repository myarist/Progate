const express = require('express');
const app = express();

app.get('/', (req, res) => {
  res.render('hello.ejs');
});

// Tempelkan code untuk menjalankan server
app.listen(3000);
