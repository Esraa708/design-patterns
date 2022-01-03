<?php

namespace App\Domain\StructuralPatterens\AdapterPatteren\NotificationSys;

interface Notification
{
    public function send(string $title, string $message):void;
}
