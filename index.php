<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubhangi Lab</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <img src="images/logo.jpg" alt="Shubhangi Lab Logo" id="logo">
        <h1>Shubhangi Lab</h1>
        <nav>
            <div class="navbar">
                <span class="navbar-toggle" id="js-navbar-toggle">
                    <i class="fas fa-bars"></i>
                </span>
                <ul class="main-nav" id="js-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#appointment">Appointment</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Sections -->
    <section id="home">
        <h2>Welcome to Shubhangi Lab</h2>
        <h3>Since 1994</h3>
        <h4>30 years of experience</h4>
        <p>Your trusted partner in healthcare services.</p>
        <p>We warmly welcome you to Shubhangi Lab, where your health is our top priority. We understand that accurate diagnostics are the foundation of effective healthcare, and we are here to ensure you receive the best possible service.

        Our lab offers a wide range of tests and screenings, from routine blood work to comprehensive body checkups, as well as advanced ECG and X-ray services. With a focus on precision, efficiency, and care, we strive to make your experience as seamless and comfortable as possible.

        At Shubhangi Lab, we believe in empowering our patients with knowledge and clarity. Whether you're visiting us for routine health maintenance or specialized testing, our friendly and professional team is here to guide you every step of the way.

        Thank you for choosing Shubhangi Lab. We look forward to serving you and supporting your journey to better health.</p>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>Welcome to Shubhangi Lab, your trusted partner in health diagnostics. Located at Shri Swami Samarth Apartment, Ground Floor, Shop No.4, Near BMC Hospital, V.N. Purav Marg, Chunabhatti, Mumbai - 400 022 | Hill Road, Opp. Veravil Society, Near Laxmi Medical, Chunabhatti, Mumbai-400 022, we offer a comprehensive range of services, including various blood tests, full-body checkups, ECG, and X-ray facilities. Our state-of-the-art laboratory is equipped with the latest technology, ensuring accurate and timely results that empower you and your healthcare provider to make informed decisions about your health.

        At Shubhangi Lab, we are committed to delivering high-quality diagnostic services with a focus on patient care and convenience. Our experienced team of professionals is dedicated to providing precise, reliable, and confidential services in a comfortable and patient-friendly environment.

        Whether you need routine blood tests, advanced diagnostics, or specialized screenings, Shubhangi Lab is here to support your health and wellness journey. Trust us to provide the insights you need for a healthier tomorrow.

</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <ul>
            <li>ECG</li>
            <li>X-Ray</li>
            <li>Fever Profile</li>
            <li>Arthritis Profile</li>
            <li>Diabetes Profile</li>
            <li>Full Body Profile</li>
            <li>Anemia Profile</li>
            <li>ANC Profile</li>
            <li>Cardiac Profile</li>
            <li>PCOD Profile</li>
        </ul>
    </section>

    <section id="appointment">
        <h2>Book an Appointment</h2>
        <form action="server.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required placeholder="Enter Your Name">
            <br><br>
            <label for="age">Age:</label>
            <input type="text" id="age" name="age" required placeholder="Enter Your Age">
            <br><br>
            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" required placeholder="Enter Your Gender">
            <br><br>

            <!-- Dropdown for selecting tests -->
            <div class="dropdown">
                <button class="dropbtn">Select Tests</button>
                <div class="dropdown-content">
                    <label><input type="checkbox" name="tests[]" value="Fever Profile"> Fever Profile</label>
                    <label><input type="checkbox" name="tests[]" value="Arthritis Profile"> Arthritis Profile</label>
                    <label><input type="checkbox" name="tests[]" value="Diabetes Profile"> Diabetes Profile</label>
                    <label><input type="checkbox" name="tests[]" value="Full Body Profile"> Full Body Profile</label>
                    <label><input type="checkbox" name="tests[]" value="Anemia Profile"> Anemia Profile</label>
                    <label><input type="checkbox" name="tests[]" value="ANC Profile"> ANC Profile</label>
                    <label><input type="checkbox" name="tests[]" value="Cardiac Profile"> Cardiac Profile</label>
                    <label><input type="checkbox" name="tests[]" value="PCOD Profile"> PCOD Profile</label>
                    <label><input type="checkbox" name="tests[]" value="ECG"> ECG</label>
                    <label><input type="checkbox" name="tests[]" value="X-Ray"> X-Ray</label>
                </div>
                <button type="button" id="doneButton">Done</button>
            </div>

            <br><br>
            <label for="phone">Mobile Number:</label>
            <input type="number" id="phone" name="phone" required placeholder="Enter Your Mobile Number">
            <br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br><br>
            <label for="appointment_date">Appointment Date:</label>
            <input type="date" id="appointment_date" name="appointment_date" required>
            <br><br>
            <textarea name="other_info" id="other_info" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <br><br>
            <button type="submit">Book Appointment</button>
            <br><br>
            <button type="reset">Reset</button>
        </form>
    </section>
    <section id="gallery">
        <h2>Gallery</h2>
        <p>Check out some of our latest images from the lab.</p>
        <div class="gallery-grid">
        <img src="images/gallery7.jpg" alt="Lab equipment in use" class="gallery-item">
        <img src="images/gallery8.jpg" alt="Technician working with a microscope" class="gallery-item">
        <button id="seeMoreBtn">See More</button>
        <img src="images/gallery1.jpg" alt="Close-up of a lab experiment" class="gallery-item hidden">
        <img src="images/gallery6.jpg" alt="Lab analysis" class="gallery-item hidden">
        <img src="images/gallery2.jpg" alt="Test tubes" class="gallery-item hidden">
        <img src="images/gallery3.jpg" alt="Test tubes" class="gallery-item hidden">
        <img src="images/gallery4.jpg" alt="Test tubes" class="gallery-item hidden">
        <img src="images/gallery5.jpg" alt="Test tubes" class="gallery-item hidden">
        <img src="images/gallery9.jpg" alt="Test tubes" class="gallery-item hidden">
        <img src="images/gallery10.jpg" alt="Test tubes" class="gallery-item hidden">
        <img src="images/gallery11.jpg" alt="Test tubes" class="gallery-item hidden">
        <img src="images/gallery12.jpg" alt="Test tubes" class="gallery-item hidden">
        <img src="images/gallery13.jpg" alt="Test tubes" class="gallery-item hidden">
        <img src="images/gallery14.jpg" alt="Test tubes" class="gallery-item hidden">
        <img src="images/gallery15.jpg" alt="Test tubes" class="gallery-item hidden">
        <img src="images/gallery16.jpg" alt="Test tubes" class="gallery-item hidden">
        <!-- Add more images as needed -->
        </div>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Email: <a href="mailto:yeshwantmane505@gmail.com">yeshwantmane505@gmail.com</a></p>
        <p>Phone: <a href="tel:9920361564">9920361564</a></p>
                 <p><a href="tel:7373739564">7373739564</a></p>

        <p>Address: Shri Swami Samarth Apartment, Ground Floor, Shop No.4, Near BMC Hospital, V.N. Purav Marg, Chunabhatti, Mumbai - 400 022 | Hill Road, Opp. Veravil Society, Near Laxmi Medical, Chunabhatti, Mumbai-400 022</p>
        
        
        <p>Timings: Mon to Sat 7.30 AM to 10 PM | Sunday 7.30 AM to 2.00 PM</p>

    </section>

    <footer>
        <p>&copy; 2024 Shubhangi Lab. All rights reserved.</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>

