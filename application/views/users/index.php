<h2><?php echo $title; ?></h2>

<?php foreach ($users as $users_item): ?>
    <h3><?php echo $users_item['mail_address']; ?></h3>
    <div class="main">
        <?php echo $users_item['role']; ?>
    </div>
    <p><a href="<?php echo site_url('users/'.$users_item['id']); ?>">View user</a></p>
<?php endforeach; ?>
