//header section
import express from "express";
import { AuthController } from "../App/controller/API";
const router = express.Router();
//end header section

//body section
router.post("/register", AuthController.register);
//end body section

//footer section
export default router; 
//end footer section
