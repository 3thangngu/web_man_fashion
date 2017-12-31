<?PHP 
include('includes/header.php');
?>
<style type="text/css">
.title{
    color: #bd0103;
    text-decoration: underline;
    text-align: center;
    text-transform: uppercase;
    margin-top: 35px;
    font-weight: bold;
}
.statistic-chart{
  /*  text-align: center;*/
  margin-top: 25px;
}
.statistic-chart #buyers{
    margin: 0 auto;
}
.statistic-chart .menu > ul{
    line-height: inherit;
    padding: 0;
    margin-left: 10px;
    border-bottom: 1px solid #ccc;
}
.statistic-chart .menu > ul:after{
    content: "";
    display: table;
    clear: both;
}
.statistic-chart .menu > ul li{
    float: left;
    cursor: pointer;
    background: #999l;
    list-style: none;
    padding: 8px 15px;
    background: #e1e1e1;
    box-sizing: border-box;
    border-left: 1px solid #ccc; 
    border-top: 1px solid #ccc;
    border-right: 1px solid #ccc;
    margin-bottom: -1px;
    margin-left: 10px;
}
.statistic-chart .menu > ul li:hover{
    background: #f1f1f1;
    border-bottom: 1px solid #f1f1f1;
}
.statistic-chart .menu > ul .active{
    background: #f1f1f1;
    border-bottom: 1px solid #f1f1f1;
}
/**/
.statistic-chart .sub-menu{
    text-align: center;
    background: white;
    margin-top: 25px;
}
.statistic-chart .sub-menu ul{
    text-align: left;
    background: #f5f5f5;
    list-style: none;
    padding: 0;
    border-bottom: 1px solid #ccc;
}
.statistic-chart .sub-menu ul li:first-child{
    margin-left: 0px;
}
.statistic-chart .sub-menu ul li{
    font-weight: 700;
    color: #0073aa;
    display: inline-block;
    cursor: pointer;
    background: #999l;
    list-style: none;
    padding: 8px 15px;
    background: #f5f5f5;
    box-sizing: border-box;
    border-left: 1px solid #ccc; 
    border-top: 1px solid #ccc;
    border-right: 1px solid #ccc;
    margin-bottom: -1px;
    margin-left: 10px;
}
.statistic-chart .sub-menu ul .active{
    background: #fff;
}
.statistic-chart .sub-menu ul li:hover{
    background: #fff;
}
/**/
</style>
<div class="row" style="margin-top: -15px;padding-bottom: 55px">
    <div class="row" style="background: #f1f1f1;">
        <div class="col-lg-12">
            <div class="title">
                <h3 class="title" >Thống kê cửa hàng</h3>
            </div>
            <div class="statistic-chart">
                <div class="menu">
                    <ul>
                        <li class="active dh">Doanh thu</li>
                        <li>Đơn Hàng</li>
                    </ul>
                    <div class="sub-menu">
                        <ul>
                            <li class="active year">Năm</li>
                            <li class="month-ago">Tháng trước</li>
                            <li class="this-month">Tháng này</li>
                            <li class="day">7 ngày qua</li>
                        </ul>
                        <canvas id="buyers" width="900" height="500" ></canvas>
                    </div>
                </div>
                
                <div class="clearfix"></div>
                
            </div>
        </div>
    </div>
</div>



