import { DEBUG_MODE } from "../../config";
import { ValidationError } from "joi";

const ErrorHandler = (err, req, res, next) => {
  let statusCode = 500;
  let data = {
    massage: "Internal Server Error",
    ...(DEBUG_MODE === "true" && { originalError: err.massage }),
  };

  if (err instanceof ValidationError) {
    statusCode = 422;
    data = {
      massage: err.message,
    };
  }

  return res.status(statusCode).json(data);
};

export default ErrorHandler;
