<?php

namespace App\Http;

class Flash
{

    /**
     * Function for setting up a message and flashing to the session
     * @param  [string] $title   title of message
     * @param  [string] $message message of message
     * @param  [string] $state   state of message rougly mirroring boostrap 3 states of messages
     *                           available: success, info, warning, error 
     * @param  [string] $type    flash_message for auto-closing messages, 
     *                           flash_message_persistent for messages that need confirmation
     * @return void
     */
    public function create($title, $message, $state, $type = 'flash_message')
    {
        session()->flash($type, [
                'title' => $title,
                'message' => $message,
                'state' => $state,
                'type' => $type,
            ]);
    }

    /**
     * Wrapper for creating a success message
     * @param  [string] $title   	title of message
     * @param  [string] $message 	message of message
     * @return $this 				with a message of success set up
     */
    public function success($title, $message)
    {
        return $this->create($title, $message, 'success');
    }

    /**
     * Wrapper for creating a info message
     * @param  [string] $title   	title of message
     * @param  [string] $message 	message of message
     * @return $this 				with a message of info set up
     */
    public function info($title, $message)
    {
        return $this->create($title, $message, 'info');
    }

    /**
     * Wrapper for creating an error message
     * @param  [string] $title   	title of message
     * @param  [string] $message 	message of message
     * @return $this 				with a message of error set up
     */
    public function error($title, $message)
    {
        return $this->create($title, $message, 'error');
    }

    /**
     * Wrapper for creating a persistent message, defaults with success-state
     * @param  [string] $title   	title of message
     * @param  [string] $message 	message of message
     * @param  [string] $state   	state of message rougly mirroring boostrap 3 states of messages
     *                            	available: success, info, warning, error 
     * @return $this 				with a message of persistent success set up
     */
    public function persistent($title, $message, $state = 'success')
    {
        return $this->create($title, $message, $state, 'flash_message_persistent');
    }
}
