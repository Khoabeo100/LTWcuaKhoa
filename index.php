<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web 60%</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3d2fa990ba.js" crossorigin="anonymous"></script>
</head>
<body onload = "load_images();">
    <header>
        <a href="" class="brand">KhoaBong</a>
        <div class="menu">
            <div class="btn">
                <i class="fa-solid fa-xmark close-btn" style="color: white;"></i>
            </div>
            <a href="#home">Home</a>
            <a href="#pre">Preference</a>
            <a href="#exp">Experience</a>
            <a href="#skill">Skills</a>
            <a href="#pro">Projects</a>
            <a href="#tst">Testimonials</a>
            <a href="#contact">Contact</a>
        </div>
        
        <div class="btn">
            <i class="fa-solid fa-bars menu-btn"></i>
        </div>
    </header>




    <div class="container3" id="home">
        <div class="banner">
            <div class="content">
                <p> WELCOME TO MY PORTFOLIO!</p>
                <h13>
                    Hi,I'm Khoa <br>
                    a 
                    <div class="gradient-text">
                        <div class="job" 
                        data-job1="{Student.}"
                        data-job2="{FrontEnd.}">

                        </div>
                    </div>
                </h13>

                <p>Hi, I'm Nguyễn Đức Khoa, a student majoring in Information Technology at HaNoi Metropolitan University. I'm passionate about technology and always seeking opportunities to learn and develop skills. Nice to meet you!</p>
                
                <div class="button12" >
                    <button3 onclick="goto()" >See More</button>
                </div>
                
                
            </div>
            
            <div class="avatar">
                <img src="img/AVA1.png" alt="">
            </div>
            
        </div>
    </div>

    <div class="container4" id="pre">
        <div class="main-title">
            <h1>My Preference</h1>
        </div>
        
        <div class="card__container" id="pre2">
           <article class="card__article">
              <img src="img/basket.jpg" alt="image" class="card__img">

              <div class="card__data">  
                 <h2 class="card__title">Basketball</h2>
                 <span class="card__description">Playing basketball provides benefits for health, social interaction, skill development, and mental resilience.</span>
                 <a href="#" class="card__button">Read More</a>
              </div>
           </article>

           <article class="card__article">
              <img src="img/music.jpg" alt="image" class="card__img">

              <div class="card__data">                
                 <h2 class="card__title">Music</h2>
                 <span class="card__description">Listening to music has numerous benefits, including stress reduction, mood enhancement, and relaxation.</span>
                 <a href="#" class="card__button">Read More</a>
              </div>
           </article>

           <article class="card__article">
              <img src="img/food1.jpg" alt="image" class="card__img">

              <div class="card__data">
                 <h2 class="card__title">Food</h2>
                 <span class="card__description">Eating provides essential nutrients for the body's functions and energy requirements.</span>
                 <a href="#" class="card__button">Read More</a>
              </div>
           </article>
        </div>
    </div>



    <section class="timeline-section" id="exp">
        <div class="tong3">
            <div class="main-title">
                <h1>My Experience</h1>
        </div>
            
        <div class="timeline-items">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2015 - 2019</div>
                <div class="timeline-content">
                    <h3>Xuan La Secondary School</h3>
                    <p>In Xuan La Secondary School, I served as a class president, participated in various individual and group activities, and achieved many successes. </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2019 - 2022</div>
                <div class="timeline-content">
                    <h3>Pham Hong Thai High School</h3>
                    <p>In high school, I continued to serve as class president, and my passion for technology grew stronger. I delved deeper into the field of information technology and made the decision to pursue it as my major in university. </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2022-2026</div>
                <div class="timeline-content">
                    <h3>HaNoi Metropolitan University</h3>
                    <p>In university, I acquired a wealth of specialized knowledge from my courses, and I supplemented my learning with self-study, enriching my educational experience. This combination enabled me to thoroughly enjoy the learning process and absorb a vast array of knowledge.</p>
                </div>
            </div>
        </div>
    </div>
    </section>







