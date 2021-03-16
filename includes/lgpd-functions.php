<?php 



/*

 * Add my new menu to the Admin Control Panel

 */



function funcaoParaShortcode()
{

    $var_email = $_SERVER['REQUEST_URI'];
    $email = '';
    if (strpos($var_email, "email=")) {
        $dados_email = explode("=", $var_email);
        $email = $dados_email[1];
    } 
    return '<table class="body-wrap" style="border: 1px solid transparent;background-color: transparent;">
    <tr id="message" style="display: none;">
        <td style="border: 1px solid transparent;"></td>
        <td class="container-table" width="600" style="border: 1px solid transparent;"> 
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0" style="border: 1px solid transparent;background-color: transparent;">
                    <tr>
                        <td class="alert alert-good">
                            <strong>CONFIRMAÇÃO DE CADASTRO</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="content-wrap">
                            <table width="100%" cellpadding="0" cellspacing="0" style="border: 1px solid transparent;background-color: transparent;">
                                <tr>
                                    <td class="content-block" style="border: 1px solid transparent;background-color: transparent;">
                                        <strong style="color: #aaaaaa;">Seu e-mail foi validado com sucesso.</strong>
                                        <br />
                                        <br />
                                        Lembramos que a qualquer momento você pode utilizar nossa ferramenta para sair de nossa lista, através de link apropriado constante de nossos e-mails.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block" style="border: 1px solid transparent;background-color: transparent;">
                                        Você será redirecionado para a página principal em instantes.
                                    </td>
                                </tr> 
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td> 
    </tr>
    <tr id="loader" style="display: block;">
        <td style="    border: 1px solid transparent;"></td>
        <td class="container" width="600" style="text-align: center;    border: 1px solid transparent;">
            <br />
            <br />
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <img src="http://api.traveltec.com.br/loader.gif" style="height: 130px; padding-left: 20px; padding-right: 20px;" />
                </table>
            </div>
        </td>
    </tr>
</table>

<input type="hidden" id="token" value="MTYwMjgxO3pwb2ZlUUVDVjJNYzJ4WG9DcHVSNTc5OGZ5UkxhckZjczloelhZa255Mm9y" name="" />
<input type="hidden" id="email" value="'.$email.'" name="" />';
}
add_shortcode('LGPD_NEWSLETTERS', 'funcaoParaShortcode');  

function lgpdnewsletters_recom_css(){
        wp_enqueue_style('lgpd-newsletters-css', plugin_dir_url(__FILE__).'assets/css/style.css');  

        wp_enqueue_script('lgpd-newsletters-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
        wp_enqueue_script('lgpd-newsletters-sweetalert', 'https://unpkg.com/sweetalert/dist/sweetalert.min.js'); 
        wp_enqueue_script('lgpd-newsletters-submit', plugin_dir_url(__FILE__).'assets/js/scripts_site.js'); 
    }
add_action('wp_head' , 'lgpdnewsletters_recom_css' ); 

function scripts_lgpd_js() { 
    wp_enqueue_script( 'jquery', plugins_url( '/assets/js/jquery-3.1.1.min.js', __FILE__ ));
    wp_enqueue_script( 'scripts-lgpd-js', plugins_url( '/assets/js/scripts.js', __FILE__ ));
}

add_action('admin_init','scripts_lgpd_js');