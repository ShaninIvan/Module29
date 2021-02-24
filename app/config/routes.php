<?php
    $URIRoutes = [
        '\A/onlyauth\z' => 'onlyAuth/show',
        '/.*' => 'main/show'
    ];

    $submitRoutes = [
        'signUp' => 'Auth/up',
        'signIn' => 'Auth/in',
        'signOut' => 'Auth/out',
    ];

    $AJAXRoutes = [
        // 'comments-list' => 'Comments/show',
        // 'comment-send' => 'Comments/send',
        // 'comment-delete' => 'Comments/delete'
        
    ];

    return array('URIRoutes' => $URIRoutes, 'submitRoutes' => $submitRoutes, 'AJAXRoutes' => $AJAXRoutes);
?>
