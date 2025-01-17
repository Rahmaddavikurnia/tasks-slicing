@include('master.header')
<body>
    @include('master.navbar')
    
    <section class="hero-about">
        <div class="hero-image">
            <img src="{{('tasksslicing/images/hero-about.png')}}" alt="Success Illustration">
        </div>
        <div class="hero-content">
            <h1>Together for Success</h1>
            <p>At Positivus, we help businesses grow by combining creativity, innovation, and data-driven strategies. Together, we build a future of shared success.</p>
        </div>
    </section>
    <section class="impact-section">
        <div class="impact-header">
            <div class="title-wrapper">
                <h2 class="highlight-title">Our Impact in Numbers</h2>
            </div>
            <p>A snapshot of the milestones and achievements that drive our success</p>
        </div>
        <div class="impact-metrics">
            <div class="metric-item">
                <h3>8+</h3>
                <p>Years of Experience</p>
            </div>
            <div class="metric-item">
                <h3>50+</h3>
                <p>Experts</p>
            </div>
            <div class="metric-item">
                <h3>100+</h3>
                <p>Successful Campaigns</p>
            </div>
            <div class="metric-item">
                <h3>20+</h3>
                <p>Industry Awards</p>
            </div>
            <div class="metric-item">
                <h3>500%</h3>
                <p>ROI for our clients</p>
            </div>
        </div>
    </section>
    <section class="journey-section">
        <div class="header-content">
            <h2 class="highlight-title">Our Journey</h2>
            <p>From humble beginnings to industry leaders, discover how Positivus has evolved to drive success for businesses worldwide.</p>
        </div>
        
        <div class="timeline">
            <div class="timeline-item">
                <div class="year">2019</div>
                <div class="timeline-content">
                    <div class="icon">
                        <img src="{{asset('tasksslicing/images/icon/Vector.png')}}" alt="Positivus icon">
                    </div>
                    <h3>The Beginning</h3>
                    <p>Positivus was founded to help businesses navigate the digital world and achieve online success.</p>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="year">2021</div>
                <div class="timeline-content">
                    <div class="icon">
                        <img src="{{asset('tasksslicing/images/icon/Vector.png')}}" alt="Positivus icon">
                    </div>
                    <h3>Industry Recognition</h3>
                    <p>Positivus was named among the top 50 global digital agencies, affirming our leadership.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="year">2023</div>
                <div class="timeline-content">
                    <div class="icon">
                        <img src="{{asset('tasksslicing/images/icon/Vector.png')}}" alt="Positivus icon">
                    </div>
                    <h3>Innovation and Growth</h3>
                    <p>With over 50 experts, we continue to deliver cutting edge solutions to help businesses thrive.</p>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="year">2024</div>
                <div class="timeline-content">
                    <div class="icon">
                        <img src="{{asset('tasksslicing/images/icon/Vector.png')}}" alt="Positivus icon">
                    </div>
                    <h3>Leading the Future</h3>
                    <p>This year, Positivus is pioneering the use of AI and automation to deliver even more personalized, data-driven strategies and setting new standards in digital marketing.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="quote-section">
        <div class="quote-card">
            <div class="quote-decoration">
                <img src="{{asset('tasksslicing/images/logo/ilus.png')}}" alt="Decorative elements" class="decoration-image">
            </div>
            <div class="quote-content">
                <blockquote>
                    "At Positivus, we believe that success is built on innovation, collaboration, and a relentless focus on delivering results."
                </blockquote>
                <cite>— John Smith, Founder of Positivus</cite>
            </div>
        </div>
    </section>
    <section class="awards-section">
        <div class="awards-header">
            <h2 class="highlight-title">Awards & Recognition</h2>
            <p>At Positivus, our commitment to excellence has been recognized by industry leaders. Here are some of our proudest achievements:</p>
        </div>
        
        <div class="awards-grid">
            <div class="award-card">
                <img src="{{asset('tasksslicing/images/about/1.png')}}" alt="GISA Award">
                <h3>Best Small Business Digital Marketing Agency of the Year</h3>
                <p>Celebrating our success in delivering innovative strategies and measurable results for small business clients.</p>
            </div>

            <div class="award-card">
                <img src="{{asset('tasksslicing/images/about/2.png')}}" alt="Website Design Award">
                <h3>Innovative Website Design</h3>
                <p>Honoring our expertise in developing visually stunning, user-friendly websites that capture a brand's essence and boost conversions.</p>
            </div>

            <div class="award-card">
                <img src="{{asset('tasksslicing/images/about/3.png')}}" alt="PPC Award">
                <h3>Top Performing PPC Campaign of the Year</h3>
                <p>Acknowledging our ability to design and execute a high-impact pay-per-click campaign that drove exceptional client results.</p>
            </div>

            <div class="award-card">
                <img src="{{asset('tasksslicing/images/about/4.png')}}" alt="Social Media Award">
                <h3>Expertise in Social Media Marketing</h3>
                <p>Recognizing our exceptional skills in crafting effective social media strategies, managing accounts, and creating engaging content.</p>
            </div>
        </div>
    </section>
    <section class="join-team">
        <div class="join-content">
            <div class="join-text">
                <h2>Join Our Team</h2>
                <p>At Positivus, we thrive on innovation and collaboration. We're always looking for passionate individuals to join our team and help businesses grow. Ready to make an impact?</p>
                <a href="#" class="explore-btn">Explore Careers</a>
            </div>
            <div class="join-image">
                <img src="{{asset('tasksslicing/images/about/5.png')}}" alt="Team Illustration">
            </div>
        </div>
    </section>

    @include('master.footer')

    <script src="{{asset('tasksslicing/js/app.js')}}"></script>
</body>
</html>