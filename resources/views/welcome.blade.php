<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            @font-face {
                font-family: Nautilus;
                src: url(font/Nautilus.otf);
            }
            body{
                margin: 0px;
            }
            .container {
                position: relative;
            }
            /* html, body {
                background-image: url("img/background-polos.png");
                background-repeat: no-repeat;
                position: fixed;
            } */
            .nomorSurat {
                color: #DAB96B;
                position: absolute;
                left: 30px;
                top:25px;
                /* padding: 0px 0px 0px 30px;  */
            }
            .certifyPosition{
                /* width: 500px; */
                position: absolute;
                top: 230px;
                left: 500px;
                /* padding: 200px 0px 0px 492.5px;  */
                text-align: center
            }
            #certifyContent{
                font-size:19pt; 
                font-family:"Calibri";
                margin: 0px
            }
            .namePosition{
                position: absolute;
                top: 285px;
                left: 165px;
                /* padding: 275px 0px 0px 165px; */
                text-align: center
            }
            #nameContent{
                font-size:38pt; 
                font-family:Nautilus; 
                color:#1E325C;
                margin: 0px
            }
            .completedPosition{
                position: absolute;
                top: 372px;
                left: 468px;
                /* padding: 365px 0px 0px 460px; */
                text-align: center
            }
            #completedContent{
                font-size:19pt; 
                font-family:Calibri;
                margin: 0px;
            }
            .trainingPosition{
                position: absolute;
                top: 408px;
                left: 67px;
                /* padding: 400px 0px 0px 60px; */
                text-align: center
            }
            .trainingTitlePosition{
                position: absolute;
                top: 440px;
                left: 67px;
                /* padding: 432px 0px 0px 60px; */
                text-align: center
            }
            .trainingLocationPosition{
                position: absolute;
                top: 472px;
                left: 67px;
                /* padding: 464px 0px 0px 60px; */
                text-align: center
            }
            #trainingContent{
                font-size:18pt; 
                font-family:Calibri;
                margin: 0px;
            }
            .TTD1Position{
                position: absolute;
                top: 710px;
                left: 53px;
                text-align: center;
            }
            .TTD2Position{
                position: absolute;
                top: 710px;
                left: 687px;
                text-align: center;
            }
            #TTDContent{
                font-size:18pt; 
                font-family:Calibri;
                margin: 0px;
            }
            td {
                border: 1px solid transparent;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <img src="img/background-polos.png" alt="">
            <div class="nomorSurat">
                <p style="margin: 0px">cc:001/1/PM/IICT/X/2018</p>
            </div>
            <div class="certifyPosition">
                <table style="width:250px">
                    <td>
                        <p id="certifyContent"><i>This is to certify that</i></p>
                    </td>
                </table>
            </div>
            <div class="namePosition">
                <table style="width:900px;">
                    <td>
                        <p id="nameContent">Neilla Nurilla</p>
                    </td>
                </table>
            </div>
            <div class="completedPosition">
                <table style="width:315px">
                    <td>
                        <p id="completedContent">
                            has successfully completed
                        </p>
                    </td>
                </table>
            </div>
            <div class="trainingPosition">
                <table style="width:1110px">
                    <td>
                        <p id="trainingContent">
                            <b><i>Training on</i></b>
                        </p>
                    </td>
                </table>
            </div>
            <div class="trainingTitlePosition">
                <table style="width:1110px">
                    <td>
                        <p id="trainingContent">
                            <b><i>Technique and Marketing Skills Improvement for Field Staff of Agrochemical Industries</i></b>
                        </p>
                    </td>
                </table>
            </div>
            <div class="trainingLocationPosition">
                <table style="width:1110px">
                    <td>
                        <p id="trainingContent">
                            Bogor - Indonesia, October 26-27, 2018 
                        </p>
                    </td>
                </table>
            </div>
            <div class="TTD1Position">
                <table style="width:515px">
                    <td>
                        <p id="TTDContent">
                            <b>Muhammad Sigit Susanto PhD</b><br>
                            <i style="font-size:16pt">Director of<br>
                            PT Angin Ribut
                            </i>
                        </p>
                    </td>
                </table>
            </div>
            <div class="TTD2Position">
                <table style="width:515px">
                    <td>
                        <p id="TTDContent">
                            <b>Ir. Sambas Waemata</b><br>
                            <i style="font-size:16pt">Director of<br>
                            PT Global Scholarship Services Indonesia
                            </i>
                        </p>
                    </td>
                </table>
            </div>
        </div>
    </body>
</html>
