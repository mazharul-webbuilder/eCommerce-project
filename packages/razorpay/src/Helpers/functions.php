<?php

if (!function_exists('get_msg_form_razorpay_status_code')) {
    /**
     * get_msg_form_razorpay_status_code
     *
     * @param  int $status
     * @return str
     */
    function get_msg_form_razorpay_status_code($status)
    {
        switch ($status) {
            case 10014:
                return trans("razorpay::lang.insufficient_fund");
            case 10023:
                return trans("razorpay::lang.pin_code_invalid");
            case 20001:
                return trans("razorpay::lang.merchant_not_found");
            case 30046:
                return trans("razorpay::lang.otp_not_found");
            case 30047:
                return trans("razorpay::lang.otp_mismatch");
            case 30048:
                return trans("razorpay::lang.otp_expired");
            case 30049:
                return trans("razorpay::lang.otp_not_found");
            case 50014:
                return trans("razorpay::lang.customer_not_found");
            case 50055:
                return trans("razorpay::lang.purchase_limit_exceeded");
            case 30053:
                return trans("razorpay::lang.customer_acc_expired");
        }

        return trans("razorpay::lang.bad_request");
    }
}
