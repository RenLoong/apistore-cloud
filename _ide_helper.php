<?php

namespace YdOpen\ApiStore\facade {
    /**
     * @see \YdOpen\ApiStore\Http
     * @method \YdOpen\ApiStore\Http setToken(string $token)
     * @package YdOpen\ApiStore
     */
    class Http
    {
        /**
         * 验证码相关接口
         * @access public
         * @return \YdOpen\ApiStore\Http
         */
        public static function setToken(string $token)
        {
            /** @var \YdOpen\ApiStore\Http $instance */
            return $instance;
        }
    }
}
