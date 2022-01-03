<?php

namespace App\Http\Controllers;

use App\Domain\StructuralPatterens\AdapterPatteren\NotificationSys\EmailNotification;
use App\Domain\StructuralPatterens\AdapterPatteren\NotificationSys\Notification;
use App\Domain\StructuralPatterens\AdapterPatteren\NotificationSys\SlackApi;
use App\Domain\StructuralPatterens\AdapterPatteren\NotificationSys\SlackNotification;
use Illuminate\Http\Request;

class NotificationSysController extends Controller
{   
    public function sendNotification(Request $request): void
    {
        echo "Client code is designed correctly and works with email notifications:\n";
        $notification = new EmailNotification('esraa.abdelaziz141@gmail.com');
        $this->clientCode($notification);
        echo "\n\n";
        $slackApi = new SlackApi("example.com", "XXXXXXXX");
        $notification = new SlackNotification($slackApi, "Example.com Developers");
        $this->clientCode($notification);
        echo "The same c;lient code can work with other classes via adapter:\n";
    }
    public function clientCode(Notification $notification): void
    {
        echo $notification->send(
            "Website is down!",
            "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
                "Our website is not responding. Call admins and bring it up!"
        );
    }
}
