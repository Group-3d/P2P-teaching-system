import {
  set_landing_page_testimonials,
  to_login,
  to_register,
} from "./functions/landing-page.js";

import { login_form_submit, register_form_submit } from "./functions/auth.js";

document.addEventListener("DOMContentLoaded", () => {
  set_landing_page_testimonials();
  to_login();
  to_register();
  login_form_submit();
  register_form_submit();
});
