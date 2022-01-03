<?php
/*
Plugin Name: افزونه fixer فارکس - سانی وب
Plugin URI:  https://api.sunnyweb.ir
Description: نمایش طلاعات بازار مالی فارکس به همراه قیمت ریال و قیمت دلار همزمان بدون کسری از ثانیه
Version:     1.1.0
Author:      تیم برنامه نویسی سانی وب
Author URI:  http://sunnyweb.ir
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

//add menu
add_action('admin_menu','SUN_FIXER_API_MENU');

function SUN_FIXER_API_MENU(){
    //create new top-level menu
    add_menu_page('ficxer','وب سریس بازار مالی فارکس','administrator', __FILE__, 'fixer_plugin_settings_page', plugins_url('/images/logo.png', __FILE__) );
    //cal register setting fann_get_cascade_activation_function
    add_action('admin_init','SUN_FIXER_API');
}
//end add menu

//create cols in db
function SUN_FIXER_API(){
    register_setting('SUN_API_','api');
    register_setting('SUN_API_','pairs');
}
//end create cols in db

//select cols in db
$api_e = esc_attr(get_option('api'));
$pairs = esc_attr(get_option('pairs'));
//end select cols in db

function SUN_FIXER_API_RES($atts){
    global $api_e;
    global $pairs;
    $json = json_decode(file_get_contents('https://api.sunnyweb.ir/api/fixer_money/'.$api_e),true);
    $array = explode(',',$pairs);
    $fixer = $json['data']['data'];
    echo '
        <table>
        <tr>
        <th>جفت ارز</th>
        <th>نام فارسی</th>
        <th>زمان</th>
        <th>تاریخ</th>
        <th>درصد تغییر</th>
        <th>ask</th>
        </tr>
    ';
    foreach($array as $item):
        foreach ($fixer as $i){
            if(strtoupper($item) == strtoupper($i['name'])){
                $pairName = $i['name'];
                $persianName = isset($i['persianName'])?$i['persianName']:'';
                $time = isset($i['time'])?$i['time']:'';
                $date = isset($i['jDate'])?substr_replace($i['jDate'],'/',4,0):'';
                $jDate = !empty($date)?substr_replace($date,'/',7,0):'';
                $percent = isset($i['percentChange'])?$i['percentChange']:'';
                $color = ($percent >= 0)?'#00A077':'#E74C3C';
                $ask = isset($i['ask'])?$i['ask']:'';

                echo'
                <tr style="text-align:center">
                <td>'.$pairName.'</td>
                <td>'.$persianName.'</td>
                <td>'.$time.'</td>
                <td>'.$jDate.'</td>
                <td style="color:'.$color.'" dir="ltr">'.$percent.'</td>
                <td>'.$ask.'</td>
                </tr>
                ';
            }
        }

    endforeach;
    echo '</table>';
}

//SHORT CODE
add_shortcode('SUN_FIXER','SUN_FIXER_API_RES');
//END SHORT CODE

function fixer_plugin_settings_page(){
    ?>
    
    <div class="wrap">
        <h1>نمایش جدول اطلاعات ارز سانی وب</h1>
        <p>برای تهیه توکن  سانی وب می توانید به <a href="https://api.sunnyweb.ir" target="_blank">اینجا</a> مراجعه و اشراک خود را تهیه نمایید</p>
        <form method="post" action="options.php">
            <?php settings_fields( 'SUN_API_' ); ?>
            <?php do_settings_sections( 'SUN_API_' ); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">توکن کلید وب سرویس</th>
                    <td><input type="text" name="api" style="width: 30%;" value="<?php echo esc_attr(get_option('api')); ?>"  /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">نام اختصاری جفت ارز (انگلیسی)</th>
                    <td><input type="text" name="pairs" style="width: 100%;" value="<?php echo esc_attr( get_option('pairs') ); ?>" placeholder="BTCUSD,EURUSD,..." /></td>
                </tr>
            </table>
            <h2>راهنما</h2>
            <p> جهت نمایش جدول از شورت کد [SUN_FIXER] استفاده نمایید</p>
            <?php submit_button(); ?>
        </form>
    </div>
<?php }?>
