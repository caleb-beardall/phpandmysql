<p><?=$totalJokes?> jokes have been submitted to the Internet Joke Database.</p>

<?php foreach ($jokes as $joke): ?>
<blockquote>
    <p>
        <?=htmlspecialchars($joke['joke_text'], ENT_QUOTES, 'UTF-8')?>

        (by <a href="mailto:
            <?php echo htmlspecialchars($joke['author_email'], ENT_QUOTES, 'UTF-8'); ?>">
            <?php echo htmlspecialchars($joke['author_name'], ENT_QUOTES, 'UTF-8'); ?></a>)

        <a href="editjoke.php?id=<?=$joke['id']?>">Edit</a>
        
        <form action="deletejoke.php" method="post">
            <input type="hidden" name="id" value="<?=$joke['id']?>">
            <input type="submit" value="Delete">
        </form>
    </p>
</blockquote>
<?php endforeach; ?>