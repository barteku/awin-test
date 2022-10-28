<?php
namespace App\Services;

use App\Entity\StaffMember;
use App\Entity\CoffeeBreakPreference;

class SlackNotifier
{
    /**
     * @param StaffMember $staffMember
     * @param CoffeeBreakPreference $preference
     * @return bool
     */
    public function notifyStaffMember(StaffMember $staffMember, CoffeeBreakPreference $preference)
    {
        /**
         * Imagine that this function:
         * Sends a notification to the user on Slack that their coffee break refreshment today will be $preference
         * returns true of false status of notification sent
         */

        if (empty($staffMember->getSlackIdentifier())) {
            throw new \RuntimeException("Cannot send notification - no SlackIdentifier");
        }

        return true;
    }
}
