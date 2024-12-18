@include('master.header')
<body>

    @include('master.navbar')

    <main class="hero">
        <div class="hero-content">
            <h1>Navigating the digital landscape for success</h1>
            <p>Our digital marketing agency helps businesses grow and succeed online through a range of services including SEO, PPC, social media marketing, and content creation.</p>
            <button class="consultation-btn">Book a consultation</button>
        </div>
        <div class="hero-image">
            <img src="{{asset('tasksslicing/images/Illustration.png')}}" alt="Digital Marketing Illustration">
        </div>
    </main>

    <section class="brand-logos">
        <div class="logo-container">
            <img src="{{asset('tasksslicing/images/logo/amazon.png')}}" alt="Amazon logo">
            <img src="{{asset('tasksslicing/images/logo/dribble.png')}}" alt="Dribble logo">
            <img src="{{asset('tasksslicing/images/logo/hubspot.png')}}" alt="HubSpot logo">
            <img src="{{asset('tasksslicing/images/logo/notion.png')}}" alt="Notion logo">
            <img src="{{asset('tasksslicing/images/logo/netflix.png')}}" alt="Netflix logo">
            <img src="{{asset('tasksslicing/images/logo/zoom.png')}}" alt="Zoom logo">
        </div>
    </section>

    <section class="services">
        <div class="services-header">
            <div class="title-background">
                <h2>Services</h2>
            </div>
            <p class="services-description">At our digital marketing agency, we offer a range of services to help businesses grow and succeed online. These services include:</p>
        </div>
        
        <div class="services-grid">
            <!-- Search Engine Optimization -->
            <div class="service-card light">
                <div class="service-content">
                    <div class="service-title">
                        <span>Search engine</span>
                        <span>optimization</span>
                    </div>
                    <a href="#" class="learn-more">
                        <div class="learn-more-icon">
                            <img src="{{asset('tasksslicing/images/icon/Icon.png')}}" alt="Learn more">
                        </div>  
                        Learn more
                    </a>
                </div>
                <div class="service-image">
                    <img src="{{asset('tasksslicing/images/logo/service/tokyo.png')}}" alt="SEO illustration">
                </div>
            </div>

            <!-- Pay Per Click -->
            <div class="service-card accent">
                <div class="service-content">
                    <div class="service-title">
                        <span>Pay-per-click</span>
                        <span>advertising</span>
                    </div>
                    <a href="#" class="learn-more">
                        <div class="learn-more-icon">
                            <img src="{{asset('tasksslicing/images/icon/Icon.png')}}" alt="Learn more">
                        </div>
                        Learn more
                    </a>
                </div>
                <div class="service-image">
                    <img src="{{asset('tasksslicing/images/logo/service/pay.png')}}" alt="PPC illustration">
                </div>
            </div>
            <div class="service-card dark">
                <div class="service-content">
                    <div class="service-title">
                        <span>Social Media</span>
                        <span>Marketing</span>
                    </div>
                    <a href="#" class="learn-more">
                        <div class="learn-more-icon">
                            <img src="{{asset('tasksslicing/images/icon/icon2.png')}}" alt="Learn more">
                        </div>
                        Learn more
                    </a>
                </div>
                <div class="service-image">
                    <img src="{{asset('tasksslicing/images/logo/service/social.png')}}" alt="Social Media illustration">
                </div>
            </div>
            <div class="service-card light">
                <div class="service-content">
                    <div class="service-title">
                        <span>Email</span>
                        <span>Marketing</span>
                    </div>
                    <a href="#" class="learn-more">
                        <div class="learn-more-icon">
                            <img src="{{asset('tasksslicing/images/icon/Icon.png')}}" alt="Learn more">
                        </div>
                        Learn more
                    </a>
                </div>
                <div class="service-image">
                    <img src="{{asset('tasksslicing/images/logo/service/email.png')}}" alt="Email Marketing illustration">
                </div>
            </div>
            <div class="service-card accent">
                <div class="service-content">
                    <div class="service-title">
                        <span>Content</span>
                        <span>Creation</span>
                    </div>
                    <a href="#" class="learn-more">
                        <div class="learn-more-icon">
                            <img src="{{asset('tasksslicing/images/icon/Icon.png')}}" alt="Learn more">
                        </div>
                        Learn more
                    </a>
                </div>
                <div class="service-image">
                    <img src="{{asset('tasksslicing/images/logo/service/content.png')}}" alt="Content Creation illustration">
                </div>
            </div>
            <div class="service-card dark">
                <div class="service-content">
                    <div class="service-title">
                        <span>Analytics and</span>
                        <span>Tracking</span>
                    </div>
                    <a href="#" class="learn-more">
                        <div class="learn-more-icon">
                            <img src="{{asset('tasksslicing/images/icon/icon2.png')}}" alt="Learn more">
                        </div>
                        Learn more
                    </a>
                </div>
                <div class="service-image">
                    <img src="{{asset('tasksslicing/images/logo/service/analy.png')}}" alt="Analytics illustration">
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-container">
            <div class="cta-content">
                <h2>Let's make things happen</h2>
                <p>Contact us today to learn more about how our digital marketing services can help your business grow and succeed online.</p>
                <button class="proposal-btn">Get your free proposal</button>
            </div>
            <div class="cta-image">
                <img src="{{asset('tasksslicing/images/logo/ilus.png')}}" alt="Decorative illustration">
            </div>
        </div>
    </section>

    <section class="case-studies">
        <div class="case-studies-container">
            <div class="case-studies-header">
                <div class="title-wrapper">
                    <h2 class="highlight-title">Case Studies</h2>
                </div>
                <p>Explore Real-Life Examples of Our Proven Digital Marketing <br> Success through Our Case Studies</p>
            </div>
            
            <div class="case-studies-card">
                <div class="case-study">
                    <p class="case-study-text">For a local restaurant, we implemented a targeted PPC campaign that resulted in a 50% increase in website traffic and a 25% increase in sales.</p>
                    <a href="#" class="learn-more">
                        Learn more
                        <img src="{{asset('tasksslicing/images/icon/icon3.png')}}" alt="arrow" class="arrow-icon">
                    </a>
                </div>

                <div class="vertical-line"></div>

                <div class="case-study">
                    <p class="case-study-text">For a B2B software company, we developed an SEO strategy that resulted in a first page ranking for key keywords and a 200% increase in organic traffic.</p>
                    <a href="#" class="learn-more">
                        Learn more
                        <img src="{{asset('tasksslicing/images/icon/icon3.png')}}" alt="arrow" class="arrow-icon">
                    </a>
                </div>

                <div class="vertical-line"></div>

                <div class="case-study">
                    <p class="case-study-text">For a national retail chain, we created a social media marketing campaign that increased followers by 25% and generated a 20% increase in online sales.</p>
                    <a href="#" class="learn-more">
                        Learn more
                        <img src="{{asset('tasksslicing/images/icon/icon3.png')}}" alt="arrow" class="arrow-icon">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="working-process">
        <div class="process-container">
            <div class="process-header">
                <h2 class="highlight-title">Our Working Process</h2>
                <p>Step-By-Step Guide to Achieving <br> Your Business Goals</p>
            </div>

            <div class="process-steps">

                <div class="process-step">
                    <div class="step-header">
                        <div class="step-number">01</div>
                        <div class="step-title">Consultation</div>
                        <button class="toggle-btn">+</button>
                    </div>
                    <div class="step-content">
                        During the initial consultation, we will discuss your business goals and objectives, target audience, and current marketing efforts. This will allow us to create a tailored strategy that aligns with your goals and requirements.
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-header">
                        <div class="step-number">02</div>
                        <div class="step-title">Research and Strategy Development</div>
                        <button class="toggle-btn">+</button>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-header">
                        <div class="step-number">03</div>
                        <div class="step-title">Implementation</div>
                        <button class="toggle-btn">+</button>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-header">
                        <div class="step-number">04</div>
                        <div class="step-title">Monitoring and Optimization</div>
                        <button class="toggle-btn">+</button>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-header">
                        <div class="step-number">05</div>
                        <div class="step-title">Reporting and Communication</div>
                        <button class="toggle-btn">+</button>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-header">
                        <div class="step-number">06</div>
                        <div class="step-title">Continual Improvement</div>
                        <button class="toggle-btn">+</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="team-container">
            <div class="team-header">
                <h2 class="highlight-title">Team</h2>
                <p>Meet the skilled and experienced team behind our successful digital marketing strategies</p>
            </div>

            <div class="team-grid">
                
                <div class="team-card">
                    <div class="card-header">
                        <div class="member-avatar">
                            <img src="{{asset('tasksslicing/images/profile/profile.png')}}" alt="Emily Johnson">
                        </div>
                        <div class="member-title">
                            <h3>Emily Johnson</h3>
                            <p class="role">PPC Manager</p>
                        </div>
                        <div class="linkedin-icon">
                            <img src="{{asset('tasksslicing/images/icon/in.png')}}" alt="LinkedIn">
                        </div>
                    </div>
                    <div class="card-divider"></div>
                    <div class="member-description">
                        <p>3+ years of experience in paid search advertising. Skilled in campaign management and performance analysis</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="card-header">
                        <div class="member-avatar">
                            <img src="{{asset('tasksslicing/images/profile/profile.png')}}" alt="Emily Johnson">
                        </div>
                        <div class="member-title">
                            <h3>Emily Johnson</h3>
                            <p class="role">PPC Manager</p>
                        </div>
                        <div class="linkedin-icon">
                            <img src="{{asset('tasksslicing/images/icon/in.png')}}" alt="LinkedIn">
                        </div>
                    </div>
                    <div class="card-divider"></div>
                    <div class="member-description">
                        <p>3+ years of experience in paid search advertising. Skilled in campaign management and performance analysis</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="card-header">
                        <div class="member-avatar">
                            <img src="{{asset('tasksslicing/images/profile/profile.png')}}" alt="Emily Johnson">
                        </div>
                        <div class="member-title">
                            <h3>Emily Johnson</h3>
                            <p class="role">PPC Manager</p>
                        </div>
                        <div class="linkedin-icon">
                            <img src="{{asset('tasksslicing/images/icon/in.png')}}" alt="LinkedIn">
                        </div>
                    </div>
                    <div class="card-divider"></div>
                    <div class="member-description">
                        <p>3+ years of experience in paid search advertising. Skilled in campaign management and performance analysis</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="card-header">
                        <div class="member-avatar">
                            <img src="{{asset('tasksslicing/images/profile/profile.png')}}" alt="Emily Johnson">
                        </div>
                        <div class="member-title">
                            <h3>Emily Johnson</h3>
                            <p class="role">PPC Manager</p>
                        </div>
                        <div class="linkedin-icon">
                            <img src="{{asset('tasksslicing/images/icon/in.png')}}" alt="LinkedIn">
                        </div>
                    </div>
                    <div class="card-divider"></div>
                    <div class="member-description">
                        <p>3+ years of experience in paid search advertising. Skilled in campaign management and performance analysis</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="card-header">
                        <div class="member-avatar">
                            <img src="{{asset('tasksslicing/images/profile/profile.png')}}" alt="Emily Johnson">
                        </div>
                        <div class="member-title">
                            <h3>Emily Johnson</h3>
                            <p class="role">PPC Manager</p>
                        </div>
                        <div class="linkedin-icon">
                            <img src="{{asset('tasksslicing/images/icon/in.png')}}" alt="LinkedIn">
                        </div>
                    </div>
                    <div class="card-divider"></div>
                    <div class="member-description">
                        <p>3+ years of experience in paid search advertising. Skilled in campaign management and performance analysis</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="card-header">
                        <div class="member-avatar">
                            <img src="{{asset('tasksslicing/images/profile/profile.png')}}" alt="Emily Johnson">
                        </div>
                        <div class="member-title">
                            <h3>Emily Johnson</h3>
                            <p class="role">PPC Manager</p>
                        </div>
                        <div class="linkedin-icon">
                            <img src="{{asset('taskssl icing/images/icon/in.png')}}" alt="LinkedIn">
                        </div>
                    </div>
                    <div class="card-divider"></div>
                    <div class="member-description">
                        <p>3+ years of experience in paid search advertising. Skilled in campaign management and performance analysis</p>
                    </div>
                </div>

                
            </div>

            <button class="see-all-btn">See all team</button>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="testimonials-header">
            <h2 class="highlight-title">Testimonials</h2>
            <p>Hear from Our Satisfied Clients: Read Our Testimonials to Learn More about Our Digital Marketing Services</p>
        </div>

        <div class="testimonials-slider">
            <div class="testimonials-container">
               
                <div class="testimonial-card">
                    <p class="testimonial-text">"We have been working with Positivus for the past year and have seen a significant increase in website traffic and leads as a result of their efforts. The team is professional, responsive, and truly cares about the success of our business. We highly recommend Positivus to any company looking to grow their online presence."</p>
                    <div class="testimonial-author">
                        <h4>John Smith</h4>
                        <p>Marketing Director at XYZ Corp</p>
                    </div>
                </div>

                
                <div class="testimonial-card">
                    <p class="testimonial-text">"We have been working with Positivus for the past year and have seen a significant increase in website traffic and leads as a result of their efforts. The team is professional, responsive, and truly cares about the success of our business."</p>
                    <div class="testimonial-author">
                        <h4>John Smith</h4>
                        <p>Marketing Director at XYZ Corp</p>
                    </div>
                </div>

                
                <div class="testimonial-card">
                    <p class="testimonial-text">"We have been working with Positivus for the past year and have seen a significant increase in website traffic and leads as a result of their efforts. The team is professional, responsive, and truly cares about the success of our business."</p>
                    <div class="testimonial-author">
                        <h4>John Smith</h4>
                        <p>Marketing Director at XYZ Corp</p>
                    </div>
                </div>

                
                <div class="testimonial-card">
                    <p class="testimonial-text">"We have been working with Positivus for the past year and have seen a significant increase in website traffic and leads as a result of their efforts. The team is professional, responsive, and truly cares about the success of our business."</p>
                    <div class="testimonial-author">
                        <h4>John Smith</h4>
                        <p>Marketing Director at XYZ Corp</p>
                    </div>
                </div>

               
            </div>

            <div class="slider-controls">
                <button class="slider-btn prev">←</button>
                <div class="slider-dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <button class="slider-btn next">→</button>
            </div>
        </div>
    </section>

    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-header">
                <h2 class="highlight-title">Contact Us</h2>
                <p>Connect with Us: Let's Discuss Your <br class="mt-2"> Digital Marketing Needs</p>
            </div>

            <div class="contact-form-container">
                <form class="contact-form">
                    <div class="form-type">
                        <label class="radio-container">
                            <input type="radio" name="contact-type" value="say-hi" checked>
                            <span class="radio-custom"></span>
                            Say Hi
                        </label>
                        <label class="radio-container">
                            <input type="radio" name="contact-type" value="get-quote">
                            <span class="radio-custom"></span>
                            Get a Quote
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="email" id="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="message">Message*</label>
                        <textarea id="message" placeholder="Message" rows="4"></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
                <div class="decoration">
                    
                </div>
            </div>
        </div>
    </section>

    @include('master.footer')

    <script src="{{asset('tasksslicing/js/app.js')}}"></script>
</body>
</html>