<div class="container2" id="skill">
	<div class="main-title">
		<h1>My Skills</h1>
	</div>
	<div class="row">
		<section class="col">
			<div class="sub-title">
				<h2>Programming Skills</h2>
			</div>
			<div class="skills-container">
				<div class="skill">
					<div class="subject">HTML</div>
					<div class="progress-bar" value="70%">
						<div class="progress-line" style="max-width: 70%"></div>
					</div>
				</div>

				<div class="skill">
					<div class="subject">CSS</div>
					<div class="progress-bar" value="70%">
						<div class="progress-line" style="max-width: 70%"></div>
					</div>
				</div>

                <div class="skill">
					<div class="subject">JavaScript</div>
					<div class="progress-bar" value="40%">
						<div class="progress-line" style="max-width: 40%"></div>
					</div>
				</div>
			</div>
		</section>

		<section class="col">
			<div class="sub-title">
				<h2>Designing Skills</h2>
			</div>
			<div class="skills-container">				
				<div class="skill">
					<div class="subject">Photoshop</div>
					<div class="progress-bar" value="70%">
						<div class="progress-line" style="max-width: 70%"></div>
					</div>
				</div>

				<div class="skill">
					<div class="subject">Illustrator</div>
					<div class="progress-bar" value="75%">
						<div class="progress-line" style="max-width: 75%"></div>
					</div>
				</div>

			</div>
		</section>
    </div>

</div>




<div class="tong1" id="pro">
    <div class="main-title">
        <h1>My Project</h1>
      </div>
    <div class="slider">
           <div class="form">
              <div class="item">
                  <div class="content">
                      <img src="img/1.jpg" alt="">
                      <div class="des">
                          <div>
                              <b>Day1</b>
                          </div>
                        <a href="D1/D1.B1/index.php"> Bài 1</a>
                        <br>
                            <a href="D1/D1.B2/index1.php"> Bài 2</a>
                        <br>
                            <a href="D1/D1.B2/index.php"> Bài 2.1</a>
                        <br>
                            <a href="D1/D1.B3/index.php"> Bài 3</a>
                        
                        </div>
                  </div>
               </div>


               <div class="item">
                  <div class="content">
                      <img src="img/2.jpg" alt="">
                      <div class="des">
                        <div>
                           <b>Day2</b> 
                        </div>
                        <a href="D2/B4/index.php"> Bài 4</a>
                        <br>
                            <a href="D2/D2.B3/index.php"> Bài 3</a>
                            
                    </div>
                  </div>
               </div>
  
               <div class="item">
                  <div class="content">
                      <img src="img/2.jpg" alt="">
                      <div class="des">
                        <div>
                           <b>Day3</b> 
                        </div>
                        <a href="D3/BTTL/demo1.php"> Bài 1</a>
                        <br>
                            <a href="D3/BT/index.php"> Bài 2</a>
                            
                    </div>
                  </div>
               </div>
              <!-- 
               <div class="item">
                  <div class="content">
                      <img src="img/3.jpg" alt="">
                      <div class="des">
                        <div>
                            <b>Day3</b>
                        </div>
                        <a href="Day3/BT1/bt1.html"> Bài 1</a>
                      <br>
                      <a href="Day3/BT2/bt2.html"> Bài 2</a>
                      </div>
                  </div>
               </div>
  
               <div class="item">
                  <div class="content">
                      <img src="img/4.jpg" alt="">
                      <div class="des">
                        <div>
                            <b>Kiểm tra 30%</b>
                        </div>
                        <a href="Bai 30 LTW/Bai30.html"> Bài làm</a>
                                                
                      </div>
                  </div>
               </div>
  
               <div class="item">
                  <div class="content">
                      <img src="img/5.jpg" alt="">
                      <div class="des">
                          <div>
                              <b>Day4</b>
                          </div>
                          <a href="Day4/4bai1.html"> Bài 1</a>
                          <br>
                          <a href="Day4/4bai3.html"> Bài 3</a>
                          <br>
                          <a href="Day4/4bai4.html"> Bài 4</a>
                          <br>
                          <a href="Day4/4bai5.html"> Bài 5</a>
                      </div>
                  </div>
               </div>
  
               <div class="item">
                  <div class="content">
                      <img src="img/6.jpg" alt="">
                      <div class="des">
                          <div>
                              <b>Day5</b>
                          </div>
                        <a href="Day5/BT1/BT1.1.html"> Bài 1.1</a>
                      <br>
                        <a href="Day5/BT1/BT1.2.html"> Bài 1.2</a>
                        <br>
                        <a href="Day5/BT2/BT2.html"> Bài 2</a>
                        <br>
                        <a href="Day5/BT3/BT3.html"> Bài 3</a>
                      </div>
                  </div>
               </div>
  
               <div class="item">
                  <div class="content">
                      <img src="img/7.jpg" alt="">
                      <div class="des">
                          <div>
                             <b>Day6</b>
                          </div>
                          <a href="Day6/BT1 Trên lớp/btaptrenlop.html"> Bài 1</a>
                          <br>
                          <a href="Day6/BT4/BT4.html"> Bài 4</a>
                          <br>
                          <a href="Day6/BT5/BT5.html"> Bài 5</a>
                          <br>
                          <a href="Day6/BT6/BT6.1/BT6.1.html"> Bài 6.1</a>
                          <br>
                          <a href="Day6/BT6/BT6.2/BT6.2.html"> Bài 6.2</a>
                          
                      </div>
                  </div>
               </div>
  
               <div class="item">
                  <div class="content">
                      <img src="img/8.jpg" alt="">
                      <div class="des">
                          <div>
                              <b>Day7</b>
                          </div>
                          <a href="Day7/vd1.html"> Ví dụ 1</a>
                          <br>
                          <a href="Day7/vd2.html"> Ví dụ 2</a>
                          <br>
                          <a href="Day7/B7/bai7.html"> Bài 7</a>
                          <br>
                          <a href="Day7/B8/amthuc.html"> Bài 8</a>
                          
                      </div>
                  </div>
               </div>
  
               <div class="item">
                  <div class="content">
                      <img src="img/10.jpg" alt="">
                      <div class="des">
                          <div>
                             <b>Khác</b> 
                          </div>
                          <a href="Banner.pdf"> HTQG ĐBSCL</a>
                          <br>
                          <a href="Banner HTQG Ngữ Văn.pdf"> HTQG NV</a>
                          
                        
                      </div>
                  </div>
               </div> -->
          </div>
      </div>
    </div>





