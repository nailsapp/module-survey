<?php

use Nails\Survey\Constants;

/**
 * This config file defines email types for this module.
 *
 * @package     Nails
 * @subpackage  module-survey
 * @category    Config
 * @author      Nails Dev Team
 * @link
 */

$config['email_types'] = [
    (object) [
        'slug'            => 'survey_notification',
        'name'            => 'Survey: Submission Notification',
        'description'     => 'Email sent when a survey response is submitted',
        'template_header' => '',
        'template_body'   => 'survey/email/survey_notification',
        'template_footer' => '',
        'default_subject' => 'Response to {{survey.label}} survey has been received',
        'can_unsubscribe' => true,
        'factory'         => Constants::MODULE_SLUG . '::EmailNotification',
    ],
    (object) [
        'slug'            => 'survey_save',
        'name'            => 'Survey: Submission Saved',
        'description'     => 'Email sent when a survey response is saved',
        'template_header' => '',
        'template_body'   => 'survey/email/survey_save',
        'template_footer' => '',
        'default_subject' => 'Response to {{survey.label}} survey has been saved',
        'can_unsubscribe' => false,
        'factory'         => Constants::MODULE_SLUG . '::EmailNotification',
    ],
];
