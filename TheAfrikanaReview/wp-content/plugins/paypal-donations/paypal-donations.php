<?php
/**
 * Created by PhpStorm.
 * User: Addy
 * Description: Simple PayPal donation plugin.
 * Version: 1.0
 */

// Adds  [donate] shortcode
add_shortcode('donate', function() {
    $donate_options = get_option('donate_plugin_options');

    // Deafult Button Image
    $url = 'https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif';

    // Checks Which Image To Use
    switch ($donate_options['button']) {

        case 'small':
            $url = 'https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif';
            break;
        case 'medium':
            $url = 'https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif';
            break;
        case 'large':
            $url = 'https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif';
            break;

    }

    return '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <div class="paypal-donations">
                    <input type="hidden" name="cmd" value="_donations">
                    <input type="hidden" name="business" value="'.$donate_options['paypal_user_id'].'">
                    <input type="hidden" name="rm" value="0">
                    <input type="hidden" name="currency_code" value="'.$donate_options['currency'].'">
                    <input type="image" src="'.$url.'" name="submit" alt="PayPal - The safer, easier way to pay online.">
                    <img alt="" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </div>
            </form>';
});



function donate_plugin_cb() {

    // Optional Callback
}



// Generate INPUT Field form form settings [EMAIL]
function paypal_user_id_html() {
    $donate_options = get_option('donate_plugin_options');
    echo "<input name='donate_plugin_options[paypal_user_id]' type='email' value='{$donate_options['paypal_user_id']}'/>";
}



// Generate INPUT Field form form settings [RADIO]
function paypal_donation_button_html() {
    $donate_options = get_option('donate_plugin_options');
    ?>
    <p>
        <label>
            <input type='radio' name='donate_plugin_options[button]' value='small' <?php if($donate_options['button'] == 'small') { echo 'checked'; }  ?>>
            <img src='https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif' alt='small' style='vertical-align: middle;margin-left: 15px;'>
        </label>
    </p>

    <p>
        <label>
            <input type='radio' name='donate_plugin_options[button]' value='medium' <?php if($donate_options['button'] == 'medium') { echo 'checked'; } ?>>
            <img src='https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif' alt='medium' style='vertical-align: middle;margin-left: 15px;'>
        </label>
    </p>

    <p>
        <label>
            <input type='radio' name='donate_plugin_options[button]' value='large' <?php if($donate_options['button'] == 'large') { echo 'checked'; } ?>>
            <img src='https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif' alt='large' style='vertical-align: middle;margin-left: 15px;'></br>
        </label>
    </p>

<?php
}



// Generate INPUT Field form form settings [DROPDOWN]
function paypal_currency_html() {
    $donate_options = get_option('donate_plugin_options');

    $currency = array(
        'AUD' => 'Australian Dollars (A $)',
        'BRL' => 'Brazilian Real',
        'CAD' => 'Canadian Dollars (C $)',
        'CZK' => 'Czech Koruna',
        'DKK' => 'Danish Krone',
        'EUR' => 'Euros (€)',
        'HKD' => 'Hong Kong Dollar ($)',
        'HUF' => 'Hungarian Forint',
        'ILS' => 'Israeli New Shekel',
        'JPY' => 'Yen (¥)',
        'MYR' => 'Malaysian Ringgit',
        'MXN' => 'Mexican Peso',
        'NOK' => 'Norwegian Krone',
        'NZD' => 'New Zealand Dollar ($)',
        'PHP' => 'Philippine Peso',
        'PLN' => 'Polish Zloty',
        'GBP' => 'Pounds Sterling (£)',
        'RUB' => 'Russian Ruble',
        'SGD' => 'Singapore Dollar ($)',
        'SEK' => 'Swedish Krona',
        'CHF' => 'Swiss Franc',
        'TWD' => 'Taiwan New Dollar',
        'THB' => 'Thai Baht',
        'TRY' => 'Turkish Lira',
        'USD' => 'U.S. Dollars ($)',
    );
    ?>
    <select id='currency_code' name='donate_plugin_options[currency]'>
        <?php
        foreach($currency as $code => $label) :
            if( $code == $donate_options['currency'] ) { $selected = "selected='selected'"; } else { $selected = ''; }
            echo "<option {$selected} value='{$code}'>{$label}</option>";
        endforeach;
        ?>
    </select>
<?php
}



// Register All Settings And And Setting Fields as Used in wordpress
function register_settings_and_fields() {

    // $option_group, $option_name, $sanitize_callback
    register_setting('donate_plugin_options','donate_plugin_options');

    // $id, $title, $callback, $page
    add_settings_section('donate_plugin_main_section', 'Main Settings', 'donate_plugin_cb', __FILE__);

    // $id, $title, $callback, $page, $section, $args
    add_settings_field('paypal_user_id', 'PayPal ID: ', 'paypal_user_id_html', __FILE__, 'donate_plugin_main_section');

    // $id, $title, $callback, $page, $section, $args
    add_settings_field('button', 'Select Button: ', 'paypal_donation_button_html', __FILE__, 'donate_plugin_main_section');

    // $id, $title, $callback, $page, $section, $args
    add_settings_field('currency', 'Currency: ', 'paypal_currency_html', __FILE__, 'donate_plugin_main_section');
}

add_action('admin_init', 'register_settings_and_fields');



// Generate HTML of main options page
function options_page_html() {

    ?>
    <div class="wrap">
        <h2>Plugin Options</h2>
        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php
            // $option_group
            settings_fields( 'donate_plugin_options' );

            // $page
            do_settings_sections( __FILE__ );
            ?>
            <p class="submit">
                <input type="submit" class="button-primary" name="submit" value="Save Changes">
            </p>
        </form>
    </div>
<?php
}



// Admin Menu Action Hook
function options_init() {

    // page_title,  menu_title, capability, menu_slug, function
    add_options_page('Donate Plugin Options', 'Donate Plugin Options', 'administrator', __FILE__, 'options_page_html');
}
add_action('admin_menu', 'options_init');



// Activation Hook. Check if settings exists, if not register defaults.
function donate_activate() {
    $defaults = array(
        'paypal_user_id' => get_option('admin_email'),
        'button' => 'small',
        'currency' => 'USD'
    );

    if(get_option('donate_plugin_options')) return;

    add_option( 'donate_plugin_options', $defaults );
}

register_activation_hook( __FILE__, 'donate_activate' );