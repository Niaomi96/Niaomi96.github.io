const openSignatureButtons = document.querySelectorAll('[data-sign-target]')
const closeSignatureButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')

openSignatureButtons.forEach(button => {
	button.addEventListener('click', () => {
		const signature = document.querySelector(button.dataset.signTarget)
		openSignature(signature)
		
	})
	
})

closeSignatureButtons.forEach(button => {
	button.addEventListener('click', () => {
		const signature = button.closest('.signature')
		closeSignature(signature)
		
	})
	
})

function openSignature (signature) {
	if (signature == null) return
	signature.classList.add('active')
	overlay.classList.add('active')
}

function closeSignature (signature) {
	if (signature == null) return
	signature.classList.remove('active')
	overlay.classList.remove('active')
}