<?php

function xpro_register_settings() {
    register_setting('default', 'facebook_url');
    register_setting('default', 'twitter_url');
    register_setting('default', 'google_plus_url');
    register_setting('default', 'pinterest_url');
    register_setting('default', 'linkedin_url');
    register_setting('default', 'github_url');
    register_setting('default', 'home_page_slider');
    register_setting('default', 'typekit');
    register_setting('default', 'track_id');

}

add_action( 'admin_init', 'xpro_register_settings');

function xpro_theme_option_menu() {
    add_theme_page('X Pro Theme Options Page', 'Theme Options', 'manage_options', 'xpro-theme-options',
        'xpro_theme_option_page');
}

add_action('admin_menu', 'xpro_theme_option_menu');

function xpro_theme_option_page() {
    if( !current_user_can('manage_options')) {
        wp_die( __('Umm, what are you doing?', 'xpro'));
    }
    ?>
    <div class="wrap">
        <h2>X Pro Theme Options</h2>
        <form method="post" action="options.php">
            <h3>Social Media URLs</h3>
            <?php settings_fields('default'); ?>
            <table class="form-table">
                <tbody>
                <tr>
                    <th scope="row">
                        <label for="facebook_url">Facebook URL</label>
                    </th>
                    <td>
                        <input name="facebook_url" type="text" value="<?=get_option('facebook_url')?>" class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="google_plus_url">Google Plus URL</label>
                    </th>
                    <td>
                        <input name="google_plus_url" type="text" value="<?=get_option('google_plus_url')?>" class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="twitter_url">Twitter URL</label>
                    </th>
                    <td>
                        <input name="twitter_url" type="text" value="<?=get_option('twitter_url')?>" class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="pinterest_url">Pinterest URL</label>
                    </th>
                    <td>
                        <input name="pinterest_url" type="text" value="<?=get_option('pinterest_url')?>" class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="linkedin_url">LinkedIn URL</label>
                    </th>
                    <td>
                        <input name="linkedin_url" type="text" value="<?=get_option('linkedin_url')?>" class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="github_url">GitHub URL</label>
                    </th>
                    <td>
                        <input name="github_url" type="text" value="<?=get_option('github_url')?>"
                               class="regular-text">
                    </td>
                </tr>
                </tbody>
            </table>
            <h3>Home Page Slider</h3>
            <table class="form-table">
                <tbody>
                <tr>
                    <th scope="row">
                        <label for="home_page_slider">Alias for the home page slider</label>
                    </th>
                    <td>
                        <input name="home_page_slider" type="text" value="<?=get_option('home_page_slider')?>" class="regular-text">
                    </td>
                </tr>
                </tbody>
            </table>
            <h3>Typekit</h3>
            <table class="form-table">
                <tbody>
                <tr>
                    <th scope="row">
                        <label for="typekit">Kit ID</label>
                    </th>
                    <td>
                        <input name="typekit" type="text" value="<?=get_option('typekit')?>" class="regular-text">
                    </td>
                </tr>
                </tbody>
            </table>
            <h3>SoundCloud Track ID</h3>
            <table class="form-table">
                <tbody>
                <tr>
                    <th scope="row">
                        <label for="track_id">Track ID</label>
                    </th>
                    <td>
                        <textarea rows="4" cols="50" name="track_id"  class="regular-text"><?php echo get_option( 'track_id' ) ?></textarea>
                        <p>In the textarea above input all the track id's from SoundCloud. Just input the id number no "," each id goes under the first one. </p>

                    </td>
                </tr>
                </tbody>
            </table>


            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}