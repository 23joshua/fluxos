function faq() {
    let faq = document.querySelectorAll(".faq-container .faq-content");
    let span = document.querySelectorAll("span")

    for (let i = 0; i < faq.length; i++) {
        faq[i].addEventListener("click", () => {
            faq[i].classList.toggle("faq_active");
        });
    }
}
faq();