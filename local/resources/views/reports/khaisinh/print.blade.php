<!DOCTYPE html>
<html>
<head>
    <title>{{$pageTitle}}</title>
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<style>
    @media print {
        .noPrint {
            visibility: hidden;
        }
    }
</style>

<script>
    function ClickDelete(){
        $('#frm_delete').submit();
    }
    $(document).ready(function(){
        $("button").click(function(){
            var current_path_url = '/khaisinhs/{{$id}}/printss?';
            var x = $("#flying").position();var x1 = $("#flying1").position();var x2 = $("#flying2").position();
            var x3 = $("#flying3").position();var x4 = $("#flying4").position();var x5 = $("#flying5").position();
            var x6 = $("#flying6").position();var x7 = $("#flying7").position();var x8 = $("#flying8").position();
            var x9 = $("#flying9").position();var x10 = $("#flying10").position();var x11 = $("#flying11").position();
            var x12 = $("#flying12").position();var x13 = $("#flying13").position();var x14 = $("#flying14").position();
            var x15 = $("#flying15").position();var x16 = $("#flying16").position();var x17 = $("#flying17").position();
            var x18 = $("#flying18").position();var x19 = $("#flying19").position();var x20 = $("#flying20").position();
            var x21 = $("#flying21").position();var x22 = $("#flying22").position();var x23 = $("#flying23").position();
            var x24 = $("#flying24").position(); var x25 = $("#flying25").position();

            var xa1  = '&xa1=' + x.top ;
            var xa2  = '&xa2=' + x.left ;
            var xa3  = '&xa3=' + x1.top ;
            var xa4  = '&xa4=' + x1.left ;
            var xa5  = '&xa5=' + x2.top ;
            var xa6  = '&xa6=' + x2.left ;
            var xa7  = '&xa7=' + x3.top ;
            var xa8  = '&xa8=' + x3.left ;
            var xa9  = '&xa9=' + x4.top ;
            var xa10  = '&xa10=' + x4.left ;
            var xa11  = '&xa11=' + x5.top ;
            var xa12  = '&xa12=' + x5.left ;
            var xa13  = '&xa13=' + x6.top ;
            var xa14  = '&xa14=' + x6.left ;
            var xa15  = '&xa15=' + x7.top ;
            var xa16  = '&xa16=' + x7.left ;
            var xa17  = '&xa17=' + x8.top ;
            var xa18  = '&xa18=' + x8.left ;
            var xa19  = '&xa19=' + x9.top ;
            var xa20  = '&xa20=' + x9.left ;
            var xa21  = '&xa21=' + x10.top ;
            var xa22  = '&xa22=' + x10.left ;
            var xa23  = '&xa23=' + x11.top ;
            var xa24  = '&xa24=' + x11.left ;
            var xa25  = '&xa25=' + x12.top ;
            var xa26  = '&xa26=' + x12.left ;
            var xa27  = '&xa27=' + x13.top ;
            var xa28  = '&xa28=' + x13.left ;
            var xa29  = '&xa29=' + x14.top ;
            var xa30  = '&xa30=' + x14.left ;
            var xa31  = '&xa31=' + x15.top ;
            var xa32  = '&xa32=' + x15.left ;
            var xa33  = '&xa33=' + x16.top ;
            var xa34  = '&xa34=' + x16.left ;
            var xa35  = '&xa35=' + x17.top ;
            var xa36  = '&xa36=' + x17.left ;
            var xa37  = '&xa37=' + x18.top ;
            var xa38  = '&xa38=' + x18.left ;
            var xa39  = '&xa39=' + x19.top ;
            var xa40  = '&xa40=' + x19.left ;
            var xa41  = '&xa41=' + x20.top ;
            var xa42  = '&xa42=' + x20.left ;
            var xa43  = '&xa43=' + x21.top ;
            var xa44  = '&xa44=' + x21.left ;
            var xa45  = '&xa45=' + x22.top ;
            var xa46  = '&xa46=' + x22.left ;
            var xa47  = '&xa47=' + x23.top ;
            var xa48  = '&xa48=' + x23.left ;
            var xa49  = '&xa49=' + x24.top ;
            var xa50  = '&xa50=' + x24.left ;
            var xa51  = '&xa51=' + x25.top ;
            var xa52  = '&xa52=' + x25.left ;
            var url = current_path_url;
            window.location.href = url+xa1+xa2+xa3+xa4+xa5+xa6+xa7+xa8+xa9+xa10+xa11+xa12+xa13+xa14+xa15+xa16+xa17+xa18+xa19+xa20+xa21+xa22+xa23+xa24+xa25+xa26
                +xa27+xa28+xa29+xa30+xa31+xa32+xa33+xa34+xa35+xa36+xa37+xa38+xa39+xa40+xa41+xa42+xa43+xa44+xa45+xa46+xa47+xa48+xa49+xa50+xa51+xa52;
        });

        $('#Button1').click(function() {
            location.reload();
        });
    });
