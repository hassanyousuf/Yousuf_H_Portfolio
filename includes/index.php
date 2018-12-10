<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/foundation.css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
    <main>
       <p> SEND EMAIL </p> 
       <form class="contact-form" action="../includes/contact.php" method="post">
           <input type="text" name="name" placeholder="full name">
           <input type="text" name="mail" placeholder="your email">
           <input type="text" name="subject" placeholder="full name">
           <textarea name="message" placeholder="message"></textarea>
           <button type="submit" name="submit">SEND MAIL</button>
        </form>
    </main>
</body>
<script src="js/main.js">
</html>