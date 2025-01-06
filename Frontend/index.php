<?php
include("includes/navbar.php");
?>
<?php
include("message.php");
?>


<div class="body_content">
    <div class="img1">
        <h2>Welcome to BookVerse</h2>
        <p>
        Your ultimate online library designed to ignite your passion for reading and learning. At BookVerse, we believe that knowledge has the power to transform lives, and we are committed to making it accessible to everyone. Whether you’re a casual reader, an avid bookworm, or a researcher, our platform is a one-stop destination for an extensive collection of books and resources to inspire and educate. Step into a world where stories, ideas, and information converge to open new doors of discovery.</p>
    </div>

    <div class="image1">
        <div class="imagehead" ><h2>Smooth User Experience</h2></div>
        <div class="imagepar"><h6>Your Personal Library, Just a Click Away!</h6></div>
    </div>

    <div class="img2">
    <h3>Explore, Learn, and Grow with BookVerse</h3>
        <p>
         Our carefully curated digital library offers a diverse range of books across genres, languages, and subjects. From timeless classics and modern novels to academic textbooks and reference materials, there’s something for everyone here. Use our intuitive search and filtering tools to quickly find the titles you love or discover new ones that spark your curiosity. BookVerse is more than just a library—it’s a gateway to a universe of knowledge at your fingertips.</p>
    </div>
    <div class="img3">
        <p>
        At BookVerse, we’ve made convenience and usability our priority. Access your favorite books anytime, anywhere with just a few clicks. Our user-friendly interface ensures a seamless browsing experience for readers of all ages. Save your favorite titles, create personalized reading lists, and enjoy features designed to enhance your reading journey. Whether you’re on a laptop, tablet, or smartphone, BookVerse ensures uninterrupted access to the world of literature and learning.</p>
    </div>
    <div class="image2">
        <div class="imagehead" ><h2>Extensive Library</h2></div>
        <div class="imagepar"><h6>Access thousands of books in one place.</h6></div>
    </div>
    <div class="img4">
        <h3>Join our thriving BookVerse Community</h3>
        <p>
        Where readers connect, share ideas, and celebrate the love of books. Participate in engaging discussions, leave reviews, and gain insights from fellow readers. As part of our mission to promote literacy and lifelong learning, we also host regular events, book recommendations, and exclusive resources to keep your literary spirit alive. Dive into BookVerse today and be part of a vibrant network that values the transformative power of reading.
        </p>
    </div>
    <div class="image3">
        <div class="imagehead" ><h2>Community Connection</h2></div>
        <div class="imagepar"><h6>Engage with like-minded readers and join discussions.Join our Discord Community</h6></div>
    </div>
</div>



    <div class="book-container">
        <h1>Featured Books</h1>
        <div class="book-cards">
            <div class="book-card">
                <div class="image-placeholder"></div>
                <div class="book-info">
                    <h2><a href="<?php echo isset($_SESSION['auth_user']) ? 'Books/Novel/the-great-gatsby.pdf' : 'login.php'; ?>">The Great Gatsby</a></h2>
                    <p><em>F. Scott Fitzgerald</em></p>
                    <p>A story of decadence and excess in Jazz Age America.</p>
                    <div class="buttons">
                        <a href="#" class="details-btn">View Details</a>
                        <button class="add-btn">Add to List</button>
                    </div>
                </div>
            </div>
            <div class="book-card">
                <div class="image-placeholder"></div>
                <div class="book-info">
                    <h2><a href="<?php echo isset($_SESSION['auth_user']) ? 'Books/Novel/TKMB.pdf' : 'login.php'; ?>">To Kill a Mockingbird</a></h2>
                    <p><em>Harper Lee</em></p>
                    <p>A novel about racial injustice and the loss of innocence in the American South.</p>
                    <div class="buttons">
                        <a href="#" class="details-btn">View Details</a>
                        <button class="add-btn">Add to List</button>
                    </div>
                </div>
            </div>
            <div class="book-card">
                <div class="image-placeholder"></div>
                <div class="book-info">
                    <h2><a href="<?php echo isset($_SESSION['auth_user']) ? 'Books/Novel/1984.pdf' : 'login.php'; ?>">1984</a></h2>
                    <p><em>George Orwell</em></p>
                    <p>A dystopian social science fiction novel and cautionary tale.</p>
                    <div class="buttons">
                        <a href="#" class="details-btn">View Details</a>
                        <button class="add-btn">Add to List</button>
                    </div>
                </div>
            </div>
            <div class="book-card">
                <div class="image-placeholder"></div>
                <div class="book-info">
                    <h2><a href="<?php echo isset($_SESSION['auth_user']) ? 'Books/Novel/Pride_and_Prejudice.pdf' : 'login.php'; ?>">Pride and Prejudice</a></h2>
                    <p><em>Jane Austen</em></p>
                    <p>A romantic novel of manners set in Georgian England.</p>
                    <div class="buttons">
                        <a href="#" class="details-btn">View Details</a>
                        <button class="add-btn">Add to List</button>
                    </div>
                </div>
            </div>
        </div>
    </div>







<?php
include("includes/footer.php");
?>