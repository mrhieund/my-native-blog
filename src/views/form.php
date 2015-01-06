<?php echo $notes; ?>
<form action="/test" method="post" class="form">
    <div class="name div">
        <label for="name">
            <span class="label">Name:</span>
            <input class="input" type="text" id="name" name="username"/>
        </label>
    </div>
    <div class="email div">
        <label for="mail">
            <span class="label">E-mail:</span>
            <input class="input" type="email" id="mail" name="email"/>
        </label>
    </div>
    <div class="msg div">
        <label for="msg">
            <span class="label">Message:</span>
            <textarea class="textarea" id="msg" name="user_message"></textarea>
        </label>
    </div>
    <div class="button div">
        <button type="submit">Send your message</button>
    </div>
</form>