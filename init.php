<?php

function joapp_api_template_dark_init() {
    if (!is_admin()) {
        wp_die();
    }

    $plugin_match = FALSE;
    if (!class_exists("JOAPP_API") || JOAPP_API_VERSION < 400) {
        ?>
        <br>
        <div class="notice inline notice-error notice-alt">
            <p><b>خطا: افزونه JOAPP API نصب نیست و یا نسخه ای کمتر از نسخه 4.0.0 دارد. لطفا JoApp API را به روز رسانی نمایید.</b></p>
        </div>
        <?php
        return;
    }

    if (isset($_POST['joapp_api_payment_dark_color_txt'])) {
        update_option("joapp_api_payment_dark_color_txt", $_POST['joapp_api_payment_dark_color_txt'], 'yes');
        update_option("joapp_api_payment_dark_color_bg", $_POST['joapp_api_payment_dark_color_bg'], 'yes');
        update_option("joapp_api_payment_dark_color_btn", $_POST['joapp_api_payment_dark_color_btn'], 'yes');
        ?>
        <div class="notice inline notice-info notice-alt">
            <p>با موفقیت ذخیره شد</p>
        </div>
        <?php
    }
    ?>
    <div class="wrap">
        <h3>تنظیمات قالب تیره JoApp API</h3>
        <div>
            <script src="<?php echo WP_PLUGIN_URL . '/joapp-api-payment-dark/assets/jscolor.min.js' ?>"></script>
            <form method="post">
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">انتخاب رنگ نوشته ها</th>
                        <td>
                            <?php
                            $joapp_api_payment_dark_color_txt = get_option("joapp_api_payment_dark_color_txt", "FFFFFF");
                            $joapp_api_payment_dark_color_bg = get_option("joapp_api_payment_dark_color_bg", "000000");
                            $joapp_api_payment_dark_color_btn = get_option("joapp_api_payment_dark_color_btn", "FF0055");
                            ?>
                            <input type="text" name='joapp_api_payment_dark_color_txt' readonly="readonly" class="jscolor" value="<?php echo $joapp_api_payment_dark_color_txt ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">انتخاب رنگ پس زمینه ها</th>
                        <td>
                            <input type="text" name='joapp_api_payment_dark_color_bg' readonly="readonly" class="jscolor" value="<?php echo $joapp_api_payment_dark_color_bg ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">انتخاب رنگ کلیدها</th>
                        <td>
                            <input type="text" name='joapp_api_payment_dark_color_btn' readonly="readonly" class="jscolor" value="<?php echo $joapp_api_payment_dark_color_btn ?>">
                        </td>
                    </tr>
                </table>
                <hr/>
                <input type="submit" class="button button-primary" value="ذخیره" />
            </form>
        </div>
    </div>
    <?php
}
?>