</script>
<button class="noPrint">Lưu tọa độ</button>
<style>
    #flying, #flying1 ,#flying2, #flying3, #flying4, #flying5,#flying6,#flying7,#flying8,#flying9,#flying10,
    #flying11,#flying12,#flying13,#flying14,#flying15,#flying16,#flying17,#flying18,#flying19,#flying20,
    #flying21,#flying22,#flying23,#flying24,#flying25 {  position: absolute;  }
</style>

<script>
    function byId(e){return document.getElementById(e);}

    window.addEventListener('load', myInitFunc, false);

    function myInitFunc()
    {
        byId('flying').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying1').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying2').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying3').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying4').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying5').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying6').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying7').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying8').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying9').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying10').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying11').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying12').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying13').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying14').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying15').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying16').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying17').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying18').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying19').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying20').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying21').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying22').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying23').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying24').addEventListener('mousedown', onImgMouseDown, false);
        byId('flying25').addEventListener('mousedown', onImgMouseDown, false);
    }

    function onImgMouseDown(e)
    {
        e = e || event;
        var mElem = this;
        var initMx = e.pageX;
        var initMy = e.pageY;
        var initElemX = this.offsetLeft;
        var initElemY = this.offsetTop;

        var dx = initMx - initElemX;
        var dy = initMy - initElemY;

        document.onmousemove = function(e)
        {
            e = e || event;
            mElem.style.left = e.pageX-dx+'px';
            mElem.style.top = e.pageY-dy+'px';
        }
        this.onmouseup = function()
        {
            document.onmousemove = null;
        }

        this.ondragstart = function() { return false; }

    }
</script>

</head>
<body style="font-size: 16px; width:99%;">
<table width="96%" border="0" cellspacing="0" cellpadding="4" style="margin:0 auto 20px; text-align: center;">
    <tr>
        <td style="width:26%"></td>
        <td>
            <b  class="noPrint">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</b><br>
        </td>
        <td>
            <i style="visibility: hidden;">Mẫu TP/CN-2011/CN.01.a</i>
        </td>
    </tr>
    <tr>
        <td style="width:26%"></td>
        <td>
            <p class="noPrint" style="margin-top:-5px;"><b><u>ĐỘC LẬP - TỰ DO - HẠNH PHÚC</u></b></p>
            <img class="noPrint" src="{{url('images/quochuy.png')}}" width="100">
        </td>
        <td>
            <p style="text-align:left"><span class="noPrint">Số:</span>

            </p>
            <label  class="noPrint" style="left: 1031.984375px; top: 54.984375px;"   id="flying">
              Lock
            </label>
        </td>
    </tr>
    <tr>
    </tr>
</table>

<table width="96%" border="0" cellspacing="0" cellpadding="8" style="margin: auto auto; text-align: center;font-size: 25px">
    <tr>
        <td>
            <b class="noPrint">GIẤY KHAI SINH</b>
        </td>
    </tr>
