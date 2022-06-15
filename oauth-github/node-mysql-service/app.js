const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const mysql = require('mysql');
const cors = require("cors");
const axios = require("axios");
const {LocalStorage} = require("node-localstorage");

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
    extended: true
}));
app.use(cors({ credentials: true, origin: true }));
let localStorage = new LocalStorage('./oauth'); 

const GITHUB_CLIENT_ID = "eb745473cc9cefa643ae";
const GITHUB_CLIENT_SECRET = "73ed41a810ce0ce174a27262c17455c8ec1fb870";
const GITHUB_URL = "https://github.com/login/oauth/access_token";
const GITHUB_REDIRECT_URL = "http://localhost/world-database";

// Github oauth redirect callback API
app.get("/oauth/redirect", (req, res) => {
    axios({
      method: "POST",
      url: `${GITHUB_URL}?client_id=${GITHUB_CLIENT_ID}&client_secret=${GITHUB_CLIENT_SECRET}&code=${req.query.code}`,
      headers: {
        Accept: "application/json",
      },
    }).then((response) => {
        const token = response.data.access_token;
        localStorage.setItem('token', token);
        res.redirect(`${GITHUB_REDIRECT_URL}?access_token=${token}`);
    });
});

app.get('/', function (req, res) {
    return res.send({ error: true, message: 'hello' })
});

const dbConn = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    database: 'world-database'
});

dbConn.connect(err => err && console.log(err)); 

app.use((req, res, next) => {
    let token = null;
    if (req.headers.authorization) {
      token = req.headers.authorization.substring(6);
    }

    const localStorageToken = localStorage.getItem('token');
    if (token !== localStorageToken) {
        res.statusCode = 401;
        res.setHeader('WWW-Authenticate', 'Basic realm="MyRealmName"');
        res.end('Unauthorized');
        return;
    } 
    next();
});

app.get('/world-databases', function (req, res) {
    dbConn.query('SELECT * FROM baze_podataka', function (error, results, fields) {
        if (error) throw error;
        return res.send({
            error: false, 
            data: results, 
            message: 'World database list' 
        });
    });
});


app.get('/world-database/:id', function (req, res) {
    let id = req.params.id;
    if (!id) {
        return res.status(400).send({ error: true, message: 'Please provide id' });
    }

    dbConn.query('SELECT * FROM baze_podataka where id=?', id, function (error, results, fields) {
	if (error) throw error;
	return res.send({ 
        error: false, 
        data: results.length > 0 ? results[0] : null, 
        message: `Single world database for id = ${id}` 
    });
	});
});

app.post('/world-database', function (req, res) {
	let database = req.body.database;
    const {naziv, opis} = database;

	if (!database) {
	    return res.status(400).send({ error:true, message: 'Please provide database' });
	}

	dbConn.query("INSERT INTO baze_podataka VALUES(NULL, ?, ?, ?, ?, ?)", [
        naziv, 
        opis, 
    ], function (error, results, fields) {
	    if (error) throw error;
	    return res.send({ 
            error: false, 
            data: results, 
            message: 'New database has been created successfully.' 
        });
	});
});

app.put('/world-database', function (req, res) {
	let database = req.body.employee;
    const {id, naziv, opis} = database;

	if (!id || !database) {
		return res.status(400).send({ 
            error: true,
            employee, 
            message: 'Please provide value for database and id' 
        });
	}

	dbConn.query("UPDATE baze_podataka SET naziv = ?, opis = ? where id = ?", [
        naziv, 
        opis,
        id
    ], function (error, results, fields) {
	    if (error) throw error;
	    return res.send({ error: false, data: results, message: 'Database has been updated successfully.' });
	});
});

app.delete('/world-database/:id', function (req, res) {
	let id = req.params.id;
	if (!id) {
	    return res.status(400).send({ 
            error: true, 
            message: 'Please provide value for id' 
        });
	}

	dbConn.query('DELETE FROM baze_podataka where id = ?', [id], function (error, results, fields) {
	    if (error) throw error;
	    return res.send({ 
            error: false, 
            data: results, 
            message: 'Database has been deleted successfully.' 
        });
	});
}); 

app.listen(3000, function() {
	console.log('Node app is running on port 3000');
});
module.exports = app;