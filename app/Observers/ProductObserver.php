<?php

namespace App\Observers;

use App\Http\Controllers\MailController;
use App\Models\Product;
use App\Models\Subscription;

class ProductObserver
{
    public function updating(Product $product)
    {
        $oldCount = $product->getOriginal('count');
        if($oldCount == 0 && $product->count > 0) {
            $this->subscriptions($product);
        }
    }

    private function subscriptions(Product $product)
    {
        $subscriptions = Subscription::active()->productId($product->id)->get();
        foreach ($subscriptions as $subscription) {
            $mail = new MailController();
            $mail->sendMailToSubscribers($subscription->email, $product);
            $subscription->status = Subscription::IS_INACTIVE;
            $subscription->save();
        }
    }
}
