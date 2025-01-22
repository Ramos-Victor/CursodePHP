<h2 class="text-left mb-4 text-primary">CONTACT</h2>

<form action="/pages/forms/contato.php" method="POST">

    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Type your name">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Type your email">
    </div>

    <div class="form-group">
        <label for="">Subject</label>
        <input type="text" class="form-control" name="subject" placeholder="Type your subject">
    </div>

    <div class="form-group">
        <label for="">Message</label>
        <textarea class="form-control" name="message" id="" cols="30" rows="10"
            placeholder="Type your message"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

</form>

<?php echo get('message'); ?>