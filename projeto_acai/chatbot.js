const abrirChat = document.getElementById("abrirChat");
const chatbot = document.getElementById("chatbot");

abrirChat.onclick = () => {

    if(chatbot.style.display === "none"){

        chatbot.style.display = "block";

    }else{

        chatbot.style.display = "none";

    }

}