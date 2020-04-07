<?php namespace App\Http\Controllers;
    session_start();
    
    class logout{
        function out(){
            //$_SESSION['name']=null;
            $_SESSION['rule']=null;
            return redirect('Login');
        }
    }

?>