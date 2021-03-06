<?

use yii\helpers\Url;

//echo $shops;
$this->title = $menu->name;
$user = Yii::$app->user->identity;

?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

    .padbut {
        padding-bottom: 20px;
    }

    /*.media-body:hover{*/

    .w3-red, .w3-hover-red:hover {
        color: white !important;
        background-color: #00c054 !important;
    }

    .card-header-b {
        bottom: 0px;
    }

    #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }

    .section-t8 {
        padding-top: 2rem;
    }

    .intro-single {
        padding: 2rem 0 3rem;
    }

    /*link uchun*/

    .tooltip {
        position: relative;
        display: inline-block;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 140px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 150%;
        left: 50%;
        margin-left: -75px;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }

    /*.centered {*/
    /*    color: green;*/
    /*    position: absolute;*/
    /*    top: 50%;*/
    /*    left: 25%;*/
    /*    !*transform: translate(-190%, -50%);*!*/
    /*}*/
    /*.trans{*/
    /*    position: absolute;*/
    /*    transform: rotate(-45deg);*/
    /*}*/

</style>
<section>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row section-t3">
                <div class="col-sm-12">
                    <div class="title-box-d">
                        <h3 class="title-d"><?= $shop->name ?> do`koni haqida ma`lumotlar</h3>
                    </div>
                </div>
            </div>
            <? if ($shop->status == 0): ?>
                <div class="alert alert-info" role="alert">Xurmatli foydalanuvchi! Admin sizning do'koningiz va
                    maxsulotlaringizni faol qilmagunicha ular tizimda ko'rinmaydi, adminga murojaat qiling!
                </div>
            <? endif; ?>
            <div class="row">
                <div class="padbut col-md-6 col-lg-3">
                    <img style="height: 250px" src="/<?= $shop->photo ?>" alt="" class="img-fluid">
                </div>
                <div class="padbut col-md-6 col-lg-3">
                    <div class="property-agent">
                        <h4 class="title-agent"><?= $shop->name ?></h4>
                        <p class="color-text-a">
                            <!--                            --><? //=$shop->text?>
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between">
                                <strong>Phone:</strong>
                                <span class="color-text-a"><?= $shop->tel ?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <strong>Telegram:</strong>
                                <span class="color-text-a"><?= $shop->telegram ?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <strong>Locatsiya:</strong>
                                <span class="color-text-a"><?= $shop->location ?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <strong>video:</strong>
                                <span class="color-text-a"><?= $shop->youtube_link ?></span>
                            </li>
                        </ul>
                        <a href="<?= Url::to(['shopupdate', 'id' => $shop->id]); ?>">
                            <button class="w3-button w3-xlarge w3-circle w3-red w3-card-4">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                        </a>
                    </div>
                    <hr>
                </div>
                <div class="cont padbut col-md-6 col-lg-3">
                    <!--                    <img style="height: 250px" src="/-->
                    <? //=($user->photo)?$user->photo:'uploads/user/avatar.png'?><!--"  alt="" class="img-fluid">-->
                    <? if (isset($user->photo)) { ?>
                        <img style="height: 250px" src="/<?= ($user->photo) ?>" alt="" class="img-fluid">
                    <? } else { ?>
                        <img style="height: 250px" src="/uploads/user/avatar.png" alt="" class=" img-fluid">
<!--                        <div class=" trans centered">Photo</div>-->
                    <? } ?>
                </div>
                <div class="padbut col-md-6 col-lg-3">
                    <div class="property-agent">
                        <h4 class="title-agent"><?= $user->username ?></h4>
                        <p class="color-text-a">
                            <!--                            --><? //=$shop->text?>
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between">
                                <strong>Phone:</strong>
                                <span class="color-text-a"><?= $user->email ?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <strong>Telegram:</strong>
                                <span class="color-text-a"><?= $shop->telegram ?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <strong>Locatsiya:</strong>
                                <span class="color-text-a"><?= $shop->location ?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <strong>video:</strong>
                                <span class="color-text-a"><?= $shop->youtube_link ?></span>
                            </li>
                        </ul>
                        <a href="<?= Url::to(['userupdate', 'id' => $user->id]); ?>">
                            <button class="w3-button w3-xlarge w3-circle w3-red w3-card-4">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                        </a>

                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <hr>
</section>

