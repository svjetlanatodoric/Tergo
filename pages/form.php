
<div class="form-section" id="contact-us">
   
    <div class="form">
    <div class="form-header">
            <p class="form-title" id="contact-anchor">FEEL FREE TO CONTACT US!</p>
        </div>
        <form id="contactForm" method="POST" action="">
            <div class="name-container">
                <input type="text" class="name" name="name" id="name" placeholder="Your name: " asterisk="*" required>
            </div>

            <div class="email-container">
                <input type="email" id="email" name="email" class="email" placeholder="Your e-mail:" required>

            </div>
            <div class="textarea-container">
                <textarea id="msg" class="msg" name="msg" placeholder="Enter message:"></textarea>
            </div>
            <input type="submit" value="SEND!">
            <script>
                const form = document.getElementById("contactForm"); // Assuming you have a form with this ID

                form.addEventListener("submit", function (event) {
                    event.preventDefault();
                    emailjs.init("X76dSkwqPXfGf2t8S");

                    const name = document.getElementById("name").value;
                    const email = document.getElementById("email").value;
                    const message = document.getElementById("msg").value;

                    const templateParams = {
                        name: name,
                        email: email,
                        message: message
                    };

                    // Call emailjs.send with templateParams to send the email
                    emailjs.send("service_ue7zkpx", "template_izs0m5k", templateParams)
                        .then(function (response) {
                            alert("Email sent successfully!");
                            console.log(email)
                        }, function (error) {
                            alert("Email sending failed. Please try again later.");
                            console.error("Email.js error:", error);
                        });
                });
            </script>
        </form>
    </div>
    </div>

