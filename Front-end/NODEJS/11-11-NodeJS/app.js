const express = require('express')
const app = express()
const port = 3000
const os = require('os');

app.get('/', (req, res) => {
  res.send('Hello World!')
})

app.get('/cpu', (req,res) => {
    res.send(os.cpus()[0].model + ' | cores in this PC: ' + os.cpus().length);
})

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})
