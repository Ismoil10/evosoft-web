<div class="intro_services service_bg">
    <div class="web_app_container">
        <div class="intro_goal">
            <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '224']) as $v): ?>
                <div class="wapp_text">
                    <div class="wapp_title"><?= $v['title'] ?></div>
                    <div class="wapp_concept"><?= $v['text'] ?></div>
                    <div class="service_gs">
                        <a href="#" class="main_gs_button"><i class="fa-solid fa-rocket"></i> <?= $v['button'] ?></a>
                    </div>
                    <div class="discuss_point">
                        <div class="arrow_up">
                            <a href="#"><img src="<?= $v['icon'] ?>" alt=""></a>
                        </div>
                        <a class="discuss_text" href="#"><?= $v['offer'] ?></a>
                    </div>
                </div>
            <? endforeach; ?>
            <div class="single_ellipse">
                <div class="ellipse_imgs">
                <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '233']) as $v): ?>
                    <img class="<?=$v['class']?>" src="<?=$v['image']?>" alt="Macbook in circle">
                <? endforeach; ?>
                </div>
            </div>
        </div>
        <div class="service_arrow">
            <a href="#">
            <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '232']) as $v): ?>
                <img class="main_arrow" src="<?=$v['image']?>" alt="Arrow">
            <? endforeach; ?>
            </a>
        </div>
    </div>
    <div class="service_container">
        <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '226']) as $v): ?>
            <div class="why_us_container">
                <div class="service_title">
                    <?= $v['start'] ?>
                </div>
                <div class="service_title">
                    <?= $v['title']?>
                </div>
                <div class="service_title">
                    <?= $v['text']?>
                </div>
            </div>
        <? endforeach; ?>
        <div class="advantages">
        <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '227']) as $v): ?>
            <div class="atg_box">
                <div class="atg_icon">
                    <img src="<?=$v['image']?>">
                </div>
                <div class="atg_text"><?=$v['text']?></div>
            </div>
        <? endforeach; ?>
        </div>
    </div>
    <div class="choices_container">
        <div class="sv_choices">
        <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '228']) as $v): ?>
            <a href="#" class="<?=$v['class']?>"><?=$v['text']?></a>
        <? endforeach; ?>
        </div>
        <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '229']) as $v): ?>
        <div class="web_dvp">
            <div class="dvp_text"><?=$v['title']?></div>
            <div class="dvp_text"><?=$v['text']?></div>
        </div>
        <? endforeach; ?>
    </div>
    <div class="sv_card_container">
        <div class="sv_card_row">
            <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '225']) as $v): ?>
                <div class="sv_card">
                    <div class="middle_img">
                        <img class="middle_bg_img" src="<?= $v['image'] ?>" alt="Background image">
                    </div>
                    <div class="sp_btns">
                        <a href="<?= $v['btn1_url'] ?>" class="web_btn"><?= $v['button1'] ?></a>
                        <a href="<?= $v['btn2_url'] ?>" class="web_btn"><?= $v['button2'] ?></a>
                        <div class="selection_date">
                            <?= $v['date'] ?>
                        </div>
                    </div>
                    <div class="spc_system">
                        <div class="spc_title">
                            <?= $v['title'] ?>
                        </div>
                        <div class="med_text">
                            <?= $v['text'] ?>
                        </div>
                    </div>
                    <div class="spc_detail">
                        <a href="<?= $v['url'] ?>">
                            <?= $v['button'] ?>
                        </a>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
        <div class="sv_cases">
            <a href="#" class="see_cases_link">See all cases</a>
        </div>
    </div>
    <div class="suppliment_container">
        <h4 class="spm_title">To the supplement</h4>
    <? foreach(view::CONTENT("all_active", ['IBLOCK_ID' => '230']) as $v): ?>
        <div class="frame_used">
            <div class="fmw_main fmw-toggle">
            <!--<i class="fa-solid fa-caret-down toggle-icon"></i> <i class="fa-solid fa-minus toggle-icon"></i> --><img class="toggle-icon" src="https://evobot.uz/upload/c3e878e27f52e2a57ace4d9a76fd9acf.svg" alt="">
                <div class="fmw_title"><?=$v['title']?></div>
            </div>
            <ul>
                <li><a href="#">Flutter SDK</a></li>
                <li><a href="#">Flutter Plugins</a></li>
                <li><a href="#">Provider</a></li>
                <li><a href="#">Flutter Async</a></li>
                <li><a href="#">Streams</a></li>
                <li><a href="#">RxDart</a></li>
            </ul>
            <ul>
                <li><a href="#">Flutter SDK</a></li>
                <li><a href="#">Flutter Plugins</a></li>
                <li><a href="#">Provider</a></li>
                <li><a href="#">Flutter Async</a></li>
                <li><a href="#">Streams</a></li>
                <li><a href="#">RxDart</a></li>
            </ul>
        </div>
    <? endforeach; ?>
        <!--<div class="spm_types">
            <div class="fmw_main">
                <img src="<? echo $template_path; ?>img/jyyl7trr754635756dg.svg" alt="">
                <div class="fmw_title">Libraries used</div>
            </div>
        </div>
        <div class="spm_types">
            <div class="fmw_main">
                <img src="<? echo $template_path; ?>img/jyyl7trr754635756dg.svg" alt="">
                <div class="fmw_title">Device types</div>
            </div>
        </div>
        <div class="spm_types">
            <div class="fmw_main">
                <img src="<? echo $template_path; ?>img/jyyl7trr754635756dg.svg" alt="">
                <div class="fmw_title">Design</div>
            </div>
        </div>-->
    </div>
    <div class="svcon_container">
    <? foreach(view::CONTENT("all_active", ['IBLOCK_ID' => '231']) as $v): ?>
        <div class="sv_contact_card">
            <div class="contact_title">
                <div class="ideas_title"><?=$v['title']?></div>
                <div class="ideas_text"><?=$v['text']?></div>
            </div>
            <div class="sv_contact_action">
                <a class="contact_btn" href="<?=$v['url']?>"><?=$v['button']?></a>
            </div>
        </div>
        <? endforeach; ?>
    </div>
</div>