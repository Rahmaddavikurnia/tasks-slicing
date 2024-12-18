document.querySelectorAll('.step-header').forEach(header => {
    header.addEventListener('click', () => {
        const step = header.parentElement;
        const isActive = step.classList.contains('active');
        
        document.querySelectorAll('.process-step').forEach(s => {
            s.classList.remove('active');
            const btn = s.querySelector('.toggle-btn');
            btn.textContent = '+';
        });
        if (!isActive) {
            step.classList.add('active');
            const toggleBtn = step.querySelector('.toggle-btn');
            toggleBtn.textContent = '−';
        }
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.testimonials-container');
    const slides = document.querySelectorAll('.testimonial-card');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentSlide = 0;

    function goToSlide(index) {
        currentSlide = index;
        container.style.transform = `translateX(-${currentSlide * 100}%)`;

        dots.forEach((dot, idx) => {
            dot.classList.toggle('active', idx === currentSlide);
        });
    }

    nextBtn.addEventListener('click', () => {
        if (currentSlide >= slides.length - 1) {
            goToSlide(0);
        } else {
            goToSlide(currentSlide + 1);
        }
    });

    prevBtn.addEventListener('click', () => {
        if (currentSlide <= 0) {
            goToSlide(slides.length - 1);
        } else {
            goToSlide(currentSlide - 1);
        }
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
        });
    });

    goToSlide(0);
});


document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', function() {
            const faqItem = this.parentElement;
            const answer = faqItem.querySelector('.faq-answer');
            const toggleBtn = this.querySelector('.toggle-btn');
            const isActive = faqItem.classList.contains('active');
            
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
                item.querySelector('.faq-answer').style.display = 'none';
                item.querySelector('.toggle-btn').textContent = '+';
            });

            if (!isActive) {
                faqItem.classList.add('active');
                answer.style.display = 'block';
                toggleBtn.textContent = '−';
            }
        });
    });
    document.querySelectorAll('.toggle-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const faqItem = this.closest('.faq-item');
            const answer = faqItem.querySelector('.faq-answer');
            const isActive = faqItem.classList.contains('active');
            
            // Tutup semua FAQ items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
                item.querySelector('.faq-answer').style.display = 'none';
                item.querySelector('.toggle-btn').textContent = '+';
            });

            // Toggle item yang diklik
            if (!isActive) {
                faqItem.classList.add('active');
                answer.style.display = 'block';
                this.textContent = '−';
            }
        });
    });
});
