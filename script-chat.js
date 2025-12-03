function selectChat(element) {
  document.querySelectorAll(".chat-item").forEach((item) => item.classList.remove("active"))
  element.classList.add("active")

  const chatHeader = document.querySelector(".chat-header-info h3")
  const clientName = element.querySelector(".chat-info h4").textContent
  chatHeader.textContent = clientName
}

function sendMessage() {
  const input = document.getElementById("messageInput")
  const text = input.value.trim()

  if (!text) return

  const messagesContainer = document.getElementById("chatMessages")

  const messageDiv = document.createElement("div")
  messageDiv.className = "message message-sent"

  messageDiv.innerHTML = `
    <div class="message-content">
      <p>${text}</p>
      <span class="message-time">${new Date().toLocaleTimeString("pt-BR", { hour: "2-digit", minute: "2-digit" })}</span>
    </div>
  `

  messagesContainer.appendChild(messageDiv)
  messagesContainer.scrollTop = messagesContainer.scrollHeight

  input.value = ""
  input.focus()
}

function handleKeyPress(event) {
  if (event.key === "Enter" && !event.shiftKey) {
    event.preventDefault()
    sendMessage()
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const messageInput = document.getElementById("messageInput")
  if (messageInput) {
    messageInput.focus()
  }
})