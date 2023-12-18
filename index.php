<?php 

    // Edit translations here
    $translations = [
        'nl' => [
            'backToWebsite' => 'Terug naar website'
        ],
        'de' => [
            'backToWebsite' => 'Zurück zur Website'
        ],
        'en' => [
            'backToWebsite' => 'Back to website'
        ]
    ];

    $requestUri = $_SERVER['REQUEST_URI'];
    $uriSegments = explode('/', $requestUri);

    if (!empty($uriSegments[1])) {
        $languageCode = $uriSegments[1];
    } else {
        $languageCode = 'nl'; // Default fallback language
    }    
?>

<?php !isset($seoTitle) ? $seoTitle = 'Reserveren' : '' ?>
<?php !isset($title) ? $title = 'Reserveren' : '' ?>


<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <title><?php echo $seoTitle; ?></title>

    <meta name="description" content>

    <base href="/<?php echo $languageCode; ?>">

    <link rel="icon" type="image/png" href="favicon.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/style.css">
</head>

<body>
    <script type="text/javascript">
        window.recranetConfig = {
            organization: '1000',
            locale: '<?php echo $languageCode; ?>',
            currency: 'EUR',
        };
    </script>
    <script src="https://static.recranet.com/elements/<?php echo $languageCode; ?>/sdk.js?<?php echo rand(); ?>" async></script>
    <header>
        <div class="header-image">
            <div class="container">
                <h1 class="header-title"><?php echo $title; ?></h1>
            </div>
        </div>
    </header>

    <main>
        <div class="py-5">
            <div class="container">
                <?php if (isset($translations[$languageCode]['backToWebsite'])) : ?>
                    <div class="d-flex justify-content-lg-end">
                        <a href="https://recranet.com" class="btn btn-outline-primary rounded-pill mb-4"><?php echo $translations[$languageCode]['backToWebsite']; ?></a>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col">
                        <recranet-accommodations class="recranet-element"></recranet-accommodations>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>