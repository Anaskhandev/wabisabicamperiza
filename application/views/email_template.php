<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
</head>

<body>
    <?php $msg = $this->session->userdata('message'); ?>
<div style=" box-sizing:border-box; margin: 0px;  display: flex; justify-content: center;" align="center">
    <div style="max-width: 900px;display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <div style="background-color: #f5ae38; width:3px; height:50px; margin-bottom: 10px;"></div>
        <div style="display: flex;flex-direction: column;align-items: center;">
            <h2 style="font-family: 'Roboto', sans-serif; color: #464646; margin: 10px; border: 3px solid #f5ae38; padding: 10px 8px; text-align:center;">Tu furgoneta ideal es una FURGONETA <?= $msg; ?></h2>
            <!--<img src="http://wabisabicamperiza.com/assets/front/img/white-logo.svg" alt="" style="height: 100px; border: 1px solid black; border-radius: 100%; width: max-content;">-->
        </div>
        <div style="background-color: #f5ae38; width:3px; height:50px; margin-top: 10px;"></div>
    </div>
</div>
</body>

</html>