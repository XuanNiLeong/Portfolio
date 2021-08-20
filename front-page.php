<?php
get_header();
?>

<main>
            <section class="hero">
              <div class="hero-container" width="normal">
                <div class="hero-row">
                  <div class="hero-col" width="auto">
                    <div class="hero-image">
                      <img src="/images/x.png">
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="gallery">
              <div class="hero-col" width="aut0">
                <div class='icon-scroll'></div>
              </div>
              <div class="gallery-container">
                <img src="assets/images/pic1.jpg" width="330" height="530" id="pic1">
                <img src="assets/images/pic2.jpg" width="330" height="530" id="pic2">
                <img src="assets/images/pic3.jpg" width="330" height="530" id="pic3">
              </div>
            </section>

            <section class="intro">
              <div class="intro-container" width="normal">
                <div class="intro-row">

                  <div class="intro-col" width="auto">
                    <div class="intro-text">
                      <h1>Tech Explorer</h1>
                      <p>Jessie has 3 years of experience as a Data Scientist, Data Analyst and Product Management in projects across different industries in her career and internships. An enthusiast in leveraging big data to unlock business insights, she focuses on mining and analysing vast datasets in discovering interesting findings for better operations of the organisation, collaborating across different functional teams and producing scalable techni</p>
                    </div> 
                  </div>

                  <div class="intro-col" width="auto" id="animation">
                    <div class="intro-animation" data-aos="fade-up" >
                      <img class="intro-animation-image" src="/images/x.png" alt="logo"/>
                    </div>
                  </div>

                </div>
              </div>
            </section>

            <section class="profile">
              <div class="profile-container" width="normal">

                <div class="profile-row">

                  <div class="profile-col" width="auto">
                    <a href="/projects.html">
                      <div class="work" data-aos="fade-up">
                        <div class="work-container">
                          <h2>Professionally</h2>
                        </div>
                      </div> 
                    </a>
                  </div>

                  <div class="profile-col" width="auto">
                    <a href="/life.html">
                      <div class="life" data-aos="fade-down" data-aos-delay="1500">
                        <div class="life-container" href="/life.html">
                          <h2>Life</h2>
                        </div>
                      </div> 
                    </a>
                  </div>

                </div>
              </div>
            </section>

            <section class="contact">
              <div class="contact-container" width="normal">
                <div class="contact-row">

                  <div class="contact-col" width="auto">
                    <div class="contact-text">
                      <h1>Let's Connect</h1>
                      <p>Up for a chat or a tea? Happy to connect with you!</p>
                      <div class="icon">
                        <a href="https://www.linkedin.com/in/xuannileong/">                        
                          <img src="assets/images/linkedin.png" alt="linkedin"/>
                        </a>
                        <a href="https://github.com/">
                          <img src="assets/images/github.png" alt="github"/>

                        </a>
                      </div>
                    </div> 
                  </div>

                  <div class="contact-col" width="auto">
                    <div class="contact-animation" data-aos="zoom-in-left" >
                      <img class="contact-animation-image" src="assets//images/x.png" alt="logo"/>
                    </div>
                  </div>

                </div>
              </div>
            </section>
        </main>

<?php
get_footer();
?>