<?php 
$path = URL_PATH;
$menuElements = 
[
    /*
    [
    'href' => $path,
    'menuTitle' => 'Users from file',
    'extra' => [ 'target' => '_blank'],
    'childs' => [
        [
        'href' => '404',
        'menuTitle' => 'Load Error page',
        'extra' => [ 'target' => '_blank']
        ],
        [
        'href' => URL_PATH.'users/create',
        'menuTitle' => 'Add User',
        'extra' => [ 'target' => '_blank']
        ],
        [
        'href' => $path.'start.php?U=users&A=deleteuser',
        'menuTitle' => 'Delete User',
        'extra' => [ 'target' => '_blank']
        ],
        [
        'href' => $path.'start.php?U=users&A=modifyuser',
        'menuTitle' => 'Modify User',
        'extra' => [ 'target' => '_blank']
        ]
    ]
    ],
    */
    [
        'href' => $path, 
        'menuTitle' => 'Users from DB',
        'extra' => [ 'target' => '_blank'],
        'childs' => [
            [
            'href' => URL_PATH.'users',
            'menuTitle' => 'List all User',
            'extra' => [ 'target' => '_blank']
            ],
            [
                'href' => URL_PATH.'users/list',
                'menuTitle' => 'Show one User',
                'extra' => [ 'target' => '_blank']
            ],
            [
            'href' => URL_PATH.'users/create',
            'menuTitle' => 'Add User',
            'extra' => [ 'target' => '_blank']
            ],
            [
            'href' => URL_PATH.'users/delete',
            'menuTitle' => 'Delete User',
            'extra' => [ 'target' => '_blank']
            ],
            [
            'href' => URL_PATH.'users/modify',
            'menuTitle' => 'Modify User',
            'extra' => [ 'target' => '_blank']
            ]
        ]
        ],
    [
        'href' => '#', 
        'menuTitle' => 'Picture Gallery',
        'extra' => ['target' => '_blank'],
        'childs' => [[
        'href' => 'protected/views/content.php',
        'menuTitle' => 'Upload Picture'],
        [
        'href' => '#',
        'menuTitle' => 'Delete Picture'],
        [
        'href' => '#',
        'menuTitle' => 'Modify Picture'
            ]
            ]
    ],
    [
        'href' => $path.'start.php?U=fileupload',
        'menuTitle' => 'Fileupload'
    ],
    [
        'href' => $path.'login.php?U=login',
        'menuTitle' => 'Login'
    ] 

    ];

$menuCnt = count($menuElements);

?>
<header class="hero">
        <div id="navbar" class="navbar">
            <h1 class="logo"><span class="text-primary">Beauty</span> Salon</h1>
            <nav>
                <?php 
                print_menu($menuElements)
                ?>
            </nav>
        </div>
        <div class="content">
            <h1>Our passion is Beauty</h1>
            <p>We make you look better</p>
            <a href="#about" class="btn"><i class="fas fa-chevron-right"></i> About us</a>
    </header>
