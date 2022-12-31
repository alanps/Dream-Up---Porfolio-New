<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});


/**
 * Válida recaptcha com key do google
 *
 * @return string
 */
// validate form request (form with ID 60 only)
add_filter(
    'hf_validate_form',
    function( $error_code, $form, $data ) {
        if(isset($_POST['_hf_form_id'])){
            if($_POST['_hf_form_id'] == 156){

                if(isset($_POST['action'])){
                    if ($_POST['action'] == "contato") {
                        $token  = $_POST['token'];
                        $action = $_POST['action'];

                        $curlData = array(
                            'secret' => '6Le5Gr8jAAAAAPs_mZaGxGoraYL1re3UynVf8C-1',
                            'response' => $token
                        );

                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
                        curl_setopt($ch, CURLOPT_POST, 1);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($curlData));
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $curlResponse = curl_exec($ch);

                        $captchaResponse = json_decode($curlResponse, true);

                        if ($captchaResponse['success'] == '1' && $captchaResponse['action'] == $action && $captchaResponse['score'] >= 0.5 && $captchaResponse['hostname'] == $_SERVER['SERVER_NAME']) {
                            
                        } else {
                            $error_code = 'wrong_answer';
                            return $error_code;
                        }
                    }
                }

            }
        }

        return $error_code;
    },
    10,
    3
);

