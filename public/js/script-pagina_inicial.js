// Navegação entre seções
function showSection(sectionId) {
  // Esconde todas as seções
  const sections = document.querySelectorAll(".content-section")
  sections.forEach((section) => {
    section.classList.remove("active")
  })

  // Remove active de todos os nav items
  const navItems = document.querySelectorAll(".nav-item")
  navItems.forEach((item) => {
    item.classList.remove("active")
  })

  // Mostra a seção selecionada
  const targetSection = document.getElementById(sectionId)
  if (targetSection) {
    targetSection.classList.add("active")
  }

  // Adiciona active ao nav item clicado
  event.target.closest(".nav-item").classList.add("active")
}

// Filtrar serviços por categoria
function filterServices(category) {
  const cards = document.querySelectorAll(".service-card")
  const buttons = document.querySelectorAll(".filter-btn")

  // Atualiza botões ativos
  buttons.forEach((btn) => {
    btn.classList.remove("active")
  })
  event.target.classList.add("active")

  // Filtra cards
  cards.forEach((card) => {
    if (category === "todos") {
      card.style.display = "block"
    } else {
      const cardCategory = card.getAttribute("data-category")
      card.style.display = cardCategory === category ? "block" : "none"
    }
  })
}

// Aceitar serviço
function acceptService(serviceName) {
  if (confirm(`Deseja aceitar o serviço: ${serviceName}?`)) {
    alert(`Parabéns! Você aceitou o serviço: ${serviceName}\nO cliente será notificado.`)
    // Aqui você adicionaria a lógica para enviar ao backend
  }
}

// Enviar mensagem no chat
function sendMessage() {
  const input = document.getElementById("messageInput")
  const message = input.value.trim()

  if (message) {
    const chatMessages = document.getElementById("chatMessages")
    const now = new Date()
    const time = now.getHours().toString().padStart(2, "0") + ":" + now.getMinutes().toString().padStart(2, "0")

    const messageHtml = `
      <div class="message message-sent">
        <div class="message-content">
          <p>${message}</p>
          <span class="message-time">${time}</span>
        </div>
      </div>
    `

    chatMessages.insertAdjacentHTML("beforeend", messageHtml)
    chatMessages.scrollTop = chatMessages.scrollHeight
    input.value = ""
  }
}

// Enviar mensagem com Enter
function handleKeyPress(event) {
  if (event.key === "Enter") {
    sendMessage()
  }
}

// Abrir chat específico
function openChat(userName) {
  const chatItems = document.querySelectorAll(".chat-item")
  chatItems.forEach((item) => {
    item.classList.remove("active")
  })
  event.currentTarget.classList.add("active")

  // Atualiza o header do chat
  const chatHeader = document.querySelector(".chat-header-info h3")
  if (chatHeader) {
    chatHeader.textContent = userName
  }

  // Aqui você carregaria as mensagens específicas desse chat
  console.log(`Abrindo chat com: ${userName}`)
}

// Submeter formulário de serviço
function submitService(event) {
  event.preventDefault()

  const serviceName = document.getElementById("serviceName").value
  const serviceCategory = document.getElementById("serviceCategory").value
  const servicePrice = document.getElementById("servicePrice").value

  alert(
    `Serviço cadastrado com sucesso!\n\nTítulo: ${serviceName}\nCategoria: ${serviceCategory}\nValor: R$ ${servicePrice}\n\nAgora aguarde os freelancers se candidatarem!`,
  )

  // Aqui você enviaria os dados para o backend
  event.target.reset()
}

// Inicialização
document.addEventListener("DOMContentLoaded", () => {
  console.log("FreeLance Connect carregado com sucesso!")

  // Define a data mínima para o campo de data como hoje
  const dateInput = document.getElementById("serviceDate")
  if (dateInput) {
    const today = new Date().toISOString().split("T")[0]
    dateInput.setAttribute("min", today)
  }
})
