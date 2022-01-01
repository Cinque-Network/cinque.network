<html>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="./ext/all.css">
<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="./ext/initial-variables.sass">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Cinque Network - A multi-algo coin forked from digibyte" />
<body class="is-mobile">


<body>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

        function get_data()
        {
            $name = $_GET['name'];
            $file_name = 'ExchangeRequests' . '.json';

            if (file_exists("$file_name")) {
                $current_data = file_get_contents("$file_name");
                $array_data = json_decode($current_data, true);

                $extra = array(
                    'Name' => $_GET['name'],
                    'Exchange' => $_GET['email']
                );
                $array_data[] = $extra;
                echo "file exist<br/>";
                return json_encode($array_data);
            } else {
                $datae = array();
                $datae[] = array(
                    'Name' => $_GET['name'],
                    'Exchange' => $_GET['email']
                );
                return json_encode($datae);
            }
        }

        $file_name = 'ExchangeRequests' . '.json';

        if (file_put_contents("$file_name", get_data())) {

        } else {
            echo 'There is some error';
        }
    }

    ?>
    <div class="has-text-centered title is-success">
        Success! Your request has been sent!
    </div>

</body>

</html>