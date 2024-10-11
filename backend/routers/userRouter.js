const { getAllUser, addUsers } = require('../controllers/userController')
const express = require('express')

const router = express.Router()

router.get('/', getAllUser)
router.post('/', addUsers)

module.exports = router
