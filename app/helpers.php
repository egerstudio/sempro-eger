<?php

    /**
     * Helper file for flashing messages
     * @param  $title           title of message
     * @param  $message         message of message
     * @return App\Http\Flash   returns default flash message
     */
    function flash($title = null, $message = null)
    {
        $flash = app('App\Http\Flash');

        if (func_num_args() == 0) {
            return $flash;
        }

        return $flash->info($title, $message);
    }
