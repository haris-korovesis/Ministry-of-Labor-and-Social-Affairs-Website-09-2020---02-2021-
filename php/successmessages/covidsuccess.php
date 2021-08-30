<?php if (count($success) > 0): ?>
    <div class="covidsuccess">
        <?php foreach ($success as $suc): ?>
            <p><?php echo $suc; ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>