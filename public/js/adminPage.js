console.log("im in")


const removeButtons = document.querySelectorAll("button");


removeButtons.forEach(button => {
    button.addEventListener('click', () => {
    })
})

console.log(removeButtons)


window.onload = () => {
    document.querySelectorAll('.remove__button').forEach(item => {
        item.addEventListener("click", (e) => {
            item.disabled = "true";
            console.log(item.parentElement.dataset.id)

            const http = new XMLHttpRequest()
            http.open('POST', '/admin/product/' + item.parentElement.dataset.id)
            http.send() // Make sure to stringify
            http.onload = function () {
            }
        })
    })
};
