<div id="notif" class="notyf__toast notyf__toast--upper notyf__toast--error">
    <div class="notyf__wrapper">
        <div class="notyf__icon"><span class="fas fa-times" style="color: rgb(255, 255, 255);"></span></div>
        <div class="notyf__message"><?php echo (!empty($message))?$message:'' ?></div>
    </div>
    <div class="notyf__ripple bg-success"></div>
</div>
<script>
    function sleep(ms) {
      return new Promise(resolve => setTimeout(resolve, ms));
   }
   sleep(2500).then(()=>{
    document.getElementById("notif").remove();
   });
</script>