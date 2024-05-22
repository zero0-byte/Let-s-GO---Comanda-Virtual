<?php echo view('header'); ?>
<div class="container">
    <div class="row" style="margin-top:20px;margin-bottom:30px;">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Gráfico de Meses:</div>
                <div class="card-body" style="text-align:center;">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Gráfico de Dias:</div>
                <div class="card-body" style="text-align:center;">
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="container mt-5">
                <div class="card">
                    <div class="card-header">Clientes devendo</div>
                    <div class="card-body">
                        <?php if(!$devedores){ ?> 
                            <p>Nenhum</p>
                        <?php } ?>
                        <?php foreach((array)$devedores as $l){ ?>
                            <p><?php echo $l['nome'].' - '.$l['celular']; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="container">
                <div class="card">
                    <div class="card-header">Valores Totais:</div>
                    <div class="card-body" style="text-align:center;">
                        <p style="font-weight: 600;">Vendas: R$ <?php echo number_format($valores[0]['vendido'], 2, ',', '');?></p>
                        <p style="color: #790606;font-weight: 600;">Custo: R$ <?php echo number_format($valores[0]['custo'], 2, ',', '');?></p>
                        <p style="color: #08a108;font-weight: 600;font-size: 30px;">Lucro: R$ <?php echo number_format($valores[0]['vendido'] - $valores[0]['custo'], 2, ',', '') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
    var ctx = document.getElementById("myChart").getContext("2d");
        var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: [
                <?php
                    // Adicionar as labels do eixo X
                    foreach ((array)$valores_mes as $row) {
                        echo '"' . mes($row["mes"]) . '/' . $row["ano"] . '", ';
                    }
                ?>
            ],
            datasets: [{
            label: "Total Vendas R$",
            data: [
                <?php
                // Adicionar os valores do eixo Y
                foreach ((array)$valores_mes as $row) {
                    echo $row["total_vendas"] .',';
                }
                ?>
            ],
            backgroundColor: "rgba(54, 162, 177, 0.2)",
            borderColor: "rgba(54, 162, 235, 1)",
            borderWidth: 1
            },{
                label: "Total Custo R$",
                data: [
                    <?php
                    // Adicionar os valores do eixo Y
                    foreach ((array)$valores_mes as $row) {
                        echo $row["total_custo"] .',';
                    }
                    ?>
                ],
                backgroundColor: "rgba(177, 0, 0, 0.2)",
                borderColor: "rgba(255, 0, 0, 1)",
                borderWidth: 1
            },{
                label: "Lucro R$",
                data: [
                    <?php
                    // Adicionar os valores do eixo Y
                    foreach ((array)$valores_mes as $row) {
                        echo $row["total_vendas"]-$row["total_custo"] .',';
                    }
                    ?>
                ],
                backgroundColor: "rgba(0, 177, 0, 0.2)",
                borderColor: "rgba(0, 255, 0, 1)",
                borderWidth: 1
            }]
        },
        options: {
            scales: {
            yAxes: [{
                ticks: {
                beginAtZero: true
                }
            }]
            }
        }});

        var ctx2 = document.getElementById("myChart2").getContext("2d");
        var myChart2 = new Chart(ctx2, {
        type: "bar",
        data: {
            labels: [
                <?php
                    // Adicionar as labels do eixo X
                    foreach ((array)$valores_dia as $row) {
                        echo '"' . $row["dia"] . '/' . mes($row["mes"]) . '", ';
                    }
                ?>
            ],
            datasets: [{
            label: "Total Vendas R$",
            data: [
                <?php
                // Adicionar os valores do eixo Y
                foreach ((array)$valores_dia as $row) {
                    echo $row["total_vendas"] .',';
                }
                ?>
            ],
            backgroundColor: "rgba(54, 162, 177, 0.2)",
            borderColor: "rgba(54, 162, 235, 1)",
            borderWidth: 1
            },{
                label: "Total Custo R$",
                data: [
                    <?php
                    // Adicionar os valores do eixo Y
                    foreach ((array)$valores_dia as $row) {
                        echo $row["total_custo"] .',';
                    }
                    ?>
                ],
                backgroundColor: "rgba(177, 0, 0, 0.2)",
                borderColor: "rgba(255, 0, 0, 1)",
                borderWidth: 1
            },{
                label: "Lucro R$",
                data: [
                    <?php
                    // Adicionar os valores do eixo Y
                    foreach ((array)$valores_dia as $row) {
                        echo $row["total_vendas"]-$row["total_custo"] .',';
                    }
                    ?>
                ],
                backgroundColor: "rgba(0, 177, 0, 0.2)",
                borderColor: "rgba(0, 255, 0, 1)",
                borderWidth: 1
            }]
        },
        options: {
            scales: {
            yAxes: [{
                ticks: {
                beginAtZero: true
                }
            }]
            }
        }});
</script>
<?php
    function mes($m){
        if($m == 1){
            $m = 'Janeiro';
        }
        if($m == 2){
            $m = 'Fevereiro';
        }
        if($m == 3){
            $m = 'Março';
        }
        if($m == 4){
            $m = 'Abril';
        }
        if($m == 5){
            $m = 'Maio';
        }
        if($m == 6){
            $m = 'Junho';
        }
        if($m == 7){
            $m = 'Julho';
        }
        if($m == 8){
            $m = 'Agosto';
        }
        if($m == 9){
            $m = 'Setembro';
        }
        if($m == 10){
            $m = 'Outubro';
        }
        if($m == 11){
            $m = 'Novembro';
        }
        if($m == 12){
            $m = 'Dezembro';
        }
        return $m;
    }
?>
<?php echo view('footer'); ?>
