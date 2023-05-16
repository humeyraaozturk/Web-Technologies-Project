const arrows = document.querySelectorAll(".arrow");
const photo = document.querySelectorAll(".photo-list");
const slide = document.querySelectorAll(".slide");


arrows.forEach((arrow, i) => {
    const widthRatio = Math.floor(window.innerWidth / 300)
  let clickCounter = 0;
  const imageItem = photo[i].querySelectorAll("img").length;
  arrow.addEventListener("click", function () {
    clickCounter++;
    if (imageItem - (4 + clickCounter) + (4-widthRatio) >= 0) {
      photo[i].style.transform = `translate(${
        photo[i].computedStyleMap().get("transform")[0].x.value - 300
      }px)`;
    } else {
      photo[i].style.transform = "translateX(0)";
      clickCounter = 0;
    }
  });
});

const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');

loginLink.addEventListener('click',()=> {
  wrapper.classList.remove('active');
})