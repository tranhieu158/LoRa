Usage:
1) Update file config.js
2) Execute the script: node create_table.js
3) Check if the table sensor_data is created using the webbased tool phpMyAdmin:
   http://localhost/~username/phpmyadmin/index.php
*/

const mysql = require('mysql');
const config = require('./config.js');
config.databaseOptions.database = "phpmyadmin";

const con = mysql.createConnection(config.databaseOptions);

con.connect(function(err) {
    if (err) throw err;
    // MySQL 5.7 has fractional seconds support for DATETIME with up to microseconds (6 digits) precision:
    // DATETIME(6)
    // See: https://dev.mysql.com/doc/refman/5.7/en/fractional-seconds.html
    // The Things Network, the time is measured with 9 digits fractional-seconds, example: '2018-12-27T14:39:12.420921047Z'
    // Using this solution will lose some microseconds precision.
    // Because of this I have decided to store the time as a VARCHAR and NOT as a DATETIME(6)

    con.query("CREATE TABLE sensor_data_3 (id int auto_increment primary key, hardware_serial VARCHAR(50), port TINYINT, counter BIGINT, payload_raw TINYBLOB,temperature FLOAT(6,3),humidity FLOAT(6,3), time VARCHAR(30), frequency FLOAT(6,3), modulation VARCHAR(255), data_rate VARCHAR(255), airtime INT, coding_rate VARCHAR(3), gateways TEXT)", function (err, result) {
        if (err) throw err;
        console.log("Table sensor_data_3 created");
        process.exit(1);
    });
});
