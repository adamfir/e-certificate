<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>try</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            @page { margin: 0px; }
            @font-face {
                font-family: 'Nautilus';
                src: url("{{asset('fonts/Nautilus.ttf')}}") format('truetype');
                font-size: normal;
            }
            @font-face {
                font-family: 'GrandHotel';
                font-size: normal;
                src: url("{{asset('fonts/GrandHotel-Regular.ttf')}}") format('truetype');
            }
            body{
                margin: 0px;
            }
            .container {
                position: absolute;
                margin: 0px;
                padding: 0px;
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
            .certificate {
                position: absolute;
                left: 590px;
                top: 0px;
                margin: 0px;
                /* padding: 0px 0px 0px 30px;  */
            }
            #certificateContent{
                font-family: 'GrandHotel';
                font-size:83pt; 
                color: #1E325C;
                margin: 0px;
                text-align: center;
            }
            .certifyPosition{
                /* width: 500px; */
                position: absolute;
                top: 230px;
                left: 67px;
                /* padding: 200px 0px 0px 492.5px;  */
                text-align: center
            }
            #certifyContent{
                font-size:19pt; 
                font-family:"Calibri";
                margin: 0px;
                text-align: center
            }
            .namePosition{
                position: absolute;
                top: 285px;
                left: 67px;
                /* padding: 275px 0px 0px 165px; */
                text-align: center
            }
            #nameContent{
                font-size:38pt; 
                font-family:'Nautilus'; 
                color:#1E325C;
                margin: 0px;
                text-align: center
            }
            .completedPosition{
                position: absolute;
                top: 372px;
                left: 67px;
                /* padding: 365px 0px 0px 460px; */
                text-align: center;
                line-height: 1.35;
            }
            #completedContent{
                font-size:19pt; 
                font-family:Calibri;
                margin: 0px;
                text-align: center
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
                text-align: center;
                line-height: 1.35;
            }
            .TTD1Position{
                position: absolute;
                top: 710px;
                left: 53px;
                text-align: center;
            }
            .TTD2Position1{
                position: absolute;
                top: 710px;
                left: 53px;
                text-align: center;
            }
            .TTD2Position2{
                position: absolute;
                top: 710px;
                left: 687px;
                text-align: center;
            }
            .TTD3Position1 {
                position: absolute;
                top: 710px;
                left: 0px;
                text-align: center;
            }
            .TTD3Position2 {
                position: absolute;
                top: 710px;
                left: 416px;
                text-align: center;
            }
            .TTD3Position3 {
                position: absolute;
                top: 710px;
                left: 832px;
                text-align: center;
            }
            #TTDContent{
                font-size:18pt; 
                font-family:Calibri;
                margin: 0px;
                text-align: center
            }
            td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <img src="img/background-polos.png" alt="">
            <div class="nomorSurat">
                <p style="margin: 0px">cc:001/1/PM/IICT/X/2018</p>
            </div>
            <div class="certificate">
                <table style="width:435px">
                    <td>
                        <p id="certificateContent">Certificate
                        </p>
                    </td>
                </table>
            </div>
            <div class="certifyPosition">
                <table style="width:1110px">
                    <td>
                        <p id="certifyContent"><i>This is to certify that</i></p>
                    </td>
                </table>
            </div>
            <div class="namePosition">
                <table style="width:1110px;">
                    <td>
                        <p id="nameContent">Neilla Nurilla</p>
                    </td>
                </table>
            </div>
            <div class="completedPosition">
                <table style="width:1110px">
                    <td>
                        <p id="completedContent">
                            has successfully completed
                            <br><b><i>Training on</i></b>
                            <br><b><i>Technique and Marketing Skills Improvement for Field Staff of Agrochemical Industries</i></b>
                            <br>Bogor - Indonesia, October 26-27, 2018 
                        </p>
                    </td>
                </table>
            </div>
            @if ($ttd == 1)
            <div class="TTD1Position">
                <table style="width:1110px">
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
            @elseif($ttd == 2)
            <div class="TTD2Position1">
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
            <div class="TTD2Position2">
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
            @elseif($ttd == 3)
            <div class="TTD3Position1">
                <table style="width:416px">
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
            <div class="TTD3Position2">
                <table style="width:416px">
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
            <div class="TTD3Position3">
                <table style="width:416px">
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
            @endif
        </div>
        {{-- <div style="page-break-before: always;"></div>
        <div style="page-break-after: always;"></div> --}}
        {{-- @if ($peserta != end($pesertas))
            
        @endif --}}
    </body>
</html>
