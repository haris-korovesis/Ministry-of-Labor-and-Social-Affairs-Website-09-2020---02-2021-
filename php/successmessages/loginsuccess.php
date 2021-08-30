<?php if (count($success) > 0): ?>
    <div class="success">
        <?php foreach ($success as $suc): ?>
            <p><?php echo $suc; ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>