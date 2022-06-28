<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>D. SH. web site</title>
</head>

<body>
    <?php require "blocks/header.php" ?>

    <div class="container mt-5">
        <h3 class="mb-5">My skills</h3>
        <div class="d-flex flex-wrap">
            <?php
            for ($i = 0; $i < 5; $i++) :
            ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
                        </svg>

                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>


    <?php require "blocks/footer.php" ?>
</body>

</html>