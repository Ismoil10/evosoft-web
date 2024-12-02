<div class="project_rec">
    <div class="cases_breadcrumb">
        <div class="breadcrumbs">
            <a href="/en/cases">Cases<i class="fa-solid fa-angles-right"></i></a>
        </div>
        <div class="breadcrumbs">
            <a href="/en/cases/1">Projects<i class="fa-solid fa-angles-right"></i></a>
        </div>
    </div>
</div>
<div class="project_main">
    <div class="project_imgs">
        <img src="<? echo $template_path; ?>img/fdad47e7022212b53b52736e712f11c3.png" alt="">
        <img src="<? echo $template_path; ?>img/7ff09de2b7d8516776b34069e88bc9f9.png" alt="">
    </div>
    <div class="medagent_sys">
        <? foreach (view::CONTENT("all_active", ['IBLOCK_ID' => '235']) as $v): ?>
            <div class="project_name"><?=$v["title"]?></div>
            <div class="selection_buttons">
                <a href="<?=$v["btn1_url"]?>" class="web_btn"><?= $v["button1"]?></a>
                <a href="<?=$v["btn2_url"]?>" class="web_btn"><?= $v["button2"]?></a>
                <div class="selection_date">
                    <?= $v["date"] ?>
                </div>
            </div>
            <div class="med_system">
                <div class="project_text">
                    <?=$v["text"]?>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>
<div class="pj_data_container">
    <div class="pj_functions">
        <div class="pj_content">
            <h4>Content</h4>
            <ul>
                <li onclick="getContext()">Context</li>
                <li onclick="getProblem()">Problem</li>
                <li onclick="getFunct()">Functionality</li>
                <li onclick="getLine()">Bottom line</li>
            </ul>
        </div>
        <div class="pj_border"></div>
        <div id="pjAdv" class="pj_advantage">
            <div class="business_ach">
                <h4>Our advantage</h4>
                <h2>Results and Advantages:</h2>
                <h4>The administrative panel for MedAgent was developed in response to the challenges that the company faced in its activities.
                    The need for more efficient management of medical processes, improved coordination of doctors and optimization of
                    financial accounting was the main catalyst for the creation of this project.
                </h4>
            </div>
            <div class="business_ach">
                <h2>Business achievements:</h2>
                <h4>Improved Efficiency: The implementation of the administrative panel led to a noticeable
                    increase in the efficiency of the company's internal processes, speeding up patient appointments,
                    improving physician coordination and reducing administrative task time.<br><br> Growth of the Client Base:
                    Thanks to improved quality of service and more accurate management of medical data,
                    MedAgent has attracted new clients and strengthened its reputation.
                </h4>
            </div>
        </div>
        <div id="solution" class="pj_advantage" style="display: none;">
            <div class="business_ach">
                <h4>Our advantage</h4>
                <h2>Problem: </h2>
                <h4>
                    A medical institution is faced with insufficient efficiency in managing medical information,
                    which can lead to diagnostic errors, data loss and the inability to provide timely medical care.
                </h4>
            </div>
            <div class="business_ach">
                <h2>Our solution:</h2>
                <h4>Implementing information technology (IT)
                    to manage health information can significantly improve the
                    efficiency of a healthcare facility. Below are the key steps to resolve this issue
                    <br><br><b>Implementation of Electronic Medical Record (EMR):</b>
                    Implementation of an electronic medical record system will
                    allow healthcare professionals to easily access patients'
                    medical history, share data, and record patient visit information.
                </h4>
            </div>
            <div class="business_img">
                <img src="<? echo $template_path; ?>img/de9a365fc493de487851f030503db978.png" alt="">
            </div>
        </div>
        <div id="patient" class="pj_advantage" style="display: none;">
            <div class="business_ach">
                <h4>Our advantage</h4>
                <h4>
                    <b>Patient Management: </b>The implementation of a patient data management system has
                    significantly improved the personalization of medical care,
                    as well as improved the interaction of doctors with each patient.
                </h4>
                <h4>
                    <b>Scheduling and Appointments:</b> Streamlining appointment scheduling
                    and introducing efficient appointments helped reduce wait times,
                    increase accuracy of appointments, and improve overall
                    coordination of the medical team.
                </h4>
                <h4>
                    <b>Financial Accounting:</b> The implementation of the financial
                    accounting module has improved the transparency of financial transactions,
                    reduced the risk of errors and simplified the invoicing process.
                </h4>
            </div>
            <div class="business_ach">
                <h2>Business achievements:</h2>
                <h4>
                    <b>Increased Profits:</b> Optimization of financial accounting led
                    to more accurate invoicing, improved relationships with
                    partners and, as a result, increased company profits.
                </h4>
            </div>
        </div>
        <div id="pjRes" class="pj_advantage" style="display: none;">
            <div class="res_and_adv">
                <h4>Our advantage</h4>
                <h2>Results and Advantages:</h2>
                <h4>The administrative panel for MedAgent was developed in response to the challenges that the company faced in its activities.
                    The need for more efficient management of medical processes, improved coordination of doctors and optimization of
                    financial accounting was the main catalyst for the creation of this project.
                </h4>
            </div>
        </div>
    </div>
    <div class="sv_contact_card">
        <div class="contact_title">
            <div class="ideas_title">Do you need assistance with your problems? Let us help you ...</div>
            <div class="ideas_text">We create innovative web applications and websites for businesses</div>
        </div>
        <div class="sv_contact_action">
            <a class="contact_btn" href="#">Contact us</a>
        </div>
    </div>
</div>

<script>
    const sections = ['#pjAdv', '#solution', '#patient', '#pjRes'];

    function showSection(sectionId) {
        sections.forEach(id => {
            $(id).css('display', id === sectionId ? 'grid' : 'none');
        });
    }

    function getContext() {
        showSection('#pjAdv');
    }

    function getProblem() {
        showSection('#solution');
    }

    function getFunct() {
        showSection('#patient');
    }

    function getLine() {
        showSection('#pjRes');
    }
</script>