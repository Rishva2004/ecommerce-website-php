document.addEventListener('DOMContentLoaded', () => {
	/******************************************************************/
	const storeNotice = document.getElementById('storeNotice');
	if (storeNotice) {
        storeNotice.addEventListener('click', () => {
            storeNotice.style.display = 'none'; // Hide the notice
        });
    }
	/******************************************************************/
	// JavaScript for toggling description visibility
    const detailButtons = document.querySelectorAll('.more-details');

        detailButtons.forEach(button => {
            button.addEventListener('click', () => {
                const detailsSection = button.nextElementSibling;
                detailsSection.style.display = detailsSection.style.display === 'none' ? 'block' : 'none';
            });
        });
	/******************************************************************/
	const questionInput = document.getElementById('question');
    const charCountDisplay = document.getElementById('charCount');
    const maxChars = 100;

    questionInput.addEventListener('input', function() {
        const charCount = questionInput.value.length;
        const remainingChars = maxChars - charCount;
        charCountDisplay.textContent = `${remainingChars}/${maxChars} characters remaining`;

        if (remainingChars < 0) {
            charCountDisplay.classList.add('exceed-limit');
        } else {
            charCountDisplay.classList.remove('exceed-limit');
        }
    });	
	/******************************************************************/
    function validateForm() {
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const questionInput = document.getElementById('question');

        if (nameInput.value.trim() === '') {
            alert('Please enter your name.');
            return false;
        }

        if (emailInput.value.trim() === '') {
            alert('Please enter your email address.');
            return false;
        }

        if (questionInput.value.trim() === '') {
            alert('Please enter your question.');
            return false;
        }

        return true;
    }

    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        if (!validateForm()) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
   
});
