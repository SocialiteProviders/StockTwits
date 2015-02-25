<?php
namespace SocialiteProviders\StockTwits;

use SocialiteProviders\Manager\SocialiteWasCalled;

class StockTwitsExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'stocktwits', __NAMESPACE__.'\Provider'
        );
    }
}
