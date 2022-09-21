<?php require_once APPROOT. '/views/users/incl/header.php';
require_once APPROOT. '/views/users/incl/sidenav.php';
?>

<main class="main-content position-relative max-height-vh-100 h-100 border">
 <? require_once APPROOT. '/views/users/incl/topnav.php'; ?>
<?
 $user = $data['receiver_id'];
 $result = $data['receiving'];
?>
<div class="wrapper">
    <section class="chat-area">
<div class="chat-box">
            <? if (count($result) > 0):
                foreach ($result as $item):
                    if ($item->outgoing_msg_id == $_SESSION['user_id']):?>
                        <div class='chat outgoing'>
                            <div class='details'>
                                 <p><?= $item->message ?></p>
                            </div>
                        </div>
                     <? else :?> 
                        <div class='chat incoming'>
                            <div class='details'>
                                 <p><?= $item->message ?></p>
                            </div>
                        </div>
                    <? endif ?>
                <? endforeach ?>
            <? else : ?>
                <div class='text'>No messages are available. Once you send message they will appear here.</div>
            <? endif ?>
       

</div>
<form method= "post" action="<?php echo URLROOT; ?>/users/chats/<?php echo $user ?>"  class="typing-area">
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <input type="submit" class=" btn-send" value="Send">
      </form>
    
       </section>
</div>
</main>      
      <?php 
require_once APPROOT. '/views/users/incl/footer.php';
require_once APPROOT. '/views/users/incl/script.php';

?>