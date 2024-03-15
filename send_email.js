document.addEventListener('DOMContentLoaded', function() {
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const submit = document.getElementById('submit');
  
    submit.addEventListener('click', function(e) {
        e.preventDefault();
  
        let emailBody = `
        <h1>First Name: </h1>${name.value}
        <br>
        <h1>Email: </h1>${email.value}
        <br>
        `; 
  
        Email.send({
            SecureToken: "c4b30703-0898-4a81-a574-29a27db8a3bb",
            To: 'tomnoezra@gmail.com',
            From: email.value,
            Subject: "Form Submission",
            Body: emailBody
        }).then(
            message => {
                alert("Email sent successfully!");
                console.log(message);
            },
            error => {
                console.error("Error occurred while sending email:", error);
                alert("Failed to send email. Please try again later.");
            }
        );
    });
});
