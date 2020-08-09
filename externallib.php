<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * External interface library for customfields component
 *
 * @package   quiz_teacheroverview
 * @copyright 2020 Devlion <info@devlion.co>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

require_once $CFG->dirroot . '/mod/quiz/report/teacheroverview/locallib.php';

/**
 * Class quiz_teacheroverview_external
 *
 * @copyright 2020 Devlion <info@devlion.co>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class quiz_teacheroverview_external extends external_api {

    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function get_init_params_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'courseid'),
            )
        );
    }

    /**
     * Returns result
     * @return result
     */
    public static function get_init_params_returns() {
        return new external_single_structure(
            array(
                'params' => new external_value(PARAM_RAW, 'json params'),
            )
        );
    }

    /**
     * Get courses
     * @return array
     */
    public static function get_init_params($courseid) {
        global $PAGE;

        $context = context_course::instance($courseid);
        $PAGE->set_context($context);

        $result = array();

        $params = quiz_teacheroverview_get_init_params($courseid);

        if (!empty($params)) {
            $result['params'] = json_encode($params);
        } else {
            $result['params'] = json_encode($params);
        }

        return $result;
    }

}
