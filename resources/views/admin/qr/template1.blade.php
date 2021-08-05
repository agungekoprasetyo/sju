<html>

<head>
    <meta http-equiv="Content-Type" content="charset=utf-8" />
    <meta charset="UTF-8">
    <title>Print</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
    <style>
        @page {
            size: A6
        }

    </style>
    <style>
        @media print {

            html,
            body {
                height: 100%;
                margin: 0 !important;
                padding: 0 !important;
                overflow: hidden;
            }

        }

        @media screen{
            html, body{
                display: none;
            }
        }

    </style>
</head>

<body onload="printpage()">
    <!-- Set "A5", "A4" or "A3" for class name -->
    <!-- Set also "landscape" if you need -->

    <body class="A6">
        <img src="/assets/images/templateqr/1.jpg" alt="" width="100%" height="100%"
            style="position: absolute;z-index:-999">
        <!-- Each sheet element should have the class "sheet" -->
        <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
        <section class="sheet padding-10mm" style="text-align: center">
            <div class="upn">
                <div class="visible-print text-center" style="color: white;padding:0px 0px;margin-top:200px">
                    {!! QrCode::encoding('UTF-8')->size(200)->style('square')->eye('circle')->generate(url('menu/'.$merchant->slug)) !!}
                </div>
                <p style="color:white;font-size:16px;margin-top:50px">https://menuqren.id/menu/{{$merchant->slug}}</p>
            </div>

        </section>


    </body>

    <script>
        function printpage() {
            window.print();

        }

    </script>

</html>
