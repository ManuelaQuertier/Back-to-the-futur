<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back to the futur</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-7">
            <div class="p-3 bg-dark">
                <p class="mb-4 border border-danger border-4 text-warning text-center">
                        <?php 
                            $presentTime = new DateTime ();
                                echo $presentTime->format('M d Y | A h-i');
                        ?>
                </p>

                <p class="mb-5 border border-danger border-4 text-warning text-center">
                        <?php    
                            $destinationTime = new DateTime ('2023-03-01 14:30');
                                echo $destinationTime->format('M d Y | A h-i');
                        ?>
                    </p>
            
                <p class="border border-warning border-4 text-white text-center">
                    <?php
                        $interval = $presentTime->diff($destinationTime);
                        echo $interval->format('%y ans %m mois %d jours %H heures et %i minutes');
                    ?>
                </p>

                <p class="mb-5 border border-warning border-4 text-white text-center">
                    <?php
                        $intervalMinutes = $interval->i;
                        $intervalMinutes = $intervalMinutes + ($interval->days*24*60);
                        echo $intervalMinutes.' minutes';
                    ?>
                </p>

                <p class="border border-primary border-4 text-white text-center">
                    <?php
                        $nbLitres=($intervalMinutes/10000);
                        $nbLitres=(round($nbLitres)+1);
                        echo $nbLitres.' Litres';
                    ?>
                </p>
            </div>
</div>
</div>
</div>
</body>
</html>