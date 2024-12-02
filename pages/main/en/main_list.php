<div class="custom-main-container">
    <div class="main_frame">
        <div class="text_env">
            <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '160']) as $v): ?>
                <div class="main_text">
                    <?= $v['banner'] ?>
                </div>
                <div class="secondary_text">
                    <?= $v['text'] ?>
                </div>
            <? endforeach; ?>
        </div>
        <div class="main_buttons">
            <button id="openModalBtn" class="main_gs_button"><i class="fa-solid fa-rocket"></i> Get started</button>
            <a href="#" class="button_soc"><i class="fa-solid fa-wand-magic-sparkles"></i> See our cases</a>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="modal_text">
                    <h4>You are on the right track ✋</h4>
                    <p>
                        Your request has been sent successfully.
                        Our experienced data managers have already started working on your question.
                        They will contact you shortly to discuss details and provide complete information.
                    </p>
                </div>
                <div class="contact_inputs">
                    <div class="apply_form con_md">
                        <div class="apply_contact">
                            <label for="">Name</label>
                            <input class="contact_form" type="text" placeholder="Name">
                        </div>
                        <div class="apply_contact">
                            <label for="">Email</label>
                            <input class="contact_form" type="text" placeholder="Email">
                        </div>
                        <div class="contact_msg">
                            <label for="">Message</label>
                            <textarea class="con_msg_form" name="swe_name" id="" placeholder="Message"></textarea>
                        </div>
                        <button class="contact_button" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_canvas">
        <div class="second_border">
            <canvas id="canvasOne" class="canvas_border" width="620px" height="620px">
                Your browser does not support HTML5 canvas.
            </canvas>
        </div>
    </div>
</div>
<div class="card_container">
    <div class="common_text">
        <div class="question_text">
            <div class="service_title">What we do?</div>
        </div>
        <div class="service_purpose">We specialize in creating web applications, designing stunning websites, and developing Telegram Bots. Our team of experts is dedicated to delivering high-quality solutions that meet your unique needs and exceed your expectations.</div>
    </div>
    <div class="common_cards">
        <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '216']) as $v): ?>
            <div class="custom_card">
                <div class="card_transform">
                    <div class="card_num">0<?= $v['number'] ?>.</div>
                    <div class="card_title">
                        <?= $v['name'] ?>
                    </div>
                    <div class="hidden_text">
                        <?= $v['text'] ?>
                    </div>
                    <div class="card_button">
                        <a href="<?= $v['url'] ?>" class="hidden_button"><?= $v['button'] ?> <i class="fa-solid fa-hand-peace"></i></a>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>

</div>
<div class="case_container">
    <div class="main_case">
        <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '217']) as $v): ?>
            <div class="case_title">
                <div class="case_text">
                    <div class="cases_middle">
                        <?= $v['start'] ?>
                    </div>
                    <div class="exp_title">
                        <?= $v['title'] ?>
                    </div>
                </div>
                <div class="case_sec_text">
                    <?= $v['text'] ?>
                </div>
            </div>
        <? endforeach; ?>
    </div>
    <div class="custom_mob">
        <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '218']) as $v): ?>
            <a href="<?= $v['url'] ?>" class="mob_button"><?= $v['name'] ?></a>
        <? endforeach; ?>
    </div>
    <div class="selection_part">
        <div class="common_selection">
            <div class="first_part">
                <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '219']) as $v): ?>
                    <div class="part_size">
                        <div class="selection_img">
                            <img class="background_img" src="<?= $v['image'] ?>" alt="Background image">
                        </div>
                        <div class="selection_buttons">
                            <a href="<?= $v['btn1_url'] ?>" class="web_btn"><?= $v['button1'] ?></a>
                            <a href="<?= $v['btn2_url'] ?>" class="web_btn"><?= $v['button2'] ?></a>
                            <div class="selection_date">
                                <?= $v['date'] ?>
                            </div>
                        </div>
                        <div class="med_system">
                            <div class="med_title">
                                <?= $v['title'] ?>
                            </div>
                            <div class="med_text">
                                <?= $v['text'] ?>
                            </div>
                        </div>
                        <div class="case_detail">
                            <a href="<?= $v['url'] ?>">
                                <?= $v['button'] ?>
                            </a>
                        </div>
                    </div>
                    <div class="first_part_line"></div>
                <? endforeach; ?>
            </div>
            <div class="second_part">
            <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '225']) as $v): ?>
                <div class="middle_size">
                    <div class="middle_img">
                        <img class="middle_bg_img" src="<?=$v['image']?>" alt="Background image">
                    </div>
                    <div class="sp_btns">
                        <a href="<?=$v['btn1_url']?>" class="web_btn"><?=$v['button1']?></a>
                        <a href="<?=$v['btn2_url']?>" class="web_btn"><?=$v['button2']?></a>
                        <div class="selection_date">
                            <?=$v['date']?>
                        </div>
                    </div>
                    <div class="spc_system">
                        <div class="spc_title">
                            <?=$v['title']?>
                        </div>
                        <div class="med_text">
                            <?=$v['text']?>    
                        </div>
                    </div>
                    <div class="spc_detail">
                        <a href="<?=$v['url']?>">
                            <?=$v['button']?>
                        </a>
                    </div>
                </div>
                <div class="second_part_line"></div>
            <? endforeach; ?>
            </div>
        </div>
        <div class="see_cases">
            <a href="#" class="see_cases_link">See all cases</a>
        </div>
    </div>
