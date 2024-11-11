
document.getElementById("contact-form").addEventListener("submit", function(event){
    event.preventDefault(); 
    var emailParams = {
        email: document.getElementById("email").value,
        name: document.getElementById("name").value,
        assunto: document.querySelector('input[name="assunto"]:checked').value,
        mensagem: document.getElementById("mensagem").value
    };

    
    emailjs.send("service_crovo2p", "template_6osv7fs", emailParams)
    .then(function(response) {
        alert("E-mail enviado com sucesso!");
        console.log("Sucesso!", response.status, response.text);
    }, function(error) {
        alert("Falha ao enviar o e-mail.");
        console.log("Erro:", error);
    });
});
