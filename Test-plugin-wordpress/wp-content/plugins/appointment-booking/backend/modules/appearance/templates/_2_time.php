<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<div id="ab-booking-form" class="ab-booking-form">
<!-- Progress Tracker-->
<?php $step = 2; include '_progress_tracker.php'; ?>

<div class="ab-row-fluid">
  <span data-inputclass="input-xxlarge" data-notes="<?php echo esc_attr( __( '<b>[[SERVICE_NAME]]</b> - name of service, <b>[[STAFF_NAME]]</b> - name of staff,', 'ab' ) ) ?><br><?php echo esc_attr( __( '<b>[[CATEGORY_NAME]]</b> - name of category, <b>[[NUMBER_OF_PERSONS]]</b> - number of persons.', 'ab' ) ) ?>" data-default="<?php echo esc_attr( get_option( 'ab_appearance_text_info_second_step' ) ) ?>" class="ab-text-info-second-preview ab-row-fluid ab_editable" id="ab-text-info-second" data-type="textarea" data-pk="1"><?php echo esc_html( get_option( 'ab_appearance_text_info_second_step' ) ) ?></span>
</div>
<!-- timeslots -->
<div class="ab-columnizer-wrap" style="height:<?php echo get_option('ab_appearance_show_calendar') == 1 ? ' 662px' : '400px' ?>">
    <div class="ab-columnizer">
        <div class="ab-time-screen ab-day-columns" style="display: <?php echo get_option('ab_appearance_show_day_one_column') == 1 ? ' none' : 'block' ?>">
            <div style="margin-right: 40px;" class="ab-input-wrap ab-slot-calendar">
                <span class="ab-date-wrap">
                    <input style="display: none" class="ab-date-from-timeslots ab-formElement" type="text" value="<?php echo esc_attr( date_i18n( 'j F, Y' ) ) ?>" />
                </span>
            </div>
            <div class="ab-column col1">
                <button class="ab-available-day ab-first-child" value="">Wed, Jul 31</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>1:00 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>1:15 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>1:30 pm</button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>1:45 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>2:00 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>2:15 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>2:30 pm
                    </span>
                </button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>2:45 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>3:00 pm</button>
            </div>
            <div class="ab-column col2">
                <button class="ab-available-hour ab-first-child"><i class="ab-hour-icon"><span></span></i>3:15 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>3:30 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>3:45 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>4:00 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>4:15 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>4:30 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>4:45 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>5:00 pm</button>
                <button class="ab-available-day ab-first-child" value="">Thu, Aug 01</button>
                <button class="ab-available-hour ab-last-child"><i class="ab-hour-icon"><span></span></i>10:00 am</button>
            </div>
            <div class="ab-column col3">
                <button class="ab-available-hour ab-first-child"><i class="ab-hour-icon"><span></span></i>10:15 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:30 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:45 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:00 am</button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>11:15 am
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>11:30 am
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>11:45 am
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>12:00 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>12:15 pm
                    </span>
                </button>
                <button class="ab-available-hour ab-last-child"><i class="ab-hour-icon"><span></span></i>12:30 pm</button>
            </div>
            <div class="ab-column col4">
                <button class="ab-available-hour ab-first-child"><i class="ab-hour-icon"><span></span></i>12:45 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>1:00 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>1:15 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>3:30 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>3:45 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>4:00 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>4:15 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>4:30 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>4:45 pm</button>
                <button class="ab-available-hour ab-last-child"><i class="ab-hour-icon"><span></span></i>5:00 pm</button>
            </div>
            <div class="ab-column col5" style="display: <?php echo get_option('ab_appearance_show_calendar') == 1 ? ' none' : 'inline-block' ?>">
                <button class="ab-available-day ab-first-child" value="">Fri, Aug 02</button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>1:00 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>1:15 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>1:30 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>1:45 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>2:00 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>2:15 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>2:30 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>2:45 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>3:00 pm
                    </span>
                </button>
            </div>
            <div class="ab-column col6" style="display: <?php echo get_option('ab_appearance_show_calendar') == 1 ? ' none' : 'inline-block' ?>">
                <button class="ab-available-hour ab-first-child"><i class="ab-hour-icon"><span></span></i>3:15 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>3:30 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>3:45 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>4:00 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>4:15 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>4:30 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>4:45 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>5:00 pm</button>
                <button class="ab-available-day ab-first-child" value="">Sat, Aug 03</button>
                <button class="ab-available-hour ab-last-child"><i class="ab-hour-icon"><span></span></i>10:00 am</button>
            </div>
            <div class="ab-column col7" style="display: <?php echo get_option('ab_appearance_show_calendar') == 1 ? ' none' : 'inline-block' ?>">
                <button class="ab-available-hour ab-first-child"><i class="ab-hour-icon"><span></span></i>10:15 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:30 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:45 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:00 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:15 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:30 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:45 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>12:00 pm</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>12:15 pm</button>
                <button class="ab-available-hour ab-last-child"><i class="ab-hour-icon"><span></span></i>12:30 pm</button>
            </div>
        </div>

        <div class="ab-time-screen ab-day-one-column" style="display: <?php echo get_option('ab_appearance_show_day_one_column') == 1 ? ' block' : 'none' ?>">
            <div style="margin-right: 40px;" class="ab-input-wrap ab-slot-calendar">
                <span class="ab-date-wrap">
                    <input style="display: none" class="ab-date-from-timeslots ab-formElement" type="text" value="<?php echo esc_attr( date_i18n( 'j F, Y' ) ) ?>" />
                </span>
            </div>
            <div class="ab-column col1">
                <button class="ab-available-day ab-first-child" value="">Wed, Jul 31</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>1:00 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>1:15 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>1:30 pm</button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>1:45 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>2:00 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>2:15 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>2:30 pm
                    </span>
                </button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>2:45 pm</button>
                <button class=ab-available-hour><i class="ab-hour-icon"><span></span></i>3:00 pm</button>
            </div>
            <div class="ab-column col2">
                <button class="ab-available-day ab-first-child" value="">Thu, Aug 01</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:00 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:15 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:30 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:45 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:00 am</button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>11:15 am
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>11:30 am
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>11:45 am
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>12:00 pm
                    </span>
                </button>
            </div>
            <div class="ab-column col3">
                <button class="ab-available-day ab-first-child" value="">Fri, Aug 02</button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>1:00 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>1:15 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>1:30 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>1:45 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>2:00 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>2:15 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>2:30 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>2:45 pm
                    </span>
                </button>
                <button class="ab-available-hour<?php echo get_option('ab_appearance_show_blocked_timeslots') == 1 ? ' booked' : ' no-booked' ?>">
                    <span class="ab_label">
                        <i class="ab-hour-icon"><span></span></i>3:00 pm
                    </span>
                </button>
            </div>
            <div class="ab-column col4">
                <button class="ab-available-day ab-first-child" value="">Sat, Aug 03</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:15 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:30 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:45 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:00 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:15 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:30 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:45 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>12:00 pm</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>12:15 pm</button>
            </div>
            <div class="ab-column col5" style="display: <?php echo get_option('ab_appearance_show_calendar') == 1 ? ' none' : 'inline-block' ?>">
                <button class="ab-available-day ab-first-child" value="">Sun, Aug 04</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:15 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:30 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:45 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:00 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:15 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:30 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:45 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>12:00 pm</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>12:15 pm</button>
            </div>
            <div class="ab-column col6" style="display: <?php echo get_option('ab_appearance_show_calendar') == 1 ? ' none' : 'inline-block' ?>">
                <button class="ab-available-day ab-first-child" value="">Mon, Aug 05</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:15 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:30 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:45 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:00 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:15 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:30 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:45 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>12:00 pm</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>12:15 pm</button>
            </div>
            <div class="ab-column col7" style="display: <?php echo get_option('ab_appearance_show_calendar') == 1 ? ' none' : 'inline-block' ?>">
                <button class="ab-available-day ab-first-child" value="">Tue, Aug 06</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:15 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:30 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>10:45 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:00 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:15 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:30 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>11:45 am</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>12:00 pm</button>
                <button class="ab-available-hour"><i class="ab-hour-icon"><span></span></i>12:15 pm</button>
            </div>
        </div>
    </div>
</div>
<div class="ab-row-fluid ab-nav-steps last-row ab-clear">
    <button class="ab-time-next ab-btn ab-right ladda-button">
        <span class="ab_label">&gt;</span>
    </button>
    <button class="ab-time-prev ab-btn ab-right ladda-button">
        <span class="ab_label">&lt;</span>
    </button>
    <button class="ab-left ab-to-first-step ab-btn ladda-button">
        <span><?php _e( 'Back', 'ab' ) ?></span>
    </button>
</div>
</div>
