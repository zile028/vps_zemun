<!-- editor -->
<div class="d-flex mb-3">
    <div class="col-12">
        <div id="toolbar">
        </div>
        <!-- Create the editor container -->
        <div id="editor" style="height: 300px">
            <?php if (isset($description)): ?>
                <?php echo $description; ?>
            <?php endif; ?>
        </div>
    </div>
    <textarea name="description" style="display: none"
              id="playground"><?php if (isset($description)): ?>
            <?php echo $description; ?>
        <?php endif; ?></textarea>
</div>
