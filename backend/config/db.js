const mongoose = require('mongoose')

const connectionDb = async () => {
   try {
      await mongoose.connect(process.env.MONGO_URL)
      console.log('Connected to Db')
   } catch (error) {
      console.log({ message: error.message })
   }
}

module.exports = connectionDb;