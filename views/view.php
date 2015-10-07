<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="mybooks.css" rel="stylesheet" />
    <title>My Books - Home</title>
</head>
<body>
    <header>
        <h1>My Books</h1>
    </header>
		<?php foreach ($books as $book): ?>
		<article>
			<h2><?php echo $book->getTitle() ?></h2>
			<p><?php echo $book->getSummary() ?></p>
		</article>
		<?php endforeach ?>
    <footer class="footer">
        <a href="https://github.com/bpesquet/OC-MicroCMS">My Books</a> is a minimalistic CMS built as a showcase for modern PHP development.
    </footer>
</body>
</html>