<?php get_header(); ?> 
<main class="section_about"> 
    <?php if( have_posts() ): ?> 
        <?php while( have_posts() ):?>
            <?php the_post(); ?> 
            <section class="page-about_header"> 
                <h3><?php the_title(); ?></h3> 
                <?php get_template_part( 'template-parts/parts','scrolldown' ); ?> 
            </section> 
            <section class="page-about_main"> 
                <div class="parallax-bg parallax-bg1"> 
                    <div class="parallax_wrapper parallax_wrapper1 h4-content_gap scroll-fade-up"> 
                        <h4 class="scroll-fade-up">PROFILE</h4> 
                        <?php 
                        $my_age=floor((date('Ymd') - 19920404) / 10000 ).'歳'; 
                        $profile_th_td_arr=[ 
                            [ 'th'=>'名前', 'td'=>'伊藤 琢真'], 
                            [ 'th'=>'性別', 'td'=>'男'], 
                            [ 'th'=>'生年月日', 'td'=>'1992年4月4日'], 
                            [ 'th'=>'年齢', 'td'=>$my_age], 
                            [ 'th'=>'現住所', 'td'=>'千葉県船橋市'], 
                            [ 'th'=>'趣味', 'td'=>'散歩・料理・ゲーム'], 
                            [ 'th'=>'好きな言葉', 'td'=>'<div><p>私たちは、ホモ・ルーデンス（遊ぶ人）</p><br><small>（KOJIMA PRODUCTIONS様 Webページより）</small></div>']
                        ]; 
                        $profile_th_td_arr_count=count($profile_th_td_arr); 
                        ?> 
                        <div class="parallax_contents parallax_contents1 scroll-fade-up"> 
                            <table class="table_profile"> 
                                <tbody> 
                                    <?php 
                                    for ($i=0; $i < $profile_th_td_arr_count; $i++):
                                        echo "<tr><th class="."profile_th".">{$profile_th_td_arr[$i]['th']}</th><td class="."profile_td".">{$profile_th_td_arr[$i]['td']}</td></tr>";?>
                                    <?php endfor;?> 
                                </tbody> 
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="parallax-bg parallax-bg2"> 
                <div class="parallax_wrapper parallax_wrapper2 scroll-fade-up"> 
                    <div class="chart_wrapper h4-content_gap scroll-fade-in"> 
                        <h4 class="scroll-fade-up">SKILL</h4> 
                        <canvas id="myRadarChart" width="350" height="350"></canvas> 
                        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/skillChart.js"></script> 
                    </div>
                    <div class="usedTool_wrapper h4-content_gap"> 
                        <h4 class="scroll-fade-up">TOOLS</h4> 
                        <div class="parallax_contents parallax_contents2 scroll-fade-up"> 
                            <table class="table_usedTool"> 
                                <tbody> 
                                    <?php 
                                    $usedTool=[ 
                                        [ 'icon'=>'zoom', 'alt'=>'Zoom_icon', 'paragraph'=>'Zoom',], 
                                        [ 'icon'=>'teams', 'alt'=>'Microsoft_Teams_icon', 'paragraph'=>'Microsoft Teams',], 
                                        [ 'icon'=>'dreamweaver', 'alt'=>'Dreamweaver_icon', 'paragraph'=>'Dreamweaver',], 
                                        [ 'icon'=>'vscode', 'alt'=>'Visual_Studio_Code_icon', 'paragraph'=>'Visual Studio Code',], 
                                        [ 'icon'=>'xd', 'alt'=>'Adobe_XD_icon', 'paragraph'=>'Adobe XD',], 
                                        [ 'icon'=>'figma', 'alt'=>'figma_icon', 'paragraph'=>'figma',], 
                                        [ 'icon'=>'slack', 'alt'=>'slack_icon', 'paragraph'=>'slack',], 
                                        [ 'icon'=>'trello', 'alt'=>'Trello_icon', 'paragraph'=>'Trello',], 
                                        [ 'icon'=>'sass', 'alt'=>'Sass_icon', 'paragraph'=>'Sass',]
                                    ]; 
                                    $usedTool_count=count($usedTool); 
                                    ?>
                                    <?php
                                    for ($i=0; $i < $usedTool_count; $i++):
                                        echo "<tr><th><img class="."usedTool_icon"." src=".esc_url( get_template_directory_uri() )."/assets/img/{$usedTool[$i]['icon']}_icon.webp width="."50"." height="."50"." alt="."{$usedTool[$i]['alt']}"."></th><td>{$usedTool[$i]['paragraph']}</td></tr>";
                                    ?>
                                    <?php endfor;?> 
                                </tbody> 
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="parallax-bg parallax-bg3"> 
                <div class="parallax_wrapper parallax_wrapper3 wrapper_gap scroll-fade-up"> 
                    <div class="parallax_wrapper3_container h4-content_gap"> 
                        <h4 class="scroll-fade-up">CAREER</h4> 
                        <div class="parallax_contents parallax_contents3 scroll-fade-up"> 
                            <p> 高校（普通科）卒業後、4年制大学（経済学部）へ進学するが、<br class="br-sp"> 2年次で中退。 </p>
                            <div class="career_item"> 
                                <div class="career_item_title"> 
                                    <time>2013.12～2017.3</time>
                                    <h5>介護士（有料老人ホーム常駐）</h5> 
                                </div>
                                <p> 施設常駐介護士として勤務。<br>在職中に介護職員初任者研修（旧ヘルパー２級）修得。 </p>
                            </div>
                            <div class="career_item"> 
                                <div class="career_item_title"> 
                                    <time>2017.6～2020.2</time> 
                                    <h5>施工管理技士の派遣技術者</h5> 
                                </div>
                                <p> 建設業の施工管理技術者として勤務。従事した現場は13か所。 </p>
                            </div>
                            <div class="career_item"> 
                                <div class="career_item_title"> 
                                    <time>2020.3～2021.3</time> 
                                    <h5>外壁パネルの施工管理補助</h5> 
                                </div>
                                <p> 施工管理の補助として、いくつかの現場で施工検査、材料発注などの段取りに従事。 </p>
                            </div>
                        </div>
                    </div>
                    <div class="parallax_wrapper3_container h4-content_gap"> 
                        <h4 class="scroll-fade-up">WHY DESIGNER</h4> 
                        <div class="parallax_contents parallax_contents4 scroll-fade-up"> 
                            <p>休職中に自分を見つめ直して見たところ、デザインやIT・Web業界の制作について、興味が有ることを自覚した。幼いころからPCを触ったことがあり、現在でも得意なため、制作と組み合わせられないかと思い、Webデザイナーを目指すようになりました。</p>
                        </div>
                    </div>
                    <div class="parallax_wrapper3_container h4-content_gap scroll-fade-up"> 
                        <h4 class="scroll-fade-up">HANDICAP</h4> 
                        <div class="parallax_contents parallax_contents5 scroll-fade-up"> 
                            <h5>ADHD（多動型）</h5> 
                            <p>私は、あらゆる行動においては実行力がありますが、短期記憶が苦手です。<br>また、話の進み具合によっては追い付かず、聞き取れないことがあります。そのため、忘れ物が多く、少し前の記憶が飛んでしまうことがありますので、自分で聞いた話を文面化するようにし、都度確認するようにしています。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <?php endwhile; ?> 
    <?php endif; ?> 
</main> 

<?php get_footer(); ?>