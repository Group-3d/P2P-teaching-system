function closePopup() {
  const main_content = document.querySelector(".private-study");
  const Popup = document.querySelector(".contribute-wrapper");

  if (!Popup) return;

  Popup.classList.add("wrapper-closer");

  const timeout = setTimeout(() => {
    main_content.removeChild(Popup);
  }, 1000);

  return () => clearTimeout(timeout);
}

function closeFinder() {
  const main_content = document.querySelector(".private-study");
  const Popup = document.querySelector(".finder-wrapper");

  if (!Popup) return;

  Popup.classList.add("wrapper-closer");

  const timeout = setTimeout(() => {
    main_content.removeChild(Popup);
  }, 1000);

  return () => clearTimeout(timeout);
}

function contributePopup() {
  const main_content = document.querySelector(".private-study");

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
  title.textContent = "Start to the topic";

  // Form Contents

  const input = document.createElement("input");
  input.classList.add("contribute-form-input");
  input.placeholder = "Title";

  const textarea = document.createElement("textarea");
  textarea.classList.add("contribute-form-textarea");
  textarea.placeholder = "Content";

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
    .getElementById("study-button")
    .addEventListener("click", contributePopup);
  return () =>
    document
      .getElementById("study-button")
      .removeEventListener("click", contributePopup);
}

function findFriend() {
  const main_content = document.querySelector(".private-study");

  if (document.querySelector(".contribute-wrapper")) {
    closePopup();
  }

  if (document.querySelector(".finder-wrapper")) {
    closeFinder();
  }

  // Popup
  const div = document.createElement("div");
  div.classList.add("contribute-wrapper");
  div.classList.add("finder-wrapper");

  // Popup Form
  const form = document.createElement("form");
  form.classList.add("contribute-form");

  // Exit Button
  const exitButton = document.createElement("div");
  exitButton.textContent = "x";
  exitButton.id = "contribute-exit";
  exitButton.classList.add("exit-btn");
  exitButton.addEventListener("click", closeFinder);

  const title = document.createElement("span");
  title.classList.add("form-title");
  title.textContent = "Find a study Partner";

  // Form Contents

  const input = document.createElement("input");
  input.classList.add("contribute-form-input");
  input.placeholder = "Title";

  // Button
  const buttonWrapper = document.createElement("div");
  buttonWrapper.classList.add("contribute-form-button-wrapper");

  const button_1 = document.createElement("button");
  button_1.type = "submit";
  button_1.textContent = "Find";
  button_1.classList.add("contribute-form-button");
  //   button_1.classList.add("contribute-submit-button");

  buttonWrapper.appendChild(button_1);

  form.appendChild(input);
  form.appendChild(buttonWrapper);

  div.appendChild(exitButton);
  div.appendChild(title);
  div.appendChild(form);

  main_content.append(div);

  return () => exitButton.removeEventListener("click", closeFinder);
}

function finder() {
  document.getElementById("find-partner").addEventListener("click", findFriend);
  return () => document.getElementById("find-partner", findFriend);
}

contributeButton();
finder();
