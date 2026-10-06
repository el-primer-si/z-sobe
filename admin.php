<?php include "templates/header.php"; ?>

<div class="top-banner">
    <style>
        .top-banner {
            width: 100%;
            height: auto;
            max-height: 300px;
            overflow: hidden;
        }

        .top-banner img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .admissions-nav {
            text-align: center;
            margin: 20px 0;
        }

        .admissions-nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        .admission-section {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }

        .admission-section:nth-child(even) {
            flex-direction: row-reverse;
        }

        .admission-section img {
            width: 40%;
            max-width: 300px;
            margin: 0 20px;
        }

        .admission-section div {
            width: 60%;
        }
    </style>
    <img src="images/banner photo.png" alt="Banner Image">
</div>
<section class="admissions-section">
    <div class="container">
        <h2>Admissions</h2>

        <div id="application-process" class="admission-section">
            <img src="images/undergraduate1.jpg" alt="Application Process">
            <div>
                <h3>Application Process</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <ul>
                    <li><strong>Online:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li><strong>Offline:</strong> Vestibulum ante ipsum primis in faucibus orci luctus.</li>
                </ul>
            </div>
        </div>

        <div id="important-dates" class="admission-section">
            <img src="images/undergraduate1.jpg" alt="Important Dates">
            <div>
                <h3>Important Dates & Deadlines</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <ul>
                    <li><strong>Application Opens:</strong> January 15, 2024</li>
                    <li><strong>Application Deadline:</strong> March 30, 2024</li>
                    <li><strong>Semester Start Date:</strong> May 6, 2024</li>
                </ul>
            </div>
        </div>

        <div id="tuition-fees" class="admission-section">
            <img src="images/undergraduate2.jpg" alt="Tuition Fees">
            <div>
                <h3>Tuition Fees & Payment Plans</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <ul>
                    <li><strong>Undergraduate:</strong> KSh 150,000 per semester</li>
                    <li><strong>Postgraduate:</strong> KSh 180,000 per semester</li>
                    <li><strong>Diploma:</strong> KSh 90,000 per semester</li>
                    <li><strong>Certificate:</strong> KSh 50,000 per semester</li>
                </ul>
                <p>Installment plans available upon request.</p>
            </div>
        </div>
    </div>
</section>

<?php include "templates/footer.php"; ?>
 