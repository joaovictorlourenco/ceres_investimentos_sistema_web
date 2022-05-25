const express = require("express");
const session = require('express-session');

const port = 3000;
var path = require('path');
const app = express();


app.engine('html', require('ejs').renderFile);
app.set('view engine','html');
app.use('/public',express.static(path.join(__dirname,'public')));
app.set('view',path.join(__dirname,'/view'));


app.listen(port,()=>{
    console.log('servidor rodando')
})

