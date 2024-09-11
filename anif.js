const images = ["mari1.png", "mari2.png", "mari3.png", "mari4.png", "mari5.png", "mari6.png", "mari7.png"];
let currentIndex = 0;

function changeImage() {
    currentIndex = (currentIndex + 1) % images.length;
    document.querySelector('#image-slider img').src = images[currentIndex];
}

setInterval(changeImage, 3000); // Change d'image toutes les 3 secondes

FedaPay.init('#pay-btn', {
    public_key: 'pk_live_DqiinWnK_sbfPKsyG3_Zjx3N',
    transaction: {
        amount: 2000,
        currency : {"iso" : "XOF"},
        callback_url : "https://maplateforme.com/callback",
        description: "souhaiter joyeux anniversire",
    },
    customer: {
        email: "djabomariama8@gmail.com",
        firstname: "MARIAMA",
        lastname: "DJABO",
    },
    on_complete: function(data) {
        if (data.status === 'approved') {
            document.getElementById('success-message').style.display = 'block';
        } else {
            alert('Le paiement n\'a pas été approuvé. Veuillez réessayer.');
        }
    }
});
