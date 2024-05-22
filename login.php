<?php echo view('header'); ?>
<style>
    .message{
        padding: 10px;
        text-align: center;
        background-color: #970303;
        color: #fff;
    }
    .message.success{
        background-color: #115a02;
    }
</style>
<?php if (session()->getFlashdata('msg')): ?>
        <div class="message"><?php echo session()->getFlashdata('msg'); ?></div>
    <?php endif; ?>
<div class="container mt-5">
    <form action="/login" method="post">
        <label for="username">Usuario:</label>
        <input class="form-control" type="text" id="username" name="username">
        <label for="password">Senha:</label>
        <input class="form-control" type="password" id="password" name="password">
        <button class="btn btn-primary" style="margin-top:20px;" type="submit">Entrar</button>
    </form>
</div>
<?php echo view('footer'); ?>
