<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<form method="post" action="<?php echo esc_url( add_query_arg( 'type', '_google_calendar' ) ) ?>" enctype="multipart/form-data" class="ab-settings-form">

    <?php if (isset($message_gc)) : ?>
        <div id="message" style="margin: 0px!important;" class="updated below-h2">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p><?php echo $message_gc ?></p>
        </div>
    <?php endif ?>

    <table class="form-horizontal">
        <tr>
            <td colspan="3">
                <fieldset class="ab-instruction">
                    <legend><?php _e( 'Instructions', 'ab' ) ?></legend>
                    <div>
                        <div style="margin-bottom: 10px">
                            <?php _e( 'To find your client ID and client secret, do the following:', 'ab' ) ?>
                        </div>
                        <ol>
                            <li><?php _e( 'Go to the <a href="https://console.developers.google.com/" target="_blank">Google Developers Console</a>.', 'ab' ) ?></li>
                            <li><?php _e( 'Select a project, or create a new one.', 'ab' ) ?></li>
                            <li><?php _e( 'In the sidebar on the left, expand <b>APIs & auth</b>. Next, click <b>APIs</b>. In the list of APIs, make sure the status is <b>ON</b> for the Google Calendar API.', 'ab' ) ?></li>
                            <li><?php _e( 'In the sidebar on the left, select <b>Credentials</b>.', 'ab' ) ?></li>
                            <li><?php _e( 'Create your project\'s OAuth 2.0 credentials by clicking <b>Create new Client ID</b>, selecting <b>Web application</b>, and providing the information needed to create the credentials. For <b>AUTHORIZED REDIRECT URIS</b> enter the <b>Redirect URI</b> found below on this page.', 'ab' ) ?></li>
                            <li><?php _e( 'Look for the <b>Client ID</b> and <b>Client secret</b> in the table associated with each of your credentials.', 'ab' ) ?></li>
                        </ol>
                    </div>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="ab-payments-title"><?php _e( 'Google Calendar', 'ab' ) ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <label for="ab_settings_google_client_id"><?php _e( 'Client ID', 'ab' ) ?></label>
            </td>
            <td>
                <input id="ab_settings_google_client_id" class="form-control" type="text" name="ab_settings_google_client_id" value="<?php echo get_option( 'ab_settings_google_client_id' ) ?>" />
            </td>
            <td>
                <img
                    src="<?php echo plugins_url( 'backend/resources/images/help.png', AB_PATH . '/main.php' ) ?>"
                    alt=""
                    class="ab-popover"
                    data-content="<?php echo esc_attr( __( 'The client ID obtained from the Developers Console', 'ab' ) ) ?>"
                    />
            </td>
        </tr>
        <tr>
            <td>
                <label for="ab_settings_google_client_secret"><?php _e( 'Client secret', 'ab' ) ?></label>
            </td>
            <td>
                <input id="ab_settings_google_client_secret" class="form-control" type="text" name="ab_settings_google_client_secret" value="<?php echo get_option( 'ab_settings_google_client_secret' ) ?>" />
            </td>
            <td>
                <img
                    src="<?php echo plugins_url( 'backend/resources/images/help.png', AB_PATH . '/main.php' ) ?>"
                    alt=""
                    class="ab-popover"
                    data-content="<?php echo esc_attr( __( 'The client secret obtained from the Developers Console', 'ab' ) ) ?>"
                    />
            </td>
        </tr>
        <tr>
            <td>
                <label for="ab_redirect_uri"><?php _e( 'Redirect URI', 'ab' ) ?></label>
            </td>
            <td>
                <input id="ab_redirect_uri" class="form-control" type="text" readonly value="<?php echo AB_Google::generateRedirectURI() ?>" onclick="this.select();" style="cursor: pointer;" />
            </td>
            <td>
                <img
                    src="<?php echo plugins_url( 'backend/resources/images/help.png', AB_PATH . '/main.php' ) ?>"
                    alt=""
                    class="ab-popover"
                    data-content="<?php _e('Enter this URL as a redirect URI in the Developers Console', 'ab') ?>"
                    />
            </td>
        </tr>
        <tr>
            <td>
                <label for="ab_settings_google_two_way_sync"><?php _e( '2 way sync', 'ab' ) ?></label>
            </td>
            <td>
                <select id="ab_settings_google_two_way_sync" class="form-control" name="ab_settings_google_two_way_sync">
                    <?php foreach ( array( __( 'Disabled', 'ab' ) => '0', __( 'Enabled', 'ab' ) => '1' ) as $text => $mode ): ?>
                        <option value="<?php echo $mode ?>" <?php selected( get_option( 'ab_settings_google_two_way_sync' ), $mode ) ?> ><?php echo $text ?></option>
                    <?php endforeach ?>
                </select>
            </td>
            <td>
                <img
                    src="<?php echo esc_attr( plugins_url( 'backend/resources/images/help.png', AB_PATH . '/main.php' ) ) ?>"
                    alt=""
                    class="ab-popover"
                    data-content="<?php echo esc_attr( __( 'By default Bookly pushes new appointments and any further changes to Google Calendar. If you enable this option then Bookly will fetch events from Google Calendar and remove corresponding time slots before displaying the second step of the booking form (this may lead to a delay when users click Next at the first step).', 'ab' ) ) ?>"
                    />
            </td>
        </tr>
        <tr>
            <td>
                <label for="ab_settings_google_limit_events"><?php _e( 'Limit number of fetched events', 'ab' ) ?></label>
            </td>
            <td>
                <select id="ab_settings_google_limit_events" class="form-control" name="ab_settings_google_limit_events">
                    <?php foreach ( array( __( 'Disabled', 'ab' ) => '0', 25 => 25, 50 => 50, 100 => 100, 250 => 250, 500 => 500, 1000 => 1000, 2500 => 2500 ) as $text => $limit ): ?>
                        <option value="<?php echo $limit ?>" <?php selected( get_option( 'ab_settings_google_limit_events' ), $limit ) ?> ><?php echo $text ?></option>
                    <?php endforeach ?>
                </select>
            </td>
            <td>
                <img
                    src="<?php echo esc_attr( plugins_url( 'backend/resources/images/help.png', AB_PATH . '/main.php' ) ) ?>"
                    alt=""
                    class="ab-popover"
                    data-content="<?php echo esc_attr( __( 'If there is a lot of events in Google Calendar sometimes this leads to a lack of memory in PHP when Bookly tries to fetch all events. You can limit the number of fetched events here. This only works when 2 way sync is enabled.', 'ab' ) ) ?>"
                    />
            </td>
        </tr>
        <tr>
            <td>
                <label for="ab_settings_google_event_title"><?php _e( 'Template for event title', 'ab' ) ?></label>
            </td>
            <td>
                <input id="ab_settings_google_event_title" class="form-control" type="text" name="ab_settings_google_event_title" value="<?php echo esc_attr( get_option( 'ab_settings_google_event_title', '[[SERVICE_NAME]]' ) ) ?>" >
            </td>
            <td>
                <img
                    src="<?php echo esc_attr( plugins_url( 'backend/resources/images/help.png', AB_PATH . '/main.php' ) ) ?>"
                    alt=""
                    class="ab-popover"
                    data-content="<?php echo esc_attr( __( 'Configure what information should be places in the title of Google Calendar event. Available codes are [[SERVICE_NAME]], [[STAFF_NAME]] and [[CLIENT_NAMES]].', 'ab' ) ) ?>"
                    />
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" value="<?php echo esc_attr( __( 'Save', 'ab' ) ) ?>" class="btn btn-info ab-update-button" />
                <button class="ab-reset-form" type="reset"><?php _e( 'Reset', 'ab' ) ?></button>
            </td>
            <td></td>
        </tr>
    </table>
</form>

