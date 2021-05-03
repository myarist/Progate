const express = require('express');
const app = express();

// Tempelkan code untuk menspesifikasikan folder yang menyimpan file CSS dan image 
app.use(express.static('public'));

app.get('/', (req, res) => {
  res.render('hello.ejs');
});

app.get('/top', (req, res) => {
  res.render('top.ejs');
});

app.listen(3000);
