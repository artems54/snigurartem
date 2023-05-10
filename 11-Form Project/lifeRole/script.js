let openButton = document.getElementById("modal-open")
let background = document.getElementById("modal-back")
let content = document.getElementById("modal-content")
let endBtn = document.getElementById("submit-btn")
let endSubmit = document.getElementById("modal-thanks")
let closeBtn = document.getElementById("close-end")

openButton.addEventListener("click", () => {
    background.style.display = "flex";
})
window.addEventListener("click", (event) => {
    if(event.target == background) {
        background.style.display = "none"
    }
})
endBtn.addEventListener("click", () => {
    background.style.display = "none";
    endSubmit.style.display = "flex"
})
closeBtn.addEventListener("click", () => {
    endSubmit.style.display = "none"
})
window.addEventListener("click", (event) => {
    if(event.target == endSubmit) {
        endSubmit.style.display = "none"
    }    
})