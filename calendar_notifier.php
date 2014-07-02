<?php

/**
 * Calendar notifier
 *
 * This plugin add browser notification to calendar
 *
 * @version 1.0
 * @author Gilles FELIX
 * @url
 */
class calendar_notifier extends rcube_plugin
{
    private $rc;

    /**
     * Plugin initialization.
     */
    function init()
    {
        $this->rc = rcmail::get_instance();

        $this->require_plugin('calendar');

        if ($this->rc->output->type == 'html' && empty($_REQUEST['_framed'])) {
            $this->add_texts('localization/');
            $this->rc->output->add_label('calendar_notifier.title', 'calendar_notifier.body');
            $this->include_script('calendar_notifier.js');
        }
    }
}
