<?php
    $this->assets->addFile('css/bootstrap.min.css');
    $this->assets->addFile('css/bootstrap-theme.min.css');
    $this->assets->addFile('css/zenburn.css');
    $this->assets->addFile('js/bootstrap.min.js');
    $this->assets->addFile('js/highlight.pack.js');
    $this->assets->addFile('js/jquery-2.2.3.min.js');
?>

<head>
    <title><?php echo $this->page->getTitle(); ?></title>
    <script src="js/jquery-2.2.3.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/zenburn.css" />
    <script src="js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <meta charset="UTF-8">
    <style>

        PRE {
            background-color: #3f3f3f !important;
            border: none !important;
        }

        .toc {
            margin-top: 25px;
        }

        .toc DL {
            margin-left: 1em;
        }

        nav table {
            width: 100%;
        }

        nav.navheader td.curr,
        nav.navheader th.curr {
            text-align: center;
        }

        nav.navheader td.prev,
        nav.navheader th.prev {
            width: 30%;
            text-align: left;
        }

        nav.navheader td.parent,
        nav.navheader th.parent {
            width: 40%;
            text-align: center;
        }

        nav.navheader td.next,
        nav.navheader th.next {
            text-align: right;
            width: 30%;
        }

        nav.navfooter td.prev,
        nav.navfooter th.prev {
            width: 30%;
            text-align: left;
        }

        nav.navfooter td.parent,
        nav.navfooter th.parent {
            width: 40%;
            text-align: center;
        }

        nav.navfooter td.next,
        nav.navfooter th.next {
            text-align: right;
            width: 30%;
        }
    </style>
</head>
