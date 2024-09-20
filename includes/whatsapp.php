<style>
.whatsapp {
    width: 180px;
    position: fixed;
    bottom: 135px;
    border-radius: 15px;
    overflow: hidden;
    left: 15px;
    z-index: 999;
}
</style>

<?php
$phone_number = '919005155349';
$message = 'Hi, XavTech';
?>

<div class="whatsapp">
  <a href="https://api.whatsapp.com/send?phone=<?php echo $phone_number; ?>&amp;text=<?php echo urlencode($message); ?>" target="_blank">
    <img style="width:70px" src="img/WhatsApp.svg.webp" class="img-responsive" alt="whatsapp">
  </a>
</div>
