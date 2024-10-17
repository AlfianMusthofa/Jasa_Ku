const User = require('../models/userModel')
const bcrypt = require('bcrypt')

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

// Login
const login = async (req, res) => {

   try {

      const { username, password } = req.body

      if (!username || !password) {
         return res.status(400).json({ msg: 'username and password is required!' })
      }

      const user = await User.findOne({ username })

      if (!user) {
         return res.status(404).json({ msg: 'User not found' });
      }

      const matchedPassword = await bcrypt.compare(password, user.password)

      if (!matchedPassword) {
         return res.status(401).json({ msg: 'Invalid password!' })
      }

      res.json({ msg: 'Login successful', user: { email: user.email } });

   } catch (error) {

      res.status(500).json({ error: error.message });

   }

}

const deleteUser = async (req, res) => {

   try {

      const userId = req.params.id

      const deletedUser = await User.findByIdAndDelete(userId)

      if (!deleteUser) {
         res.status(404).json({ msg: 'User not found!' })
      }

      res.status(200).json({ msg: "User has been deleted!" })

   } catch (error) {
      res.status(500).json({ msg: error.message })
   }

}

module.exports = {
   getAllUser,
   addUsers,
   login,
   deleteUser
}