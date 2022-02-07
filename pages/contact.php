<?php
if (
    !empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)
    && filter_var($_POST["name"], FILTER_CALLBACK, array('options' => 'not_empty'))
    && filter_var($_POST["message"], FILTER_CALLBACK, array('options' => 'not_empty'))
) {
    $msg = new Contact(["email" => $_POST["email"], "subject" => $_POST["name"], "message" => $_POST["message"]]);
}
?>

<form class="w-25 m-auto mt-5 d-flex flex-column" method="POST">
    <div class="mb-3">
        <label class="form-label">Sujet</label>
        <input type="text" class="form-control" name="subject" required placeholder="Sujet">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" required placeholder="nom@exemple.com">
    </div>
    <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea class="form-control" name="message" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary w-25 m-auto">Envoyer</button>
</form>