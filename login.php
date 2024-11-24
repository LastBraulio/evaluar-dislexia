<?php
//include("config/config.php");
require_once ("model/ModelUsuarios.php");
@$modelo = new ModelUsuarios;
session_start();
if (isset($_SESSION['SESSION_ID']) && (time()-$_SESSION['ONCLOCK_'])>=(60*60)) {
    session_destroy();
    header('Location: login.php?out=');
    exit;
}

if ($_SERVER["REQUEST_METHOD"]=='GET') {
    if (isset($_GET['v'])) {

        if ($_GET['v']=="registro") {
            # code...
            include("vistas/login/registro.php");
        }else if($_GET['v']=="login"){

            include("vistas/login/login.php");
            //include("view/Pet/crear.php");
            //include("view/viewer/foot.php");
            
        }

    }
}else{
    if ($_SERVER["REQUEST_METHOD"]=='POST') {
        if (isset($_POST['logeado'])) {
            //require_once ("model/ModelCalendar.php");
            //@$modelo = new ModelCalendar;
            //$selectdb=obtener_db($_POST['inputdb']);
            //$selectdb=$_POST['inputdb'];
            //echo $selectdb; exit;

            //include("config/db.php");

            // consultaar siusuario existe por bd
            $username=$_POST['username'];
            $pass=$_POST['password'];
            //print_r($_POST);exit;
            /*$consulta = "SELECT par.id_participante, CONCAT(par.nombre,' ',par.apellido) AS nombre, par.nickname,par.tipo_participante FROM login lo, par_participantes par
            WHERE lo.cedula=par.cedula AND lo.email='".$email."' AND lo.password=".$pass." ";*/

            //$consulta = "select logi.nombre,logi.cedula  from login_up logi where logi.cedula = '".$email. "' and logi.identificador = sha1('".$pass."');";

            //echo $_POST['email']." - ".$_POST['password']; exit;

            //$users = $modelo->login_access($email,$pass);
            //$users= $users['data'];
            //print_r($users);exit;
            //echo count($users); exit;
            //Array ( [data] => Array ( [0] => Array ( [nombre] => administrador [0] => administrador [cedula] => 123456 [1] => 123456 ) ) ) 
            //if(count($users)==0){
              //  header("Location: index.php?inval=");
                //die();
            //}

            /*session_start();
            define( 'MAX_SESSION_TIEMPO', 3600 * 1 );
            //$_SESSION['id']=$fila[0];
            $_SESSION['nombre']=$users[0][0];
            $_SESSION['nickname']=$users[0][1];
            //$_SESSION['dbhost']=$selectdb;
            //$_SESSION['tipo_par']=$fila[3];
            $_SESSION['ID_SESSION']=session_id();
            $_SESSION['SESSION_ID']=session_id();
            $_SESSION['ONCLOCK_']=time();

            //echo $consulta; die();
            header("Location: dashboard.php");*/
            //echo"hola";
            if($_POST['menu']==1){
                $datos=[
                    'nickname' => $username,
                    'password' => $pass
                ];
                //print_r($datos);exit;
                //$users = $modelo->login_access($datos);
                $users = $modelo->login_access2($username,$pass);
                print_r($users);exit;
                $users= $users['data'];
                if(count($users)==0){
                    header("Location: index.php?inval=");
                    die();
                }
                session_start();
                define( 'MAX_SESSION_TIEMPO', 3600 * 1 );
                //$_SESSION['id']=$fila[0];
                $_SESSION['nombre']=$users[0][0];
                $_SESSION['nickname']=$users[0][1];
                //$_SESSION['dbhost']=$selectdb;
                //$_SESSION['tipo_par']=$fila[3];
                $_SESSION['ID_SESSION']=session_id();
                $_SESSION['SESSION_ID']=session_id();
                $_SESSION['ONCLOCK_']=time();
                header("Location: dashboard.php?v=dashboard");
            }else{
                header("Location: clases.php?v=dashboard");
            }
            
            die();
        }
    }
}

?>