function closePopup() {
  const main_content = document.querySelector(".discussion-page-single");
  const Popup = document.querySelector(".contribute-wrapper");

  if (!Popup) return;

  Popup.classList.add("wrapper-closer");

  const timeout = setTimeout(() => {
    main_content.removeChild(Popup);
  }, 1000);

  return () => clearTimeout(timeout);
}

function contributePopup() {
  const main_content = document.querySelector(".discussion-page-single");

  if (document.querySelector(".contribute-wrapper")) return;

  // Popup
  const div = document.createElement("div");
  div.classList.add("contribute-wrapper");

  // Popup Form
  const form = document.createElement("form");
  form.classList.add("contribute-form");

  // Exit Button
  const exitButton = document.createElement("div");
  exitButton.textContent = "x";
  exitButton.id = "contribute-exit";
  exitButton.classList.add("exit-btn");
  exitButton.addEventListener("click", closePopup);

  const title = document.createElement("span");
  title.classList.add("form-title");
  title.textContent = "Contribute to the topic";

  // Form Contents
  const textarea = document.createElement("textarea");
  textarea.classList.add("contribute-form-textarea");

  // Button
  const buttonWrapper = document.createElement("div");
  buttonWrapper.classList.add("contribute-form-button-wrapper");

  const button_1 = document.createElement("button");
  button_1.type = "submit";
  button_1.textContent = "Submit";
  button_1.classList.add("contribute-form-button");
  //   button_1.classList.add("contribute-submit-button");

  buttonWrapper.appendChild(button_1);

  form.appendChild(textarea);
  form.appendChild(buttonWrapper);

  div.appendChild(exitButton);
  div.appendChild(title);
  div.appendChild(form);

  main_content.append(div);

  return () => exitButton.removeEventListener("click", closePopup);
}

function contributeButton() {
  document
    .getElementById("question-button")
    ?.addEventListener("click", contributePopup);
  return () =>
    document
      .getElementById("question-button")
      ?.removeEventListener("click", contributePopup);
}

function topicSelect() {
  const topic = document.querySelectorAll(".topic");

  if (!topic) return;

  function navigate() {
    window.location = "/discussion/single.php";
  }

  topic.forEach((element) => element.addEventListener("click", navigate));
  return () => {
    topic.forEach((element) => element.removeEventListener("click", navigate));
  };
}

topicSelect();

contributeButton();

function openPopup() {
  const page = document.querySelector(".topic-page");

  if (document.querySelector(".contribute-wrapper")) return;

  // Popup
  const div = document.createElement("div");
  div.classList.add("contribute-wrapper");

  // Popup Form
  const form = document.createElement("form");
  form.classList.add("contribute-form");

  // Exit Button
  const exitButton = document.createElement("div");
  exitButton.textContent = "x";
  exitButton.id = "contribute-exit";
  exitButton.classList.add("exit-btn");
  exitButton.addEventListener("click", closePopup);

  const title = document.createElement("span");
  title.classList.add("form-title");
  title.textContent = "Start a topic to be Discussed";

  // Form Contents
  const input = document.createElement("input");
  input.classList.add("contribute-form-input");

  // Button
  const buttonWrapper = document.createElement("div");
  buttonWrapper.classList.add("contribute-form-button-wrapper");

  const button_1 = document.createElement("button");
  button_1.type = "submit";
  button_1.textContent = "Submit";
  button_1.classList.add("contribute-form-button");
  //   button_1.classList.add("contribute-submit-button");

  buttonWrapper.appendChild(button_1);

  form.appendChild(input);
  form.appendChild(buttonWrapper);

  div.appendChild(exitButton);
  div.appendChild(title);
  div.appendChild(form);

  page.append(div);

  return () => exitButton.removeEventListener("click", closePopup);
}

function TopicButtonHandler() {
  const button = document.querySelector("#topic-button");

  if (!button) return;

  button.addEventListener("click", openPopup);
  return () => button.removeEventListener("click", openPopup);
}
TopicButtonHandler();
