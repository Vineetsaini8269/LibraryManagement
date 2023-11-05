<?php
include("header.php");

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: loginS.php");
    exit();
}

require 'verify-loginS.php';

$host = "localhost";
$username = "root";
$password = "";
$database = "library_db";

function openConnection()
{
    global $host, $username, $password, $database;
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function getAllBooks()
{
    $conn = openConnection();
    $sql = "SELECT * FROM `books` WHERE `copies` > 2";
    $result = $conn->query($sql);
    $books = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $books[] = $row;
        }
    }
    $conn->close();
    return $books;
}

function searchBooks($keyword)
{
    $conn = openConnection();
    $sql = "SELECT * FROM `books` WHERE  `copies` > 0 AND (`title` LIKE '%$keyword%' OR `author` LIKE '%$keyword%')";
    
    $result = $conn->query($sql);
    $books = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $books[] = $row;
        }
    }
    $conn->close();
    return $books;
}

function saveBookRequest($books_isbn, $Username)
{
    $conn = openConnection();
    $sql = "INSERT INTO `pending_books_requests` (`request_id`, `Username`, `book_isbn`, `time`) VALUES (NULL, '$Username', '$books_isbn', NOW());";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        return true;
    } else {
        $conn->close();
        return false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Interface</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Student Interface</h1>
    </header>
    <section>
        <div class="nav-container">
            <nav class="nav">
                <?php
                $userDetails = getUserDetails($_SESSION['Username']);
                if ($userDetails) {
                    echo "<div>";
                    echo "<h3>Student</h3>";
                    echo "<h5>Name: <b>" . $userDetails['name'] . "</b></h5>";
                    echo "<h5>Email: " . $userDetails['email'] . "</h5>";
                    echo "<h5>Balance: " . $userDetails['balance'] . "</h5>";
                    echo "<button><a href='../logout.php'>Logout</a></button>";
                    echo "</div>";
                }
                ?>

                <div>
                    <button><a href="mypendingbookrequest.php">My pending book request</a></button>
                </div><br />
                <div>
                    <button><a href="myissuebook.php">Issue books</a></button>
                </div>
            </nav>
        </div>
        <div class="container">
            <h2>Search Books</h2>
            <form action="#" method="post">
                <input type="text" name="search_keyword" placeholder="Enter Title or Author">
                <input type="submit" name="search_books" value="Search">
            </form>
        </div>
    </section>

    <section>
        <h2>Book Listing</h2>
        <table border="1px" class="book-table">
            <tr>
                <th>S.No</th>
                <th>ISBN</th>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Price</th>
                <th>Copies</th>
                <th>Action</th>
            </tr>
            <?php
            if (isset($_POST['search_books'])) {
                $keyword = $_POST['search_keyword'];
                $searchedBooks = searchBooks($keyword);
                $i=1;
                if (count($searchedBooks) > 0) {
                    foreach ($searchedBooks as $book) {
                        echo "<tr>";
                        echo "<td class='tr'>" . $i . "</td>";
                        echo "<td>" . $book['isbn'] . "</td>";
                        echo "<td>" . $book['title'] . "</td>";
                        echo "<td>" . $book['author'] . "</td>";
                        echo "<td>" . $book['category'] . "</td>";
                        echo "<td>" . $book['price'] . "</td>";
                        echo "<td>" . $book['copies'] . "</td>";
                        echo "<td><a href='student.php?request_book=" . $book['isbn'] . "'>Request</a></td>";
                        echo "</tr>";
                        $i++;
                    }
                } else {
                    echo "<tr><td colspan='7'>No results found for the given keyword.</td></tr>";
                }
            }
            ?>
        </table>
    </section>

    <?php
    if (isset($_GET['request_book'])) {
        $books_isbn = $_GET['request_book'];
        $Username = $_SESSION['Username'];

        if (saveBookRequest($books_isbn, $Username)) {
            echo "<script>alert('Book request submitted successfully!');</script>";
            echo "<script>window.location.href ='student.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error submitting book request. Please try again later.');</script>";
        }
    } 
    ?><pre>






    </pre>
    
    <section>
        <div>
            <footer>
                <div class="footer-content">
                    <div class="contact-info">
                        <h4>Contact Us</h4>
                        <p>Email: kamleshlodhi9302@gmail.com</p>
                        <p>Phone: +1 123-456-7890</p>
                    </div>
                    <div class="social-media">
                        <h4>Follow Us</h4>
                        <!-- Add social media links here -->
                        <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                        <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
                        <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
                    </div>
                    <div class="useful-resources">
                        <h4>Useful Resources</h4>
                        <!-- Add useful resource links here -->
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                    </div>
                </div>
            </footer>
        </div>
        <script src="script.js"></script>
    </section>
</body>
</html>
