<?php  



/*



Plugin Name: Voucher Tec - LGPD Newsletters



Plugin URI: https://github.com/TravelTec/lgpdnewsletters



GitHub Plugin URI: https://github.com/TravelTec/lgpdnewsletters



Description: Voucher Tec - LGPD Newsletters é um plugin para registro da permissão do usuário para continuar recebendo mensagens enviadas pelo e-mail marketing.


 
Version: 1.0.0



Author: Travel Tec



Author URI: https://traveltec.com.br



License: GPLv2



*/







/*



 * Plugin Update Checker



 * 



 * Note: If you're using the Composer autoloader, you don't need to explicitly require the library.



 * @link https://github.com/YahnisElsts/plugin-update-checker



 */



require_once 'plugin-update-checker-4.10/plugin-update-checker.php'; 

 
require_once plugin_dir_path(__FILE__) . 'includes/lgpd-functions.php';








/*



 * Plugin Update Checker Setting



 *



 * @see https://github.com/YahnisElsts/plugin-update-checker for more details.



 */



function lgpd_newsletters_update_checker_setting() {



    if ( ! is_admin() || ! class_exists( 'Puc_v4_Factory' ) ) { 

        return; 

    } 



    $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker( 

        'https://github.com/TravelTec/lgpdnewsletters', 

        __FILE__, 

        'lgpdnewsletters' 

    ); 



    // (Opcional) Set the branch that contains the stable release. 

    $myUpdateChecker->setBranch('main');



}







add_action( 'admin_init', 'lgpd_newsletters_update_checker_setting' );







 