<?php

    session_start();

    if(!isset($_SESSION['idUsuario'])){
        header("Location: login.php");
    }

    $nombre = $_SESSION['nombre'];
    $tipo_usuario = $_SESSION['idEquipo'];

?>

<?php
 $consulta=ConsultarInstruccion($_GET['idPartTwo']);

  function ConsultarInstruccion($id)
  {
    $conexion = mysqli_connect('localhost', 'root', '123456', 'exaver');
    $sentencia="SELECT * FROM exa1_part2 WHERE idPartTwo='".$id."' ";
    $resultado=mysqli_query($conexion,$sentencia) or die (mysqli_error());
    $filas=mysqli_fetch_assoc($resultado);
    return [
      $filas['instruccion'],
      $filas['e0'],
      $filas['e0_0'],
      $filas['er_0'],
      $filas['r1_1'],
      $filas['r1_2'],
      $filas['r2_1'],
      $filas['r2_2'],
      $filas['r3_1'],
      $filas['r3_2'],
      $filas['r4_1'],
      $filas['r4_2'],
      $filas['r5_1'],
      $filas['r5_2'],
      $filas['r6_1'],
      $filas['r6_2'],
      $filas['r7_1'],
      $filas['r7_2'],
      $filas['r8_1'],
      $filas['r8_2'],
      $filas['rA'],
      $filas['rB'],
      $filas['rC'],
      $filas['rD'],
      $filas['rE'],
      $filas['rF'],
      $filas['rG'],
      $filas['rH'],
      $filas['rI'],
      $filas['rJ'],
      $filas['nom0_1'],
      $filas['nom0_2'],
      $filas['nom0_3'],
      $filas['nom1_1'],
      $filas['nom1_2'],
      $filas['nom1_3'],
      $filas['nom2_1'],
      $filas['nom2_2'],
      $filas['nom2_3'],
      $filas['nom3_1'],
      $filas['nom3_2'],
      $filas['nom3_3'],
      $filas['nom4_1'],
      $filas['nom4_2'],
      $filas['nom4_3'],
      $filas['nom5_1'],
      $filas['nom5_2'],
      $filas['nom5_3'],
      $filas['nom6_1'],
      $filas['nom6_2'],
      $filas['nom6_3'],
      $filas['nom7_1'],
      $filas['nom7_2'],
      $filas['nom7_3'],
      $filas['nom8_1'],
      $filas['nom8_2'],
      $filas['nom8_3'],
    ];

  }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>EXAVER</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS--locales -->
    <link rel="stylesheet" href="./EXAVER Pagina 2_files/bootstrap.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="./EXAVER Pagina 2_files/font-awesome.min.css">
    <link rel="stylesheet" href="./EXAVER Pagina 2_files/Head.css">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./EXAVER Pagina 2_files/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./EXAVER Pagina 2_files/StylesPag.css">
    <link rel="stylesheet" href="./EXAVER Pagina 2_files/mysstyles.css">
    <link rel="stylesheet" href="./EXAVER Pagina 2_files/Check2.css">
    <link rel="stylesheet" href="./EXAVER Pagina 2_files/Check.css">
    <link rel="stylesheet" href="./EXAVER Pagina 2_files/MenuLateral.css">
    <link rel="stylesheet" href="./EXAVER Pagina 2_files/botones.css">
    <script src="./EXAVER Pagina 2_files/jquery.min.js">
    </script>
    <script src="./EXAVER Pagina 2_files/popper.min.js">
    </script>
    <script src="./EXAVER Pagina 2_files/bootstrap.min.js"> 
    </script>
    <script src="./EXAVER Pagina 2_files/sweetalert2@9"></script><style>.swal2-popup.swal2-toast{flex-direction:row;align-items:center;width:auto;padding:.625em;overflow-y:hidden;background:#fff;box-shadow:0 0 .625em #d9d9d9}.swal2-popup.swal2-toast .swal2-header{flex-direction:row;padding:0}.swal2-popup.swal2-toast .swal2-title{flex-grow:1;justify-content:flex-start;margin:0 .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{position:static;width:.8em;height:.8em;line-height:.8}.swal2-popup.swal2-toast .swal2-content{justify-content:flex-start;padding:0;font-size:1em}.swal2-popup.swal2-toast .swal2-icon{width:2em;min-width:2em;height:2em;margin:0}.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:1.8em;font-weight:700}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{font-size:.25em}}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{flex-basis:auto!important;width:auto;height:auto;margin:0 .3125em}.swal2-popup.swal2-toast .swal2-styled{margin:0 .3125em;padding:.3125em .625em;font-size:1em}.swal2-popup.swal2-toast .swal2-styled:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(50,100,150,.4)}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:1.6em;height:3em;transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.8em;left:-.5em;transform:rotate(-45deg);transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;transform-origin:0 1.5em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-toast-animate-success-line-tip .75s;animation:swal2-toast-animate-success-line-tip .75s}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-toast-animate-success-line-long .75s;animation:swal2-toast-animate-success-line-long .75s}.swal2-popup.swal2-toast.swal2-show{-webkit-animation:swal2-toast-show .5s;animation:swal2-toast-show .5s}.swal2-popup.swal2-toast.swal2-hide{-webkit-animation:swal2-toast-hide .1s forwards;animation:swal2-toast-hide .1s forwards}.swal2-container{display:flex;position:fixed;z-index:1060;top:0;right:0;bottom:0;left:0;flex-direction:row;align-items:center;justify-content:center;padding:.625em;overflow-x:hidden;transition:background-color .1s;-webkit-overflow-scrolling:touch}.swal2-container.swal2-backdrop-show,.swal2-container.swal2-noanimation{background:rgba(0,0,0,.4)}.swal2-container.swal2-backdrop-hide{background:0 0!important}.swal2-container.swal2-top{align-items:flex-start}.swal2-container.swal2-top-left,.swal2-container.swal2-top-start{align-items:flex-start;justify-content:flex-start}.swal2-container.swal2-top-end,.swal2-container.swal2-top-right{align-items:flex-start;justify-content:flex-end}.swal2-container.swal2-center{align-items:center}.swal2-container.swal2-center-left,.swal2-container.swal2-center-start{align-items:center;justify-content:flex-start}.swal2-container.swal2-center-end,.swal2-container.swal2-center-right{align-items:center;justify-content:flex-end}.swal2-container.swal2-bottom{align-items:flex-end}.swal2-container.swal2-bottom-left,.swal2-container.swal2-bottom-start{align-items:flex-end;justify-content:flex-start}.swal2-container.swal2-bottom-end,.swal2-container.swal2-bottom-right{align-items:flex-end;justify-content:flex-end}.swal2-container.swal2-bottom-end>:first-child,.swal2-container.swal2-bottom-left>:first-child,.swal2-container.swal2-bottom-right>:first-child,.swal2-container.swal2-bottom-start>:first-child,.swal2-container.swal2-bottom>:first-child{margin-top:auto}.swal2-container.swal2-grow-fullscreen>.swal2-modal{display:flex!important;flex:1;align-self:stretch;justify-content:center}.swal2-container.swal2-grow-row>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-grow-column{flex:1;flex-direction:column}.swal2-container.swal2-grow-column.swal2-bottom,.swal2-container.swal2-grow-column.swal2-center,.swal2-container.swal2-grow-column.swal2-top{align-items:center}.swal2-container.swal2-grow-column.swal2-bottom-left,.swal2-container.swal2-grow-column.swal2-bottom-start,.swal2-container.swal2-grow-column.swal2-center-left,.swal2-container.swal2-grow-column.swal2-center-start,.swal2-container.swal2-grow-column.swal2-top-left,.swal2-container.swal2-grow-column.swal2-top-start{align-items:flex-start}.swal2-container.swal2-grow-column.swal2-bottom-end,.swal2-container.swal2-grow-column.swal2-bottom-right,.swal2-container.swal2-grow-column.swal2-center-end,.swal2-container.swal2-grow-column.swal2-center-right,.swal2-container.swal2-grow-column.swal2-top-end,.swal2-container.swal2-grow-column.swal2-top-right{align-items:flex-end}.swal2-container.swal2-grow-column>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-no-transition{transition:none!important}.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal{margin:auto}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-container .swal2-modal{margin:0!important}}.swal2-popup{display:none;position:relative;box-sizing:border-box;flex-direction:column;justify-content:center;width:32em;max-width:100%;padding:1.25em;border:none;border-radius:.3125em;background:#fff;font-family:inherit;font-size:1rem}.swal2-popup:focus{outline:0}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-header{display:flex;flex-direction:column;align-items:center;padding:0 1.8em}.swal2-title{position:relative;max-width:100%;margin:0 0 .4em;padding:0;color:#595959;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-actions{display:flex;z-index:1;flex-wrap:wrap;align-items:center;justify-content:center;width:100%;margin:1.25em auto 0}.swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}.swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}.swal2-actions.swal2-loading .swal2-styled.swal2-confirm{box-sizing:border-box;width:2.5em;height:2.5em;margin:.46875em;padding:0;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border:.25em solid transparent;border-radius:100%;border-color:transparent;background-color:transparent!important;color:transparent!important;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-actions.swal2-loading .swal2-styled.swal2-cancel{margin-right:30px;margin-left:30px}.swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after{content:"";display:inline-block;width:15px;height:15px;margin-left:5px;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border:3px solid #999;border-radius:50%;border-right-color:transparent;box-shadow:1px 1px 1px #fff}.swal2-styled{margin:.3125em;padding:.625em 2em;box-shadow:none;font-weight:500}.swal2-styled:not([disabled]){cursor:pointer}.swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#3085d6;color:#fff;font-size:1.0625em}.swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#aaa;color:#fff;font-size:1.0625em}.swal2-styled:focus{outline:0;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(50,100,150,.4)}.swal2-styled::-moz-focus-inner{border:0}.swal2-footer{justify-content:center;margin:1.25em 0 0;padding:1em 0 0;border-top:1px solid #eee;color:#545454;font-size:1em}.swal2-timer-progress-bar-container{position:absolute;right:0;bottom:0;left:0;height:.25em;overflow:hidden;border-bottom-right-radius:.3125em;border-bottom-left-radius:.3125em}.swal2-timer-progress-bar{width:100%;height:.25em;background:rgba(0,0,0,.2)}.swal2-image{max-width:100%;margin:1.25em auto}.swal2-close{position:absolute;z-index:2;top:0;right:0;align-items:center;justify-content:center;width:1.2em;height:1.2em;padding:0;overflow:hidden;transition:color .1s ease-out;border:none;border-radius:0;background:0 0;color:#ccc;font-family:serif;font-size:2.5em;line-height:1.2;cursor:pointer}.swal2-close:hover{transform:none;background:0 0;color:#f27474}.swal2-close::-moz-focus-inner{border:0}.swal2-content{z-index:1;justify-content:center;margin:0;padding:0 1.6em;color:#545454;font-size:1.125em;font-weight:400;line-height:normal;text-align:center;word-wrap:break-word}.swal2-checkbox,.swal2-file,.swal2-input,.swal2-radio,.swal2-select,.swal2-textarea{margin:1em auto}.swal2-file,.swal2-input,.swal2-textarea{box-sizing:border-box;width:100%;transition:border-color .3s,box-shadow .3s;border:1px solid #d9d9d9;border-radius:.1875em;background:inherit;box-shadow:inset 0 1px 1px rgba(0,0,0,.06);color:inherit;font-size:1.125em}.swal2-file.swal2-inputerror,.swal2-input.swal2-inputerror,.swal2-textarea.swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}.swal2-file:focus,.swal2-input:focus,.swal2-textarea:focus{border:1px solid #b4dbed;outline:0;box-shadow:0 0 3px #c4e6f5}.swal2-file::-moz-placeholder,.swal2-input::-moz-placeholder,.swal2-textarea::-moz-placeholder{color:#ccc}.swal2-file:-ms-input-placeholder,.swal2-input:-ms-input-placeholder,.swal2-textarea:-ms-input-placeholder{color:#ccc}.swal2-file::-ms-input-placeholder,.swal2-input::-ms-input-placeholder,.swal2-textarea::-ms-input-placeholder{color:#ccc}.swal2-file::placeholder,.swal2-input::placeholder,.swal2-textarea::placeholder{color:#ccc}.swal2-range{margin:1em auto;background:#fff}.swal2-range input{width:80%}.swal2-range output{width:20%;color:inherit;font-weight:600;text-align:center}.swal2-range input,.swal2-range output{height:2.625em;padding:0;font-size:1.125em;line-height:2.625em}.swal2-input{height:2.625em;padding:0 .75em}.swal2-input[type=number]{max-width:10em}.swal2-file{background:inherit;font-size:1.125em}.swal2-textarea{height:6.75em;padding:.75em}.swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;background:inherit;color:inherit;font-size:1.125em}.swal2-checkbox,.swal2-radio{align-items:center;justify-content:center;background:#fff;color:inherit}.swal2-checkbox label,.swal2-radio label{margin:0 .6em;font-size:1.125em}.swal2-checkbox input,.swal2-radio input{margin:0 .4em}.swal2-validation-message{display:none;align-items:center;justify-content:center;padding:.625em;overflow:hidden;background:#f0f0f0;color:#666;font-size:1em;font-weight:300}.swal2-validation-message::before{content:"!";display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center}.swal2-icon{position:relative;box-sizing:content-box;justify-content:center;width:5em;height:5em;margin:1.25em auto 1.875em;border:.25em solid transparent;border-radius:50%;font-family:inherit;line-height:5em;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474;color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;transform:rotate(-45deg)}.swal2-icon.swal2-error.swal2-icon-show{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark{-webkit-animation:swal2-animate-error-x-mark .5s;animation:swal2-animate-error-x-mark .5s}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-success{border-color:#a5dc86;color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;transform:rotate(-45deg);transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;transform:rotate(-45deg);transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;z-index:2;top:-.25em;left:-.25em;box-sizing:content-box;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;z-index:1;top:.5em;left:1.625em;width:.4375em;height:5.625em;transform:rotate(-45deg)}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;z-index:2;height:.3125em;border-radius:.125em;background-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.8125em;width:1.5625em;transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;transform:rotate(-45deg)}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-animate-success-line-tip .75s;animation:swal2-animate-success-line-tip .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-animate-success-line-long .75s;animation:swal2-animate-success-line-long .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right{-webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-progress-steps{align-items:center;margin:0 0 1.25em;padding:0;background:inherit;font-weight:600}.swal2-progress-steps li{display:inline-block;position:relative}.swal2-progress-steps .swal2-progress-step{z-index:20;width:2em;height:2em;border-radius:2em;background:#3085d6;color:#fff;line-height:2em;text-align:center}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step{background:#3085d6}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step{background:#add8e6;color:#fff}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line{background:#add8e6}.swal2-progress-steps .swal2-progress-step-line{z-index:10;width:2.5em;height:.4em;margin:0 -1px;background:#3085d6}[class^=swal2]{-webkit-tap-highlight-color:transparent}.swal2-show{-webkit-animation:swal2-show .3s;animation:swal2-show .3s}.swal2-hide{-webkit-animation:swal2-hide .15s forwards;animation:swal2-hide .15s forwards}.swal2-noanimation{transition:none}.swal2-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}.swal2-rtl .swal2-close{right:auto;left:0}.swal2-rtl .swal2-timer-progress-bar{right:0;left:auto}@supports (-ms-accelerator:true){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@-moz-document url-prefix(){.swal2-close:focus{outline:2px solid rgba(50,100,150,.4)}}@-webkit-keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@-webkit-keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@-webkit-keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@-webkit-keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@-webkit-keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@-webkit-keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@-webkit-keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@-webkit-keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@-webkit-keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@-webkit-keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@-webkit-keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@-webkit-keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto!important}body.swal2-no-backdrop .swal2-container{top:auto;right:auto;bottom:auto;left:auto;max-width:calc(100% - .625em * 2);background-color:transparent!important}body.swal2-no-backdrop .swal2-container>.swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}body.swal2-no-backdrop .swal2-container.swal2-top{top:0;left:50%;transform:translateX(-50%)}body.swal2-no-backdrop .swal2-container.swal2-top-left,body.swal2-no-backdrop .swal2-container.swal2-top-start{top:0;left:0}body.swal2-no-backdrop .swal2-container.swal2-top-end,body.swal2-no-backdrop .swal2-container.swal2-top-right{top:0;right:0}body.swal2-no-backdrop .swal2-container.swal2-center{top:50%;left:50%;transform:translate(-50%,-50%)}body.swal2-no-backdrop .swal2-container.swal2-center-left,body.swal2-no-backdrop .swal2-container.swal2-center-start{top:50%;left:0;transform:translateY(-50%)}body.swal2-no-backdrop .swal2-container.swal2-center-end,body.swal2-no-backdrop .swal2-container.swal2-center-right{top:50%;right:0;transform:translateY(-50%)}body.swal2-no-backdrop .swal2-container.swal2-bottom{bottom:0;left:50%;transform:translateX(-50%)}body.swal2-no-backdrop .swal2-container.swal2-bottom-left,body.swal2-no-backdrop .swal2-container.swal2-bottom-start{bottom:0;left:0}body.swal2-no-backdrop .swal2-container.swal2-bottom-end,body.swal2-no-backdrop .swal2-container.swal2-bottom-right{right:0;bottom:0}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll!important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:static!important}}body.swal2-toast-shown .swal2-container{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown .swal2-container.swal2-top-left,body.swal2-toast-shown .swal2-container.swal2-top-start{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown .swal2-container.swal2-center-left,body.swal2-toast-shown .swal2-container.swal2-center-start{top:50%;right:auto;bottom:auto;left:0;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;transform:translate(-50%,-50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-left,body.swal2-toast-shown .swal2-container.swal2-bottom-start{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown .swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}body.swal2-toast-column .swal2-toast{flex-direction:column;align-items:stretch}body.swal2-toast-column .swal2-toast .swal2-actions{flex:1;align-self:stretch;height:2.2em;margin-top:.3125em}body.swal2-toast-column .swal2-toast .swal2-loading{justify-content:center}body.swal2-toast-column .swal2-toast .swal2-input{height:2em;margin:.3125em auto;font-size:1em}body.swal2-toast-column .swal2-toast .swal2-validation-message{font-size:1em}</style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">EXAVER</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuracion</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <?php if($tipo_usuario == 1) { ?>
                            
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Usuarios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="register.html">Agregar Usuario</a>
                                    <a class="nav-link" href="#">Mostrar Usuarios</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesE1A" aria-expanded="false" aria-controls="collapsePagesE1A">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                EXAVER 1
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                            <div class="collapse" id="collapsePagesE1A" aria-labelledby="headingTwo" data-parent="#sidenavAccordion"> 
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuthS1A" aria-expanded="false" aria-controls="pagesCollapseAuthS1A">
                                        Seccion1
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuthS1A" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="mostrarSeccion1.php">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS2A" aria-expanded="false" aria-controls="pagesCollapseErrorS2A">
                                        Seccion 2
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS2A" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS3A" aria-expanded="false" aria-controls="pagesCollapseErrorS3A">
                                        Seccion 3
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS3A" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS4A" aria-expanded="false" aria-controls="pagesCollapseErrorS4A">
                                        Seccion 4
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS4A" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS5A" aria-expanded="false" aria-controls="pagesCollapseErrorS5A">
                                        Seccion 5
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS5A" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesE2A" aria-expanded="false" aria-controls="collapsePagesE2A">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                EXAVER 2
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                            <div class="collapse" id="collapsePagesE2A" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuthS1" aria-expanded="false" aria-controls="pagesCollapseAuthS1">
                                        Seccion1
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuthS1" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS2" aria-expanded="false" aria-controls="pagesCollapseErrorS2">
                                        Seccion 2
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS2" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS3" aria-expanded="false" aria-controls="pagesCollapseErrorS3">
                                        Seccion 3
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS3" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS4" aria-expanded="false" aria-controls="pagesCollapseErrorS4">
                                        Seccion 4
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS4" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS5" aria-expanded="false" aria-controls="pagesCollapseErrorS5">
                                        Seccion 5
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS5" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesE3A" aria-expanded="false" aria-controls="collapsePagesE3A">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                EXAVER 3
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                            <div class="collapse" id="collapsePagesE3A" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuthS1" aria-expanded="false" aria-controls="pagesCollapseAuthS1">
                                        Seccion1
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuthS1" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Registrar Datos</a>
                                            <a class="nav-link" href="#">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS2" aria-expanded="false" aria-controls="pagesCollapseErrorS2">
                                        Seccion 2
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS2" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS3" aria-expanded="false" aria-controls="pagesCollapseErrorS3">
                                        Seccion 3
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS3" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS4" aria-expanded="false" aria-controls="pagesCollapseErrorS4">
                                        Seccion 4
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS4" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS5" aria-expanded="false" aria-controls="pagesCollapseErrorS5">
                                        Seccion 5
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS5" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <?php  } ?>

                            <div class="sb-sidenav-menu-heading">EXAVER</div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesE1" aria-expanded="false" aria-controls="collapsePagesE1">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                EXAVER 1
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <?php if($tipo_usuario == 2) { ?>
                            <div class="collapse" id="collapsePagesE1" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuthS1" aria-expanded="false" aria-controls="pagesCollapseAuthS1">
                                        Paper 1
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>

                                    <div class="collapse" id="pagesCollapseAuthS1" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="Part One.php">Part One</a>
                                            <a class="nav-link" href="Part Two.php">Part Two</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS2" aria-expanded="false" aria-controls="pagesCollapseErrorS2">
                                        Part 2
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS2" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Part One</a>
                                            <a class="nav-link" href="404.html">Part Two</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS3" aria-expanded="false" aria-controls="pagesCollapseErrorS3">
                                        Part 3
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS3" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Part One</a>
                                            <a class="nav-link" href="404.html">Part Two</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <?php  } ?>
                        
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesE2" aria-expanded="false" aria-controls="collapsePagesE2">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                EXAVER 2
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <?php if($tipo_usuario == 3) { ?>
                            <div class="collapse" id="collapsePagesE2" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuthS1" aria-expanded="false" aria-controls="pagesCollapseAuthS1">
                                        Seccion1
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuthS1" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Registrar Datos</a>
                                            <a class="nav-link" href="#">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS2" aria-expanded="false" aria-controls="pagesCollapseErrorS2">
                                        Seccion 2
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS2" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS3" aria-expanded="false" aria-controls="pagesCollapseErrorS3">
                                        Seccion 3
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS3" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS4" aria-expanded="false" aria-controls="pagesCollapseErrorS4">
                                        Seccion 4
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS4" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS5" aria-expanded="false" aria-controls="pagesCollapseErrorS5">
                                        Seccion 5
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS5" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <?php  } ?>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesE3" aria-expanded="false" aria-controls="collapsePagesE3">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                EXAVER 3
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <?php if($tipo_usuario == 4) { ?>
                            <div class="collapse" id="collapsePagesE3" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuthS1" aria-expanded="false" aria-controls="pagesCollapseAuthS1">
                                        Seccion1
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuthS1" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Registrar Datos</a>
                                            <a class="nav-link" href="#">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS2" aria-expanded="false" aria-controls="pagesCollapseErrorS2">
                                        Seccion 2
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS2" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS3" aria-expanded="false" aria-controls="pagesCollapseErrorS3">
                                        Seccion 3
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS3" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS4" aria-expanded="false" aria-controls="pagesCollapseErrorS4">
                                        Seccion 4
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS4" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS5" aria-expanded="false" aria-controls="pagesCollapseErrorS5">
                                        Seccion 5
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS5" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <?php  } ?>
                        </div>
                    </div>

                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <header class="header notranslate" style="margin: 5px; margin-right: 5px">
                    <div class="row">
                    
                    </div>
                <div class="border-bottom"></div>
                    <br>
                </header>       <!--Menu de las respuestas-->
      <section class="section1" style="margin-left: 10px; margin-right: 10px;">
        <div class="">
          <div class="alert miBordeDoble">
            <div class="row">
              <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <p> <b> Part Two</b></p>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="float-right">
                  <p> <b>Numbers 9-16</b>  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <form action="Actualizar/Actualizar_PartTwo.php" method="post">

      <section style="margin-left: 10px; margin-right: 10px;">
        <div class="">
          <div class="alert miBordeDoble">
            <div>
              <input type="hidden" name="idPartTwo" value="<?php echo $_GET['idPartTwo'] ?>">
              <div class="form-group">
                <p><b><textarea name="instruccion" class="form-control" id="exampleFormControlTextarea1" rows="3"> <?php echo $consulta[0]?> </textarea></b></p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section style="margin-left: 10px; margin-right: 10px;">
        <div class="">
          <div class="alert miBordeSencillo">
            <div class="row">
              <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                <div class="izquierda">
                  <p> <b>EXAMPLE</b> </p>
                  <br>
                  <!--parte en donde se muestran las preguntas-->
                  <div class="row">
                    <br>
                    <div class="col-2 text-right">
                      <b>
                        <p>0.</p>
                      </b>
                    </div>
                    <div class="col-10">
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom0_1" style="width: 75px;" value="<?php echo $consulta["30"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="e0" style="width: 350px;" value="<?php echo $consulta["1"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom0_2" style="width: 75px;" value="<?php echo $consulta["31"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <p>____________________</p>
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom0_3" style="width: 75px;" value="<?php echo $consulta["32"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="e0_0" style="width: 350px;" value="<?php echo $consulta["2"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                    </div>
                  </div>
                  <!--parte en donde se muestran las preguntas-->
                </div>
              </div>
              <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <div class="derecha">
                  <p class="text-center"> <b> CORRECT ANSWER</b></p>
                  <div class="text-center">
                    <button class="button button4">
                      <p>K</p>
                    </button><br><br>
                  </div>
                  <div class="row">
                    <div class="col-1">
                      <p><b>&nbsp;&nbsp;K</b></p>
                    </div>
                    <div class="col-10">
                      <input type="text" name="er_0" style="width: 350px;" value="<?php echo $consulta["3"]; ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section>
        <div class="">
          <!---->
          <div class="row">
            <div class="col-6 col-sm-6 col-md-7 col-lg-7 col-xl-7">
              <div style="margin-left: 18px">
                <!--parte en donde se muestran las preguntas-->
                <div class="row">
                  <br>
                  <div class="col-2 text-right">
                    <b>
                      <p>9.</p>
                    </b>
                  </div>
                  <div class="col-10">
                    <!--opcion-->
                    <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom1_1" style="width: 75px;" value="<?php echo $consulta["33"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r1_1" style="width: 350px;" value="<?php echo $consulta["4"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom1_2" style="width: 75px;" value="<?php echo $consulta["34"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <p>____________________</p>
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom1_3" style="width: 75px;" value="<?php echo $consulta["35"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r1_2" style="width: 350px;" value="<?php echo $consulta["5"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                  </div>
                </div>
                <!--parte en donde se muestran las preguntas-->
                <br>
                <!--parte en donde se muestran las preguntas-->
                <div class="row">
                  <br>
                  <div class="col-2 text-right">
                    <b>
                      <p>10.</p>
                    </b>
                  </div>
                  <div class="col-10">
                    <!--opcion-->
                    <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom2_1" style="width: 75px;" value="<?php echo $consulta["36"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r2_1" style="width: 350px;" value="<?php echo $consulta["6"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom2_2" style="width: 75px;" value="<?php echo $consulta["37"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <p>____________________</p>
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom2_3" style="width: 75px;" value="<?php echo $consulta["38"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r2_2" style="width: 350px;" value="<?php echo $consulta["7"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                  </div>
                </div>
                <!--parte en donde se muestran las preguntas-->
                <br>
                <!--parte en donde se muestran las preguntas-->
                <div class="row">
                  <br>
                  <div class="col-2 text-right">
                    <b>
                      <p>11.</p>
                    </b>
                  </div>
                  <div class="col-10">
                    <!--opcion-->
                    <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom3_1" style="width: 75px;" value="<?php echo $consulta["39"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r3_1" style="width: 350px;" value="<?php echo $consulta["8"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom3_2" style="width: 75px;" value="<?php echo $consulta["40"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <p>____________________</p>
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom3_3" style="width: 75px;" value="<?php echo $consulta["41"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r3_2" style="width: 350px;" value="<?php echo $consulta["9"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                  </div>
                </div>
                <!--parte en donde se muestran las preguntas-->
                <br>
                <!--parte en donde se muestran las preguntas-->
                <div class="row">
                  <br>
                  <div class="col-2 text-right">
                    <b>
                      <p>12.</p>
                    </b>
                  </div>
                  <div class="col-10">
                    <!--opcion-->
                    <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom4_1" style="width: 75px;" value="<?php echo $consulta["42"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r4_1" style="width: 350px;" value="<?php echo $consulta["10"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom4_2" style="width: 75px;" value="<?php echo $consulta["43"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <p>____________________</p>
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom4_3" style="width: 75px;" value="<?php echo $consulta["44"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r4_2" style="width: 350px;" value="<?php echo $consulta["11"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                  </div>
                </div>
                <!--parte en donde se muestran las preguntas-->
                <br>
                <!--parte en donde se muestran las preguntas-->
                <div class="row">
                  <br>
                  <div class="col-2 text-right">
                    <b>
                      <p>13.</p>
                    </b>
                  </div>
                  <div class="col-10">
                    <!--opcion-->
                    <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom5_1" style="width: 75px;" value="<?php echo $consulta["45"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r5_1" style="width: 350px;" value="<?php echo $consulta["12"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom5_2" style="width: 75px;" value="<?php echo $consulta["46"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <p>____________________</p>
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom5_3" style="width: 75px;" value="<?php echo $consulta["47"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r5_2" style="width: 350px;" value="<?php echo $consulta["13"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                  </div>
                </div>
                <!--parte en donde se muestran las preguntas-->
                <br>
                <!--parte en donde se muestran las preguntas-->
                <div class="row">
                  <br>
                  <div class="col-2 text-right">
                    <b>
                      <p>14.</p>
                    </b>
                  </div>
                  <div class="col-10">
                        <!--opcion-->
                    <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom6_1" style="width: 75px;" value="<?php echo $consulta["48"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r6_1" style="width: 350px;" style="width: 350px;" value="<?php echo $consulta["14"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom6_2" style="width: 75px;" value="<?php echo $consulta["49"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <p>____________________</p>
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom6_3" style="width: 75px;" value="<?php echo $consulta["50"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r6_2" style="width: 350px;" value="<?php echo $consulta["15"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                  </div>
                </div>
                <!--parte en donde se muestran las preguntas-->
                <br>
                <!--parte en donde se muestran las preguntas-->
                <div class="row">
                  <br>
                  <div class="col-2 text-right">
                    <b>
                      <p>15.</p>
                    </b>
                  </div>
                  <div class="col-10">
                    <!--opcion-->
                    <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom7_1" style="width: 75px;" value="<?php echo $consulta["51"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r7_1" style="width: 350px;" value="<?php echo $consulta["16"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom7_2" style="width: 75px;" value="<?php echo $consulta["52"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <p>____________________</p>
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom7_3" style="width: 75px;" value="<?php echo $consulta["53"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r7_2" style="width: 350px;" value="<?php echo $consulta["17"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                  </div>
                </div>
                <!--parte en donde se muestran las preguntas-->
                <br>
                <!--parte en donde se muestran las preguntas-->
                <div class="row">
                  <br>
                  <div class="col-2 text-right">
                    <b>
                      <p>16.</p>
                    </b>
                  </div>
                  <div class="col-10">
                   <!--opcion-->
                   <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom8_1" style="width: 75px;" value="<?php echo $consulta["54"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r8_1" style="width: 350px;" value="<?php echo $consulta["18"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom8_2" style="width: 75px;" value="<?php echo $consulta["55"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <p>____________________</p>
                        </div>
                      </div>
                      <!--opcion-->
                      <!--opcion-->
                      <div class="row">
                        <div class="col-2">
                          <p> <b><input type="text" name="nom8_3" style="width: 75px;" value="<?php echo $consulta["56"]; ?>"></b> </p>
                        </div>
                        <div class="col-10">
                          <input type="text" name="r8_2" style="width: 350px;" value="<?php echo $consulta["19"]; ?>">
                        </div>
                      </div>
                      <!--opcion-->
                  </div>
                </div>
                <!--parte en donde se muestran las preguntas-->
              </div>
            </div>

            
            <div class="col-6 col-sm-6 col-md-5 col-lg-5 col-xl-5">
              <div class="miBordeSencillo2" style="margin-right: 10px;">
                <div style="margin: 3px;">
                  <p class="text-center"> <b>Options</b> </p>
                  <!--opciones--> 
                  <br>
                  <div class="row">
                    <div class="col-1">
                      <p><b>A</b></p>
                    </div>
                    <div class="col-10">
                      <input type="text" name="rA" style="width: 350px;" size="2" value="<?php echo $consulta["20"]; ?>">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-1">
                      <p><b>B</b></p>
                    </div>
                    <div class="col-10">
                      <input type="text" name="rB" style="width: 350px;" size="2" value="<?php echo $consulta["21"]; ?>">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-1">
                      <p><b>C</b></p>
                    </div>
                    <div class="col-10">
                      <input type="text" name="rC" style="width: 350px;" size="2" value="<?php echo $consulta["22"]; ?>">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-1">
                      <p><b>D</b></p>
                    </div>
                    <div class="col-10">
                      <input type="text" name="rD" style="width: 350px;" size="2" value="<?php echo $consulta["23"]; ?>">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-1">
                      <p><b>E</b></p>
                    </div>
                    <div class="col-10">
                      <input type="text" name="rE" style="width: 350px;" size="2" value="<?php echo $consulta["24"]; ?>">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-1">
                      <p><b>F</b></p>
                    </div>
                    <div class="col-10">
                      <input type="text" name="rF" style="width: 350px;" size="2" value="<?php echo $consulta["25"]; ?>">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-1">
                      <p><b>G</b></p>
                    </div>
                    <div class="col-10">
                      <input type="text" name="rG" style="width: 350px;" size="2" value="<?php echo $consulta["26"]; ?>">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-1">
                      <p><b>H</b></p>
                    </div>
                    <div class="col-10">
                      <input type="text" name="rH" style="width: 350px;" size="2" value="<?php echo $consulta["27"]; ?>">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-1">
                      <p><b>I</b></p>
                    </div>
                    <div class="col-10">
                      <input type="text" name="rI" style="width: 350px;" size="2" value="<?php echo $consulta["28"]; ?>">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-1">
                      <p><b>J</b></p>
                    </div>
                    <div class="col-10">
                      <input type="text" name="rJ" style="width: 350px;" size="2" value="<?php echo $consulta["29"]; ?>">
                    </div>
                  </div>
                  <!--opciones--> 
                </div>
              </div>
            </div>
            <!--cuadro de respuestas-->
            <!--cuadro de respuestas-->
          </div>
        </div>
      </section><br>
      <div style="margin-left: 40%">
          <input class="btn btn-primary btn-lg" type="submit" value="Update">
          <a href="Part Two.php"><button type="button" class="btn btn-success btn-lg">Cancel</button></a>
      </div>
    </form>
                    
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
