"use strict"

// Burger-menu
document.addEventListener('click', documentClick);

function documentClick(e) {
    const targetItem = e.target;

    if (targetItem.closest('.icon-menu')){
        document.documentElement.classList.toggle('menu-open');

    }

}
//FAQ SECTION
var acc = document.getElementsByClassName("accordion");
var i;
var len = acc.length;
for (i = 0; i < len; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

// Account-menu
// const dropdown = document.querySelector('.dropdown');
// const dropdownContent = document.querySelector('.dropdown-content');

// const adminBtn = document.createElement('a');
// adminBtn.href = '#';
// adminBtn.innerText = 'Адмін панель';
// dropdownContent.appendChild(adminBtn);

// const logoutBtn = document.createElement('a');
// logoutBtn.href = '#';
// logoutBtn.innerText = 'Вихід';
// dropdownContent.appendChild(logoutBtn);

// dropdown.addEventListener('mouseover', function() {
//   dropdownContent.style.display = 'block';
// });

// dropdown.addEventListener('mouseout', function() {
//   dropdownContent.style.display = 'none';
// });