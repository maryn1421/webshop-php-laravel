console.log("im in")





const removeButtons = document.querySelectorAll("button");



removeButtons.forEach(button => {
    button.addEventListener('click', ()=> {
    })
})

console.log(removeButtons)


window.onload = () => {
    document.querySelectorAll('.remove__button').forEach(item => {
        item.addEventListener("click", (e) => {
            item.disabled = "true";
            console.log("clicked on it")
        })
    })
};
