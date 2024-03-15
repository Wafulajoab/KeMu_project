<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body{
            background: rgba(244, 244, 247, 0.973);
            font-family: Arial, sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        ::after,
        ::before {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .navbar ul li a::after {
            position: absolute;
            content: "";
            bottom: 0;
            left: 50%;
            width: 0%;
            height: 2px;
            background-color: rgb(245, 243, 243);
            transition: 0.4s ease-out;
            align-items: center;
        }

        .navbar ul li a:hover::after {
            /* width: 100%; */
            left: 0;
        }

        nav {
            position: fixed;
            width: 100%;
            top: 0;
            height: 10vh;
        }

        .container {
            background-color: white;
            width: 100%;
            z-index: 100%;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background-color: purple;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .navbar ul {
            display: flex;
            list-style-type: none;
            top: 0;
        }

        .navbar ul li {
            padding: .5rem;
            margin: .5rem;
        }

        .navbar ul li a {
            text-decoration: none;
            color: rgb(250, 246, 246);
            font-size: 1rem;
            font-weight: bold;
        }

        .navbar h2 {
            font-size: 1.5rem;
            padding: 0.5px;
            margin: 1.5rem;
            font-family: Arial, sans-serif;
            color: rgb(250, 245, 245);
        }
        .text{
            width:700px;
            background: white;
            right: 100px;
            border-radius: 16px;
        } 
            .text h1{
            text-align: center;
            margin-top: 2rem;
            font-weight: bold;
            font-family: Arial, sans-serif;
            font-size: 25px;
            text-transform: uppercase;
        }

        .text p{
            text-align: justify;
            margin-top: 5px;
            line-height: 1.5rem;
        }
        .image{
            width: 400px;
            height: 50vh;
            background: lavender;
        } 
        .image2{
            margin-top: 20px;
            width: 10%;
            height: 5%;
            margin-left: 45%;
        } 
        h2{
            font-weight: bold;
            font-family: Arial, sans-serif;
            font-size: 2rem;
            text-align: center;
            text-transform: uppercase;
        } 
        h3{
            font-weight: lighter;
            font-family: Arial, sans-serif;
            font-size: 1.5rem;
            text-align: center;
            text-transform: none;
        }  
        p .para{
            font-weight: 200px;
            text-align: center;
            text-transform: none;
        }
        .sub-cont h4{
            padding: 1rem;
            text-align: center;
            color: rgb(248, 9, 9);
            justify-content: center;
        }
        
        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
        }
        li {
            margin-right: 20px;
        }
        a {
            text-decoration: none;
            color: #72f705;
            display: flex;
            align-items: center;
        }
        i {
            margin-right: 5px;
        }
        /* Adjust the styles as needed */
        /* Hover effect */
        a:hover {
            color: #007bff; /* Change the color to your desired hover color */
        }


        #icon-up{
            color: white;
            font-size: 1.5rem;
            margin: 1rem;
            padding: 1rem;
           
        }

        
        .popup {
            width: 8rem;
            height: auto; /* Adjust the height as needed */
            /* background: grey; */
            position: absolute;
            top: 3.5rem;
            right: 0;
            display: none;
        }

    .sub-pop {
        width: 100%;
        background: purple;
        display: block;
    
    }

    .sub-pop p {
        display: flex;
        padding: 0.5rem;
        margin: 0.2rem;
    }

    .sub-pop i {
        font-size: 1.5rem;
        font-weight: 600;
    }

    .sub-pop p a {
        font-size: 1rem;
        color: white;
        text-decoration: none;
        font-weight: 600;
    }

    .sub-pop p a:hover {
        background: purple;
        cursor: progress;
        padding: 5px;
        text-decoration: underline;
    }




        </style>
    </head>
    <body>
        <nav>
            <div class="container">
                <div class="navbar">
                    <h2> KeMU Security System</h2>
                <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="visitors_records.php"><i class="fas fa-book"></i> Visitors-records</a></li>
                <li><a href="incidents.php"><i class="fas fa-exclamation-triangle"></i> Incidents</a></li>
                <li><a href="updates.php"><i class="fas fa-bullhorn"></i>Updates</a></li>
                <li><a href="contact.php"><i class="fas fa-address-book"></i> Contacts</a></li>
                <li><a href="about.php"><i class="fas fa-info-circle"></i> About</a></li> 
        
                </ul>

                    <div>
                        
                        <span style="color: white; z-index:100;"><i class="bi bi-chevron-down" id="icon-up"></i></span>                    
                    </div>
                </div>
            </div>
        </nav>
        <br><br>
        <div class="" style="margin-top: 3rem;" id="icon">
                <img src="kmu.jpeg" class="image2" alt="KeMU Image" style="border-radius:50%;">        
                <h1 style="text-align: center;">Welcome to Kenya Methodist University Security System</h1>

                <p class="para"><br> This is a security system that will entirely enable all the stakeholders in this great University 
                to get immediate reports in regards to Security matters in this Institution. 
                We are here to cater for your security and 
                your well-being in this institution. Thank you! </p>
        </div>
    <br>
    <br>
        <h2>Our Security Matters!</h2>
        <h3>The Future is Here!</h3>
    
        <!-- Popup -->
        <div class="popup" id="pop">
            <div class="sub-pop">
                <p><i class="fas fa-user"></i> <a href="#">Profile</a></p>
                <p><i class="fas fa-sign-out-alt"></i> <a href="logout.php">Logout</a></p>        
            </div>
        </div>
    </div>
    <footer id="footer">
        <style>
            #footer {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                background: lavender;
                text-align: center;
                padding: 0.09rem;
            }

            .footer p {
                justify-content: center;
            }

            .footer a {
                color: green;
                text-decoration: underline;
                font-weight: bold;
            }
        </style>

        <div class="footer">
        <p><span>Company.<strong>All Rights Reserved.</strong>Designed By <a href="jmtech.php">JMTech</a></span></p>
        </div>
    </footer>

    <script>
        var icon = document.getElementById('icon-up');
        var popup = document.getElementById('pop');
        console.log(icon)
        icon.addEventListener('mouseover', ()=>{
            popup.style.display='block';
        })
        popup.addEventListener('mouseleave',()=>{
            popup.style.display='none';
        })
    </script>
</body>
</html>
