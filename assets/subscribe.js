var subscribeButton = null;
var legalCheckbox = null;
var checkmark = null;

function main() {
    try {
        subscribeButton = document.getElementById("subscribe");
        legalCheckbox = document.getElementById("legals");
        checkmark = document.getElementById("checkmark");

        subscribeButton.addEventListener("click", () => {
            if(legalCheckbox.checked === false && !checkmark.classList.contains("error")) {
                checkmark.classList.add("error")
            }
        })

        legalCheckbox.addEventListener("change", () => {
            checkmark.classList.remove("error")
        })
    } catch (e) {

    }
}

document.addEventListener("DOMContentLoaded", main)
