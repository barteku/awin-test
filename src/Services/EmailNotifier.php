<?php


namespace App\Services;


use Awin\Tools\CoffeeBreak\Entity\CoffeeBreakPreference;
use Awin\Tools\CoffeeBreak\Entity\StaffMember;
use http\Exception\RuntimeException;

class EmailNotifier
{

    /**
     * @param StaffMember $staffMember
     * @param CoffeeBreakPreference $preference
     * @return bool
     */
    public function notifyStaffMember(StaffMember $staffMember, CoffeeBreakPreference $preference)
    {
        if (empty($staffMember->getEmail())) {
            throw new RuntimeException("Cannot send notification - no Email");
        }


        /**
         * we send notification here
         * we can use symfony mailer for it
         */


        return true;
    }


}
