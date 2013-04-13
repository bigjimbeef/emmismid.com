var connect = require("connect");

var app = connect().use(connect.static(__dirname + '/HTML'));

app.listen(8180);