<!DOCTYPE html>
<html>

<head>
    <title>Main</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url("bg4.jpg");
        background-size: cover;
    }
    
    header {
        background-color: #333;
        color: white;
        padding: 20px;
        text-align: center;
    }
    
    h1 {
        margin: 0;
    }
    
    nav {
        background-color: #eee;
        padding: 10px;
    }
    
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
    
    li {
        float: left;
    }
    
    a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    
    a:hover {
        background-color: #ddd;
    }
    
    main {
        margin: 0 auto;
        max-width: 800px;
        padding: 20px;
    }
    
    section {
        margin: 20px 0;
    }
    
    .internship {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
        background-color: rgb(236, 226, 226);
    }
    
    footer {
        background-color: #333;
        color: white;
        padding: 10px;
        text-align: center;
    }
    
    form {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }
    
    label {
        margin-bottom: 10px;
    }
    
    input[type="text"] {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 8px;
    }
    
    input[type="submit"] {
        background-color: #333;
        border: none;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }
    
    input[type="submit"]:hover {
        background-color: #444;
    }
</style>

<body>
    <header>
        <h1>path 4 Future</h1>
        <h1>Internship Opportunities</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#featured">Featured Internships</a></li>
            <li><a href="#categories">Internship Categories</a></li>
            <li><a href="#search">Search Internships</a></li>
        </ul>
    </nav>
    <main>
        <section id="featured">
            <h2>Featured Internships</h2>
            <div class="internship">
                <h3> <u>Fullstack web-deb Internship</u> </h3>
                <p> at XYZ Company <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dignissim diam a lacus ornare, sed aliquet dolor aliquam. Proin non ante odio. Sed vel magna vel velit euismod suscipit. Aliquam erat volutpat. Duis auctor
                    vehicula turpis, ac mollis tellus iaculis non.</p>
                <a href="7fullst.php">Learn More</a>
            </div>
            <div class="internship">
                <h3><u>Software Development Internship</u> </h3>
                <p>at ABC Company <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dignissim diam a lacus ornare, sed aliquet dolor aliquam. Proin non ante odio. Sed vel magna vel velit euismod suscipit. Aliquam erat volutpat. Duis auctor
                    vehicula turpis, ac mollis tellus iaculis non.</p>
                <a href="7fullst.php">Learn More</a>
            </div>
        </section>
        <section id="categories">
            <h2>Internship Categories</h2>
            <ul>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Software Development</a></li>
                <li><a href="#">Finance</a></li>
                <li><a href="#">Human Resources</a></li>
            </ul>
        </section>
        <section id="search">
            <h2>Search Internships</h2>
            <form>
                <label for="keywords">Internship:</label><br>
                <input type="text" id="keywords" name="keywords">
            </form>
        </section>
    </main>
    <footer>
        <p>Copyright 2022 Internship Opportunities</p>
    </footer>
</body>

</html>