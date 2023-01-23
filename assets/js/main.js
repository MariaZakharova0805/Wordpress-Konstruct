let input = document.querySelector("#input");
input.addEventListener("click", function () {
  input.value = "";
});

//Если в тексте будет слово Konstruct, то оно подсветиться синим
let text = document.querySelector(".about__h2");
text.innerHTML = text.innerHTML.replace(
  /Konstruct/gi,
  '<span class="blue">Konstruct</span>'
);

//Contact form

const button = document.querySelector(".feedback_button");
const nav = document.querySelector(".nav");

button.addEventListener("click", () => {
  // при клике на кнопку
  nav.classList.toggle("nav_active");
});

window.addEventListener("click", (e) => {
  // при клике в любом месте окна браузера
  const target = e.target;
  if (!target.closest(".nav") && !target.closest(".feedback_button")) {
    // если этот элемент или его родительские элементы не окно навигации и не кнопка
    nav.classList.remove("nav_active"); // то закрываем окно навигации, удаляя активный класс
  }
});

// data-name="your-name"
// data-name= your-email
// data-name=your-tel
// data-name="your-text"
// class send-button
