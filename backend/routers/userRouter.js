const { getAllUser, addUsers, login } = require('../controllers/userController')
const express = require('express')

const router = express.Router()

router.get('/', getAllUser)
router.post('/', addUsers)
router.post('/login', login)

module.exports = router