</div>
<div class="blog-container">
    <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '221']) as $v): ?>
        <div class="blog_big_title">
            <div class="subheading"><?= $v['start'] ?></div>
            <div class="blog_title">
                <div class="bg_body_title">
                    <?= $v['title'] ?>
                </div>
                <div class="bg_foot_title">
                    <?= $v['text'] ?>
                </div>
            </div>
        </div>
    <? endforeach; ?>
    <div class="blog_cards">
        <div class="blog_row"><!-- swiper-container -->
           <!-- id="custom_swiper" swiper-container -->
            <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '222']) as $v): ?>
                <div class="bg_card">
                    <img src="<?=$v['image']?>" alt="Future">
                    <div class="bg_content">
                        <div class="bg_card_title">
                            <div class="title_info">
                                <div class="info_button"><?=$v['info_btn']?></div>
                                <div class="bg_read_time"><?=$v['info_tm']?></div>
                            </div>
                            <div class="bg_card_text">
                                <div class="card_head_text"><?=$v['title']?></div>
                                <div class="card_body_text"><?=$v['text']?></div>
                            </div>
                        </div>
                        <div class="bg_content_btn">
                            <a href="<?=$v['url']?>"><?=$v['button']?> <i class="fa-solid fa-chevron-right custom_chevron"></i></a>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
         
        </div>
        <div class="blog_button">
            <a href="/en/blog" class="view_link">View all</a>
        </div>
    </div>
</div>
<div class="logo-container swiper-container">
    <div class="logo_head">
        Trusted by the world's best companies [social proof to build credibility]
    </div>
    <div class="logo_content swiper-wrapper">
        <img class="web_flow" src="<? echo $template_path; ?>img/webflow.png" alt="Webflow">
        <img class="web_flow" src="<? echo $template_path; ?>img/relume.png" alt="Relume">
        <img class="web_flow" src="<? echo $template_path; ?>img/webflow.png" alt="Webflow">
        <img class="web_flow" src="<? echo $template_path; ?>img/relume.png" alt="Relume">
        <img class="web_flow" src="<? echo $template_path; ?>img/webflow.png" alt="Webflow">
        <img class="web_flow" src="<? echo $template_path; ?>img/relume.png" alt="Relume">
        <img class="web_flow" src="<? echo $template_path; ?>img/webflow.png" alt="Webflow">
        <img class="web_flow" src="<? echo $template_path; ?>img/relume.png" alt="Relume">
    </div>
</div>
<div class="tmonial-container">
    <div class="tmonial_title">
        <div class="tmn_title">What Clients Say</div>
        <div class="tmn_text">Read testimonials from our satisfied clients</div>
    </div>
    <div class="tmonial_content">
        <div class="tmonial_col">
            <div class="col_stars">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
            </div>
            <div class="tmonial_text">
                Our experience working with this agency was exceptional. They delivered outstanding results and exceeded our expectations.
            </div>
            <div class="tmonial_avatar">
                <img class="user_img" src="<? echo $template_path; ?>img/2100d987b5946aa1df33cf0f6c34a418.jpg" alt="">
                <div class="avatar_content">
                    <div class="user_name">Robert Fox</div>
                    <div class="ceo">CEO, MedAgent</div>
                </div>
                <div class="border_right"></div>
                <!--<hr>-->
                <img class="service_logo" src="<? echo $template_path; ?>img/fdad47e7022212b53b52736e712f11c3.png" alt="">
            </div>
        </div>
        <div class="tmonial_col">
            <div class="col_stars">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
            </div>
            <div class="tmonial_text">
                Our experience working with this agency was exceptional. They delivered outstanding results and exceeded our expectations.
            </div>
            <div class="tmonial_avatar">
                <img class="user_img" src="<? echo $template_path; ?>img/57864882977896901a88165d246ef753.jpg" alt="">
                <div class="avatar_content">
                    <div class="user_name">Samantha Fox</div>
                    <div class="ceo">CEO, SAM ERTEKS</div>
                </div>
                <div class="border_right"></div>
                <!--<hr>-->
                <img class="service_logo" src="<? echo $template_path; ?>img/eaae2da8d1c5a2bff6af24706f2678df.png" alt="">
            </div>
        </div>
        <div class="tmonial_col">
            <div class="col_stars">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
                <img class="little_star" src="<? echo $template_path; ?>img/vector_star.png" alt="Little star">
            </div>
            <div class="tmonial_text">
                Our experience working with this agency was exceptional. They delivered outstanding results and exceeded our expectations.
            </div>
            <div class="tmonial_avatar">
                <img class="user_img" src="<? echo $template_path; ?>img/57864882977896901a88165d246ef753.jpg" alt="">
                <div class="avatar_content">
                    <div class="user_name">Samantha Fox</div>
                    <div class="ceo">CEO, SAM ERTEKS</div>
                </div>
                <div class="border_right"></div>
                <!--<hr>-->
                <img class="service_logo" src="<? echo $template_path; ?>img/eaae2da8d1c5a2bff6af24706f2678df.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="svcon_container">
<? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '223']) as $v): ?>
    <div class="contact_card">
        <div class="contact_title">
            <div class="ideas_title"><?=$v['title']?></div>
            <div class="ideas_text"><?=$v['text']?></div>
        </div>
        <div class="contact_action">
            <a class="contact_btn" href="#"><?=$v['button1']?></a>
            <a class="call_btn" href="#"><?=$v['button2']?></a>
        </div>
    </div>
<? endforeach; ?>
</div>