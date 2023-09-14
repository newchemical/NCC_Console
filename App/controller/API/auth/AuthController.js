import Joi from "joi";

const AuthController = {
  register(req, res, next) {
    const registerUserSchema = Joi.object({
      username: Joi.min(3).max(30).required(),
      name: Joi.string().min(3).max(40).required(),
      father_name: Joi.string().min(3).max(40).required(),
      contact: Joi.string().min(11).max(11).required(),
      email: Joi.string().email().required(),
      role: Joi.string().min(3).max(50).required(),
    });

    const { error } = registerUserSchema.validate(req.body);

    if (error) {
      return next(error);
    }

    return res.json({ msg: "API done Very Well" });
  },
};

export default AuthController;
