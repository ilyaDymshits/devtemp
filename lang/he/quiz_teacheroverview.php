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
 * Strings for component 'quiz_overview', language 'he', branch 'MOODLE_33_STABLE'
 *
 * @package   quiz_overview
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'דוחות ציונים מתקדם';
$string['teacheroverview'] = 'דוחות ציונים מתקדם';
$string['deleteselected'] = 'מחיקת נסיונות';
$string['closeattemptsselected'] = 'סגירת נסיונות';
$string['sendmessage'] = 'שליחת מסר';
$string['finished_attempt'] = 'מענה אחד שהסתיים';
$string['regrade'] = 'Regrade';
$string['regradeall'] = 'חישוב מחדש של כל הציונים';
$string['regradealldry'] = 'צפיה מקדימה בחישוב מחדש של כל הציונים';
$string['regradealldrydo'] = 'Regrade attempts marked as needing regrading ({$a})';
$string['regradealldrydogroup'] =
    'Regrade attempts ({$a->countregradeneeded}) marked as needing regrading in group \'{$a->groupname}\'';
$string['regradealldrygroup'] = 'Dry run a full regrade for group \'{$a->groupname}\'';
$string['regradeallgroup'] = 'Full regrade for group \'{$a->groupname}\'';
$string['regradecomplete'] = 'חישוב מתן ציונים מחדש הושלם בהצלחה';
$string['regradeheader'] = 'מתן ציון מחדש';
$string['regradeselected'] = 'חישוב ציונים מחדש';
$string['regradingattemptxofy'] = 'Regrading attempt ({$a->done}/{$a->count})';
$string['show'] = 'Show / download';
$string['showattempts'] = 'Only show / download attempts';
$string['showdetailedmarks'] = 'Marks for each question';
$string['showinggraded'] = 'Showing only the attempt graded for each user.';
$string['showinggradedandungraded'] =
    'Showing graded and ungraded attempts for each user. The one attempt for each user that is graded is highlighted. The grading method for this quiz is {$a}.';
$string['showinggradedandungradednew'] = 'שיטת מתן הציונים עבור בוחן זה הוא {$a}.';
$string['studentingroup'] = '\'{$a->coursestudent}\' in group \'{$a->groupname}\'';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' in this group';

$string['closeattemptsselected'] = 'סגירת ניסיונות';
$string['buttonchangedisplayfull'] = 'תצוגה מורחבת';
$string['buttonchangedisplaybasic'] = 'תצוגה מצומצמת';
$string['sendmessage'] = 'שלח הודעה';

// Teacher overview native.
$string['average_grade'] = 'ציון ממוצע';
$string['max_grade'] = 'הציון הגבוה בכיתה';
$string['min_grade'] = 'הציון הנמוך בכיתה';
$string['max_grade_group'] = 'הציון הגבוה בקבוצה';
$string['min_grade_group'] = 'הציון הנמוך בקבוצה';
$string['question_details'] = 'פירוט שאלות';
$string['scores_distribution'] = 'התפלגות ציונים';
$string['status'] = 'סטטוס';
$string['submitted'] = 'הגישו';
$string['notsubmitted'] = 'בתהליך';
$string['notstarted'] = 'לא התחילו';
$string['attempts'] = 'מספר ניסיונות מענה';
$string['finished_attempt'] = 'ניסיונות שהסתיימו';

// Filter status.
$string['table_results'] = 'תוצאות המשימה:';
$string['all_results'] = 'כל התלמידים';
$string['filtered_results'] = 'תלמידים "{$a->label}" ({$a->value})';
$string['filtered_results_failed_by_questions'] = 'נכשלו בשאלה {$a}';
$string['filtered_results_succeeded_by_questions'] = 'הצליחו בשאלה {$a}';

$string['backreturnto'] = 'לחזור';

$string['competencies_title'] = 'קשיים עיקריים של תלמידים';
$string['questions'] = 'שאלות';
$string['competencyoverview'] = 'תצוגה מלאה והקצאת פעילויות המשך';
$string['teacheroverviewreport'] = 'חזרה לדוח ציונים';
