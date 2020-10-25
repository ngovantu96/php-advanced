
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content{
            width:100%;
            height: auto;
            display: flex;
            border: 1px solid black;
        }
        .show{
            width: 100%;;
            height: auto;
            display: flex;
        }
        .show-div{
            width: 40%;
            height: auto;
            background-color: red;
        }
    </style>
</head>
<body>
<div class="content">
    <div class="show">
        <?php for ($i = 1; $i < 11; $i++) : ?>
            <div class="show-div">
                <?php for ($j = 0; $j < 11; $j++) : ?>
                    <p><span><?= $i ?></span> x <span><?= $j ?></span> = <?= $i * $j ?></p>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
        </div>
    </div>
</body>
</html>