// navigasi open
const hamburger = document.querySelector("header nav .hamburger");
const navMenu = document.querySelector("header nav ul");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
});
//navigasi close

//emailJS
function sendMail() {
    var params = {
        from_name : document.getElementById("fullName").value,
        email_id : document.getElementById("emailId").value,
        message : document.getElementById("message").value
    }
    emailjs.send("service_1ktdgh8", "template_en8r2wc", params).then(response =>{
        alert("Thanks for your message");
        window.location.href='index.html#';
    }) 

}