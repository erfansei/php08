<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plans</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="m-auto">
    <?php include_once("data.php"); ?>
    <div class="flex gap-2 justify-between text-center">
        <?php
            foreach($pCol->getItem() as $plans){
                echo <<<HTML
                    <div class="bg-slate-100">
                        <h1>Plan Name: {$plans->getName()}</h1>
                        <h3>Plan Date: {$plans->getTime()}</h3>
                        <h5>Plan Price: {$plans->getPrice()} $</h5>
                        <form method="POST" action="form.php">
                            <input class="bg-slate-500 text-white p-2" type="submit" value="Buy" />
                        </form>
                    </div>
                HTML;
            }
        ?>
    </div>
</body>
</html>