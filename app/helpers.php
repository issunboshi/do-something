<?php

function flash($message, $level = 'info') {
    session()->flash('status_message', $message);
    session()->flash('status_level', $level);
}
