<?php
namespace SocialiteProviders\StockTwits;

use SocialiteProviders\Manager\SocialiteWasCalled;

class StockTwitsExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('stocktwits', __NAMESPACE__.'\Provider');
    }
}
