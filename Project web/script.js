//
const navSearchBtn = document.querySelector(".nav__search");
const headerSearch = document.querySelector(".header__search");
const headerSearchCloseBtn = document.querySelector(".header__search-close");
//function
//searchform
const searchForm = function () {
  headerSearch.classList.toggle("reveal");
};

const closeSearchForm = function (e) {
  e.preventDefault();
  headerSearch.classList.remove("reveal");
};

navSearchBtn.addEventListener("click", searchForm);
closeSearchForm.addEventListener("click", (e) => {
  e.preventDefault();
  headerSearch.classList.remove("reveal");
});
