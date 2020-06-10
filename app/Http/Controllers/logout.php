<?php namespace App\Http\Controllers;
    session_start();
    
    class logout{
        function out(){
          // $_SESSION=null;
            $_SESSION['rule']=5;
            return redirect('Login');
        }
    }

?>