<!DOCTYPE html>
<html lang="zh-hant-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新北市旅遊網</title>
    <link rel="shortcut icon" href="./img/fav128.ico" type="image/x-icon">
    <meta name="keywords" content="新北市,旅遊,日文">
    <meta name="description" content="新北市旅遊網">
    <meta name="author" content="Yu Yu-Min">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/coffee.css">
    <link rel="manifest" href="./manifest.json">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/dataTables.bootstrap4.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top shadow">
        <div class="container">

            <a class="navbar-brand" href="#">

                <img src="./img/fav192.png" alt="" width="30px" height="30px" srcset=""
                    class="d-inline-block align-top">新北市（しんほくし）
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="fas fa-home">首頁</i>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="land.php">
                            <i class="fas fa-camera">景點介紹</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="food.html">
                            <i class="fas fa-utensils">餐廳介紹</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hotel.html">
                            <i class="fas fa-bed">住宿介紹</i>
                        </a>
                    </li>

                </ul>
            </div>
    </nav>

<div id="page">

    <div class="container-fluid" id="loading">
        <div class="row h-100">
            <div class="col-12 text-center align-self-center">
                <img src="./img/load.svg" alt="" height="300" width="300">
            </div>
        </div>
    </div>

    <div style="position:fixed;">
    <css-doodle>
            :doodle {
                @grid: 3 / 100vmax;
            }
            --scale: @rand(0.5, 1.5);

            background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url( ./img/@pick(1, 2).png );
            opacity:0.4;
            background-size: contain;
            background-repeat: no-repeat;

            transform: scale( var(--scale) );
            @place-cell: @rand(0, 100)% -100px;
            @size: 256px 170px;

            animation-name: star;
            animation-duration: 3s;
            animation-iteration-count: infinite;
            animation-delay: @rand(0, 2)s;
            animation-timing-function: ease-in;

            @keyframes star {
                0%{
                    top: -200px;
                    transform: scale( var(--scale) ) ;
                }
                50%{
                    transform: scale( var(--scale) ) ;
                }
                100%{
                    top: calc(100vh + 200px);
                    transform: scale( var(--scale) ) ;
                }
            }
        </css-doodle>
    </div>
    

    <div class="container" id="content" style="margin-top: 70px;margin-bottom: 64px;">
    
        <div class="row">


            <div class="col-12 text-center text-white rubberBand wow my-2">
                <h1>景點介紹</h1>
            </div>

            <hr class="hr-white">
            <div class="col-12 text-center">
            <?php
            include "./img/map.svg";
            ?>
            </div>
            <div class="col-12">



                <table class="table table-hover table-light my-2 rounded table-rwd mx-auto" id="side">
                    <thead class="thead-dark rounded tr-hide">
                        <tr>
                            <th>名稱</th>
                            <th>地址</th>
                            <th>開放時間</th>
                            <th style="display:none">隱藏的詳細介紹</th>
                            <th style="display:none">隱藏的電話</th>
                            <th>介紹</th>
                        </tr>
                    </thead>
                    <tbody class="">
                    <?php
                    include "./opendataLand.php";
                    ?>
                    </tbody>
                </table>
            </div>

        </div>



    </div>


</div>

    <div class="container-fluid bg-primary" id="footer">

        <div class="row justify-content-center">
            <div class="col-12 text-white text-center">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fab fa-facebook"> </i></a>
                    </li>
                    <li class="nav-item"></li>
                    <a class="nav-link text-white" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                &copy;
                <script>
                    let d = new Date;
                    document.write(d.getFullYear());
                </script>
                網頁設計:Yu Yu-Min
            </div>
        </div>

    </div>
<!-- 彈跳視窗 -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <!-- <img src="" alt="" srcset=""class="w-100 modal-img"><br><br> -->
                    <h6>介紹:<br><br>
                        <span class="modal-txt"></span></h6><br><br>
                  <h6><i class="fas fa-map-marker-alt text-success"></i>&nbsp;&nbsp;地址:<span class="modal-addr"></span></h6>
                  <h6><i class="fas fa-phone-alt text-success"></i>&nbsp;電話:<span class="modal-tel"></span></h6>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
              </div>
            </div>
          </div>
    <script src="./js/jquery-3.4.1.min.js"></script>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap4.min.js"></script>
    <script src="./js/css-doodle.min.js"></script>
    <script>
        $(document).on("readystatechange", function () {
            if (document.readyState == "complete") {
                $("#loading").fadeOut(2000, function () {
                    $("#content").fadeIn(1000);
                    $("#footer").fadeIn(1000);


                    new WOW().init();
                });

            }

        })

        $("#side").DataTable({
            "language":{
                "url":"./datatables-chinese-traditional.json"
            },
            "columnDefs":[{
                "targets":3,
                "orderable":false,
                "searchable":false
            }]
        });

        $(".btn-more").on("click",function(){
            let title = $(this).parents("tr").find("td").eq(0).text();
            $("#modal .modal-title").text(title);

            let addr = $(this).parents("tr").find("td").eq(1).text();
            $("#modal .modal-addr").text(addr);

     
            let toldescribe =$(this).parents("tr").find("td").eq(3).text();
            $("#modal .modal-txt").text(toldescribe);

            let tel =$(this).parents("tr").find("td").eq(4).text();
            $("#modal .modal-tel").text(tel);


            $("#modal").modal("show");
        })



        $("path").on("click",function(){

            $("#side").DataTable().search($(this).attr("value")).draw();


        });

        $("path").mouseover(function(){

  $(this).css({
      "stroke-width":"5",
      "stroke":"#ef7a11",

  });
});

$("path").mouseout(function(){
    mo=0;
  $(this).css("stroke-width","0");
});
    </script>

</body>

</html>