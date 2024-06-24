<style>
footer {
  position: absolute;
  bottom: 1;
  width: 100%;
  height: auto;
}
</style>
<footer class="bg-dark text-white text-center py-3 mt-auto">
    <div class="container">
        <p class="mb-1">© 2024 - <?php echo date("Y"); ?> ReactZIP Production - All Rights Reserved.</p>
        <p class="small mb-0">Last Updated: 
            <?php
                date_default_timezone_set('Asia/Jakarta');
                echo date("F/j/Y, H:i") . " WIB";
            ?>
        </p>
    </div>
</footer>
