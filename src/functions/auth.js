export function login_form_submit() {
  const form = document.getElementById("login_form");

  if (!form) return;

  async function handleSubmit(e) {
    e.preventDefault();

    const formData = new FormData(form);
    try {
      const res = await fetch(form.action, {
        method: form.method || "POST",
        body: formData,
      });

      const data = await res.json();
      console.log("Success: ", data);

      window.location = "/";
    } catch (err) {
      console.error("Submit failed: ", err);
    }
  }

  form.addEventListener("submit", handleSubmit);
  //   return () => form.removeEventListener("submit", handleSubmit);
}

export function register_form_submit() {
  const form = document.getElementById("register_form");

  if (!form) return;

  async function handleSubmit(e) {
    e.preventDefault();

    const formData = new FormData(form);
    try {
      const res = await fetch(form.action, {
        method: form.method || "POST",
        body: formData,
      });

      const data = await res.json();
      console.log("Success: ", data);

      window.location = "/login.php";
    } catch (err) {
      console.error("Submit failed: ", err);
    }
  }

  form.addEventListener("submit", handleSubmit);
  return () => form.removeEventListener("submit", handleSubmit);
}
