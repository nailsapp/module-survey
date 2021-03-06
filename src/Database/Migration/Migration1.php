<?php

/**
 * Migration:   1
 * Started:     22/04/2016
 * Finalised:   22/04/2016
 *
 * @package     Nails
 * @subpackage  module-survey
 * @category    Database Migration
 * @author      Nails Dev Team
 * @link
 */

namespace Nails\Survey\Database\Migration;

use Nails\Common\Console\Migrate\Base;

class Migration1 extends Base
{
    /**
     * Execute the migration
     * @return Void
     */
    public function execute()
    {
        $this->query("ALTER TABLE `{{NAILS_DB_PREFIX}}survey_survey` DROP `has_captcha`;");
        $this->query("ALTER TABLE `{{NAILS_DB_PREFIX}}survey_response` DROP `name`;");
        $this->query("ALTER TABLE `{{NAILS_DB_PREFIX}}survey_response` DROP `email`;");
    }
}
