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
 * Plugin strings are defined here.
 *
 * @package     tool_trigger
 * @category    string
 * @copyright   Matt Porritt <mattp@catalyst-au.net>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Event Trigger';
$string['pluginname_help'] = 'Event Triggering for Moodle';

$string['action'] = 'Action';
$string['active'] = 'Active';
$string['addworkflow'] = 'Add new trigger workflow';
$string['areatomonitor'] = 'Area to monitor';
$string['areatomonitor_help'] = 'The Moodle area that contains the event to trigger workflow on.';
$string['badsteptype'] = 'Incorrect step type';
$string['badstepclass'] = 'Incorrect step class name';
$string['core'] = 'Core';
$string['deleterule'] = 'Delete rule';
$string['deletestep'] = 'Delete step';
$string['description'] = 'Description';
$string['draft'] = 'Draft';
$string['draftmode'] = 'Draft mode';
$string['draftmode_help'] = 'Use draft mode to test workflow with firing triggers.';
$string['duplicaterule'] = 'Duplicate rule';
$string['duplicatedworkflowname'] = '{$a} (copy)';
$string['editrule'] = 'Edit rule';
$string['editsettings'] = 'Workflow settings';
$string['editstep'] = 'Edit step';
$string['editworkflow'] = 'Edit trigger workflow';
$string['emailsubject'] = 'Subject';
$string['emailsubject_help'] = 'The text to use in the subject of the e-mail';
$string['emailto'] = 'To';
$string['emailto_help'] = 'Who to send the email to';
$string['emailcontent'] = 'Content';
$string['emailcontent_help'] = 'The content to use in the email';
$string['emailactionstepname'] = 'Email';
$string['emailactionstepdesc'] = 'A step to allow an e-mail to be sent';
$string['event'] = 'Event';
$string['eventtomonitor'] = 'Event to monitor';
$string['eventtomonitor_help'] = 'The Moodle event to trigger workflow on.';
$string['erroreditstep'] = 'Something went wrong while attempting to save the workflow step. Please try again.';
$string['errorsavingworkflow'] = 'Something went wrong while attempting to save the workflow. Please try again.';
$string['filter'] = 'Filter';
$string['httpostactionurl'] = 'URL';
$string['httpostactionurl_help'] = 'The URL to post the data to.';
$string['httpostactionheaders'] = 'Headers';
$string['httpostactionheaders_help'] = 'The requests headers to send.';
$string['httpostactionparams'] = 'Parameters';
$string['httpostactionparams_help'] = 'The parameters to send with the request.';
$string['httppostactionstepname'] = 'HTTP Post';
$string['httppostactionstepdesc'] = 'A step to allow Moodle workflows to send data to a HTTP/S endpoint.';
$string['lasttriggered'] = 'Last triggered';
$string['lookup'] = 'Lookup';
$string['manage'] = 'Manage';
$string['manageworkflow'] = 'Manage workflow';
$string['messageprovider:tool_trigger'] = 'Event trigger notifications';
$string['modaltitle'] = 'Add workflow step.';
$string['movestepup'] = 'Move step towards start';
$string['movestepdown'] = 'Move step towards end';
$string['name'] = 'Name';
$string['numsteps'] = 'Steps';
$string['outputprefix'] = 'Prefix for added fields';
$string['privacy:eventdata_desc'] = 'Data about events logged by the Moodle events API.';
$string['stepclass'] = 'Step';
$string['stepclass_help'] = 'Choose the step to apply.';
$string['stepdescription'] = 'Step description';
$string['stepdescription_help'] = 'A meaningful description for this step.';
$string['stepmodalbutton'] = 'Add workflow step';
$string['stepname'] = 'Step name';
$string['stepname_help'] = 'The name of this step.';
$string['steprequired'] = 'The workflow must have at least one step.';
$string['steptype'] = 'Step type';
$string['steptype_help'] = 'The type of step to apply.';
$string['step_filter_fail_desc'] = 'A step that always fails. (Mostly useful for testing.)';
$string['step_filter_fail_name'] = 'Fail';
$string['step_lookup_course:privacy:coursedata_desc'] = 'Data about courses, including id, course name, start and end dates, etc.';
$string['step_lookup_course_desc'] = 'This step looks up data about a course.';
$string['step_lookup_course_name'] = 'Course lookup';
$string['step_lookup_course_courseidfield'] = 'Course id data field';
$string['step_lookup_user:privacy:userdata_desc'] = 'Personal data about users, such as usernames, names, email addresses, etc.';
$string['step_lookup_user_desc'] = 'This step looks up data about a user.';
$string['step_lookup_user_name'] = 'User lookup';
$string['step_lookup_user_useridfield'] = 'User id data field';
$string['step_action_email:privacy:desc'] = 'This plugin may be configured to send emails containing data from Moodle. It does not store data locally.';
$string['step_action_httppost:privacy:desc'] = 'This plugin may be configured to send HTTP requests to external addresses, containing data from Moodle. It does not store data locally.';
$string['step_action_logdump_desc'] = 'This step prints the event and workflow steps data to the cron log. (Mostly useful for testing.)';
$string['step_action_logdump_name'] = 'Cron log';
$string['taskcleanup'] = 'Delete old processed events';
$string['taskprocessworkflows'] = 'Process workflows scheduled task.';
$string['timetocleanup'] = 'Time to cleanup old events';
$string['workflowactive'] = 'Workflow active';
$string['workflowactive_help'] = 'Only active worklows will be processed when an event is triggered.';
$string['workflowcopysuccess'] = 'Workflow successfully duplicated';
$string['workflowdeleteareyousure'] = 'Are you sure you want to delete the workflow "{$a}"?';
$string['workflowdeletesuccess'] = 'Workflow successfully deleted';
$string['workflowdescription'] = 'Description';
$string['workflowdescription_help'] = 'A short description of this workflows purpose.';
$string['workflowname'] = 'Name';
$string['workflowname_help'] = 'The human readable name for this workflow.';
$string['workflowoverview'] = 'Workflow overview';
