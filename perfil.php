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
    <div class="message <?php if(session()->getFlashdata('msg') == 'Senha alterada com sucesso.'){echo 'success';}?>"><p><?php echo session()->getFlashdata('msg'); ?></p></div>
<?php endif; ?>
<div class="container mt-5">
    <h2>Alterar Senha</h2>
    <form action="/alterar" method="post">
        <label for="password">Senha:</label>
        <input class="form-control" type="password" id="password" name="password">
        <label for="newpassword">Nova Senha:</label>
        <input class="form-control" type="password" id="newpassword" name="newpassword">
        <label for="confirmpassword">Repita a Senha:</label>
        <input class="form-control" type="password" id="confirmpassword" name="confirmpassword">
        <button class="btn btn-primary" style="margin-top:20px;" type="submit">Alterar</button>
    </form>
</div>
<?php echo view('footer'); ?>
