<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$training->judul . ' ' . $training->tanggal_mulai}}</title>

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
                text-align: center
            }
            td {
                border: 1px solid transparent;
            }
        </style>
    </head>
    <body>
        @foreach($pesertas as $peserta)
            <div class="container">
                <img src="img/background-polos.png" alt="">
                <div class="nomorSurat">
                    <p style="margin: 0px">cc:{{$peserta->nomor_urut}}/{{$training->id}}/{{$kategori->kode}}/IICT/{{date('m/Y', strtotime($training->tanggal_mulai))}}</p>
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
                            <p id="nameContent">{{$peserta->nama}}</p>
                        </td>
                    </table>
                </div>
                <div class="completedPosition">
                    <table style="width:1110px">
                        <td>
                            <p id="completedContent">
                                has successfully completed
                                <br><b><i>Training on</i></b>
                                <br><b><i>{{$training->judul}}</i></b>
                                <br>{{$training->lokasi}}, {{$date}}
                            </p>
                        </td>
                    </table>
                </div>
                <div class="TTD1Position">
                    <table style="width:515px">
                        <td>
                            <p id="TTDContent">
                                <b>{{$penandatangans[0]->nama}}</b><br>
                                <i style="font-size:16pt">{{$penandatangans[0]->jabatan}} of<br>
                                {{$penandatangans[0]->instansi}}
                                </i>
                            </p>
                        </td>
                    </table>
                </div>
                <div class="TTD2Position">
                    <table style="width:515px">
                        <td>
                            <p id="TTDContent">
                                <b>{{$penandatangans[1]->nama}}</b><br>
                                <i style="font-size:16pt">{{$penandatangans[1]->jabatan}} of<br>
                                    {{$penandatangans[1]->instansi}}
                                </i>
                            </p>
                        </td>
                    </table>
                </div>
            </div>
            @if ($peserta != end($pesertas))
                <div style="page-break-before: always;"></div>
            @endif
        @endforeach
    </body>
</html>
