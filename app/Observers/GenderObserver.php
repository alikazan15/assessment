<?php

namespace App\Observers;

use App\Models\Person;

class GenderObserver
{
    /**
     * Handle the Person "created" event.
     *
     * @param  \App\Models\Person  $person
     * @return void
     */
    public function created(Person $person)
    {
        Http::post('https://api.genderize.io?name=peter',[
            'gender' =>$event->Person->toArray()
            ]);

            $person->id = 'PR-'.$person->id;
            $person->save();
    }

    /**
     * Handle the Person "updated" event.
     *
     * @param  \App\Models\Person  $person
     * @return void
     */
    public function updated(Person $person)
    {
        //
    }

    /**
     * Handle the Person "deleted" event.
     *
     * @param  \App\Models\Person  $person
     * @return void
     */
    public function deleted(Person $person)
    {
        //
    }

    /**
     * Handle the Person "restored" event.
     *
     * @param  \App\Models\Person  $person
     * @return void
     */
    public function restored(Person $person)
    {
        //
    }

    /**
     * Handle the Person "force deleted" event.
     *
     * @param  \App\Models\Person  $person
     * @return void
     */
    public function forceDeleted(Person $person)
    {
        //
    }
}
