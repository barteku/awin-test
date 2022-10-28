<?php


namespace App\Manager;


class CoffeeBreakPreferenceManager extends ModelManager
{

    public function getPreferencesForToday($team = 'developers'){
        return $this->getRepository()->getPreferencesForToday($team);
    }


    public function getPreferencesForTodayForUser($userId){
        return $this->getRepository()->getPreferencesForTodayForUser($userId);
    }


}
