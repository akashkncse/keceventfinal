<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEC Events - Kongu Engineering College</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #0fb1b9;
        }
        
        .container {
            max-width: 1200px;
            margin: 20px auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        
        .header {
            background-color: #e9ecef;
            padding: 20px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        
        .header h1 {
            color: #343a40;
            margin-top: 10px;
        }
        
        .college-logo {
            height: 80px;
            margin-bottom: 10px;
        }
        
        .nav-menu {
            background-color: #e9ecef;
            padding: 15px;
            margin-top: 10px;
            text-align: center;
        }
        
        .nav-menu ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .nav-menu ul li {
            margin: 0 15px;
        }
        
        .nav-menu ul li a {
            text-decoration: none;
            color: #495057;
            font-weight: bold;
            padding: 8px 15px;
            transition: all 0.3s ease;
        }
        
        .nav-menu ul li a:hover {
            color: #007bff;
            background-color: #dee2e6;
            border-radius: 5px;
        }
        
        .content-wrapper {
            display: flex;
            margin-top: 10px;
        }
        
        .sidebar {
            width: 25%;
            background-color: #e9ecef;
            padding: 20px;
        }
        
        .main-content {
            width: 50%;
            background-color: #e9ecef;
            padding: 20px;
            margin: 0 10px;
        }
        
        .event-card {
            background-color: white;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .event-card img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
            cursor: pointer;
        }
        
        .event-card h3 {
            color: #343a40;
            margin-bottom: 5px;
        }
        
        .event-card p {
            color: #6c757d;
            margin-bottom: 10px;
        }
        
        .event-card .event-date {
            font-weight: bold;
            color: #007bff;
        }
        
        .footer {
            background-color: #e9ecef;
            padding: 20px;
            text-align: center;
            margin-top: 10px;
            color: #6c757d;
        }
        
        .quick-links h3, .upcoming-events h3 {
            margin-bottom: 15px;
            color: #343a40;
        }
        
        .quick-links ul, .upcoming-events ul {
            list-style-type: none;
        }
        
        .quick-links ul li, .upcoming-events ul li {
            margin-bottom: 10px;
        }
        
        .quick-links ul li a, .upcoming-events ul li a {
            text-decoration: none;
            color: #495057;
            transition: color 0.3s ease;
        }
        
        .quick-links ul li a:hover, .upcoming-events ul li a:hover {
            color: #007bff;
        }
        
        .btn {
            display: inline-block;
            padding: 8px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="kecbuild.jpeg" alt="Kongu Engineering College Logo" class="college-logo" width="100%" height="">
            <h1>Kongu Engineering College</h1>
            <p>Excellence in Engineering Education and Events</p>
        </div>
        
        <div class="nav-menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#calendar">Calendar</a></li>
                <li><a href="#departments">Departments</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#about">About KEC</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
        
        <div class="content-wrapper">
            <div class="sidebar">
                <div class="quick-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#technical">Technical Events</a></li>
                        <li><a href="#cultural">Cultural Events</a></li>
                        <li><a href="#symposium">Symposiums</a></li>
                        <li><a href="#workshops">Workshops</a></li>
                        <li><a href="#webinars">Webinars</a></li>
                        <li><a href="#conferences">Conferences</a></li>
                    </ul>
                </div>
                
                <div class="upcoming-events" style="margin-top: 30px;">
                    <h3>Upcoming Events</h3>
                    <ul>
                        <li><a href="#yukthi">Yukthi 2025</a></li>
                        <li><a href="#techfest">Annual Tech Fest</a></li>
                        <li><a href="#hackathon">KEC Hackathon</a></li>
                        <li><a href="#culturals">Cultural Extravaganza</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="main-content">
                <h2 style="margin-bottom: 20px;">Featured Events</h2>
                
                <div class="event-card">
                    <img src="/api/placeholder/600/300" alt="Technical Symposium" onclick="window.location.href='#techsym'">
                    <h3>Technical Symposium 2025</h3>
                    <p class="event-date">April 15-16, 2025</p>
                    <p>Join us for the biggest technical symposium of the year featuring competitions, paper presentations, and exciting prizes.</p>
                    <a href="#register" class="btn">Register Now</a>
                </div>
                
                <div class="event-card">
                    <img src="/api/placeholder/600/300" alt="Cultural Fest" onclick="window.location.href='#cultural'">
                    <h3>KEC Cultural Festival</h3>
                    <p class="event-date">May 5-7, 2025</p>
                    <p>Three days of music, dance, art, and celebration showcasing the diverse talents of KEC students.</p>
                    <a href="#register" class="btn">Register Now</a>
                </div>
                
                <div class="event-card">
                    <img src="/api/placeholder/600/300" alt="Engineering Workshop" onclick="window.location.href='#workshop'">
                    <h3>Advanced Engineering Workshop</h3>
                    <p class="event-date">March 20, 2025</p>
                    <p>Hands-on workshop on emerging technologies led by industry experts and faculty from leading research institutions.</p>
                    <a href="#register" class="btn">Register Now</a>
                </div>
            </div>
            
            <div class="sidebar">
                <div class="announcements">
                    <h3>Announcements</h3>
                    <div style="background-color: white; padding: 15px; border-radius: 8px; margin-top: 15px;">
                        <p><strong>Registration Open</strong></p>
                        <p>Registration for the Annual Tech Symposium is now open. Early bird discounts available until March 15.</p>
                    </div>
                    
                    <div style="background-color: white; padding: 15px; border-radius: 8px; margin-top: 15px;">
                        <p><strong>Call for Papers</strong></p>
                        <p>Submit your research papers for the International Conference on Engineering Innovations by April 1.</p>
                    </div>
                    
                    <div style="background-color: white; padding: 15px; border-radius: 8px; margin-top: 15px;">
                        <p><strong>Industry Visit</strong></p>
                        <p>Final year students can register for the upcoming industry visit to leading tech companies.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>© 2025 Kongu Engineering College. All Rights Reserved.</p>
            <div style="margin-top: 10px;">
                <a href="#privacy">Privacy Policy</a> | 
                <a href="#terms">Terms of Use</a> | 
                <a href="#contact">Contact Us</a>
            </div>
        </div>
    </div>
</body>
</html>