<section class="news-grid grid">
    <div style="padding: 0px 50px" class="">
        <div class="row">
            <?= Yii::$app->controller->renderPartial("//layouts/left_telegram_list") ?>
            <div class="col-md-12 col-lg-9">
                <div class="intro-single">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="title-single-box">
                                <h1 class="title-single"><?= $user->username ?><i>ning maxsulotlar!</i></h1>
                                <span class="color-text-a">Maxsulot qo'shish
                                        <a href="<?= Url::to(['create']); ?>"><button
                                                    class="w3-button w3-xlarge w3-circle w3-red w3-card-4">+</button> </a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="title-single-box">
                                <h1 class="title-single"><i style="color: #00c054" class="fa fa-telegram"> Kanalingizga
                                        linkni joylang!</i></h1>


                                <div class="row">
                                    <div style="padding-top: 15px" class="col-md-6">
                                        <a href="<?= $shop->url ?>">
                                            <input class="form-control" type="text" style="font-size: 10px" readonly
                                                   value="<?= $shop->url ?>" id="myInput">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div style="padding-top: 10px" class="col-md-6">
                                                <button class=" w3-round-xxlarge w3-button w3-green"
                                                        onclick="myFunction()" onmouseout="outFunc()">
                                                    Nusxa olish
                                                </button>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <!--                                        <div class="tooltip">-->
                                <!--                                            <button style="background-color: #00c054" onclick="myFunction()" onmouseout="outFunc()">-->
                                <!--                                              <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>-->
                                <!--                                              Copy text-->
                                <!--                                             </button>-->
                                <!--                                        </div>-->
                                <!--                                        <a  href="-->
                                <? //=Url::to(['create']);?><!--"><button class="w3-button w3-xlarge w3-circle w3-red w3-card-4">+</button> </a>-->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <? foreach ($shopitem as $key => $item): ?>
                        <div class="col-md-3 col-lg-3 col-sm-6">
                            <div class="card-box-b card-shadow news-box">
                                <div class="img-box-b">
                                    <!--                                --><? // var_dump($item->photo); die();   ?>
                                    <img style="" src="/<?= $item->photo ?>" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="<?= Url::to(['update', 'id' => $item->id]) ?>"
                                               style="background-color: #0a73bb" class="category-b"><span
                                                        style="color: white" class="fa fa-pencil" aria-hidden="true"> (o'zgartirish)</span></a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href=""><?= $item->name ?>
                                                    <br></a>
                                                <span class="date-b"><?= ($item->updated_date) ? $item->updated_date : $item->created_date ?></span>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <!--                                <a href="-->
                                            <? //=Url::to(['delete','id'=>$item->id])?><!--" style="background-color: white" class="category-b"><span style="color: red" class="fa fa-trash" aria-hidden="true"> </span></a>-->
                                            <? if ($item->status == 0) { ?>
                                                <a href="<?= Url::to(['delete', 'id' => $item->id]) ?> "
                                                   title="o`chirish" aria-label="Delete" data-pjax="0"
                                                   data-confirm="Ushbu bo`lim o`chirib tashlansinmi?"
                                                   data-method="post">
                                                    <span style="color: red; font-size: 150%" class="fa fa-trash"
                                                          aria-hidden="true"> <span
                                                                style="color: white; font-size: 70%">(statusi o`chik)</span></span></a>
                                            <? } else { ?>
                                                <a href="<?= Url::to(['delete', 'id' => $item->id]) ?> "
                                                   title="o`chirish" aria-label="Delete" data-pjax="0"
                                                   data-confirm="Ushbu bo`lim o`chirib tashlansinmi?"
                                                   data-method="post">
                                                    <span style="color: red; font-size: 150%" class="fa fa-trash"
                                                          aria-hidden="true"> </span></a>
                                            <? } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function myFunction() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");

        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copied: " + copyText.value;
    }

    function outFunc() {
        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copy to clipboard";
    }
</script>


<!--<section style="padding-top: 20px ">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-6"></div>-->
<!--            <div class="col-md-6"></div>-->
<!--            <table id="customers">-->
<!--                <tr>-->
<!--                    <th>Maxsulot nomi</th>-->
<!--                    <th>narxi</th>-->
<!--                    <th>Qoshilgan sana</th>-->
<!--                    <th>O'zgartirilgan asana</th>-->
<!--                    <th colspan="2" >-->
<!--                        <a style="color: white" href="--><? //=Url::to(['shop-items/usercreate']);?><!--"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> qo'shish </a>-->
<!--                    </th>-->
<!--                </tr>-->
<!--                --><? // foreach ($shopitem as $key=>$item): ?>
<!--                    <tr>-->
<!--                        <td>--><? //=$item->name ?><!--</td>-->
<!--                        <td>--><? //=$item->price ?><!--</td>-->
<!--                        <td>--><? //=$item->created_date ?><!--</td>-->
<!--                        <td>--><? //=$item->updated_date ?><!--</td>-->
<!--                        <td><a href="--><? //=Url::to(['shop-items/userupdate','id'=>$item->id]);?><!--"><span class="fa fa-pencil" aria-hidden="true"> (o'zgartirish)</span></a></td>-->
<!--                        <td><a href="--><? //=Url::to(['shop-items/delete','id'=>$item->id]);?><!--" title="Delete" aria-label="Delete" data-pjax="0" data-confirm="Ushbu bo`lim o`chirib tashlansinmi?" data-method="post"><span style="color: red" class="fa fa-trash" aria-hidden="true"> (o'chirish)</span></a></td>-->
<!---->
<!--                    </tr>-->
<!--                --><? // endforeach;?>
<!--            </table>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</section>-->

