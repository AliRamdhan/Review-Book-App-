const buttons = document.querySelectorAll(".buttonReply");
const menus = document.querySelectorAll(".menuReply");
const toggles = document.querySelectorAll(".toggleReplyIcon");

buttons.forEach((button, index) => {
    button.addEventListener("click", () => {
        menus[index].classList.toggle("hidden");
        toggles[index].classList.toggle("rotate-180");
    });
});
