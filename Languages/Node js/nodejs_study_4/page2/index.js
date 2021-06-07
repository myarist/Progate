// referenced by https://github.com/expressjs/express/blob/e1b45ebd050b6f06aa38cda5aaf0c21708b0c71e/lib/application.js
// and https://github.com/mysqljs/mysql/blob/master/lib/Connection.js

const app = require('express').application;
const mysql = require('mysql');
const http = require('http');
const res = require('express').response;

mysql.originalCreateConnection = mysql.createConnection;
res.originalRedirect = res.redirect;

// app.listen を上書き
app.listen = function listen(port) {
  var server = http.createServer(this);
  return server.listen.apply(server, [3000]);
};

// createConnection を上書き
mysql.createConnection = function createConnection(config) {
  var _this = this;
  if (process.env.IDENTIFIER === 'ANSWER'){
    config.database = 'answer_' + config.database;
  }
  return mysql.originalCreateConnection.call(_this, config);
}

// res.redirect を上書き
res.redirect = function redirect(url) {
  var _this = this;
  new_url = url + "?containerPort=3000&languageName=nodejs";
  return res.originalRedirect.call(_this, new_url);
};
