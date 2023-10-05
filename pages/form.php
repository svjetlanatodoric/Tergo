<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

    <div class="form-section" id="contact-us">

        <div class="form">
            <div class="form-header">
                <p class="form-title" id="contact-anchor">FEEL FREE TO CONTACT US!</p>
            </div>
            <form id="contactForm" method="POST" action="<?php echo filter_var($_SERVER['PHP_SELF'].'#contact-us'); ?>">
                <div class="name-container">
                    <input type="text" class="name" name="name" id="name" placeholder="Your name: " asterisk="*" required>
                </div>

                <div class="email-container">
                    <input type="email" id="email" name="email" class="email" placeholder="Your e-mail:" required>

                </div>
                <div class="textarea-container">
                    <textarea id="msg" class="msg" name="msg" placeholder="Enter message:"></textarea>
                </div>
                <input type="submit" id="submit" name="submit" value="SEND!">
            </form>
            <?php

            if (isset($_POST['submit'])) {
                ini_set('SMTP', 'tergo.biz');
                ini_set('smtp_port', 25);
                $name = htmlspecialchars($_POST['name']);
                $sender = htmlspecialchars($_POST['email']);
                $to = "info@tergo.biz";
                $headers  = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
                $headers  .= "From: " . $sender . "\r\n";
                $subject = "Message from " . $name;
                $message = $_POST["msg"];

                if (@mail($to, $subject, $message, $headers)) {
                    echo "<p style='font-family:roboto; margin-bottom:10px;'>Message sent successfully!</p>";
                    }
                
                }

            ?>
        </div>
    </div>
    <script src="../js/form.js"></script>
</body>