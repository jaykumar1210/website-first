<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Projects</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .projects {
            padding: 100px 0;
            text-align: center;
        }

        .project {
            margin-bottom: 50px;
        }

        .project h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #007bff;
        }

        .project p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 30px;
        }

        .project-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .project-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Portfolio</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="projects.php" class="active">Projects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="projects">
        <div class="container">
            <div class="project">
                <h2>Project 1</h2>
                <p>Description of Project 1.</p>
                <a href="#" class="project-btn">View Details</a>
            </div>
            <div class="project">
                <h2>Project 2</h2>
                <p>Description of Project 2.</p>
                <a href="#" class="project-btn">View Details</a>
            </div>
            <div class="project">
                <h2>Project 3</h2>
                <p>Description of Project 3.</p>
                <a href="#" class="project-btn">View Details</a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 My Portfolio</p>
        </div>
    </footer>
</body>
</html>
