<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css" />
    <title>book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>


<body>

    <section class="header">
        <a href="home.php" class="logo">travel</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="book.php">book</a>
            <a href="logout.php">logout</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <div class="heading" style="background:url(./assets/pexels-photo-310435.jpeg) no-repeat">
        <h1>book</h1>
    </div>

    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form style="border-radius: 5px;" action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name</span>
                    <input autofocus type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone</span>
                    <input type="number" placeholder="enter your number" name="phone" min=0>
                </div>
                <div class="inputBox">
                    <span>address</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to</span>
                    <input type="text" placeholder="enter where you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>how many</span>
                    <input type="number" placeholder="number of guests" name="guests" min=0>
                </div>
                <div class="inputBox">
                    <span>arrivals</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving</span>
                    <input type="date" name="leaving" id="leaving-date">
                </div>
            </div>
            <div style="display: flex; justify-content:center; align-items:center;">
                <input style="text-align: center; border-radius:10px;width:80%;" type="submit" value="submit" class="btn" name="send">
            </div>
        </form>
    </section>

    <script>
        // Get the input element
        var input = document.getElementById('leaving-date');

        // Get the current date
        var today = new Date().toISOString().split('T')[0];

        // Set the minimum attribute to today's date
        input.setAttribute('min', today);

        // Add an event listener to handle date changes
        input.addEventListener('input', function() {
            // Get the selected date from the input
            var selectedDate = new Date(this.value);

            // Compare the selected date with today's date
            if (selectedDate < new Date(today)) {
                // Clear the value if it's a previous date
                this.value = '';
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./js//script.js"></script>
</body>

</html>
