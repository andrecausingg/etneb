<?php
    // File
    require __DIR__ . '/vendor/autoload.php';
    $options = array(
        'cluster' => 'ap1',
        'useTLS' => true
    ); 

    $pusher = new Pusher\Pusher(
        '65d4d2555511a29e952f',
        '169dd0f61f2e69b47221',
        '1471524',
        $options
    );

    function is_user_logged_in(){
        // Insert your logic here
        return true;
    }

    // require_once("./app/php/loginMF.php");
    // if(isset($_SESSION["uat_id"])){
    //     $userId = $_POST['uat_id'];
    // }


    if (is_user_logged_in()){
        $auth = $pusher->authorizeChannel($_GET['channel_name'], $_GET['socket_id']);
        
        echo $pusher->authorizeChannel($_POST['socket_id'], $user_data);

        $callback = str_replace('\\', '', $_GET['callback']);
        header('Content-Type: application/javascript');
        echo($callback . '(' . $auth . ');');
    }else{
        header('', true, 403);
        echo "Forbidden";
    }
?>