</table>
<table width="85%" border="0" cellspacing="0" cellpadding="8" style="font-size: 27px;border-collapse: collapse; margin:0px auto">
    <tr style="line-height: 0.00001">
        <td>
            <p style="margin-top: 10px; margin-bottom: 10px;">
                <b style="visibility: hidden;position:relative;top:20px;" class="noPrint">Họ, chữ đệm, tên:  </b>
                <label @if($toado != null)style="left: {{$toado->toado4}}px; top: {{$toado->toado3}}px;" @endif id="flying1"><b  style="text-transform: uppercase;margin-left: 20px; position:relative;top:20px;">{{$model->hotenks}}</b></label>
            </p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 5px; margin-bottom: 5px"><span style="visibility: hidden;">a</span></p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td>
            <p style="margin-top: 10px; margin-bottom: 10px">
                <span style="visibility: hidden;position:relative;top:8px;"  class="noPrint">Ngày, tháng, năm sinh:</span><label @if($toado != null)style="left: {{$toado->toado6}}px; top: {{$toado->toado5}}px;" @endif id="flying2"><a style="position:relative;margin-left: 20px;top:8px;">{{getDayVn($model->ngaysinhks)}}</a></label>
                <span  style="visibility: hidden;position:relative;top:8px;margin-left: 220px;" class="noPrint"> ghi bằng chữ:</span><label @if($toado != null)style="left: {{$toado->toado8}}px; top: {{$toado->toado7}}px;"  @endif id="flying3"><a style="position:relative;top:8px;">{{$model->ngaysinhksbangchu}}</a></label>
            </p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 5px; margin-bottom: 5px"><span style="visibility: hidden;">a</span></p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td>
            <p style="margin-top: 10px; margin-bottom: 10px">
                <span style="visibility: hidden;position:relative;bottom:0px;" class="noPrint">Giới tính:</span><label style="position:relative;bottom:0px; margin-left: 10px;" ><a @if($toado != null)style="left: {{$toado->toado10}}px; top: {{$toado->toado9}}px;" @endif id="flying4">{{$model->gioitinhks}}</a></label>
                <span style="visibility: hidden;position:relative;bottom:0px;margin-left: 60px;"  class="noPrint">Dân tộc:</span><label @if($toado != null)style="left: {{$toado->toado12}}px; top: {{$toado->toado11}}px;" @endif id="flying5"><a style="position:relative;bottom:0px; margin-left: 20px;"  >{{$model->dantocks}}</a></label><!-- position:relative: chú ý thuộc tính này làm cho dân tộc Hmong bị níu lại -->
                <span style="visibility: hidden;position:relative;bottom:0px;margin-left: 100px;"  class="noPrint">Quốc tịch:</span><label @if($toado != null)style="left: {{$toado->toado14}}px; top: {{$toado->toado13}}px;" @endif  id="flying6"  ><a style="position:relative;bottom:0px; margin-left: 20px;">{{$model->quoctichks}}</a></label>
            </p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 10px; margin-bottom: 10px">
                <span style="visibility: hidden;position:relative;bottom:2px;" class="noPrint">Nơi sinh:</span><label @if($toado != null)style="left: {{$toado->toado16}}px; top: {{$toado->toado15}}px;" @endif id="flying7"><a style="position:relative;margin-left: 10px;bottom:2px;">{{$model->noisinh}}</a></label>
            </p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 5px; margin-bottom: 5px"><span style="visibility: hidden;">a</span></p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 10px; margin-bottom: 10px">
                <span style="visibility: hidden;position:relative;bottom:8px;" class="noPrint">Quê quán:</span><label @if($toado != null)style="left: {{$toado->toado18}}px; top: {{$toado->toado17}}px;" @endif id="flying8"><a style="position:relative;margin-left: 20px;bottom:8px;">{{$model->quequanks}}</a></label>
            </p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 5px; margin-bottom: 5px"><span style="visibility: hidden;">a</span></p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 10px; margin-bottom: 10px">
                <span style="visibility: hidden;position:relative;bottom:10px;" class="noPrint">Số định danh cá nhân:</span><label @if($toado != null)style="left: {{$toado->toado20}}px; top: {{$toado->toado19}}px;" @endif id="flying9" ><a style="position:relative;margin-left: 20px;bottom:10px;">{{$model->sodinhdanhcanhan}}</a></label>
            </p>
        </td>
    </tr>
    <!--Thông tin mẹ-->
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 10px; margin-bottom: 10px">
                <b style="visibility: hidden;position:relative;bottom:15px;" class="noPrint">Họ, chữ đệm, tên người mẹ: </b> <label @if($toado != null)style="left: {{$toado->toado22}}px; top: {{$toado->toado21}}px;" @endif id="flying10" ><b><a style="position:relative;margin-left: 20px;bottom:15px;text-transform: uppercase">{{$model->hotenme}}</a></b></label>
            </p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td>
            <p style="margin-top: 10px; margin-bottom: 10px">
                <span style="visibility: hidden;position:relative;bottom:20px;" class="noPrint">Năm sinh:</span><label style="position:relative;bottom:20px; margin-left: 2px;" ><a @if($toado != null)style="left: {{$toado->toado24}}px; top: {{$toado->toado23}}px;" @endif id="flying11">@if($model->hotenme != ''){{$model->ngaysinhme}} @else @endif</a></label>
                <span style="visibility: hidden;position:relative;bottom:20px;margin-left: 100px;"  class="noPrint">Dân tộc:</span><label @if($toado != null)style="left: {{$toado->toado26}}px; top: {{$toado->toado25}}px;" @endif id="flying12"  ><a style="position:relative;bottom:20px; margin-left: 2px;">@if($model->hotenme != ''){{$model->dantocme}}  @else @endif</a></label>
                <span style="visibility: hidden;position:relative;bottom:20px;margin-left: 100px;"  class="noPrint">Quốc tịch:</span><label @if($toado != null)style="left: {{$toado->toado28}}px; top: {{$toado->toado27}}px;" @endif id="flying13"  ><a style="position:relative;bottom:20px; margin-left: 2px;">@if($model->hotenme != ''){{$model->quoctichme}}  @else @endif</a></label>
            </p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 10px; margin-bottom: 10px">
                <span style="visibility: hidden;position:relative;bottom:15px;" class="noPrint">Nơi cư trú:</span><label @if($toado != null)style="left: {{$toado->toado30}}px; top: {{$toado->toado29}}px;" @endif id="flying14"><a style="position:relative;bottom:15px; margin-left: 2px;">@if($model->hotenme != ''){{$model->diachime}} @else @endif</a></label>
            </p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 5px; margin-bottom: 5px"><span style="visibility: hidden;">a</span></p>
        </td>
    </tr>
    <!--Thông tin cha-->
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 10px; margin-bottom: 10px"><b style="visibility: hidden;position:relative;bottom:20px;" class="noPrint">Họ, chữ đệm, tên người cha: </b> <label @if($toado != null)style="left: {{$toado->toado32}}px; top: {{$toado->toado31}}px;" @endif id="flying15" ><b style="position:relative;bottom:20px; margin-left: 10px;text-transform: uppercase">{{$model->hotencha}}</b></label></p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 10px; margin-bottom: 10px">
                <span style="visibility: hidden;position:relative;bottom:20px;" class="noPrint">Năm sinh:</span><label style="position:relative;bottom:20px; margin-left: 2px;" ><a @if($toado != null)style="left: {{$toado->toado34}}px; top: {{$toado->toado33}}px;" @endif id="flying16">@if($model->hotencha !=''){{$model->ngaysinhcha}} @else @endif</a></label>
                <span style="visibility: hidden;position:relative;bottom:20px;margin-left: 100px;"  class="noPrint">Dân tộc:</span><label @if($toado != null)style="left: {{$toado->toado36}}px; top: {{$toado->toado35}}px;" @endif id="flying17"  ><a style="position:relative;bottom:20px; margin-left: 2px;">@if($model->hotencha !=''){{$model->dantoccha}} @else @endif</a></label>
                <span style="visibility: hidden;position:relative;bottom:20px;margin-left: 100px;"  class="noPrint">Quốc tịch:</span><label @if($toado != null)style="left: {{$toado->toado38}}px; top: {{$toado->toado37}}px;" @endif id="flying18"  ><a style="position:relative;bottom:20px; margin-left: 2px;">@if($model->hotencha !=''){{$model->quoctichcha}} @else @endif</a></label>
            </p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 10px; margin-bottom: 10px">
                <span style="visibility: hidden;position:relative;bottom:25px;" class="noPrint">Nơi cư trú:</span><label @if($toado != null)style="left: {{$toado->toado40}}px; top: {{$toado->toado39}}px;" @endif id="flying19"><a style="position:relative;bottom:25px; margin-left: 10px;">@if($model->hotencha !=''){{$model->diachicha}} @else @endif</a></label>
            </p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 5px; margin-bottom: 5px"><span style="visibility: hidden;">a</span></p>
        </td>
    </tr>
    <!--Thông tin người đi khai sinh-->
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 10px; margin-bottom: 10px">
                <b  style="visibility: hidden;position:relative;bottom:35px;" class="noPrint">Họ, chữ đệm, tên người đi khai sinh: </b> <label @if($toado != null)style="left: {{$toado->toado42}}px; top: {{$toado->toado41}}px;" @endif id="flying20" ><b style="position:relative;bottom:35px; margin-left: 20px; text-transform: uppercase">{{$model->hotennk}}</b></label>
            </p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 10px; margin-bottom: 10px">
                <span style="visibility: hidden;position:relative;bottom:30px;"class="noPrint">Giấy tờ tùy thân:</span><label @if($toado != null)style="left: {{$toado->toado44}}px; top: {{$toado->toado43}}px;" @endif id="flying21"><a  style="position:relative;bottom:30px; margin-left: 25px;">{{$model->loaigiaytonk}} số: {{$model->sogiaytonk}}, {{$model->noicapgtnk}} cấp ngày {{getDayVn($model->ngaycapgtnk)}} </a></label>
            </p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 10px; margin-bottom: 10px">
                <b style="visibility: hidden;position:relative;bottom:25px;" class="noPrint">Nơi đăng ký khai sinh:</b><label @if($toado != null)style="left: {{$toado->toado46}}px; top: {{$toado->toado45}}px;" @endif id="flying22"><a  style="position:relative;bottom:25px; margin-left: 25px;">{{$xa}}, {{$huyen}}, Tỉnh Hà Giang</a></label>
            </p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 5px; margin-bottom: 5px"><span style="visibility: hidden;">a</span></p>
        </td>
    </tr>
    <tr style="line-height: 0.00001">
        <td >
            <p style="margin-top: 10px; margin-bottom: 10px">
                <b style="visibility: hidden;position:relative;bottom:30px;" class="noPrint">Ngày, tháng, năm đăng ký:</b><label @if($toado != null)style="left: {{$toado->toado48}}px; top: {{$toado->toado47}}px;" @endif id="flying23"><a style="position:relative;bottom:30px; margin-left: 25px;">{{getDayVn($model->ngaydangky)}}</a></label>
            </p>
        </td>
    </tr>
</table>
<table style="font-size: 29px;margin:auto; text-align: center;">
    <tr>
        <td width="50%"></td>
        <td>
            <table>
                <tr><td><b  style="visibility: hidden;"class="noPrint">NGƯỜI KÝ GIẤY KHAI SINH</b></td></tr>
                <tr><td><i   style="visibility: hidden;" class="noPrint">(Ký, ghi rõ họ, chữ đệm, tên, chức vụ, đóng dấu)</i></td></tr>
                <tr>
                    <td style="vertical-align: bottom">
                        <p>
                            <b @if($toado != null)style="left: {{$toado->toado50}}px; top: {{$toado->toado49}}px;" @endif id="flying24">{{$model->nguoiky}}</b>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: bottom">
                        <p>
                            <b @if($toado != null)style="left: {{$toado->toado52}}px; top: {{$toado->toado51}}px;" @endif id="flying25">{{$model->so}}</b>
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>