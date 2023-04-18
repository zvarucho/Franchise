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
ClassicEditor.create( document.querySelector( '#editor' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
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