<div class="tong5" id="tst">
    <div class="main-title">
        <h1> Testimonials</h1>
    </div>

    <div class="container5">
        <div class="box">
        <div class="image">
            <img src="img/minh.jpeg">
          </div>
          <div class="name_job">Nguyễn Quang Minh</div>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>"Tôi luôn đánh giá cao sự nỗ lực và sự chăm chỉ của Nguyễn Đức Khoa trong học tập và công việc. Bạn ấy luôn tỏ ra tự chủ, sáng tạo và có khả năng làm việc nhóm tốt. Điều này khiến mọi người cảm thấy an tâm khi làm việc cùng bạn ấy. Không chỉ vậy, sự trung thành và lòng tôn trọng của Nguyễn Đức Khoa cũng luôn được mọi người đánh giá cao. Bạn ấy luôn sẵn lòng giúp đỡ người khác một cách nhiệt tình và tử tế." </p>
          
        </div>
        <div class="box">
          <div class="image">
            <img src="img/dat.jpeg" alt="">
          </div>
          <div class="name_job">Đỗ Tiến Đạt</div>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p> "Mọi người đánh giá cao Bạn ấy không chỉ vì sự chăm chỉ mà còn vì tinh thần sáng tạo, sự quyết đoán và lòng nhiệt huyết mạnh mẽ. Bạn ấy luôn tự tin và sẵn lòng tham gia vào mọi dự án, làm việc một cách hiệu quả và mang lại động lực cho đồng đội. Không chỉ vậy, sự thành thạo trong giao tiếp và khả năng làm việc nhóm xuất sắc của Bạn ấy cũng khiến mọi người tin tưởng và ấn tượng."</p>
          
        </div>
        <div class="box">
          <div class="image">
            <img src="img/voiu.jpg" alt="">
          </div>
          <div class="name_job">Bùi Phương Anh</div>
            <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>"Mọi người rất ấn tượng với Anh ấy vì tính cách hòa nhã, sự hướng ngoại và khả năng làm việc một cách độc lập. Anh ấy luôn tỏ ra lắng nghe và tôn trọng ý kiến của người khác, đồng thời có khả năng tự quản lý công việc một cách hiệu quả. Sự quyết đoán và sự kiên nhẫn của Anh ấy khiến mọi người cảm thấy an tâm và tin tưởng khi làm việc cùng Anh ấy."</p>
        </div>
      </div>
