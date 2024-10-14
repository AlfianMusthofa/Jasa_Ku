const express = require('express')
const dotenv = require('dotenv')
const Db = require('./config/db')
const userRouter = require('./routers/userRouter')
const cors = require('cors')

dotenv.config()

const app = express();

// Middleware
app.use(express.json())
app.use(express.urlencoded({ extended: true }));
app.use(cors())

// Router
app.use('/users', userRouter)

// MongoDb Connection
Db();

// Start server
app.listen(process.env.PORT, () => console.log('Server running'))