<?PHP 
include('includes/footer.php');
?>
<script type="text/javascript">
 var day = new Date();
    // Thong ke cac thang trong nam
    $.get("functions/doanhthu/thongke_nam.php","json",function(dt){  
        var data =dt,
        json = JSON.parse(data);
        // 
        var buyerData = {
            type: 'bar',
            barPercentage: 1.5,
            labels : ["Tháng 1","Tháng 2","Tháng 3","Tháng 4","Tháng 5","Tháng 6","Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"],
            datasets : [
            {
                fillColor : "#87CEEB",
                strokeColor : "#3498db",
                pointColor : "#fff",
                pointStrokeColor : "#9DB86D",
                data : [json.thang1,json.thang2,json.thang3,json.thang4,json.thang5,json.thang6,json.thang7,json.thang8,json.thang9,json.thang10,json.thang11,json.thang12]
            }
            ],

        }

        // get line chart canvas
        var buyers = document.getElementById('buyers').getContext('2d');

        // draw line chart
        new Chart(buyers).Bar(buyerData); 
    }); // Ket thuc thong ke theo thang 
    // su kien click cho don hang
    $(".statistic-chart .menu .dh").click(function(){
        if (!$(this).hasClass('active')){
             // Thong ke cac thang trong nam
             $.get("functions/thongke_thang.php","json",function(dt){  
                 var data =dt,
                 json = JSON.parse(data);
            // 
            var buyerData = {
                type: 'bar',
                barPercentage: 1.5,
                labels : ["Tháng 1","Tháng 2","Tháng 3","Tháng 4","Tháng 5","Tháng 6","Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"],
                datasets : [
                {
                    fillColor : "#87CEEB",
                    strokeColor : "#3498db",
                    pointColor : "#fff",
                    pointStrokeColor : "#9DB86D",
                    data : [json.thang1,json.thang2,json.thang3,json.thang4,json.thang5,json.thang6,json.thang7,json.thang8,json.thang9,json.thang10,json.thang11,json.thang12]
                }
                ],

            }

            // get line chart canvas
            var buyers = document.getElementById('buyers').getContext('2d');

            // draw line chart
            new Chart(buyers).Bar(buyerData); 
            }); // Ket thuc thong ke theo thang 
         } 
     })
    //  xu kien click don hon -> nam
    $(".statistic-chart .menu .sub-menu .year").click(function(){
        if (!$(this).hasClass('active')){
            $(".statistic-chart .menu .sub-menu ul li").removeClass('active');
            $(this).addClass('active');
             // Thong ke cac thang trong nam
             $.get("functions/doanhthu/thongke_nam.php","json",function(dt){  
                 var data =dt,
                 json = JSON.parse(data);
            // 
            var buyerData = {
                type: 'bar',
                barPercentage: 1.5,
                labels : ["Tháng 1","Tháng 2","Tháng 3","Tháng 4","Tháng 5","Tháng 6","Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"],
                datasets : [
                {
                    fillColor : "#87CEEB",
                    strokeColor : "#3498db",
                    pointColor : "#fff",
                    pointStrokeColor : "#9DB86D",
                    data : [json.thang1,json.thang2,json.thang3,json.thang4,json.thang5,json.thang6,json.thang7,json.thang8,json.thang9,json.thang10,json.thang11,json.thang12]
                }
                ],

            }

            // get line chart canvas
            var buyers = document.getElementById('buyers').getContext('2d');

            // draw line chart
            new Chart(buyers).Bar(buyerData); 
            }); // Ket thuc thong ke theo thang 
         } 
     })
    //  xu kien click don hon -> thang
    $(".statistic-chart .menu .sub-menu .month-ago").click(function(){
        var date = new Date(day.getFullYear(), day.getMonth()-1, 0).getDate();
        var array_date = new Array();
        for (var i = 1; i <= date; i++) {
            array_date.push(i);
        }

        console.log(array_date);
        if (!$(this).hasClass('active')){
            $(".statistic-chart .menu .sub-menu ul li").removeClass('active');
            $(this).addClass('active');
             // Thong ke cac thang trong nam
             $.get("functions/doanhthu/thongke_thangago.php",{date:date},function(dt){  

                 var data =dt,
                 json = JSON.parse(data);
                 var data = new Array();
                 for(key in json) {
                    data.push(json[key]);
                }

            // var a= new Array("1", "2");
            console.log(data);
            var buyerData = {
                type: 'bar',
                barPercentage: 1.5,
                labels : array_date,
                datasets : [
                {
                    fillColor : "#87CEEB",
                    strokeColor : "#3498db",
                    pointColor : "#fff",
                    pointStrokeColor : "#9DB86D",
                    data : data
                }
                ],

            }

            // get line chart canvas
            var buyers = document.getElementById('buyers').getContext('2d');

            // draw line chart
            new Chart(buyers).Bar(buyerData); 
            }); // Ket thuc thong ke theo thang 
         } 
     })



 </script>