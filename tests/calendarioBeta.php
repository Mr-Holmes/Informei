<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            text-align: center;
           
        }
        .wrapper {
            width: 714px;
        }
        .day {
            width: 100px;
            height: 100px;
            float: left;
            border: 1px solid black;
            border-collapse: collapse;
            line-height: 100px;
        }
        .diaDaSemana{
            width: 100px;
            height: 25px;
            float: left;
            /* line-height: 12.5px; */
            margin-top: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <?php

        // $m = date('m');
        $m = 12;

        $dim = cal_days_in_month(CAL_GREGORIAN, $m, date('Y'));
        $day1 = date('N', strtotime(date('Y').'-'.$m.'-01'));
        // pegar dia atual
        //pegar mês anterior
        ?>

        <div class= "diaDaSemana">Domingo</div>
        <div class= "diaDaSemana">Segunda</div> 
        <div class= "diaDaSemana">Terça</div>
        <div class= "diaDaSemana">Quarta</div>
        <div class= "diaDaSemana">Quinta</div>
        <div class= "diaDaSemana">Sexta</div>
        <div class= "diaDaSemana">Sábado</div>
        
        <?php
        if ($day1 < 6) {
            for ($i = 0; $i < $day1; $i++) {
                echo '<div class="day"></div>';
            }
        }
        for ($i = 1; $i <= $dim; $i++) {
            echo '<div class="day">' . $i . '</div>';
        }

        ?>
    </div>
</body>
</html>
