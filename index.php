<!DOCTYPE html>
<html>
    <head>
        <title>Travelog</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <h1 style="text-align: center;">TRAVELOG</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="blog.html">Latest Blogs</a>
            <a href="about.html">About Me</a>
        </nav>
        <div id="start">
        </div>
        <div id="exp">
            <h2>Explore</h2>
            <p>Travelog consists of experiences and moments from various parts of the globe. Explore and ignite your travel instincts! Signup below for weekly updates.</p>
            <center>
                <form action="index.php" method="post" id="signup">
                    <input type="text" placeholder="Name" name="name" id="name" required>
                    <input type="email" placeholder="Email" name="email" id="email" required>
                    <button type="submit">Submit</button>
                </form>
            </center>
        </div>
        <?php
        error_reporting(0);
        $conn = mysqli_connect("localhost", "root", "", "blog");
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $sql = "INSERT INTO signup VALUES ('$name','$email')";
            if(!mysqli_query($conn, $sql)){
                
            }
        }
        mysqli_close($conn);
        ?>
        <script>       
            document.getElementById("signup").reset();
        </script>
    </body>
</html>