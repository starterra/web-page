var subscribeButton = null;
var legalCheckbox = null;
var checkmark = null;

function main() {
    subscribeButton = document.getElementById("subscribe");
    legalCheckbox = document.getElementById("legals");
    checkmark = document.getElementById("checkmark");

    console.log(subscribeButton, legalCheckbox, checkmark)

    subscribeButton.addEventListener("click", () => {
        if(legalCheckbox.checked === false && !checkmark.classList.contains("error")) {
            checkmark.classList.add("error")
        }
    })

    legalCheckbox.addEventListener("change", () => {
        checkmark.classList.remove("error")
    })
}

document.addEventListener("DOMContentLoaded", main)
