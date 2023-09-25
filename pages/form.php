
<div class="form-section">
    <div class="form-header">
        <div class="line-and-title">
            <p class="form-title" id="contact-anchor">KONTAKTIRAJTE NAS!</p>
            <div class="line form-line"></div>
        </div>
    </div>
    <div class="form">
        <form id="contactForm" method="POST" action="">
            <div class="name-container">
                <input type="text" class="name" name="name" id="name" placeholder="VAŠE IME " asterisk="*" required>
            </div>

            <div class="email-container">
                <input type="email" id="email" name="email" class="email" placeholder="VAŠ MAIL" required>

            </div>
            <div class="textarea-container">
                <textarea id="msg" class="msg" name="msg" placeholder="PORUKA:"></textarea>
            </div>
            <input type="submit" value="POŠALJI!">
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
