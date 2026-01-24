const Testimonials = [
  {
    name: "Albert Monica",
    school: "Student Of Unilorin",
    rating: 5,
    comment: `
    Officia duis veniam et proident labore deserunt dolore irure deserunt. 
    Lorem eiusmod proident mollit nulla aute commodo fugiat minim dolor. 
    Nulla cupidatat tempor in sit non eiusmod nostrud ea eu exercitation id ipsum magna cillum. 
    Ipsum exercitation cupidatat elit ex eiusmod. 
    Nulla labore dolore ea voluptate elit.`,
  },
  {
    name: "Jon Gemma",
    school: "Student Of Unilag",
    rating: 4.5,
    comment: `
    Adipisicing aute officia fugiat et cupidatat veniam sunt aliquip est. 
    Id ipsum enim veniam do adipisicing deserunt esse laborum quis cupidatat. 
    Et fugiat nulla deserunt aute nulla. 
    Laborum nulla adipisicing irure officia fugiat aute laboris mollit dolore nisi est eu. 
    Magna sunt aliquip commodo ipsum consequat.`,
  },
  {
    name: "Alverly Ottega",
    school: "Student Of Unilorin",
    rating: 4,
    comment: `
    Est exercitation adipisicing eiusmod ut cupidatat quis excepteur ex cupidatat enim culpa eu quis. 
    Consectetur eu ad culpa aliquip enim et et. 
    Ad culpa cillum excepteur fugiat excepteur reprehenderit culpa eiusmod. 
    Elit cillum consectetur cillum laboris exercitation culpa fugiat deserunt sit cupidatat non. 
    `,
  },
];

export function set_landing_page_testimonials() {
  if (
    window.location.pathname != "/" &&
    window.location.pathname.includes(".php")
  )
    return;

  const name = document.getElementById("testimonial-data-name");
  const school = document.getElementById("testimonial-data-school");
  const rating = document.getElementById("testimonial-data-rate");

  const comment = document.getElementById("testimonial-comment");

  let current = 0;

  name.textContent = Testimonials[current].name;
  school.textContent = Testimonials[current].school;
  rating.textContent = Testimonials[current].rating;

  comment.textContent = Testimonials[current].comment;

  document.getElementById(`testimonial-img-${comment}`);

  const interval = setInterval(() => {
    current = (current + 1) % Testimonials.length;

    name.textContent = Testimonials[current].name;
    school.textContent = Testimonials[current].school;
    rating.textContent = Testimonials[current].rating;

    comment.textContent = Testimonials[current].comment;
  }, 3000);

  return () => clearInterval(interval);
}

export function to_login() {
  if (
    window.location.pathname != "/" &&
    window.location.pathname.includes(".php")
  )
    return;

  const button = document.querySelector("#to_login_btn");

  if (!button) return;

  function navigate() {
    window.location = "/login.php";
  }

  button.addEventListener("click", navigate);

  return () => button.removeEventListener("click", navigate);
}

export function to_register() {
  const button = document.querySelector(".to_register");

  if (!button) return;

  function navigate() {
    window.location = "/register.php";
  }

  button.addEventListener("click", navigate);
  return button.removeEventListener("click", navigate);
}
