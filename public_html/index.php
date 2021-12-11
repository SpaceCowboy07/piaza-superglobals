<!DOCTYPE html>
<html>
    <head>
        <!-- CSS ONLY -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0beat1/dist/css/">
    </head>
<body>
<h1>$GET Demostration</h1>
<h2> My favorite movie is: <?php echo htmlspecialchars($_GET['favorite']); ?></h2>
<h2> It awas released on: <?php echo htmlspecialchars($_GET['date']); ?></h2>
<h2> The gross revenue: <?php echo htmlspecialchars($_GET['money']); ?></h2>
<img src="https://m.media-amazon.com/images/I/51oa7FMnEML._AC_.jpg" alt="amazon.com"
style="width:128px;height:128px;">
</body>
</html>