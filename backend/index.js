const express = require('express')
const dotenv = require('dotenv')
const Db = require('./config/db')
const userRouter = require('./routers/userRouter')
const cors = require('cors')

dotenv.config()

const app = express();
app.use(cors())

// Router
app.use('/users', userRouter)

// MongoDb Connection
Db();

// Middleware
app.use(express.json());

// Start server
app.listen(process.env.PORT, () => console.log('Server running'))