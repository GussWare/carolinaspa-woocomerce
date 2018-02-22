<?php

if (!function_exists('carolinaspa_mxn')) {

    add_filter('woocommerce_currency_symbol', 'carolinaspa_mxn', 10, 2);

    /**
     * Cambiar moneda a pesos mexicanos (MXN)
     *
     * @param string $simbolo
     * @param string $moneda
     * @return string Simbolo de la moneda con el formato MXN
     */
    function carolinaspa_mxn($simbolo, $moneada)
    {
        $simbolo = 'MXN $';
        return $simbolo;
    }
}

if (!function_exists('carolinaspa_creditos')) {

    add_action('init', 'carolinaspa_creditos');

    /**
     * Modificación al template de StoreFront para cambiar los creditos
     *
     * @return void
     */
    function carolinaspa_creditos()
    {
        remove_action('storefront_footer', 'storefront_credit', 20);
        add_action('storefront_after_footer', 'carolinaspa_nuevo_footer', 20);
    }
}

if (!function_exists('carolinaspa_nuevo_footer')) {
    /**
     * Modifica el footer
     *
     * @return void
     */
    function carolinaspa_nuevo_footer()
    {
        ?>
    <div class="reservados">
        Derechos Reservados &copy;  <?php get_bloginfo('name')?> <?php get_the_date('Y')?>
    </div>
<?php
}
}

if (!function_exists('carolinaspa_cupon_banner')) {

    add_action('homepage', 'carolinaspa_cupon_banner', 5);

    /**
     * Funcion que se encarga de poner un cupon como banner en la pagina principal
     * de la tienda
     *
     * @return void
     */
    function carolinaspa_cupon_banner()
    {
        ?>
        <div class="cupon-destacado">
            <img src="<?php get_stylesheet_uri();?>/assets/img/cupon.jpg" />
        </dov>
<?php
}
}