let selectedServices = JSON.parse(localStorage.getItem("selectedServices") || "[]")

const searchInput = document.getElementById("searchInput")
const filterChips = document.getElementById("filterChips")
const cartButton = document.getElementById("cartButton")
const cartCount = document.getElementById("cartCount")
const modal = document.getElementById("modal")
const modalList = document.getElementById("modalList")
const modalClose = document.getElementById("modalClose")
const modalHire = document.getElementById("modalHire")

function extractServicesFromDOM() {
  const cards = document.querySelectorAll(".service-card")
  const services = []
  cards.forEach((card) => {
    services.push({
      id: Number(card.dataset.id),
      title: card.querySelector(".service-title").textContent,
      category: card.dataset.category,
      price: Number.parseFloat(
        card
          .querySelector(".price-tag")
          .textContent.replace(/[^\d,]/g, "")
          .replace(",", "."),
      ),
      description: card.querySelector(".service-description").textContent,
      client: card.querySelector(".client-info").textContent,
    })
  })
  return services
}

const servicesData = extractServicesFromDOM()

function filterServices() {
  const searchTerm = searchInput.value.toLowerCase()
  const activeChip = filterChips.querySelector(".chip-button.active")
  const selectedCategory = activeChip.dataset.category

  const params = new URLSearchParams()
  if (searchTerm) params.append("busca", searchTerm)
  if (selectedCategory) params.append("categoria", selectedCategory)

  const queryString = params.toString()
  const newUrl = queryString ? `?${queryString}` : window.location.pathname
  window.history.pushState({}, "", newUrl)

  const filtered = servicesData.filter((service) => {
    const matchesSearch =
      service.title.toLowerCase().includes(searchTerm) ||
      service.description.toLowerCase().includes(searchTerm) ||
      service.client.toLowerCase().includes(searchTerm)
    const matchesCategory = !selectedCategory || service.category === selectedCategory
    return matchesSearch && matchesCategory
  })

  updateCardVisibility(filtered)
}

function updateCardVisibility(filtered) {
  const allCards = document.querySelectorAll(".service-card")
  let visibleCount = 0

  allCards.forEach((card) => {
    const cardId = Number(card.dataset.id)
    const shouldShow = filtered.some((s) => s.id === cardId)
    card.style.display = shouldShow ? "" : "none"
    if (shouldShow) visibleCount++
  })

  const emptyState = document.getElementById("emptyState")
  if (emptyState) {
    emptyState.style.display = visibleCount === 0 ? "block" : "none"
  }
  attachCardListeners()
}

function attachCardListeners() {
  document.querySelectorAll(".select-service-btn").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      const id = Number(e.target.dataset.id)
      toggleSelectService(id, btn)
    })
  })
}

function toggleSelectService(id, btn) {
  if (selectedServices.includes(id)) {
    selectedServices = selectedServices.filter((x) => x !== id)
  } else {
    selectedServices.push(id)
  }

  localStorage.setItem("selectedServices", JSON.stringify(selectedServices))
  updateCartUI()
  updateButtonState(id, btn)
}

function updateButtonState(id, btn) {
  const isSelected = selectedServices.includes(id)
  btn.textContent = isSelected ? "Selecionado" : "Aceitar"
  btn.disabled = isSelected
}

function updateCartUI() {
  cartCount.textContent = selectedServices.length
}

function renderModal() {
  modalList.innerHTML = ""

  if (selectedServices.length === 0) {
    modalList.innerHTML = '<p style="text-align: center; color: #888;">Nenhum serviço selecionado.</p>'
    return
  }

  selectedServices.forEach((id) => {
    const service = servicesData.find((s) => s.id === id)
    if (!service) return

    const item = document.createElement("div")
    item.className = "modal-item"
    item.innerHTML = `
      <div class="modal-item-info">
        <div class="modal-item-name">${service.title}</div>
        <div class="modal-item-category">${service.category.charAt(0).toUpperCase() + service.category.slice(1)}</div>
      </div>
      <div class="modal-item-right">
        <div class="modal-item-price">R$ ${service.price.toLocaleString("pt-BR", { minimumFractionDigits: 2 })}</div>
        <button class="modal-btn modal-btn-remove remove-service-btn" data-id="${id}">Remover</button>
      </div>
    `
    modalList.appendChild(item)
  })

  document.querySelectorAll(".remove-service-btn").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      const id = Number(e.target.dataset.id)
      selectedServices = selectedServices.filter((x) => x !== id)
      localStorage.setItem("selectedServices", JSON.stringify(selectedServices))
      updateCartUI()

      const cardBtn = document.querySelector(`.select-service-btn[data-id="${id}"]`)
      if (cardBtn) {
        cardBtn.textContent = "Aceitar"
        cardBtn.disabled = false
      }

      renderModal()
    })
  })
}

searchInput.addEventListener("input", filterServices)

filterChips.querySelectorAll(".chip-button").forEach((chip) => {
  chip.addEventListener("click", (e) => {
    filterChips.querySelectorAll(".chip-button").forEach((c) => c.classList.remove("active"))
    e.target.classList.add("active")
    filterServices()
  })
})

cartButton.addEventListener("click", () => {
  renderModal()
  modal.classList.add("active")
})

modalClose.addEventListener("click", () => {
  modal.classList.remove("active")
})

modalHire.addEventListener("click", () => {
  if (selectedServices.length === 0) {
    alert("Nenhum serviço foi selecionado.")
    return
  }

  alert(`Proposta enviada para ${selectedServices.length} serviço(s)!`)
  selectedServices = []
  localStorage.setItem("selectedServices", JSON.stringify(selectedServices))
  updateCartUI()
  renderModal()
  modal.classList.remove("active")
  location.reload()
})

modal.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.classList.remove("active")
  }
})

updateCartUI()
filterServices()
