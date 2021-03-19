<?php
    $message = "結果は...";
    $playerHand = htmlspecialchars($_REQUEST['playerHand']);
    $hand = ['グー', 'チョキ', 'パー'];
    $rand_num = rand(0,2);
    $computerHand = $hand[$rand_num];

    if($playerHand == $computerHand){
        $message_result = "あいこでした。";
    }elseif($playerHand == 'グー' && $computerHand == 'チョキ' || $playerHand == 'チョキ' && $computerHand == 'パー' || $playerHand == 'パー' && $computerHand == 'グー'){
        $message_result = "あなたの勝ちです！！";
    }else{
        $message_result = "あなたの負けです...";
    }

    require_once 'views/result.tpl.php';
