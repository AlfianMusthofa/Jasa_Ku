const User = require('../models/userModel')

const getAllUser = async (req, res) => {

   try {

      const users = await User.find()
      res.status(200).json(users)

   } catch (error) {

      res.status(500).json({ message: error.message })

   }

}

const addUsers = async (req, res) => {

   try {

      // Extract data from request body
      const { username, email, password } = req.body;

      // Check if email user already exist in database
      const existingUser = await User.findOne({ email })
      if (existingUser) {
         return res.status(400).json({ msg: "Email already exist!" })
      }

      // Generate salt and hash the password
      const salt = await bcrypt.genSalt(10)
      const hashedPassword = await bcrypt.hash(password, salt)

      // Create new user object with hashed password
      const newUser = new User({
         username,
         email,
         password: hashedPassword
      })

      // save the user into database
      await newUser.save()

      res.status(201).json({ msg: "User has been created!" })

   } catch (error) {

      res.status(500).json({ msg: error.message })

   }

}

module.exports = {
   getAllUser,
   addUsers,
}