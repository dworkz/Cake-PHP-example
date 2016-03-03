<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>The CakePHP Test Project</title>
    <meta name="description" content="The CakePHP Test Project">
    <meta name="author" content="Me">

    <link rel="stylesheet" href="/css/styles.css">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
    <div class="left-menu">
        <div class="grey-square"></div>
        <div class="user-name">Max Mustermann</div>
    </div>

    <div id="content">
        <!-- Header -->
        <div class="header-container">
            <header id="header">
                <div class="menu-toggle"></div>
            </header>
        </div>
        <!-- end Header -->

        <div class="main-content">
            <?=$content_for_layout ?>
        </div>
    </div>

    <script src="/js/jquery-1.11.2.min.js"></script>
    <script src="/js/scripts.js"></script>
</body>
</html>