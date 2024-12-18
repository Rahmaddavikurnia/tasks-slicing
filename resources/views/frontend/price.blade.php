@include('master.header')
<body>
    @include('master.navbar')

    <section class="pricing-section">
        <div class="pricing-header">
            <h1>Pricing</h1>
            <p>Elevate Your Online Presence: Competitive Pricing<br>for Exceptional Results</p>
        </div>

        <div class="pricing-cards">
            <div class="price-card">
                <h3>Basic Plan</h3>
                <div class="price">$500<span>/month</span></div>
                <button class="btn-primary">Get Started</button>
                <button class="btn-secondary">Request a quote</button>
                <ul class="features">
                    <li>Website optimization</li>
                    <li>Social media setup and management (1 platform)</li>
                    <li>Monthly progress report</li>
                    <li>Email support</li>
                    <li>Basic competitor analysis</li>
                    <li>Initial SEO audit</li>
                </ul>
            </div>

            <div class="price-card featured">
                <h3>Pro Plan</h3>
                <div class="popular">Popular</div>
                <div class="price">$1000<span>/month</span></div>
                <button class="btn-primary">Get Started</button>
                <button class="btn-secondary">Request a quote</button>
                <ul class="features">
                    <li>Includes all from the Basic Plan</li>
                    <li>Social media setup and management (up to 2 platforms)</li>
                    <li>PPC ad campaign management</li>
                    <li>Email and phone support</li>
                    <li>On-page SEO improvements</li>
                    <li>Monthly content recommendations</li>
                </ul>
            </div>

            <div class="price-card">
                <h3>Elite Plan</h3>
                <div class="price">$2000<span>/month</span></div>
                <button class="btn-primary">Get Started</button>
                <button class="btn-secondary">Request a quote</button>
                <ul class="features">
                    <li>Includes all from the Pro Plan</li>
                    <li>Website design and development</li>
                    <li>Comprehensive SEO strategy</li>
                    <li>Social media setup and management (up to 3 platforms)</li>
                    <li>Content marketing strategy and implementation</li>
                    <li>In-depth analytics and reporting</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <h2 class="faq-title">Frequently Asked <br> Questions</h2>
        
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Are there any additional fees or charges that may apply?</h3>
                    <button class="toggle-btn">+</button>
                </div>
                <div class="faq-answer">
                    <p>Our pricing plans include a wide range of digital marketing services, including website design and development, SEO, PPC advertising, social media marketing, content marketing, and more. We also offer custom packages that can be tailored to meet the specific needs of your business.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can I change or cancel my plan at any time?</h3>
                    <button class="toggle-btn">+</button>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can modify or cancel your plan at any time with a 30-day notice. We maintain flexible terms to ensure our services align with your business needs.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do you offer a free trial or consultation?</h3>
                    <button class="toggle-btn">+</button>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you bill and invoice your clients?</h3>
                    <button class="toggle-btn">+</button>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Are your services guaranteed to deliver results?</h3>
                    <button class="toggle-btn">+</button>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do you offer contract-based or monthly retainer-based pricing?</h3>
                    <button class="toggle-btn">+</button>
                </div>
            </div>
        </div>
    </section>

    @include('master.footer')

    <script src="{{asset('tasksslicing/js/app.js')}}"></script>
</body>
</html>