<?php

namespace App\Http\Controllers;

use App\Mail\OrderCreated;
use App\Mail\SendSubscriptionMessage;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMailToSubscribers($email, $product)
    {
        Mail::to($email)->send(new SendSubscriptionMessage($product));
    }

    public function sendOrderMail($email, $name, $order)
    {
        Mail::to($email)->send(new OrderCreated($name, $order));
    }
}
