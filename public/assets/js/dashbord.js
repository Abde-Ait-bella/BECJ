var button = document.querySelectorAll('.box .button');
var div_popup = document.querySelector('.overlay');

window.addEventListener('DOMContentLoaded', function () {
    div_popup.style['visibility'] = "hidden";
    div_popup.style['opacity'] = 0;
});

button.forEach(btn => {
    btn.addEventListener('click', (e) => {
        var input = document.querySelector('.icon-input.active');
        if (input)
            input.classList.remove('active');
        e.target.parentElement.previousElementSibling.children[0].classList.add('active');
        div_popup.style['visibility'] = null;
        div_popup.style['opacity'] = null;
    })
})

div_popup.addEventListener('click', function (e) {
    e.currentTarget.style['visibility'] = 'hidden';
    e.currentTarget.style['opacity'] = '0';
    console.log(e.currentTarget);
})

var icons = document.querySelectorAll('.btn-icons');
icons.forEach(icn => {
    icn.addEventListener('click', (e) => {
        console.log(e.currentTarget.textContent.trim());
        var value = e.currentTarget.textContent.trim();
        var inputActive = document.querySelector('.icon-input.active');
        inputActive.value = value;
        console.log(inputActive);
    })
});
