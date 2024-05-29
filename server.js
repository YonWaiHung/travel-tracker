const express = require('express');
const mysql = require('mysql');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
app.use(bodyParser.json());
app.use(cors());

// MySQL connection
const connection = mysql.createConnection({
    host: '127.0.0.1',
    user: 'root',
    password: 'Mysqlacc2902*',
    database: 'mydb'
});

connection.connect(err => {
    if (err) throw err;
    console.log('Connected to MySQL Database.');
});

// CRUD operations
// Read all travel list
app.get('/travel', (req, res) => {
    connection.query('SELECT * FROM travel', (err, results) => {
        if (err) throw err;
        res.json(results);
    });
});

// Create a new item
app.post('/travel', (req, res) => {
    const travelData = req.body;
    connection.query('INSERT INTO travel SET ?', travelData, (err, results) => {
        if (err) throw err;
        res.json({ id: results.insertId });
    });
});

// Update an item
app.put('/travel/:travel_id', (req, res) => {
    const travelData = req.body;
    const travelId = req.params.id;
    connection.query('UPDATE travel SET ? WHERE travel_id = ?', [travelData, travelId], (err, results) => {
        if (err) throw err;
        res.json(results);
    });
});

// Delete an travel
app.delete('/travel/:travel_id', (req, res) => {
    const travelId = req.params.id;
    connection.query('DELETE FROM travel WHERE travel_id = ?', [travelId], (err, results) => {
        if (err) throw err;
        res.json(results);
    });
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
});