</div>


<div class="tong8" id="contact">
    <div class="main-title">
        <h1> Contact</h1>
    </div>
</div>
<div class="tong9">
    <div class="container71">
        <div class="left">
            <form id="mainForm" novalidate>
                <h2>Hi, Nice To Meet You!!!</h2>
                <div class="form-control">
                    <label for="name">Name:</label>
                    <input type="text" id="name" placeholder="Enter your name" autocomplete="off">
                    <i class="icon"></i>
                </div>
    
                <div class="form-control">
                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder="Enter your email" autocomplete="off">
                    <i class="icon"></i>
                </div>
    
                <div class="form-control">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" placeholder="Enter your phone" autocomplete="off">
                    <i class="icon"></i>
                </div>
    
                <div class="form-control">
                    <label for="message">Message:</label>
                    <textarea id="message" placeholder="Enter your message"></textarea>
                    <i class="icon"></i>
                </div>
    
                <button type="submit">Send Message</button>
            </form>
        </div>
            
        <div class="right">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7447.841983076494!2d105.7918006935791!3d21.035847100000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3f57fc23d1%3A0xf813dfd05dfa4078!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBUaOG7pyDEkcO0IEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1707378132128!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        
    </div>
    </div>
</div>
</div>
<div id="successModal" class="modal">
    <div class="modal-content">
        <span class="close-button1">&times;</span>
        <h2>Success!</h2>
        <p>Your message has been sent successfully.</p>
    </div>
</div>
<footer>
    <div class="container7" id="contact">
        <div class="row">
            <div class="footer-col">
                <h4>About Me</h4>
                <ul>
                    <li><a href="">Hi, I'm Nguyễn Đức Khoa, a student majoring in Information Technology at HaNoi Metropolitan University. I'm passionate about technology and always seeking opportunities to learn and develop skills. Nice to meet you!</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Home</h4>
                <ul>
                    <li><a href="">Preference</a></li>
                    <li><a href="">Experience</a></li>
                    <li><a href="">Skills</a></li>
                    <li><a href="">Project</a></li>
                    <li><a href="">Testimonials</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Address</h4>
                <div class="contactinfo">
                    <div class="infobox">
                        <div class="iconinfo">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="textinfo">
                            <p>98 phố Dương Quảng Hàm, Quan Hoa, Cầu Giấy, Hà Nội</p>
                        </div>
                    </div>
            
                    <div class="infobox">
                        <div class="iconinfo">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="textinfo">
                            <a href="tel:+89 12345678">+89 12345678</a>
                        </div>
                        
                    </div>
            
                    <div class="infobox">
                        <div class="iconinfo">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="textinfo">
                            <a href="mailto:Example@gmail.com">Example@gmail.com</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            

            <div class="footer-col">
                <h4>Social</h4>
                <div class="icons">
                    <a href="https://www.facebook.com/khoabeo2002/" target="_blank">
                       <div class="layer">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span class="fab fa-facebook-f"></span>
                       </div>
                       <div class="text">
                          Facebook
                       </div>
                    </a>
                    <a href="https://twitter.com/khoa10k10" target="_blank">
                       <div class="layer">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span class="fab fa-twitter"></span>
                       </div>
                       <div class="text">
                          Twitter
                       </div>
                    </a>
                    <a href="https://instagram.com/ndkka.ka?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr" target="_blank">
                       <div class="layer">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span class="fab fa-instagram"></span>
                       </div>
                       <div class="text">
                          Instagram
                       </div>
                    </a>
                    
                    <a href="https://github.com/Khoabeo100" target="_blank">
                       <div class="layer">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span class="fab fa-github"></span>
                       </div>
                       <div class="text">
                          Github
                       </div>
                    </a>
                 </div>



            </div>
        
            
    </div>
</footer>



    <button id="toTop">
        <i class="fa-solid fa-chevron-up fa-xl" style="color: white;"></i>
    </button>
    
    <script src="style.js"></script>
    <script src="form.js"></script>

</body>
</html>