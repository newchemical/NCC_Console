// header section
import express from "express";
import { APP_NAME, APP_PORT } from "./config";
import routes from "./routes";
import ErrorHandler from "./App/middlewares/ErrorHandler";
const app = express();
// end header Section

//body sections
app.use("/api", routes);
app.use(ErrorHandler);
app.use(express.json());
//end body section

//test code
var generator = require("generate-password");

var password = generator.generate({
  length: 10,
  numbers: true,
  symbols: true,
  strict: true,
  exclude: true,
});

// 'uEyMTw32v9'
console.log(password);

//end test code

//footer section
app.listen(APP_PORT, () =>
  console.log(
    `${APP_NAME} Server Listening on Prot http://localhost:${APP_PORT}`
  )
);
//end footer section
